<?php

namespace DUDEEGO\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EA_Demande_Inscription
 *
 * @ORM\Table(name="e_a__demande__inscription")
 * @ORM\Entity(repositoryClass="DUDEEGO\PlatformBundle\Repository\EA_Demande_InscriptionRepository")
 */
class EA_Demande_Inscription
{
    /**
   * @ORM\ManyToOne(targetEntity="DUDEEGO\PlatformBundle\Entity\EA_Physique")
   * @ORM\JoinColumn(nullable=false)
   */
    private $physique;

    /**
   * @ORM\OneToOne(targetEntity="DUDEEGO\PlatformBundle\Entity\EA_Type_Inscription", cascade={"persist"})
   */
    private $typeinscription;

    /**
   * @ORM\ManyToOne(targetEntity="DUDEEGO\PlatformBundle\Entity\EA_Document_Inscription")
   * @ORM\JoinColumn(nullable=false)
   */
    private $documentinscription;

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
     * @ORM\Column(name="etat", type="string", length=255)
     */
    private $etat;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="creation", type="datetimetz")
     */
    private $creation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="miseajour", type="datetimetz")
     */
    private $miseajour;

    /**
     * @var bool
     *
     * @ORM\Column(name="verifier", type="boolean")
     */
    private $verifier;


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
     * Set etat
     *
     * @param string $etat
     *
     * @return EA_Demande_Inscription
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return string
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set creation
     *
     * @param \DateTime $creation
     *
     * @return EA_Demande_Inscription
     */
    public function setCreation($creation)
    {
        $this->creation = $creation;

        return $this;
    }

    /**
     * Get creation
     *
     * @return \DateTime
     */
    public function getCreation()
    {
        return $this->creation;
    }

    /**
     * Set miseajour
     *
     * @param \DateTime $miseajour
     *
     * @return EA_Demande_Inscription
     */
    public function setMiseajour($miseajour)
    {
        $this->miseajour = $miseajour;

        return $this;
    }

    /**
     * Get miseajour
     *
     * @return \DateTime
     */
    public function getMiseajour()
    {
        return $this->miseajour;
    }

    /**
     * Set verifier
     *
     * @param boolean $verifier
     *
     * @return EA_Demande_Inscription
     */
    public function setVerifier($verifier)
    {
        $this->verifier = $verifier;

        return $this;
    }

    /**
     * Get verifier
     *
     * @return bool
     */
    public function getVerifier()
    {
        return $this->verifier;
    }

    /**
     * Set typeinscription
     *
     * @param \DUDEEGO\PlatformBundle\Entity\EA_Type_Inscription $typeinscription
     *
     * @return EA_Demande_Inscription
     */
    public function setTypeinscription(\DUDEEGO\PlatformBundle\Entity\EA_Type_Inscription $typeinscription = null)
    {
        $this->typeinscription = $typeinscription;

        return $this;
    }

    /**
     * Get typeinscription
     *
     * @return \DUDEEGO\PlatformBundle\Entity\EA_Type_Inscription
     */
    public function getTypeinscription()
    {
        return $this->typeinscription;
    }

    /**
     * Set documentinscription
     *
     * @param \DUDEEGO\PlatformBundle\Entity\EA_Document_Inscription $documentinscription
     *
     * @return EA_Demande_Inscription
     */
    public function setDocumentinscription(\DUDEEGO\PlatformBundle\Entity\EA_Document_Inscription $documentinscription)
    {
        $this->documentinscription = $documentinscription;

        return $this;
    }

    /**
     * Get documentinscription
     *
     * @return \DUDEEGO\PlatformBundle\Entity\EA_Document_Inscription
     */
    public function getDocumentinscription()
    {
        return $this->documentinscription;
    }

    /**
     * Set physique
     *
     * @param \DUDEEGO\PlatformBundle\Entity\EA_Physique $physique
     *
     * @return EA_Demande_Inscription
     */
    public function setPhysique(\DUDEEGO\PlatformBundle\Entity\EA_Physique $physique)
    {
        $this->physique = $physique;

        return $this;
    }

    /**
     * Get physique
     *
     * @return \DUDEEGO\PlatformBundle\Entity\EA_Physique
     */
    public function getPhysique()
    {
        return $this->physique;
    }
}
