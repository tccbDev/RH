<template>

    <v-app>
        <body>
        <!--*******************
        Preloader start
    ********************-->
        
        <v-row justify="center">
            <v-dialog
                    v-model="DialogJustficatifTransport"
                    persistent
                    max-width="600px"
            >

                <v-card>
                    <v-card-title>
                        <span class="headline">Ajouter un justif de transport</span>
                    </v-card-title>
                    <v-card-text>
                        <v-container>

                            <v-text-field label="Montant"
                                          outlined
                                          dense v-model="montant"></v-text-field>

                                <v-autocomplete
                                        :items="Months"
                                        label="Mois"
                                        v-model="mois"

                                ></v-autocomplete>
                            <div class="form-group col-md-6">
                                <label>Justif</label>
                                <input type="file" @change="previewFiles">
                            </div>

                        </v-container>
                        <input type="text" class="form-control" placeholder="" id="image" v-model="imageBS64" hidden>
                    </v-card-text>
                    <v-card-actions>
                        <v-spacer></v-spacer>
                        <v-btn
                                color="blue darken-1"
                                text
                                @click="DialogJustficatifTransport = false"
                        >
                            Close
                        </v-btn>
                        <v-btn
                                color="blue darken-1"
                                text
                                @click="AddJustificatifTR()"
                        >
                            Save
                        </v-btn>
                    </v-card-actions>
                </v-card>
            </v-dialog>

        </v-row>
        <v-row justify="center">
            <v-dialog
                    v-model="DialogJustficatifNDF"
                    persistent
                    max-width="600px"
            >

                <v-card>
                    <v-card-title>
                        <span class="headline">Ajouter justif NDF</span>
                    </v-card-title>
                    <v-card-text>
                        <v-container>

                            <v-text-field label="Montant"
                                          outlined
                                          dense v-model="montant"></v-text-field>
                            <v-text-field label="Nature"
                                          outlined
                                          dense v-model="Nature"></v-text-field>
                            <div class="form-group col-md-6">
                                <label>Justif NDF</label>
                                <input type="file" @change="previewFiles">
                            </div>
                        </v-container>
                        <input type="text" class="form-control" placeholder="" id="image" v-model="imageBS64" hidden>
                    </v-card-text>
                    <v-card-actions>
                        <v-spacer></v-spacer>
                        <v-btn
                                color="blue darken-1"
                                text
                                @click="DialogJustficatifNDF = false"
                        >
                            Close
                        </v-btn>
                        <v-btn
                                color="blue darken-1"
                                text
                                @click="AddJustificatifNDF()"
                        >
                            Save
                        </v-btn>
                    </v-card-actions>
                </v-card>
            </v-dialog>

        </v-row>
        <v-row justify="center">
            <v-dialog
                    v-model="DialogDevis"
                    persistent
                    max-width="600px"
            >
                <v-card>
                    <v-card-title>
                        <span class="headline">Envoyer un devis</span>
                    </v-card-title>
                    <v-card-text>
                        <v-container>

                            <v-text-field label="Montant"
                                          outlined
                                          dense v-model="montant"></v-text-field>
                            <v-text-field label="Numéro devis"
                                          outlined
                                          dense v-model="NumDevis"></v-text-field>
                            <v-menu
                                    ref="menu"
                                    v-model="menu"
                                    :close-on-content-click="false"
                                    :return-value.sync="date"
                                    transition="scale-transition"
                                    offset-y
                                    min-width="auto"
                            >
                                <template v-slot:activator="{ on, attrs }">
                                    <v-text-field
                                            v-model="date"
                                            label="Picker in menu"
                                            prepend-icon="mdi-calendar"
                                            readonly
                                            v-bind="attrs"
                                            v-on="on"
                                    ></v-text-field>
                                </template>
                                <v-date-picker
                                        v-model="date"
                                        no-title
                                        scrollable
                                >
                                    <v-spacer></v-spacer>
                                    <v-btn
                                            text
                                            color="primary"
                                            @click="menu = false"
                                    >
                                        Cancel
                                    </v-btn>
                                    <v-btn
                                            text
                                            color="primary"
                                            @click="$refs.menu.save(date)"
                                    >
                                        OK
                                    </v-btn>
                                </v-date-picker>
                            </v-menu>
                            <div class="form-group col-md-6">
                                <label>Devis</label>
                                <input type="file" @change="previewFiles">
                            </div>

                        </v-container>
                        <input type="text" class="form-control" placeholder="" id="image" v-model="imageBS64" hidden>
                    </v-card-text>
                    <v-card-actions>
                        <v-spacer></v-spacer>
                        <v-btn
                                color="blue darken-1"
                                text
                                @click="DialogDevis = false"
                        >
                            Close
                        </v-btn>
                        <v-btn
                                color="blue darken-1"
                                text
                                @click="AddDevis()"
                        >
                            Save
                        </v-btn>
                    </v-card-actions>
                </v-card>
            </v-dialog>

        </v-row>
        <v-row justify="center">
            <v-dialog
                    v-model="DialogFacture"
                    persistent
                    max-width="600px"
            >

                <v-card>
                    <v-card-title>
                        <span class="headline">Ajouter une facture</span>
                    </v-card-title>
                    <v-card-text>
                        <v-container>

                            <v-text-field
                                    label="Montant"
                                    outlined
                                    dense v-model="montant"></v-text-field>
                            <v-text-field label="Noméro facture"
                            outlined
                            dense v-model="NumFacture"></v-text-field>
                            <v-menu
                                    ref="menu"
                                    v-model="menu"
                                    :close-on-content-click="false"
                                    :return-value.sync="date"
                                    transition="scale-transition"
                                    offset-y
                                    min-width="auto"
                            >
                                <template v-slot:activator="{ on, attrs }">
                                    <v-text-field
                                            v-model="date"
                                            label="Picker"
                                            prepend-icon="mdi-calendar"
                                            readonly
                                            v-bind="attrs"
                                            v-on="on"
                                    ></v-text-field>
                                </template>
                                <v-date-picker
                                        v-model="date"
                                        no-title
                                        scrollable
                                >
                                    <v-spacer></v-spacer>
                                    <v-btn
                                            text
                                            color="primary"
                                            @click="menu = false"
                                    >
                                        Cancel
                                    </v-btn>
                                    <v-btn
                                            text
                                            color="primary"
                                            @click="$refs.menu.save(date)"
                                    >
                                        OK
                                    </v-btn>
                                </v-date-picker>
                            </v-menu>
                            <v-text-field label="Devis"
                                          outlined
                                          dense v-model="DevisFacture"></v-text-field>
                            <div class="form-group col-md-6">
                                <label>Facture</label>
                                <input type="file" @change="previewFiles">
                            </div>

                        </v-container>
                        <input type="text" class="form-control" placeholder="" id="image" v-model="imageBS64" hidden >
                    </v-card-text>
                    <v-card-actions>
                        <v-spacer></v-spacer>
                        <v-btn
                                color="blue darken-1"
                                text
                                @click="DialogFacture = false"
                        >
                            Close
                        </v-btn>
                        <v-btn
                                color="blue darken-1"
                                text
                                @click="AddFacture()"
                        >
                            Save
                        </v-btn>
                    </v-card-actions>
                </v-card>
            </v-dialog>

        </v-row>
        <v-row justify="center">
            <v-dialog
                    v-model="DialogInformations"
                    persistent
                    max-width="600px"
            >

                <v-card>
                    <v-card-title>
                        <span class="headline">Completez vos informations</span>
                    </v-card-title>
                    <v-card-text>
                        <v-container>

                            <v-text-field label="SIREN"
                                          outlined
                                          dense v-model="siren"></v-text-field>
                            <v-text-field label="SIRET"
                                          outlined
                                          dense v-model="siret"></v-text-field>
                            <v-text-field label="Numéro TVA"
                                          outlined
                                          dense v-model="NTVA"></v-text-field>
                            <v-text-field label="Numéro TVA Communautaire"
                                          outlined
                                          dense v-model="NTVAC"></v-text-field>
                        </v-container>
                    </v-card-text>
                    <v-card-actions>
                        <v-spacer></v-spacer>
                        <v-btn
                                color="blue darken-1"
                                text
                                @click="DialogInformations = false"
                        >
                            Close
                        </v-btn>
                        <v-btn
                                color="blue darken-1"
                                text
                                @click="EditInformations()"
                        >
                            Save
                        </v-btn>
                    </v-card-actions>
                </v-card>
            </v-dialog>

        </v-row>
        <!--*******************
            Preloader end
        ********************-->

        <!--**********************************
            Main wrapper start
        ***********************************-->
        <div id="main-wrapper">

            <!--**********************************
                Nav header start
            ***********************************-->
            <div class="nav-header">
                <a href="index.html" class="brand-logo">
                  <img style="height: 100%; width: 100%; object-fit: cover;" src="../assets/supamonks-green.png" alt="">
                </a>

                <div class="nav-control">
                    <div class="hamburger">
                        <span class="line"></span><span class="line"></span><span class="line"></span>
                    </div>
                </div>
            </div>
            <!--**********************************
                Nav header end
            ***********************************-->

            <!--**********************************
                    Chat box start
                ***********************************-->
            <div class="chatbox" >
                <div class="chatbox-close"></div>
                <div class="custom-tab-1">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#notes">Notes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#alerts">Alerts</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#chat">Chat</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="chat" role="tabpanel">
                            <div class="card mb-sm-3 mb-md-0 contacts_card dz-chat-user-box">
                                <div class="card-header chat-list-header text-center">
                                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect fill="#000000" x="4" y="11" width="16" height="2" rx="1"/><rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) " x="4" y="11" width="16" height="2" rx="1"/></g></svg></a>
                                    <div>
                                        <h6 class="mb-1">Chat List</h6>
                                        <p class="mb-0">Show All</p>
                                    </div>
                                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg></a>
                                </div>
                                <div class="card-body contacts_body p-0 dz-scroll  " id="DZ_W_Contacts_Body">
                                    <ul class="contacts">
                                        <li class="name-first-letter">A</li>
                                        <li class="active dz-chat-user">
                                            <div class="d-flex bd-highlight">
                                                <div class="img_cont">
                                                    <img style="width: 55px; height: 55px;" src="images/avatar/1.jpg" class="rounded-circle user_img" alt=""/>
                                                    <span class="online_icon"></span>
                                                </div>
                                                <div class="user_info">
                                                    <span>Archie Parker</span>
                                                    <p>Kalid is online</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="dz-chat-user">
                                            <div class="d-flex bd-highlight">
                                                <div class="img_cont">
                                                    <img src="images/avatar/2.jpg" class="rounded-circle user_img" alt=""/>
                                                    <span class="online_icon offline"></span>
                                                </div>
                                                <div class="user_info">
                                                    <span>Alfie Mason</span>
                                                    <p>Taherah left 7 mins ago</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="dz-chat-user">
                                            <div class="d-flex bd-highlight">
                                                <div class="img_cont">
                                                    <img src="images/avatar/3.jpg" class="rounded-circle user_img" alt=""/>
                                                    <span class="online_icon"></span>
                                                </div>
                                                <div class="user_info">
                                                    <span>AharlieKane</span>
                                                    <p>Sami is online</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="dz-chat-user">
                                            <div class="d-flex bd-highlight">
                                                <div class="img_cont">
                                                    <img src="images/avatar/4.jpg" class="rounded-circle user_img" alt=""/>
                                                    <span class="online_icon offline"></span>
                                                </div>
                                                <div class="user_info">
                                                    <span>Athan Jacoby</span>
                                                    <p>Nargis left 30 mins ago</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="name-first-letter">B</li>
                                        <li class="dz-chat-user">
                                            <div class="d-flex bd-highlight">
                                                <div class="img_cont">
                                                    <img src="images/avatar/5.jpg" class="rounded-circle user_img" alt=""/>
                                                    <span class="online_icon offline"></span>
                                                </div>
                                                <div class="user_info">
                                                    <span>Bashid Samim</span>
                                                    <p>Rashid left 50 mins ago</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="dz-chat-user">
                                            <div class="d-flex bd-highlight">
                                                <div class="img_cont">
                                                    <img src="images/avatar/1.jpg" class="rounded-circle user_img" alt=""/>
                                                    <span class="online_icon"></span>
                                                </div>
                                                <div class="user_info">
                                                    <span>Breddie Ronan</span>
                                                    <p>Kalid is online</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="dz-chat-user">
                                            <div class="d-flex bd-highlight">
                                                <div class="img_cont">
                                                    <img src="images/avatar/2.jpg" class="rounded-circle user_img" alt=""/>
                                                    <span class="online_icon offline"></span>
                                                </div>
                                                <div class="user_info">
                                                    <span>Ceorge Carson</span>
                                                    <p>Taherah left 7 mins ago</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="name-first-letter">D</li>
                                        <li class="dz-chat-user">
                                            <div class="d-flex bd-highlight">
                                                <div class="img_cont">
                                                    <img src="images/avatar/3.jpg" class="rounded-circle user_img" alt=""/>
                                                    <span class="online_icon"></span>
                                                </div>
                                                <div class="user_info">
                                                    <span>Darry Parker</span>
                                                    <p>Sami is online</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="dz-chat-user">
                                            <div class="d-flex bd-highlight">
                                                <div class="img_cont">
                                                    <img src="images/avatar/4.jpg" class="rounded-circle user_img" alt=""/>
                                                    <span class="online_icon offline"></span>
                                                </div>
                                                <div class="user_info">
                                                    <span>Denry Hunter</span>
                                                    <p>Nargis left 30 mins ago</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="name-first-letter">J</li>
                                        <li class="dz-chat-user">
                                            <div class="d-flex bd-highlight">
                                                <div class="img_cont">
                                                    <img src="images/avatar/5.jpg" class="rounded-circle user_img" alt=""/>
                                                    <span class="online_icon offline"></span>
                                                </div>
                                                <div class="user_info">
                                                    <span>Jack Ronan</span>
                                                    <p>Rashid left 50 mins ago</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="dz-chat-user">
                                            <div class="d-flex bd-highlight">
                                                <div class="img_cont">
                                                    <img src="images/avatar/1.jpg" class="rounded-circle user_img" alt=""/>
                                                    <span class="online_icon"></span>
                                                </div>
                                                <div class="user_info">
                                                    <span>Jacob Tucker</span>
                                                    <p>Kalid is online</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="dz-chat-user">
                                            <div class="d-flex bd-highlight">
                                                <div class="img_cont">
                                                    <img src="images/avatar/2.jpg" class="rounded-circle user_img" alt=""/>
                                                    <span class="online_icon offline"></span>
                                                </div>
                                                <div class="user_info">
                                                    <span>James Logan</span>
                                                    <p>Taherah left 7 mins ago</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="dz-chat-user">
                                            <div class="d-flex bd-highlight">
                                                <div class="img_cont">
                                                    <img src="images/avatar/3.jpg" class="rounded-circle user_img" alt=""/>
                                                    <span class="online_icon"></span>
                                                </div>
                                                <div class="user_info">
                                                    <span>Joshua Weston</span>
                                                    <p>Sami is online</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="name-first-letter">O</li>
                                        <li class="dz-chat-user">
                                            <div class="d-flex bd-highlight">
                                                <div class="img_cont">
                                                    <img src="images/avatar/4.jpg" class="rounded-circle user_img" alt=""/>
                                                    <span class="online_icon offline"></span>
                                                </div>
                                                <div class="user_info">
                                                    <span>Oliver Acker</span>
                                                    <p>Nargis left 30 mins ago</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="dz-chat-user">
                                            <div class="d-flex bd-highlight">
                                                <div class="img_cont">
                                                    <img src="images/avatar/5.jpg" class="rounded-circle user_img" alt=""/>
                                                    <span class="online_icon offline"></span>
                                                </div>
                                                <div class="user_info">
                                                    <span>Oscar Weston</span>
                                                    <p>Rashid left 50 mins ago</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card chat dz-chat-history-box d-none">
                                <div class="card-header chat-list-header text-center">
                                    <a href="#" class="dz-chat-history-back">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><polygon points="0 0 24 0 24 24 0 24"/><rect fill="#000000" opacity="0.3" transform="translate(15.000000, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-15.000000, -12.000000) " x="14" y="7" width="2" height="10" rx="1"/><path d="M3.7071045,15.7071045 C3.3165802,16.0976288 2.68341522,16.0976288 2.29289093,15.7071045 C1.90236664,15.3165802 1.90236664,14.6834152 2.29289093,14.2928909 L8.29289093,8.29289093 C8.67146987,7.914312 9.28105631,7.90106637 9.67572234,8.26284357 L15.6757223,13.7628436 C16.0828413,14.136036 16.1103443,14.7686034 15.7371519,15.1757223 C15.3639594,15.5828413 14.7313921,15.6103443 14.3242731,15.2371519 L9.03007346,10.3841355 L3.7071045,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(9.000001, 11.999997) scale(-1, -1) rotate(90.000000) translate(-9.000001, -11.999997) "/></g></svg>
                                    </a>
                                    <div>
                                        <h6 class="mb-1">Chat with Khelesh</h6>
                                        <p class="mb-0 text-success">Online</p>
                                    </div>
                                    <div class="dropdown">
                                        <a href="#" data-toggle="dropdown" ><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg></a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li class="dropdown-item"><i class="fa fa-user-circle text-primary mr-2"></i> View profile</li>
                                            <li class="dropdown-item"><i class="fa fa-users text-primary mr-2"></i> Add to close friends</li>
                                            <li class="dropdown-item"><i class="fa fa-plus text-primary mr-2"></i> Add to group</li>
                                            <li class="dropdown-item"><i class="fa fa-ban text-primary mr-2"></i> Block</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body msg_card_body dz-scroll" id="DZ_W_Contacts_Body3">
                                    <div class="d-flex justify-content-start mb-4">
                                        <div class="img_cont_msg">
                                            <img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt=""/>
                                        </div>
                                        <div class="msg_cotainer">
                                            Hi, how are you samim?
                                            <span class="msg_time">8:40 AM, Today</span>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-end mb-4">
                                        <div class="msg_cotainer_send">
                                            Hi Khalid i am good tnx how about you?
                                            <span class="msg_time_send">8:55 AM, Today</span>
                                        </div>
                                        <div class="img_cont_msg">
                                            <img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt=""/>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-start mb-4">
                                        <div class="img_cont_msg">
                                            <img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt=""/>
                                        </div>
                                        <div class="msg_cotainer">
                                            I am good too, thank you for your chat template
                                            <span class="msg_time">9:00 AM, Today</span>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-end mb-4">
                                        <div class="msg_cotainer_send">
                                            You are welcome
                                            <span class="msg_time_send">9:05 AM, Today</span>
                                        </div>
                                        <div class="img_cont_msg">
                                            <img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt=""/>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-start mb-4">
                                        <div class="img_cont_msg">
                                            <img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt=""/>
                                        </div>
                                        <div class="msg_cotainer">
                                            I am looking for your next templates
                                            <span class="msg_time">9:07 AM, Today</span>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-end mb-4">
                                        <div class="msg_cotainer_send">
                                            Ok, thank you have a good day
                                            <span class="msg_time_send">9:10 AM, Today</span>
                                        </div>
                                        <div class="img_cont_msg">
                                            <img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt=""/>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-start mb-4">
                                        <div class="img_cont_msg">
                                            <img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt=""/>
                                        </div>
                                        <div class="msg_cotainer">
                                            Bye, see you
                                            <span class="msg_time">9:12 AM, Today</span>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-start mb-4">
                                        <div class="img_cont_msg">
                                            <img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt=""/>
                                        </div>
                                        <div class="msg_cotainer">
                                            Hi, how are you samim?
                                            <span class="msg_time">8:40 AM, Today</span>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-end mb-4">
                                        <div class="msg_cotainer_send">
                                            Hi Khalid i am good tnx how about you?
                                            <span class="msg_time_send">8:55 AM, Today</span>
                                        </div>
                                        <div class="img_cont_msg">
                                            <img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt=""/>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-start mb-4">
                                        <div class="img_cont_msg">
                                            <img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt=""/>
                                        </div>
                                        <div class="msg_cotainer">
                                            I am good too, thank you for your chat template
                                            <span class="msg_time">9:00 AM, Today</span>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-end mb-4">
                                        <div class="msg_cotainer_send">
                                            You are welcome
                                            <span class="msg_time_send">9:05 AM, Today</span>
                                        </div>
                                        <div class="img_cont_msg">
                                            <img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt=""/>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-start mb-4">
                                        <div class="img_cont_msg">
                                            <img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt=""/>
                                        </div>
                                        <div class="msg_cotainer">
                                            I am looking for your next templates
                                            <span class="msg_time">9:07 AM, Today</span>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-end mb-4">
                                        <div class="msg_cotainer_send">
                                            Ok, thank you have a good day
                                            <span class="msg_time_send">9:10 AM, Today</span>
                                        </div>
                                        <div class="img_cont_msg">
                                            <img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt=""/>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-start mb-4">
                                        <div class="img_cont_msg">
                                            <img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt=""/>
                                        </div>
                                        <div class="msg_cotainer">
                                            Bye, see you
                                            <span class="msg_time">9:12 AM, Today</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer type_msg">
                                    <div class="input-group">
                                        <textarea class="form-control" placeholder="Type your message..."></textarea>
                                        <div class="input-group-append">
                                            <button type="button" class="btn btn-primary"><i class="fa fa-location-arrow"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="alerts" role="tabpanel">
                            <div class="card mb-sm-3 mb-md-0 contacts_card">
                                <div class="card-header chat-list-header text-center">
                                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg></a>
                                    <div>
                                        <h6 class="mb-1">Notications</h6>
                                        <p class="mb-0">Show All</p>
                                    </div>
                                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/><path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero"/></g></svg></a>
                                </div>
                                <div class="card-body contacts_body p-0 dz-scroll" id="DZ_W_Contacts_Body1">
                                    <ul class="contacts">
                                        <li class="name-first-letter">SEVER STATUS</li>
                                        <li class="active">
                                            <div class="d-flex bd-highlight">
                                                <div class="img_cont primary">KK</div>
                                                <div class="user_info">
                                                    <span>David Nester Birthday</span>
                                                    <p class="text-primary">Today</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="name-first-letter">SOCIAL</li>
                                        <li>
                                            <div class="d-flex bd-highlight">
                                                <div class="img_cont success">RU<i class="icon fa-birthday-cake"></i></div>
                                                <div class="user_info">
                                                    <span>Perfection Simplified</span>
                                                    <p>Jame Smith commented on your status</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="name-first-letter">SEVER STATUS</li>
                                        <li>
                                            <div class="d-flex bd-highlight">
                                                <div class="img_cont primary">AU<i class="icon fa fa-user-plus"></i></div>
                                                <div class="user_info">
                                                    <span>AharlieKane</span>
                                                    <p>Sami is online</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex bd-highlight">
                                                <div class="img_cont info">MO<i class="icon fa fa-user-plus"></i></div>
                                                <div class="user_info">
                                                    <span>Athan Jacoby</span>
                                                    <p>Nargis left 30 mins ago</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-footer"></div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="notes">
                            <div class="card mb-sm-3 mb-md-0 note_card">
                                <div class="card-header chat-list-header text-center">
                                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect fill="#000000" x="4" y="11" width="16" height="2" rx="1"/><rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) " x="4" y="11" width="16" height="2" rx="1"/></g></svg></a>
                                    <div>
                                        <h6 class="mb-1">Notes</h6>
                                        <p class="mb-0">Add New Nots</p>
                                    </div>
                                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/><path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero"/></g></svg></a>
                                </div>
                                <div class="card-body contacts_body p-0 dz-scroll" id="DZ_W_Contacts_Body2">
                                    <ul class="contacts">
                                        <li class="active">
                                            <div class="d-flex bd-highlight">
                                                <div class="user_info">
                                                    <span>New order placed..</span>
                                                    <p>10 Aug 2020</p>
                                                </div>
                                                <div class="ml-auto">
                                                    <a href="#" class="btn btn-primary btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                    <a href="#" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex bd-highlight">
                                                <div class="user_info">
                                                    <span>Youtube, a video-sharing website..</span>
                                                    <p>10 Aug 2020</p>
                                                </div>
                                                <div class="ml-auto">
                                                    <a href="#" class="btn btn-primary btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                    <a href="#" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex bd-highlight">
                                                <div class="user_info">
                                                    <span>john just buy your product..</span>
                                                    <p>10 Aug 2020</p>
                                                </div>
                                                <div class="ml-auto">
                                                    <a href="#" class="btn btn-primary btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                    <a href="#" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex bd-highlight">
                                                <div class="user_info">
                                                    <span>Athan Jacoby</span>
                                                    <p>10 Aug 2020</p>
                                                </div>
                                                <div class="ml-auto">
                                                    <a href="#" class="btn btn-primary btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                    <a href="#" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--**********************************
                    Chat box End
                ***********************************-->

            <!--**********************************
                    Header start
                ***********************************-->
            <div class="header">
                <div class="header-content">
                    <nav class="navbar navbar-expand">
                        <div class="collapse navbar-collapse justify-content-between">
                            <div class="header-left">
                                <div class="dashboard_bar">

                                </div>
                            </div>

                            <ul class="navbar-nav header-right">

                                <li class="nav-item dropdown header-profile">
                                    <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                        <div class="header-info">
                                            <span class="text-black">{{user.nom}} {{user.prenom}}</span>
                                            <p class="fs-12 mb-0">{{role}}</p>
                                        </div>
                                        <img class="rounded-circle" style="width: 55px; height: 55px;" src="images/profile/17.jpg" width="20" alt=""/>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <button class="dropdown-item ai-icon" @click="logout">
                                            <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                            <span class="ml-2">Logout </span>


                                        </button>
                                      <button class="dropdown-item ai-icon" @click="redirection(5)">
                                        <span class="ml-2">Home</span>
                                      </button>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
            <!--**********************************
                Header end ti-comment-alt
            ***********************************-->

            <!--**********************************
                Sidebar start
            ***********************************-->
            <div class="deznav">
