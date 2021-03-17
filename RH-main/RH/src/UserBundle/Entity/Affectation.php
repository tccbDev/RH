<?php


namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * Affectation
 *
 * @ORM\Table(name="affectation")
 * @ORM\Entity(repositoryClass="UserBundle\Repository\AffectationRepository")
 */
class Affectation
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
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\User")
     * @ORM\JoinColumn(name="user",referencedColumnName="id")
     */
    private $user;

    /**
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\Projet")
     * @ORM\JoinColumn(name="projet",referencedColumnName="id")
     */
    private $projet;
    /**
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\Poste")
     * @ORM\JoinColumn(name="poste",referencedColumnName="id")
     */
    private $poste;
    /**
     * @var string
     *
     * @ORM\Column(name="salaire", type="string", length=255,nullable=true)
     */
    private $salaire;

    /**
     * @var string
     *
     * @ORM\Column(name="TypePoste", type="string", length=255,nullable=true)
     */
    private $typePoste;
    /**
     * @var string
     *
     * @ORM\Column(name="tache", type="string", length=255,nullable=true)
     */
    private $tache;
    /**
     * @var string
     *
     * @ORM\Column(name="tuteur", type="string", length=255,nullable=true)
     */
    private $tuteur;
    /**
     * @var string
     *
     * @ORM\Column(name="dates", type="string", length=2000,nullable=true)
     */
    private $dates;
    /**
     * @var float
     *
     * @ORM\Column(name="nbrdates", type="float",nullable=true)
     */
    private $nbrdates;
    /**
     * @var string
     *
     * @ORM\Column(name="validedates", type="string", length=2000,nullable=true)
     */
    private $validedates;
    /**
     * @var string
     *
     * @ORM\Column(name="SalaryUpdate", type="string", length=2000,nullable=true)
     */
    private $SalaryUpdate;
    /**
     * @var float
     *
     * @ORM\Column(name="nbrvalidedates", type="float",nullable=true)
     */
    private $nbrvalidedates;

    /**
     * @return float
     */
    public function getNbrdates()
    {
        return $this->nbrdates;
    }

    /**
     * @param float $nbrdates
     */
    public function setNbrdates($nbrdates)
    {
        $this->nbrdates = $nbrdates;
    }

    /**
     * @return float
     */
    public function getNbrvalidedates()
    {
        return $this->nbrvalidedates;
    }

    /**
     * @param float $nbrvalidedates
     */
    public function setNbrvalidedates($nbrvalidedates)
    {
        $this->nbrvalidedates = $nbrvalidedates;
    }


    /**
     * @return string
     */
    public function getValidedates()
    {
        return $this->validedates;
    }

    /**
     * @param string $validedates
     */
    public function setValidedates($validedates)
    {
        $this->validedates = $validedates;
    }


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
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

    /**
     * @return mixed
     */
    public function getProjet()
    {
        return $this->projet;
    }

    /**
     * @param mixed $projet
     */
    public function setProjet($projet)
    {
        $this->projet = $projet;
    }

    /**
     * @return mixed
     */
    public function getPoste()
    {
        return $this->poste;
    }

    /**
     * @param mixed $poste
     */
    public function setPoste($poste)
    {
        $this->poste = $poste;
    }

    /**
     * @return string
     */
    public function getSalaire()
    {
        return $this->salaire;
    }

    /**
     * @param string $salaire
     */
    public function setSalaire($salaire)
    {
        $this->salaire = $salaire;
    }

    /**
     * @return string
     */
    public function getDates()
    {
        return $this->dates;
    }

    /**
     * @param string $dates
     */
    public function setDates($dates)
    {
        $this->dates = $dates;
    }

    /**
     * @return string
     */
    public function getTypePoste()
    {
        return $this->typePoste;
    }

    /**
     * @param string $typePoste
     */
    public function setTypePoste($typePoste)
    {
        $this->typePoste = $typePoste;
    }

    /**
     * @return string
     */
    public function getTache()
    {
        return $this->tache;
    }

    /**
     * @param string $tache
     */
    public function setTache($tache)
    {
        $this->tache = $tache;
    }

    /**
     * @return string
     */
    public function getTuteur()
    {
        return $this->tuteur;
    }

    /**
     * @param string $tuteur
     */
    public function setTuteur($tuteur)
    {
        $this->tuteur = $tuteur;
    }

    /**
     * @return string
     */
    public function getSalaryUpdate()
    {
        return $this->SalaryUpdate;
    }

    /**
     * @param string $SalaryUpdate
     */
    public function setSalaryUpdate($SalaryUpdate)
    {
        $this->SalaryUpdate = $SalaryUpdate;
    }

}