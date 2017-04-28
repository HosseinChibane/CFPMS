<?php

namespace DUDEEGO\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * T_Relation_Formation_Langue_Universite
 *
 * @ORM\Table(name="t__relation__formation__langue__universite")
 * @ORM\Entity(repositoryClass="DUDEEGO\PlatformBundle\Repository\T_Relation_Formation_Langue_UniversiteRepository")
 */
class T_Relation_Formation_Langue_Universite
{

    /**
   * @ORM\ManyToOne(targetEntity="DUDEEGO\PlatformBundle\Entity\T_Universite", cascade={"persist"})
   * @ORM\JoinColumn(nullable=false)
   */
    private $universite;

    /**
   * @ORM\ManyToOne(targetEntity="DUDEEGO\PlatformBundle\Entity\F_Form_Langue", cascade={"persist"})
   * @ORM\JoinColumn(nullable=false)
   */   
    private $langue;


    /**
   * @ORM\ManyToOne(targetEntity="DUDEEGO\PlatformBundle\Entity\F_Form_Formation", cascade={"persist"})
   * @ORM\JoinColumn(nullable=false)
   */  
    private $formation;

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
     * Set universite
     *
     * @param \DUDEEGO\PlatformBundle\Entity\T_Universite $universite
     *
     * @return T_Relation_Formation_Langue_Universite
     */
    public function setUniversite(\DUDEEGO\PlatformBundle\Entity\T_Universite $universite = null)
    {
        $this->universite = $universite;

        return $this;
    }

    /**
     * Get universite
     *
     * @return \DUDEEGO\PlatformBundle\Entity\T_Universite
     */
    public function getUniversite()
    {
        return $this->universite;
    }

    /**
     * Set formation
     *
     * @param \DUDEEGO\PlatformBundle\Entity\F_Form_Formation $formation
     *
     * @return T_Relation_Formation_Langue_Universite
     */
    public function setFormation(\DUDEEGO\PlatformBundle\Entity\F_Form_Formation $formation = null)
    {
        $this->formation = $formation;

        return $this;
    }

    /**
     * Get formation
     *
     * @return \DUDEEGO\PlatformBundle\Entity\F_Form_Formation
     */
    public function getFormation()
    {
        return $this->formation;
    }

    /**
     * Set langue
     *
     * @param \DUDEEGO\PlatformBundle\Entity\F_Form_Langue $langue
     *
     * @return T_Relation_Formation_Langue_Universite
     */
    public function setLangue(\DUDEEGO\PlatformBundle\Entity\F_Form_Langue $langue = null)
    {
        $this->langue = $langue;

        return $this;
    }

    /**
     * Get langue
     *
     * @return \DUDEEGO\PlatformBundle\Entity\F_Form_Langue
     */
    public function getLangue()
    {
        return $this->langue;
    }
}