<!--                <div class="deznav-scroll">-->
<!--                    <ul class="metismenu" id="menu">-->
<!--                        <li><a class="has-arrow ai-icon" href="javascript:void(0)" aria-expanded="false">-->
<!--                            <i class="flaticon-381-networking"></i>-->
<!--                            <span class="nav-text">Dashboard</span>-->
<!--                        </a>-->
<!--                            <ul aria-expanded="false">-->

<!--                              <li> <button @click="redirection(2)"><i class="fas fa-tasks"></i> Ajouter un projet</button>  </li>-->
<!--                              <br>-->
<!--                              <li>-->
<!--                                <button @click="redirection(3)"><i class="fas fa-thumbtack"></i> Affecter un projet</button>-->
<!--                              </li>-->

<!--                              <br>-->
<!--                                <li><button style="margin-left:-37px;" @click="redirection(1)"><i class="fas fa-th-list"></i> Mes projets</button></li>-->
<!--                              <br>-->
<!--                                <li>-->


<!--                                  <button v-show="role ==='Freelance'" type="button" class="btn menu-btn" @click="sendDevis">Envoyer Devis</button>-->




<!--                                </li>-->

<!--                              <li>-->
<!--                                <button v-show="role!=='Freelance'" type="button" class="btn menu-btn" @click="sendJustificatif">Envoyer justificatif de transport</button>-->
<!--                              </li>-->

