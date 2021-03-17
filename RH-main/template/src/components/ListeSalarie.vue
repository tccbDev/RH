<template>
    <v-app>
        
        <body>
            
        <!--*******************
        Preloader start
    ********************-->
        <div id="preloader">
            <div class="sk-three-bounce">
                <div class="sk-child sk-bounce1"></div>
                <div class="sk-child sk-bounce2"></div>
                <div class="sk-child sk-bounce3"></div>
            </div>
        </div>
        <div id="main-wrapper">

            <!--**********************************
                Nav header start
            ***********************************-->
            <div class="nav-header">
                <a href="index.html" class="brand-logo">
                  <img src="../assets/supamonks-red.png" style="width: 100%; height: 100%; object-fit: cover" alt="">
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
                                                    <img src="images/avatar/1.jpg" class="rounded-circle user_img" alt=""/>
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
<!--                                <div class="dashboard_bar">-->
<!--                                    <div class="search_bar dropdown">-->
<!--                                        <div class="dropdown-menu p-0 m-0">-->
<!--                                            <form>-->
<!--                                                <input class="form-control" type="search" placeholder="Search Here" aria-label="Search">-->
<!--                                            </form>-->
<!--                                        </div>-->
<!--                                        <span class="search_icon p-3 c-pointer" data-toggle="dropdown" >-->
<!--                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">-->
<!--										<path d="M23.7871 22.7761L17.9548 16.9437C19.5193 15.145 20.4665 12.7982 20.4665 10.2333C20.4665 4.58714 15.8741 0 10.2333 0C4.58714 0 0 4.59246 0 10.2333C0 15.8741 4.59246 20.4665 10.2333 20.4665C12.7982 20.4665 15.145 19.5193 16.9437 17.9548L22.7761 23.7871C22.9144 23.9255 23.1007 24 23.2816 24C23.4625 24 23.6488 23.9308 23.7871 23.7871C24.0639 23.5104 24.0639 23.0528 23.7871 22.7761ZM1.43149 10.2333C1.43149 5.38004 5.38004 1.43681 10.2279 1.43681C15.0812 1.43681 19.0244 5.38537 19.0244 10.2333C19.0244 15.0812 15.0812 19.035 10.2279 19.035C5.38004 19.035 1.43149 15.0865 1.43149 10.2333Z" fill="#3B4CB8"/>-->
<!--									</svg>-->
<!--                                </span>-->
<!--                                    </div>-->
<!--                                </div>-->
                            </div>

                            <ul class="navbar-nav header-right">

                                <li class="nav-item dropdown header-profile">
                                    <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                        <div class="header-info">
                                            <span class="text-black">{{user.nom}} {{user.prenom}}</span>
                                            <p class="fs-12 mb-0">Admin</p>
                                        </div>
                                        <img style="width: 55px; height: 55px; " class="rounded-circle" src="images/profile/17.jpg" width="20" alt=""/>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="./app-profile.html" class="dropdown-item ai-icon">
                                            <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                            <span class="ml-2">Profile </span>
                                        </a>
                                        <a href="./email-inbox.html" class="dropdown-item ai-icon">
                                            <svg id="icon-inbox" xmlns="http://www.w3.org/2000/svg" class="text-success" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                                            <span class="ml-2">Inbox </span>
                                        </a>
                                        <a href="./page-login.html" class="dropdown-item ai-icon">
                                            <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                            <span class="ml-2">Logout </span>
                                        </a>
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
                <div class="deznav-scroll">
                    <ul class="metismenu" id="menu" style="padding-left: 0 !important;">
                        <li><a class="has-arrow ai-icon" style="padding-left: 58px !important;" @click="redirection()"  aria-expanded="false">
                            <i class="flaticon-381-networking"></i>
                            <span @click="redirection()" style="text-align: center" class="nav-text">Dashboard</span>
                        </a>

                            <ul aria-expanded="false">
                                <li><button @click="redirection()"></button></li>

                            </ul>
                        </li>

                      <li>
                        <button @click="redirection()" ><i class="fas fa-users"></i> Afficher la liste des salarié</button>
                      </li>
                      <br>
                      <li>
                        <button  @click="modifyUser()"> <i class="fas fa-user-plus mr-1"></i>Ajouter un utilisateur</button>
                      </li>






                    </ul>


                </div>
            </div>
            
        <div class="content-body">
            <div class="container-fluid">

                <!-- row -->

