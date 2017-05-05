<?php

namespace DUDEEGO\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EA_Physique
 *
 * @ORM\Table(name="e_a__physique")
 * @ORM\Entity(repositoryClass="DUDEEGO\PlatformBundle\Repository\EA_PhysiqueRepository")
 */
class EA_Physique
{

    /**
   * @ORM\OneToOne(targetEntity="DUDEEGO\PlatformBundle\Entity\EA_Personne", cascade={"persist"})
   */
    private $personne;

     /**
     * @ORM\OneToOne(targetEntity="DUDEEGO\PlatformBundle\Entity\EA_Image" , cascade={"persist"})
     */
    private $image;

    /**
     * @ORM\OneToMany(targetEntity="DUDEEGO\PlatformBundle\Entity\EA_Document", mappedBy="physique")
     */
    private $documents;

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
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255)
     */
    private $prenom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datenaissance", type="datetimetz")
     */
    private $datenaissance;

    /**
     * @var string
     *
     * @ORM\Column(name="numerocarteid", type="string", length=255)
     */
    private $numerocarteid;


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
     * Set nom
     *
     * @param string $nom
     *
     * @return EA_Physique
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return EA_Physique
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set datenaissance
     *
     * @param \DateTime $datenaissance
     *
     * @return EA_Physique
     */
    public function setDatenaissance($datenaissance)
    {
        $this->datenaissance = $datenaissance;

        return $this;
    }

    /**
     * Get datenaissance
     *
     * @return \DateTime
     */
    public function getDatenaissance()
    {
        return $this->datenaissance;
    }

    /**
     * Set numerocarteid
     *
     * @param string $numerocarteid
     *
     * @return EA_Physique
     */
    public function setNumerocarteid($numerocarteid)
    {
        $this->numerocarteid = $numerocarteid;

        return $this;
    }

    /**
     * Get numerocarteid
     *
     * @return string
     */
    public function getNumerocarteid()
    {
        return $this->numerocarteid;
    }


    /**
     * Set document
     *
     * @param \DUDEEGO\PlatformBundle\Entity\EA_Document $document
     *
     * @return EA_Physique
     */
    public function setDocument(\DUDEEGO\PlatformBundle\Entity\EA_Document $document)
    {
        $this->document = $document;

        return $this;
    }

    /**
     * Get document
     *
     * @return \DUDEEGO\PlatformBundle\Entity\EA_Document
     */
    public function getDocument()
    {
        return $this->document;
    }

    /**
     * Set compteutilisateur
     *
     * @param \DUDEEGO\PlatformBundle\Entity\User $compteutilisateur
     *
     * @return EA_Physique
     */
    public function setCompteutilisateur(\DUDEEGO\PlatformBundle\Entity\User $compteutilisateur)
    {
        $this->compteutilisateur = $compteutilisateur;

        return $this;
    }

    /**
     * Get compteutilisateur
     *
     * @return \DUDEEGO\PlatformBundle\Entity\User
     */
    public function getCompteutilisateur()
    {
        return $this->compteutilisateur;
    }

    /**
     * Set demandeinscription
     *
     * @param \DUDEEGO\PlatformBundle\Entity\EA_Demande_Inscription $demandeinscription
     *
     * @return EA_Physique
     */
    public function setDemandeinscription(\DUDEEGO\PlatformBundle\Entity\EA_Demande_Inscription $demandeinscription)
    {
        $this->demandeinscription = $demandeinscription;

        return $this;
    }

    /**
     * Get demandeinscription
     *
     * @return \DUDEEGO\PlatformBundle\Entity\EA_Demande_Inscription
     */
    public function getDemandeinscription()
    {
        return $this->demandeinscription;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->document = new \Doctrine\Common\Collections\ArrayCollection();
        $this->compteutilisateur = new \Doctrine\Common\Collections\ArrayCollection();
        $this->demandeinscription = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add document
     *
     * @param \DUDEEGO\PlatformBundle\Entity\EA_Document $document
     *
     * @return EA_Physique
     */
    public function addDocument(\DUDEEGO\PlatformBundle\Entity\EA_Document $document)
    {
        $this->document[] = $document;

        return $this;
    }

    /**
     * Remove document
     *
     * @param \DUDEEGO\PlatformBundle\Entity\EA_Document $document
     */
    public function removeDocument(\DUDEEGO\PlatformBundle\Entity\EA_Document $document)
    {
        $this->document->removeElement($document);
    }

    /**
     * Add compteutilisateur
     *
     * @param \DUDEEGO\PlatformBundle\Entity\User $compteutilisateur
     *
     * @return EA_Physique
     */
    public function addCompteutilisateur(\DUDEEGO\PlatformBundle\Entity\User $compteutilisateur)
    {
        $this->compteutilisateur[] = $compteutilisateur;

        return $this;
    }

    /**
     * Remove compteutilisateur
     *
     * @param \DUDEEGO\PlatformBundle\Entity\User $compteutilisateur
     */
    public function removeCompteutilisateur(\DUDEEGO\PlatformBundle\Entity\User $compteutilisateur)
    {
        $this->compteutilisateur->removeElement($compteutilisateur);
    }

    /**
     * Add demandeinscription
     *
     * @param \DUDEEGO\PlatformBundle\Entity\EA_Demande_Inscription $demandeinscription
     *
     * @return EA_Physique
     */
    public function addDemandeinscription(\DUDEEGO\PlatformBundle\Entity\EA_Demande_Inscription $demandeinscription)
    {
        $this->demandeinscription[] = $demandeinscription;

        return $this;
    }

    /**
     * Remove demandeinscription
     *
     * @param \DUDEEGO\PlatformBundle\Entity\EA_Demande_Inscription $demandeinscription
     */
    public function removeDemandeinscription(\DUDEEGO\PlatformBundle\Entity\EA_Demande_Inscription $demandeinscription)
    {
        $this->demandeinscription->removeElement($demandeinscription);
    }

    /**
     * Set personne
     *
     * @param \DUDEEGO\PlatformBundle\Entity\EA_Personne $personne
     *
     * @return EA_Physique
     */
    public function setPersonne(\DUDEEGO\PlatformBundle\Entity\EA_Personne $personne = null)
    {
        $this->personne = $personne;

        return $this;
    }

    /**
     * Get personne
     *
     * @return \DUDEEGO\PlatformBundle\Entity\EA_Personne
     */
    public function getPersonne()
    {
        return $this->personne;
    }

    /**
     * Set image
     *
     * @param \DUDEEGO\PlatformBundle\Entity\EA_Image $image
     *
     * @return EA_Physique
     */
    public function setImage(\DUDEEGO\PlatformBundle\Entity\EA_Image $image = null)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return \DUDEEGO\PlatformBundle\Entity\EA_Image
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Get documents
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDocuments()
    {
        return $this->documents;
    }
}
