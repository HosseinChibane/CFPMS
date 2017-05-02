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
     * @ORM\OneToMany(targetEntity="DUDEEGO\PlatformBundle\Entity\T_Formation_Universite", mappedBy="universite")
     */
    private $formations;

    /**
     * @ORM\OneToMany(targetEntity="DUDEEGO\PlatformBundle\Entity\T_Image_Universite", mappedBy="universite")
     */
    private $images;

    /**
     * @ORM\OneToOne(targetEntity="DUDEEGO\PlatformBundle\Entity\T_Adresse_Universite" , cascade={"persist"})
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
}