<!--                              <li>-->
<!--                                <button v-show="role!=='Freelance'" type="button" class="btn menu-btn" @click="sendNDF">Envoyer NDF</button>-->
<!--                              </li>-->


<!--                              <li>-->
<!--                                <button v-if="role =='Freelance'" type="button" class="btn menu-btn" @click="sendFacture">Envoyer Facture</button>-->

<!--                              </li>-->
<!--                                                          </ul>-->
<!--                        </li>-->
<!--                        <li v-show="user.statut !=='Signed'">-->

<!--                                <div class="copyright">-->
<!--                                    <p><strong style="color: red">Contrat non signé  </strong></p>-->
<!--                                    <p  style="color: red">vérifier votre boite mail</p>-->



<!--&lt;!&ndash;                                    <v-btn&ndash;&gt;-->
<!--&lt;!&ndash;                                            depressed&ndash;&gt;-->
<!--&lt;!&ndash;                                            color="error"&ndash;&gt;-->
<!--&lt;!&ndash;                                            @click="signContract"&ndash;&gt;-->
<!--&lt;!&ndash;                                    >&ndash;&gt;-->
<!--&lt;!&ndash;                                        Signer&ndash;&gt;-->
<!--&lt;!&ndash;                                    </v-btn>&ndash;&gt;-->

