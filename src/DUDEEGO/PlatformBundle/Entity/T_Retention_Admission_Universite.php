<?php

namespace DUDEEGO\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * T_Retention_Admission_Universite
 *
 * @ORM\Table(name="t__retention__admission__universite")
 * @ORM\Entity(repositoryClass="DUDEEGO\PlatformBundle\Repository\T_Retention_Admission_UniversiteRepository")
 */
class T_Retention_Admission_Universite
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
     * @ORM\Column(name="tempsplein", type="string", length=255)
     */
    private $tempsplein;

    /**
     * @var string
     *
     * @ORM\Column(name="tempspartiel", type="string", length=255)
     */
    private $tempspartiel;

    /**
     * @var string
     *
     * @ORM\Column(name="scoretempsplein", type="decimal", precision=10, scale=2)
     */
    private $scoretempsplein;

    /**
     * @var string
     *
     * @ORM\Column(name="scoretempspartiel", type="decimal", precision=10, scale=2)
     */
    private $scoretempspartiel;

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
     * @return T_Retention_Admission_Universite
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
     * @return T_Retention_Admission_Universite
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
     * Set tempsplein
     *
     * @param string $tempsplein
     *
     * @return T_Retention_Admission_Universite
     */
    public function setTempsplein($tempsplein)
    {
        $this->tempsplein = $tempsplein;

        return $this;
    }

    /**
     * Get tempsplein
     *
     * @return string
     */
    public function getTempsplein()
    {
        return $this->tempsplein;
    }

    /**
     * Set tempspartiel
     *
     * @param string $tempspartiel
     *
     * @return T_Retention_Admission_Universite
     */
    public function setTempspartiel($tempspartiel)
    {
        $this->tempspartiel = $tempspartiel;

        return $this;
    }

    /**
     * Get tempspartiel
     *
     * @return string
     */
    public function getTempspartiel()
    {
        return $this->tempspartiel;
    }

    /**
     * Set scoretempsplein
     *
     * @param string $scoretempsplein
     *
     * @return T_Retention_Admission_Universite
     */
    public function setScoretempsplein($scoretempsplein)
    {
        $this->scoretempsplein = $scoretempsplein;

        return $this;
    }

    /**
     * Get scoretempsplein
     *
     * @return string
     */
    public function getScoretempsplein()
    {
        return $this->scoretempsplein;
    }

    /**
     * Set scoretempspartiel
     *
     * @param string $scoretempspartiel
     *
     * @return T_Retention_Admission_Universite
     */
    public function setScoretempspartiel($scoretempspartiel)
    {
        $this->scoretempspartiel = $scoretempspartiel;

        return $this;
    }

    /**
     * Get scoretempspartiel
     *
     * @return string
     */
    public function getScoretempspartiel()
    {
        return $this->scoretempspartiel;
    }
}
