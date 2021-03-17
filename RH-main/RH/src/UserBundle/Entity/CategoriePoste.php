<?php


namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * CategoriePoste
 *
 * @ORM\Table(name="CategoriePoste")
 * @ORM\Entity(repositoryClass="UserBundle\Repository\CategoriePosteRepository")
 */
class CategoriePoste
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
     * @ORM\Column(name="categorie", type="string", length=255,nullable=true)
     */
    private $categorie;

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
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * @param string $categorie
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;
    }

}