<!--                                </div>-->


<!--                        </li>-->
<!--                        <li v-show="user.nda !=='Signed'">-->
<!--                            <p><strong style="color: red">NDA non signé</strong></p>-->
<!--&lt;!&ndash;                            <v-btn&ndash;&gt;-->
<!--&lt;!&ndash;                                    depressed&ndash;&gt;-->
<!--&lt;!&ndash;                                    color="error"&ndash;&gt;-->
<!--&lt;!&ndash;                                    @click="signNDA"&ndash;&gt;-->
<!--&lt;!&ndash;                            >&ndash;&gt;-->
<!--&lt;!&ndash;                                Signer&ndash;&gt;-->
<!--&lt;!&ndash;                            </v-btn>&ndash;&gt;-->

<!--                        </li>-->

<!--                        <li v-show="user.statut ==='Signed'" style="height: 40px;">-->
<!--                            <div class="copyright">-->
<!--                                <p><strong>Contrat Signé</strong></p>-->
<!--                            </div>-->

<!--                        </li>-->
<!--                        <li v-show="user.nda ==='Signed'">-->
<!--                            <div class="copyright" >-->
<!--                                <p><strong>NDA Signé</strong></p>-->

<!--                            </div>-->

<!--                        </li>-->
<!--                        <li v-if="user.siren == null && role==='Freelance'">-->
<!--                            <div class="copyright">-->
<!--                                <button style="color: red" @click="TerminezInformations">Terminez vos informations</button>-->

