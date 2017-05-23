<?php

namespace DUDEEGO\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * T_Universite
 *
 * @ORM\Table(name="t__universite")
 * @ORM\Entity(repositoryClass="DUDEEGO\PlatformBundle\Repository\T_UniversiteRepository")
 */
class T_Universite
{

    /**
     * @ORM\OneToMany(targetEntity="DUDEEGO\PlatformBundle\Entity\T_Document_Universite", mappedBy="universite", cascade={"persist"}, cascade={"remove"})
     */
    private $documents;

    /**
     * @ORM\ManyToMany(targetEntity="DUDEEGO\PlatformBundle\Entity\T_Formation_Universite", mappedBy="universite", cascade={"persist"})
     */
    private $formations;

    /**
     * @ORM\OneToMany(targetEntity="DUDEEGO\PlatformBundle\Entity\T_Image_Universite", mappedBy="universite", cascade={"persist"}, cascade={"remove"})
     */
    private $images;

    /**
     * @ORM\OneToOne(targetEntity="DUDEEGO\PlatformBundle\Entity\T_Adresse_Universite", cascade={"persist"})
     */
    private $adresse;

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
     * @ORM\Column(name="nometablissement", type="string", length=255)
     */
    private $nometablissement;

    /**
     * @var string
     *
     * @ORM\Column(name="siteinternet", type="string", length=255)
     */
    private $siteinternet;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535)
     */
    private $description;

    /**
     * @var float
     *
     * @ORM\Column(name="longetitude", type="float")
     */
    private $longetitude;

    /**
     * @var float
     *
     * @ORM\Column(name="latitude", type="float")
     */
    private $latitude;


    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=20)
     */
    private $telephone;

    /**
     * @var integer
     *
     * @ORM\Column(name="classement", type="integer")
     */
    private $classement;

    /**
     * @var boolean
     *
     * @ORM\Column(name="bourse", type="boolean")
     */
    private $bourse;

    /**
     * @var float
     *
     * @ORM\Column(name="montantbourse", type="float")
     */
    private $montantbourse;

    /**
     * @var boolean
     *
     * @ORM\Column(name="logement", type="boolean")
     */
    private $logement;

    /**
     * @var boolean
     *
     * @ORM\Column(name="partenaire", type="boolean")
     */
    private $partenaire;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;

    /**
     * @var integer
     *
     * @ORM\Column(name="taille", type="integer")
     */
    private $taille;

    public function __toString()
    {
        return $this->getNometablissement();
    }

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
     * Set nometablissement
     *
     * @param string $nometablissement
     *
     * @return T_Universite
     */
    public function setNometablissement($nometablissement)
    {
        $this->nometablissement = $nometablissement;

        return $this;
    }

    /**
     * Get nometablissement
     *
     * @return string
     */
    public function getNometablissement()
    {
        return $this->nometablissement;
    }

    /**
     * Set siteinternet
     *
     * @param string $siteinternet
     *
     * @return T_Universite
     */
    public function setSiteinternet($siteinternet)
    {
        $this->siteinternet = $siteinternet;

        return $this;
    }

    /**
     * Get siteinternet
     *
     * @return string
     */
    public function getSiteinternet()
    {
        return $this->siteinternet;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return T_Universite
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->image = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add image
     *
     * @param \DUDEEGO\PlatformBundle\Entity\T_Image_Universite $image
     *
     * @return T_Universite
     */
    public function addImage(\DUDEEGO\PlatformBundle\Entity\T_Image_Universite $image)
    {
        $this->image[] = $image;

        return $this;
    }

    /**
     * Remove image
     *
     * @param \DUDEEGO\PlatformBundle\Entity\T_Image_Universite $image
     */
    public function removeImage(\DUDEEGO\PlatformBundle\Entity\T_Image_Universite $image)
    {
        $this->image->removeElement($image);
    }

    /**
     * Get image
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Add formation
     *
     * @param \DUDEEGO\PlatformBundle\Entity\T_Formation_Universite $formation
     *
     * @return T_Universite
     */
    public function addFormation(\DUDEEGO\PlatformBundle\Entity\T_Formation_Universite $formation)
    {
        $this->formations[] = $formation;

        return $this;
    }

    /**
     * Remove formation
     *
     * @param \DUDEEGO\PlatformBundle\Entity\T_Formation_Universite $formation
     */
    public function removeFormation(\DUDEEGO\PlatformBundle\Entity\T_Formation_Universite $formation)
    {
        $this->formations->removeElement($formation);
    }

    /**
     * Get formations
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFormations()
    {
        return $this->formations;
    }

    /**
     * Set adresse
     *
     * @param \DUDEEGO\PlatformBundle\Entity\T_Adresse_Universite $adresse
     *
     * @return T_Universite
     */
    public function setAdresse(\DUDEEGO\PlatformBundle\Entity\T_Adresse_Universite $adresse = null)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return \DUDEEGO\PlatformBundle\Entity\T_Adresse_Universite
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set image
     *
     * @param \DUDEEGO\PlatformBundle\Entity\T_Image_Universite $image
     *
     * @return T_Universite
     */
    public function setImage(\DUDEEGO\PlatformBundle\Entity\T_Image_Universite $image = null)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Add adresse
     *
     * @param \DUDEEGO\PlatformBundle\Entity\T_Adresse_Universite $adresse
     *
     * @return T_Universite
     */
    public function addAdresse(\DUDEEGO\PlatformBundle\Entity\T_Adresse_Universite $adresse)
    {
        $this->adresse[] = $adresse;

        return $this;
    }

    /**
     * Remove adresse
     *
     * @param \DUDEEGO\PlatformBundle\Entity\T_Adresse_Universite $adresse
     */
    public function removeAdresse(\DUDEEGO\PlatformBundle\Entity\T_Adresse_Universite $adresse)
    {
        $this->adresse->removeElement($adresse);
    }

    /**
     * Get images
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * Add document
     *
     * @param \DUDEEGO\PlatformBundle\Entity\T_Document_Universite $document
     *
     * @return T_Universite
     */
    public function addDocument(\DUDEEGO\PlatformBundle\Entity\T_Document_Universite $document)
    {
        $this->documents[] = $document;

        return $this;
    }

    /**
     * Remove document
     *
     * @param \DUDEEGO\PlatformBundle\Entity\T_Document_Universite $document
     */
    public function removeDocument(\DUDEEGO\PlatformBundle\Entity\T_Document_Universite $document)
    {
        $this->documents->removeElement($document);
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


    /**
     * Set longetitude
     *
     * @param float $longetitude
     *
     * @return T_Universite
     */
    public function setLongetitude($longetitude)
    {
        $this->longetitude = $longetitude;

        return $this;
    }

    /**
     * Get longetitude
     *
     * @return float
     */
    public function getLongetitude()
    {
        return $this->longetitude;
    }

    /**
     * Set latitude
     *
     * @param float $latitude
     *
     * @return T_Universite
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Get latitude
     *
     * @return float
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     *
     * @return T_Universite
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return string
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set classement
     *
     * @param integer $classement
     *
     * @return T_Universite
     */
    public function setClassement($classement)
    {
        $this->classement = $classement;

        return $this;
    }

    /**
     * Get classement
     *
     * @return integer
     */
    public function getClassement()
    {
        return $this->classement;
    }

    /**
     * Set bourse
     *
     * @param boolean $bourse
     *
     * @return T_Universite
     */
    public function setBourse($bourse)
    {
        $this->bourse = $bourse;

        return $this;
    }

    /**
     * Get bourse
     *
     * @return boolean
     */
    public function getBourse()
    {
        return $this->bourse;
    }

    /**
     * Set montantbourse
     *
     * @param float $montantbourse
     *
     * @return T_Universite
     */
    public function setMontantbourse($montantbourse)
    {
        $this->montantbourse = $montantbourse;

        return $this;
    }

    /**
     * Get montantbourse
     *
     * @return float
     */
    public function getMontantbourse()
    {
        return $this->montantbourse;
    }

    /**
     * Set logement
     *
     * @param boolean $logement
     *
     * @return T_Universite
     */
    public function setLogement($logement)
    {
        $this->logement = $logement;

        return $this;
    }

    /**
     * Get logement
     *
     * @return boolean
     */
    public function getLogement()
    {
        return $this->logement;
    }

    /**
     * Set partenaire
     *
     * @param boolean $partenaire
     *
     * @return T_Universite
     */
    public function setPartenaire($partenaire)
    {
        $this->partenaire = $partenaire;

        return $this;
    }

    /**
     * Get partenaire
     *
     * @return boolean
     */
    public function getPartenaire()
    {
        return $this->partenaire;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return T_Universite
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
     * Set taille
     *
     * @param integer $taille
     *
     * @return T_Universite
     */
    public function setTaille($taille)
    {
        $this->taille = $taille;

        return $this;
    }

    /**
     * Get taille
     *
     * @return integer
     */
    public function getTaille()
    {
        return $this->taille;
    }
}
