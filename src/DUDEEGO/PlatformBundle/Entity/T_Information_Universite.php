<?php

namespace DUDEEGO\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * T_Information_Universite
 *
 * @ORM\Table(name="t__information__universite")
 * @ORM\Entity(repositoryClass="DUDEEGO\PlatformBundle\Repository\T_Information_UniversiteRepository")
 */
class T_Information_Universite
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
     * @ORM\Column(name="programme", type="string", length=255)
     */
    private $programme;

    /**
     * @var string
     *
     * @ORM\Column(name="appprentissage", type="string", length=255)
     */
    private $appprentissage;

    /**
     * @var string
     *
     * @ORM\Column(name="orientation", type="string", length=255)
     */
    private $orientation;

    /**
     * @var string
     *
     * @ORM\Column(name="emploi", type="string", length=255)
     */
    private $emploi;


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
     * Set programme
     *
     * @param string $programme
     *
     * @return T_Information_Universite
     */
    public function setProgramme($programme)
    {
        $this->programme = $programme;

        return $this;
    }

    /**
     * Get programme
     *
     * @return string
     */
    public function getProgramme()
    {
        return $this->programme;
    }

    /**
     * Set appprentissage
     *
     * @param string $appprentissage
     *
     * @return T_Information_Universite
     */
    public function setAppprentissage($appprentissage)
    {
        $this->appprentissage = $appprentissage;

        return $this;
    }

    /**
     * Get appprentissage
     *
     * @return string
     */
    public function getAppprentissage()
    {
        return $this->appprentissage;
    }

    /**
     * Set orientation
     *
     * @param string $orientation
     *
     * @return T_Information_Universite
     */
    public function setOrientation($orientation)
    {
        $this->orientation = $orientation;

        return $this;
    }

    /**
     * Get orientation
     *
     * @return string
     */
    public function getOrientation()
    {
        return $this->orientation;
    }

    /**
     * Set emploi
     *
     * @param string $emploi
     *
     * @return T_Information_Universite
     */
    public function setEmploi($emploi)
    {
        $this->emploi = $emploi;

        return $this;
    }

    /**
     * Get emploi
     *
     * @return string
     */
    public function getEmploi()
    {
        return $this->emploi;
    }
}