<!--                            </div>-->

<!--                        </li>-->



<!--                    </ul>-->


<!--                </div>-->
              <div class="deznav-scroll">
                <ul class="metismenu" id="menu" style="padding-left: 0 !important;">
                  <li><a class="has-arrow ai-icon" href="javascript:void(0)" aria-expanded="false">
                    <i class="flaticon-381-networking"></i>
                    <span class="nav-text">Dashboard</span>

                  </a>
                  </li>
                  <br>
                  <li>
                    <button @click="redirection()" ><i class="fas fa-users"></i> Afficher la liste des salarié</button>
                  </li>
                  <br>
                  <li>
                    <button  @click="modifyUser()"> <i class="fas fa-user-plus mr-1"></i>Ajouter un utilisateur</button>
                  </li>
                  <br>
                                                <li>
                                                  <button v-show="role!=='Freelance'" type="button" class="btn menu-btn" @click="sendJustificatif">Envoyer justificatif de transport</button>
                                                </li>
                                                   <li>
                                                     <button v-show="role ==='Freelance'" type="button" class="btn menu-btn" @click="sendDevis">Envoyer Devis</button>
                                                   </li>

                  <li>
                                                    <button v-show="role!=='Freelance'" type="button" class="btn menu-btn" @click="sendNDF">Envoyer NDF</button>
                                                  </li>


                                                <li>
                                                  <button v-if="role =='Freelance'" type="button" class="btn menu-btn" @click="sendFacture">Envoyer Facture</button>

                                                </li>
                  <li v-show="user.statut !=='Signed'">

                                                    <div class="copyright">
                                                        <p><strong style="color: red">Contrat non signé  </strong></p>
                                                        <p  style="color: red">vérifier votre boite mail</p>

                                                    </div>
                  </li>
                  <li v-show="user.nda !=='Signed'">
                    <p><strong>NDA non signé</strong></p>
                    <v-btn
                        depressed
                        color="error"
                        @click="signNDA"
                    >
                      Signer
                    </v-btn>

                  </li>

                  <li v-show="user.statut ==='Signed'">
                    <div class="copyright">
                      <p><strong>Contrat Signé</strong></p>

                    </div>

                  </li>
                  <li v-show="user.nda ==='Signed'">
                    <div class="copyright">
                      <p><strong>NDA Signé</strong></p>

                    </div>

                  </li>
                  <li v-if="user.siren == null && role==='Freelance'">
                    <div class="copyright">
                      <button style="color: red" @click="TerminezInformations">Terminez vos informations</button>

                    </div>

                  </li>

                </ul>

                <!--                                  <button v-show="role ==='Freelance'" type="button" class="btn menu-btn" @click="sendDevis">Envoyer Devis</button>-->




                <!--                                </li>-->

                <!--                              <li>-->
                <!--                                <button v-show="role!=='Freelance'" type="button" class="btn menu-btn" @click="sendJustificatif">Envoyer justificatif de transport</button>-->
                <!--                              </li>-->

                <!--                              <li>-->
                <!--                                <button v-show="role!=='Freelance'" type="button" class="btn menu-btn" @click="sendNDF">Envoyer NDF</button>-->
                <!--                              </li>-->


                <!--                              <li>-->
                <!--                                <button v-if="role =='Freelance'" type="button" class="btn menu-btn" @click="sendFacture">Envoyer Facture</button>-->

                <!--                              </li>-->
                <!--                                                          </ul>-->
                <!--                        </li>-->
                <!--                        <li v-show="user.statut !=='Signed'">-->

                <!--                                <div class="copyright">-->
                <!--                                    <p><strong style="color: red">Contrat non signé  </strong></p>-->
                <!--                                    <p  style="color: red">vérifier votre boite mail</p>-->


              </div>
            </div>
        <div class="content-body">
            <!-- row -->
            <br>
            <br>
            <div class="container-fluid">

                <div class="row">
                    <div class="col-xl-12 col-xxl-12">
                        <div class="row">
                            <div class="col-xl-12">

                                <div class="card bg-danger property-bx text-white">
                                    <div class="card-body">
                                        <div class="media d-sm-flex d-block align-items-center">
											<span class="mr-4 d-block mb-sm-0 mb-3">
												<svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M31.8333 79.1667H4.16659C2.33325 79.1667 0.833252 77.6667 0.833252 75.8333V29.8333C0.833252 29 1.16659 28 1.83325 27.5L29.4999 1.66667C30.4999 0.833332 31.8333 0.499999 32.9999 0.999999C34.3333 1.66667 34.9999 2.83333 34.9999 4.16667V76C34.9999 77.6667 33.4999 79.1667 31.8333 79.1667ZM7.33325 72.6667H28.4999V11.6667L7.33325 31.3333V72.6667Z" fill="white"/>
													<path d="M75.8333 79.1667H31.6666C29.8333 79.1667 28.3333 77.6667 28.3333 75.8334V36.6667C28.3333 34.8334 29.8333 33.3334 31.6666 33.3334H75.8333C77.6666 33.3334 79.1666 34.8334 79.1666 36.6667V76C79.1666 77.6667 77.6666 79.1667 75.8333 79.1667ZM34.9999 72.6667H72.6666V39.8334H34.9999V72.6667Z" fill="white"/>
													<path d="M60.1665 79.1667H47.3332C45.4999 79.1667 43.9999 77.6667 43.9999 75.8334V55.5C43.9999 53.6667 45.4999 52.1667 47.3332 52.1667H60.1665C61.9999 52.1667 63.4999 53.6667 63.4999 55.5V75.8334C63.4999 77.6667 61.9999 79.1667 60.1665 79.1667ZM50.6665 72.6667H56.9999V58.8334H50.6665V72.6667Z" fill="white"/>
												</svg>
											</span>
                                            <div class="media-body mb-sm-0 mb-3 mr-5">
                                                <h4 class="fs-22 text-white">{{information.NomProjet}}</h4>
                                                <div class="progress mt-3 mb-2" style="height:8px;">
                                                    <div class="progress-bar bg-white progress-animated" :style="{width: width }" role="progressbar">
                                                        <span class="sr-only">{{information.projetsEncour}} Complete</span>
                                                    </div>
                                                </div>
                                                <span class="fs-14">{{width}} En cours</span>
                                            </div>
                                            <span class="fs-46 font-w500">{{information.NbrJours}}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="card">
                                    <v-card>
                                    <div class="card-body">
                                        <div class="media align-items-center">

                                            <div class="media-body mr-3">
                                                <h2 class="fs-36 text-black font-w600">{{information.NbrExpectedMonth}}</h2>
                                                <p class="fs-18 mb-0 text-black font-w500">Nombre de jours prévisonnels</p>
                                                <span class="fs-24 text-red mt-1">{{Math.trunc((information.NbrExpectedMonth / information.NbrJours)*100 )}}%</span>
                                            </div>
                                            <span class="rounded mr-3 bg-success p-3">
