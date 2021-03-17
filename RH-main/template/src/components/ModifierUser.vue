<style>
@import "/css/multi-step.css";
</style>

<template>
  <!-- MultiStep Form -->
  <div class="row">
    <div class="col-md-12">
      <form id="msform">
        <!-- progressbar -->
        <ul id="progressbar">
          <li :class="step == 1 ? 'active' : ''">Information de base</li>
          <li :class="step == 2 ? 'active' : ''">Coordonnées personnelles</li>
          <li :class="step == 3 ? 'active' : ''">Fichiers joints</li>
        </ul>
        <!-- fieldsets -->

        <fieldset v-if="step == 1">
          <h2 class="fs-title">Information de base</h2>
          <h3 class="fs-subtitle">Dites-nous quelque chose de plus sur vous</h3>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label>Nom *</label>
              <input
                type="text"
                class="form-control"
                placeholder="Nom"
                v-model="nom"
              />
            </div>
            <div class="form-group col-md-6">
              <label>Prénom *</label>
              <input
                type="text"
                class="form-control"
                placeholder="Prénom"
                v-model="prenom"
              />
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label>Sexe</label>
              <select id="gender" class="form-control" v-model="gender">
                <option selected value="">Selectionner votre sexe</option>
                <option selected value="oui">Homme</option>
                <option value="non" selected>Femme</option>
                >
              </select>
            </div>

            <div class="form-group col-md-6">
              <label>Adresse</label>
              <input
                type="text"
                class="form-control"
                placeholder="Exemple..."
                v-model="adresse"
              />
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-2">
              <label> Code postal</label>
              <input
                type="text"
                class="form-control"
                placeholder="Code Postal"
                v-model="codeP"
              />
            </div>
            <div class="col-sm-5 mt-2 mt-sm-0">
              <label> Ville</label>
              <input
                type="text"
                class="form-control"
                placeholder="Ville"
                v-model="ville"
              />
            </div>
            <div class="col-sm-5 mt-2 mt-sm-0">
              <label> Pays</label>
              <select id="inputState" class="form-control" v-model="pays">
                <option selected disabled value="">Pays</option>
                <option value="France">France</option>

                <option value="Afghanistan">Afghanistan</option>

                <option value="Afrique_du_sud">Afrique_du_Sud</option>
                <option value="Albanie">Albanie</option>
                <option value="Algerie">Algerie</option>
                <option value="Allemagne">Allemagne</option>
                <option value="Andorre">Andorre</option>
                <option value="Angola">Angola</option>
                <option value="Anguilla">Anguilla</option>

                <option value="Argentine">Argentine</option>
                <option value="Armenie">Armenie</option>
                <option value="Australie">Australie</option>
                <option value="Autriche">Autriche</option>
                <option value="Azerbaidjan">Azerbaidjan</option>

                <option value="Bahamas">Bahamas</option>
                <option value="Bangladesh">Bangladesh</option>
                <option value="Barbade">Barbade</option>
                <option value="Bahrein">Bahrein</option>
                <option value="Belgique">Belgique</option>
                <option value="Belize">Belize</option>
                <option value="Benin">Benin</option>
                <option value="Bermudes">Bermudes</option>
                <option value="Bielorussie">Bielorussie</option>
                <option value="Bolivie">Bolivie</option>
                <option value="Botswana">Botswana</option>
                <option value="Bhoutan">Bhoutan</option>

                <option value="Bresil">Bresil</option>
                <option value="Brunei">Brunei</option>
                <option value="Bulgarie">Bulgarie</option>
                <option value="Burkina_Faso">Burkina_Faso</option>
                <option value="Burundi">Burundi</option>

                <option value="Caiman">Caiman</option>
                <option value="Cambodge">Cambodge</option>
                <option value="Cameroun">Cameroun</option>
                <option value="Canada">Canada</option>
                <option value="Canaries">Canaries</option>
                <option value="Cap_vert">Cap_Vert</option>
                <option value="Chili">Chili</option>
                <option value="Chine">Chine</option>
                <option value="Chypre">Chypre</option>
                <option value="Colombie">Colombie</option>
                <option value="Comores">Colombie</option>
                <option value="Congo">Congo</option>

                <option value="Cook">Cook</option>
                <option value="Coree_du_Nord">Coree_du_Nord</option>
                <option value="Coree_du_Sud">Coree_du_Sud</option>
                <option value="Costa_Rica">Costa_Rica</option>
                <option value="Cote_d_Ivoire">Côte_d_Ivoire</option>
                <option value="Croatie">Croatie</option>
                <option value="Cuba">Cuba</option>

                <option value="Danemark">Danemark</option>
                <option value="Djibouti">Djibouti</option>
                <option value="Dominique">Dominique</option>

                <option value="Egypte">Egypte</option>

                <option value="Equateur">Equateur</option>
                <option value="Erythree">Erythree</option>
                <option value="Espagne">Espagne</option>
                <option value="Estonie">Estonie</option>
                <option value="Etats_Unis">Etats_Unis</option>
                <option value="Ethiopie">Ethiopie</option>

                <option value="Falkland">Falkland</option>
                <option value="Feroe">Feroe</option>
                <option value="Fidji">Fidji</option>
                <option value="Finlande">Finlande</option>
                <option value="France">France</option>

                <option value="Gabon">Gabon</option>
                <option value="Gambie">Gambie</option>
                <option value="Georgie">Georgie</option>
                <option value="Ghana">Ghana</option>
                <option value="Gibraltar">Gibraltar</option>
                <option value="Grece">Grece</option>
                <option value="Grenade">Grenade</option>
                <option value="Groenland">Groenland</option>
                <option value="Guadeloupe">Guadeloupe</option>
                <option value="Guam">Guam</option>
                <option value="Guatemala">Guatemala</option>
                <option value="Guernesey">Guernesey</option>
                <option value="Guinee">Guinee</option>
                <option value="Guinee_Bissau">Guinee_Bissau</option>

                <option value="Guyana">Guyana</option>

                <option value="Haiti">Haiti</option>
                <option value="Hawaii">Hawaii</option>
                <option value="Honduras">Honduras</option>
                <option value="Hong_Kong">Hong_Kong</option>
                <option value="Hongrie">Hongrie</option>

                <option value="Inde">Inde</option>
                <option value="Indonesie">Indonesie</option>
                <option value="Iran">Iran</option>
                <option value="Iraq">Iraq</option>
                <option value="Irlande">Irlande</option>
                <option value="Islande">Islande</option>
                <option value="Israel">Israel</option>
                <option value="Italie">italie</option>

                <option value="Jamaique">Jamaique</option>
                <option value="Jan Mayen">Jan Mayen</option>
                <option value="Japon">Japon</option>
                <option value="Jersey">Jersey</option>
                <option value="Jordanie">Jordanie</option>

                <option value="Kazakhstan">Kazakhstan</option>
                <option value="Kenya">Kenya</option>
                <option value="Kirghizstan">Kirghizistan</option>
                <option value="Kiribati">Kiribati</option>
                <option value="Koweit">Koweit</option>

                <option value="Laos">Laos</option>
                <option value="Lesotho">Lesotho</option>
                <option value="Lettonie">Lettonie</option>
                <option value="Liban">Liban</option>
                <option value="Liberia">Liberia</option>
                <option value="Liechtenstein">Liechtenstein</option>
                <option value="Lituanie">Lituanie</option>
                <option value="Luxembourg">Luxembourg</option>
                <option value="Lybie">Lybie</option>

                <option value="Macao">Macao</option>
                <option value="Macedoine">Macedoine</option>
                <option value="Madagascar">Madagascar</option>
                <option value="Madère">Madère</option>
                <option value="Malaisie">Malaisie</option>
                <option value="Malawi">Malawi</option>
                <option value="Maldives">Maldives</option>
                <option value="Mali">Mali</option>
                <option value="Malte">Malte</option>
                <option value="Man">Man</option>

                <option value="Maroc">Maroc</option>
                <option value="Marshall">Marshall</option>
                <option value="Martinique">Martinique</option>
                <option value="Maurice">Maurice</option>
                <option value="Mauritanie">Mauritanie</option>
                <option value="Mayotte">Mayotte</option>
                <option value="Mexique">Mexique</option>
                <option value="Micronesie">Micronesie</option>
                <option value="Midway">Midway</option>
                <option value="Moldavie">Moldavie</option>
                <option value="Monaco">Monaco</option>
                <option value="Mongolie">Mongolie</option>
                <option value="Montserrat">Montserrat</option>
                <option value="Mozambique">Mozambique</option>

                <option value="Namibie">Namibie</option>
                <option value="Nauru">Nauru</option>
                <option value="Nepal">Nepal</option>
                <option value="Nicaragua">Nicaragua</option>
                <option value="Niger">Niger</option>
                <option value="Nigeria">Nigeria</option>
                <option value="Niue">Niue</option>
                <option value="Norfolk">Norfolk</option>
                <option value="Norvege">Norvege</option>

                <option value="Oman">Oman</option>
                <option value="Ouganda">Ouganda</option>
                <option value="Ouzbekistan">Ouzbekistan</option>

                <option value="Pakistan">Pakistan</option>
                <option value="Palau">Palau</option>
                <option value="Palestine">Palestine</option>
                <option value="Panama">Panama</option>

                <option value="Paraguay">Paraguay</option>
                <option value="Pays_Bas">Pays_Bas</option>
                <option value="Perou">Perou</option>
                <option value="Philippines">Philippines</option>
                <option value="Pologne">Pologne</option>
                <option value="Polynesie">Polynesie</option>
                <option value="Porto_Rico">Porto_Rico</option>
                <option value="Portugal">Portugal</option>

                <option value="Qatar">Qatar</option>

                <option value="Reunion">Reunion</option>
                <option value="Roumanie">Roumanie</option>
                <option value="Royaume_Uni">Royaume_Uni</option>
                <option value="Russie">Russie</option>
                <option value="Rwanda">Rwanda</option>

                <option value="Sainte_Lucie">Sainte_Lucie</option>
                <option value="Saint_Marin">Saint_Marin</option>
                <option value="Salomon">Salomon</option>
                <option value="Salvador">Salvador</option>

                <option value="Senegal">Senegal</option>
                <option value="Seychelles">Seychelles</option>
                <option value="Sierra Leone">Sierra Leone</option>
                <option value="Singapour">Singapour</option>
                <option value="Slovaquie">Slovaquie</option>
                <option value="Slovenie">Slovenie</option>
                <option value="Somalie">Somalie</option>
                <option value="Soudan">Soudan</option>
                <option value="Sri_Lanka">Sri_Lanka</option>
                <option value="Suede">Suede</option>
                <option value="Suisse">Suisse</option>
                <option value="Surinam">Surinam</option>
                <option value="Swaziland">Swaziland</option>
                <option value="Syrie">Syrie</option>

                <option value="Tadjikistan">Tadjikistan</option>
                <option value="Taiwan">Taiwan</option>
                <option value="Tonga">Tonga</option>
                <option value="Tanzanie">Tanzanie</option>
                <option value="Tchad">Tchad</option>
                <option value="Thailande">Thailande</option>
                <option value="Tibet">Tibet</option>
                <option value="Timor_Oriental">Timor_Oriental</option>
                <option value="Togo">Togo</option>

                <option value="Tunisie">Tunisie</option>
                <option value="Turkmenistan">Turmenistan</option>
                <option value="Turquie">Turquie</option>

                <option value="Ukraine">Ukraine</option>
                <option value="Uruguay">Uruguay</option>

                <option value="Vanuatu">Vanuatu</option>
                <option value="Vatican">Vatican</option>
                <option value="Venezuela">Venezuela</option>

                <option value="Vietnam">Vietnam</option>

                <option value="Wake">Wake</option>

                <option value="Yemen">Yemen</option>
                <option value="Yougoslavie">Yougoslavie</option>

                <option value="Zambie">Zambie</option>
                <option value="Zimbabwe">Zimbabwe</option>
              </select>
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-4">
              <label>Telephone</label>
              <input
                type="text"
                class="form-control"
                placeholder="Telephone"
                v-model="tel"
              />
            </div>
            <div class="col-sm-4 mt-2 mt-sm-0">
              <label>Telephone portable</label>
              <input
                type="text"
                class="form-control"
                placeholder="Telephone portable"
                v-model="telpor"
              />
            </div>
            <div class="col-sm-4 mt-2 mt-sm-0">
              <label>Email</label>
              <input
                type="email"
                class="form-control"
                placeholder="Email"
                v-model="email"
              />
            </div>
          </div>

          <div class="form-row">
            <div class="col-sm-6 mt-2 mt-sm-0">
              <label>Dernière école fréquentée</label>
              <input
                type="text"
                class="form-control"
                placeholder="Dernière école fréquentée"
                v-model="der_ecole_freq"
              />
            </div>
            <div class="col-sm-6 mt-2 mt-sm-0">
              <label>Diplome</label>
              <input
                type="text"
                class="form-control"
                placeholder="Diplome"
                v-model="der_diplome"
              />
            </div>
          </div>

          <input
            type="button"
            name="next"
            class="next action-button"
            value="Suivant"
            @click="showNext()"
          />
        </fieldset>
        <fieldset v-if="step == 2">
          <h2 class="fs-title">Coordonnées personnelles</h2>
          <h3 class="fs-subtitle">Vos coordonnées personnelles</h3>
          <div class="form-row">
            <div class="col-sm-6 mt-2 mt-sm-0">
              <label
                >Indiquez si vous acceptez ou refusez la déduction forfaitaire
                en matière sociale</label
              >
              <select id="role" class="form-control" v-model="forfaitaire_soc">
                <option value="">Selectionner votre choix</option>
                <option selected value="accepte">J'ACCEPTE</option>
                <option value="refuse" selected>JE REFUSE</option>
                <option value="jammais">
                  Je ne suis pas prévu(e) sur un long métrage
                </option>
              </select>
            </div>
            <div class="col-sm-6 mt-2 mt-sm-0">
              <label>Déclaration des impôts en France ? *</label>
              <br />
              <label class="radio-inline mr-3"
                ><input
                  type="radio"
                  name="optradio"
                  v-model="dec_impo"
                  value="oui"
                />
                Oui</label
              >
              <label class="radio-inline mr-3"
                ><input
                  type="radio"
                  name="optradio"
                  v-model="dec_impo"
                  value="non"
                />
                Non</label
              >
            </div>
          </div>

          <div class="form-row">
            <div class="col-sm-6 mt-2 mt-sm-0">
              <label>Situation familiale </label>
              <select
                id="sit_familiale"
                class="form-control"
                v-model="sit_familiale"
              >
                <option value="">
                  Sélectionnner votre situation familiale
                </option>
                <option selected value="celibataire">Célibataire</option>
                <option value="marié" selected>Marié(e)</option>
                <option value="pacse">Pacsé(e)</option>
                <option value="divorcé">Divorcé(e)</option>
                <option value="veuf">Veuf(ve)</option>
                <option value="concubinage">Concubinage</option>
              </select>
            </div>
            <div class="col-sm-6 mt-2 mt-sm-0">
              <label>Nombre de personne à charge </label>
              <input
                type="text"
                class="form-control"
                placeholder="Nombre de personne à charge"
                v-model="nbr_per_charge"
              />
            </div>
          </div>

          <div class="form-row">
            <div class="col-sm-6 mt-2 mt-sm-0">
              <label>Nombre d'enfant </label>
              <input
                type="text"
                class="form-control"
                placeholder="Nombre d'enfant"
                v-model="nbr_enfant"
              />
            </div>
            <div class="col-sm-6 mt-2 mt-sm-0">
              <label>N.I.R.P.P </label>
              <input
                type="text"
                class="form-control"
                placeholder="Numéro de sécurité sociale"
                v-model="num_sec_soc"
              />
            </div>
          </div>

          <div class="form-row">
            <div class="col-sm-6 mt-2 mt-sm-0">
              <label>Lieu de naissance</label>
              <input
                type="text"
                class="form-control"
                placeholder="Lieu de Naissance"
                v-model="lieu_nais"
              />
            </div>
            <div class="col-sm-6 mt-2 mt-sm-0">
              <label>Nationalité</label>

              <select class="form-control" v-model="nationalite">
                <option value="">Séléctionner votre choix</option>
                <option value="AFG">Afghane (Afghanistan)</option>
                <option value="ALB">Albanaise (Albanie)</option>
                <option value="DZA">Algérienne (Algérie)</option>
                <option value="DEU">Allemande (Allemagne)</option>
                <option select value="USA">Americaine (États-Unis)</option>
                <option value="AND">Andorrane (Andorre)</option>
                <option value="AGO">Angolaise (Angola)</option>
                <option value="ATG">
                  Antiguaise-et-Barbudienne (Antigua-et-Barbuda)
                </option>
                <option value="ARG">Argentine (Argentine)</option>
                <option value="ARM">Armenienne (Arménie)</option>
                <option value="AUS">Australienne (Australie)</option>
                <option value="AUT">Autrichienne (Autriche)</option>
                <option value="AZE">Azerbaïdjanaise (Azerbaïdjan)</option>
                <option value="BHS">Bahamienne (Bahamas)</option>
                <option value="BHR">Bahreinienne (Bahreïn)</option>
                <option value="BGD">Bangladaise (Bangladesh)</option>
                <option value="BRB">Barbadienne (Barbade)</option>
                <option value="BEL">Belge (Belgique)</option>
                <option value="BLZ">Belizienne (Belize)</option>
                <option value="BEN">Béninoise (Bénin)</option>
                <option value="BTN">Bhoutanaise (Bhoutan)</option>
                <option value="BLR">Biélorusse (Biélorussie)</option>
                <option value="MMR">Birmane (Birmanie)</option>
                <option value="GNB">Bissau-Guinéenne (Guinée-Bissau)</option>
                <option value="BOL">Bolivienne (Bolivie)</option>
                <option value="BIH">Bosnienne (Bosnie-Herzégovine)</option>
                <option value="BWA">Botswanaise (Botswana)</option>
                <option value="BRA">Brésilienne (Brésil)</option>
                <option value="GBR">Britannique (Royaume-Uni)</option>
                <option value="BRN">Brunéienne (Brunéi)</option>
                <option value="BGR">Bulgare (Bulgarie)</option>
                <option value="BFA">Burkinabée (Burkina)</option>
                <option value="BDI">Burundaise (Burundi)</option>
                <option value="KHM">Cambodgienne (Cambodge)</option>
                <option value="CMR">Camerounaise (Cameroun)</option>
                <option value="CAN">Canadienne (Canada)</option>
                <option value="CPV">Cap-verdienne (Cap-Vert)</option>
                <option value="CAF">Centrafricaine (Centrafrique)</option>
                <option value="CHL">Chilienne (Chili)</option>
                <option value="CHN">Chinoise (Chine)</option>
                <option value="CYP">Chypriote (Chypre)</option>
                <option value="COL">Colombienne (Colombie)</option>
                <option value="COM">Comorienne (Comores)</option>
                <option value="COG">Congolaise (Congo-Brazzaville)</option>
                <option value="COD">Congolaise (Congo-Kinshasa)</option>
                <option value="COK">Cookienne (Îles Cook)</option>
                <option value="CRI">Costaricaine (Costa Rica)</option>
                <option value="HRV">Croate (Croatie)</option>
                <option value="CUB">Cubaine (Cuba)</option>
                <option value="DNK">Danoise (Danemark)</option>
                <option value="DJI">Djiboutienne (Djibouti)</option>
                <option value="DOM">
                  Dominicaine (République dominicaine)
                </option>
                <option value="DMA">Dominiquaise (Dominique)</option>
                <option value="EGY">Égyptienne (Égypte)</option>
                <option value="ARE">Émirienne (Émirats arabes unis)</option>
                <option value="GNQ">
                  Équato-guineenne (Guinée équatoriale)
                </option>
                <option value="ECU">Équatorienne (Équateur)</option>
                <option value="ERI">Érythréenne (Érythrée)</option>
                <option value="ESP">Espagnole (Espagne)</option>
                <option value="TLS">Est-timoraise (Timor-Leste)</option>
                <option value="EST">Estonienne (Estonie)</option>
                <option value="ETH">Éthiopienne (Éthiopie)</option>
                <option value="FJI">Fidjienne (Fidji)</option>
                <option value="FIN">Finlandaise (Finlande)</option>
                <option value="FRA">Française (France)</option>
                <option value="GAB">Gabonaise (Gabon)</option>
                <option value="GMB">Gambienne (Gambie)</option>
                <option value="GEO">Georgienne (Géorgie)</option>
                <option value="GHA">Ghanéenne (Ghana)</option>
                <option value="GRD">Grenadienne (Grenade)</option>
                <option value="GTM">Guatémaltèque (Guatemala)</option>
                <option value="GIN">Guinéenne (Guinée)</option>
                <option value="GUY">Guyanienne (Guyana)</option>
                <option value="HTI">Haïtienne (Haïti)</option>
                <option value="GRC">Hellénique (Grèce)</option>
                <option value="HND">Hondurienne (Honduras)</option>
                <option value="HUN">Hongroise (Hongrie)</option>
                <option value="IND">Indienne (Inde)</option>
                <option value="IDN">Indonésienne (Indonésie)</option>
                <option value="IRQ">Irakienne (Iraq)</option>
                <option value="IRN">Iranienne (Iran)</option>
                <option value="IRL">Irlandaise (Irlande)</option>
                <option value="ISL">Islandaise (Islande)</option>
                <option value="ISR">Israélienne (Israël)</option>
                <option value="ITA">Italienne (Italie)</option>
                <option value="CIV">Ivoirienne (Côte d'Ivoire)</option>
                <option value="JAM">Jamaïcaine (Jamaïque)</option>
                <option value="JPN">Japonaise (Japon)</option>
                <option value="JOR">Jordanienne (Jordanie)</option>
                <option value="KAZ">Kazakhstanaise (Kazakhstan)</option>
                <option value="KEN">Kenyane (Kenya)</option>
                <option value="KGZ">Kirghize (Kirghizistan)</option>
                <option value="KIR">Kiribatienne (Kiribati)</option>
                <option value="KNA">
                  Kittitienne et Névicienne (Saint-Christophe-et-Niévès)
                </option>
                <option value="KWT">Koweïtienne (Koweït)</option>
                <option value="LAO">Laotienne (Laos)</option>
                <option value="LSO">Lesothane (Lesotho)</option>
                <option value="LVA">Lettone (Lettonie)</option>
                <option value="LBN">Libanaise (Liban)</option>
                <option value="LBR">Libérienne (Libéria)</option>
                <option value="LBY">Libyenne (Libye)</option>
                <option value="LIE">Liechtensteinoise (Liechtenstein)</option>
                <option value="LTU">Lituanienne (Lituanie)</option>
                <option value="LUX">Luxembourgeoise (Luxembourg)</option>
                <option value="MKD">Macédonienne (Macédoine)</option>
                <option value="MYS">Malaisienne (Malaisie)</option>
                <option value="MWI">Malawienne (Malawi)</option>
                <option value="MDV">Maldivienne (Maldives)</option>
                <option value="MDG">Malgache (Madagascar)</option>
                <option value="MLI">Maliennes (Mali)</option>
                <option value="MLT">Maltaise (Malte)</option>
                <option value="MAR">Marocaine (Maroc)</option>
                <option value="MHL">Marshallaise (Îles Marshall)</option>
                <option value="MUS">Mauricienne (Maurice)</option>
                <option value="MRT">Mauritanienne (Mauritanie)</option>
                <option value="MEX">Mexicaine (Mexique)</option>
                <option value="FSM">Micronésienne (Micronésie)</option>
                <option value="MDA">Moldave (Moldovie)</option>
                <option value="MCO">Monegasque (Monaco)</option>
                <option value="MNG">Mongole (Mongolie)</option>
                <option value="MNE">Monténégrine (Monténégro)</option>
                <option value="MOZ">Mozambicaine (Mozambique)</option>
                <option value="NAM">Namibienne (Namibie)</option>
                <option value="NRU">Nauruane (Nauru)</option>
                <option value="NLD">Néerlandaise (Pays-Bas)</option>
                <option value="NZL">Néo-Zélandaise (Nouvelle-Zélande)</option>
                <option value="NPL">Népalaise (Népal)</option>
                <option value="NIC">Nicaraguayenne (Nicaragua)</option>
                <option value="NGA">Nigériane (Nigéria)</option>
                <option value="NER">Nigérienne (Niger)</option>
                <option value="NIU">Niuéenne (Niue)</option>
                <option value="PRK">Nord-coréenne (Corée du Nord)</option>
                <option value="NOR">Norvégienne (Norvège)</option>
                <option value="OMN">Omanaise (Oman)</option>
                <option value="UGA">Ougandaise (Ouganda)</option>
                <option value="UZB">Ouzbéke (Ouzbékistan)</option>
                <option value="PAK">Pakistanaise (Pakistan)</option>
                <option value="PLW">Palaosienne (Palaos)</option>
                <option value="PSE">Palestinienne (Palestine)</option>
                <option value="PAN">Panaméenne (Panama)</option>
                <option value="PNG">
                  Papouane-Néo-Guinéenne (Papouasie-Nouvelle-Guinée)
                </option>
                <option value="PRY">Paraguayenne (Paraguay)</option>
                <option value="PER">Péruvienne (Pérou)</option>
                <option value="PHL">Philippine (Philippines)</option>
                <option value="POL">Polonaise (Pologne)</option>
                <option value="PRT">Portugaise (Portugal)</option>
                <option value="QAT">Qatarienne (Qatar)</option>
                <option value="ROU">Roumaine (Roumanie)</option>
                <option value="RUS">Russe (Russie)</option>
                <option value="RWA">Rwandaise (Rwanda)</option>
                <option value="LCA">Saint-Lucienne (Sainte-Lucie)</option>
                <option value="SMR">Saint-Marinaise (Saint-Marin)</option>
                <option value="VCT">
                  Saint-Vincentaise et Grenadine (Saint-Vincent-et-les
                  Grenadines)
                </option>
                <option value="SLB">Salomonaise (Îles Salomon)</option>
                <option value="SLV">Salvadorienne (Salvador)</option>
                <option value="WSM">Samoane (Samoa)</option>
                <option value="STP">Santoméenne (Sao Tomé-et-Principe)</option>
                <option value="SAU">Saoudienne (Arabie saoudite)</option>
                <option value="SEN">Sénégalaise (Sénégal)</option>
                <option value="SRB">Serbe (Serbie)</option>
                <option value="SYC">Seychelloise (Seychelles)</option>
                <option value="SLE">Sierra-Léonaise (Sierra Leone)</option>
                <option value="SGP">Singapourienne (Singapour)</option>
                <option value="SVK">Slovaque (Slovaquie)</option>
                <option value="SVN">Slovène (Slovénie)</option>
                <option value="SOM">Somalienne (Somalie)</option>
                <option value="SDN">Soudanaise (Soudan)</option>
                <option value="LKA">Sri-Lankaise (Sri Lanka)</option>
                <option value="ZAF">Sud-Africaine (Afrique du Sud)</option>
                <option value="KOR">Sud-Coréenne (Corée du Sud)</option>
                <option value="SSD">Sud-Soudanaise (Soudan du Sud)</option>
                <option value="SWE">Suédoise (Suède)</option>
                <option value="CHE">Suisse (Suisse)</option>
                <option value="SUR">Surinamaise (Suriname)</option>
                <option value="SWZ">Swazie (Swaziland)</option>
                <option value="SYR">Syrienne (Syrie)</option>
                <option value="TJK">Tadjike (Tadjikistan)</option>
                <option value="TZA">Tanzanienne (Tanzanie)</option>
                <option value="TCD">Tchadienne (Tchad)</option>
                <option value="CZE">Tchèque (Tchéquie)</option>
                <option value="THA">Thaïlandaise (Thaïlande)</option>
                <option value="TGO">Togolaise (Togo)</option>
                <option value="TON">Tonguienne (Tonga)</option>
                <option value="TTO">Trinidadienne (Trinité-et-Tobago)</option>
                <option value="TUN">Tunisienne (Tunisie)</option>
                <option value="TKM">Turkmène (Turkménistan)</option>
                <option value="TUR">Turque (Turquie)</option>
                <option value="TUV">Tuvaluane (Tuvalu)</option>
                <option value="UKR">Ukrainienne (Ukraine)</option>
                <option value="URY">Uruguayenne (Uruguay)</option>
                <option value="VUT">Vanuatuane (Vanuatu)</option>
                <option value="VAT">Vaticane (Vatican)</option>
                <option value="VEN">Vénézuélienne (Venezuela)</option>
                <option value="VNM">Vietnamienne (Viêt Nam)</option>
                <option value="YEM">Yéménite (Yémen)</option>
                <option value="ZMB">Zambienne (Zambie)</option>
                <option value="ZWE">Zimbabwéenne (Zimbabwe)</option>
              </select>
            </div>
          </div>

          <div class="form-row">
            <div class="col-sm-6 mt-2 mt-sm-0">
              <label>N°carte de séjour </label>
              <input
                type="text"
                class="form-control"
                placeholder="N°carte de séjour"
                v-model="num_carte_sej"
              />
            </div>
            <div class="col-sm-6 mt-2 mt-sm-0">
              <label>Date de validité </label>
              <input type="date" class="form-control" v-model="dat_val" />
            </div>
          </div>

          <div class="form-row">
            <div class="col-sm-6 mt-2 mt-sm-0">
              <label>Etes-vous à la retraite ? </label>
              <select
                id="sit_familiale"
                class="form-control"
                v-model="retraite"
              >
                <option value="">Séléctionner votre choix</option>
                <option selected value="oui">Oui</option>
                <option value="non" selected>Non</option>
              </select>
            </div>
            <div class="col-sm-6 mt-2 mt-sm-0">
              <label>IBAN </label>
              <input
                type="text"
                class="form-control"
                placeholder="IBAN "
                v-model="iban"
              />
            </div>
          </div>
          <div class="form-row">
            <div class="col-sm-6 mt-2 mt-sm-0">
              <label>Si oui, êtes-vous retraité Audiens ? </label>
              <select
                id="sit_familiale"
                class="form-control"
                v-model="audiens_retraite"
              >
                <option value="">Séléctionner votre choix</option>
                <option selected value="oui">Oui</option>
                <option value="non" selected>Non</option>
                <option value="non" selected>Pas retraité</option>
              </select>
            </div>
            <div class="col-sm-6 mt-2 mt-sm-0">
              <label>N° Congés spectacle </label>
              <input
                type="text"
                class="form-control"
                placeholder="N° Congés spectacle"
                v-model="num_conge_spec"
              />
            </div>
          </div>

          <div class="form-row">
            <div class="col-sm-6 mt-2 mt-sm-0">
              <label>Date de la dernière visite médicale : </label>
              <input
                type="date"
                class="form-control"
                placeholder=""
                v-model="date_med"
              />
            </div>
            <div class="col-sm-6 mt-2 mt-sm-0">
              <label>Reconnaissance qualité travailleur handicapé ? </label>
              <select
                id="sit_familiale"
                class="form-control"
                v-model="handicap"
              >
                <option value="">Séléctionner votre choix</option>
                <option selected value="oui">Oui</option>
                <option value="non" selected>Non</option>
              </select>
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-5">
              <label>Adresse de votre centre de Sécurité Sociale </label>
              <input
                type="text"
                class="form-control"
                placeholder="Adresse de votre centre de Sécurité Sociale "
                v-model="adresse_sec_soc"
              />
            </div>
            <div class="col-sm-2 mt-sm-0">
              <label>Code postal SS </label>
              <input
                type="text"
                class="form-control"
                placeholder="Code postal Sécurité Sociale"
                v-model="codeP_sec_soc"
              />
            </div>
            <div class="col-sm-5 mt-2 mt-sm-0">
              <label>Ville securité sociale</label>
              <input
                type="text"
                class="form-control"
                placeholder="Ville"
                v-model="ville_sec_soc"
              />
            </div>
          </div>

          <br />

          <h6>Coordonnées de la personne à prévenir en cas d'accident</h6>
          <div class="form-row">
            <div class="form-group col-md-4">
              <label>NOM Prénom </label>
              <input
                type="text"
                class="form-control"
                placeholder="NOM Prénom "
                v-model="nom_pers_urg"
              />
            </div>
            <div class="col-sm-4 mt-2 mt-sm-0">
              <label>Adresse</label>
              <input
                type="text"
                class="form-control"
                placeholder="Adresse"
                v-model="pers_adr_urg"
              />
            </div>
            <div class="col-sm-4 mt-2 mt-sm-0">
              <label>N° de téléphone</label>
              <input
                type="text"
                class="form-control"
                placeholder="N° de téléphone"
                v-model="pers_num_urg"
              />
            </div>
          </div>
          <input
            type="button"
            name="previous"
            class="previous action-button-previous"
            value="Retour"
            @click="step--"
          />

          <input
            type="button"
            name="next"
            class="next action-button"
            @click="showNext()"
            value="Suivant"
          />
        </fieldset>
        <fieldset v-if="step==3">
          <h2 class="fs-title">Fichiers joints</h2>
          <h3 class="fs-subtitle">Importer vos documents</h3>
             <div class="form-row">
                  <div class="col-sm-6 mt-2 mt-sm-0">
                    <input
                      type="file"
                      class="custom-file-input"
                      @change="previewFiles"
                    />
                    <label class="custom-file-label"
                      >Copie de votre carte d'identité recto et verso ou de
                      votre passeport
                    </label>
                  </div>
                  <div class="col-sm-6 mt-2 mt-sm-0">
                    <input
                      type="file"
                      class="custom-file-input"
                      @change="previewFiles"
                    />
                    <label class="custom-file-label"
                      >Copie de diplome ou une copie de votre relevé de
                      note</label
                    >
                  </div>
                </div>
                <br />

                <div class="form-row">
                  <div class="col-sm-6 mt-2 mt-sm-0">
                    <input
                      type="file"
                      class="custom-file-input"
                      @change="previewFiles"
                    />
                    <label class="custom-file-label"
                      >Copie de votre carte vitale
                    </label>
                  </div>
                  <div class="col-sm-6 mt-2 mt-sm-0">
                    <input
                      type="file"
                      class="custom-file-input"
                      @change="previewFiles"
                    />
                    <label class="custom-file-label"
                      >Copie de l'attestation de visite médicale à jour</label
                    >
                  </div>
                </div>
                <br />
                <div class="form-row">
                  <div class="col-sm-6 mt-2 mt-sm-0">
                    <input
                      type="file"
                      class="custom-file-input"
                      @change="previewFiles"
                    />
                    <label class="custom-file-label">Copie de votre RIB </label>
                  </div>
                  <div class="col-sm-6 mt-2 mt-sm-0">
                    <input
                      type="file"
                      class="custom-file-input"
                      @change="previewFiles"
                    />
                    <label class="custom-file-label">Une photo récente</label>
                  </div>
                </div>
                <br />

                <input
                  type="text"
                  class="form-control"
                  placeholder=""
                  id="image"
                  v-model="copiecin"
                  hidden
                />
                <input
                  type="text"
                  class="form-control"
                  placeholder=""
                  id="image"
                  v-model="cartevit"
                  hidden
                />
                <input
                  type="text"
                  class="form-control"
                  placeholder=""
                  id="image"
                  v-model="rib"
                  hidden
                />
                <input
                  type="text"
                  class="form-control"
                  placeholder=""
                  id="image"
                  v-model="copdip"
                  hidden
                />
                <input
                  type="text"
                  class="form-control"
                  placeholder=""
                  id="image"
                  v-model="attmed"
                  hidden
                />
                <input
                  type="text"
                  class="form-control"
                  placeholder=""
                  id="image"
                  v-model="photorec"
                  hidden
                />
          <input
            type="button"
            name="previous"
            class="previous action-button-previous"
            @click="step--"
            value="Retour"
          />
          <input
            type="submit"
            name="submit"
            class="submit action-button"
            @click.prevent="clickButton"
            value="Finaliser"
          />
        </fieldset>
      </form>

      <!-- /.link to designify.me code snippets -->
    </div>
  </div>
  <!-- /.MultiStep Form -->

  <!--**********************************
	Scripts
***********************************-->
  <!-- Required vendors -->
</template>

<script>
import axios from "axios";
import swal from "sweetalert2/dist/sweetalert2.js";
import "sweetalert2/src/sweetalert2.scss";
export default {
  components: {},

  data() {
    return {
      step: 1,
      nom: "",
      prenom: "",
      nom_j_f: "",
      dateNais: "",
      pseudoName: "",
      gender: "",
      adresse: "",
      codeP: "",
      ville: "",
      tel: "",
      telpor: "",
      email: "",
      der_ecole_freq: "",
      der_diplome: "",
      forfaitaire_soc: "",
      dec_impo: "",
      sit_familiale: "",
      nbr_per_charge: "",
      nbr_enfant: "",
      num_sec_soc: "",
      lieu_nais: "",
      nationalite: "",
      num_carte_sej: "",
      dat_val: "",
      retraite: "",
      iban: "",
      audiens_retraite: "",
      num_conge_spec: "",
      date_med: "",
      handicap: "",
      adresse_sec_soc: "",
      codeP_sec_soc: "",
      ville_sec_soc: "",
      nom_pers_urg: "",
      pers_adr_urg: "",
      pers_num_urg: "",
      copiecin: "",
      cartevit: "",
      rib: "",
      copdip: "",
      attmed: "",
      photorec: "",
      pays: "",
      data: "",
    };
  },

  methods: {
    showNext() {
      if (this.step == 1) {
        this.validateStepOne();
        return;
      }

      if (this.step == 2) {
        this.validateStepTwo();
        return;
      }
    },

    validateStepOne() {
      if (!this.nom) {
        this.displayError("Nom est requis");
        return;
      }

      if (!this.prenom) {
        this.displayError("Prénom est requis");
        return;
      }
      if (!this.gender) {
        this.displayError("Sexe est requis");
        return;
      }

      if (!this.adresse) {
        this.displayError("Addresse est requise");
        return;
      }

      if (!this.codeP) {
        this.displayError("Code postale est requis");
        return;
      }

      if (!this.ville) {
        this.displayError("Ville est requis");
        return;
      }

      if (!this.pays) {
        this.displayError("Pays est requis");
        return;
      }

      if (!this.tel) {
        this.displayError("Téléphone est requis");
        return;
      }
      if (!this.telpor) {
        this.displayError("Téléphone portable est requis");
        return;
      }

      if (!this.email) {
        this.displayError("Email est requis");
        return;
      }

      if (!this.validateEmail(this.email)) {
        this.displayError("Email est invalide");
        return;
      }
      this.step++;
    },
    validateStepTwo() {
      if (!this.forfaitaire_soc) {
        this.displayError(
          "La déduction forfaitaire en matière sociale est requise"
        );

        return;
      }

      if (!this.dec_impo) {
        this.displayError("Choix de la déclaration des impôts est requis");

        return;
      }

      if (!this.sit_familiale) {
        this.displayError("Choix de la situation familiale est requis");

        return;
      }

      if (!this.nbr_per_charge) {
        this.displayError("Choix du nombre de personnes en charge est requis");

        return;
      }

      if (!this.nbr_enfant) {
        this.displayError("Choix du nombre des enfants est requis");

        return;
      }

      if (!this.num_sec_soc) {
        this.displayError("Choix du numéro de la securité sociale est requis");

        return;
      }

      if (!this.lieu_nais) {
        this.displayError("Choix du lieu de la naissance est requis");

        return;
      }

      if (!this.nationalite) {
        this.displayError("Choix de la nationalité est requis");

        return;
      }

      if (!this.num_carte_sej) {
        this.displayError("Choix du numéro de la carte séjour est requis");

        return;
      }

      if (!this.dat_val) {
        this.displayError("Choix de la date de validité est requis");

        return;
      }

      if (!this.retraite) {
        this.displayError("Choix du retraite est requis");

        return;
      }

      if (!this.iban) {
        this.displayError("Choix de IBAN est requis");

        return;
      }
      if (!this.audiens_retraite) {
        this.displayError("Choix du retraité audien est requis");

        return;
      }

      if (!this.num_conge_spec) {
        this.displayError("Choix du numéro congé spectacle est requis");

        return;
      }

      if (!this.date_med) {
        this.displayError("Choix de la date visite médicale  est requis");

        return;
      }

      if (!this.handicap) {
        this.displayError("Choix de la reconaissance handicapé est requis");

        return;
      }

      if (!this.adresse_sec_soc) {
        this.displayError(
          "Choix de l'addresse centre securité sociale est requis"
        );

        return;
      }

      if (!this.codeP_sec_soc) {
        this.displayError("Choix du code postale  securité sociale est requis");

        return;
      }

      if (!this.ville_sec_soc) {
        this.displayError("Choix du ville securité sociale est requis");

        return;
      }

      if (!this.nom_pers_urg) {
        this.displayError(
          "Choix de NOM Prénom de la personne (cas accident) est requis"
        );

        return;
      }

      if (!this.pers_adr_urg) {
        this.displayError(
          "Choix de addresse de la personne (cas accident) est requis"
        );

        return;
      }

      this.step++;
    },
    displayError(message) {
      swal.fire({
        title: "Oups!",
        text: `${message}`,
        icon: "warning",
      });
    },



    validateEmail(email) {
      var re = /\S+@\S+\.\S+/;
      return re.test(email);
    },
    async clickButton() {
      
    //   if (this.nom == "") alert("nom");
    //   else if (this.prenom == "") alert("prenom");
    //   else if (this.nom_j_f == "") alert("nom_j_f");
    //   else if (this.dateNais == "") alert("dateNais");
    //   else if (this.gender == "") alert("gender");
    //   else if (this.nomCli == "") alert("nomCli");
    //   else if (this.adresse == "") alert("adresse");
    //   else if (this.codeP == "") alert("codeP");
    //   else if (this.ville == "") alert("ville");
    //   else if (this.tel == "") alert("tel");
    //   else if (this.telpor == "") alert("telpor");
    //   else if (this.email == "") alert("email");
    //   else if (this.der_ecole_freq == "") alert("der_ecole_freq");
    //   else if (this.der_diplome == "") alert("der_diplome");
    //   else if (this.forfaitaire_soc == "") alert("forfaitaire_soc");
    //   else if (this.dec_impo == "") alert("dec_impo");
    //   else if (this.sit_familiale == "") alert("sit_familiale");
    //   else if (this.nbr_per_charge == "") alert("nbr_per_charge");
    //   else if (this.nbr_enfant == "") alert("nbr_enfant");
    //   else if (this.num_sec_soc == "") alert("num_sec_soc");
    //   else if (this.lieu_nais == "") alert("lieu_nais");
    //   else if (this.nationalite == "") alert("nationalite");
    //   else if (this.num_carte_sej == "") alert("num_carte_sej");
    //   else if (this.dat_val == "") alert("dat_val");
    //   else if (this.retraite == "") alert("retraite");
    //   else if (this.iban == "") alert("iban");
    //   else if (this.audiens_retraite == "") alert("audiens_retraite");
    //   else if (this.num_conge_spec == "") alert("num_conge_spec");
    //   else if (this.date_med == "") alert("date_med");
    //   else if (this.handicap == "") alert("handicap");
    //   else if (this.adresse_sec_soc == "") alert("adresse_sec_soc");
    //   else if (this.codeP_sec_soc == "") alert("codeP_sec_soc");
    //   else if (this.ville_sec_soc == "") alert("ville_sec_soc");
    //   else if (this.nom_pers_urg == "") alert("nom_pers_urg");
    //   else if (this.pers_adr_urg == "") alert("pers_adr_urg");
    //   else if (this.pers_num_urg == "") alert("pers_num_urg");

      const options = {
        headers: { "Content-Type": "application/x-www-form-urlencoded" },
      };

      var data = {
        nom: this.nom,
        prenom: this.prenom,
        nom_j_f: this.nom_j_f,
        dateNais: this.dateNais,
        nomCli: this.nomCli,
        adresse: this.adresse,
        codeP: this.codeP,
        ville: this.ville,
        tel: this.tel,
        telpor: this.telpor,
        email: this.email,
        der_ecole_freq: this.der_ecole_freq,
        der_diplome: this.der_diplome,
        forfaitaire_soc: this.forfaitaire_soc,
        dec_impo: this.dec_impo,
        sit_familiale: this.sit_familiale,
        nbr_per_charge: this.nbr_per_charge,
        nbr_enfant: this.nbr_enfant,
        num_sec_soc: this.num_sec_soc,
        lieu_nais: this.lieu_nais,
        nationalite: this.nationalite,
        num_carte_sej: this.num_carte_sej,
        dat_val: this.dat_val,
        retraite: this.retraite,
        iban: this.iban,
        audiens_retraite: this.audiens_retraite,
        num_conge_spec: this.num_conge_spec,
        date_med: this.date_med,
        handicap: this.handicap,
        adresse_sec_soc: this.adresse_sec_soc,
        codeP_sec_soc: this.codeP_sec_soc,
        ville_sec_soc: this.ville_sec_soc,
        nom_pers_urg: this.nom_pers_urg,
        pers_adr_urg: this.pers_adr_urg,
        pers_num_urg: this.pers_num_urg,
        id: this.data.id,
        gender: this.gender,
      };

      await axios
        .post("http://localhost:8000/EditUser", data, options)
        .then((res) => (this.data = res.data.toString()));
      this.$router.push("/index");
    },
    previewFiles(event) {
      this.f = [];
      //console.log(this.getBase64(event.target.files[0]))
      //var i =0;
      //for(i;i<event.target.files.length;i++){
      this.getBase64(event.target.files[0]);
      //var s = document.getElementById("image").value
      //console.log(this.imageBS64)
      //this.f.push(this.imageBS64)
      //}

      //console.log(this.f);

      //console.log(this.$refs.myFiles.files)
      //console.log(event.target.files);
    },

    getBase64(file) {
      //var image = '';
      //var d =[];
      var reader = new FileReader();
      reader.readAsDataURL(file);
      reader.onload = function () {
        var s = reader.result.split(",");
        document.getElementById("image").value = s[1];

        //image = e.target.result
        /**var s = reader.result.split(",");
       image = s[1];
       return image ;
       callback(reader.result);**/
        //console.log(image);
        //this.arraypush(image);
      };

      console.log(reader.result);
      reader.onerror = function (error) {
        console.log("Error: ", error);
      };
    },
    arraypush(d) {
      this.file.push(d);
      console.log(this.file);
    },
  },
  beforeMount() {
    this.data = JSON.parse(localStorage.getItem("user"));
  },
};
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style></style>
