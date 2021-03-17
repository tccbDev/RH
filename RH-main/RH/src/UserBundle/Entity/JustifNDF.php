<?php

namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * JustifNDF
 *
 * @ORM\Table(name="justif_n_d_f")
 * @ORM\Entity(repositoryClass="UserBundle\Repository\JustifNDFRepository")
 */
class JustifNDF
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
     * @ORM\Column(name="nature_achat", type="string", length=255)
     */
    private $natureAchat;
    /**
     * @var string
     *
     * @ORM\Column(name="statut", type="string", length=1000)
     */
    private $statut;
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
     * @return JustifNDF
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
     * Set natureAchat
     *
     * @param string $natureAchat
     *
     * @return JustifNDF
     */
    public function setNatureAchat($natureAchat)
    {
        $this->natureAchat = $natureAchat;

        return $this;
    }

    /**
     * Get natureAchat
     *
     * @return string
     */
    public function getNatureAchat()
    {
        return $this->natureAchat;
    }

    /**
     * Set justif
     *
     * @param string $justif
     *
     * @return JustifNDF
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

