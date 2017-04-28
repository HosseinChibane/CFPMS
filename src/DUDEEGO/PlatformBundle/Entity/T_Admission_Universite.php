<?php

namespace DUDEEGO\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * T_Admission_Universite
 *
 * @ORM\Table(name="t__admission__universite")
 * @ORM\Entity(repositoryClass="DUDEEGO\PlatformBundle\Repository\T_Admission_UniversiteRepository")
 */
class T_Admission_Universite
{

    /**
   * @ORM\ManyToOne(targetEntity="DUDEEGO\PlatformBundle\Entity\T_Retention_Admission_Universite")
   * @ORM\JoinColumn(nullable=false)
   */
    private $retentionadmission;

    /**
   * @ORM\ManyToOne(targetEntity="DUDEEGO\PlatformBundle\Entity\T_Requis_Admission_Universite")
   * @ORM\JoinColumn(nullable=false)
   */
    private $requisadmission;

    /**
   * @ORM\ManyToOne(targetEntity="DUDEEGO\PlatformBundle\Entity\T_Document_Admission_Universite")
   * @ORM\JoinColumn(nullable=false)
   */
    private $documentadmission;

    /**
   * @ORM\ManyToOne(targetEntity="DUDEEGO\PlatformBundle\Entity\T_Test_Admission_Universite")
   * @ORM\JoinColumn(nullable=false)
   */
    private $testadmission;


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
     * @return T_Admission_Universite
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

    /**
     * Set retentionadmission
     *
     * @param \DUDEEGO\PlatformBundle\Entity\T_Retention_Admission_Universite $retentionadmission
     *
     * @return T_Admission_Universite
     */
    public function setRetentionadmission(\DUDEEGO\PlatformBundle\Entity\T_Retention_Admission_Universite $retentionadmission)
    {
        $this->retentionadmission = $retentionadmission;

        return $this;
    }

    /**
     * Get retentionadmission
     *
     * @return \DUDEEGO\PlatformBundle\Entity\T_Retention_Admission_Universite
     */
    public function getRetentionadmission()
    {
        return $this->retentionadmission;
    }

    /**
     * Set requisadmission
     *
     * @param \DUDEEGO\PlatformBundle\Entity\T_Requis_Admission_Universite $requisadmission
     *
     * @return T_Admission_Universite
     */
    public function setRequisadmission(\DUDEEGO\PlatformBundle\Entity\T_Requis_Admission_Universite $requisadmission)
    {
        $this->requisadmission = $requisadmission;

        return $this;
    }

    /**
     * Get requisadmission
     *
     * @return \DUDEEGO\PlatformBundle\Entity\T_Requis_Admission_Universite
     */
    public function getRequisadmission()
    {
        return $this->requisadmission;
    }

    /**
     * Set documentadmission
     *
     * @param \DUDEEGO\PlatformBundle\Entity\T_Document_Admission_Universite $documentadmission
     *
     * @return T_Admission_Universite
     */
    public function setDocumentadmission(\DUDEEGO\PlatformBundle\Entity\T_Document_Admission_Universite $documentadmission)
    {
        $this->documentadmission = $documentadmission;

        return $this;
    }

    /**
     * Get documentadmission
     *
     * @return \DUDEEGO\PlatformBundle\Entity\T_Document_Admission_Universite
     */
    public function getDocumentadmission()
    {
        return $this->documentadmission;
    }

    /**
     * Set testadmission
     *
     * @param \DUDEEGO\PlatformBundle\Entity\T_Test_Admission_Universite $testadmission
     *
     * @return T_Admission_Universite
     */
    public function setTestadmission(\DUDEEGO\PlatformBundle\Entity\T_Test_Admission_Universite $testadmission)
    {
        $this->testadmission = $testadmission;

        return $this;
    }

    /**
     * Get testadmission
     *
     * @return \DUDEEGO\PlatformBundle\Entity\T_Test_Admission_Universite
     */
    public function getTestadmission()
    {
        return $this->testadmission;
    }
}
