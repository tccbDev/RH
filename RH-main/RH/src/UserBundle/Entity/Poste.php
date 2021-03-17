<?php


namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * Poste
 *
 * @ORM\Table(name="poste")
 * @ORM\Entity(repositoryClass="UserBundle\Repository\PosteRepository")
 */
class Poste
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
     * @ORM\Column(name="poste", type="string", length=255,nullable=true)
     */
    private $poste;


    /**
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\Field")
     * @ORM\JoinColumn(name="field",referencedColumnName="id")
     */
    private $field;
    /**
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\Filiere")
     * @ORM\JoinColumn(name="filiere",referencedColumnName="id")
     */
    private $filiere;
    /**
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\Secteur")
     * @ORM\JoinColumn(name="secteur",referencedColumnName="id")
     */
    private $secteur;
    /**
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\CategoriePoste")
     * @ORM\JoinColumn(name="categorie",referencedColumnName="id")
     */
    private $categorie;
    /**
     * @var string
     *
     * @ORM\Column(name="salaireminimaile", type="string", length=255,nullable=true)
     */
    private $salaireMinimaile;
    /**
     * @var string
     *
     * @ORM\Column(name="tache", type="string", length=2555,nullable=true)
     */
    private $tache;


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
    public function getPoste()
    {
        return $this->poste;
    }

    /**
     * @param string $poste
     */
    public function setPoste($poste)
    {
        $this->poste = $poste;
    }

    /**
     * @return mixed
     */
    public function getField()
    {
        return $this->field;
    }

    /**
     * @param mixed $field
     */
    public function setField($field)
    {
        $this->field = $field;
    }



    /**
     * @return mixed
     */
    public function getSecteur()
    {
        return $this->secteur;
    }

    /**
     * @param mixed $secteur
     */
    public function setSecteur($secteur)
    {
        $this->secteur = $secteur;
    }

    /**
     * @return mixed
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * @param mixed $categorie
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;
    }

    /**
     * @return string
     */
    public function getSalaireMinimaile()
    {
        return $this->salaireMinimaile;
    }

    /**
     * @param string $salaireMinimaile
     */
    public function setSalaireMinimaile($salaireMinimaile)
    {
        $this->salaireMinimaile = $salaireMinimaile;
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
     * @return mixed
     */
    public function getFiliere()
    {
        return $this->filiere;
    }

    /**
     * @param mixed $filiere
     */
    public function setFiliere($filiere)
    {
        $this->filiere = $filiere;
    }



}