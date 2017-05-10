<?php

namespace DUDEEGO\PlatformBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
   * @ORM\ManyToOne(targetEntity="DUDEEGO\PlatformBundle\Entity\EA_Physique", cascade={"persist"})
   * @ORM\JoinColumn(nullable=false)
   */
    private $physique;

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }


    /**
     * Set physique
     *
     * @param \DUDEEGO\PlatformBundle\Entity\EA_Physique $physique
     *
     * @return User
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
