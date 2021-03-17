<?php


namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * Secteur
 *
 * @ORM\Table(name="Secteur")
 * @ORM\Entity(repositoryClass="UserBundle\Repository\SecteurRepository")
 */
class Secteur
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
     * @ORM\Column(name="secteur", type="string", length=255,nullable=true)
     */
    private $secteur;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getSecteur()
    {
        return $this->secteur;
    }

    /**
     * @param string $secteur
     */
    public function setSecteur($secteur)
    {
        $this->secteur = $secteur;
    }

}