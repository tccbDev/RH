import Vue from 'vue'
import VueRouter from 'vue-router'
import Register from '../components/Register'
import Login from '../components/Login'
import RegisterAd from '../components/RegisterAd'
import Index from '../components/Index'
import AjouterProjet from '../components/AjouterProjet'
import ListeSalarie from '../components/ListeSalarie'
import ListAffectationAdminNonEffectue from "../components/ListAffectationAdminNonEffectue";
import ModifierUser from '../components/ModifierUser'
import AfficherProjet from "../components/AfficherProjet";
import AfficherProjetAd from "../components/AfficherProjetAd";
import AfficherProjetSub from "../components/AfficherProjetSub";
import AfficherMyProjectsUser from "../components/AfficherMyProjectsUser";
import Files from "../components/Files"
import DasboardAdmin from "../components/DasboardAdmin";
import ListAllSalarie from "../components/ListAllSalarie";
import AffUser from "../components/AffUser";
import AcceuilUtilisateur from "@/components/AcceuilUtilisateur";




Vue.use(VueRouter)

const routes = [
  
  {
    path: '/AffUser',
    name: 'AffUser',
    component: AffUser
  },
  {
    path: '/Register',
    name: 'Register',
    component: Register
  },
  {
    path: '/AfficherProjetAd',
    name: 'AfficherProjetAd',
    component: AfficherProjetAd
  },
  {
    path: '/AfficherMyProjectsUser',
    name: 'AfficherMyProjectsUser',
    component: AfficherMyProjectsUser
  },
  {
    path: '/AfficherProjetSub',
    name: 'AfficherProjetSub',
    component: AfficherProjetSub
  },
  {
    path: '/AfficherProjet',
    name: 'AfficherProjet',
    component: AfficherProjet
  },
  {
    path: '/Login',
    name: 'Login',
    component: Login
  },
  {
    path: '/AffectationNonTermine',
    name: 'ListAffectationAdminNonEffectue',
    component: ListAffectationAdminNonEffectue
  },
  {
    path: '/ModifierUser',
    name: 'ModifierUser',
    component: ModifierUser
  },
  {
    path: '/Acceuil',
    name: 'acceuil',
    component: AcceuilUtilisateur
  },
 
  {
    path: '/AjouterProjet',
    name: 'AjouterProjet',
    component: AjouterProjet
  } ,
  {
    path: '/ModifierUser',
    name: 'ModifierUser',
    component: ModifierUser
  },
  {
    path: '/Registerad',
    name: 'Registerad',
    component: RegisterAd
  },
  {
    path: '/index',
    name: 'Index',
    component: Index
  }
  ,
  {
    path: '/listeSalarie',
    name: 'Liste des Salariés',
    component: ListeSalarie
  },
  {
    path: '/Files',
    name: 'Files',
    component: Files
  }
  ,
  {
    path: '/DashBoardAdmin',
    name: 'DashBoardAdmin',
    component: DasboardAdmin
  },
  {
    path: '/AllSalarie',
    name: 'ListAllSalarie',
    component: ListAllSalarie
  }
]

const router = new VueRouter({
  mode: 'history',
  base: process.env.BASE_URL,
  routes
})

export default router