<i class="fas fa-calendar-alt text-white"></i>
												</span>
                                        </div>
                                    </div>
                                    </v-card>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="card">
                                    <v-card>
                                    <div class="card-body">
                                        <div class="media align-items-center">

                                            <div class="media-body mr-3">

                                                <h2 class="fs-36 text-black font-w600">{{information.NbrJoursMonth}}</h2>
                                                <p class="fs-18 mb-0 text-black font-w500">Nombre de Jours effectués </p>
                                                <span class="fs-25  text-blue">{{Math.trunc((information.NbrJoursMonth / information.NbrExpectedMonth)*100 )}}%</span>
                                            </div>
                                            <span class="rounded mr-3 bg-primary p-3">
<!--													<svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">-->
<!--														<path d="M10.3458 25.7292H1.35412C0.758283 25.7292 0.270782 25.2417 0.270782 24.6458V9.69583C0.270782 9.42499 0.379116 9.09999 0.595783 8.93749L9.58745 0.541659C9.91245 0.270825 10.3458 0.162492 10.725 0.324992C11.1583 0.541659 11.375 0.920825 11.375 1.35416V24.7C11.375 25.2417 10.8875 25.7292 10.3458 25.7292ZM2.38328 23.6167H9.26245V3.79166L2.38328 10.1833V23.6167Z" fill="white"/>-->
<!--														<path d="M24.6458 25.7292H10.2916C9.69578 25.7292 9.20828 25.2417 9.20828 24.6458V11.9167C9.20828 11.3208 9.69578 10.8333 10.2916 10.8333H24.6458C25.2416 10.8333 25.7291 11.3208 25.7291 11.9167V24.7C25.7291 25.2417 25.2416 25.7292 24.6458 25.7292ZM11.375 23.6167H23.6166V12.9458H11.375V23.6167Z" fill="white"/>-->
<!--														<path d="M19.5541 25.7292H15.3833C14.7874 25.7292 14.2999 25.2417 14.2999 24.6458V18.0375C14.2999 17.4417 14.7874 16.9542 15.3833 16.9542H19.5541C20.1499 16.9542 20.6374 17.4417 20.6374 18.0375V24.6458C20.6374 25.2417 20.1499 25.7292 19.5541 25.7292ZM16.4666 23.6167H18.5249V19.1208H16.4666V23.6167Z" fill="white"/>-->
<!--													</svg>-->
                      <i class="fas fa-calendar-check text-white"></i>
												</span>
                                        </div>
                                    </div>
                                    </v-card>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 col-xxl-12">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card">
                                    <v-card>
                                        <div class="card-body">
                                            <div class="media align-items-center">
                                                <div class="media-body mr-3">
                                                    <h2 class="fs-36 text-black font-w600">{{information.ExpectedMont}} €</h2>
                                                    <p class="fs-18 mb-0 text-black font-w500">Salaire Expected ce mois</p>
                                                    <span class="fs-13"></span>
                                                </div>
                                                <div class="d-inline-block position-relative donut-chart-sale" style="margin-right: 5%;">
                                                    <span class="donut1" data-peity='{ "fill": ["rgb(60, 76, 184)", "rgba(236, 236, 236, 1)"],   "innerRadius": 38, "radius": 10}'></span>
                                                    <small class="text-primary">{{Math.trunc((information.ExpectedMont/information.EXSal) * 100)}}%</small>
                                                    <span class="circle bgl-primary"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </v-card>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    <v-card>
                                        <div class="card-body">
                                            <div class="media align-items-center">
                                                <div class="media-body mr-3">
                                                    <h2 class="fs-36 text-black font-w600">{{information.SalaireValideMonth}} €</h2>
                                                    <p class="fs-18 mb-0 text-black font-w500">salaire validée ce mois</p>
                                                    <span class="fs-13"></span>
                                                </div>
                                                <div class="d-inline-block position-relative donut-chart-sale" style="margin-right: 5%;">
                                                    <span class="donut1" data-peity='{ "fill": ["rgb(55, 209, 90)", "rgba(236, 236, 236, 1)"],   "innerRadius": 38, "radius": 10}'></span>
                                                    <small class="text-success">{{Math.trunc((this.information.SalaireValideMonth/information.Vsal) * 100)}}%</small>
                                                    <span class="circle bgl-success"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </v-card>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    <v-card>
                                    <div class="card-body">
                                        <div class="media align-items-center">
                                            <div class="media-body mr-3">
                                                <h2 class="fs-36 text-black font-w600">{{information.EXSal}} €</h2>
                                                <p class="fs-18 mb-0 text-black font-w500">Expected salary</p>
                                                <span class="fs-13">Pour {{this.information.NbrJours}} jours de travail</span>
                                            </div>
                                            <div class="d-inline-block position-relative donut-chart-sale" style="margin-right: 5%;">
                                                <span class="donut1" data-peity='{ "fill": ["rgb(60, 76, 184)", "rgba(236, 236, 236, 1)"],   "innerRadius": 38, "radius": 10}'></span>
                                                <small class="text-primary">100%</small>
                                                <span class="circle bgl-primary"></span>
                                            </div>
                                        </div>
                                    </div>
                                    </v-card>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    <v-card>
                                    <div class="card-body">
                                        <div class="media align-items-center">
                                            <div class="media-body mr-3">
                                                <h2 class="fs-36 text-black font-w600">{{information.Vsal}} €</h2>
                                                <p class="fs-18 mb-0 text-black font-w500">salaire validée</p>
                                                <span class="fs-25 text-green">{{Math.trunc((this.information.Vsal/information.EXSal) * 100)}} %</span>
                                            </div>
                                            <div class="d-inline-block position-relative donut-chart-sale" style="margin-right: 5%;">
                                                <span class="donut1" data-peity='{ "fill": ["rgb(55, 209, 90)", "rgba(236, 236, 236, 1)"],   "innerRadius": 38, "radius": 10}'></span>
                                                <small class="text-success">{{Math.trunc((this.information.Vsal/information.EXSal) * 100)}}%</small>
                                                <span class="circle bgl-success"></span>
                                            </div>
                                        </div>
                                    </div>
                                    </v-card>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <v-card>
                                    <v-card>
                                        <v-card-title>
                                            <span class="headline">Plannification des projets({{information.totalProjet}} Projet)</span>
                                            <v-col class="text-right">
                                                <button class="text-right" @click="dialog=false">x</button>
                                            </v-col>

                                        </v-card-title>
                                        <v-card-text>
                                            <v-container>
                                                <v-row class="fill-height">
                                                    <v-col>
                                                        <v-sheet height="64">
                                                            <v-toolbar
                                                                    flat
                                                            >
                                                                <v-btn
                                                                        outlined
                                                                        class="mr-4"
                                                                        color="grey darken-2"
                                                                        @click="setToday"
                                                                >
                                                                    Today
                                                                </v-btn>
                                                                <v-btn
                                                                        fab
                                                                        text
                                                                        small
                                                                        color="grey darken-2"
                                                                        @click="prev"
                                                                >
                                                                    <v-icon small>
                                                                        mdi-chevron-left
                                                                    </v-icon>
                                                                </v-btn>
                                                                <v-btn
                                                                        fab
                                                                        text
                                                                        small
                                                                        color="grey darken-2"
                                                                        @click="next"
                                                                >
                                                                    <v-icon small>
                                                                        mdi-chevron-right
                                                                    </v-icon>
                                                                </v-btn>
                                                                <v-toolbar-title v-if="$refs.calendar">
                                                                    {{ $refs.calendar.title }}
                                                                </v-toolbar-title>
                                                                <v-spacer></v-spacer>
                                                                <v-menu
                                                                        bottom
                                                                        right
                                                                >
                                                                    <template v-slot:activator="{ on, attrs }">
                                                                        <v-btn
                                                                                outlined
                                                                                color="grey darken-2"
                                                                                v-bind="attrs"
                                                                                v-on="on"
                                                                        >
                                                                            <span>{{ typeToLabel[type] }}</span>
                                                                            <v-icon right>
                                                                                mdi-menu-down
                                                                            </v-icon>
                                                                        </v-btn>
                                                                    </template>
                                                                    <v-list>
                                                                        <v-list-item @click="type = 'day'">
                                                                            <v-list-item-title>Day</v-list-item-title>
                                                                        </v-list-item>
                                                                        <v-list-item @click="type = 'week'">
                                                                            <v-list-item-title>Week</v-list-item-title>
                                                                        </v-list-item>
                                                                        <v-list-item @click="type = 'month'">
                                                                            <v-list-item-title>Month</v-list-item-title>
                                                                        </v-list-item>
                                                                        <v-list-item @click="type = '4day'">
                                                                            <v-list-item-title>4 days</v-list-item-title>
                                                                        </v-list-item>
                                                                    </v-list>
                                                                </v-menu>
                                                            </v-toolbar>
                                                        </v-sheet>
                                                        <v-sheet height="600">
                                                            <v-calendar
                                                                    ref="calendar"
                                                                    v-model="focus"
                                                                    color="primary"
                                                                    :events="events"
                                                                    :event-color="getEventColor"
                                                                    :type="type"
                                                                    @click:event="showEvent"
                                                                    @click:more="viewDay"
                                                                    @click:date="viewDay"

                                                                    @change="updateRange"
                                                            ></v-calendar>
                                                            <v-menu
                                                                    v-model="selectedOpen"
                                                                    :close-on-content-click="false"
                                                                    :activator="selectedElement"
                                                                    offset-x
                                                            >
                                                                <v-card
                                                                        color="grey lighten-4"
                                                                        min-width="350px"
                                                                        flat
                                                                >
                                                                    <v-toolbar
                                                                            :color="selectedEvent.color"
                                                                            dark
                                                                    >
                                                                        <v-btn icon>
                                                                            <v-icon>mdi-pencil</v-icon>
                                                                        </v-btn>
                                                                        <v-toolbar-title v-html="selectedEvent.name"></v-toolbar-title>
                                                                        <v-spacer></v-spacer>
                                                                        <v-btn icon>
                                                                            <v-icon>mdi-heart</v-icon>
                                                                        </v-btn>
                                                                        <v-btn icon>
                                                                            <v-icon>mdi-dots-vertical</v-icon>
                                                                        </v-btn>
                                                                    </v-toolbar>
                                                                    <v-card-text>
                                                                        <span v-html="selectedEvent.details"></span>
                                                                    </v-card-text>
                                                                    <v-card-actions>
                                                                        <v-btn
                                                                                text
                                                                                color="secondary"
                                                                                @click="selectedOpen = false"
                                                                        >
                                                                            Cancel
                                                                        </v-btn>
                                                                    </v-card-actions>
                                                                </v-card>
                                                            </v-menu>
                                                        </v-sheet>
                                                    </v-col>
                                                </v-row>
                                            </v-container>
                                            <small>*indicates required field</small>
                                        </v-card-text>

                                    </v-card>

                                </v-card>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        </div>
        </body>
    </v-app>
