<?php

namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="UserBundle\Repository\UserRepository")
 */
class User
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
     * @ORM\Column(name="username", type="string", length=255,nullable=true)
     */
    private $username;
    /**
     * @var string
     *
     * @ORM\Column(name="statut", type="string", length=255,nullable=true)
     */
    private $statut;

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
     * @var string
     *
     * @ORM\Column(name="gender", type="string", length=255,nullable=true)
     */
    private $gender;

    /**
     * @return string
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @param string $gender
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255,nullable=true)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="role", type="string", length=255,nullable=true)
     */
    private $role;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255,nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_j_f", type="string", length=255 ,nullable=true)
     */
    private $nomJF;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255 ,nullable=true)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255,nullable=true)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="codeP", type="string", length=255,nullable=true)
     */
    private $codeP;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=255,nullable=true)
     */
    private $ville;

    /**
     * @var string
     *
     * @ORM\Column(name="pays", type="string", length=255,nullable=true)
     */
    private $pays;

    /**
     * @var string
     *
     * @ORM\Column(name="num_tel", type="string", length=255,nullable=true)
     */
    private $numTel;

    /**
     * @var string
     *
     * @ORM\Column(name="num_tel_p", type="string", length=255,nullable=true)
     */
    private $numTelP;
    /**
     * @var string
     *
     * @ORM\Column(name="$dernier_diplome", type="string", length=255,nullable=true)
     */
    private $dernier_diplome;
    /**
     * @var string
     *
     * @ORM\Column(name="$dernierecole", type="string", length=255,nullable=true)
     */
    private $dernierecole;

    /**
     * @return string
     */
    public function getDernierecole()
    {
        return $this->dernierecole;
    }

    /**
     * @param string $dernierecole
     */
    public function setDernierecole($dernierecole)
    {
        $this->dernierecole = $dernierecole;
    }
    /**
     * @return string
     */
    public function getDernierDiplome()
    {
        return $this->dernier_diplome;
    }

    /**
     * @param string $dernier_diplome
     */
    public function setDernierDiplome($dernier_diplome)
    {
        $this->dernier_diplome = $dernier_diplome;
    }

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255,nullable=true)
     */
    private $email;

    /**
     * @var int
     *
     * @ORM\Column(name="deduction_sociale", type="integer",nullable=true)
     */
    private $deductionSociale;

    /**
     * @var int
     *
     * @ORM\Column(name="dec_impo", type="integer",nullable=true)
     */
    private $decImpo;

    /**
     * @var string
     *
     * @ORM\Column(name="dom_fisc", type="string", length=255,nullable=true)
     */
    private $domFisc;

    /**
     * @var string
     *
     * @ORM\Column(name="situation_fam", type="string", length=255,nullable=true)
     */
    private $situationFam;

    /**
     * @var int
     *
     * @ORM\Column(name="nbr_pers_charg", type="integer",nullable=true)
     */
    private $nbrPersCharg;

    /**
     * @var string
     *
     * @ORM\Column(name="nbr_enfants", type="string", length=255,nullable=true)
     */
    private $nbrEnfants;

    /**
     * @var string
     *
     * @ORM\Column(name="numero_sec_soc", type="string", length=255,nullable=true)
     */
    private $numeroSecSoc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_Nais", type="date",nullable=true)
     */
    private $dateNais;

    /**
     * @var string
     *
     * @ORM\Column(name="lieuNais", type="string", length=255,nullable=true)
     */
    private $lieuNais;

    /**
     * @var string
     *
     * @ORM\Column(name="nationalite", type="string", length=255,nullable=true)
     */
    private $nationalite;

    /**
     * @var string
     *
     * @ORM\Column(name="num_cartesej", type="string", length=255,nullable=true)
     */
    private $numCartesej;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_val_num_cartesej", type="date",nullable=true)
     */
    private $dateValNumCartesej;

    /**
     * @var int
     *
     * @ORM\Column(name="retraite", type="integer",nullable=true)
     */
    private $retraite;

    /**
     * @var string
     *
     * @ORM\Column(name="retraite_audiens", type="string", length=255,nullable=true)
     */
    private $retraiteAudiens;

    /**
     * @var string
     *
     * @ORM\Column(name="num_conges_spectacle", type="string", length=255,nullable=true)
     */
    private $numCongesSpectacle;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_dernier_visite_med", type="date",nullable=true)
     */
    private $dateDernierVisiteMed;

    /**
     * @var bool
     *
     * @ORM\Column(name="tra_handicap", type="boolean",nullable=true)
     */
    private $traHandicap;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse_centre_sec", type="string", length=255,nullable=true)
     */
    private $adresseCentreSec;

    /**
     * @var string
     *
     * @ORM\Column(name="codepostal_centre_sec", type="string", length=255,nullable=true)
     */
    private $codepostalCentreSec;

    /**
     * @var string
     *
     * @ORM\Column(name="ville_centre_sec", type="string", length=255,nullable=true)
     */
    private $villeCentreSec;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_persu", type="string", length=255,nullable=true)
     */
    private $nomPersu;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom_persu", type="string", length=255,nullable=true)
     */
    private $prenomPersu;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse_persu", type="string", length=255,nullable=true)
     */
    private $adressePersu;

    /**
     * @var string
     *
     * @ORM\Column(name="numtel_persu", type="string", length=255,nullable=true)
     */
    private $numtelPersu;

    /**
     * @var string
     *
     * @ORM\Column(name="carte_identite", type="string", length=255,nullable=true)
     */
    private $carteIdentite;

    /**
     * @var string
     *
     * @ORM\Column(name="diplome", type="string", length=255,nullable=true)
     */
    private $diplome;

    /**
     * @var string
     *
     * @ORM\Column(name="copie_diplome", type="string", length=255,nullable=true)
     */
    private $copieDiplome;

    /**
     * @var string
     *
     * @ORM\Column(name="carte_vitale", type="string", length=255,nullable=true)
     */
    private $carteVitale;

    /**
     * @var string
     *
     * @ORM\Column(name="attestation_visite_med", type="string", length=255,nullable=true)
     */
    private $attestationVisiteMed;

    /**
     * @var string
     *
     * @ORM\Column(name="iban", type="string", length=255,nullable=true)
     */
    private $iban;

    /**
     * @var string
     *
     * @ORM\Column(name="rib", type="string", length=255,nullable=true)
     */
    private $rib;
    /**
     * @var string
     *
     * @ORM\Column(name="siren", type="string", length=255,nullable=true)
     */
    private $siren;
    /**
     * @var string
     *
     * @ORM\Column(name="siret", type="string", length=255,nullable=true)
     */
    private $siret;
    /**
     * @var string
     *
     * @ORM\Column(name="numtva", type="string", length=255,nullable=true)
     */
    private $numtva;
    /**

    /**
     * @var string
     *
     * @ORM\Column(name="numtvac", type="string", length=255,nullable=true)
     */
    private $numtvac;
    /**

    /**
     * @var string
     *
     * @ORM\Column(name="nda", type="string", length=255,nullable=true)
     */
    private $nda;

    /**
     * @return string
     */
    public function getSiren()
    {
        return $this->siren;
    }

    /**
     * @param string $siren
     */
    public function setSiren($siren)
    {
        $this->siren = $siren;
    }

    /**
     * @return string
     */
    public function getSiret()
    {
        return $this->siret;
    }

    /**
     * @param string $siret
     */
    public function setSiret($siret)
    {
        $this->siret = $siret;
    }

    /**
     * @return string
     */
    public function getNumtva()
    {
        return $this->numtva;
    }

    /**
     * @param string $numtva
     */
    public function setNumtva($numtva)
    {
        $this->numtva = $numtva;
    }

    /**
     * @return string
     */
    public function getNumtvac()
    {
        return $this->numtvac;
    }

    /**
     * @param string $numtvac
     */
    public function setNumtvac($numtvac)
    {
        $this->numtvac = $numtvac;
    }

    /**
     * @return string
     */
    public function getNda()
    {
        return $this->nda;
    }

    /**
     * @param string $nda
     */
    public function setNda($nda)
    {
        $this->nda = $nda;
    }
    /**


    /**
     * @var string
     *
     * @ORM\Column(name="c_rib", type="string", length=255,nullable=true)
     */
    private $cRib;

    /**
     * @var string
     *
     * @ORM\Column(name="photo", type="string", length=255,nullable=true)
     */
    private $photo;


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
     * Set username
     *
     * @param string $username
     *
     * @return User
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set role
     *
     * @param string $role
     *
     * @return User
     */
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role
     *
     * @return string
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return User
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set nomJF
     *
     * @param string $nomJF
     *
     * @return User
     */
    public function setNomJF($nomJF)
    {
        $this->nomJF = $nomJF;

        return $this;
    }

    /**
     * Get nomJF
     *
     * @return string
     */
    public function getNomJF()
    {
        return $this->nomJF;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return User
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     *
     * @return User
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set codeP
     *
     * @param string $codeP
     *
     * @return User
     */
    public function setCodeP($codeP)
    {
        $this->codeP = $codeP;

        return $this;
    }

    /**
     * Get codeP
     *
     * @return string
     */
    public function getCodeP()
    {
        return $this->codeP;
    }

    /**
     * Set ville
     *
     * @param string $ville
     *
     * @return User
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set pays
     *
     * @param string $pays
     *
     * @return User
     */
    public function setPays($pays)
    {
        $this->pays = $pays;

        return $this;
    }

    /**
     * Get pays
     *
     * @return string
     */
    public function getPays()
    {
        return $this->pays;
    }

    /**
     * Set numTel
     *
     * @param string $numTel
     *
     * @return User
     */
    public function setNumTel($numTel)
    {
        $this->numTel = $numTel;

        return $this;
    }

    /**
     * Get numTel
     *
     * @return string
     */
    public function getNumTel()
    {
        return $this->numTel;
    }

    /**
     * Set numTelP
     *
     * @param string $numTelP
     *
     * @return User
     */
    public function setNumTelP($numTelP)
    {
        $this->numTelP = $numTelP;

        return $this;
    }

    /**
     * Get numTelP
     *
     * @return string
     */
    public function getNumTelP()
    {
        return $this->numTelP;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set deductionSociale
     *
     * @param integer $deductionSociale
     *
     * @return User
     */
    public function setDeductionSociale($deductionSociale)
    {
        $this->deductionSociale = $deductionSociale;

        return $this;
    }

    /**
     * Get deductionSociale
     *
     * @return int
     */
    public function getDeductionSociale()
    {
        return $this->deductionSociale;
    }

    /**
     * Set decImpo
     *
     * @param integer $decImpo
     *
     * @return User
     */
    public function setDecImpo($decImpo)
    {
        $this->decImpo = $decImpo;

        return $this;
    }

    /**
     * Get decImpo
     *
     * @return int
     */
    public function getDecImpo()
    {
        return $this->decImpo;
    }

    /**
     * Set domFisc
     *
     * @param string $domFisc
     *
     * @return User
     */
    public function setDomFisc($domFisc)
    {
        $this->domFisc = $domFisc;

        return $this;
    }

    /**
     * Get domFisc
     *
     * @return string
     */
    public function getDomFisc()
    {
        return $this->domFisc;
    }

    /**
     * Set situationFam
     *
     * @param string $situationFam
     *
     * @return User
     */
    public function setSituationFam($situationFam)
    {
        $this->situationFam = $situationFam;

        return $this;
    }

    /**
     * Get situationFam
     *
     * @return string
     */
    public function getSituationFam()
    {
        return $this->situationFam;
    }

    /**
     * Set nbrPersCharg
     *
     * @param integer $nbrPersCharg
     *
     * @return User
     */
    public function setNbrPersCharg($nbrPersCharg)
    {
        $this->nbrPersCharg = $nbrPersCharg;

        return $this;
    }

    /**
     * Get nbrPersCharg
     *
     * @return int
     */
    public function getNbrPersCharg()
    {
        return $this->nbrPersCharg;
    }

    /**
     * Set nbrEnfants
     *
     * @param string $nbrEnfants
     *
     * @return User
     */
    public function setNbrEnfants($nbrEnfants)
    {
        $this->nbrEnfants = $nbrEnfants;

        return $this;
    }

    /**
     * Get nbrEnfants
     *
     * @return string
     */
    public function getNbrEnfants()
    {
        return $this->nbrEnfants;
    }

    /**
     * Set numeroSecSoc
     *
     * @param string $numeroSecSoc
     *
     * @return User
     */
    public function setNumeroSecSoc($numeroSecSoc)
    {
        $this->numeroSecSoc = $numeroSecSoc;

        return $this;
    }

    /**
     * Get numeroSecSoc
     *
     * @return string
     */
    public function getNumeroSecSoc()
    {
        return $this->numeroSecSoc;
    }

    /**
     * Set dateNais
     *
     * @param \DateTime $dateNais
     *
     * @return User
     */
    public function setDateNais($dateNais)
    {
        $this->dateNais = $dateNais;

        return $this;
    }

    /**
     * Get dateNais
     *
     * @return \DateTime
     */
    public function getDateNais()
    {
        return $this->dateNais;
    }

    /**
     * Set lieuNais
     *
     * @param string $lieuNais
     *
     * @return User
     */
    public function setLieuNais($lieuNais)
    {
        $this->lieuNais = $lieuNais;

        return $this;
    }

    /**
     * Get lieuNais
     *
     * @return string
     */
    public function getLieuNais()
    {
        return $this->lieuNais;
    }

    /**
     * Set nationalite
     *
     * @param string $nationalite
     *
     * @return User
     */
    public function setNationalite($nationalite)
    {
        $this->nationalite = $nationalite;

        return $this;
    }

    /**
     * Get nationalite
     *
     * @return string
     */
    public function getNationalite()
    {
        return $this->nationalite;
    }

    /**
     * Set numCartesej
     *
     * @param string $numCartesej
     *
     * @return User
     */
    public function setNumCartesej($numCartesej)
    {
        $this->numCartesej = $numCartesej;

        return $this;
    }

    /**
     * Get numCartesej
     *
     * @return string
     */
    public function getNumCartesej()
    {
        return $this->numCartesej;
    }

    /**
     * Set dateValNumCartesej
     *
     * @param \DateTime $dateValNumCartesej
     *
     * @return User
     */
    public function setDateValNumCartesej($dateValNumCartesej)
    {
        $this->dateValNumCartesej = $dateValNumCartesej;

        return $this;
    }

    /**
     * Get dateValNumCartesej
     *
     * @return \DateTime
     */
    public function getDateValNumCartesej()
    {
        return $this->dateValNumCartesej;
    }

    /**
     * Set retraite
     *
     * @param integer $retraite
     *
     * @return User
     */
    public function setRetraite($retraite)
    {
        $this->retraite = $retraite;

        return $this;
    }

    /**
     * Get retraite
     *
     * @return int
     */
    public function getRetraite()
    {
        return $this->retraite;
    }

    /**
     * Set retraiteAudiens
     *
     * @param string $retraiteAudiens
     *
     * @return User
     */
    public function setRetraiteAudiens($retraiteAudiens)
    {
        $this->retraiteAudiens = $retraiteAudiens;

        return $this;
    }

    /**
     * Get retraiteAudiens
     *
     * @return string
     */
    public function getRetraiteAudiens()
    {
        return $this->retraiteAudiens;
    }

    /**
     * Set numCongesSpectacle
     *
     * @param string $numCongesSpectacle
     *
     * @return User
     */
    public function setNumCongesSpectacle($numCongesSpectacle)
    {
        $this->numCongesSpectacle = $numCongesSpectacle;

        return $this;
    }

    /**
     * Get numCongesSpectacle
     *
     * @return string
     */
    public function getNumCongesSpectacle()
    {
        return $this->numCongesSpectacle;
    }

    /**
     * Set dateDernierVisiteMed
     *
     * @param \DateTime $dateDernierVisiteMed
     *
     * @return User
     */
    public function setDateDernierVisiteMed($dateDernierVisiteMed)
    {
        $this->dateDernierVisiteMed = $dateDernierVisiteMed;

        return $this;
    }

    /**
     * Get dateDernierVisiteMed
     *
     * @return \DateTime
     */
    public function getDateDernierVisiteMed()
    {
        return $this->dateDernierVisiteMed;
    }

    /**
     * Set traHandicap
     *
     * @param boolean $traHandicap
     *
     * @return User
     */
    public function setTraHandicap($traHandicap)
    {
        $this->traHandicap = $traHandicap;

        return $this;
    }

    /**
     * Get traHandicap
     *
     * @return bool
     */
    public function getTraHandicap()
    {
        return $this->traHandicap;
    }

    /**
     * Set adresseCentreSec
     *
     * @param string $adresseCentreSec
     *
     * @return User
     */
    public function setAdresseCentreSec($adresseCentreSec)
    {
        $this->adresseCentreSec = $adresseCentreSec;

        return $this;
    }

    /**
     * Get adresseCentreSec
     *
     * @return string
     */
    public function getAdresseCentreSec()
    {
        return $this->adresseCentreSec;
    }

    /**
     * Set codepostalCentreSec
     *
     * @param string $codepostalCentreSec
     *
     * @return User
     */
    public function setCodepostalCentreSec($codepostalCentreSec)
    {
        $this->codepostalCentreSec = $codepostalCentreSec;

        return $this;
    }

    /**
     * Get codepostalCentreSec
     *
     * @return string
     */
    public function getCodepostalCentreSec()
    {
        return $this->codepostalCentreSec;
    }

    /**
     * Set villeCentreSec
     *
     * @param string $villeCentreSec
     *
     * @return User
     */
    public function setVilleCentreSec($villeCentreSec)
    {
        $this->villeCentreSec = $villeCentreSec;

        return $this;
    }

    /**
     * Get villeCentreSec
     *
     * @return string
     */
    public function getVilleCentreSec()
    {
        return $this->villeCentreSec;
    }

    /**
     * Set nomPersu
     *
     * @param string $nomPersu
     *
     * @return User
     */
    public function setNomPersu($nomPersu)
    {
        $this->nomPersu = $nomPersu;

        return $this;
    }

    /**
     * Get nomPersu
     *
     * @return string
     */
    public function getNomPersu()
    {
        return $this->nomPersu;
    }

    /**
     * Set prenomPersu
     *
     * @param string $prenomPersu
     *
     * @return User
     */
    public function setPrenomPersu($prenomPersu)
    {
        $this->prenomPersu = $prenomPersu;

        return $this;
    }

    /**
     * Get prenomPersu
     *
     * @return string
     */
    public function getPrenomPersu()
    {
        return $this->prenomPersu;
    }

    /**
     * Set adressePersu
     *
     * @param string $adressePersu
     *
     * @return User
     */
    public function setAdressePersu($adressePersu)
    {
        $this->adressePersu = $adressePersu;

        return $this;
    }

    /**
     * Get adressePersu
     *
     * @return string
     */
    public function getAdressePersu()
    {
        return $this->adressePersu;
    }

    /**
     * Set numtelPersu
     *
     * @param string $numtelPersu
     *
     * @return User
     */
    public function setNumtelPersu($numtelPersu)
    {
        $this->numtelPersu = $numtelPersu;

        return $this;
    }

    /**
     * Get numtelPersu
     *
     * @return string
     */
    public function getNumtelPersu()
    {
        return $this->numtelPersu;
    }

    /**
     * Set carteIdentite
     *
     * @param string $carteIdentite
     *
     * @return User
     */
    public function setCarteIdentite($carteIdentite)
    {
        $this->carteIdentite = $carteIdentite;

        return $this;
    }

    /**
     * Get carteIdentite
     *
     * @return string
     */
    public function getCarteIdentite()
    {
        return $this->carteIdentite;
    }

    /**
     * Set diplome
     *
     * @param string $diplome
     *
     * @return User
     */
    public function setDiplome($diplome)
    {
        $this->diplome = $diplome;

        return $this;
    }

    /**
     * Get diplome
     *
     * @return string
     */
    public function getDiplome()
    {
        return $this->diplome;
    }

    /**
     * Set copieDiplome
     *
     * @param string $copieDiplome
     *
     * @return User
     */
    public function setCopieDiplome($copieDiplome)
    {
        $this->copieDiplome = $copieDiplome;

        return $this;
    }

    /**
     * Get copieDiplome
     *
     * @return string
     */
    public function getCopieDiplome()
    {
        return $this->copieDiplome;
    }

    /**
     * Set carteVitale
     *
     * @param string $carteVitale
     *
     * @return User
     */
    public function setCarteVitale($carteVitale)
    {
        $this->carteVitale = $carteVitale;

        return $this;
    }

    /**
     * Get carteVitale
     *
     * @return string
     */
    public function getCarteVitale()
    {
        return $this->carteVitale;
    }

    /**
     * Set attestationVisiteMed
     *
     * @param string $attestationVisiteMed
     *
     * @return User
     */
    public function setAttestationVisiteMed($attestationVisiteMed)
    {
        $this->attestationVisiteMed = $attestationVisiteMed;

        return $this;
    }

    /**
     * Get attestationVisiteMed
     *
     * @return string
     */
    public function getAttestationVisiteMed()
    {
        return $this->attestationVisiteMed;
    }

    /**
     * Set iban
     *
     * @param string $iban
     *
     * @return User
     */
    public function setIban($iban)
    {
        $this->iban = $iban;

        return $this;
    }

    /**
     * Get iban
     *
     * @return string
     */
    public function getIban()
    {
        return $this->iban;
    }

    /**
     * Set rib
     *
     * @param string $rib
     *
     * @return User
     */
    public function setRib($rib)
    {
        $this->rib = $rib;

        return $this;
    }

    /**
     * Get rib
     *
     * @return string
     */
    public function getRib()
    {
        return $this->rib;
    }

    /**
     * Set cRib
     *
     * @param string $cRib
     *
     * @return User
     */
    public function setCRib($cRib)
    {
        $this->cRib = $cRib;

        return $this;
    }

    /**
     * Get cRib
     *
     * @return string
     */
    public function getCRib()
    {
        return $this->cRib;
    }

    /**
     * Set photo
     *
     * @param string $photo
     *
     * @return User
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo
     *
     * @return string
     */
    public function getPhoto()
    {
        return $this->photo;
    }
}

