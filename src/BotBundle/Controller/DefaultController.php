<?php

namespace BotBundle\Controller;

use BotBundle\Entity\Settings;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('@Bot/Default/index.html.twig');
    }

    /**
     * @Route("/settings", name="settings")
     */
    public function setSettingsAction(Request $request)
    {
        $settings = new Settings();
//        $settings->setSrategy('long');
//        $settings->setPair('btc/usdt');
//        $settings->setDepousage(100);
//        $settings->setFirstordergap(0);
//        $settings->setCostcoverage(11);
//        $settings->setOrdercount(10);
//        $settings->setMartingale(10);
//        $settings->setProfit(1);

        $form = $this->createFormBuilder($settings)
            ->add('srategy', TextType::class)
            ->add('pair', TextType::class)
            ->add('depousage', TextType::class)
            ->add('firstordergap', TextType::class)
            ->add('costcoverage', TextType::class)
            ->add('ordercount', TextType::class)
            ->add('martingale', TextType::class)
            ->add('profit', TextType::class)
            ->add('save', SubmitType::class)
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $settings = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($settings);
            $em->flush();
            return $this->redirectToRoute('settings');
        }

        return $this->render('@Bot/Default/settingsform.html.twig', array('form' => $form->createView(),));

    }
}
