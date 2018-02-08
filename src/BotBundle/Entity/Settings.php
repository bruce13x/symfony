<?php

namespace BotBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Settings
 *
 * @ORM\Table(name="settings")
 * @ORM\Entity(repositoryClass="BotBundle\Repository\SettingsRepository")
 */
class Settings
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="srategy", type="string", length=20)
     */
    private $srategy;

    /**
     * @var string
     *
     * @ORM\Column(name="pair", type="string", length=20)
     */
    private $pair;

    /**
     * @var int
     *
     * @ORM\Column(name="depousage", type="integer")
     */
    private $depousage;

    /**
     * @var int
     *
     * @ORM\Column(name="firstordergap", type="integer")
     */
    private $firstordergap;

    /**
     * @var int
     *
     * @ORM\Column(name="costcoverage", type="integer")
     */
    private $costcoverage;

    /**
     * @var int
     *
     * @ORM\Column(name="ordercount", type="integer")
     */
    private $ordercount;

    /**
     * @var int
     *
     * @ORM\Column(name="martingale", type="integer")
     */
    private $martingale;

    /**
     * @var int
     *
     * @ORM\Column(name="profit", type="integer")
     */
    private $profit;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set srategy
     *
     * @param string $srategy
     *
     * @return Settings
     */
    public function setSrategy($srategy)
    {
        $this->srategy = $srategy;

        return $this;
    }

    /**
     * Get srategy
     *
     * @return string
     */
    public function getSrategy()
    {
        return $this->srategy;
    }

    /**
     * Set pair
     *
     * @param string $pair
     *
     * @return Settings
     */
    public function setPair($pair)
    {
        $this->pair = $pair;

        return $this;
    }

    /**
     * Get pair
     *
     * @return string
     */
    public function getPair()
    {
        return $this->pair;
    }

    /**
     * Set depousage
     *
     * @param integer $depousage
     *
     * @return Settings
     */
    public function setDepousage($depousage)
    {
        $this->depousage = $depousage;

        return $this;
    }

    /**
     * Get depousage
     *
     * @return int
     */
    public function getDepousage()
    {
        return $this->depousage;
    }

    /**
     * Set firstordergap
     *
     * @param integer $firstordergap
     *
     * @return Settings
     */
    public function setFirstordergap($firstordergap)
    {
        $this->firstordergap = $firstordergap;

        return $this;
    }

    /**
     * Get firstordergap
     *
     * @return int
     */
    public function getFirstordergap()
    {
        return $this->firstordergap;
    }

    /**
     * Set costcoverage
     *
     * @param integer $costcoverage
     *
     * @return Settings
     */
    public function setCostcoverage($costcoverage)
    {
        $this->costcoverage = $costcoverage;

        return $this;
    }

    /**
     * Get costcoverage
     *
     * @return int
     */
    public function getCostcoverage()
    {
        return $this->costcoverage;
    }

    /**
     * Set ordercount
     *
     * @param integer $ordercount
     *
     * @return Settings
     */
    public function setOrdercount($ordercount)
    {
        $this->ordercount = $ordercount;

        return $this;
    }

    /**
     * Get ordercount
     *
     * @return int
     */
    public function getOrdercount()
    {
        return $this->ordercount;
    }

    /**
     * Set martingale
     *
     * @param integer $martingale
     *
     * @return Settings
     */
    public function setMartingale($martingale)
    {
        $this->martingale = $martingale;

        return $this;
    }

    /**
     * Get martingale
     *
     * @return int
     */
    public function getMartingale()
    {
        return $this->martingale;
    }

    /**
     * Set profit
     *
     * @param integer $profit
     *
     * @return Settings
     */
    public function setProfit($profit)
    {
        $this->profit = $profit;

        return $this;
    }

    /**
     * Get profit
     *
     * @return int
     */
    public function getProfit()
    {
        return $this->profit;
    }
}

