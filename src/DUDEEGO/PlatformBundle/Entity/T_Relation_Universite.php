<?php

namespace DUDEEGO\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * T_Relation_Universite
 *
 * @ORM\Table(name="t__relation__universite")
 * @ORM\Entity(repositoryClass="DUDEEGO\PlatformBundle\Repository\T_Relation_UniversiteRepository")
 */
class T_Relation_Universite
{
        /**
   * @ORM\ManyToOne(targetEntity="DUDEEGO\PlatformBundle\Entity\T_Date_Universite", cascade={"persist"})
   * @ORM\JoinColumn(nullable=false)
   */
      private $date;

    /**
   * @ORM\ManyToOne(targetEntity="DUDEEGO\PlatformBundle\Entity\T_Categorie_Universite", cascade={"persist"})
   * @ORM\JoinColumn(nullable=false)
   */
      private $categorie;

    /**
   * @ORM\ManyToOne(targetEntity="DUDEEGO\PlatformBundle\Entity\T_Calendrier_Universite", cascade={"persist"})
   * @ORM\JoinColumn(nullable=false)
   */
      private $calendrier;

     /**
   * @ORM\ManyToOne(targetEntity="DUDEEGO\PlatformBundle\Entity\T_Secteur_Universite", cascade={"persist"})
   * @ORM\JoinColumn(nullable=false)
   */
      private $secteur;

    /**
   * @ORM\ManyToOne(targetEntity="DUDEEGO\PlatformBundle\Entity\T_Lieu_Universite", cascade={"persist"})
   * @ORM\JoinColumn(nullable=false)
   */
      private $lieu;

     /**
   * @ORM\ManyToOne(targetEntity="DUDEEGO\PlatformBundle\Entity\T_Profil_Inscription_Universite", cascade={"persist"})
   * @ORM\JoinColumn(nullable=false)
   */
      private $profilinscription;

    /**
   * @ORM\ManyToOne(targetEntity="DUDEEGO\PlatformBundle\Entity\T_Categorie_Institution_Universite", cascade={"persist"})
   * @ORM\JoinColumn(nullable=false)
   */
      private $categorieinstitution;

    /**
   * @ORM\ManyToOne(targetEntity="DUDEEGO\PlatformBundle\Entity\T_Taille_Universite", cascade={"persist"})
   * @ORM\JoinColumn(nullable=false)
   */
      private $taille;

    /**
   * @ORM\ManyToOne(targetEntity="DUDEEGO\PlatformBundle\Entity\T_Adresse_Universite", cascade={"persist"})
   * @ORM\JoinColumn(nullable=false)
   */
      private $adresse;

    /**
   * @ORM\ManyToOne(targetEntity="DUDEEGO\PlatformBundle\Entity\T_Admission_Universite", cascade={"persist"})
   * @ORM\JoinColumn(nullable=false)
   */
      private $admission;

    /**
   * @ORM\ManyToOne(targetEntity="DUDEEGO\PlatformBundle\Entity\T_Frais_Inscription_Universite", cascade={"persist"})
   * @ORM\JoinColumn(nullable=false)
   */
      private $fraisinscription;

    /**
   * @ORM\ManyToOne(targetEntity="DUDEEGO\PlatformBundle\Entity\T_Logement_Universite", cascade={"persist"})
   * @ORM\JoinColumn(nullable=false)
   */
      private $logement;

    /**
   * @ORM\ManyToOne(targetEntity="DUDEEGO\PlatformBundle\Entity\T_Aide_Financiere_Universite", cascade={"persist"})
   * @ORM\JoinColumn(nullable=false)
   */
      private $aidefinanciere;

    /**
   * @ORM\ManyToOne(targetEntity="DUDEEGO\PlatformBundle\Entity\T_Diplome_Universite", cascade={"persist"})
   * @ORM\JoinColumn(nullable=false)
   */
      private $diplome;

