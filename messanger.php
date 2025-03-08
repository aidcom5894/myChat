
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Chitchat - chat messenger html templlete</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="Chitchat">
    <meta name="keywords" content="Chitchat">
    <meta name="author" content="Chitchat">
    <link rel="icon" href="uiDesign/assets/images/favicon/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="uiDesign/assets/images/favicon/favicon.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,600&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,300i,400,400i,500,500i,700,700i,900,900i&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="uiDesign/assets/css/date-picker.css">
    <link rel="stylesheet" type="text/css" href="uiDesign/assets/css/magnific-popup.css">
    <link rel="stylesheet" type="text/css" href="uiDesign/assets/css/style.css" media="screen" id="color">
    <link rel="stylesheet" type="text/css" href="uiDesign/assets/css/themify-icons.css">
    <!-- <link rel="stylesheet" type="text/css" href="uiDesign/assets/css/tour.css"> -->
    <link rel="stylesheet" type="text/css" href="uiDesign/assets/js/ckeditor/skins/moono-lisa/editor.css?t=HBDD">
    <link rel="stylesheet" type="text/css" href="uiDesign/assets/js/ckeditor/plugins/scayt/skins/moono-lisa/scayt.css">
    <link rel="stylesheet" type="text/css" href="uiDesign/assets/js/ckeditor/plugins/scayt/dialogs/dialog.css">
    <link rel="stylesheet" type="text/css" href="uiDesign/assets/js/ckeditor/plugins/tableselection/styles/tableselection.css">
    <link rel="stylesheet" type="text/css" href="uiDesign/assets/js/ckeditor/plugins/wsc/skins/moono-lisa/wsc.css">
    <link rel="stylesheet" type="text/css" href="uiDesign/assets/js/ckeditor/plugins/copyformatting/styles/copyformatting.css">
  </head>
  <body >
  
    <div class="chitchat-container sidebar-toggle">
      <nav class="main-nav on custom-scroll">
        <div class="logo-warpper"><a href="messenger.html"><img src="uiDesign/assets/images/logo/logo.png" alt="logo"/></a></div>
        <div class="sidebar-main">
          <ul class="sidebar-top">
            <li><a class="button-effect" href="status" data-tippy-content="status" data-intro="Check Status here">
                <div class="user-popup status one">
                  <div> <img class="bg-img" src="uiDesign/assets/images/avtar/2.jpg" alt="Avatar"/></div>
                </div></a></li>
            <li><a class="icon-btn btn-light button-effect" href="favourite" data-tippy-content="Favourite"><i class="fa fa-star">               </i></a></li>
            <li><a class="icon-btn btn-light button-effect" href="document" data-tippy-content="Document"> <i class="fa fa-file-text">       </i></a></li>
            <li><a class="icon-btn btn-light button-effect" href="contact-list" data-tippy-content="Contact List"> <i class="fa fa-users">  </i></a></li>
            <li>
              <div class="dot-btn dot-danger grow"><a class="icon-btn btn-light button-effect" href="notification" data-tippy-content="Notification"> <i class="fa fa-bell"></i></a></div>
            </li>
            <li><a class="icon-btn btn-light button-effect" href="settings" data-tippy-content="Setting" data-intro="You can change settings by clicking here"> <i class="fa fa-cog"></i></a></li>
          </ul>
          <ul class="sidebar-bottom">         
            <li><a class="icon-btn btn-light button-effect mode" href="#" data-tippy-content="Theme Mode" data-intro="Change mode"><i class="fa fa-moon-o"></i></a></li>
            <li><a class="icon-btn btn-light" href="login.html" data-tippy-content=" SignOut"> <i class="fa fa-power-off">  </i></a></li>
          </ul>
        </div>
      </nav>
      <aside class="chitchat-left-sidebar left-disp">
        <div class="recent-default dynemic-sidebar active">
          <div class="recent">
            <div class="theme-title">
              <div class="d-flex">
                <div> 
                  <h2>Recent</h2>
                  <h4>Chat from your friends &#128536;</h4>
                </div>
                <div class="flex-grow-1"><a class="icon-btn btn-outline-light button-effect pull-right mobile-back" href="#"><i class="ti-angle-right"></i></a><a class="icon-btn btn-outline-light button-effect pull-right mainnav" href="#"><i class="ti-layout-grid2"></i></a></div>
              </div>
            </div>
            <div class="recent-slider recent-chat owl-carousel owl-theme">
              <div class="item">
                <div class="recent-box">
                  <div class="dot-btn dot-danger grow"></div>
                  <div class="recent-profile"><img class="bg-img" src="uiDesign/assets/images/avtar/1.jpg" alt="Avatar"/>
                    <h6> John deo</h6>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="recent-box">
                  <div class="dot-btn dot-success grow"></div>
                  <div class="recent-profile online"><img class="bg-img" src="uiDesign/assets/images/avtar/big/audiocall.jpg" alt="Avatar"/>
                    <h6> John </h6>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="recent-box">
                  <div class="dot-btn dot-warning grow"></div>
                  <div class="recent-profile"><img class="bg-img" src="uiDesign/assets/images/avtar/2.jpg" alt="Avatar"/>
                    <h6> Jpny</h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="chat custom-scroll">
            <ul class="chat-cont-setting">
              <li> <a href="#" data-bs-toggle="modal" data-bs-target="#msgchatModal"><span>new chat</span>
                  <div class="icon-btn btn-outline-primary button-effect btn-sm"><i data-feather="message-square"></i></div></a></li>
              <li><a href="#" data-bs-toggle="modal" data-bs-target="#msgcallModal"><span>new call</span>
                  <div class="icon-btn btn-outline-success button-effect btn-sm"><i data-feather="phone"></i></div></a></li>
              <li><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><span>new Contact</span>
                  <div class="icon-btn btn-outline-danger button-effect btn-sm"><i data-feather="users"></i></div></a></li>
            </ul>
            <div class="theme-title">
              <div class="d-flex">
                <div> 
                  <h2>Chat</h2>
                  <h4>Start New Conversation</h4>
                </div>
                <div class="flex-grow-1"><a class="icon-btn btn-outline-light btn-sm search contact-search" href="#"> <i data-feather="search"></i></a>
                  <form class="form-inline search-form">
                    <div class="form-group">
                      <input class="form-control-plaintext" type="search" placeholder="Search.."/>
                      <div class="icon-close close-search"> <i data-feather="x">                </i></div>
                    </div>
                  </form><a class="icon-btn btn-primary btn-fix chat-cont-toggle outside" href="#"><i data-feather="plus"></i></a>
                </div>
              </div>
            </div>
            <div class="theme-tab tab-sm chat-tabs">     
              <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" data-to="chat-content"><a class="nav-link button-effect active" id="chat-tab" data-bs-toggle="tab" href="#chat" role="tab" aria-controls="chat" aria-selected="true" data-intro="Start chat"><i data-feather="message-square"> </i>Chat</a></li>
                <li class="nav-item" data-to="call-content"><a class="nav-link button-effect" id="call-tab" data-bs-toggle="tab" href="#call" role="tab" aria-controls="call" aria-selected="false"><i data-feather="phone"> </i>Call</a></li>
                <li class="nav-item" data-to="contact-content"><a class="nav-link button-effect" id="contact-tab" data-bs-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false"> <i data-feather="users"> </i>Contact</a></li>
              </ul>
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="chat" role="tabpanel" aria-labelledby="chat-tab"> 
                  <div class="theme-tab">       
                    <ul class="nav nav-tabs" id="myTab1" role="tablist">
                      <li class="nav-item"><a class="nav-link button-effect active" id="direct-tab" data-bs-toggle="tab" href="#direct" role="tab" aria-controls="direct" aria-selected="false" data-to="chating">Direct</a></li>
                      <li class="nav-item"><a class="nav-link button-effect" id="group-tab" data-bs-toggle="tab" href="#group" role="tab" aria-controls="group" aria-selected="true" data-to="group_chat">Group</a></li>
                    </ul>
                    <div class="tab-content" id="myTabContent1">
                      <div class="tab-pane fade show active" id="direct" role="tabpanel" aria-labelledby="direct-tab"> 
                        <ul class="chat-main">
                          <li data-to="blank">
                            <div class="chat-box">
                              <div class="profile offline"><img class="bg-img" src="uiDesign/assets/images/contact/1.jpg" alt="Avatar"/></div>
                              <div class="details">
                                <h5>Josephin water</h5>
                                <h6>Hi, i am josephin. How are you.. ! There are many variations of passages.</h6>
                              </div>
                              <div class="date-status"><i class="ti-pin2"></i>
                                <h6>22/10/23</h6>
                                <h6 class="font-success status"> Seen</h6>
                              </div>
                            </div>
                          </li>
                          <li class="active" data-to="chating">
                            <div class="chat-box">
                              <div class="profile online"><img class="bg-img" src="uiDesign/assets/images/contact/2.jpg" alt="Avatar"/></div>
                              <div class="details">
                                <h5>Jony Lynetin</h5>
                                <h6>Typing................</h6>
                              </div>
                              <div class="date-status"><i class="ti-pin2"></i>
                                <h6>30/11/23</h6>
                                <div class="badge badge-primary sm">8</div>
                              </div>
                            </div>
                          </li>
                          <li data-to="blank">
                            <div class="chat-box">
                              <div class="profile unreachable"><img class="bg-img" src="uiDesign/assets/images/contact/3.jpg" alt="Avatar"/></div>
                              <div class="details">
                                <h5>Sufiya Elija</h5>
                                <h6>I need job, please help me.</h6>
                              </div>
                              <div class="date-status"><i class="ti-pin2"></i>
                                <h6>15/06/23</h6>
                                <h6 class="font-dark status"> Sending</h6>
                              </div>
                            </div>
                          </li>
                          <li data-to="blank">
                            <div class="chat-box">
                              <div class="profile busy"><img class="bg-img" src="uiDesign/assets/images/contact/4.jpg" alt="Avatar"/></div>
                              <div class="details">
                                <h5>Mukrani Pabelo</h5>
                                <h6>Hi, i am josephin. How are you.. ! There are many variations of passages.</h6>
                              </div>
                              <div class="date-status"><i class="ti-pin2"></i>
                                <h6>04/06/23</h6>
                                <h6 class="font-danger status"> Failed</h6>
                              </div>
                            </div>
                          </li>
                          <li data-to="blank">
                            <div class="chat-box">
                              <div class="profile busy"><img class="bg-img" src="uiDesign/assets/images/contact/2.jpg" alt="Avatar"/></div>
                              <div class="details">
                                <h5>Jhon Deo</h5>
                                <h6>Hi, i am josephin. How are you.. ! There are many variations of passages.</h6>
                              </div>
                              <div class="date-status"><i class="ti-pin2"></i>
                                <h6>04/06/23</h6>
                                <h6 class="font-danger status"> Failed</h6>
                              </div>
                            </div>
                          </li>
                          <li data-to="blank">
                            <div class="chat-box">
                              <div class="profile busy"><img class="bg-img" src="uiDesign/assets/images/contact/1.jpg" alt="Avatar"/></div>
                              <div class="details">
                                <h5>Pabelo Mukrani</h5>
                                <h6>Hi, i am josephin. How are you.. ! There are many variations of passages.</h6>
                              </div>
                              <div class="date-status"><i class="ti-pin2"></i>
                                <h6>04/06/23</h6>
                                <h6 class="font-danger status"> Failed</h6>
                              </div>
                            </div>
                          </li>
                        </ul>
                      </div>
                      <div class="tab-pane fade" id="group" role="tabpanel" aria-labelledby="group-tab"> 
                        <div class="search2">
                          <div>
                            <div class="input-group">
                              <div class="input-group-append"><span class="input-group-text"><i class="fa fa-search"></i></span></div>
                              <input class="form-control" type="text" placeholder="Start Chat"/>
                            </div>
                          </div>
                        </div>
                        <ul class="group-main">
                          <li class="active" data-to="group_chat">
                            <div class="group-box">
                              <div class="profile"><img class="bg-img" src="uiDesign/assets/images/avtar/teq.jpg" alt="Avatar"/></div>
                              <div class="details">
                                <h5>Tech Ninjas</h5>
                                <h6>Lorem Ipsum is simply dummy text the printing and typesetting industry.</h6>
                              </div>
                              <div class="date-status">
                                <ul class="grop-icon">
                                  <li><a class="group-tp" href="#" data-tippy-content="Josephin"> <img src="uiDesign/assets/images/contact/1.jpg" alt="group-icon-img"/></a></li>
                                  <li><a class="group-tp" href="#" data-tippy-content="Jony "> <img src="uiDesign/assets/images/contact/2.jpg" alt="group-icon-img"/></a></li>
                                  <li><a class="group-tp" href="#" data-tippy-content="Pabelo"> <img src="uiDesign/assets/images/contact/3.jpg" alt="group-icon-img"/></a></li>
                                  <li>+ 35</li>
                                </ul>
                              </div>
                            </div>
                          </li>
                          <li data-to="group_blank">
                            <div class="group-box">
                              <div class="profile"><img class="bg-img" src="uiDesign/assets/images/avtar/family.jpg" alt="Avatar"/></div>
                              <div class="details">
                                <h5>Family Ties</h5>
                                <h6>Lorem Ipsum is simply dummy text the printing and typesetting industry.</h6>
                              </div>
                              <div class="date-status">
                                <ul class="grop-icon">
                                  <li><a class="group-tp" href="#" data-tippy-content="Josephin"> <img src="uiDesign/assets/images/contact/1.jpg" alt="group-icon-img"/></a></li>
                                  <li><a class="group-tp" href="#" data-tippy-content="Jony "> <img src="uiDesign/assets/images/contact/2.jpg" alt="group-icon-img"/></a></li>
                                  <li><a class="group-tp" href="#" data-tippy-content="Pabelo"> <img src="uiDesign/assets/images/contact/3.jpg" alt="group-icon-img"/></a></li>
                                  <li>+ 12</li>
                                </ul>
                                <div class="badge badge-primary"></div>
                              </div>
                            </div>
                          </li>
                          <li data-to="group_blank">
                            <div class="group-box">
                              <div class="profile bg-danger"><span>HT</span></div>
                              <div class="details">
                                <h5>Hungry for Trouble</h5>
                                <h6>Lorem Ipsum is simply dummy text the printing and typesetting industry.</h6>
                              </div>
                            </div>
                          </li>
                          <li data-to="group_blank">
                            <div class="group-box">
                              <div class="profile"><img class="bg-img" src="uiDesign/assets/images/avtar/girls.jpg" alt="Avatar"/></div>
                              <div class="details">
                                <h5>Staunch Ladies</h5>
                                <h6>Lorem Ipsum is simply dummy text the printing and typesetting industry.</h6>
                              </div>
                            </div>
                          </li>
                          <li data-to="group_blank">
                            <div class="group-box">
                              <div class="profile bg-success"><span>CE</span></div>
                              <div class="details">
                                <h5>Crazy Engineers</h5>
                                <h6>Lorem Ipsum is simply dummy text the printing and typesetting industry.</h6>
                              </div>
                              <div class="date-status"></div>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="call" role="tabpanel" aria-labelledby="call-tab"> 
                  <div class="theme-tab tab-icon">
                    <ul class="nav nav-tabs" id="contactTab" role="tablist">
                      <li class="nav-item"><a class="nav-link active" id="con1-tab" data-bs-toggle="tab" href="#con1" role="tab" aria-controls="con1" aria-selected="true">All</a></li>
                      <li class="nav-item"><a class="nav-link" id="con3-tab" data-bs-toggle="tab" href="#con3" role="tab" aria-controls="con3" aria-selected="false"> <i data-feather="phone-incoming"></i></a></li>
                      <li class="nav-item"><a class="nav-link" id="con4-tab" data-bs-toggle="tab" href="#con4" role="tab" aria-controls="con4" aria-selected="false"> <i data-feather="phone-outgoing"></i></a></li>
                      <li class="nav-item"><a class="nav-link" id="con2-tab" data-bs-toggle="tab" href="#con2" role="tab" aria-controls="con2" aria-selected="false"> <i data-feather="phone-missed"></i></a></li>
                    </ul>
                    <div class="tab-content" id="contactTabContent">
                      <div class="tab-pane fade show active" id="con1" role="tabpanel" aria-labelledby="con1-tab"> 
                        <ul class="call-log-main">
                          <li class="active">
                            <div class="call-box">
                              <div class="profile offline"><img class="bg-img" src="uiDesign/assets/images/contact/2.jpg" alt="Avatar"/></div>
                              <div class="details">
                                <h5>Jony Lynetin</h5>
                                <h6> <i data-feather="arrow-down-left"></i>3:30 pm</h6>
                              </div>
                              <div class="call-status">
                                <div class="icon-btn btn-outline-success button-effect btn-sm"><i data-feather="phone"></i></div>
                              </div>
                            </div>
                          </li>
                          <li>
                            <div class="call-box">
                              <div class="profile online"><img class="bg-img" src="uiDesign/assets/images/contact/1.jpg" alt="Avatar"/></div>
                              <div class="details">
                                <h5>Jony Lynetin</h5>
                                <h6> <i data-feather="arrow-down-right"></i>3:10 pm</h6>
                              </div>
                              <div class="call-status">
                                <div class="icon-btn btn-outline-success button-effect btn-sm"><i data-feather="video"></i></div>
                              </div>
                            </div>
                          </li>
                          <li>
                            <div class="call-box">
                              <div class="profile offline"><img class="bg-img" src="uiDesign/assets/images/contact/2.jpg" alt="Avatar"/></div>
                              <div class="details">
                                <h5>Jony Lynetin</h5>
                                <h6> <i class="missed" data-feather="corner-left-down"></i>3:00 pm</h6>
                              </div>
                              <div class="call-status">
                                <div class="icon-btn btn-outline-danger button-effect btn-sm"><i data-feather="phone"></i></div>
                              </div>
                            </div>
                          </li>
                          <li>
                            <div class="call-box">
                              <div class="profile online"><img class="bg-img" src="uiDesign/assets/images/contact/1.jpg" alt="Avatar"/></div>
                              <div class="details">
                                <h5>Jony Lynetin</h5>
                                <h6> <i data-feather="arrow-down-right"></i>3:00 pm</h6>
                              </div>
                              <div class="call-status">
                                <div class="icon-btn btn-outline-success button-effect btn-sm"><i data-feather="video"></i></div>
                              </div>
                            </div>
                          </li>
                          <li>
                            <div class="call-box">
                              <div class="profile offline"><img class="bg-img" src="uiDesign/assets/images/contact/2.jpg" alt="Avatar"/></div>
                              <div class="details">
                                <h5>Jony Lynetin</h5>
                                <h6> <i data-feather="arrow-down-right"></i>3:00 pm</h6>
                              </div>
                              <div class="call-status">
                                <div class="icon-btn btn-outline-success button-effect btn-sm"><i data-feather="phone"></i></div>
                              </div>
                            </div>
                          </li>
                          <li>
                            <div class="call-box">
                              <div class="profile online"><img class="bg-img" src="uiDesign/assets/images/contact/1.jpg" alt="Avatar"/></div>
                              <div class="details">
                                <h5>Jony Lynetin</h5>
                                <h6> <i data-feather="arrow-down-right"></i>3:00 pm</h6>
                              </div>
                              <div class="call-status">
                                <div class="icon-btn btn-outline-success button-effect btn-sm"><i data-feather="video"></i></div>
                              </div>
                            </div>
                          </li>
                        </ul>
                      </div>
                      <div class="tab-pane fade" id="con2" role="tabpanel" aria-labelledby="con2-tab"> 
                        <ul class="call-log-main">
                          <li class="active">
                            <div class="call-box">
                              <div class="profile offline"><img class="bg-img" src="uiDesign/assets/images/contact/2.jpg" alt="Avatar"/></div>
                              <div class="details">
                                <h5>Jony Lynetin</h5>
                                <h6> <i class="missed" data-feather="corner-left-down"></i>3:30 pm</h6>
                              </div>
                              <div class="call-status">
                                <div class="icon-btn btn-outline-danger button-effect btn-sm"><i data-feather="phone"></i></div>
                              </div>
                            </div>
                          </li>
                          <li>
                            <div class="call-box">
                              <div class="profile online"><img class="bg-img" src="uiDesign/assets/images/contact/1.jpg" alt="Avatar"/></div>
                              <div class="details">
                                <h5>Jony Lynetin</h5>
                                <h6> <i class="missed" data-feather="corner-left-down"></i>3:10 pm</h6>
                              </div>
                              <div class="call-status">
                                <div class="icon-btn btn-outline-danger button-effect btn-sm"><i data-feather="video"></i></div>
                              </div>
                            </div>
                          </li>
                          <li>
                            <div class="call-box">
                              <div class="profile offline"><img class="bg-img" src="uiDesign/assets/images/contact/2.jpg" alt="Avatar"/></div>
                              <div class="details">
                                <h5>Jony Lynetin</h5>
                                <h6> <i class="missed" data-feather="corner-left-down"></i>3:00 pm</h6>
                              </div>
                              <div class="call-status">
                                <div class="icon-btn btn-outline-danger button-effect btn-sm"><i data-feather="phone"></i></div>
                              </div>
                            </div>
                          </li>
                          <li>
                            <div class="call-box">
                              <div class="profile online"><img class="bg-img" src="uiDesign/assets/images/contact/1.jpg" alt="Avatar"/></div>
                              <div class="details">
                                <h5>Jony Lynetin</h5>
                                <h6> <i class="missed" data-feather="corner-left-down"></i>3:00 pm</h6>
                              </div>
                              <div class="call-status">
                                <div class="icon-btn btn-outline-danger button-effect btn-sm"><i data-feather="video"></i></div>
                              </div>
                            </div>
                          </li>
                          <li>
                            <div class="call-box">
                              <div class="profile offline"><img class="bg-img" src="uiDesign/assets/images/contact/2.jpg" alt="Avatar"/></div>
                              <div class="details">
                                <h5>Jony Lynetin</h5>
                                <h6> <i class="missed" data-feather="corner-left-down"></i>3:00 pm</h6>
                              </div>
                              <div class="call-status">
                                <div class="icon-btn btn-outline-danger button-effect btn-sm"><i data-feather="phone"></i></div>
                              </div>
                            </div>
                          </li>
                          <li>
                            <div class="call-box">
                              <div class="profile online"><img class="bg-img" src="uiDesign/assets/images/contact/1.jpg" alt="Avatar"/></div>
                              <div class="details">
                                <h5>Jony Lynetin</h5>
                                <h6> <i class="missed" data-feather="corner-left-down"></i>3:00 pm</h6>
                              </div>
                              <div class="call-status">
                                <div class="icon-btn btn-outline-danger button-effect btn-sm"><i data-feather="video"></i></div>
                              </div>
                            </div>
                          </li>
                        </ul>
                      </div>
                      <div class="tab-pane fade" id="con3" role="tabpanel" aria-labelledby="con3-tab"> 
                        <ul class="call-log-main">
                          <li>
                            <div class="call-box">
                              <div class="profile online"><img class="bg-img" src="uiDesign/assets/images/contact/1.jpg" alt="Avatar"/></div>
                              <div class="details">
                                <h5>Jony Lynetin</h5>
                                <h6> <i data-feather="arrow-down-right"></i>3:10 pm</h6>
                              </div>
                              <div class="call-status">
                                <div class="icon-btn btn-outline-success button-effect btn-sm"><i data-feather="video"></i></div>
                              </div>
                            </div>
                          </li>
                          <li>
                            <div class="call-box">
                              <div class="profile offline"><img class="bg-img" src="uiDesign/assets/images/contact/2.jpg" alt="Avatar"/></div>
                              <div class="details">
                                <h5>Jony Lynetin</h5>
                                <h6> <i data-feather="arrow-down-right"></i>3:00 pm</h6>
                              </div>
                              <div class="call-status">
                                <div class="icon-btn btn-outline-success button-effect btn-sm"><i data-feather="phone"></i></div>
                              </div>
                            </div>
                          </li>
                          <li>
                            <div class="call-box">
                              <div class="profile online"><img class="bg-img" src="uiDesign/assets/images/contact/1.jpg" alt="Avatar"/></div>
                              <div class="details">
                                <h5>Jony Lynetin</h5>
                                <h6> <i data-feather="arrow-down-right"></i>3:00 pm</h6>
                              </div>
                              <div class="call-status">
                                <div class="icon-btn btn-outline-success button-effect btn-sm"><i data-feather="video"></i></div>
                              </div>
                            </div>
                          </li>
                          <li>
                            <div class="call-box">
                              <div class="profile offline"><img class="bg-img" src="uiDesign/assets/images/contact/2.jpg" alt="Avatar"/></div>
                              <div class="details">
                                <h5>Jony Lynetin</h5>
                                <h6> <i data-feather="arrow-down-right"></i>3:00 pm</h6>
                              </div>
                              <div class="call-status">
                                <div class="icon-btn btn-outline-success button-effect btn-sm"><i data-feather="phone"></i></div>
                              </div>
                            </div>
                          </li>
                          <li>
                            <div class="call-box">
                              <div class="profile online"><img class="bg-img" src="uiDesign/assets/images/contact/1.jpg" alt="Avatar"/></div>
                              <div class="details">
                                <h5>Jony Lynetin</h5>
                                <h6> <i data-feather="arrow-down-right"></i>3:00 pm</h6>
                              </div>
                              <div class="call-status">
                                <div class="icon-btn btn-outline-success button-effect btn-sm"><i data-feather="video"></i></div>
                              </div>
                            </div>
                          </li>
                        </ul>
                      </div>
                      <div class="tab-pane fade" id="con4" role="tabpanel" aria-labelledby="con4-tab"> 
                        <ul class="call-log-main">
                          <li>
                            <div class="call-box">
                              <div class="profile online"><img class="bg-img" src="uiDesign/assets/images/contact/1.jpg" alt="Avatar"/></div>
                              <div class="details">
                                <h5>Jony Lynetin</h5>
                                <h6> <i data-feather="arrow-up-right"></i>3:10 pm</h6>
                              </div>
                              <div class="call-status">
                                <div class="icon-btn btn-outline-success button-effect btn-sm"><i data-feather="video"></i></div>
                              </div>
                            </div>
                          </li>
                          <li>
                            <div class="call-box">
                              <div class="profile offline"><img class="bg-img" src="uiDesign/assets/images/contact/2.jpg" alt="Avatar"/></div>
                              <div class="details">
                                <h5>Jony Lynetin</h5>
                                <h6> <i data-feather="arrow-up-right"></i>3:00 pm</h6>
                              </div>
                              <div class="call-status">
                                <div class="icon-btn btn-outline-success button-effect btn-sm"><i data-feather="phone"></i></div>
                              </div>
                            </div>
                          </li>
                          <li>
                            <div class="call-box">
                              <div class="profile online"><img class="bg-img" src="uiDesign/assets/images/contact/1.jpg" alt="Avatar"/></div>
                              <div class="details">
                                <h5>Jony Lynetin</h5>
                                <h6> <i data-feather="arrow-up-right"></i>3:00 pm</h6>
                              </div>
                              <div class="call-status">
                                <div class="icon-btn btn-outline-success button-effect btn-sm"><i data-feather="video"></i></div>
                              </div>
                            </div>
                          </li>
                          <li>
                            <div class="call-box">
                              <div class="profile offline"><img class="bg-img" src="uiDesign/assets/images/contact/2.jpg" alt="Avatar"/></div>
                              <div class="details">
                                <h5>Jony Lynetin</h5>
                                <h6> <i data-feather="arrow-up-right"></i>3:00 pm</h6>
                              </div>
                              <div class="call-status">
                                <div class="icon-btn btn-outline-success button-effect btn-sm"><i data-feather="phone"></i></div>
                              </div>
                            </div>
                          </li>
                          <li>
                            <div class="call-box">
                              <div class="profile online"><img class="bg-img" src="uiDesign/assets/images/contact/1.jpg" alt="Avatar"/></div>
                              <div class="details">
                                <h5>Jony Lynetin</h5>
                                <h6> <i data-feather="arrow-up-right"></i>3:00 pm</h6>
                              </div>
                              <div class="call-status">
                                <div class="icon-btn btn-outline-success button-effect btn-sm"><i data-feather="video"></i></div>
                              </div>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                  <ul class="contact-log-main">
                    <li>
                      <div class="contact-box">
                        <div class="profile offline"><img class="bg-img" src="uiDesign/assets/images/contact/2.jpg" alt="Avatar"/></div>
                        <div class="details">
                          <h5>Jony Lynetin</h5>
                          <h6>+21 3523 25544 </h6>
                        </div>
                        <div class="contact-action">
                          <div class="icon-btn btn-outline-primary btn-sm button-effect"><i data-feather="phone"></i></div>
                          <div class="icon-btn btn-outline-success btn-sm button-effect"><i data-feather="video"></i></div>
                        </div>
                      </div>
                    </li>
                    <li class="active">
                      <div class="contact-box">
                        <div class="profile online"><img class="bg-img" src="uiDesign/assets/images/contact/1.jpg" alt="Avatar"/></div>
                        <div class="details">
                          <h5>Jony Lynetin</h5>
                          <h6>+54 541447 255 </h6>
                        </div>
                        <div class="contact-action">
                          <div class="icon-btn btn-outline-primary btn-sm button-effect"><i data-feather="phone"></i></div>
                          <div class="icon-btn btn-outline-success btn-sm button-effect"><i data-feather="video"></i></div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="contact-box">
                        <div class="profile busy"><img class="bg-img" src="uiDesign/assets/images/contact/3.jpg" alt="Avatar"/></div>
                        <div class="details">
                          <h5>Jony Lynetin</h5>
                          <h6>+58 2564 02554</h6>
                        </div>
                        <div class="contact-action">
                          <div class="icon-btn btn-outline-primary btn-sm button-effect"><i data-feather="phone"></i></div>
                          <div class="icon-btn btn-outline-success btn-sm button-effect"><i data-feather="video"></i></div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="contact-box">
                        <div class="profile unreachable"><img class="bg-img" src="uiDesign/assets/images/contact/4.jpg" alt="Avatar"/></div>
                        <div class="details">
                          <h5>Jony Lynetin</h5>
                          <h6>+44 55124 2524</h6>
                        </div>
                        <div class="contact-action">
                          <div class="icon-btn btn-outline-primary btn-sm button-effect"><i data-feather="phone"></i></div>
                          <div class="icon-btn btn-outline-success btn-sm button-effect"><i data-feather="video"></i></div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="contact-box">
                        <div class="profile online"><img class="bg-img" src="uiDesign/assets/images/contact/4.jpg" alt="Avatar"/></div>
                        <div class="details">
                          <h5>Jony Lynetin</h5>
                          <h6>+54 541447 255 </h6>
                        </div>
                        <div class="contact-action">
                          <div class="icon-btn btn-outline-primary btn-sm button-effect"><i data-feather="phone"></i></div>
                          <div class="icon-btn btn-outline-success btn-sm button-effect"><i data-feather="video"></i></div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="fevorite-tab custom-scrollbar dynemic-sidebar" id="favourite">
          <div class="theme-title">
            <div class="d-flex">
              <div> 
                <h2>Favourite</h2>
                <h4>Last Recent</h4>
              </div>
              <div class="flex-grow-1"><a class="icon-btn btn-outline-light btn-sm m-r-15 search" href="#"> <i data-feather="search"></i></a>
                <form class="form-inline search-form">
                  <div class="form-group">
                    <input class="form-control-plaintext" type="search" placeholder="Search.."/>
                    <div class="icon-close close-search"><i data-feather="x"></i></div>
                  </div>
                </form><a class="icon-btn btn-outline-light btn-sm m-r-15" href="#" data-bs-toggle="modal" data-bs-target="#addcallmodal"><i data-feather="plus">                              </i></a><a class="icon-btn btn-outline-light btn-sm close-panel" href="#"><i data-feather="x"></i></a>
              </div>
            </div>
          </div>
          <ul class="chat-main">
            <li>
              <div class="chat-box">
                <div class="d-flex">
                  <div class="profile offline"><img class="bg-img" src="uiDesign/assets/images/contact/1.jpg" alt="Avatar"/></div>
                  <div class="details">
                    <h5>Josephin water</h5>
                    <h6>Alabma , USA</h6>
                  </div>
                  <div class="flex-grow-1"><a class="icon-btn btn-outline-primary btn-sm pull-right favourite" href="#"> <i data-feather="star"> </i></a></div>
                </div>
              </div>
            </li>
            <li>
              <div class="chat-box">
                <div class="d-flex">
                  <div class="profile online"><img class="bg-img" src="uiDesign/assets/images/contact/2.jpg" alt="Avatar"/></div>
                  <div class="details">
                    <h5>Jony Lynetin</h5>
                    <h6>Los Angeles, California</h6>
                  </div>
                  <div class="flex-grow-1"><a class="icon-btn btn-outline-primary btn-sm pull-right favourite" href="#"> <i data-feather="star"> </i></a></div>
                </div>
              </div>
            </li>
            <li>
              <div class="chat-box">
                <div class="d-flex">
                  <div class="profile busy"><img class="bg-img" src="uiDesign/assets/images/contact/3.jpg" alt="Avatar"/></div>
                  <div class="details">
                    <h5>Sufiya Elija</h5>
                    <h6>Glasgow , Scotland</h6>
                  </div>
                  <div class="flex-grow-1"><a class="icon-btn btn-outline-primary btn-sm pull-right favourite" href="#"> <i data-feather="star"> </i></a></div>
                </div>
              </div>
            </li>
            <li>
              <div class="chat-box">
                <div class="d-flex">
                  <div class="profile unreachable"><img class="bg-img" src="uiDesign/assets/images/contact/4.jpg" alt="Avatar"/></div>
                  <div class="details">
                    <h5>Pabelo Mukrani</h5>
                    <h6>Leicester , England</h6>
                  </div>
                  <div class="flex-grow-1"><a class="icon-btn btn-outline-primary btn-sm pull-right favourite" href="#"> <i data-feather="star"> </i></a></div>
                </div>
              </div>
            </li>
            <li>
              <div class="chat-box">
                <div class="d-flex">
                  <div class="profile offline"><img class="bg-img" src="uiDesign/assets/images/contact/1.jpg" alt="Avatar"/></div>
                  <div class="details">
                    <h5>Josephin water</h5>
                    <h6>Alabma , USA</h6>
                  </div>
                  <div class="flex-grow-1"><a class="icon-btn btn-outline-primary btn-sm pull-right favourite" href="#"> <i data-feather="star"> </i></a></div>
                </div>
              </div>
            </li>
            <li>
              <div class="chat-box">
                <div class="d-flex">
                  <div class="profile online"><img class="bg-img" src="uiDesign/assets/images/contact/1.jpg" alt="Avatar"/></div>
                  <div class="details">
                    <h5>Josephin water</h5>
                    <h6>Alabma , USA</h6>
                  </div>
                  <div class="flex-grow-1"><a class="icon-btn btn-outline-primary btn-sm pull-right favourite" href="#"> <i data-feather="star"> </i></a></div>
                </div>
              </div>
            </li>
          </ul>
        </div>
        <div class="document-tab dynemic-sidebar" id="document">
          <div class="theme-title">
            <div class="d-flex">
              <div> 
                <h2>Document</h2>
                <h4>List of document</h4>
              </div>
              <div class="flex-grow-1"> <a class="icon-btn btn-outline-light btn-sm m-r-15 search" href="#"> <i data-feather="search"></i></a>
                <form class="form-inline search-form">
                  <div class="form-group">
                    <input class="form-control-plaintext" type="search" placeholder="Search.."/>
                    <div class="icon-close close-search"> <i data-feather="x">                              </i></div>
                  </div>
                </form><a class="icon-btn btn-outline-light btn-sm close-panel" href="#"><i data-feather="x"></i></a>
              </div>
            </div>
          </div>
          <ul class="chat-main">
            <li>
              <div class="chat-box">
                <div class="d-flex">
                  <div class="profile"><a class="icon-btn btn-outline-danger btn-xl pull-right rouded15" href="#"><i class="fa fa-file-code-o"></i></a></div>
                  <div class="details">
                    <h5>messenger.html</h5>
                    <h6>2, octomber 2023</h6>
                  </div>
                  <div class="flex-grow-1"><a class="icon-btn btn-outline-light btn-sm pull-right" href="uiDesign/assets/doc/messenger.html" target="_blank"><i data-feather="download"></i></a></div>
                </div>
              </div>
            </li>
            <li>
              <div class="chat-box">
                <div class="d-flex">
                  <div class="profile"><a class="icon-btn btn-outline-success btn-xl pull-right rouded15" href="#"><i class="fa fa-file-video-o"></i></a></div>
                  <div class="details">
                    <h5>chapter1.MP4</h5>
                    <h6>3, Octomber 2023</h6>
                  </div>
                  <div class="flex-grow-1"><a class="icon-btn btn-outline-light btn-sm pull-right" href="uiDesign/assets/doc/chapter1.MP4" target="_blank"> <i data-feather="download"></i></a></div>
                </div>
              </div>
            </li>
            <li>
              <div class="chat-box">
                <div class="d-flex">
                  <div class="profile"><a class="icon-btn btn-outline-primary btn-xl pull-right rouded15" href="#"><i class="fa fa-file-word-o"></i></a></div>
                  <div class="details">
                    <h5>salary.xlsx</h5>
                    <h6>5, Octomber 2023</h6>
                  </div>
                  <div class="flex-grow-1"><a class="icon-btn btn-outline-light btn-sm pull-right" href="uiDesign/assets/doc/salary.xlsx" target="_blank"> <i data-feather="download"></i></a></div>
                </div>
              </div>
            </li>
            <li>
              <div class="chat-box">
                <div class="d-flex">
                  <div class="profile"><a class="icon-btn btn-outline-warning btn-xl pull-right rouded15" href="#"><i class="fa fa-file-pdf-o"></i></a></div>
                  <div class="details">
                    <h5>document.pdf</h5>
                    <h6>7, Octomber 2023</h6>
                  </div>
                  <div class="flex-grow-1"><a class="icon-btn btn-outline-light btn-sm pull-right" href="uiDesign/assets/doc/document.pdf" target="_blank"> <i data-feather="download"></i></a></div>
                </div>
              </div>
            </li>
            <li>
              <div class="chat-box">
                <div class="d-flex">
                  <div class="profile"><a class="icon-btn btn-outline-danger btn-xl pull-right rouded15" href="#"><i class="fa fa-file-text-o"></i></a></div>
                  <div class="details">
                    <h5>details.txt</h5>
                    <h6>20, Octomber 2023</h6>
                  </div>
                  <div class="flex-grow-1"><a class="icon-btn btn-outline-light btn-sm pull-right" href="uiDesign/assets/doc/details.txt" target="_blank"> <i data-feather="download"></i></a></div>
                </div>
              </div>
            </li>
            <li>
              <div class="chat-box">
                <div class="d-flex">
                  <div class="profile"><a class="icon-btn btn-outline-success btn-xl pull-right rouded15" href="#"><i class="fa fa-file-code-o"></i></a></div>
                  <div class="details">
                    <h5>messenger.html</h5>
                    <h6>2, octomber 2023</h6>
                  </div>
                  <div class="flex-grow-1"><a class="icon-btn btn-outline-light btn-sm pull-right" href="uiDesign/assets/doc/messenger.html" target="_blank"><i data-feather="download"></i></a></div>
                </div>
              </div>
            </li>
          </ul>
        </div>
        <div class="contact-list-tab dynemic-sidebar custom-scroll" id="contact-list">
          <div class="theme-title">
            <div class="d-flex">
              <div> 
                <h2>Contact</h2>
                <h4>Start talking now</h4>
              </div>
              <div class="flex-grow-1"> <a class="icon-btn btn-outline-light btn-sm m-r-15 search" href="#"> <i data-feather="search"></i></a>
                <form class="form-inline search-form">
                  <div class="form-group">
                    <input class="form-control-plaintext" type="search" placeholder="Search.."/>
                    <div class="icon-close close-search"> <i data-feather="x">                    </i></div>
                  </div>
                </form><a class="icon-btn btn-outline-light btn-sm close-panel" href="#"><i data-feather="x"></i></a>
              </div>
            </div>
          </div>
          <ul class="chat-main">
            <li class="active">
              <div class="chat-box">
                <div class="profile offline"><img class="bg-img" src="uiDesign/assets/images/contact/1.jpg" alt="Avatar"/></div>
                <div class="details">
                  <h5>Josephin water</h5>
                  <h6>Hi, i am josephin. How are you.. ! There are many variations of passages.</h6>
                </div>
                <div class="date-status">
                  <h6>22/10/23</h6>
                  <h6 class="font-success status"> Seen</h6>
                </div>
              </div>
            </li>
            <li>
              <div class="chat-box">
                <div class="profile online"><img class="bg-img" src="uiDesign/assets/images/contact/2.jpg" alt="Avatar"/></div>
                <div class="details">
                  <h5>Jony Lynetin</h5>
                  <h6>Hello</h6>
                </div>
                <div class="date-status">
                  <h6>30/11/23</h6>
                  <div class="badge badge-primary sm">8</div>
                </div>
              </div>
            </li>
            <li>
              <div class="chat-box">
                <div class="profile unreachable"><img class="bg-img" src="uiDesign/assets/images/contact/3.jpg" alt="Avatar"/></div>
                <div class="details">
                  <h5>Sufiya Elija</h5>
                  <h6>I need job, please help me.</h6>
                </div>
                <div class="date-status">
                  <h6>15/06/23</h6>
                  <h6 class="font-dark status"> Sending</h6>
                </div>
              </div>
            </li>
            <li>
              <div class="chat-box">
                <div class="profile busy"><img class="bg-img" src="uiDesign/assets/images/contact/4.jpg" alt="Avatar"/></div>
                <div class="details">
                  <h5>Pabelo Mukrani</h5>
                  <h6>Hi, i am josephin. How are you.. ! There are many variations of passages.</h6>
                </div>
                <div class="date-status">
                  <h6>04/06/23</h6>
                  <h6 class="font-danger status"> Failed</h6>
                </div>
              </div>
            </li>
            <li>
              <div class="chat-box">
                <div class="profile offline"><img class="bg-img" src="uiDesign/assets/images/contact/1.jpg" alt="Avatar"/></div>
                <div class="details">
                  <h5>Josephin water</h5>
                  <h6>Hi, i am josephin. How are you.. ! There are many variations of passages.</h6>
                </div>
                <div class="date-status">
                  <h6>22/10/23</h6>
                  <h6 class="font-success status"> Seen</h6>
                </div>
              </div>
            </li>
            <li>
              <div class="chat-box">
                <div class="profile online"><img class="bg-img" src="uiDesign/assets/images/contact/2.jpg" alt="Avatar"/></div>
                <div class="details">
                  <h5>Jony Lynetin</h5>
                  <h6>Hello</h6>
                </div>
                <div class="date-status">
                  <h6>30/11/23</h6>
                  <div class="badge badge-primary sm">8</div>
                </div>
              </div>
            </li>
            <li>
              <div class="chat-box">
                <div class="profile unreachable"><img class="bg-img" src="uiDesign/assets/images/contact/3.jpg" alt="Avatar"/></div>
                <div class="details">
                  <h5>Sufiya Elija</h5>
                  <h6>I need job, please help me.</h6>
                </div>
                <div class="date-status">
                  <h6>15/06/23</h6>
                  <h6 class="font-dark status"> Sending</h6>
                </div>
              </div>
            </li>
            <li>
              <div class="chat-box">
                <div class="profile online"><img class="bg-img" src="uiDesign/assets/images/contact/2.jpg" alt="Avatar"/></div>
                <div class="details">
                  <h5>Jony Lynetin</h5>
                  <h6>Hello</h6>
                </div>
                <div class="date-status">
                  <h6>30/11/23</h6>
                  <div class="badge badge-primary sm">8</div>
                </div>
              </div>
            </li>
            <li>
              <div class="chat-box">
                <div class="profile offline"><img class="bg-img" src="uiDesign/assets/images/contact/1.jpg" alt="Avatar"/></div>
                <div class="details">
                  <h5>Josephin water</h5>
                  <h6>Hi, i am josephin. How are you.. ! There are many variations of passages.</h6>
                </div>
                <div class="date-status">
                  <h6>22/10/23</h6>
                  <h6 class="font-success status"> Seen</h6>
                </div>
              </div>
            </li>
            <li>
              <div class="chat-box">
                <div class="profile online"><img class="bg-img" src="uiDesign/assets/images/contact/2.jpg" alt="Avatar"/></div>
                <div class="details">
                  <h5>Jony Lynetin</h5>
                  <h6>Hello</h6>
                </div>
                <div class="date-status">
                  <h6>30/11/23</h6>
                  <div class="badge badge-primary sm">8</div>
                </div>
              </div>
            </li>
            <li>
              <div class="chat-box">
                <div class="profile unreachable"><img class="bg-img" src="uiDesign/assets/images/contact/3.jpg" alt="Avatar"/></div>
                <div class="details">
                  <h5>Sufiya Elija</h5>
                  <h6>I need job, please help me.</h6>
                </div>
                <div class="date-status">
                  <h6>15/06/23</h6>
                  <h6 class="font-dark status"> Sending</h6>
                </div>
              </div>
            </li>
            <li>
              <div class="chat-box">
                <div class="profile busy"><img class="bg-img" src="uiDesign/assets/images/contact/4.jpg" alt="Avatar"/></div>
                <div class="details">
                  <h5>Pabelo Mukrani</h5>
                  <h6>Hi, i am josephin. How are you.. ! There are many variations of passages.</h6>
                </div>
                <div class="date-status">
                  <h6>04/06/23</h6>
                  <h6 class="font-danger status"> Failed</h6>
                </div>
              </div>
            </li>
            <li>
              <div class="chat-box">
                <div class="profile offline"><img class="bg-img" src="uiDesign/assets/images/contact/1.jpg" alt="Avatar"/></div>
                <div class="details">
                  <h5>Josephin water</h5>
                  <h6>Hi, i am josephin. How are you.. ! There are many variations of passages.</h6>
                </div>
                <div class="date-status">
                  <h6>22/10/23</h6>
                  <h6 class="font-success status"> Seen</h6>
                </div>
              </div>
            </li>
            <li>
              <div class="chat-box">
                <div class="profile online"><img class="bg-img" src="uiDesign/assets/images/contact/2.jpg" alt="Avatar"/></div>
                <div class="details">
                  <h5>Jony Lynetin</h5>
                  <h6>Hello</h6>
                </div>
                <div class="date-status">
                  <h6>30/11/23</h6>
                  <div class="badge badge-primary sm">8</div>
                </div>
              </div>
            </li>
            <li>
              <div class="chat-box">
                <div class="profile unreachable"><img class="bg-img" src="uiDesign/assets/images/contact/3.jpg" alt="Avatar"/></div>
                <div class="details">
                  <h5>Sufiya Elija</h5>
                  <h6>I need job, please help me.</h6>
                </div>
                <div class="date-status">
                  <h6>15/06/23</h6>
                  <h6 class="font-dark status"> Sending</h6>
                </div>
              </div>
            </li>
            <li>
              <div class="chat-box">
                <div class="profile online"><img class="bg-img" src="uiDesign/assets/images/contact/2.jpg" alt="Avatar"/></div>
                <div class="details">
                  <h5>Jony Lynetin</h5>
                  <h6>Hello</h6>
                </div>
                <div class="date-status">
                  <h6>30/11/23</h6>
                  <div class="badge badge-primary sm">8</div>
                </div>
              </div>
            </li>
          </ul>
        </div>
        <div class="notification-tab dynemic-sidebar custom-scroll" id="notification">
          <div class="theme-title">
            <div class="d-flex">
              <div> 
                <h2>Notification</h2>
                <h4>List of notification</h4>
              </div>
              <div class="flex-grow-1">  <a class="icon-btn btn-outline-light btn-sm close-panel" href="#"><i data-feather="x"></i></a></div>
            </div>
          </div>
          <ul class="chat-main">
            <li>
              <div class="chat-box notification">
                <div class="profile offline"><img class="bg-img" src="uiDesign/assets/images/contact/1.jpg" alt="Avatar"/></div>
                <div class="details"><span>Josephin water</span>
                  <h5>Upload New Photos</h5>
                  <p>Lorem Ipsum is simply dummy text of the printing.</p>
                </div>
                <div class="date-status">
                  <h6>Now</h6>
                </div>
              </div>
            </li>
            <li>
              <div class="chat-box notification">
                <div class="profile bg-success offline"><span>J</span></div>
                <div class="details"><span>Jony Today Birthday</span>
                  <h5>Upload New Photos</h5>
                  <p>Lorem Ipsum is simply dummy text of the printing.</p>
                </div>
                <div class="date-status">
                  <h6>1 hour ago</h6>
                </div>
              </div>
            </li>
            <li>
              <div class="chat-box notification">
                <div class="profile offline"><img class="bg-img" src="uiDesign/assets/images/contact/2.jpg" alt="Avatar"/></div>
                <div class="details"><span>Sufiya Elija</span>
                  <h5>Comment On your Photo</h5>
                  <p>Lorem Ipsum is simply dummy text of the printing.</p>
                </div>
                <div class="date-status">
                  <h6>5 hour ago</h6>
                </div>
              </div>
            </li>
            <li>
              <div class="chat-box notification">
                <div class="profile unreachable"><img class="bg-img" src="uiDesign/assets/images/contact/3.jpg" alt="Avatar"/></div>
                <div class="details"><span>Pabelo Mukrani</span>
                  <h5>Invite Your New Friend</h5>
                  <p>Lorem Ipsum is simply dummy text of the printing.</p>
                </div>
                <div class="date-status">
                  <h6>6 hour ago</h6>
                </div>
              </div>
            </li>
            <li>
              <div class="chat-box notification">
                <div class="profile bg-success offline"><span>PM</span></div>
                <div class="details"><span>Pabelo Mukrani</span>
                  <h5>Update Profile Picture</h5>
                  <p>Lorem Ipsum is simply dummy text of the printing.</p>
                </div>
                <div class="date-status">
                  <h6>6 hour ago</h6>
                </div>
              </div>
            </li>
          </ul>
        </div>
        <div class="settings-tab dynemic-sidebar custom-scroll" id="settings">
          <div class="theme-title">
            <div class="d-flex">
              <div> 
                <h2>Settings</h2>
                <h4>Change your app setting.</h4>
              </div>
              <div class="flex-grow-1"> <a class="icon-btn btn-outline-light btn-sm close-panel" href="#"><i data-feather="x"></i></a></div>
            </div>
            <div class="profile-box">
              <div class="d-flex">
                <div class="profile"><img class="bg-img" src="uiDesign/assets/images/contact/2.jpg" alt="Avatar"/></div>
                <div class="details">
                  <h5>Josephin water</h5>
                  <h6>Alabma , USA</h6>
                </div>
                <div class="details edit">
                  <form class="form-radious form-sm">
                    <div class="form-group mb-2">
                      <input class="form-control" type="text" name="username" value="Josephin water"/>
                    </div>
                    <div class="form-group mb-0">
                      <input class="form-control" type="text" name="address" value="Alabma , USA"/>
                    </div>
                  </form>
                </div>
                <div class="flex-grow-1"><a class="icon-btn btn-outline-light btn-sm pull-right edit-btn" href="#"> <i data-feather="edit">       </i></a></div>
              </div>
            </div>
          </div>
          <div class="setting-block">
            <div class="block">                  
              <div class="d-flex">
                <div class="flex-grow-1">
                  <h3>Account</h3>
                </div>
                <div class="media-right"><a class="icon-btn btn-outline-light btn-sm pull-right previous" href="#"> <i data-feather="chevron-left">                </i></a></div>
              </div>
              <div class="theme-according" id="accordion">
                <div class="card">
                  <div class="card-header" id="headingTwo" role="heading" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo"><a>Security<i class="fa fa-angle-down"></i></a></div>
                  <div class="collapse show" id="collapseTwo" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body">
                      <div class="d-flex">
                        <div class="flex-grow-1">
                          <h5>Show Security notification</h5>
                        </div>
                        <div class="media-right"> 
                          <input class="js-switch8" type="checkbox"/>
                        </div>
                      </div>
                      <p> <b>Note : </b>turn on this setting to recive notification when a contact's security code has been changes.</p>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingOne" role="heading" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne"><a>Privacy<i class="fa fa-angle-down"></i></a></div>
                  <div class="collapse" id="collapseOne" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                      <ul class="privacy">
                        <li> 
                          <h5>Last seen</h5>
                          <input class="js-switch10" type="checkbox" checked=""/>
                          <p> <b>Note : </b>turn on this setting to whether your contact can see last seen or not.</p>
                        </li>
                        <li> 
                          <h5>Profile Photo</h5>
                          <input class="js-switch11" type="checkbox"/>
                          <p>
                             turn on this setting to whether your contact can see your profile or not.</p>
                        </li>
                        <li> 
                          <h5>About</h5>
                          <input class="js-switch12" type="checkbox"/>
                          <p> <b>Note : </b>turn on this setting to whether your contact can see about status or not.</p>
                        </li>
                        <li> 
                          <h5>Status</h5>
                          <input class="js-switch14" type="checkbox"/>
                          <p> <b>Note : </b>turn on this setting to whether your contact can see your status or not.                          </p>
                        </li>
                        <li> 
                          <h5>Read receipts</h5>
                          <input class="js-switch16" type="checkbox"/>
                          <p> <b>Note : </b>If turn off this option you won't be able to see read recipts from contact. read receipts are always sent for group chats.                     </p>
                        </li>
                        <li> 
                          <h5>Groups</h5>
                          <input class="js-switch13" type="checkbox" checked=""/>
                          <p> <b>Note : </b>turn on this setting to whether your contact can add in groups or not.  </p>
                        </li>
                        <li> 
                          <h5>Screen Lock(Require Touch ID)</h5>
                          <input class="js-switch17" type="checkbox"/>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingThree" role="heading" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"><a>Two Step verification<i class="fa fa-angle-down"></i></a></div>
                  <div class="collapse" id="collapseThree" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">
                      <div class="d-flex">
                        <div class="flex-grow-1">
                          <h5>Enable</h5>
                        </div>
                        <div class="media-right"> 
                          <input class="js-switch9" type="checkbox"/>
                        </div>
                      </div>
                      <p> <b>Note : </b>For added security, enable two-step verifiation, which will require a PIN when registering your phone number with Chitchat again.</p>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingFour" role="heading" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour"><a>Change Number<i class="fa fa-angle-down"></i></a></div>
                  <div class="collapse" id="collapseFour" aria-labelledby="headingFour" data-parent="#accordion">
                    <div class="card-body change-number">
                      <h5>Your old country code & phone number</h5>
                      <div class="input-group">
                        <div class="input-group-prepend"><span class="input-group-text form-control m-0">+</span></div>
                        <input class="form-control country-code" type="number" placeholder="01"/>
                        <input class="form-control" type="number" placeholder="1234567895"/>
                      </div>
                      <h5>Your new country code & phone number</h5>
                      <div class="input-group">
                        <div class="input-group-prepend"><span class="input-group-text form-control m-0">+</span></div>
                        <input class="form-control country-code" type="number" placeholder="01"/>
                        <input class="form-control" type="number" placeholder=""/>
                      </div>
                      <div class="text-end">  <a class="btn btn-outline-primary button-effect btn-sm" href="#">confirm</a></div>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingFive" role="heading" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive"><a>Request account info<i class="fa fa-angle-down"></i></a></div>
                  <div class="collapse" id="collapseFive" aria-labelledby="headingFive" data-parent="#accordion">
                    <div class="card-body"><a class="p-0 req-info" id="demo" href="#" onclick="document.getElementById(&quot;demo&quot;).innerHTML = &quot;Request sent&quot;">Request Info                            </a>
                      <p> <b>Note : </b>Create a report of your account information and settings, which you can access ot port to another app.</p>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingSix" role="heading" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix"><a>Delete My account<i class="fa fa-angle-down"></i></a></div>
                  <div class="collapse" id="collapseSix" aria-labelledby="headingSix" data-parent="#accordion">
                    <div class="card-body"><a class="p-0 req-info font-danger" href="#">Delete Account                            </a>
                      <p> <b>Note :</b>Deleting your account will delete your account info, profile photo, all groups & chat history.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="d-flex">
              <div class="flex-grow-1">
                <h3>Account</h3>
                <h4>Update Your Account Details</h4>
              </div>
              <div class="media-right"> <a class="icon-btn btn-outline-light btn-sm pull-right next" href="#"> <i data-feather="chevron-right">       </i></a></div>
            </div>
          </div>
          <div class="setting-block">
            <div class="block">                  
              <div class="d-flex">
                <div class="flex-grow-1">
                  <h3>Chat</h3>
                </div>
                <div class="media-right"><a class="icon-btn btn-outline-light btn-sm pull-right previous" href="#"> <i data-feather="chevron-left"> </i></a></div>
              </div>
              <ul class="help">
                <li>
                  <h5>Chat Backup</h5>
                  <ul class="switch-list">
                    <li>
                      <input class="js-switch5" type="checkbox" checked=""/>
                      <h5>Auto Backup</h5>
                    </li>
                    <li>
                      <input class="js-switch6" type="checkbox"/>
                      <h5>Include document</h5>
                    </li>
                    <li>
                      <input class="js-switch7" type="checkbox"/>
                      <h5>Include Videos</h5>
                    </li>
                  </ul>
                </li>
                <li>
                  <h5>Chat wallpaper</h5>
                  <ul class="wallpaper">
                    <li><img class="bg-img" src="uiDesign/assets/images/wallpaper/2.jpg" alt="Avatar"/></li>
                    <li><img class="bg-img" src="uiDesign/assets/images/wallpaper/1.jpg" alt="Avatar"/></li>
                    <li><img class="bg-img" src="uiDesign/assets/images/wallpaper/3.jpg" alt="Avatar"/></li>
                    <li><img class="bg-img" src="uiDesign/assets/images/wallpaper/4.jpg" alt="Avatar"/></li>
                    <li><img class="bg-img" src="uiDesign/assets/images/wallpaper/5.jpg" alt="Avatar"/></li>
                    <li><img class="bg-img" src="uiDesign/assets/images/wallpaper/6.jpg" alt="Avatar"/></li>
                  </ul>
                </li>
                <li>
                  <h5> <a href="#">Archive all chat</a></h5>
                </li>
                <li>
                  <h5> <a href="#"> Clear all chats</a></h5>
                </li>
                <li>
                  <h5> <a class="font-danger" href="#">Delete all chats</a></h5>
                </li>
              </ul>
            </div>
            <div class="d-flex">
              <div class="flex-grow-1">
                <h3>Chat</h3>
                <h4>Control Your Chat Backup</h4>
              </div>
              <div class="media-right"> <a class="icon-btn btn-outline-light btn-sm pull-right next" href="#"> <i data-feather="chevron-right">     </i></a></div>
            </div>
          </div>
          <div class="setting-block">
            <div class="block">                  
              <div class="d-flex">
                <div class="flex-grow-1">
                  <h3>Integratin</h3>
                </div>
                <div class="media-right"> <a class="icon-btn btn-outline-light btn-sm pull-right previous" href="#"> <i data-feather="chevron-left"> </i></a></div>
              </div>
              <ul class="integratin">
                <li>
                  <div class="d-flex">
                    <div class="media-left"> <a class="fb" href="https://www.facebook.com/login" target="_blank"><i class="fa fa-facebook"></i>
                        <h5>Facebook   </h5></a></div>
                    <div class="media-right">
                      <div class="profile"><img class="bg-img" src="uiDesign/assets/images/contact/1.jpg" alt="Avatar"/></div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="d-flex">
                    <div class="media-left"> <a class="insta" href="https://www.instagram.com/accounts/login/?hl=en" target="_blank"><i class="fa fa-instagram"></i>
                        <h5>instagram</h5></a></div>
                    <div class="media-right">
                      <div class="profile"><img class="bg-img" src="uiDesign/assets/images/contact/2.jpg" alt="Avatar"/></div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="d-flex">
                    <div class="media-left"> <a class="twi" href="https://twitter.com/login" target="_blank"><i class="fa fa-twitter"></i>
                        <h5>twitter   </h5></a></div>
                    <div class="media-right">
                      <div class="profile"><img class="bg-img" src="uiDesign/assets/images/contact/3.jpg" alt="Avatar"/></div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="d-flex">
                    <div class="media-left"> <a class="ggl" href="https://accounts.google.com/signin/v2/identifier?service=mail&amp;passive=true&amp;rm=false&amp;continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&amp;ss=1&amp;scc=1&amp;ltmpl=default&amp;ltmplcache=2&amp;emr=1&amp;osid=1&amp;flowName=GlifWebSignIn&amp;flowEntry=ServiceLogin" target="_blank"><i class="fa fa-google"></i>
                        <h5>google   </h5></a></div>
                    <div class="media-right">
                      <div class="profile"><img class="bg-img" src="uiDesign/assets/images/contact/2.jpg" alt="Avatar"/></div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="d-flex">
                    <div class="media-left"> <a class="slc" href="#"><i class="fa fa-slack"></i>
                        <h5>Slack   </h5></a></div>
                    <div class="media-right">
                      <div class="profile"><a href="https://slack.com/get-started#/" target="_blank"><i data-feather="plus-circle"></i></a></div>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
            <div class="d-flex">
              <div class="flex-grow-1">
                <h3>Integratin</h3>
                <h4>Sync Your Other Social Account</h4>
              </div>
              <div class="media-right"> <a class="icon-btn btn-outline-light btn-sm pull-right next" href="#"> <i data-feather="chevron-right">       </i></a></div>
            </div>
          </div>
          <div class="setting-block">
            <div class="block">                  
              <div class="d-flex">
                <div class="flex-grow-1">
                  <h3>Help</h3>
                </div>
                <div class="media-right"> <a class="icon-btn btn-outline-light btn-sm pull-right previous" href="#"> <i data-feather="chevron-left"> </i></a></div>
              </div>
              <ul class="help">
                <li>
                  <h5> <a href="#">FAQ</a></h5>
                </li>
                <li>
                  <h5> <a href="#"> Contact Us</a></h5>
                </li>
                <li>
                  <h5> <a href="#">Terms and Privacy Policy</a></h5>
                </li>
                <li>
                  <h5> <a href="#">Licenses</a></h5>
                </li>
                <li> 
                  <h5> <a href="#">2023 - 20 Powered by Pixelstrap</a></h5>
                </li>
              </ul>
            </div>
            <div class="d-flex">
              <div class="flex-grow-1">
                <h3>Help</h3>
                <h4>You are Confusion, Tell me</h4>
              </div>
              <div class="media-right"> <a class="icon-btn btn-outline-light btn-sm pull-right next" href="#"> <i data-feather="chevron-right"></i></a></div>
            </div>
          </div>
        </div>
        <div class="status-tab custom-scroll dynemic-sidebar" id="status">
          <div class="my-status-box">
            <div class="status-content">
              <div class="d-flex">
                <div class="img-status">
                  <div class="user-status two"><img class="img-fluid bg-img" src="uiDesign/assets/images/avtar/girls.jpg" alt="status"/></div>
                  <div class="upload-img">
                    <input type="file"/>
                  </div>
                </div>
                <div class="flex-grow-1">
                  <h3>my status</h3>
                  <p>tap to add status Update</p>
                </div>
                <div><a class="icon-btn btn-outline-light btn-sm close-panel" href="#"><i data-feather="x"></i></a></div>
              </div>
            </div>
          </div>
          <div class="contact-status-box">
            <div class="theme-title">
              <h3>Recent Update</h3>
            </div>
            <div class="status-content">
              <ul>
                <li class="user-status"><a class="lightbox img-status status" href="#statusbox"><img class="img-fluid bg-img" src="uiDesign/assets/images/status-img/small/sm-1.jpg" alt="status"/></a>
                  <div class="lightbox-target" id="statusbox"><img src="uiDesign/assets/images/status-img/large/lg-1.jpg" alt="status"/><a class="lightbox-close" href="#"></a></div>
                </li>
                <li>
                  <h5>Josephin water</h5>
                  <p>today , 8:30am</p>
                </li>
              </ul>
            </div>
            <div class="status-content">
              <ul>
                <li class="user-status"><a class="lightbox img-status status" href="#statusbox2"><img class="img-fluid bg-img" src="uiDesign/assets/images/status-img/small/sm-2.jpg" alt="status"/></a>
                  <div class="lightbox-target" id="statusbox2"><img src="uiDesign/assets/images/status-img/large/lg-2.jpg" alt="status"/><a class="lightbox-close" href="#"></a></div>
                </li>
                <li>
                  <h5>Jony Lynetin</h5>
                  <p>today , 10:30am</p>
                </li>
              </ul>
            </div>
            <div class="status-content">
              <ul>
                <li class="user-status"><a class="lightbox img-status status" href="#statusbox3"><img class="img-fluid bg-img" src="uiDesign/assets/images/status-img/small/sm-3.jpg" alt="status"/></a>
                  <div class="lightbox-target" id="statusbox3"><img src="uiDesign/assets/images/status-img/large/lg-3.jpg" alt="status"/><a class="lightbox-close" href="#"></a></div>
                </li>
                <li>
                  <h5>Sufiya Elija</h5>
                  <p>today , 11:00am</p>
                </li>
              </ul>
            </div>
            <div class="status-content">
              <ul>
                <li class="user-status"><a class="lightbox img-status status" href="#statusbox4"><img class="img-fluid bg-img" src="uiDesign/assets/images/status-img/small/sm-4.jpg" alt="status"/></a>
                  <div class="lightbox-target" id="statusbox4"><img src="uiDesign/assets/images/status-img/large/lg-4.jpg" alt="status"/><a class="lightbox-close" href="#"></a></div>
                </li>
                <li>
                  <h5>Mukrani Pabelo </h5>
                  <p>today , 9:55am</p>
                </li>
              </ul>
            </div>
            <div class="status-content">
              <ul>
                <li class="user-status"><a class="lightbox img-status status" href="#statusbox5"><img class="img-fluid bg-img" src="uiDesign/assets/images/status-img/small/sm-5.jpg" alt="status"/></a>
                  <div class="lightbox-target" id="statusbox5"><img src="uiDesign/assets/images/status-img/large/lg-5.jpg" alt="status"/><a class="lightbox-close" href="#"></a></div>
                </li>
                <li>
                  <h5>Pabelo Mukrani</h5>
                  <p>today , 12:05am</p>
                </li>
              </ul>
            </div>
            <div class="status-content">
              <ul>
                <li class="user-status"><a class="lightbox img-status status" href="#statusbox6"><img class="img-fluid bg-img" src="uiDesign/assets/images/status-img/small/sm-3.jpg" alt="status"/></a>
                  <div class="lightbox-target" id="statusbox6"><img src="uiDesign/assets/images/status-img/large/lg-3.jpg" alt="status"/><a class="lightbox-close" href="#"></a></div>
                </li>
                <li>
                  <h5>Sufiya Elija</h5>
                  <p>today , 11:00am</p>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </aside>
      <div class="chitchat-main small-sidebar" id="content">
        <div class="chat-content tabto active">
          <div class="messages custom-scroll active" id="chating">
            <div class="contact-details">
              <div class="row">
                <form class="form-inline search-form">
                  <div class="form-group">
                    <input class="form-control-plaintext" type="search" placeholder="Search.."/>
                    <div class="icon-close close-search"> <i data-feather="x">   </i></div>
                  </div>
                </form>
                <div class="col-7">
                  <div class="d-flex left">
                    <div class="media-left">
                      <div class="profile online menu-trigger"><img class="bg-img" src="uiDesign/assets/images/contact/2.jpg" alt="Avatar"/></div>
                    </div>
                    <div class="flex-grow-1">
                      <h5 class="mb-0">Josephin water</h5>
                      <div class="badge badge-success">Active</div>
                    </div>
                    <div class="media-right">
                      <ul>
                        <li><a class="icon-btn btn-light button-effect mute" href="#"><i class="fa fa-volume-up"></i></a></li>
                        <li><a class="icon-btn btn-light search-right" href="#"><i data-feather="search"></i></a></li>
                        <li><a class="icon-btn btn-light button-effect mobile-sidebar" href="#"><i data-feather="chevron-left"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col px-0">
                  <ul class="calls text-end">
                    <li><a class="icon-btn btn-light button-effect" href="#" data-tippy-content="Quick Audio Call" data-bs-toggle="modal" data-bs-target="#audiocall"><i data-feather="phone"></i></a></li>
                    <li><a class="icon-btn btn-light button-effect" href="#" data-tippy-content="Quick Video Call" data-bs-toggle="modal" data-bs-target="#videocall"><i data-feather="video"></i></a></li>
                    <!-- <li><a class="icon-btn btn-light button-effect apps-toggle" href="#" data-tippy-content="All Apps"><i class="ti-layout-grid2"></i></a></li> -->
                    <li class="chat-friend-toggle"><a class="icon-btn btn-light bg-transparent button-effect outside" href="#" data-tippy-content="Quick action"><i data-feather="more-vertical"></i></a>
                      <div class="chat-frind-content">
                        <ul>
                          <li><a class="icon-btn btn-outline-primary button-effect btn-sm" href="#"><i data-feather="user"></i></a>
                            <h5>Profile</h5>
                          </li>
                          <li><a class="icon-btn btn-outline-success button-effect btn-sm" href="#"><i data-feather="plus-circle"></i></a>
                            <h5>Archive</h5>
                          </li>
                          <li><a class="icon-btn btn-outline-danger button-effect btn-sm" href="#"><i data-feather="trash-2"></i></a>
                            <h5>Delete</h5>
                          </li>
                          <li><a class="icon-btn btn-outline-light button-effect btn-sm" href="#"><i data-feather="slash"></i></a>
                            <h5>Block</h5>
                          </li>
                        </ul>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="contact-chat">
              <ul class="chatappend">
                <li class="replies">
                  <div class="d-flex">
                    <div class="profile"><img class="bg-img" src="uiDesign/assets/images/contact/2.jpg" alt="Avatar"/></div>
                    <div class="flex-grow-1">
                      <div class="contact-name">
                        <h5>Alan josheph</h5>
                        <h6>01:40 AM</h6>
                        <ul class="msg-box">
                          <li class="msg-setting-main">
                            <div class="msg-dropdown-main">
                              <div class="msg-setting"><i class="ti-more-alt"></i></div>
                              <div class="msg-dropdown"> 
                                <ul>
                                  <li><a href="#"><i class="fa fa-share"></i>forward</a></li>
                                  <li><a href="#"><i class="fa fa-clone"></i>copy</a></li>
                                  <li><a href="#"><i class="fa fa-star-o"></i>rating</a></li>
                                  <li><a href="#"><i class="ti-trash"></i>delete</a></li>
                                </ul>
                              </div>
                            </div>
                            <h5>Hi I am Alan,</h5>
                          </li>
                          <li class="msg-setting-main">
                            <h5> your personal assistant to help you &#128512; </h5>
                            <div class="badge badge-success sm ms-2"> R</div>
                            <div class="msg-dropdown-main">
                              <div class="msg-setting"><i class="ti-more-alt"></i></div>
                              <div class="msg-dropdown"> 
                                <ul>
                                  <li><a href="#"><i class="fa fa-share"></i>forward</a></li>
                                  <li><a href="#"><i class="fa fa-clone"></i>copy</a></li>
                                  <li><a href="#"><i class="fa fa-star-o"></i>rating</a></li>
                                  <li><a href="#"><i class="ti-trash"></i>delete</a></li>
                                </ul>
                              </div>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="sent">
                  <div class="d-flex">
                    <div class="profile"><img class="bg-img" src="uiDesign/assets/images/contact/2.jpg" alt="Avatar"/></div>
                    <div class="flex-grow-1">
                      <div class="contact-name">
                        <h5>Josephin water</h5>
                        <h6>01:35 AM</h6>
                        <ul class="msg-box">
                          <li class="msg-setting-main">
                            <h5>Hi I am Josephin, can you help me to find best chat app?. </h5>
                            <div class="msg-dropdown-main">
                              <div class="msg-setting"><i class="ti-more-alt"></i></div>
                              <div class="msg-dropdown"> 
                                <ul>
                                  <li><a href="#"><i class="fa fa-share"></i>forward</a></li>
                                  <li><a href="#"><i class="fa fa-clone"></i>copy</a></li>
                                  <li><a href="#"><i class="fa fa-star-o"></i>rating</a></li>
                                  <li><a href="#"><i class="ti-trash"></i>delete</a></li>
                                </ul>
                              </div>
                            </div>
                          </li>
  

                          <li class="msg-setting-main">
                            <h5> it should from elite auther &#128519;</h5>
                            <div class="badge badge-success sm mx-2"> R</div>
                            <div class="msg-dropdown-main">
                              <div class="msg-setting"><i class="ti-more-alt"></i></div>
                              <div class="msg-dropdown"> 
                                <ul>
                                  <li><a href="#"><i class="fa fa-share"></i>forward</a></li>
                                  <li><a href="#"><i class="fa fa-clone"></i>copy</a></li>
                                  <li><a href="#"><i class="fa fa-star-o"></i>rating</a></li>
                                  <li><a href="#"><i class="ti-trash"></i>delete</a></li>
                                </ul>
                              </div>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </li>



                
               
              </ul>
            </div>
          </div>
          <div class="messages custom-scroll" id="blank">
            <div class="contact-details">
              <div class="row">
                <div class="col">
                  <div class="d-flex left">
                    <div class="media-left me-3">
                      <div class="profile online menu-trigger"><img class="bg-img" src="uiDesign/assets/images/contact/2.jpg" alt="Avatar"/></div>
                    </div>
                    <div class="flex-grow-1">
                      <h5>Josephin water</h5>
                      <h6>Last Seen 5 hours</h6>
                    </div>
                    <div class="media-right">
                      <ul>
                        <li><a class="icon-btn btn-light button-effect mute" href="#"><i class="fa fa-volume-up"></i></a></li>
                        <li><a class="icon-btn btn-light search search-right" href="#"> <i data-feather="search"></i></a>
                          <form class="form-inline search-form">
                            <div class="form-group">
                              <input class="form-control-plaintext" type="search" placeholder="Search.."/>
                              <div class="icon-close close-search"> <i data-feather="x"></i></div>
                            </div>
                          </form>
                        </li>
                        <li><a class="icon-btn btn-light button-effect mobile-sidebar" href="#"><i data-feather="chevron-left"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col"> 
                  <ul class="calls text-end">
                    <li><a class="icon-btn btn-light button-effect" href="#" data-tippy-content="Quick Audio Call" data-bs-toggle="modal" data-bs-target="#audiocall"><i data-feather="phone"></i></a></li>
                    <li><a class="icon-btn btn-light button-effect" href="#" data-tippy-content="Quick Video Call" data-bs-toggle="modal" data-bs-target="#videocall"><i data-feather="video"></i></a></li>
                    <li><a class="icon-btn btn-light button-effect apps-toggle" href="#" data-tippy-content="All Apps"><i class="ti-layout-grid2"></i></a></li>
                    <li class="chat-friend-toggle"><a class="icon-btn btn-light bg-transparent button-effect outside" href="#" data-tippy-content="Quick action"><i data-feather="more-vertical"></i></a>
                      <div class="chat-frind-content">
                        <ul>
                          <li><a class="icon-btn btn-outline-primary button-effect btn-sm" href="#"><i data-feather="user"></i></a>
                            <h5>profile</h5>
                          </li>
                          <li><a class="icon-btn btn-outline-success button-effect btn-sm" href="#"><i data-feather="plus-circle"></i></a>
                            <h5>archive</h5>
                          </li>
                          <li><a class="icon-btn btn-outline-danger button-effect btn-sm" href="#"><i data-feather="trash-2"></i></a>
                            <h5>delete</h5>
                          </li>
                          <li><a class="icon-btn btn-outline-light button-effect btn-sm" href="#"><i data-feather="slash"></i></a>
                            <h5>block</h5>
                          </li>
                        </ul>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="contact-chat">
              <div class="rightchat animat-rate">
                <div class="bg_circle">
                  <div></div>
                  <div></div>
                  <div></div>
                  <div></div>
                  <div></div>
                  <div></div>
                  <div></div>
                  <div></div>
                  <div></div>
                  <div></div>
                  <div></div>
                </div>
                <div class="cross"></div>
                <div class="cross1"></div>
                <div class="cross2"></div>
                <div class="dot"></div>
                <div class="dot1"> </div>
              </div>
            </div>
            <div class="call-list-center"><img src="uiDesign/assets/images/chat.png" alt=""/>
              <div class="animated-bg"><i></i><i></i><i></i></div>
              <p>Select a chat to read messages</p>
            </div>
          </div>
          <div class="messages custom-scroll" id="group_chat">
            <div class="contact-details">
              <div class="row">
                <div class="col">
                  <div class="d-flex left">
                    <div class="media-left me-3">
                      <div class="profile online menu-trigger"><img class="bg-img" src="uiDesign/assets/images/avtar/teq.jpg" alt="Avatar"/></div>
                    </div>
                    <div class="flex-grow-1">
                      <h5>Tech Ninjas</h5>
                      <div class="badge badge-success">Active</div>
                    </div>
                    <div class="media-right">
                      <ul>
                        <li><a class="icon-btn btn-light button-effect mute" href="#"><i class="fa fa-volume-up"></i></a></li>
                        <li><a class="icon-btn btn-light search search-right" href="#"> <i data-feather="search"></i></a>
                          <form class="form-inline search-form">
                            <div class="form-group">
                              <input class="form-control-plaintext" type="search" placeholder="Search.."/>
                              <div class="icon-close close-search"><i data-feather="x"></i></div>
                            </div>
                          </form>
                        </li>
                        <li><a class="icon-btn btn-light button-effect mobile-sidebar" href="#"><i data-feather="chevron-left"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col"> 
                  <ul class="calls text-end">
                    <li><a class="icon-btn btn-light button-effect" href="#" data-tippy-content="Start Audio Conference" data-bs-toggle="modal" data-bs-target="#confercall"><i data-feather="phone"></i></a></li>
                    <li><a class="icon-btn btn-light button-effect" href="#" data-tippy-content="Start Video Conference" data-bs-toggle="modal" data-bs-target="#confvideocl"><i data-feather="video"></i></a></li>
                    <li><a class="icon-btn btn-light button-effect apps-toggle" href="#" data-tippy-content="All Apps"><i class="ti-layout-grid2"></i></a></li>
                    <li class="chat-friend-toggle"><a class="icon-btn btn-light bg-transparent button-effect outside" href="#" data-tippy-content="Quick action"></a>
                      <div class="chat-frind-content">
                        <ul>
                          <li><a class="icon-btn btn-outline-primary button-effect btn-sm" href="#"><i data-feather="user"></i></a>
                            <h5>profile</h5>
                          </li>
                          <li><a class="icon-btn btn-outline-success button-effect btn-sm" href="#"><i data-feather="plus-circle"></i></a>
                            <h5>archive</h5>
                          </li>
                          <li><a class="icon-btn btn-outline-danger button-effect btn-sm" href="#"><i data-feather="trash-2"></i></a>
                            <h5>delete</h5>
                          </li>
                          <li><a class="icon-btn btn-outline-light button-effect btn-sm" href="#"><i data-feather="slash"></i></a>
                            <h5>block</h5>
                          </li>
                        </ul>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="contact-chat">
              <ul class="chatappend">
                <li class="groupuser">
                  <h4>Jewellery project</h4>
                  <div class="gr-chat-friend-toggle"><a class="icon-btn btn-sm pull-right add-grbtn outside" href="#" data-tippy-content="Add User"><i data-feather="plus"></i></a>
                    <div class="gr-chat-frind-content">
                      <ul class="chat-main">
                        <li>
                          <div class="chat-box">
                            <div class="d-flex">
                              <div class="profile offline"><img class="bg-img" src="uiDesign/assets/images/contact/1.jpg" alt="Avatar"/></div>
                              <div class="details">
                                <h5>Josephin water</h5>
                                <h6>Alabma , USA</h6>
                              </div>
                              <div class="flex-grow-1"><a class="icon-btn btn-outline-primary btn-sm" href="#" data-tippy-content="Add User"><i class="fa fa-plus"></i></a></div>
                            </div>
                          </div>
                        </li>
                        <li>
                          <div class="chat-box">
                            <div class="d-flex">
                              <div class="profile"><img class="bg-img" src="uiDesign/assets/images/contact/2.jpg" alt="Avatar"/></div>
                              <div class="details">
                                <h5>Josephin water</h5>
                                <h6>Alabma , USA</h6>
                              </div>
                              <div class="flex-grow-1"><a class="icon-btn btn-outline-primary btn-sm" href="#" data-tippy-content="Add User"><i class="fa fa-plus"></i></a></div>
                            </div>
                          </div>
                        </li>
                        <li>
                          <div class="chat-box">
                            <div class="d-flex">
                              <div class="profile"><img class="bg-img" src="uiDesign/assets/images/contact/3.jpg" alt="Avatar"/></div>
                              <div class="details">
                                <h5>Josephin water</h5>
                                <h6>Alabma , USA</h6>
                              </div>
                              <div class="flex-grow-1"><a class="icon-btn btn-outline-primary btn-sm" href="#" data-tippy-content="Add User"><i class="fa fa-plus"></i></a></div>
                            </div>
                          </div>
                        </li>
                        <li>
                          <div class="chat-box">
                            <div class="d-flex">
                              <div class="profile unreachable"><img class="bg-img" src="uiDesign/assets/images/contact/4.jpg" alt="Avatar"/></div>
                              <div class="details">
                                <h5>Josephin water</h5>
                                <h6>Alabma , USA</h6>
                              </div>
                              <div class="flex-grow-1"><a class="icon-btn btn-outline-primary btn-sm" href="#" data-tippy-content="Add User"><i class="fa fa-plus"></i></a></div>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="gr-profile dot-btn dot-success grow"><img class="bg-img" src="uiDesign/assets/images/avtar/3.jpg" alt="Avatar"/></div>
                  <div class="gr-profile dot-btn dot-success grow"><img class="bg-img" src="uiDesign/assets/images/avtar/5.jpg" alt="Avatar"/></div>
                </li>
                <li class="sent">
                  <div class="d-flex">
                    <div class="profile"><img class="bg-img" src="uiDesign/assets/images/contact/2.jpg" alt="Avatar"/></div>
                    <div class="flex-grow-1">
                      <div class="contact-name">
                        <h5>Josephin water</h5>
                        <h6>01:35 AM</h6>
                        <ul class="msg-box">
                          <li class="msg-setting-main">
                            <h5>Hi I am Josephin, can you help me to find best chat app?. </h5>
                            <div class="msg-dropdown-main">
                              <div class="msg-setting"><i class="ti-more-alt"></i></div>
                              <div class="msg-dropdown"> 
                                <ul>
                                  <li><a href="#"><i class="fa fa-share"></i>forward</a></li>
                                  <li><a href="#"><i class="fa fa-clone"></i>copy</a></li>
                                  <li><a href="#"><i class="fa fa-star-o"></i>rating</a></li>
                                  <li><a href="#"><i class="ti-trash"></i>delete</a></li>
                                </ul>
                              </div>
                            </div>
                          </li>
                          <li class="msg-setting-main">
                            <h5> it should from elite auther &#128519;</h5>
                            <div class="badge badge-success sm mx-2"> R</div>
                            <div class="msg-dropdown-main">
                              <div class="msg-setting"><i class="ti-more-alt"></i></div>
                              <div class="msg-dropdown"> 
                                <ul>
                                  <li><a href="#"><i class="fa fa-share"></i>forward</a></li>
                                  <li><a href="#"><i class="fa fa-clone"></i>copy</a></li>
                                  <li><a href="#"><i class="fa fa-star-o"></i>rating</a></li>
                                  <li><a href="#"><i class="ti-trash"></i>delete</a></li>
                                </ul>
                              </div>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="replies">
                  <div class="d-flex">
                    <div class="profile"><img class="bg-img" src="uiDesign/assets/images/avtar/1.jpg" alt="Avatar"/></div>
                    <div class="flex-grow-1">
                      <div class="contact-name">
                        <h5>Alan josheph</h5>
                        <h6>01:40 AM</h6>
                        <ul class="msg-box">
                          <li class="msg-setting-main">
                            <div class="msg-dropdown-main">
                              <div class="msg-setting"><i class="ti-more-alt"></i></div>
                              <div class="msg-dropdown"> 
                                <ul>
                                  <li><a href="#"><i class="fa fa-share"></i>forward</a></li>
                                  <li><a href="#"><i class="fa fa-clone"></i>copy</a></li>
                                  <li><a href="#"><i class="fa fa-star-o"></i>rating</a></li>
                                  <li><a href="#"><i class="ti-trash"></i>delete</a></li>
                                </ul>
                              </div>
                            </div>
                            <h5>Sure, chitchat is best theme for chating project, you can it check<a class="ms-1" href="https://themeforest.net/user/pixelstrap/portfolio" target="_blank">here.</a></h5>
                          </li>
                          <li class="msg-setting-main">
                            <div class="msg-dropdown-main">
                              <div class="msg-setting"><i class="ti-more-alt"></i></div>
                              <div class="msg-dropdown"> 
                                <ul>
                                  <li><a href="#"><i class="fa fa-share"></i>forward</a></li>
                                  <li><a href="#"><i class="fa fa-clone"></i>copy</a></li>
                                  <li><a href="#"><i class="fa fa-star-o"></i>rating</a></li>
                                  <li><a href="#"><i class="ti-trash"></i>delete</a></li>
                                </ul>
                              </div>
                            </div>
                            <div class="document"><i class="fa fa-file-excel-o font-primary"></i>
                              <div class="details">
                                <h5>Document.xlsx</h5>
                                <h6>25mb Seprate file</h6>
                              </div>
                              <div class="icon-btns"><a class="icon-btn btn-outline-light" href="uiDesign/assets/doc/Document.xlsx" target="_blank"><i data-feather="download"> </i></a></div>
                            </div>
                            <div class="badge badge-dark sm ms-2"> D</div>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="sent">
                  <div class="d-flex">
                    <div class="profile"><img class="bg-img" src="uiDesign/assets/images/contact/2.jpg" alt="Avatar"/></div>
                    <div class="flex-grow-1">
                      <div class="contact-name">
                        <h5>Josephin water</h5>
                        <h6>01:42 AM</h6>
                        <ul class="msg-box">
                          <li class="msg-setting-main">
                            <h5>I think it's best for my project.</h5>
                            <div class="msg-dropdown-main">
                              <div class="msg-setting"><i class="ti-more-alt"></i></div>
                              <div class="msg-dropdown"> 
                                <ul>
                                  <li><a href="#"><i class="fa fa-share"></i>forward</a></li>
                                  <li><a href="#"><i class="fa fa-clone"></i>copy</a></li>
                                  <li><a href="#"><i class="fa fa-star-o"></i>rating</a></li>
                                  <li><a href="#"><i class="ti-trash"></i>delete</a></li>
                                </ul>
                              </div>
                            </div>
                          </li>
                          <li class="msg-setting-main">
                            <ul class="auto-gallery">
                              <li><img class="bg-img" src="uiDesign/assets/images/media/1.jpg" alt="Avatar"/></li>
                              <li>   <img class="bg-img" src="uiDesign/assets/images/media/2.jpg" alt="Avatar"/></li>
                              <li>   <img class="bg-img" src="uiDesign/assets/images/media/3.jpg" alt="Avatar"/></li>
                            </ul>
                            <div class="badge badge-danger sm ms-2"></div>
                            <div class="badge badge-outline-primary refresh sm ms-2"> <i data-feather="rotate-cw"></i></div>
                            <div class="msg-dropdown-main">
                              <div class="msg-setting"><i class="ti-more-alt"></i></div>
                              <div class="msg-dropdown"> 
                                <ul>
                                  <li><a href="#"><i class="fa fa-share"></i>forward</a></li>
                                  <li><a href="#"><i class="fa fa-clone"></i>copy</a></li>
                                  <li><a href="#"><i class="fa fa-star-o"></i>rating</a></li>
                                  <li><a href="#"><i class="ti-trash"></i>delete</a></li>
                                </ul>
                              </div>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="replies">
                  <div class="d-flex">
                    <div class="profile"><img class="bg-img" src="uiDesign/assets/images/avtar/1.jpg" alt="Avatar"/></div>
                    <div class="flex-grow-1">
                      <div class="contact-name">
                        <h5>Alan josheph</h5>
                        <h6>01:45 AM</h6>
                        <ul class="msg-box">
                          <li class="msg-setting-main">
                            <div class="msg-dropdown-main">
                              <div class="msg-setting"><i class="ti-more-alt"></i></div>
                              <div class="msg-dropdown"> 
                                <ul>
                                  <li><a href="#"><i class="fa fa-share"></i>forward</a></li>
                                  <li><a href="#"><i class="fa fa-clone"></i>copy</a></li>
                                  <li><a href="#"><i class="fa fa-star-o"></i>rating</a></li>
                                  <li><a href="#"><i class="ti-trash"></i>delete</a></li>
                                </ul>
                              </div>
                            </div>
                            <h5>If you have any other query then feel free to ask us.</h5>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <div class="messages custom-scroll" id="group_blank">
            <div class="contact-details">
              <div class="row">
                <div class="col">
                  <div class="d-flex left">
                    <div class="media-left me-3">
                      <div class="profile online menu-trigger"><img class="bg-img" src="uiDesign/assets/images/avtar/family.jpg" alt="Avatar"/></div>
                    </div>
                    <div class="flex-grow-1">
                      <h5>Family Ties</h5>
                      <h6>Last Seen 2 hours</h6>
                    </div>
                    <div class="media-right">
                      <ul>
                        <li><a class="icon-btn btn-light button-effect mute" href="#"><i class="fa fa-volume-up"></i></a></li>
                        <li><a class="icon-btn btn-light search search-right" href="#"> <i data-feather="search"></i></a>
                          <form class="form-inline search-form">
                            <div class="form-group">
                              <input class="form-control-plaintext" type="search" placeholder="Search.."/>
                              <div class="icon-close close-search"> <i data-feather="x"></i></div>
                            </div>
                          </form>
                        </li>
                        <li><a class="icon-btn btn-light button-effect mobile-sidebar" href="#"><i data-feather="chevron-left"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col"> 
                  <ul class="calls text-end">
                    <li><a class="icon-btn btn-light button-effect" href="#" data-tippy-content="Quick Audio Call" data-bs-toggle="modal" data-bs-target="#confercall"><i data-feather="phone"></i></a></li>
                    <li><a class="icon-btn btn-light button-effect" href="#" data-tippy-content="Quick Video Call" data-bs-toggle="modal" data-bs-target="#confvideocl"><i data-feather="video"></i></a></li>
                    <li><a class="icon-btn btn-light button-effect apps-toggle" href="#" data-tippy-content="All Apps"><i class="ti-layout-grid2"></i></a></li>
                    <li class="chat-friend-toggle"><a class="icon-btn btn-light bg-transparent button-effect outside" href="#" data-tippy-content="Quick action"><i data-feather="more-vertical"></i></a>
                      <div class="chat-frind-content">
                        <ul>
                          <li><a class="icon-btn btn-outline-primary button-effect btn-sm" href="#"><i data-feather="user"></i></a>
                            <h5>profile</h5>
                          </li>
                          <li><a class="icon-btn btn-outline-success button-effect btn-sm" href="#"><i data-feather="plus-circle"></i></a>
                            <h5>archive</h5>
                          </li>
                          <li><a class="icon-btn btn-outline-danger button-effect btn-sm" href="#"><i data-feather="trash-2"></i></a>
                            <h5>delete</h5>
                          </li>
                          <li><a class="icon-btn btn-outline-light button-effect btn-sm" href="#"><i data-feather="slash"></i></a>
                            <h5>block</h5>
                          </li>
                        </ul>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="contact-chat">
              <div class="rightchat animat-rate">
                <div class="bg_circle">
                  <div></div>
                  <div></div>
                  <div></div>
                  <div></div>
                  <div></div>
                  <div></div>
                  <div></div>
                  <div></div>
                  <div></div>
                  <div></div>
                  <div></div>
                </div>
                <div class="cross"></div>
                <div class="cross1"></div>
                <div class="cross2"></div>
                <div class="dot"></div>
                <div class="dot1"> </div>
              </div>
            </div>
            <div class="call-list-center"><img src="uiDesign/assets/images/chat.png" alt=""/>
              <div class="animated-bg"><i></i><i></i><i></i></div>
              <p>Select a chat to read messages</p>
            </div>
          </div>
          <div class="message-input">
            <div class="wrap emojis-main"><a class="icon-btn btn-outline-primary button-effect toggle-sticker outside" href="#">
                <svg id="Layer_1" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="2158px" height="2148px" viewbox="0 0 2158 2148" enable-background="new 0 0 2158 2148" xml:space="preserve">
                  <path fill-rule="evenodd" clip-rule="evenodd" fill="none" stroke="#000000" stroke-width="60" stroke-miterlimit="10" d="M699,693                        c0,175.649,0,351.351,0,527c36.996,0,74.004,0,111,0c18.058,0,40.812-2.485,57,1c11.332,0.333,22.668,0.667,34,1                        c7.664,2.148,20.769,14.091,25,20c8.857,12.368,6,41.794,6,62c0,49.329,0,98.672,0,148c175.649,0,351.351,0,527,0                        c0-252.975,0-506.025,0-759C1205.692,693,952.308,693,699,693z"></path>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M886,799c59.172-0.765,93.431,25.289,111,66c6.416,14.867,14.612,39.858,9,63                        c-2.391,9.857-5.076,20.138-9,29c-15.794,35.671-47.129,53.674-90,63c-20.979,4.563-42.463-4.543-55-10                        c-42.773-18.617-85.652-77.246-59-141c10.637-25.445,31.024-49,56-60c7.999-2.667,16.001-5.333,24-8                        C877.255,799.833,882.716,801.036,886,799z"></path>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M1258,799c59.172-0.765,93.431,25.289,111,66c6.416,14.867,14.612,39.858,9,63                        c-2.391,9.857-5.076,20.138-9,29c-15.794,35.671-47.129,53.674-90,63c-20.979,4.563-42.463-4.543-55-10                        c-42.773-18.617-85.652-77.246-59-141c10.637-25.445,31.024-49,56-60c7.999-2.667,16.001-5.333,24-8                        C1249.255,799.833,1254.716,801.036,1258,799z"></path>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M1345,1184c-0.723,18.71-11.658,29.82-20,41c-18.271,24.489-50.129,37.183-83,47                        c-7.333,1-14.667,2-22,3c-12.013,2.798-33.636,5.15-44,3c-11.332-0.333-22.668-0.667-34-1c-15.332-3-30.668-6-46-9                        c-44.066-14.426-80.944-31.937-110-61c-22.348-22.353-38.992-45.628-37-90c0.667,0,1.333,0,2,0c9.163,5.585,24.723,3.168,36,6                        c26.211,6.583,54.736,7.174,82,14c34.068,8.53,71.961,10.531,106,19c9.999,1.333,20.001,2.667,30,4c26.193,6.703,54.673,7.211,82,14                        C1304.894,1178.445,1325.573,1182.959,1345,1184z"></path>
                  <polygon fill-rule="evenodd" clip-rule="evenodd" points="668.333,1248.667 901.667,1482 941.667,1432 922.498,1237.846                         687,1210.667 "></polygon>
                </svg></a>
              <div class="dot-btn dot-primary"><a class="icon-btn btn-outline-primary button-effect toggle-emoji" href="#"><i data-feather="smile"></i></a></div>
              <div class="contact-poll"><a class="icon-btn btn-outline-primary outside" href="#"><i class="fa fa-plus"></i></a>
                <div class="contact-poll-content">
                  <ul>
                    <li><a href="#"><i data-feather="image"></i>gallery</a></li>
                    <li><a href="#"><i data-feather="camera"></i>camera</a></li>
                    <li><a data-bs-toggle="modal" data-bs-target="#snippetModal"><i data-feather="code">                       </i>Code Snippest</a></li>
                    <li><a href="#"><i data-feather="user">                              </i>contact</a></li>
                    <li><a href="#"><i data-feather="map-pin">                       </i>location</a></li>
                    <li><a href="#"><i data-feather="clipboard"> </i>document</a></li>
                    <li><a data-bs-toggle="modal" data-bs-target="#pollModal"><i data-feather="bar-chart-2">                       </i>poll</a></li>
                    <li><a href="#"><i data-feather="paperclip">                       </i>attach</a></li>
                  </ul>
                </div>
              </div>
              <input class="setemoj" id="setemoj" type="text" placeholder="Write your message..."/><a class="icon-btn btn-outline-primary button-effect me-2 ms-2" href="#"><i data-feather="mic"></i></a>

              <button class="submit icon-btn btn-primary disabled" id="send-msg"><i data-feather="send"></i></button>

              <div class="emojis-contain">
                <div class="emojis-sub-contain custom-scroll">
                  <ul>
                    <li>&#128512;</li>
                    <li>&#128513;</li>
                    <li>&#128514;</li>
                    <li>&#128515;</li>
                    <li>&#128516;</li>
                    <li>&#128517;</li>
                    <li>&#128518;</li>
                    <li>&#128519;</li>
                    <li>&#128520;</li>
                    <li>&#128521;</li>
                    <li>&#128522;</li>
                    <li>&#128523;</li>
                    <li>&#128524;</li>
                    <li>&#128525;</li>
                    <li>&#128526;</li>
                    <li>&#128527;</li>
                    <li>&#128528;</li>
                    <li>&#128529;</li>
                    <li>&#128530;</li>
                    <li>&#128531;</li>
                    <li>&#128532;</li>
                    <li>&#128533;</li>
                    <li>&#128534;</li>
                    <li>&#128535;</li>
                    <li>&#128536;</li>
                    <li>&#128537;</li>
                    <li>&#128538;</li>
                    <li>&#128539;</li>
                    <li>&#128540;</li>
                    <li>&#128541;</li>
                    <li>&#128542;</li>
                    <li>&#128543;</li>
                    <li>&#128544;</li>
                    <li>&#128545;</li>
                    <li>&#128546;</li>
                    <li>&#128547;</li>
                    <li>&#128549;</li>
                    <li>&#128550;</li>
                    <li>&#128551;</li>
                    <li>&#128552;</li>
                    <li>&#128553;</li>
                    <li>&#128554;</li>
                    <li>&#128555;</li>
                    <li>&#128557;</li>
                    <li>&#128558;</li>
                    <li>&#128559;</li>
                    <li>&#128560;</li>
                    <li>&#128561;</li>
                    <li>&#128562;</li>
                    <li>&#128563;</li>
                    <li>&#128564;</li>
                    <li>&#128565;</li>
                    <li>&#128566;</li>
                    <li>&#128567;</li>
                    <li>&#128568;</li>
                    <li>&#128569;</li>
                    <li>&#128570;</li>
                    <li>&#128571;</li>
                    <li>&#128572;</li>
                    <li>&#128573;</li>
                    <li>&#128574;</li>
                    <li>&#128576;</li>
                    <li>&#128579;</li>
                  </ul>
                </div>
              </div>
              <div class="sticker-contain">
                <div class="sticker-sub-contain custom-scroll">
                  <ul>
                    <li><a href="#"><img class="img-fluid" src="uiDesign/assets/images/sticker/1.gif" alt="sticker"/></a></li>
                    <li><a href="#"><img class="img-fluid" src="uiDesign/assets/images/sticker/2.gif" alt="sticker"/></a></li>
                    <li><a href="#"><img class="img-fluid" src="uiDesign/assets/images/sticker/3.gif" alt="sticker"/></a></li>
                    <li><a href="#"><img class="img-fluid" src="uiDesign/assets/images/sticker/3.gif" alt="sticker"/></a></li>
                    <li><a href="#"><img class="img-fluid" src="uiDesign/assets/images/sticker/4.gif" alt="sticker"/></a></li>
                    <li><a href="#"><img class="img-fluid" src="uiDesign/assets/images/sticker/5.gif" alt="sticker"/></a></li>
                    <li><a href="#"><img class="img-fluid" src="uiDesign/assets/images/sticker/6.gif" alt="sticker"/></a></li>
                    <li><a href="#"><img class="img-fluid" src="uiDesign/assets/images/sticker/7.gif" alt="sticker"/></a></li>
                    <li><a href="#"><img class="img-fluid" src="uiDesign/assets/images/sticker/8.gif" alt="sticker"/></a></li>
                    <li><a href="#"><img class="img-fluid" src="uiDesign/assets/images/sticker/9.gif" alt="sticker"/></a></li>
                    <li><a href="#"><img class="img-fluid" src="uiDesign/assets/images/sticker/10.gif" alt="sticker"/></a></li>
                    <li><a href="#"><img class="img-fluid" src="uiDesign/assets/images/sticker/11.gif" alt="sticker"/></a></li>
                    <li><a href="#"><img class="img-fluid" src="uiDesign/assets/images/sticker/12.gif" alt="sticker"/></a></li>
                    <li><a href="#"><img class="img-fluid" src="uiDesign/assets/images/sticker/13.gif" alt="sticker"/></a></li>
                    <li><a href="#"><img class="img-fluid" src="uiDesign/assets/images/sticker/14.gif" alt="sticker"/></a></li>
                    <li><a href="#"><img class="img-fluid" src="uiDesign/assets/images/sticker/15.gif" alt="sticker"/></a></li>
                    <li><a href="#"><img class="img-fluid" src="uiDesign/assets/images/sticker/16.gif" alt="sticker"/></a></li>
                    <li><a href="#"><img class="img-fluid" src="uiDesign/assets/images/sticker/17.gif" alt="sticker"/></a></li>
                    <li><a href="#"><img class="img-fluid" src="uiDesign/assets/images/sticker/18.gif" alt="sticker"/></a></li>
                    <li><a href="#"><img class="img-fluid" src="uiDesign/assets/images/sticker/19.gif" alt="sticker"/></a></li>
                    <li><a href="#"><img class="img-fluid" src="uiDesign/assets/images/sticker/20.gif" alt="sticker"/></a></li>
                    <li><a href="#"><img class="img-fluid" src="uiDesign/assets/images/sticker/21.gif" alt="sticker"/></a></li>
                    <li><a href="#"><img class="img-fluid" src="uiDesign/assets/images/sticker/22.gif" alt="sticker"/></a></li>
                    <li><a href="#"><img class="img-fluid" src="uiDesign/assets/images/sticker/23.gif" alt="sticker"/></a></li>
                    <li><a href="#"><img class="img-fluid" src="uiDesign/assets/images/sticker/24.gif" alt="sticker"/></a></li>
                    <li><a href="#"><img class="img-fluid" src="uiDesign/assets/images/sticker/25.gif" alt="sticker"/></a></li>
                    <li><a href="#"><img class="img-fluid" src="uiDesign/assets/images/sticker/26.gif" alt="sticker"/></a></li>
                    <li><a href="#"><img class="img-fluid" src="uiDesign/assets/images/sticker/27.gif" alt="sticker"/></a></li>
                    <li><a href="#"><img class="img-fluid" src="uiDesign/assets/images/sticker/28.gif" alt="sticker"/></a></li>
                    <li><a href="#"><img class="img-fluid" src="uiDesign/assets/images/sticker/29.gif" alt="sticker"/></a></li>
                    <li><a href="#"><img class="img-fluid" src="uiDesign/assets/images/sticker/30.gif" alt="sticker"/></a></li>
                    <li><a href="#"><img class="img-fluid" src="uiDesign/assets/images/sticker/31.gif" alt="sticker"/></a></li>
                    <li><a href="#"><img class="img-fluid" src="uiDesign/assets/images/sticker/32.gif" alt="sticker"/></a></li>
                    <li><a href="#"><img class="img-fluid" src="uiDesign/assets/images/sticker/33.gif" alt="sticker"/></a></li>
                    <li><a href="#"><img class="img-fluid" src="uiDesign/assets/images/sticker/34.gif" alt="sticker"/></a></li>
                    <li><a href="#"><img class="img-fluid" src="uiDesign/assets/images/sticker/35.gif" alt="sticker"/></a></li>
                    <li><a href="#"><img class="img-fluid" src="uiDesign/assets/images/sticker/36.gif" alt="sticker"/></a></li>
                    <li><a href="#"><img class="img-fluid" src="uiDesign/assets/images/sticker/37.gif" alt="sticker"/></a></li>
                    <li><a href="#"><img class="img-fluid" src="uiDesign/assets/images/sticker/38.gif" alt="sticker"/></a></li>
                    <li><a href="#"><img class="img-fluid" src="uiDesign/assets/images/sticker/39.gif" alt="sticker"/></a></li>
                    <li><a href="#"><img class="img-fluid" src="uiDesign/assets/images/sticker/40.gif" alt="sticker"/></a></li>
                    <li><a href="#"><img class="img-fluid" src="uiDesign/assets/images/sticker/41.gif" alt="sticker"/></a></li>
                    <li><a href="#"><img class="img-fluid" src="uiDesign/assets/images/sticker/42.gif" alt="sticker"/></a></li>
                    <li><a href="#"><img class="img-fluid" src="uiDesign/assets/images/sticker/43.gif" alt="sticker"/></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="call-content tabto"><a class="icon-btn btn-outline-primary button-effect mobile-back mb-3" href="#"><i class="ti-angle-left">                       </i></a>
          <div class="row">
            <div class="col-sm-5">
              <div class="user-profile mb-3">
                <div class="user-content"><img class="img-fluid" src="uiDesign/assets/images/contact/2.jpg" alt="user-img"/>
                  <h3>Josephin water</h3>
                  <h4 class="mt-2">+0 1800 76855</h4>
                  <ul> 
                    <li><i class="fa fa-twitch"></i>massage</li>
                    <li><i class="fa fa-phone" data-bs-toggle="modal" data-bs-target="#audiocall"></i>voice call</li>
                    <li> <i class="fa fa-video-camera" data-bs-toggle="modal" data-bs-target="#videocall"></i>video call</li>
                  </ul>
                </div>
              </div>
              <div class="user-profile">
                <div class="document">
                  <div class="filter-block">
                    <div class="collapse-block open">
                      <h5 class="block-title">Shared Document 
                        <label class="badge badge-success sm ms-2">3</label>
                      </h5>
                      <div class="block-content">
                        <ul class="document-list">
                          <li><i class="ti-folder font-danger"></i>
                            <h5>Simple_practice_project-zip</h5>
                          </li>
                          <li><i class="ti-write font-success"></i>
                            <h5>Word_Map-jpg</h5>
                          </li>
                          <li><i class="ti-zip font-primary"></i>
                            <h5>Latest_Design_portfolio.pdf</h5>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-7 position-relative">
              <div class="call-log-main custom-scroll">
                <div class="coll-log-group">
                  <div class="log-content-left">
                    <div class="d-flex"><i data-feather="phone-incoming"></i>
                      <div class="flex-grow-1">
                        <h5>incoming call                      </h5>
                      </div>
                    </div>
                  </div>
                  <div class="log-content-right">
                    <h6>15 Minutes ago 5:10 &nbsp;(22/10/23)</h6>
                  </div>
                </div>
                <div class="coll-log-group">
                  <div class="log-content-left">
                    <div class="d-flex"><i data-feather="phone-incoming"></i>
                      <div class="flex-grow-1">
                        <h5>outgoing call</h5>
                      </div>
                    </div>
                  </div>
                  <div class="log-content-right">
                    <h6>30 Minutes ago 10:30 &nbsp;(12/09/23)</h6>
                  </div>
                </div>
                <div class="coll-log-group">
                  <div class="log-content-left">
                    <div class="d-flex"><i data-feather="phone-missed"></i>
                      <div class="flex-grow-1">
                        <h5>missed call</h5>
                      </div>
                    </div>
                  </div>
                  <div class="log-content-right">
                    <h6>1 Minutes ago 8:30 &nbsp; (28/08/23)</h6>
                  </div>
                </div>
                <div class="coll-log-group">
                  <div class="log-content-left">
                    <div class="d-flex"><i data-feather="phone-missed"></i>
                      <div class="flex-grow-1">
                        <h5>missed call</h5>
                      </div>
                    </div>
                  </div>
                  <div class="log-content-right">
                    <h6>10 Minutes ago 9:10 &nbsp; (18/01/23)</h6>
                  </div>
                </div>
                <div class="coll-log-group">
                  <div class="log-content-left">
                    <div class="d-flex"><i data-feather="phone-missed"></i>
                      <div class="flex-grow-1">
                        <h5>missed call</h5>
                      </div>
                    </div>
                  </div>
                  <div class="log-content-right">
                    <h6>35 Minutes ago 9:10 &nbsp; (17/01/23)</h6>
                  </div>
                </div>
                <div class="coll-log-group">
                  <div class="log-content-left">
                    <div class="d-flex"><i data-feather="phone-missed"></i>
                      <div class="flex-grow-1">
                        <h5>missed call</h5>
                      </div>
                    </div>
                  </div>
                  <div class="log-content-right">
                    <h6>80 Minutes ago 12:05 &nbsp; (17/01/23)</h6>
                  </div>
                </div>
                <div class="coll-log-group">
                  <div class="log-content-left">
                    <div class="d-flex"><i data-feather="phone-incoming"></i>
                      <div class="flex-grow-1">
                        <h5>incoming call</h5>
                      </div>
                    </div>
                  </div>
                  <div class="log-content-right">
                    <h6>15 Minutes ago 15:20 &nbsp; (28/02/20)</h6>
                  </div>
                </div>
                <div class="coll-log-group">
                  <div class="log-content-left">               
                    <div class="d-flex"><i data-feather="phone-incoming"></i>
                      <div class="flex-grow-1">
                        <h5>incoming call</h5>
                      </div>
                    </div>
                  </div>
                  <div class="log-content-right"> 
                    <h6>10 Minutes ago 20m 26s &nbsp; 10/3/20  </h6>
                  </div>
                </div>
              </div>
              <div class="call-log-clear"> <i class="ti-trash font-danger"></i><span class="font-danger">Delete call log</span></div>
            </div>
          </div>
        </div>
        <div class="contact-content tabto">
          <div class="contact-sub-content"><a class="icon-btn btn-outline-primary button-effect mobile-back mb-3" href="#"><i class="ti-angle-left"></i></a>
            <div class="row">
              <div class="col-sm-5">
                <div class="user-profile">
                  <div class="user-content"><img class="img-fluid bg-icon" src="uiDesign/assets/images/contact/2.jpg" alt="user-img"/>
                    <h3>Josephin water</h3>
                    <ul> 
                      <li><i class="fa fa-twitch"> </i>massage</li>
                      <li><i class="fa fa-phone"> </i>voice call</li>
                      <li> <i class="fa fa-video-camera"> </i>video call</li>
                    </ul>
                  </div>
                </div>
                <div class="personal-info-group">
                  <div class="social-info-group">
                    <ul class="integratin mt-0">
                      <li>
                        <div class="d-flex">
                          <div class="media-left"><a class="fb" href="https://www.facebook.com/login" target="_blank"><i class="fa fa-facebook"></i>
                              <h5>Facebook   </h5></a></div>
                          <div class="media-right">
                            <div class="profile bg-size"><img class="bg-img" src="uiDesign/assets/images/contact/1.jpg" alt="Avatar"/></div>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="d-flex">
                          <div class="media-left"><a class="twi" href="https://twitter.com/login" target="_blank"><i class="fa fa-twitter"></i>
                              <h5>twitter   </h5></a></div>
                          <div class="media-right">
                            <div class="profile bg-size"><img class="bg-img" src="uiDesign/assets/images/contact/3.jpg" alt="Avatar"/></div>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="d-flex">
                          <div class="media-left"><a class="ggl" href="https://accounts.google.com/signin/v2/identifier?service=mail&amp;passive=true&amp;rm=false&amp;continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&amp;ss=1&amp;scc=1&amp;ltmpl=default&amp;ltmplcache=2&amp;emr=1&amp;osid=1&amp;flowName=GlifWebSignIn&amp;flowEntry=ServiceLogin" target="_blank"><i class="fa fa-google"></i>
                              <h5>google   </h5></a></div>
                          <div class="media-right">
                            <div class="profile bg-size"><img class="bg-img" src="uiDesign/assets/images/contact/2.jpg" alt="Avatar"/></div>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-sm-7">
                <div class="personal-info-group"> 
                  <h3>contact info</h3>
                  <ul class="basic-info">
                    <li>
                      <h5>name</h5>
                      <h5 class="details">Nick</h5>
                    </li>
                    <li>
                      <h5>gender</h5>
                      <h5 class="details">male</h5>
                    </li>
                    <li>
                      <h5>Birthday</h5>
                      <h5 class="details">9 april 1994</h5>
                    </li>
                    <li>
                      <h5>Favorite Book</h5>
                      <h5 class="details">Perfect Chemistry</h5>
                    </li>
                    <li>
                      <h5>Personality</h5>
                      <h5 class="details">Cool</h5>
                    </li>
                    <li>
                      <h5>City</h5>
                      <h5 class="details">Moline Acres</h5>
                    </li>
                    <li>
                      <h5>mobile no</h5>
                      <h5 class="details">+0 1800 76855</h5>
                    </li>
                    <li>
                      <h5>email</h5>
                      <h5 class="details">pixelstrap@test.com</h5>
                    </li>
                    <li>
                      <h5>Website</h5>
                      <h5 class="details">www.test.com</h5>
                    </li>
                    <li>
                      <h5 class="m-0">Interest</h5>
                      <h5 class="details">Photography</h5>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <aside class="chitchat-right-sidebar" id="slide-menu">
        <div class="custom-scroll right-sidebar">           
          <div class="contact-profile">
            <div class="theme-title">
              <div class="d-flex">
                <div> 
                  <h2>Profile</h2>
                  <h4>Personal Information</h4>
                </div>
                <div class="flex-grow-1"> <a class="icon-btn btn-outline-light btn-sm close-profile ms-3" href="#"> <i data-feather="x"> </i></a></div>
              </div>
            </div>
            <div class="details">
              <div class="contact-top"><img class="bg-img" src="uiDesign/assets/images/avtar/2.jpg" alt=""/></div>
              <div class="name">
                <h3>Josephin water</h3>
                <h6>Add Description</h6>
              </div>
              <ul class="medialogo">
                <li><a class="icon-btn btn-danger button-effect" href="https://www.google.com/"><i class="fa fa-google"></i></a></li>
                <li><a class="icon-btn btn-primary button-effect" href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
                <li><a class="icon-btn btn-facebook button-effect" href="https://www.facebook.com/"><i class="fa fa-facebook-f"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="document">
            <div class="filter-block">
              <div class="collapse-block open">
                <h5 class="block-title">Shared Document 
                  <label class="badge badge-success sm ms-2">3</label>
                </h5>
                <div class="block-content">
                  <ul class="document-list">
                    <li><i class="ti-folder font-danger"></i>
                      <h5>Simple_practice_project-zip</h5>
                    </li>
                    <li><i class="ti-write font-success"></i>
                      <h5>Word_Map-jpg</h5>
                    </li>
                    <li><i class="ti-zip font-primary"></i>
                      <h5>Latest_Design_portfolio.pdf</h5>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
         
          <div class="status">
            <div class="collapse-block open">
              <h5 class="block-title">Starred Messages
                <label class="badge badge-outline-dark sm ms-2">2</label>
              </h5>
              <div class="block-content">
                <div class="contact-chat p-0 m-0">
                  <ul class="str-msg">
                    <li>
                      <div class="d-flex">
                        <div class="profile me-4"><img class="bg-img" src="uiDesign/assets/images/contact/2.jpg" alt="Avatar"/></div>
                        <div class="flex-grow-1">
                          <div class="contact-name">
                            <h5>Alan josheph</h5>
                            <h6>01:35 AM</h6>
                            <ul class="msg-box">
                              <li> 
                                <h5>Hi I am Alan,</h5>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="d-flex">
                        <div class="profile me-4"><img class="bg-img" src="uiDesign/assets/images/contact/3.jpg" alt="Avatar"/></div>
                        <div class="flex-grow-1">
                          <div class="contact-name">
                            <h5>Josephin water</h5>
                            <h6>01:35 AM</h6>
                            <ul class="msg-box">
                              <li> 
                                <h5>Can you help me to find best chat app?.</h5>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="status">
            <div class="collapse-block open">
              <h5 class="block-title">Common groups 
                <label class="badge badge-outline-dark sm ms-2">3</label>
              </h5>
              <div class="block-content">
                <ul class="group-main">
                  <li>
                    <div class="group-box">
                      <div class="profile"><img class="bg-img" src="uiDesign/assets/images/avtar/teq.jpg" alt="Avatar"/></div>
                      <div class="details">
                        <h5>Tech Ninjas</h5>
                        <h6>johan, deo, Sufiya Elija, Pabelo & you</h6>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="group-box">
                      <div class="profile"><img class="bg-img" src="uiDesign/assets/images/avtar/family.jpg" alt="Avatar"/></div>
                      <div class="details">
                        <h5>Family Ties</h5>
                        <h6>Mukrani, deo & you</h6>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="status other">
            <h5 class="block-title p-b-25">Contact info</h5>
            <ul>
              <li>
                <h5> <a href="#"> <i data-feather="smartphone"></i>+12 3456789587</a></h5>
              </li>
              <li>
                <h5><a href="https://themeforest.net/user/pixelstrap/portfolio"> <i data-feather="crosshair"></i>https://pixelstrap</a></h5>
              </li>
              <li>
                <h5><a href="#"> <i data-feather="map-pin"></i>1766  Fidler Drive Texas, 78238.</a></h5>
              </li>
            </ul>
          </div>
          <div class="status"> 
            <ul>
              <li>
                <input class="js-switch" type="checkbox"/>
                <h5>Block  </h5>
              </li>
              <li>
                <input class="js-switch1" type="checkbox"/>
                <h5>Mute  </h5>
              </li>
              <li>
                <input class="js-switch2" type="checkbox" checked=""/>
                <h5>Get Notification</h5>
              </li>
            </ul>
          </div>
          <div class="status other">
            <ul>
              <li>
                <h5> <a href="#"> <i data-feather="share-2"></i>share Contact</a></h5>
              </li>
              <li>
                <h5><a href="#"> <i data-feather="trash-2"></i>Clear Chat</a></h5>
              </li>
              <li>
                <h5><a href="#"> <i data-feather="external-link"></i>Export Chat</a></h5>
              </li>
              <li>
                <h5><a href="#"> <i data-feather="alert-circle"></i>Report Contact             </a></h5>
              </li>
            </ul>
          </div>
        </div>
      </aside>
      
    </div>
    <div class="modal fade add-popup add-contact-modal" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h2 class="modal-title">
               Add Contact</h2>
            <button class="close" type="button" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>
          <div class="modal-body">
            <form class="default-form">
              <div class="form-group text-center">
                <h5>Email  or  Username</h5>
                <input class="form-control" id="exampleInputEmail1" type="text" placeholder="Josephin water"/>
              </div>
              <div class="form-group mb-0 text-center">
                <h5>Contact number</h5>
                <input class="form-control" id="examplemsg" type="number" placeholder="12345678912"/>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button class="btn btn-danger button-effect btn-sm" type="button" data-bs-dismiss="modal">Cancel</button>
            <button class="btn btn-primary button-effect btn-sm" type="button">Add contact</button>
          </div>
        </div>
      </div>
    </div>
    <div class="modal pol-modal-main add-popup" id="pollModal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h2 class="modal-title"><i data-feather="bar-chart-2"></i>poll</h2>
            <button class="close" type="button" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>
          <div class="modal-body">
            <form class="default-form">
              <h3>create poll</h3>
              <div class="form-group">
                <input class="form-control" type="text" placeholder="ask que"/>
                <input class="form-control" type="text" placeholder="add commatn"/>
              </div>
              <div class="form-group">
                <input class="form-control" type="text" placeholder="option 1"/>
                <input class="form-control" type="text" placeholder="option 2"/><a class="add-option" href="#">add an option</a>
              </div>
              <div class="form-group">
                <div class="post-poll">
                  <ul>
                    <li>post poll in
                      <p class="pt-0">test name</p>
                    </li>
                    <li>poll expier in 7 days
                      <p class="pt-0">test name</p>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="form-group">
                <div class="allow-group">
                  <input class="allow-check" type="checkbox"/>Allow users to vote anonymously
                </div>
              </div>
              <div class="creat-poll-btn"><a class="btn btn-primary button-effect btn-sm" href="#" data-bs-dismiss="modal" aria-label="Close">Create poll</a></div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="modal notes-modal-main add-popup" id="notesModal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h2 class="modal-title"><i class="ti-bookmark-alt"></i>notes</h2>
            <button class="close" type="button" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>
          <div class="modal-body custom-scroll p-0">
            <div class="card">
              <div class="card-header">
                <h5>Inline Editor</h5>
              </div>
              <div class="card-body">
                <div class="cke_editable cke_editable_inline cke_contents_ltr cke_show_borders" id="area1" contenteditable="true" tabindex="0" spellcheck="false" role="textbox" aria-label="Rich Text Editor, area1" title="Rich Text Editor, area1">
                  <h1>Your title</h1>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at vulputate urna, sed dignissim arcu. Aliquam at ligula imperdiet, faucibus ante a, interdum enim. Sed in mauris a lectus lobortis condimentum. Sed in nunc magna. Quisque massa urna, cursus vitae commodo eget, rhoncus nec erat. Sed sapien turpis, elementum sit amet elit vitae, elementum gravida eros. In ornare tempus nibh ut lobortis. Nam venenatis justo ex, vitae vulputate neque laoreet a.</p>
                </div>
              </div>
              <div class="card-footer">
                <button class="btn btn-danger button-effect btn-sm" type="button">Save</button>
                <button class="btn btn-primary button-effect btn-sm" type="button" data-bs-dismiss="modal">Cancel</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="modal reminder-modal-main add-popup" id="setReminder" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content custom-scrollbar">
          <div class="modal-header">
            <h2 class="modal-title">
                        Set redminders</h2>
            <button class="close" type="button" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>
          <div class="modal-body">
            <form class="form default-form">
              <div class="lable">Reminder for (Groups or contacts)</div>
              <div class="form-group">
                <input class="form-control" type="text" placeholder="contact or channel"/>
              </div>
              <div class="lable">Remind about</div>
              <div class="form-group">
                <textarea class="form-control dib" rows="3" placeholder="Some details about task"></textarea>
              </div>
              <div class="lable">Remind about</div>
              <div class="form-group">
                <ul class="reminder-count">
                  <li class="active">
                    <div class="reminder-box">
                      <h3 class="remi-num">15</h3>
                      <h5 class="remi-val">minutes</h5>
                    </div>
                  </li>
                  <li>
                    <div class="reminder-box">
                      <h3 class="remi-num">1</h3>
                      <h5 class="remi-val">hour</h5>
                    </div>
                  </li>
                  <li>
                    <div class="reminder-box">
                      <h3 class="remi-num">5 PM</h3>
                      <h5 class="remi-val">today</h5>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="form-group mb-0">
                <div class="lable">select custom time</div>
                <div class="custom-remider-main">
                  <div class="custom-remider-content">
                    <div class="custom-reminder-inline">
                      <input class="form-control" type="date"/>
                      <input class="form-control" type="time"/>
                    </div>
                    <div class="custom-reminder-block">
                      <select> 
                        <option>Do not repeat</option>
                        <option>Weekdays (Mon-Fri)</option>
                        <option>Daily</option>
                        <option>Weekly (Custom)</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
              <div class="reminder-btn mb-3"><a class="btn btn-primary button-effect">set reminder</a></div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="modal snippet-modal-main add-popup" id="snippetModal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h2 class="modal-title"><i class="fa fa-code"></i>code snippets</h2>
            <button class="close" type="button" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>
          <div class="modal-body">
            <form class="default-form">
              <h3>creat snippets</h3>
              <div class="form-group">
                <input class="form-control" type="text" placeholder="title(optional)"/>
              </div>
              <div class="form-group">
                <select class="mb-0">
                  <option>ebnf</option>
                  <option>c++</option>
                  <option>diff</option>
                  <option>dart</option>
                </select>
              </div>
              <div class="form-group">
                <textarea class="form-control" rows="5"></textarea>
              </div>
              <div class="form-group">
                <input class="form-control mb-0" type="text" placeholder="add commant (optional)"/>
              </div>
              <div class="form-group mb-0">
                <div class="btn-snipate"><a class="btn btn-danger button-effect btn-sm me-3" href="#" data-bs-dismiss="modal" aria-label="Close">Cancel</a><a class="btn btn-primary button-effect btn-sm" href="#" data-bs-dismiss="modal" aria-label="Close">Create & post</a></div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="audiocall" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-body">
          <div class="audiocall1 call-modal"><img class="bg-img" src="uiDesign/assets/images/avtar/big/audiocall.jpg" alt="Avatar"/>
            <div class="center-con text-center">
              <div class="title2">Josephin water</div>
              <h6>log angelina california</h6>
              <ul>
                <li><a class="icon-btn btn-success button-effect btn-xl is-animating" href="#" data-bs-toggle="modal" data-bs-target="#audiorcvcall" data-bs-dismiss="modal"> <i data-feather="phone"></i></a></li>
                <li>     <a class="icon-btn btn-danger button-effect btn-xl is-animating cancelcall" href="#" data-bs-dismiss="modal"> <i data-feather="phone"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="viddiolog modal fade" id="videocall" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-body">
          <div class="videocall call-modal"><img class="bg-img" src="uiDesign/assets/images/avtar/big/videocall_bg.jpg" alt="Avatar"/>
            <div class="small-image"><img class="bg-img" src="uiDesign/assets/images/avtar/big/videocall.jpg" alt="Avatar"/></div>
            <div class="d-flex gap-3 videocall-details">
              <div class="usersprof">
                <div class="profile"><img class="bg-img" src="uiDesign/assets/images/avtar/2.jpg" alt="Avatar"/></div>
                <div class="profile"><img class="bg-img" src="uiDesign/assets/images/avtar/3.jpg" alt="Avatar"/></div>
              </div>
              <div class="flex-grow-1">
                <h5>Josephin water</h5>
                <h6>America ,California</h6>
              </div>
              <div id="basicUsage">00:00:00</div>
              <div class="zoomcontent"><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()" data-tippy-content="Zoom Screen"><img src="uiDesign/assets/images/logo/maximize.svg" alt="zoom screen"/></a></div>
            </div>
            <div class="center-con text-center">
              <ul>
                <li><a class="icon-btn btn-light button-effect pause" href="#" data-tippy-content="Hold"><i class="ti-control-pause"></i></a></li>
                <li><a class="icon-btn btn-danger button-effect btn-xl is-animating" href="#" data-bs-dismiss="modal" data-tippy-content="Hangup"> <i data-feather="phone"></i></a></li>
                <li><a class="icon-btn btn-light button-effect mic" href="#" data-tippy-content="Mute"><i class="fa fa-microphone"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="confercall" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-body">
          <div class="conferencecall call-modal"><img class="bg-img" src="uiDesign/assets/images/avtar/big/audiocall.jpg" alt="Avatar"/>
            <div class="center-con text-center">
              <div class="usersprof">
                <div class="profile"><img class="bg-img" src="uiDesign/assets/images/avtar/2.jpg" alt="Avatar"/></div>
                <div class="profile"><img class="bg-img" src="uiDesign/assets/images/avtar/3.jpg" alt="Avatar"/></div>
                <div class="profile"><img class="bg-img" src="uiDesign/assets/images/avtar/5.jpg" alt="Avatar"/></div>
                <div class="profile"><img class="bg-img" src="uiDesign/assets/images/avtar/big/videocall_bg.jpg" alt="Avatar"/></div>
              </div>
              <p>Incoming Call</p>
              <h3>Conference Call</h3>
              <ul>
                <li>     <a class="icon-btn btn-danger button-effect btn-xl is-animating cancelcall" href="#" data-bs-dismiss="modal"> <i data-feather="phone"></i></a></li>
                <li><a class="icon-btn btn-success button-effect btn-xl is-animating" href="#"> <i data-feather="video"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="confvideocl" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content"> 
          <div class="modal-body">
            <div class="row confimg">
              <div class="col-6">
                <div class="vclimg"><img class="bg-img" src="uiDesign/assets/images/avtar/big/videocall_bg.jpg" alt="Avatar"/></div>
              </div>
              <div class="col-6">
                <div class="vclimg"><img class="bg-img" src="uiDesign/assets/images/avtar/5.jpg" alt="Avatar"/></div>
              </div>
              <div class="col-6">
                <div class="vclimg"><img class="bg-img" src="uiDesign/assets/images/avtar/2.jpg" alt="Avatar"/></div>
              </div>
              <div class="col-6">
                <div class="vclimg"><img class="bg-img" src="uiDesign/assets/images/avtar/3.jpg" alt="Avatar"/></div>
              </div>
            </div>
          </div>
          <div class="modal-footer clfooter">
            <div id="basicUsage3">00:00:00</div>
            <ul> 
              <li><a class="icon-btn btn-light button-effect" href="#" data-tippy-content="speaker"><i data-feather="volume-2"></i></a></li>
              <li><a class="icon-btn btn-light button-effect" href="#" data-tippy-content="Camera"><i data-feather="camera-off"></i></a></li>
              <li><a class="icon-btn btn-light button-effect" href="#" data-tippy-content="Add Call"><i data-feather="user-plus"></i></a></li>
              <li><a class="icon-btn btn-danger button-effect btn-sm is-animating" href="#" data-bs-dismiss="modal" data-tippy-content="Hangup"><i data-feather="phone"></i></a></li>
              <li><a class="icon-btn btn-light button-effect" href="#" data-tippy-content="Disable Video"><i data-feather="video-off"></i></a></li>
              <li><a class="icon-btn btn-light button-effect mic" href="#" data-tippy-content="Mute"><i data-feather="mic-off"></i></a></li>
              <li><a class="icon-btn btn-light button-effect" href="#" data-tippy-content="Hold"><i data-feather="pause"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade audiorcvcall" id="audiorcvcall" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-body">
          <div class="audiocall2 call-modal"><img class="bg-img" src="uiDesign/assets/images/avtar/big/audiocall.jpg" alt="Avatar"/>
            <div class="center-con text-center">
              <div id="basicUsage2">00:00:00</div>
              <div class="title2">Josephin water</div>
              <h6>log angelina california</h6>
              <ul>
                <li><a class="icon-btn btn-light button-effect mute" href="#" data-tippy-content="Mute"><i class="fa fa-microphone"></i></a></li>
                <li><a class="icon-btn btn-light button-effect mute" href="#" data-tippy-content="Speaker"><i class="fa fa-volume-up"></i></a></li>
                <li><a class="icon-btn btn-danger button-effect btn-xl is-animating" href="#" data-tippy-content="Hangup" data-bs-dismiss="modal"> <i data-feather="phone"></i></a></li>
                <li><a class="icon-btn btn-light button-effect" href="#" data-tippy-content="Add Call"><i data-feather="user-plus"></i></a></li>
                <li><a class="icon-btn btn-light button-effect" href="#" data-tippy-content="Pause"><i data-feather="pause"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade fev-addcall-main add-popup" id="addcallmodal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h2 class="modal-title">
               Add Contact</h2>
            <button class="close" type="button" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>
          <div class="modal-body">
            <form class="default-form">
              <div class="form-group text-center">
                <h5>Email  or  Username</h5>
                <input class="form-control" id="exampleInputEmail12" type="text" placeholder="Josephin water"/>
              </div>
              <div class="form-group text-center">
                <h5>Contact number</h5>
                <input class="form-control" id="examplemsg2" type="number" placeholder="12345678912"/>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button class="btn btn-danger button-effect btn-sm" type="button" data-bs-dismiss="modal">Cancel</button>
            <button class="btn btn-primary button-effect btn-sm" type="button">Add contact</button>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade add-popup todo-main-modal" id="todoModal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h2 class="modal-title">
               Welcome to Chitchat</h2>
            <button class="close" type="button" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>
          <div class="modal-body">
            <form class="default-form">
              <div class="todo-task">
                <h5>Felling Lonely</h5>
                <div class="todo-main-content">
                  <div class="form-group">
                    <input type="checkbox" aria-label="Checkbox for following text input"/>
                    <input class="w-100" id="user_input123" type="text" placeholder="Fill Your Fillings "/>
                  </div>
                  <div class="drop-picker">
                    <div class="dropdown currency" tabindex="1">
                      <div class="select"><span>Assign To</span></div>
                      <input type="hidden" name="currency"/>
                      <ul class="dropdown-menu">
                        <li class="dropdown-divider">
                          <div class="fa fa-user text-muted"></div>
                          <h5 class="text-muted">Assign To</h5>
                        </li>
                        <li>Josephin john</li>
                        <li>Lynetin john</li>
                        <li>Sufiya john</li>
                        <li>Jhon john</li>
                      </ul>
                    </div>
                    <input class="datepicker-here form-control digits" type="url" data-language="en" placeholder="Due date"/>
                  </div>
                </div>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button class="btn btn-danger button-effect btn-sm" type="button">Save</button>
            <button class="btn btn-primary button-effect btn-sm" type="button" data-bs-dismiss="modal">Cancel</button>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade add-popup create-todo-main-modal" id="createtodoModal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h2 class="modal-title">
               Today's ToDo</h2>
            <button class="close" type="button" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>
          <div class="modal-body">
            <form class="default-form">
              <div class="todo-task">
                <h5>Felling Lonely</h5>
                <div class="todo-main-content">
                  <div class="form-group">
                    <input type="checkbox" aria-label="Checkbox for following text input"/>
                    <input class="w-100" id="user_input123" type="text" placeholder="Fill Your Fillings "/>
                  </div>
                  <div class="drop-picker">
                    <div class="dropdown currency" tabindex="1">
                      <div class="select"><span>Assign To</span></div>
                      <input type="hidden" name="currency"/>
                      <ul class="dropdown-menu">
                        <li class="dropdown-divider">
                          <div class="fa fa-user text-muted"></div>
                          <h5 class="text-muted">Assign To</h5>
                        </li>
                        <li>Josephin john</li>
                        <li>Lynetin john</li>
                        <li>Sufiya john</li>
                        <li>Jhon john</li>
                      </ul>
                    </div>
                    <input class="datepicker-here form-control digits" type="url" data-language="en" placeholder="Due date"/>
                  </div>
                </div>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button class="btn btn-danger button-effect btn-sm" type="button">Save</button>
            <button class="btn btn-primary button-effect btn-sm" type="button" data-bs-dismiss="modal">Cancel</button>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade add-popup msg-chat-modal" id="msgchatModal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h2 class="modal-title">
               Create New Message</h2>
            <button class="close" type="button" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>
          <div class="modal-body">
            <div class="chat-msg-search">
              <div class="input-group">
                <input class="form-control" type="text" placeholder="Search" aria-label="Recipient's username" aria-describedby="basic-addon21"/>
                <div class="input-group-append"><span class="input-group-text" id="basic-addon21">@</span></div>
              </div>
            </div>
            <ul class="chat-main custom-scroll">
              <li data-to="blank">
                <div class="chat-box">
                  <div class="profile offline"><img class="bg-img" src="uiDesign/assets/images/contact/1.jpg" alt="Avatar"/></div>
                  <div class="details">
                    <h5>Josephin water</h5>
                    <h6>Hi, i am josephin. How are you.. ! There are many variations of passages.</h6>
                  </div>
                  <div class="date-status"><i class="ti-pin2"></i>
                    <h6>22/10/23</h6>
                    <h6 class="font-success status"> Seen</h6>
                  </div>
                </div>
              </li>
              <li class="active" data-to="chating">
                <div class="chat-box">
                  <div class="profile online"><img class="bg-img" src="uiDesign/assets/images/contact/2.jpg" alt="Avatar"/></div>
                  <div class="details">
                    <h5>Jony Lynetin</h5>
                    <h6>Typing................</h6>
                  </div>
                  <div class="date-status"><i class="ti-pin2"></i>
                    <h6>30/11/23</h6>
                    <div class="badge badge-primary sm">8</div>
                  </div>
                </div>
              </li>
              <li data-to="blank">
                <div class="chat-box">
                  <div class="profile unreachable"><img class="bg-img" src="uiDesign/assets/images/contact/3.jpg" alt="Avatar"/></div>
                  <div class="details">
                    <h5>Sufiya Elija</h5>
                    <h6>I need job, please help me.</h6>
                  </div>
                  <div class="date-status"><i class="ti-pin2"></i>
                    <h6>15/06/23</h6>
                    <h6 class="font-dark status"> Sending</h6>
                  </div>
                </div>
              </li>
              <li data-to="blank">
                <div class="chat-box">
                  <div class="profile busy"><img class="bg-img" src="uiDesign/assets/images/contact/4.jpg" alt="Avatar"/></div>
                  <div class="details">
                    <h5>Mukrani Pabelo</h5>
                    <h6>Hi, i am josephin. How are you.. ! There are many variations of passages.</h6>
                  </div>
                  <div class="date-status"><i class="ti-pin2"></i>
                    <h6>04/06/23</h6>
                    <h6 class="font-danger status"> Failed</h6>
                  </div>
                </div>
              </li>
              <li data-to="blank">
                <div class="chat-box">
                  <div class="profile busy"><img class="bg-img" src="uiDesign/assets/images/contact/2.jpg" alt="Avatar"/></div>
                  <div class="details">
                    <h5>Jhon Deo</h5>
                    <h6>Hi, i am josephin. How are you.. ! There are many variations of passages.</h6>
                  </div>
                  <div class="date-status"><i class="ti-pin2"></i>
                    <h6>04/06/23</h6>
                    <h6 class="font-danger status"> Failed</h6>
                  </div>
                </div>
              </li>
              <li data-to="blank">
                <div class="chat-box">
                  <div class="profile busy"><img class="bg-img" src="uiDesign/assets/images/contact/1.jpg" alt="Avatar"/></div>
                  <div class="details">
                    <h5>Pabelo Mukrani</h5>
                    <h6>Hi, i am josephin. How are you.. ! There are many variations of passages.</h6>
                  </div>
                  <div class="date-status"><i class="ti-pin2"></i>
                    <h6>04/06/23</h6>
                    <h6 class="font-danger status"> Failed</h6>
                  </div>
                </div>
              </li>
              <li data-to="blank">
                <div class="chat-box">
                  <div class="profile unreachable"><img class="bg-img" src="uiDesign/assets/images/contact/3.jpg" alt="Avatar"/></div>
                  <div class="details">
                    <h5>Sufiya Elija</h5>
                    <h6>I need job, please help me.</h6>
                  </div>
                  <div class="date-status"><i class="ti-pin2"></i>
                    <h6>15/06/23</h6>
                    <h6 class="font-dark status"> Sending</h6>
                  </div>
                </div>
              </li>
              <li data-to="blank">
                <div class="chat-box">
                  <div class="profile busy"><img class="bg-img" src="uiDesign/assets/images/contact/4.jpg" alt="Avatar"/></div>
                  <div class="details">
                    <h5>Mukrani Pabelo</h5>
                    <h6>Hi, i am josephin. How are you.. ! There are many variations of passages.</h6>
                  </div>
                  <div class="date-status"><i class="ti-pin2"></i>
                    <h6>04/06/23</h6>
                    <h6 class="font-danger status"> Failed</h6>
                  </div>
                </div>
              </li>
              <li data-to="blank">
                <div class="chat-box">
                  <div class="profile busy"><img class="bg-img" src="uiDesign/assets/images/contact/2.jpg" alt="Avatar"/></div>
                  <div class="details">
                    <h5>Jhon Deo</h5>
                    <h6>Hi, i am josephin. How are you.. ! There are many variations of passages.</h6>
                  </div>
                  <div class="date-status"><i class="ti-pin2"></i>
                    <h6>04/06/23</h6>
                    <h6 class="font-danger status"> Failed</h6>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade add-popup msg-chat-modal" id="msgcallModal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h2 class="modal-title">
               Create New Message</h2>
            <button class="close" type="button" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>
          <div class="modal-body">
            <div class="chat-msg-search">
              <div class="input-group">
                <input class="form-control" type="text" placeholder="Search" aria-label="Recipient's username" aria-describedby="basic-addon20"/>
                <div class="input-group-append"><span class="input-group-text" id="basic-addon20">@</span></div>
              </div>
            </div>
            <ul class="call-log-main custom-scroll">
              <li class="active">
                <div class="call-box">
                  <div class="profile offline"><img class="bg-img" src="uiDesign/assets/images/contact/2.jpg" alt="Avatar"/></div>
                  <div class="details">
                    <h5>Jony Lynetin</h5>
                    <h6> <i data-feather="arrow-down-left"></i>3:30 pm</h6>
                  </div>
                  <div class="call-status">
                    <div class="icon-btn btn-outline-success button-effect btn-sm"><i data-feather="phone"></i></div>
                  </div>
                </div>
              </li>
              <li>
                <div class="call-box">
                  <div class="profile online"><img class="bg-img" src="uiDesign/assets/images/contact/1.jpg" alt="Avatar"/></div>
                  <div class="details">
                    <h5>Jony Lynetin</h5>
                    <h6> <i data-feather="arrow-down-right"></i>3:10 pm</h6>
                  </div>
                  <div class="call-status">
                    <div class="icon-btn btn-outline-success button-effect btn-sm"><i data-feather="video"></i></div>
                  </div>
                </div>
              </li>
              <li>
                <div class="call-box">
                  <div class="profile offline"><img class="bg-img" src="uiDesign/assets/images/contact/2.jpg" alt="Avatar"/></div>
                  <div class="details">
                    <h5>Jony Lynetin</h5>
                    <h6> <i class="missed" data-feather="corner-left-down"></i>3:00 pm</h6>
                  </div>
                  <div class="call-status">
                    <div class="icon-btn btn-outline-danger button-effect btn-sm"><i data-feather="phone"></i></div>
                  </div>
                </div>
              </li>
              <li>
                <div class="call-box">
                  <div class="profile online"><img class="bg-img" src="uiDesign/assets/images/contact/1.jpg" alt="Avatar"/></div>
                  <div class="details">
                    <h5>Jony Lynetin</h5>
                    <h6> <i data-feather="arrow-down-right"></i>3:00 pm</h6>
                  </div>
                  <div class="call-status">
                    <div class="icon-btn btn-outline-success button-effect btn-sm"><i data-feather="video"></i></div>
                  </div>
                </div>
              </li>
              <li>
                <div class="call-box">
                  <div class="profile offline"><img class="bg-img" src="uiDesign/assets/images/contact/2.jpg" alt="Avatar"/></div>
                  <div class="details">
                    <h5>Jony Lynetin</h5>
                    <h6> <i data-feather="arrow-down-right"></i>3:00 pm</h6>
                  </div>
                  <div class="call-status">
                    <div class="icon-btn btn-outline-success button-effect btn-sm"><i data-feather="phone"></i></div>
                  </div>
                </div>
              </li>
              <li>
                <div class="call-box">
                  <div class="profile online"><img class="bg-img" src="uiDesign/assets/images/contact/1.jpg" alt="Avatar"/></div>
                  <div class="details">
                    <h5>Jony Lynetin</h5>
                    <h6> <i data-feather="arrow-down-right"></i>3:00 pm</h6>
                  </div>
                  <div class="call-status">
                    <div class="icon-btn btn-outline-success button-effect btn-sm"><i data-feather="video"></i></div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <script src="uiDesign/assets/js/jquery-3.7.1.min.js"></script>
    <script src="uiDesign/assets/js/owl.carousel.js"></script>
    <script src="uiDesign/assets/js/popper.min.js"></script>
    <script src="uiDesign/assets/js/tippy-bundle.iife.min.js"></script>
    <script src="uiDesign/assets/js/bootstrap.bundle.js"></script>
    <script src="uiDesign/assets/js/switchery.js"></script>
    <script src="uiDesign/assets/js/easytimer.min.js">        </script>
    <script src="uiDesign/assets/js/index.js">        </script>
    <script src="uiDesign/assets/js/feather-icon/feather.min.js"></script>
    <script src="uiDesign/assets/js/feather-icon/feather-icon.js"></script>
    <!-- <script src="uiDesign/assets/js/ckeditor/ckeditor.js"></script> -->
    <!-- <script src="uiDesign/assets/js/ckeditor/styles.js"></script> -->
    <!-- <script src="uiDesign/assets/js/ckeditor/adapters/jquery.js"></script> -->
    <!-- <script src="uiDesign/assets/js/ckeditor/ckeditor.custom.js"></script> -->
    <script src="uiDesign/assets/js/date-picker/datepicker.js"></script>
    <script src="uiDesign/assets/js/date-picker/datepicker.en.js"></script>
    <script src="uiDesign/assets/js/date-picker/datepicker.custom.js"></script>
    <script src="uiDesign/assets/js/tour/intro.js"></script>
    <script src="uiDesign/assets/js/tour/intro-init.js"></script>
    <script src="uiDesign/assets/js/jquery.magnific-popup.js"></script>
    <script src="uiDesign/assets/js/zoom-gallery.js"></script>
    <script src="uiDesign/assets/js/script.js"></script>
  </body>
</html>