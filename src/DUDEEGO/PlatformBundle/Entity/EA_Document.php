<?php

namespace DUDEEGO\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * EA_Document
 *
 * @ORM\Table(name="e_a__document")
 * @ORM\Entity(repositoryClass="DUDEEGO\PlatformBundle\Repository\EA_DocumentRepository")
 * @Vich\Uploadable
 */
class EA_Document
{
    /**
   * @ORM\ManyToOne(targetEntity="DUDEEGO\PlatformBundle\Entity\EA_Physique", inversedBy = "documents")
   * @ORM\JoinColumn(nullable=false)
   */
    private $physique;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


    /**
     * @Vich\UploadableField(mapping="users_pdf", fileNameProperty="PasseportName")
     * 
     * @var File
     */
    private $PasseportFile;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     *
     * @var string
     */
    private $PasseportName;

     /**
     * @Vich\UploadableField(mapping="users_pdf", fileNameProperty="CarteIdentiteName")
     * 
     * @var File
     */
    private $CarteIdentiteFile;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     *
     * @var string
     */
    private $CarteIdentiteName;

     /**
     * @Vich\UploadableField(mapping="users_pdf", fileNameProperty="BulletinNoteName")
     * 
     * @var File
     */
    private $BulletinNoteFile;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     *
     * @var string
     */
    private $BulletinNoteName;

    /**
     * @Vich\UploadableField(mapping="users_pdf", fileNameProperty="BacName")
     * 
     * @var File
     */
    private $BacFile;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     *
     * @var string
     */
    private $BacName;

    /**
     * @Vich\UploadableField(mapping="users_pdf", fileNameProperty="CredentialName")
     * 
     * @var File
     */
    private $CredentialFile;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     *
     * @var string
     */
    private $CredentialName;

    /**
     * @Vich\UploadableField(mapping="users_pdf", fileNameProperty="LettreRecommendationName")
     * 
     * @var File
     */
    private $LettreRecommendationFile;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     *
     * @var string
     */
    private $LettreRecommendationName;

    /**
     * @Vich\UploadableField(mapping="users_pdf", fileNameProperty="LettreMotivationName")
     * 
     * @var File
     */
    private $LettreMotivationFile;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     *
     * @var string
     */
    private $LettreMotivationName;

    /**
     * @ORM\Column(type="datetime")
     *
     * @var \DateTime
    */
    private $updatedAt;

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
     * Set physique
     *
     * @param \DUDEEGO\PlatformBundle\Entity\EA_Physique $physique
     *
     * @return EA_Document
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

     /**
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $pdf
     *
     * @return EA_Document
    */
    public function setPasseportFile(File $pdf = null)
    {
        $this->PasseportFile = $pdf;

        if ($pdf) 
            $this->updatedAt = new \DateTimeImmutable();
        
        return $this;
    }

    /**
     * @return File|null
     */
    public function getPasseportFile()
    {
        return $this->PasseportFile;
    }

         /**
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $pdf
     *
     * @return EA_Document
    */
    public function setCarteIdentiteFile(File $pdf = null)
    {
        $this->CarteIdentiteFile = $pdf;

        if ($pdf) 
            $this->updatedAt = new \DateTimeImmutable();
        
        return $this;
    }

    /**
     * @return File|null
     */
    public function getCarteIdentiteFile()
    {
        return $this->CarteIdentiteFile;
    }

          /**
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $pdf
     *
     * @return EA_Document
    */
    public function setBulletinNoteFile(File $pdf = null)
    {
        $this->BulletinNoteFile = $pdf;

        if ($pdf) 
            $this->updatedAt = new \DateTimeImmutable();
        
        return $this;
    }

    /**
     * @return File|null
     */
    public function getBulletinNoteFile()
    {
        return $this->BulletinNoteFile;
    }

          /**
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $pdf
     *
     * @return EA_Document
    */
    public function setBacFile(File $pdf = null)
    {
        $this->BacFile = $pdf;

        if ($pdf) 
            $this->updatedAt = new \DateTimeImmutable();
        
        return $this;
    }

    /**
     * @return File|null
     */
    public function getBacFile()
    {
        return $this->BacFile;
    }