    /**
   * @ORM\ManyToOne(targetEntity="DUDEEGO\PlatformBundle\Entity\T_Information_Universite", cascade={"persist"})
   * @ORM\JoinColumn(nullable=false)
   */
      private $information;

    
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


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
     * Set categorie
     *
     * @param \DUDEEGO\PlatformBundle\Entity\T_Categorie_Universite $categorie
     *
     * @return T_Relation_Universite
     */
    public function setCategorie(\DUDEEGO\PlatformBundle\Entity\T_Categorie_Universite $categorie)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return \DUDEEGO\PlatformBundle\Entity\T_Categorie_Universite
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Set calendrier
     *
     * @param \DUDEEGO\PlatformBundle\Entity\T_Calendrier_Universite $calendrier
     *
     * @return T_Relation_Universite
     */
    public function setCalendrier(\DUDEEGO\PlatformBundle\Entity\T_Calendrier_Universite $calendrier)
    {
        $this->calendrier = $calendrier;

        return $this;
    }

    /**
     * Get calendrier
     *
     * @return \DUDEEGO\PlatformBundle\Entity\T_Calendrier_Universite
     */
    public function getCalendrier()
    {
        return $this->calendrier;
    }

    /**
     * Set secteur
     *
     * @param \DUDEEGO\PlatformBundle\Entity\T_Secteur_Universite $secteur
     *
     * @return T_Relation_Universite
     */
    public function setSecteur(\DUDEEGO\PlatformBundle\Entity\T_Secteur_Universite $secteur)
    {
        $this->secteur = $secteur;

        return $this;
    }

    /**
     * Get secteur
     *
     * @return \DUDEEGO\PlatformBundle\Entity\T_Secteur_Universite
     */
    public function getSecteur()
    {
        return $this->secteur;
    }

    /**
     * Set lieu
     *
     * @param \DUDEEGO\PlatformBundle\Entity\T_Lieu_Universite $lieu
     *
     * @return T_Relation_Universite
     */
    public function setLieu(\DUDEEGO\PlatformBundle\Entity\T_Lieu_Universite $lieu)
    {
        $this->lieu = $lieu;

        return $this;
    }

    /**
     * Get lieu
     *
     * @return \DUDEEGO\PlatformBundle\Entity\T_Lieu_Universite
     */
    public function getLieu()
    {
        return $this->lieu;
    }

    /**
     * Set profilinscription
     *
     * @param \DUDEEGO\PlatformBundle\Entity\T_Profil_Inscription_Universite $profilinscription
     *
     * @return T_Relation_Universite
     */
    public function setProfilinscription(\DUDEEGO\PlatformBundle\Entity\T_Profil_Inscription_Universite $profilinscription)
    {
        $this->profilinscription = $profilinscription;

        return $this;
    }

    /**
     * Get profilinscription
     *
     * @return \DUDEEGO\PlatformBundle\Entity\T_Profil_Inscription_Universite
     */
    public function getProfilinscription()
    {
        return $this->profilinscription;
    }

    /**
     * Set categorieinstitution
     *
     * @param \DUDEEGO\PlatformBundle\Entity\T_Categorie_Institution_Universite $categorieinstitution
     *
     * @return T_Relation_Universite
     */
    public function setCategorieinstitution(\DUDEEGO\PlatformBundle\Entity\T_Categorie_Institution_Universite $categorieinstitution)
    {
        $this->categorieinstitution = $categorieinstitution;

        return $this;
    }

    /**
     * Get categorieinstitution
     *
     * @return \DUDEEGO\PlatformBundle\Entity\T_Categorie_Institution_Universite
     */
    public function getCategorieinstitution()
    {
        return $this->categorieinstitution;
    }

    /**
     * Set taille
     *
     * @param \DUDEEGO\PlatformBundle\Entity\T_Taille_Universite $taille
     *
     * @return T_Relation_Universite
     */
    public function setTaille(\DUDEEGO\PlatformBundle\Entity\T_Taille_Universite $taille)
    {
        $this->taille = $taille;

        return $this;
    }

    /**
     * Get taille
     *
     * @return \DUDEEGO\PlatformBundle\Entity\T_Taille_Universite
     */
    public function getTaille()
    {
        return $this->taille;
    }

