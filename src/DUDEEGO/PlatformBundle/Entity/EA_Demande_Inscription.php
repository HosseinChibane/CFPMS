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
     * @ORM\OneToOne(targetEntity="DUDEEGO\PlatformBundle\Entity\EA_Document_Inscription", cascade={"persist"})
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
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=255)
     */
    private $etat;

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

    /**
     * Set type
     *
     * @param string $type
     *
     * @return EA_Demande_Inscription
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
}
