<?php
namespace UserBundle\Controller;

use Swift_Mailer;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\DependencyInjection\Tests\Compiler\J;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Validator\Constraints\Date;
use UserBundle\Entity\Affectation;
use UserBundle\Entity\DevisFree;
use UserBundle\Entity\FactureFree;
use UserBundle\Entity\JustifNDF;
use UserBundle\Entity\JustifT;
use UserBundle\Entity\Poste;
use UserBundle\Entity\Projet;
use UserBundle\Entity\User;

header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET, POST");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, X-Requested-With");
class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@User\Default\index.html.twig');
    }
    public function ResgiterAction(Request $request){
    $content = $request->getContent();
    $json = json_decode($content, true);
    $user = new User();
    $user->setUsername($json["username"]);
    $user->setPassword($json["password"]);
    $user->setEmail($json["email"]);
    $em = $this->getDoctrine()->getManager();
    $em->persist($user);
    $em->flush();
    return new Response('Done',200);

}
    public function ResgiterAdminAction(Request $request){
        $content = $request->getContent();
        $json = json_decode($content, true);
        $user = new User();
        $user->setUsername($json["username"]);
        $user->setPassword($json["password"]);
        $user->setEmail($json["email"]);
        $user->setRole($json["role"]);
        $em = $this->getDoctrine()->getManager();
        $em->persist($user);
        $em->flush();
        return new Response('Done',200);

    }
    public function LoginAction(Request $request){
        $content = $request->getContent();
        $json = json_decode($content, true);
        $user = $this->getDoctrine()->getRepository(User::class)->findOneBy(array("email"=>$json["email"]));

        if($user){
            if($user->getPassword() == $json["password"]){
                $encoders = array(new XmlEncoder(), new JsonEncoder());
                $normalizer = new ObjectNormalizer();
                $normalizer->setCircularReferenceLimit(2);

                $normalizer->setCircularReferenceHandler(function ($object) {
                    return $object->getId();
                });
                $normalizers = array($normalizer);
                $serializer = new Serializer($normalizers, $encoders);
                $formatted = $serializer->normalize($user);
                return new JsonResponse($formatted,200);
                //return new JsonResponse($user,200);
            }
            else{
                return new Response("Mot de passe invalide",500);
            }
        }else{
            return new Response("Email invalide",500);
        }
    }
    public function AddProAction(Request $request){
        $content = $request->getContent();
        $json = json_decode($content, true);
        $manager = $this->getDoctrine()->getRepository(User::class)->findOneBy(array("nom"=>$json["manager"]));
        $projet = new Projet();
        $projet->setNomProjet($json["nomPro"]);
        $projet->setNumObj($json["numObj"]);
        $projet->setDescriptionPro($json["description"]);
        $projet->setNaturePro($json["nature"]);
        $projet->setClientPro($json["nomCli"]);
        $projet->setCodean($json["codean"]);
        $projet->setStatut("En Cours");
        $projet->setDatedebut(new \DateTime($json["datedebut"]));
        $projet->setDatefin(new \DateTime($json["datefin"]));
        $projet->setManager($manager);
        $f = "hello";
        $filee = $json["image"];
        //$data = base64_decode($file);
        $filename = md5(uniqid()).'.jpeg';
        $file=fopen('../web/'.$filename, 'wb');

        fwrite($file, base64_decode($filee));

        fclose($file);
        //$fileMoved = rename('../webimage.jpeg', '../web/image.jpeg');
        //$marque->setLogo("/logos/".$fileName);
        $projet->setPhotoPro($filename);
        $em = $this->getDoctrine()->getManager();
        $em->persist($projet);
        $em->flush();
        return new Response('Done',200);

    }
    public function listeDesSalarieAction(){
        $user = $this->getDoctrine()->getRepository(User::class)->findBy(array("role"=>"user"));
        if($user){
            $encoders = array(new XmlEncoder(), new JsonEncoder());
            $normalizer = new ObjectNormalizer();
            $normalizer->setCircularReferenceLimit(2);

            $normalizer->setCircularReferenceHandler(function ($object) {
                return $object->getId();
            });
            $normalizers = array($normalizer);
            $serializer = new Serializer($normalizers, $encoders);
            $formatted = $serializer->normalize($user);
            return new JsonResponse(json_encode($formatted));
        }else{
            return new JsonResponse("Empty",500);
        }
    }
    public function ListProjectsAction(){
        $projet = $this->getDoctrine()->getRepository(Projet::class)->findAll();
        if($projet){
            $encoders = array(new XmlEncoder(), new JsonEncoder());
            $normalizer = new ObjectNormalizer();
            $normalizer->setCircularReferenceLimit(2);

            $normalizer->setCircularReferenceHandler(function ($object) {
                return $object->getId();
            });
            $normalizers = array($normalizer);
            $serializer = new Serializer($normalizers, $encoders);
            $formatted = $serializer->normalize($projet);
            return new JsonResponse(json_encode($formatted));
        }else{
            return new JsonResponse("Empty",500);
        }
    }
    public function getListProjectUserAction($id){
        $user = $this->getDoctrine()->getRepository(User::class)->find($id);
        if($user){
            $projet = $this->getDoctrine()->getRepository(Affectation::class)->findBy(array("user"=>$user));
            if($projet){
                $encoders = array(new XmlEncoder(), new JsonEncoder());
                $normalizer = new ObjectNormalizer();
                $normalizer->setCircularReferenceLimit(2);

                $normalizer->setCircularReferenceHandler(function ($object) {
                    return $object->getId();
                });
                $normalizers = array($normalizer);
                $serializer = new Serializer($normalizers, $encoders);
                $formatted = $serializer->normalize($projet);
                return new JsonResponse(json_encode($formatted));
            }else{
                return new JsonResponse("Empty",500);
            }
        }
        else{
            return new JsonResponse("Empty",500);
        }
    }
    public function listeDesPostesAction(){
        $poste = $this->getDoctrine()->getRepository(Poste::class)->findAll();
        $p = [];
        foreach ($poste as $x){
            array_push($p,$x->getPoste());
        }
        return new JsonResponse($p);
    }
    public function getPosteByNameAction(Request $request){
        $content = $request->getContent();
        $json = json_decode($content, true);
        $poste = $this->getDoctrine()->getRepository(Poste::class)->findBy(array("poste"=>$json["poste"]));
        if($poste){
            $encoders = array(new XmlEncoder(), new JsonEncoder());
            $normalizer = new ObjectNormalizer();
            $normalizer->setCircularReferenceLimit(2);

            $normalizer->setCircularReferenceHandler(function ($object) {
                return $object->getId();
            });
            $normalizers = array($normalizer);
            $serializer = new Serializer($normalizers, $encoders);
            $formatted = $serializer->normalize($poste);
            return new JsonResponse(json_encode($formatted));
        }else{
            return new JsonResponse("Empty",500);
        }
    }
    public function AddAffectationAction(Request $request){
        $content = $request->getContent();
        $json = json_decode($content, true);
        $affectation = new Affectation();
        $user = $this->getDoctrine()->getRepository(User::class)->find($json["iduser"]);
        $projet = $this->getDoctrine()->getRepository(Projet::class)->find($json["idprojet"]);
        $poste = $this->getDoctrine()->getRepository(Poste::class)->find($json["idposte"]);
        //return new JsonResponse($projet->getId());
        $affectation->setUser($user);
        $affectation->setPoste($poste);
        $affectation->setProjet($projet);
        $nbrJours = 0;
        foreach ($json["date"] as $d){
            $dateDebut = new \DateTime($d[0]);
            $dateFin = new \DateTime($d[0]);
            $nbrJours = $nbrJours + $dateFin->diff($dateDebut)->d +1;
        }
        $affectation->setNbrdates($nbrJours);
        $affectation->setNbrvalidedates(0);
        $affectation->setDates(json_encode($json["date"]));
        $affectation->setTypePoste($json["typePoste"]);
        $em = $this->getDoctrine()->getManager();
        $em->persist($affectation);
        $em->flush();
        return new JsonResponse("Done");
    }
    public function editStatutAction(Request $request)
    {
        $content = $request->getContent();
        $json = json_decode($content, true);
        $em = $this->getDoctrine()->getManager();
        $user = $this->getDoctrine()->getRepository('UserBundle:User')->find($json["id"]);
        $user->setStatut($json["statut"]);
        $em->persist($user);
        $em->flush();
        return new Response('Done',200);
    }
    public function editUserAction(Request $request){
        $content = $request->getContent();
        $json = json_decode($content, true);

        $em = $this->getDoctrine()->getManager();


        $user  = $this->getDoctrine()->getRepository('UserBundle:User')->find($json["id"]);
        $user->setNom($json["nom"]);
        $user->setPrenom($json["prenom"]);
        $user->setAdresse($json["adresse"]);
        $user->setNomJF($json["nom_j_f"]);
        $user->setDateNais(new \DateTime($json["dateNais"]));

        $user->setGender($json["gender"]);
        $user->setAdresse($json["adresse"]);
        $user->setCodeP($json["codeP"]);
        $user->setVille($json["ville"]);
        $user->setNumTel($json["tel"]);
        $user->setNumTelP($json["telpor"]);
        $user->setEmail($json["email"]);
        $user->setDernierecole($json["der_ecole_freq"]);
        $user->setDernierDiplome($json["der_diplome"]);
        $user->setDeductionSociale($json["forfaitaire_soc"]);
        $user->setDecImpo($json["dec_impo"]);
        $user->setSituationFam($json["sit_familiale"]);
        $user->setNbrPersCharg($json["nbr_per_charge"]);
        $user->setNbrEnfants($json["nbr_enfant"]);
        $user->setNumeroSecSoc($json["num_sec_soc"]);
        $user->setLieuNais($json["lieu_nais"]);
        $user->setNationalite($json["nationalite"]);
        $user->setNumCartesej($json["num_carte_sej"]);
        $user->setDateValNumCartesej(new \DateTime($json["dat_val"]));

        $user->setRetraite($json["retraite"]);
        $user->setIban($json["iban"]);
        $user->setRetraiteAudiens($json["audiens_retraite"]);
        $user->setNumCongesSpectacle($json["num_conge_spec"]);
        $user->setDateDernierVisiteMed(new \DateTime($json["date_med"]));

        $user->setTraHandicap($json["handicap"]);
        $user->setAdresseCentreSec($json["adresse_sec_soc"]);
        $user->setCodepostalCentreSec($json["codeP_sec_soc"]);
        $user->setVilleCentreSec($json["ville_sec_soc"]);
        $user->setNomPersu($json["nom_pers_urg"]);
        $user->setAdressePersu($json["pers_adr_urg"]);
        $user->setNumtelPersu($json["pers_num_urg"]);
        //return new JsonResponse($user);

        $em->persist($user);
        $em->flush();
        return new Response('Done',200);

    }
    public function getProjectByNameAction(Request $request){
        $content = $request->getContent();
        $json = json_decode($content, true);
        $projet = $this->getDoctrine()->getRepository(Projet::class)->findOneBy(array("nomProjet"=>$json["nomProjet"]));
        if($projet){
            $encoders = array(new XmlEncoder(), new JsonEncoder());
            $normalizer = new ObjectNormalizer();
            $normalizer->setCircularReferenceLimit(2);

            $normalizer->setCircularReferenceHandler(function ($object) {
                return $object->getId();
            });
            $normalizers = array($normalizer);
            $serializer = new Serializer($normalizers, $encoders);
            $formatted = $serializer->normalize($projet);
            return new JsonResponse($formatted);
        }else{
            return new JsonResponse("Empty",500);
        }
    }
    public function getUserAffectationsAction($id){
        $user = $this->getDoctrine()->getRepository(User::class)->find($id);
        $affecation = $this->getDoctrine()->getRepository(Affectation::class)->findBy(array("user"=>$user));
        if($affecation){
            $encoders = array(new XmlEncoder(), new JsonEncoder());
            $normalizer = new ObjectNormalizer();
            $normalizer->setCircularReferenceLimit(2);

            $normalizer->setCircularReferenceHandler(function ($object) {
                return $object->getId();
            });
            $normalizers = array($normalizer);
            $serializer = new Serializer($normalizers, $encoders);
            $formatted = $serializer->normalize($affecation);
            return new JsonResponse(json_encode($formatted));
        }else{
            return new JsonResponse("Empty",500);
        }

    }
    public function sendEmailAction(){
        $transport = \Swift_SmtpTransport::newInstance('smtp.gmail.com', 465,'ssl')->setUsername('monguide07@gmail.com')->setPassword('Root123@');

        $mailer = \Swift_Mailer::newInstance($transport);
        $message = \Swift_Message::newInstance('Vérifier votre compte !')
            ->setFrom(array('monguide07@gmail.com' => 'Service Water'))
            ->setTo(array("jasser.hadhri11@gmail.com"))
            ->setBody("Bonjour ", 'text/plain');
        $result = $mailer->send($message);

        // or, you can also fetch the mailer service this way
        // $this->get('mailer')->send($message);

        return new Response("Done");

    }
    public function ListeAffectationsAdminAction(){
        $affectation = $this->getDoctrine()->getRepository(Affectation::class)->findBy(array("salaire"=>null));
        if($affectation) {
            $encoders = array(new XmlEncoder(), new JsonEncoder());
            $normalizer = new ObjectNormalizer();
            $normalizer->setCircularReferenceLimit(2);

            $normalizer->setCircularReferenceHandler(function ($object) {
                return $object->getId();
            });
            $normalizers = array($normalizer);
            $serializer = new Serializer($normalizers, $encoders);
            $formatted = $serializer->normalize($affectation);
            return new JsonResponse(json_encode($formatted),200);
        }else{
            return new JsonResponse("Empty",500);
        }
    }
    public function AddSalaireAction(Request $request){
        $content = $request->getContent();
        $json = json_decode($content, true);
        //$poste = $this->getDoctrine()->getRepository(Poste::class)->find($json["id"]);
        $affectation = $this->getDoctrine()->getRepository(Affectation::class)->find($json["idAffectation"]);
        //$affectation->setPoste($poste);

        if($affectation->getTypePoste() == "Stagiaire"){
            $affectation->setTache($json["tache"]);
            $affectation->setTuteur($json["tuteur"]);
            $affectation->setSalaire("27");
        }else{
            $affectation->setSalaire($json["salaire"]);
        }

        $em = $this->getDoctrine()->getManager();
        $em->persist($affectation);
        $em->flush();
        $dates = json_decode($affectation->getDates());
        $transport = \Swift_SmtpTransport::newInstance('smtp.gmail.com', 465,'ssl')->setUsername('monguide07@gmail.com')->setPassword('Root123@');
        $mailer = \Swift_Mailer::newInstance($transport);
        $message = \Swift_Message::newInstance('Mail primo arrivés')
            ->setFrom(array('monguide07@gmail.com' => 'Supamonks'))
            ->setTo(array($affectation->getUser()->getEmail()))
            ->setCc(array('cesar.ibo112@gmail.com','houssemchridi91@gmail.com'))

            ->setBody("Bonjour ".$affectation->getUser()->getNom()."\n"
                ."On te souhaite officiellement la bienvenue dans la team ! \n"
                ."Nous aurons le plaisir de t'accueillir à Supamonks au poste de ".$affectation->getPoste()->getPoste()." du ".$dates[0][0]." au ".$dates[count($dates) -1][1]." sur notre projet ".$affectation->getProjet()->getNomProjet()." . \n"
                ."Ces dates sont estimatives et dépendront de l'avancée de la prod: nous pouvons donc être amenés à prolonger ou écourter ton contrat. \n"
                ."Tu seras payé en tant qu'intermittent du spectacle sur la base de ".$affectation->getSalaire()." euros brut/jour. \n"
                ."On a hâte de bosser avec toi ! \n"
                ."A très bientôt,", 'text/plain');
        $result = $mailer->send($message);
        return new Response("Done",200);
    }
    public function getProjectDetailsAction($id){
        $projet = $this->getDoctrine()->getRepository(Projet::class)->find($id);
        if($projet) {
            $encoders = array(new XmlEncoder(), new JsonEncoder());
            $normalizer = new ObjectNormalizer();
            $normalizer->setCircularReferenceLimit(2);

            $normalizer->setCircularReferenceHandler(function ($object) {
                return $object->getId();
            });
            $normalizers = array($normalizer);
            $serializer = new Serializer($normalizers, $encoders);
            $formatted = $serializer->normalize($projet);
            return new JsonResponse(json_encode($formatted),200);
        }else{
            return new JsonResponse("Empty",500);
        }
    }
    public function GetMyProjectsUserAction($id){
        $user =$this->getDoctrine()->getRepository(User::class)->find($id);
        $affectation = $this->getDoctrine()->getRepository(Affectation::class)->findBy(array("user"=>$user));
        $p = [];
        foreach ($affectation as $a){
            array_push($p,$a->getProjet());
        }
        $encoders = array(new XmlEncoder(), new JsonEncoder());
        $normalizer = new ObjectNormalizer();
        $normalizer->setCircularReferenceLimit(2);

        $normalizer->setCircularReferenceHandler(function ($object) {
            return $object->getId();
        });
        $normalizers = array($normalizer);
        $serializer = new Serializer($normalizers, $encoders);
        $formatted = $serializer->normalize($p);
        return new JsonResponse(json_encode($formatted),200);
    }
    public function GetUserInfoAction($id){
        $user =$this->getDoctrine()->getRepository(User::class)->find($id);
        $affectation = $this->getDoctrine()->getRepository(Affectation::class)->findBy(array("user"=>$user));

        $projetEncours = 0;
        $projetTermine = 0;
        $b = new Affectation();
        $money = 0 ;
        $totalProjets = count($affectation);
        foreach ($affectation as $a) {
            if ($a->getProjet()->getStatut() == "En Cours") {
                $projetEncours = $projetEncours + 1;
                $b=$a;
            }
            if ($a->getProjet()->getStatut() == "Terminée") {
                $projetTermine = $projetTermine + 1;
            }
        }

            $money = $money + $b->getSalaire();
            $Vsal=$b->getNbrvalidedates()*$money;
            $EXSal=$b->getNbrdates()*$money;
            $percent=($b->getNbrvalidedates()/$b->getNbrdates())*100;
            $monthSal=0;
            $dates=explode(",", $b->getDates());
            $nbr=0;
            $joursValides =  $b->getNbrvalidedates();
            foreach ( $dates as $d){
                $nbr++;
        }




        $data = ["NbrJours"=>$nbr,"projetsEncour"=>$projetEncours,"ProjetTermine"=>$projetTermine,"totalProjet"=>$totalProjets,"Vsal"=>$Vsal,"EXSal"=>$EXSal,"percent"=>$percent,"monthSal"=>$monthSal,"JoursValide"=>$joursValides];
        return new JsonResponse($data);
    }
    public function getUserworkingCurrentDayAction($id){
        $projet = $this->getDoctrine()->getRepository(Projet::class)->find($id);
        $affectations = $this->getDoctrine()->getRepository(Affectation::class)->findBy(array("projet"=>$projet));
        $users = [];
        $date = new \DateTime("now");
        //return new JsonResponse($date);
        foreach ($affectations as $a){
            $dates = json_decode($a->getDates());
            foreach ($dates as $d){
                $dateDebut = new \DateTime($d[0]);
                $dateFin = new \DateTime($d[1]);
                //return new JsonResponse($dateFin->diff($date));
                if($date >= $dateDebut && $date <= $dateFin){
                    array_push($users,$a->getUser());
                }
            }
        }
        $encoders = array(new XmlEncoder(), new JsonEncoder());
        $normalizer = new ObjectNormalizer();
        $normalizer->setCircularReferenceLimit(2);

        $normalizer->setCircularReferenceHandler(function ($object) {
            return $object->getId();
        });
        $normalizers = array($normalizer);
        $serializer = new Serializer($normalizers, $encoders);
        $formatted = $serializer->normalize($users);
        return new JsonResponse(json_encode($formatted),200);
    }
    public function ValidateDateAction(Request $request){
        $content = $request->getContent();
        $json = json_decode($content, true);
        $i = 0;
        while($i < count($json)) {
            $user = $this->getDoctrine()->getRepository(User::class)->find($json[$i]["id"]);
            $projet = $this->getDoctrine()->getRepository(Projet::class)->find($json[$i]["idprojet"]);
            $date = $json[$i]["date"];
            $affectation = $this->getDoctrine()->getRepository(Affectation::class)->findOneBy(array("user" => $user, "projet" => $projet));
            if ($affectation->getValidedates()) {
                $dates = json_decode($affectation->getValidedates());
                $d = [$date,$json[$i]["day"]];
                array_push($dates, $d);
                $affectation->setValidedates(json_encode($dates));
            } else {
                $d = [$date,$json[$i]["day"]];

                $affectation->setValidedates(json_encode($d));
            }

            $affectation->setNbrvalidedates($affectation->getNbrvalidedates() + $json[$i]["day"]);
            $em = $this->getDoctrine()->getManager();
            $em->persist($affectation);
            $em->flush();
            $i = $i +1;
        }
        return new JsonResponse("Done");
    }
    public function DashboardSalarieAction($id){
        $user =$this->getDoctrine()->getRepository(User::class)->find($id);
        $affectation = $this->getDoctrine()->getRepository(Affectation::class)->findBy(array("user"=>$user));

        $date = new \DateTime("now");
        $projetTerminee = 0;
        $projetsEncours = 0 ;
        $projets = [];
        $nbrsExpectedMonth = 0;
        $nbrsMonth = 0;
        $nomProjet = "";
        $salary =
        $nbr = 0;
        $nbValide = 0;
        $valideArray = [];
        $valideMont = [];
        $expectedArray = [];
        $expecredMonth=[];
        $Vsal = 0 ;
        $EXSal = 0 ;
        $expectedMonth = 0 ;
        $vMonth = 0;
        $role = "";
        foreach ($affectation as $a){
            $nbValide =  $nbValide+$a->getNbrValidedates();
            $nbr = $nbr + $a->getNbrdates();
            $role = $a->getTypePoste();
            if($a->getProjet()->getStatut() == "En Cours"){
                $projetsEncours = $projetsEncours +1;
                $nomProjet = $a->getProjet()->getNomProjet();
                array_push($projets,$a);
                $salary =  $a->getSalaire();
            }else{
                $projetTerminee = $projetTerminee +1;
            }
        }
        //return new Response(count($projets));
        foreach ($projets as $p){
            $dates = json_decode($p->getDates());


            foreach ($dates as $d){
                $dateDebut =  new \DateTime($d[0]);
                $dateFin = new \DateTime($d[1]);
                if($dateDebut->format("M") == $date->format("M") && $dateFin->format("M") == $date->format("M")){

                    $nbrsExpectedMonth = $nbrsExpectedMonth + $dateDebut->diff($dateFin)->d +1;
                }
                /**if($p->getSalaryUpdate()){
                    $days = 0;
                    $montant = 0;
                    $salaryUpdate= json_decode($p->getSalaryUpdate());
                    $i = 1;
                    if(count($salaryUpdate)>1) {
                        while ($i < count($salaryUpdate)) {
                            if ($i == 1) {
                                $days = $days+($dateDebut->diff(new \DateTime($salaryUpdate[$i][0]))->d +1);
                                $montant = $montant + $salaryUpdate[$i][1];
                            } else {
                                $days = $days+($dateDebut->diff(new \DateTime($salaryUpdate[$i][0]))->d +1);
                                $montant = $montant + $salaryUpdate[$i][1];
                                if($i == (count($salaryUpdate) -1)){

                                }
                            }
                            $i++;
                        }
                    }
                }**/
            }
            $datesValides = $dates = json_decode($p->getValidedates());
            if($datesValides) {
                foreach ($datesValides as $x) {
                    $datevalide = new \DateTime($x[0]);
                    $n = $datevalide->diff($date)->m;
                    //return new Response("Hello");
                    if ($datevalide->format("M") == $date->format("M")) {
                        //return new Response("Hello");
                        $nbrsMonth = $nbrsMonth + $x[1];
                    }
                }
            }
            /**if($a->getSalaryUpdate()){
                $datesAffectation = json_decode($a->getDates());
                $salaryUpdates = json_decode($a->getSalaryUpdate());
                foreach ($salaryUpdates as $su){
                    $x = 0;
                    while($x<count($datesValides)){
                        if($x = 0){
                            $Vsal = $nbValide * $salary ;
                            $EXSal = $nbr * $salary ;
                            $expectedMonth = $nbrsExpectedMonth * $salary ;
                            $vMonth = $nbrsMonth * $salary;
                        }else{
                            $dateV = new \DateTime($datesValides[$x][0]);
                            $sa =new \DateTime($su[0]);
                            if($datesValides[$x][0]<=$sa){
                                $Vsal = $vsal$nbValide * $salary ;
                                $EXSal = $nbr * $salary ;
                                $expectedMonth = $nbrsExpectedMonth * $salary ;
                                $vMonth = $nbrsMonth * $salary;
                            }
                        }
                    }
                }

            }else{
                $Vsal = $nbValide * $salary ;
                $EXSal = $nbr * $salary ;
                $expectedMonth = $nbrsExpectedMonth * $salary ;
                $vMonth = $nbrsMonth * $salary;
                $percent = ($nbrsMonth/$nbr)*100;
            }**/
        }

        $Vsal = $nbValide * $salary ;
        $EXSal = $nbr * $salary ;
        $expectedMonth = $nbrsExpectedMonth * $salary ;
        $vMonth = $nbrsMonth * $salary;
        $percent = ($nbrsMonth/$nbr)*100;
        $data = ["role"=>$role,"NbrExpectedMonth"=>$nbrsExpectedMonth,"NbrJoursMonth"=>$nbrsMonth
            ,"NomProjet"=>$nomProjet,"NbrJours"=>$nbr,"projetsEncour"=>$projetsEncours,
            "ProjetTermine"=>$projetTerminee,"totalProjet"=>count($affectation),
            "Vsal"=>$Vsal,"EXSal"=>$EXSal,"percent"=>$percent,"ExpectedMont"=>$expectedMonth,
            "SalaireValideMonth"=>$vMonth];
        return new JsonResponse($data);
    }
    public function GetEquipeAction($id){
        $projet = $this->getDoctrine()->getRepository(Projet::class)->find($id);
        $affecation = $this->getDoctrine()->getRepository(Affectation::class)->findBy(array("projet"=>$projet));
        $users = [];
        foreach ($affecation as $a){
            $dates = json_decode($a->getDates());
            $dateDebut = $dates[0][0];
            $dateFin = $dates[count($dates) -1][0];
            $user = ["id"=>$a->getId(),"Nom"=>$a->getUser()->getNom(),
                "dates"=>$dates,
                "Prenom"=>$a->getUser()->getPrenom(),"email"=>$a->getUser()->getEmail(),
                "Salaire"=>$a->getSalaire(),"dateDebut"=>$dateDebut,"dateFin"=>$dateFin,"Jours"=>$a->getNbrdates(),
                "JoursValides"=>$a->getNbrvalidedates()];
            array_push($users,$user);
        }

        return new JsonResponse($users,200);
    }
    public function EditAffectationDateAction(Request $request){
        $content = $request->getContent();
        $json = json_decode($content, true);
        $affactation =$this->getDoctrine()->getRepository(Affectation::class)->find($json["id"]);
        $dates = json_decode($affactation->getDates());
        array_push($dates,$json["date"][0]);
        $nbrJours = 0;
        foreach ($json["date"] as $d){
            $dateDebut = new \DateTime($d[0]);
            $dateFin = new \DateTime($d[0]);
            $nbrJours = $nbrJours + $dateFin->diff($dateDebut)->d +1;
        }
        $affactation->setDates(json_encode($dates));
        $affactation->setNbrdates($affactation->getNbrdates()+$nbrJours);
        $em=$this->getDoctrine()->getManager();
        $em->persist($affactation);
        $em->flush();
        return new JsonResponse("Done",200);
    }
    public function EditAffectationSalaireAction(Request $request){
        $content = $request->getContent();
        $json = json_decode($content, true);
        $affactation =$this->getDoctrine()->getRepository(Affectation::class)->find($json["id"]);
        $da = new \DateTime("now");

        $salaireMin = floatval($affactation->getSalaire());
        $s = floatval($json["salaire"]);
        $u = $salaireMin +$s;
        $d = [$da->format('Y-m-d'),$u];
        //return new JsonResponse($d);
        $em=$this->getDoctrine()->getManager();
        if(!$affactation->getSalaryUpdate()){
            $salaryUpdate = [];
            array_push($salaryUpdate,$d);
            $affactation->setSalaryUpdate(json_encode($salaryUpdate));
        }else{
            $salary = json_decode($affactation->getSalaryUpdate());
            array_push($salary,$d);
            $affactation->setSalaryUpdate(json_encode($salary));
        }

        $em->persist($affactation);
        //$em->persist($poste);
        $em->flush();
        return new JsonResponse("Done",200);

    }
    public function DashboardAdminAction(){
        $projet = $this->getDoctrine()->getRepository(Projet::class)->findAll();
        $users = $this->getDoctrine()->getRepository(User::class)->findAll();
        $salarie = 0;
        $freelacer = 0;
        $stagiaire = 0;
        $permanant = 0;
        $intermittant = 0;
        $permittant = 0;
        foreach ($users as $user){
            $affectation = $this->getDoctrine()->getRepository(Affectation::class)->findOneBy(array("user"=>$user));
            if($affectation->getTypePoste() == "Stagiaire"){
                $stagiaire = $stagiaire + 1;
            }
            if($affectation->getTypePoste() == "Freelance"){
                $freelacer = $freelacer + 1;
            }
            if($affectation->getTypePoste() == "Permanant"){
                $permanant = $permanant + 1;
            }
            if($affectation->getTypePoste() == "Intermittant"){
                $intermittant = $intermittant + 1;
            }if($affectation->getTypePoste() == "Permittant"){
                $permittant = $permittant + 1;
            }
            if($user->getRole() == "user"){
                $salarie = $salarie +1;
            }
        }
        $data = ["projets"=>count($projet),"salarie"=>$salarie,"freelancer"=>$freelacer
        ,"stagiaire"=>$stagiaire,"permanant"=>$permanant,"permittant"=>$permittant,
            "intermittant"=>$intermittant];
        return new JsonResponse($data);
    }
    public function addJustifTRAction(Request $request)
    {
        $content = $request->getContent();
        $json = json_decode($content, true);
        $em = $this->getDoctrine()->getManager();
        $user = $this->getDoctrine()->getRepository('UserBundle:User')->find($json["id"]);
        $justifT = new JustifT();
        $justifT->setMontant($json["montant"]);
        $date = new \DateTime("now");
        $justifT->setMois($json["mois"]);
        $justifT->setDateUpload($date);
        $justifT->setStatut("Non payé");
        $justifT->setUser($user);
        $filee = $json["justif"];
        $filename = md5(uniqid()).'.pdf';
        $file=fopen('../web/'.$filename, 'wb');
        fwrite($file, base64_decode($filee));
        fclose($file);

        $justifT->setJustif($filename);
        $em->persist($justifT);
        $em->flush();
        return new Response('Done',200);
    }
    public function GetJustifsTRAction(Request $request)
    {
        $content = $request->getContent();
        $json = json_decode($content, true);
        $justifsT = $this->getDoctrine()->getRepository('UserBundle:JustifT')->findBy(array("user"=>$json["id"]));
        $data = ["justifs"=>$justifsT];
        return new JsonResponse($data);
    }
    public function ListOfManagerAction(){
        $user = $this->getDoctrine()->getRepository(User::class)->findBy(array("role"=>"sub_admin"));
        $encoders = array(new XmlEncoder(), new JsonEncoder());
        $normalizer = new ObjectNormalizer();
        $normalizer->setCircularReferenceLimit(2);

        $normalizer->setCircularReferenceHandler(function ($object) {
            return $object->getId();
        });
        $normalizers = array($normalizer);
        $serializer = new Serializer($normalizers, $encoders);
        $formatted = $serializer->normalize($user);
        return new JsonResponse(json_encode($formatted),200);

    }
    public function GetJustifTRAction(Request $request)
    {
        $content = $request->getContent();
        $json = json_decode($content, true);
        $JustifTR = $this->getDoctrine()->getRepository('UserBundle:JustifT')->find($json["id"]);
        $data = ["JustifTR"=>$JustifTR];
        return new JsonResponse($data);
    }
    public function addJustifNDFAction(Request $request)
    {
        $content = $request->getContent();
        $json = json_decode($content, true);
        $em = $this->getDoctrine()->getManager();
        $user = $this->getDoctrine()->getRepository('UserBundle:User')->find($json["id"]);
        $justifNDF = new JustifNDF();
        $justifNDF->setMontant($json["montant"]);
        $justifNDF->setNatureAchat($json["nature"]);
        $justifNDF->setUser($user);
        $justifNDF->setDateUpload(new \DateTime('now'));
        $justifNDF->setStatut('Non payé');
        $filee = $json["justif"];
        $filename = md5(uniqid()).'.pdf';
        $file=fopen('../web/'.$filename, 'wb');
        fwrite($file, base64_decode($filee));
        fclose($file);

        $justifNDF->setJustif($filename);
        $em->persist($justifNDF);
        $em->flush();
        return new Response('Done',200);
    }
    public function GetJustifsNDFAction(Request $request)
    {
        $content = $request->getContent();
        $json = json_decode($content, true);
        $justifsNDFs = $this->getDoctrine()->getRepository('UserBundle:JustifNDF')->findBy(array("user"=>$json["id"]));
        $data = ["justifs"=>$justifsNDFs];
        return new JsonResponse($data);
    }
    public function GetJustifNDFAction(Request $request)
    {
        $content = $request->getContent();
        $json = json_decode($content, true);
        $JustifNDF = $this->getDoctrine()->getRepository('UserBundle:JustifNDF')->find($json["id"]);
        $data = ["JustifNDF"=>$JustifNDF];
        return new JsonResponse($data);
    }
    public function addDevisFreeAction(Request $request)
    {
        $content = $request->getContent();
        $json = json_decode($content, true);
        $em = $this->getDoctrine()->getManager();
        $user = $this->getDoctrine()->getRepository('UserBundle:User')->find($json["id"]);
        $DevisFree = new DevisFree();
        $DevisFree->setUser($user);
        $DevisFree->setMontant($json["montant"]);
        $DevisFree->setDateDevis(new \DateTime($json['date']));
        $DevisFree->setDateUpload(new \DateTime('now'));
        $DevisFree->setStatut('Non payé');
        $DevisFree->setNumDevis($json["numDevis"]);
        $filee = $json["justif"];
        $filename = md5(uniqid()).'.pdf';
        $file=fopen('../web/'.$filename, 'wb');
        fwrite($file, base64_decode($filee));
        fclose($file);

        $DevisFree->setJustif($filename);
        $em->persist($DevisFree);
        $em->flush();
        return new Response('Done',200);
    }
    public function GetDevisFreeAction(Request $request)
    {
        $content = $request->getContent();
        $json = json_decode($content, true);
        $DevisFree = $this->getDoctrine()->getRepository('UserBundle:DevisFree')->findBy(array("user"=>$json["id"]));
        $data = ["DevisFree"=>$DevisFree];
        return new JsonResponse($data);
    }
    public function GetDeviFreeAction(Request $request)
    {
        $content = $request->getContent();
        $json = json_decode($content, true);
        $deviFree = $this->getDoctrine()->getRepository('UserBundle:DevisFree')->find($json["id"]);
        $data = ["FactureFree"=>$deviFree];
        return new JsonResponse($data);
    }
    public function addFactureFreeAction(Request $request)
    {
        $content = $request->getContent();
        $json = json_decode($content, true);
        $em = $this->getDoctrine()->getManager();
        $user = $this->getDoctrine()->getRepository('UserBundle:User')->find($json["id"]);
        $FactureFree = new FactureFree();
        $FactureFree->setUser($user);
        $FactureFree->setMontant($json["montant"]);
        $FactureFree->setDateFacture(new \DateTime($json['date']));
        $FactureFree->setNumFacture($json["numFacture"]);
        $FactureFree->setDevisFacture($json["devisFacture"]);
        $FactureFree->setDateUpload(new \DateTime("now"));
        $FactureFree->setStatut('Non payé');
        $filee = $json["justif"];
        $filename = md5(uniqid()).'.pdf';
        $file=fopen('../web/'.$filename, 'wb');
        fwrite($file, base64_decode($filee));
        fclose($file);

        $FactureFree->setJustif($filename);
        $em->persist($FactureFree);
        $em->flush();
        return new Response('Done',200);
    }
    public function GetFacturesFreeAction(Request $request)
    {
        $content = $request->getContent();
        $json = json_decode($content, true);
        $FacturesFree = $this->getDoctrine()->getRepository('UserBundle:FactureFree')->findBy(array("user"=>$json["id"]));
        $data = ["FacturesFree"=>$FacturesFree];
        return new JsonResponse($data);
    }
    public function GetFactureFreeAction(Request $request)
    {
        $content = $request->getContent();
        $json = json_decode($content, true);
        $FacturesFree = $this->getDoctrine()->getRepository('UserBundle:FactureFree')->find($json["id"]);
        $data = ["FacturesFree"=>$FacturesFree];
        return new JsonResponse($data);
    }
    public function ListeJustifsTRAction(){
        $justifsT = $this->getDoctrine()->getRepository(JustifT::class)->findAll();

        $encoders = array(new XmlEncoder(), new JsonEncoder());
        $normalizer = new ObjectNormalizer();
        $normalizer->setCircularReferenceLimit(2);

        $normalizer->setCircularReferenceHandler(function ($object) {
            return $object->getId();
        });
        $normalizers = array($normalizer);
        $serializer = new Serializer($normalizers, $encoders);
        $formatted = $serializer->normalize($justifsT);
        return new JsonResponse(json_encode($formatted),200);
    }
    public function ListeJustifsNDFAction(){
        $justifsNDF = $this->getDoctrine()->getRepository(JustifNDF::class)->findAll();

        $encoders = array(new XmlEncoder(), new JsonEncoder());
        $normalizer = new ObjectNormalizer();
        $normalizer->setCircularReferenceLimit(2);

        $normalizer->setCircularReferenceHandler(function ($object) {
            return $object->getId();
        });
        $normalizers = array($normalizer);
        $serializer = new Serializer($normalizers, $encoders);
        $formatted = $serializer->normalize($justifsNDF);
        return new JsonResponse(json_encode($formatted),200);
    }
    public function ListeDevisAction(){
        $justifsNDF = $this->getDoctrine()->getRepository(DevisFree::class)->findAll();
        $list = [];

        $encoders = array(new XmlEncoder(), new JsonEncoder());
        $normalizer = new ObjectNormalizer();
        $normalizer->setCircularReferenceLimit(2);

        $normalizer->setCircularReferenceHandler(function ($object) {
            return $object->getId();
        });
        $normalizers = array($normalizer);
        $serializer = new Serializer($normalizers, $encoders);
        $formatted = $serializer->normalize($justifsNDF);
        return new JsonResponse(json_encode($formatted),200);
    }
    public function ListeFactureAction(){
        $justifsNDF = $this->getDoctrine()->getRepository(FactureFree::class)->findAll();

        $encoders = array(new XmlEncoder(), new JsonEncoder());
        $normalizer = new ObjectNormalizer();
        $normalizer->setCircularReferenceLimit(2);

        $normalizer->setCircularReferenceHandler(function ($object) {
            return $object->getId();
        });
        $normalizers = array($normalizer);
        $serializer = new Serializer($normalizers, $encoders);
        $formatted = $serializer->normalize($justifsNDF);
        return new JsonResponse(json_encode($formatted),200);
    }
    public function signContractAction($id){
        $user = $this->getDoctrine()->getRepository(User::class)->find($id);
        $user->setStatut("Signed");
        $em = $this->getDoctrine()->getManager();
        $em->persist($user);
        $em->flush();
        return new JsonResponse("Done",200);

        }
    public function signNDAAction($id){
        $user = $this->getDoctrine()->getRepository(User::class)->find($id);
        $user->setNda("Signed");
        $em = $this->getDoctrine()->getManager();
        $em->persist($user);
        $em->flush();
        return new JsonResponse("Done",200);

    }
    public function editFreeLancerAction(Request $request){
        $content = $request->getContent();
        $json = json_decode($content, true);
        $em = $this->getDoctrine()->getManager();
        $user  = $this->getDoctrine()->getRepository('UserBundle:User')->find($json["id"]);
        $user->setNumtvac($json["numtvac"]);
        $user->setNumtva($json["numtva"]);
        $user->setSiren($json["siren"]);
        $user->setSiret($json["siret"]);
        $em->persist($user);
        $em->flush();
        return new Response('Done',200);

    }
    public function AllSalarieAction(){
        $user = $this->getDoctrine()->getRepository(User::class)->findBy(array("role"=>["sub_admin","user"]));
        $encoders = array(new XmlEncoder(), new JsonEncoder());
        $normalizer = new ObjectNormalizer();
        $normalizer->setCircularReferenceLimit(2);

        $normalizer->setCircularReferenceHandler(function ($object) {
            return $object->getId();
        });
        $normalizers = array($normalizer);
        $serializer = new Serializer($normalizers, $encoders);
        $formatted = $serializer->normalize($user);
        return new JsonResponse(json_encode($formatted),200);
    }
    public function GetUserinformationAction($id){
        $user = $this->getDoctrine()->getRepository(User::class)->find($id);
        $encoders = array(new XmlEncoder(), new JsonEncoder());
        $normalizer = new ObjectNormalizer();
        $normalizer->setCircularReferenceLimit(2);

        $normalizer->setCircularReferenceHandler(function ($object) {
            return $object->getId();
        });
        $normalizers = array($normalizer);
        $serializer = new Serializer($normalizers, $encoders);
        $formatted = $serializer->normalize($user);
        return new JsonResponse(json_encode($formatted),200);
    }
    public function GetUserinformationnumbersAction($id){
        $user = $this->getDoctrine()->getRepository(User::class)->find($id);
        $aff = $this->getDoctrine()->getRepository(Affectation::class)->findBy(array("user"=>$user));
        $role = $aff[0]->getTypePoste();
        if ($role != "Freelance"){
            $nda = $this->getDoctrine()->getRepository(JustifNDF::class)->findBy(array("user"=>$user));
            $jt = $this->getDoctrine()->getRepository(JustifT::class)->findBy(array("user"=>$user));
            $data=["aff"=>count($aff),"nda"=>$nda,"role"=>$role,"jt"=>$jt];
            $encoders = array(new XmlEncoder(), new JsonEncoder());
            $normalizer = new ObjectNormalizer();
            $normalizer->setCircularReferenceLimit(2);
            $normalizer->setCircularReferenceHandler(function ($object) {
                return $object->getId();
            });
            $normalizers = array($normalizer);
            $serializer = new Serializer($normalizers, $encoders);
            $formatted = $serializer->normalize($data);
            return new JsonResponse(json_encode($formatted),200);
        }
        else{
            $dv = $this->getDoctrine()->getRepository(DevisFree::class)->findBy(array("user"=>$user));
            $ff = $this->getDoctrine()->getRepository(FactureFree::class)->findBy(array("user"=>$user));
            $data=["aff"=>count($aff),"dv"=>$dv,"role"=>$role,"ff"=>$ff];
            $encoders = array(new XmlEncoder(), new JsonEncoder());
            $normalizer = new ObjectNormalizer();
            $normalizer->setCircularReferenceLimit(2);
            $normalizer->setCircularReferenceHandler(function ($object) {
                return $object->getId();
            });
            $normalizers = array($normalizer);
            $serializer = new Serializer($normalizers, $encoders);
            $formatted = $serializer->normalize($data);
            return new JsonResponse(json_encode($formatted),200);
        }
    }

}