              /**
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $pdf
     *
     * @return EA_Document
    */
    public function setCredentialFile(File $pdf = null)
    {
        $this->CredentialFile = $pdf;

        if ($pdf) 
            $this->updatedAt = new \DateTimeImmutable();
        
        return $this;
    }

    /**
     * @return File|null
     */
    public function getCredentialFile()
    {
        return $this->CredentialFile;
    }

                  /**
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $pdf
     *
     * @return EA_Document
    */
    public function setLettreRecommendationFile(File $pdf = null)
    {
        $this->LettreRecommendationFile = $pdf;

        if ($pdf) 
            $this->updatedAt = new \DateTimeImmutable();
        
        return $this;
    }

    /**
     * @return File|null
     */
    public function getLettreRecommendationFile()
    {
        return $this->LettreRecommendationFile;
    }

                  /**
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $pdf
     *
     * @return EA_Document
    */
    public function setLettreMotivationFile(File $pdf = null)
    {
        $this->LettreMotivationFile = $pdf;

        if ($pdf) 
            $this->updatedAt = new \DateTimeImmutable();
        
        return $this;
    }

    /**
     * @return File|null
     */
    public function getLettreMotivationFile()
    {
        return $this->LettreMotivationFile;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return EA_Document
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set passeportName
     *
     * @param string $passeportName
     *
     * @return EA_Document
     */
    public function setPasseportName($passeportName)
    {
        $this->PasseportName = $passeportName;

        return $this;
    }

    /**
     * Get passeportName
     *
     * @return string
     */
    public function getPasseportName()
    {
        return $this->PasseportName;
    }

    /**
     * Set carteIdentiteName
     *
     * @param string $carteIdentiteName
     *
     * @return EA_Document
     */
    public function setCarteIdentiteName($carteIdentiteName)
    {
        $this->CarteIdentiteName = $carteIdentiteName;

        return $this;
    }

    /**
     * Get carteIdentiteName
     *
     * @return string
     */
    public function getCarteIdentiteName()
    {
        return $this->CarteIdentiteName;
    }

    /**
     * Set bulletinNoteName
     *
     * @param string $bulletinNoteName
     *
     * @return EA_Document
     */
    public function setBulletinNoteName($bulletinNoteName)
    {
        $this->BulletinNoteName = $bulletinNoteName;

        return $this;
    }

    /**
     * Get bulletinNoteName
     *
     * @return string
     */
    public function getBulletinNoteName()
    {
        return $this->BulletinNoteName;
    }

    /**
     * Set bacName
     *
     * @param string $bacName
     *
     * @return EA_Document
     */
    public function setBacName($bacName)
    {
        $this->BacName = $bacName;

        return $this;
    }

    /**
     * Get bacName
     *
     * @return string
     */
    public function getBacName()
    {
        return $this->BacName;
    }

    /**
     * Set credentialName
     *
     * @param string $credentialName
     *
     * @return EA_Document
     */
    public function setCredentialName($credentialName)
    {
        $this->CredentialName = $credentialName;

        return $this;
    }

    /**
     * Get credentialName
     *
     * @return string
     */
    public function getCredentialName()
    {
        return $this->CredentialName;
    }

    /**
     * Set lettreRecommendationName
     *
     * @param string $lettreRecommendationName
     *
     * @return EA_Document
     */
    public function setLettreRecommendationName($lettreRecommendationName)
    {
        $this->LettreRecommendationName = $lettreRecommendationName;

        return $this;
    }

    /**
     * Get lettreRecommendationName
     *
     * @return string
     */
    public function getLettreRecommendationName()
    {
        return $this->LettreRecommendationName;
    }

    /**
     * Set lettreMotivationName
     *
     * @param string $lettreMotivationName
     *
     * @return EA_Document
     */
    public function setLettreMotivationName($lettreMotivationName)
    {
        $this->LettreMotivationName = $lettreMotivationName;

        return $this;
    }

    /**
     * Get lettreMotivationName
     *
     * @return string
     */
    public function getLettreMotivationName()
    {
        return $this->LettreMotivationName;
    }
}
