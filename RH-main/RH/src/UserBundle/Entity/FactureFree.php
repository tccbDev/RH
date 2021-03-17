<?php

namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FactureFree
 *
 * @ORM\Table(name="facture_free")
 * @ORM\Entity(repositoryClass="UserBundle\Repository\FactureFreeRepository")
 */
class FactureFree
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
     * @ORM\Column(name="numFacture", type="string", length=255)
     */
    private $numFacture;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateFacture", type="date")
     */
    private $dateFacture;

    /**
     * @var float
     *
     * @ORM\Column(name="devisFacture", type="float")
     */
    private $devisFacture;

    /**
     * @var string
     *
     * @ORM\Column(name="justif", type="string", length=255)
     */
    private $justif;

    /**
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\User")
     * @ORM\JoinColumn(name="user",referencedColumnName="id")
     */
    private $user;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateUpload", type="date")
     */
    private $dateUpload;
    /**
     * @var string
     *
     * @ORM\Column(name="statut", type="string", length=1000)
     */
    private $statut;

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
     * @return FactureFree
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
     * Set numFacture
     *
     * @param string $numFacture
     *
     * @return FactureFree
     */
    public function setNumFacture($numFacture)
    {
        $this->numFacture = $numFacture;

        return $this;
    }

    /**
     * Get numFacture
     *
     * @return string
     */
    public function getNumFacture()
    {
        return $this->numFacture;
    }

    /**
     * Set dateFacture
     *
     * @param \DateTime $dateFacture
     *
     * @return FactureFree
     */
    public function setDateFacture($dateFacture)
    {
        $this->dateFacture = $dateFacture;

        return $this;
    }

    /**
     * Get dateFacture
     *
     * @return \DateTime
     */
    public function getDateFacture()
    {
        return $this->dateFacture;
    }

    /**
     * Set devisFacture
     *
     * @param float $devisFacture
     *
     * @return FactureFree
     */
    public function setDevisFacture($devisFacture)
    {
        $this->devisFacture = $devisFacture;

        return $this;
    }

    /**
     * Get devisFacture
     *
     * @return float
     */
    public function getDevisFacture()
    {
        return $this->devisFacture;
    }

    /**
     * Set justif
     *
     * @param string $justif
     *
     * @return FactureFree
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

