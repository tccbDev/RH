<?php

namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DevisFree
 *
 * @ORM\Table(name="devis_free")
 * @ORM\Entity(repositoryClass="UserBundle\Repository\DevisFreeRepository")
 */
class DevisFree
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
     * @var float
     *
     * @ORM\Column(name="montant", type="float")
     */
    private $montant;

    /**
     * @var string
     *
     * @ORM\Column(name="numDevis", type="string", length=255)
     */
    private $numDevis;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateDevis", type="date")
     */
    private $dateDevis;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateUpload", type="date")
     */
    private $dateUpload;

    /**
     * @var string
     *
     * @ORM\Column(name="justif", type="string", length=1000)
     */
    private $justif;
    /**
     * @var string
     *
     * @ORM\Column(name="statut", type="string", length=1000)
     */
    private $statut;

    /**
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\User")
     * @ORM\JoinColumn(name="user",referencedColumnName="id")
     */
    private $user;

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
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set montant
     *
     * @param float $montant
     *
     * @return DevisFree
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;

        return $this;
    }

    /**
     * Get montant
     *
     * @return float
     */
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * Set numDevis
     *
     * @param string $numDevis
     *
     * @return DevisFree
     */
    public function setNumDevis($numDevis)
    {
        $this->numDevis = $numDevis;

        return $this;
    }

    /**
     * Get numDevis
     *
     * @return string
     */
    public function getNumDevis()
    {
        return $this->numDevis;
    }

    /**
     * Set dateDevis
     *
     * @param \DateTime $dateDevis
     *
     * @return DevisFree
     */
    public function setDateDevis($dateDevis)
    {
        $this->dateDevis = $dateDevis;

        return $this;
    }

    /**
     * Get dateDevis
     *
     * @return \DateTime
     */
    public function getDateDevis()
    {
        return $this->dateDevis;
    }

    /**
     * Set justif
     *
     * @param string $justif
     *
     * @return DevisFree
     */
    public function setJustif($justif)
    {
        $this->justif = $justif;

        return $this;
    }

    /**
     * Get justif
     *
     * @return string
     */
    public function getJustif()
    {
        return $this->justif;
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
     * @return \DateTime
     */
    public function getDateUpload()
    {
        return $this->dateUpload;
    }

    /**
     * @param \DateTime $dateUpload
     */
    public function setDateUpload($dateUpload)
    {
        $this->dateUpload = $dateUpload;
    }

}

