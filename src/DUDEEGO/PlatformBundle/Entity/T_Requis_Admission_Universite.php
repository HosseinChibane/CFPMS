<?php

namespace DUDEEGO\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * T_Requis_Admission_Universite
 *
 * @ORM\Table(name="t__requis__admission__universite")
 * @ORM\Entity(repositoryClass="DUDEEGO\PlatformBundle\Repository\T_Requis_Admission_UniversiteRepository")
 */
class T_Requis_Admission_Universite
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
     * @ORM\Column(name="ACT", type="string", length=255)
     */
    private $ACT;

    /**
     * @var string
     *
     * @ORM\Column(name="scoreACT", type="decimal", precision=10, scale=2)
     */
    private $scoreACT;

        /**
     * @var string
     *
     * @ORM\Column(name="SAT", type="string", length=255)
     */
    private $SAT;

    /**
     * @var string
     *
     * @ORM\Column(name="scoreSAT", type="decimal", precision=10, scale=2)
     */
    private $scoreSAT;



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
     * Set type
     *
     * @param string $type
     *
     * @return T_Requis_Admission_Universite
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set score
     *
     * @param string $score
     *
     * @return T_Requis_Admission_Universite
     */
    public function setScore($score)
    {
        $this->score = $score;

        return $this;
    }

    /**
     * Get score
     *
     * @return string
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * Set aCT
     *
     * @param string $aCT
     *
     * @return T_Requis_Admission_Universite
     */
    public function setACT($aCT)
    {
        $this->ACT = $aCT;

        return $this;
    }

    /**
     * Get aCT
     *
     * @return string
     */
    public function getACT()
    {
        return $this->ACT;
    }

    /**
     * Set scoreACT
     *
     * @param string $scoreACT
     *
     * @return T_Requis_Admission_Universite
     */
    public function setScoreACT($scoreACT)
    {
        $this->scoreACT = $scoreACT;

        return $this;
    }

    /**
     * Get scoreACT
     *
     * @return string
     */
    public function getScoreACT()
    {
        return $this->scoreACT;
    }

    /**
     * Set sAT
     *
     * @param string $sAT
     *
     * @return T_Requis_Admission_Universite
     */
    public function setSAT($sAT)
    {
        $this->SAT = $sAT;

        return $this;
    }

    /**
     * Get sAT
     *
     * @return string
     */
    public function getSAT()
    {
        return $this->SAT;
    }

    /**
     * Set scoreSAT
     *
     * @param string $scoreSAT
     *
     * @return T_Requis_Admission_Universite
     */
    public function setScoreSAT($scoreSAT)
    {
        $this->scoreSAT = $scoreSAT;

        return $this;
    }

    /**
     * Get scoreSAT
     *
     * @return string
     */
    public function getScoreSAT()
    {
        return $this->scoreSAT;
    }
}