<!--<v-alert-->
<!--      border="top"-->
<!--      color="red lighten-2"-->
<!--      dark-->
<!--    >-->
<!--      I'm an alert with a top border and red color-->
<!--    </v-alert>-->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Liste des salariés</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">

        <v-card-title>
            <v-text-field
                    v-model="search"
                    append-icon="mdi-magnify"
                    label="Search"
                    single-line
                    hide-details
            ></v-text-field>
        </v-card-title>
        <v-data-table @click:row="clickTable"
                :headers="headers"
                :items="data"
                :search="search"
                id="example" class="display min-w850"
        ></v-data-table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <v-row justify="center">
            <v-dialog
                    v-model="dialog"
                    persistent
                    max-width="600px"
            >
                <v-card>
                    <v-card-title>
                        <span class="headline">User Profile</span>
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
                                                @click:time="viewTime"
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
                    <v-card-actions>
                        <v-spacer></v-spacer>
                        <v-btn
                                color="blue darken-1"
                                text
                                @click="chooseDate"
                        >
                            Save
                        </v-btn>
                    </v-card-actions>
                </v-card>
            </v-dialog>
        </v-row>
        <v-row justify="center">
            <v-dialog
                    v-model="dialogForm"
                    persistent
                    max-width="600px"
            >

                <v-card>
                    <v-card-title>
                        <span class="headline">Informations</span>
                    </v-card-title>
                    <v-card-text>
                        <v-container>
                            <v-row>
                                <v-col
                                        cols="12"
                                        sm="6"
                                        md="4"
                                >
                                    <v-text-field
                                            label="Legal first name*"
                                            required
                                    ></v-text-field>
                                </v-col>
                                <v-col
                                        cols="12"
                                        sm="6"
                                        md="4"
                                >
                                    <v-text-field
                                            label="Legal middle name"
                                            hint="example of helper text only on focus"
                                    ></v-text-field>
                                </v-col>
                                <v-col
                                        cols="12"
                                        sm="6"
                                        md="4"
                                >
                                    <v-text-field
                                            label="Legal last name*"
                                            hint="example of persistent helper text"
                                            persistent-hint
                                            required
                                    ></v-text-field>
                                </v-col>
                                <v-col cols="12">
                                    <v-text-field
                                            label="Email*"
                                            required
                                            v-model="email"
                                    ></v-text-field>
                                </v-col>
                                <v-col
                                        cols="12"
                                        sm="6"
                                >
                                    <v-autocomplete
                                            :items="postes"
                                            label="Postes"
                                            v-model="p"
                                            @change="getPoste()"
                                    ></v-autocomplete>
                                </v-col>
                                <v-col
                                        cols="12"
                                        sm="6"
                                >
                                    <v-autocomplete
                                            :items="TypesPostes"
                                            label="Type de poste"
                                            v-model="typesPoste"

                                    ></v-autocomplete>
                                </v-col>
                                <v-col
                                        cols="12"
                                        sm="12"
                                >
                                    <v-select
                                            :items="projets"
                                            label="Projets"
                                            required
                                            v-model="nomProjet"
                                            @change="getProjet()"
                                    ></v-select>
                                </v-col>


                            </v-row>
                        </v-container>
                    </v-card-text>
                    <v-card-actions>
                        <v-spacer></v-spacer>
                        <v-btn
                                color="blue darken-1"
                                text
                                @click="dialogForm = false"
                        >
                            Close
                        </v-btn>
                        <v-btn
                                color="blue darken-1"
                                text
                                @click="Save"
                        >
                            Save
                        </v-btn>
                    </v-card-actions>
                </v-card>
            </v-dialog>
        </v-row>
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
                data:[],
                response:[],
                TypesPostes:['Permanant','Intermittant','Permittant','Stagiaire','Freelance'],
                typesPoste:'',
                error:'',
                item:[],
                nomProjet:'',
                row:[],
                date:'',
                dateROW:[],
                dates:[],
                idprojet:[],
                posteInformations:[],
                categorie:"",
                filiere:'',
                secteur:'',
                p:'',
                projets:[],
                postes:[],
                user:[],
                salaire:'',
                email:'',
                dialog: false,
                dialogForm:false,
                search: '',
                d:'',
                n:0,
                headers: [
                    {
                        text: 'User name',
                        align: 'start',
                        filterable: false,
                        value: 'username',
                    },
                    { text: 'Email', value: 'email' },
                    { text: 'role', value: 'role' },
                ],
                focus: '',
                type: 'month',
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
            }
        },
        mounted () {
            //this.$refs.calendar.checkChange()
        },
        methods: {
            async GetData(){
                var u = JSON.parse(localStorage.getItem("user"));
                if(u != null){
                    console.log(u);
                    //this.username = this.data.username;
                    //this.role = this.data.role ;
                }else{
                    this.$router.push("/Login")
                }
                let d = [];
                await axios.get('http://127.0.0.1:8000/ListeSalarie').then(function (res) {
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
                /**this.data = Object.keys(d).map((field) => {

                    return {
                        value: d[field]
                    }
                })**/
                /**var i = 0 ;
                for(i; i<this.data.length;i++){
                    console.log(this.data.values())
                    //this.item.push(this.data[i])
                }
                //console.log(this.item)
                console.log("hello")**/
            },
            async clickTable(items) {
                this.dialogForm = true;
                this.user = items;
                let d = [];
                let p = [];
                this.email = items.email;
                await axios.get('http://127.0.0.1:8000/ListeProjets').then(function (res) {
                    var myObj = JSON.parse(res.data);
                    for (var i = 0; i < myObj.length; i++) {
                        //console.log(this.data)
                        p.push(myObj[i])
                    }
                })
                var j = 0;
                for (j; j < p.length; j++) {
                    //console.log(d[i])
                }
                let listOfObject = Object.keys(p).map((key) => {
                    return p[key].nomProjet
                })
                this.projets = listOfObject;
                //console.log(this.projets)
                await axios.get('http://127.0.0.1:8000/ListePostes').then(res=>this.postes = res.data);
                await axios.get('http://127.0.0.1:8000/ListeProjetsUser/' + items.id).then(function (res) {
                    var myObj = JSON.parse(res.data);
                    for (var i = 0; i < myObj.length; i++) {
                        //console.log(this.data)
                        d.push(myObj[i])
                    }
                    //console.log(myObj)
                })
                //let a = []
                var i = 0;
                for (i; i < d.length; i++) {
                    //console.log(d[i])
                }
                let listOfObjects = Object.keys(d).map((key) => {
                    return d[key]
                })
                this.row = listOfObjects;
                var x =0;
                while(x<this.row.length){
                    var c =this.colors[this.rnd(0, this.colors.length - 1)]
                    var k = 0
                    var date=JSON.parse(this.row[x].dates);
                    console.log(date)
                    while(k < date.length) {
                        this.events.push({
                            name: this.row[x]["projet"].nomProjet,
                            start: date[k][0],
                            end: date[k][1],
                            color: c,
                            timed: "",
                        })
                        k++;
                    }
                    x++;
                }

            },
            async getProjet(){
                var poste = {"nomProjet":this.nomProjet};
                //let d = [];
                const options = {
                    headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                };
                await axios.post("http://127.0.0.1:8000/GetProjetByName",poste,options).then(res=>this.idprojet = res.data)
            },
            viewDay ({ date }) {
                var dateDebut = new Date(this.idprojet.datedebut.timestamp * 1000);
                var datefin = new Date(this.idprojet.datefin.timestamp * 1000);
                var d = new Date(date);
                if(d>=dateDebut && d<=datefin){
                    console.log((dateDebut))
                    console.log((datefin))
                    var x = date.toString()
                    console.log(x)
                    this.dateROW.push(x);
                    this.dates.push(this.dateROW)
                    this.events.push({
                        name: this.idprojet.nomProjet,
                        start: x,
                        end: x,

                    })
                    //this.date = date;
                    //this.focus = d
                    //this.type = 'day'
                    this.d = date
                    this.n =0;
                    this.dateROW = [];
                }else{
                    alert("hi")
                }


            },
          redirection(){
            this.$router.push("/DashBoardAdmin");
          },
            viewTime({time}){
                if(this.n <2){
                    var x = this.date.toString() + " "+time.toString();
                    this.n = this.n+1;
                    this.dateROW.push(x);
                    if(this.n === 1){
                        this.dates.push(this.dateROW)
                        console.log(this.dates)
                    }
                    console.log(x)
                }
                else{
                    alert("choisissez une autre date");
                }

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
            updateRange () {

            },
            rnd (a, b) {
                return Math.floor((b - a + 1) * Math.random()) + a
            },
            async getPoste(){
                let d = [];

                var pos = [];
                var poste = {"poste":this.p};
                const options = {
                    headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                };
                await axios.post("http://127.0.0.1:8000/GetPosteByName",poste,options).then(function (res) {
                    var myObj = JSON.parse(res.data);
                    for (var i = 0; i < myObj.length; i++) {
                        //console.log(this.data)
                        d.push(myObj[i])
                    }
                    //console.log(d)
                    let listOfObject = Object.keys(d).map((key) => {
                        return d[key]
                    })
                    //console.log(typeof (this.categorie))

                    pos = {"id":listOfObject[0].id,"poste":listOfObject[0].poste,"salaireMinimaile":listOfObject[0].salaireMinimaile,"tache":listOfObject[0].tache}
                    //this.posteInformations = listOfObject[0];
                })

                this.posteInformations = pos;
            },
            async chooseDate(){
                const options = {
                    headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                };
                var d = "";
                var affectation = {"iduser":this.user.id,"idprojet":this.idprojet.id,"idposte":this.posteInformations.id,"salaire":this.salaire,"date":this.dates,'typePoste':this.typesPoste};
                console.log(affectation)
                await axios.post('http://127.0.0.1:8000/AddAffectation',affectation,options).then(res=>d = res.data.toString())
                if (d ==="Done"){
                    this.dialog = false;
                }
            },
            Save(){

                        this.dialog= true;
                        this.dialogForm = false;

            },
        },
        beforeMount(){
            this.GetData()
        }

    }
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style >

</style>
