<?php

namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * JustifT
 *
 * @ORM\Table(name="justif_t")
 * @ORM\Entity(repositoryClass="UserBundle\Repository\JustifTRepository")
 */
class JustifT
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
     * @ORM\Column(name="statut", type="string", length=1000)
     */
    private $statut;
    /**
     * @var string
     *
     * @ORM\Column(name="justif", type="string", length=1000,nullable=true)
     */
    private $justif;
    /**
     * @var string
     *
     * @ORM\Column(name="mois", type="string", length=20,nullable=true)
     */
    private $mois;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateUpload", type="date")
     */
    private $dateUpload;

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
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\User")
     * @ORM\JoinColumn(name="user",referencedColumnName="id")
     */
    private $user;

    /**
     * @return string
     */
    public function getJustif()
    {
        return $this->justif;
    }

    /**
     * @param string $justif
     */
    public function setJustif($justif)
    {
        $this->justif = $justif;
    }

    /**
     * @return string
     */
    public function getMois()
    {
        return $this->mois;
    }

    /**
     * @param string $mois
     */
    public function setMois($mois)
    {
        $this->mois = $mois;
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
     * @return JustifT
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

}

