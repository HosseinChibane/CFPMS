<?php

namespace DUDEEGO\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * F_Form_Formation
 *
 * @ORM\Table(name="f_form_formation")
 * @ORM\Entity(repositoryClass="DUDEEGO\PlatformBundle\Repository\F_Form_FormationRepository")
 */
class F_Form_Formation
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
     * @ORM\Column(name="libelle", type="string", length=255)
     */
    private $libelle;


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
     * Set libelle
     *
     * @param string $libelle
     *
     * @return F_Form_Formation
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;

    }

    /**
     * Get libelle
     *
     * @return string
     */
    public function getLibelle()
    {
        return $this->libelle;
    }
}
