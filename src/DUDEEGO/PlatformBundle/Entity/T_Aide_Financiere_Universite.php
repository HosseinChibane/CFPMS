<?php

namespace DUDEEGO\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * T_Aide_Financiere_Universite
 *
 * @ORM\Table(name="t__aide__financiere__universite")
 * @ORM\Entity(repositoryClass="DUDEEGO\PlatformBundle\Repository\T_Aide_Financiere_UniversiteRepository")
 */
class T_Aide_Financiere_Universite
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
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="montant", type="decimal", precision=10, scale=2)
     */
    private $montant;

    /**
     * @var string
     *
     * @ORM\Column(name="tauxacception", type="string", length=255)
     */
    private $tauxacception;


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
     * @return T_Aide_Financiere_Universite
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
     * Set montant
     *
     * @param string $montant
     *
     * @return T_Aide_Financiere_Universite
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;

        return $this;
    }

    /**
     * Get montant
     *
     * @return string
     */
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * Set tauxacception
     *
     * @param string $tauxacception
     *
     * @return T_Aide_Financiere_Universite
     */
    public function setTauxacception($tauxacception)
    {
        $this->tauxacception = $tauxacception;

        return $this;
    }

    /**
     * Get tauxacception
     *
     * @return string
     */
    public function getTauxacception()
    {
        return $this->tauxacception;
    }
}

