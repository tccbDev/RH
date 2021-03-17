<?php


namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * Field
 *
 * @ORM\Table(name="filiere")
 * @ORM\Entity(repositoryClass="UserBundle\Repository\FiliereRepository")
 */
class Filiere
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
     * @ORM\Column(name="filiere", type="string", length=255,nullable=true)
     */
    private $filiere;

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
    public function getFiliere()
    {
        return $this->filiere;
    }

    /**
     * @param string $filiere
     */
    public function setFiliere($filiere)
    {
        $this->filiere = $filiere;
    }






}
