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
}