    /**
     * Set adresse
     *
     * @param \DUDEEGO\PlatformBundle\Entity\T_Adresse_Universite $adresse
     *
     * @return T_Relation_Universite
     */
    public function setAdresse(\DUDEEGO\PlatformBundle\Entity\T_Adresse_Universite $adresse)
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
     * Set admission
     *
     * @param \DUDEEGO\PlatformBundle\Entity\T_Admission_Universite $admission
     *
     * @return T_Relation_Universite
     */
    public function setAdmission(\DUDEEGO\PlatformBundle\Entity\T_Admission_Universite $admission)
    {
        $this->admission = $admission;

        return $this;
    }

    /**
     * Get admission
     *
     * @return \DUDEEGO\PlatformBundle\Entity\T_Admission_Universite
     */
    public function getAdmission()
    {
        return $this->admission;
    }

    /**
     * Set fraisinscription
     *
     * @param \DUDEEGO\PlatformBundle\Entity\T_Frais_Inscription_Universite $fraisinscription
     *
     * @return T_Relation_Universite
     */
    public function setFraisinscription(\DUDEEGO\PlatformBundle\Entity\T_Frais_Inscription_Universite $fraisinscription)
    {
        $this->fraisinscription = $fraisinscription;

        return $this;
    }

    /**
     * Get fraisinscription
     *
     * @return \DUDEEGO\PlatformBundle\Entity\T_Frais_Inscription_Universite
     */
    public function getFraisinscription()
    {
        return $this->fraisinscription;
    }

    /**
     * Set logement
     *
     * @param \DUDEEGO\PlatformBundle\Entity\T_Logement_Universite $logement
     *
     * @return T_Relation_Universite
     */
    public function setLogement(\DUDEEGO\PlatformBundle\Entity\T_Logement_Universite $logement)
    {
        $this->logement = $logement;

        return $this;
    }

    /**
     * Get logement
     *
     * @return \DUDEEGO\PlatformBundle\Entity\T_Logement_Universite
     */
    public function getLogement()
    {
        return $this->logement;
    }

    /**
     * Set aidefinanciere
     *
     * @param \DUDEEGO\PlatformBundle\Entity\T_Aide_Financiere_Universite $aidefinanciere
     *
     * @return T_Relation_Universite
     */
    public function setAidefinanciere(\DUDEEGO\PlatformBundle\Entity\T_Aide_Financiere_Universite $aidefinanciere)
    {
        $this->aidefinanciere = $aidefinanciere;

        return $this;
    }

    /**
     * Get aidefinanciere
     *
     * @return \DUDEEGO\PlatformBundle\Entity\T_Aide_Financiere_Universite
     */
    public function getAidefinanciere()
    {
        return $this->aidefinanciere;
    }

    /**
     * Set diplome
     *
     * @param \DUDEEGO\PlatformBundle\Entity\T_Diplome_Universite $diplome
     *
     * @return T_Relation_Universite
     */
    public function setDiplome(\DUDEEGO\PlatformBundle\Entity\T_Diplome_Universite $diplome)
    {
        $this->diplome = $diplome;

        return $this;
    }

    /**
     * Get diplome
     *
     * @return \DUDEEGO\PlatformBundle\Entity\T_Diplome_Universite
     */
    public function getDiplome()
    {
        return $this->diplome;
    }

    /**
     * Set information
     *
     * @param \DUDEEGO\PlatformBundle\Entity\T_Information_Universite $information
     *
     * @return T_Relation_Universite
     */
    public function setInformation(\DUDEEGO\PlatformBundle\Entity\T_Information_Universite $information)
    {
        $this->information = $information;

        return $this;
    }

    /**
     * Get information
     *
     * @return \DUDEEGO\PlatformBundle\Entity\T_Information_Universite
     */
    public function getInformation()
    {
        return $this->information;
    }

    /**
     * Set date
     *
     * @param \DUDEEGO\PlatformBundle\Entity\T_Date_Universite $date
     *
     * @return T_Relation_Universite
     */
    public function setDate(\DUDEEGO\PlatformBundle\Entity\T_Date_Universite $date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DUDEEGO\PlatformBundle\Entity\T_Date_Universite
     */
    public function getDate()
    {
        return $this->date;
    }
}
