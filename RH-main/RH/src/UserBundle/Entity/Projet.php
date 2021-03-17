<?php

namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Projet
 *
 * @ORM\Table(name="projet")
 * @ORM\Entity(repositoryClass="UserBundle\Repository\ProjetRepository")
 */
class Projet
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
     * @ORM\Column(name="nomProjet", type="string", length=255,nullable=true)
     */
    private $nomProjet;

    /**
     * @var string
     *
     * @ORM\Column(name="NumObj", type="string", length=255,nullable=true)
     */
    private $numObj;

    /**
     * @var string
     *
     * @ORM\Column(name="descriptionPro", type="string", length=2000,nullable=true)
     */
    private $descriptionPro;

    /**
     * @var string
     *
     * @ORM\Column(name="naturePro", type="string", length=10,nullable=true)
     */
    private $naturePro;
    /**
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\User")
     * @ORM\JoinColumn(name="manager",referencedColumnName="id")
     */
    private $manager;

    /**
     * @var string
     *
     * @ORM\Column(name="clientPro", type="string", length=255,nullable=true)
     */
    private $clientPro;
    /**
     * @var string
     *
     * @ORM\Column(name="datedebut", type="date",nullable=true)
     */
    private $datedebut;
    /**
     * @var string
     *
     * @ORM\Column(name="datefin", type="date",nullable=true)
     */
    private $datefin;
    /**
     * @var string
     *
     * @ORM\Column(name="statut", type="string", length=255,nullable=true)
     */
    private $statut;
    /**
     * @var string
     *
     * @ORM\Column(name="codean", type="string", length=255,nullable=true)
     */
    private $codean;

    /**
     * @return string
     */
    public function getCodean()
    {
        return $this->codean;
    }

    /**
     * @param string $codean
     */
    public function setCodean($codean)
    {
        $this->codean = $codean;
    }


    /**
     * @return string
     */
    public function getDatedebut()
    {
        return $this->datedebut;
    }

    /**
     * @param string $datedebut
     */
    public function setDatedebut($datedebut)
    {
        $this->datedebut = $datedebut;
    }

    /**
     * @return string
     */
    public function getDatefin()
    {
        return $this->datefin;
    }

    /**
     * @param string $datefin
     */
    public function setDatefin($datefin)
    {
        $this->datefin = $datefin;
    }

    /**
     * @var string
     *
     * @ORM\Column(name="photoPro", type="string", length=5000000000,nullable=true)
     */
    private $photoPro;


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
     * Set nomProjet
     *
     * @param string $nomProjet
     *
     * @return Projet
     */
    public function setNomProjet($nomProjet)
    {
        $this->nomProjet = $nomProjet;

        return $this;
    }

    /**
     * Get nomProjet
     *
     * @return string
     */
    public function getNomProjet()
    {
        return $this->nomProjet;
    }

    /**
     * Set numObj
     *
     * @param string $numObj
     *
     * @return Projet
     */
    public function setNumObj($numObj)
    {
        $this->numObj = $numObj;

        return $this;
    }

    /**
     * Get numObj
     *
     * @return string
     */
    public function getNumObj()
    {
        return $this->numObj;
    }

    /**
     * Set descriptionPro
     *
     * @param string $descriptionPro
     *
     * @return Projet
     */
    public function setDescriptionPro($descriptionPro)
    {
        $this->descriptionPro = $descriptionPro;

        return $this;
    }

    /**
     * Get descriptionPro
     *
     * @return string
     */
    public function getDescriptionPro()
    {
        return $this->descriptionPro;
    }

    /**
     * Set naturePro
     *
     * @param string $naturePro
     *
     * @return Projet
     */
    public function setNaturePro($naturePro)
    {
        $this->naturePro = $naturePro;

        return $this;
    }

    /**
     * Get naturePro
     *
     * @return string
     */
    public function getNaturePro()
    {
        return $this->naturePro;
    }

    /**
     * Set clientPro
     *
     * @param string $clientPro
     *
     * @return Projet
     */
    public function setClientPro($clientPro)
    {
        $this->clientPro = $clientPro;

        return $this;
    }

    /**
     * Get clientPro
     *
     * @return string
     */
    public function getClientPro()
    {
        return $this->clientPro;
    }

    /**
     * Set photoPro
     *
     * @param string $photoPro
     *
     * @return Projet
     */
    public function setPhotoPro($photoPro)
    {
        $this->photoPro = $photoPro;

        return $this;
    }

    /**
     * Get photoPro
     *
     * @return string
     */
    public function getPhotoPro()
    {
        return $this->photoPro;
    }

    /**
     * @return string
     */
    public function getStatut()
    {
        return $this->statut;
    }

    /**
     * @param string $statut
     */
    public function setStatut($statut)
    {
        $this->statut = $statut;
    }

    /**
     * @return mixed
     */
    public function getManager()
    {
        return $this->manager;
    }

    /**
     * @param mixed $manager
     */
    public function setManager($manager)
    {
        $this->manager = $manager;
    }

}