</template>

<script>
    import axios from 'axios';

    export default {
        components: {

        },
        data () {
            return {
                focus: '',
                DialogDevis:false,
                NumDevis:'',
                DialogInformations:'',
                Months:['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'],
                siren:'',
                siret:'',
                NTVA:'',
                NTVAC:'',
                Nature:'',
                file:'',
                NumFacture:'',
                DevisFacture:'',
                DialogFacture:false,
                type: 'month',
                montant:'',
                date: new Date().toISOString().substr(0, 10),
                menu: false,
                mois:'',
                imageBS64:'',
                f:[],
                DialogJustficatifTransport:false,
                DialogJustficatifNDF:false,
                typeToLabel: {
                    month: 'Month',
                    week: 'Week',
                    day: 'Day',
                    '4day': '4 Days',
                },
                selectedEvent: {},
                selectedElement: null,
                selectedOpen: false,
                events: [],
                colors: ['blue', 'indigo', 'deep-purple', 'cyan', 'green', 'orange', 'grey darken-1'],
                names: ['Meeting', 'Holiday', 'PTO', 'Travel', 'Event', 'Birthday', 'Conference', 'Party'],


                username:'',
                role:'',
                data:[],
                user:[],
                response:[],
                information:[],
                width:''

            }
        },
        mounted () {
            this.$refs.calendar.checkChange()
        },
        methods: {
            TerminezInformations(){
                this.DialogInformations = true;
            },
            async EditInformations(){
                const options = {
                    headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                };
                var d = {"id":this.user.id,"siret":this.siret,"siren":this.siren,"numtva":this.NTVA,"numtvac":this.NTVAC};
                this.user.siret = this.siret;
                this.user.siren = this.siren;
                this.user.Numtva = this.NTVA;
                this.user.Numtvac = this.NTVAC;
                localStorage.clear();
                localStorage.setItem("user",JSON.stringify(this.user))
                await axios.post('http://localhost:8000/editFreeLancer',d,options).then(res=>console.log(res.data))
            },
            async getData(){
                this.user = JSON.parse(localStorage.getItem("user"));
                console.log(this.user)
                if(this.user != null){
                    this.username = this.user.username;
                    this.role = this.user.role ;
                    this.loadAffectation(this.user.id);
                    await axios.get('http://localhost:8000/DashboardSalarie/'+this.user.id).then(res=>this.information = res.data)
                    var w = Math.trunc(parseFloat(this.information.percent)) ;
                    this.role = this.information.role;
                    localStorage.setItem("role",this.role)
                    this.width = w.toString()+"%";
                    console.log(this.information)
                }else{
                    this.$router.push("/Login")
                }

            },
            logout(){
                localStorage.clear();
                this.$router.push("/Login")

            },
            viewDay ({ date }) {
                this.focus = date
                this.type = 'day'
            },
            getEventColor (event) {
                return event.color
            },
            setToday () {
                this.focus = ''
            },
            prev () {
                this.$refs.calendar.prev()
            },
            next () {
                this.$refs.calendar.next()
            },
            showEvent ({ nativeEvent, event }) {

                const open = () => {
                    this.selectedEvent = event
                    this.selectedElement = nativeEvent.target
                    setTimeout(() => {
                        this.selectedOpen = true
                    }, 10)
                }

                if (this.selectedOpen) {
                    this.selectedOpen = false
                    setTimeout(open, 10)
                } else {
                    open()
                }

                nativeEvent.stopPropagation()
            },
            updateRange (data) {

                var events = []

                var x =0;
            // console.log('DAAATA',data.start.date)
              while(x<data.length){


                var k = 0
                var date=JSON.parse(data[x].dates);
                console.log('DATES',date[0]);
                //   var c = this.colors[this.rnd(0, this.colors.length - 1)]
                var c = ""
                console.log('DAte DATA',date);
                let today = new Date();
                console.log('NEW DATE',today)
                console.log('existing date ',date[x][0])
              //else {
                //   c = 'green';
                // }
                while(k < date.length) {
                  if (today < new Date(date[x][0])  ){
                    console.log('1')
                    c = 'green';
                  } if (today > new Date( date[x][1])){
                    console.log("2")
                    c = 'orange';
                  }else
                  {
                    c ='green';
                  }
                  events.push({
                    name: data[x]["projet"].nomProjet,
                    start: date[k][0],
                    end: date[k][1],
                    color: c,
                    timed: "",
                  })
                  k++;
                }
                x++;
              }


              this.events = events
            },
            sendNDF(){
                this.DialogJustficatifNDF = true;
            },
            rnd (a, b) {
                return Math.floor((b - a + 1) * Math.random()) + a
            },
            async loadAffectation(id){
                let d = [];
                await axios.get('http://localhost:8000/Affectations/'+id).then(function (res) {
                    var myObj = JSON.parse(res.data);
                    for(var i =0;i<myObj.length;i++){
                        //console.log(this.data)
                        d.push(myObj[i])
                    }
                    //console.log(myObj)
                })
                //let a = []
                var i = 0;
                for(i;i<d.length;i++){
                    //console.log(d[i])
                }
                let listOfObjects = Object.keys(d).map((key) => {
                    return d[key]
                })
                this.data = listOfObjects
                this.updateRange(this.data)
                console.log(this.data)
            },
            sendJustificatif(){
                this.DialogJustficatifTransport = true;
            },
            previewFiles(event) {
                this.f=[];
                //console.log(this.getBase64(event.target.files[0]))
                //var i =0;
                //for(i;i<event.target.files.length;i++){
                this.getBase64(event.target.files[0])
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
                reader.onload =  function () {
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
                this.file = document.getElementById("image").value
                console.log(reader.result)
                reader.onerror = function (error) {
                    console.log('Error: ', error);
                };

            },
            async AddJustificatifNDF(){
                var im = document.getElementById("image").value
                const options = {
                    headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                };
                var d = {"id":this.user.id,"montant":this.montant,"nature":this.Nature,"justif":im};
                await axios.post('http://localhost:8000/AddJustifNDF',d,options).then(res=>console.log(res.data))
            },
            async AddJustificatifTR(){

                var im = document.getElementById("image").value
                const options = {
                    headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                };
                var d = {"id":this.user.id,"mois":this.mois,"montant":this.montant,"justif":im};
                await axios.post('http://localhost:8000/AddjustifT',d,options).then(res=>console.log(res.data))
            },
            sendDevis(){
                this.DialogDevis= true;
            },
          sendTransport(){
              this.DialogJustficatifTransport = true;
          },
            async AddDevis(){
                var im = document.getElementById("image").value
                const options = {
                    headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                };
                var d = {"id":this.user.id,"date":this.date,"montant":this.montant,"justif":im,"numDevis":this.NumDevis};
                await axios.post('http://localhost:8000/AddDevisFree',d,options).then(res=>console.log(res.data))

            },
            sendFacture(){
                this.DialogFacture = true;
            },
            async AddFacture(){
                console.log(this.file);
                var im = document.getElementById("image").value
                const options = {
                    headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                };
                var d = {"id":this.user.id,"date":this.date,"numFacture":this.NumFacture,"montant":this.montant,"justif":im,"devisFacture":this.DevisFacture};
                await axios.post('http://localhost:8000/AddFactureFree',d,options).then(res=>console.log(res.data))
                console.log(this.date)
            },
            async signContract(){
                this.user.statut = "Signed";
                localStorage.clear();
                localStorage.setItem("user",JSON.stringify(this.user))
                axios.get('http://localhost:8000/signContract/'+this.user.id).then(res=>console.log(res.data))
            },
            async signNDA(){
                this.user.nda = "Signed";
                localStorage.clear();
                localStorage.setItem("user",JSON.stringify(this.user))
                axios.get('http://localhost:8000/signNDA/'+this.user.id).then(res=>console.log(res.data))

            },
            redirection(v){
                if(v === 0){
                    this.$router.push("/index")
                }
                if(v === 1){
                    this.$router.push("/AfficherMyProjectsUser")
                }
                if (v === 2){
                  this.$router.push("/AjouterProjet")
                }

                if (v ===3){
                  // this.$router.push('/AffectationNonTermine')
                }

                if (v===5){
                  this.$router.push('/Acceuil')
                }
                if (v===6){
                  this.$router.push('/AfficherProjet')
                }
            }
        },
        beforeMount(){
            this.getData()
        }
    }
</script>

<style scoped>

</style>
