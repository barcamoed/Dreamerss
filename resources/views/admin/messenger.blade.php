<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <title>Dreamerss</title>
  <link rel="shortcut icon" href="img/favicon.png">


    <link rel="stylesheet" href="fonts/open-sans/style.min.css"> <!-- common font  styles  -->
<link rel="stylesheet" href="fonts/universe-admin/style.css"> <!-- universeadmin icon font styles -->
<link rel="stylesheet" href="fonts/mdi/css/materialdesignicons.min.css"> <!-- meterialdesignicons -->
<link rel="stylesheet" href="fonts/iconfont/style.css"> <!-- DEPRECATED iconmonstr -->
<link rel="stylesheet" href="vendor/flatpickr/flatpickr.min.css"> <!-- original flatpickr plugin (datepicker) styles -->
<link rel="stylesheet" href="vendor/simplebar/simplebar.css"> <!-- original simplebar plugin (scrollbar) styles  -->
<link rel="stylesheet" href="vendor/tagify/tagify.css"> <!-- styles for tags -->
<link rel="stylesheet" href="vendor/tippyjs/tippy.css"> <!-- original tippy plugin (tooltip) styles -->
<link rel="stylesheet" href="vendor/select2/css/select2.min.css"> <!-- original select2 plugin styles -->
<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css"> <!-- original bootstrap styles -->
<link rel="stylesheet" href="css/style.min.css" id="stylesheet"> <!-- universeadmin styles -->
  <style type="text/css">
    .chat-box {
      position:fixed;
      right:15px;
      bottom:0;
      box-shadow:0 0 0.1em #000;
    }

    .chat-closed {
      width: 250px;
      height: 35px;
      background: #8bc34a;
      line-height: 35px;
      font-size: 18px;
      text-align: center;
      border:1px solid #777;
      color: #000;
    }

    .chat-header {
      width: 250px;
      height: 35px;
      background: #8bc34a;
      line-height: 33px;
      text-indent: 20px;
      border:1px solid #777;
      border-bottom:none;
    }

    .chat-content{
      width:250px;
      height:300px;
      background:#ffffff;
      border:1px solid #777;
      overflow-y:auto;
      word-wrap: break-word;
    }

    .box{
      width:10px;
      height:10px;
      background:green;
      float:left;
      position:relative;
      top: 11px;
      left: 10px;
      border:1px solid #ededed;
    }

    .hide {
      display:none;
    }
  </style>


  <script src="js/ie.assign.fix.min.js"></script>
</head>
<body class="js-loading "> <!-- add for rounded corners: form-controls-rounded -->



<div class="page-preloader js-page-preloader">
  <div class="page-preloader__logo">
    <img src="img/logo-black-lg.png" alt="" class="page-preloader__logo-image">
  </div>
  <div class="page-preloader__desc">Welcome</div>
  <div class="page-preloader__loader">
    <div class="page-preloader__loader-heading">System Loading</div>
    <div class="page-preloader__loader-desc"></div>
    <div class="progress progress-rounded page-preloader__loader-progress">
      <div id="page-loader-progress-bar" class="progress-bar bg-info" role="progressbar" style="width: 10%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
  </div>
  <div class="page-preloader__copyright">Dreamerss, 2018</div>
</div>



@include('admin.header')


<div class="page-wrap">

  @include('admin.sidebar')

  <div class="page-content">

<div class="container-fluid m-messenger">
  <div class="main-container m-messenger__container">
    <div class="m-messenger__discussions">
      {{--<ul class="nav nav-tabs m-messenger__discussions-header">--}}
        {{--<li class="nav-item">--}}
          {{--<a class="nav-link active" id="messenger-recent" data-toggle="tab" href="#messenger-recent-tab">--}}
            {{--<span class="tab-icon ua-icon-messages"></span>--}}
            {{--<span class="tab-text">Chats</span>--}}
          {{--</a>--}}
        {{--</li>--}}
        {{--<li class="nav-item">--}}
          {{--<a class="nav-link" id="messenger-contacts" data-toggle="tab" href="#messenger-contacts-tab">--}}
            {{--<span class="tab-icon ua-icon-users tab-icon-contacts"></span>--}}
            {{--<span class="tab-text">Contacts</span>--}}
          {{--</a>--}}
        {{--</li>--}}
        {{--<li class="nav-item">--}}
          {{--<a class="nav-link" id="messenger-favorites" data-toggle="tab" href="#messenger-favorites-tab">--}}
            {{--<span class="tab-icon ua-icon-star-outline-alt tab-icon-favorites"></span>--}}
            {{--<span class="tab-text">Favorites</span>--}}
          {{--</a>--}}
        {{--</li>--}}
      {{--</ul>--}}
      <div class="tab-content m-messenger__discussions-body">
        <div class="tab-pane show active" id="messenger-recent-tab">
          <div class="m-messenger__discussions-search">
            <div class="input-group input-group-icon iconfont icon-right mb-0">
              <input class="form-control" type="text" placeholder="Search users by name...">
              <span class="input-icon ua-icon-search"></span>
            </div>
          </div>
          <div class="m-messenger__discussions-content">
            <div class="m-messenger__discussions-scrollpane js-scrollable">
              {{--<div class="m-messenger__conversation">--}}
                {{--<div class="m-messenger__conversation-group">--}}
                  {{--<img src="img/users/user-11.png" alt="" width="16" height="16" class="rounded-circle m-messenger__conversation-group-item">--}}
                  {{--<img src="img/users/user-10.png" alt="" width="16" height="16" class="rounded-circle m-messenger__conversation-group-item">--}}
                  {{--<img src="img/users/user-9.png" alt="" width="16" height="16" class="rounded-circle m-messenger__conversation-group-item">--}}
                  {{--<span class="m-messenger__conversation-group-item">+3</span>--}}
                {{--</div>--}}
                {{--<div class="m-messenger__conversation-wrap">--}}
                  {{--<div class="m-messenger__conversation-header">--}}
                    {{--<span class="m-messenger__conversation-username">Roxanne Abrams</span>--}}
                    {{--<span class="m-messenger__conversation-new-messages-amount">32</span>--}}
                  {{--</div>--}}
                  {{--<div class="m-messenger__conversation-message">Hi, how can I help you?</div>--}}
                {{--</div>--}}
              {{--</div>--}}
{{--{{$userName->user}}--}}
              @foreach($userName as $uName)
                @foreach($uName as $user)
                {{--{{$uName}}--}}
              <div class="m-messenger__conversation" onclick="changeChatUser({{$user->id}})">
                <div class="m-messenger__conversation-avatar">
                  <img src="img/users/user-11.png" alt="" width="34" height="34" class="rounded-circle">
                  <span class="m-messenger__conversation-user-status is-online"></span>
                </div>
                <div class="m-messenger__conversation-wrap">
                  <div class="m-messenger__conversation-header">
                    <span class="m-messenger__conversation-username">Chat with {{$user->username}}</span>
                    {{--<span class="m-messenger__conversation-date">13.06.17</span>--}}
                  </div>
                  {{--<div class="m-messenger__conversation-message">Hi, how can I help you?</div>--}}
                </div>
              </div>

                @endforeach
              @endforeach

            </div>
          </div>
        </div>
        <div class="tab-pane" id="messenger-contacts-tab">
          <div class="m-messenger__contacts-search">
            <div class="input-group input-group-icon iconfont icon-right mb-0">
              <input class="form-control" type="text" placeholder="Search users by name...">
              <span class="input-icon ua-icon-search"></span>
            </div>
            <div class="m-messenger__contacts-filter">
              <div class="dropdown">
                <a class="dropdown-toggle" href="#" data-toggle="dropdown">All users</a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#">All users</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </div>
              <a href="#" class="btn btn-sm btn-outline-secondary m-messenger__add-contact">Add Contact</a>
            </div>
          </div>
          <div class="m-messenger__contacts-content">
            <div class="m-messenger__discussions-scrollpane js-scrollable">
              <div class="m-messenger__contacts-content-separator">A</div>
              <div class="m-messenger__conversation">
                <div class="m-messenger__conversation-avatar">
                  <img src="img/users/user-11.png" alt="" width="34" height="34" class="rounded-circle">
                  <span class="m-messenger__conversation-user-status is-online"></span>
                </div>
                <div class="m-messenger__conversation-wrap">
                  <div class="m-messenger__conversation-header">
                    <span class="m-messenger__conversation-username">Roxanne Abrams</span>
                  </div>
                </div>
              </div>
              <div class="m-messenger__conversation">
                <div class="m-messenger__conversation-avatar">
                  <img src="img/users/user-12.png" alt="" width="34" height="34" class="rounded-circle">
                </div>
                <div class="m-messenger__conversation-wrap">
                  <div class="m-messenger__conversation-header">
                    <span class="m-messenger__conversation-username">Roxanne Abrams</span>
                  </div>
                </div>
              </div>
              <div class="m-messenger__conversation">
                <div class="m-messenger__conversation-avatar">
                  <img src="img/users/user-13.png" alt="" width="34" height="34" class="rounded-circle">
                </div>
                <div class="m-messenger__conversation-wrap">
                  <div class="m-messenger__conversation-header">
                    <span class="m-messenger__conversation-username">Roxanne Abrams</span>
                  </div>
                </div>
              </div>
              <div class="m-messenger__conversation">
                <div class="m-messenger__conversation-avatar">
                  <img src="img/users/user-14.png" alt="" width="34" height="34" class="rounded-circle">
                  <span class="m-messenger__conversation-user-status is-online"></span>
                </div>
                <div class="m-messenger__conversation-wrap">
                  <div class="m-messenger__conversation-header">
                    <span class="m-messenger__conversation-username">Roxanne Abrams</span>
                  </div>
                </div>
              </div>
              <div class="m-messenger__contacts-content-separator">B</div>
              <div class="m-messenger__conversation">
                <div class="m-messenger__conversation-avatar">
                  <img src="img/users/user-15.png" alt="" width="34" height="34" class="rounded-circle">
                </div>
                <div class="m-messenger__conversation-wrap">
                  <div class="m-messenger__conversation-header">
                    <span class="m-messenger__conversation-username">Roxanne Abrams</span>
                  </div>
                </div>
              </div>
              <div class="m-messenger__conversation">
                <div class="m-messenger__conversation-avatar">
                  <img src="img/users/user-16.png" alt="" width="34" height="34" class="rounded-circle">
                </div>
                <div class="m-messenger__conversation-wrap">
                  <div class="m-messenger__conversation-header">
                    <span class="m-messenger__conversation-username">Roxanne Abrams</span>
                  </div>
                </div>
              </div>
              <div class="m-messenger__conversation">
                <div class="m-messenger__conversation-avatar">
                  <img src="img/users/user-17.png" alt="" width="34" height="34" class="rounded-circle">
                </div>
                <div class="m-messenger__conversation-wrap">
                  <div class="m-messenger__conversation-header">
                    <span class="m-messenger__conversation-username">Roxanne Abrams</span>
                  </div>
                </div>
              </div>
              <div class="m-messenger__contacts-content-separator">C</div>
              <div class="m-messenger__conversation">
                <div class="m-messenger__conversation-avatar">
                  <img src="img/users/user-15.png" alt="" width="34" height="34" class="rounded-circle">
                </div>
                <div class="m-messenger__conversation-wrap">
                  <div class="m-messenger__conversation-header">
                    <span class="m-messenger__conversation-username">Roxanne Abrams</span>
                  </div>
                </div>
              </div>
              <div class="m-messenger__conversation">
                <div class="m-messenger__conversation-avatar">
                  <img src="img/users/user-16.png" alt="" width="34" height="34" class="rounded-circle">
                </div>
                <div class="m-messenger__conversation-wrap">
                  <div class="m-messenger__conversation-header">
                    <span class="m-messenger__conversation-username">Roxanne Abrams</span>
                  </div>
                </div>
              </div>
              <div class="m-messenger__conversation">
                <div class="m-messenger__conversation-avatar">
                  <img src="img/users/user-17.png" alt="" width="34" height="34" class="rounded-circle">
                </div>
                <div class="m-messenger__conversation-wrap">
                  <div class="m-messenger__conversation-header">
                    <span class="m-messenger__conversation-username">Roxanne Abrams</span>
                  </div>
                </div>
              </div>
              <div class="m-messenger__contacts-content-separator">D</div>
              <div class="m-messenger__conversation">
                <div class="m-messenger__conversation-avatar">
                  <img src="img/users/user-15.png" alt="" width="34" height="34" class="rounded-circle">
                </div>
                <div class="m-messenger__conversation-wrap">
                  <div class="m-messenger__conversation-header">
                    <span class="m-messenger__conversation-username">Roxanne Abrams</span>
                  </div>
                </div>
              </div>
              <div class="m-messenger__conversation">
                <div class="m-messenger__conversation-avatar">
                  <img src="img/users/user-16.png" alt="" width="34" height="34" class="rounded-circle">
                </div>
                <div class="m-messenger__conversation-wrap">
                  <div class="m-messenger__conversation-header">
                    <span class="m-messenger__conversation-username">Roxanne Abrams</span>
                  </div>
                </div>
              </div>
              <div class="m-messenger__conversation">
                <div class="m-messenger__conversation-avatar">
                  <img src="img/users/user-17.png" alt="" width="34" height="34" class="rounded-circle">
                </div>
                <div class="m-messenger__conversation-wrap">
                  <div class="m-messenger__conversation-header">
                    <span class="m-messenger__conversation-username">Roxanne Abrams</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane" id="messenger-favorites-tab">

        </div>
      </div>
    </div>
    <div class="m-messenger__messages">
{{--      <div class="m-messenger__messages-header">--}}
{{--        <div class="m-messenger__messages-to">To: <a href="#">Rebecca Harris</a></div>--}}
{{--        <div class="m-messenger__messages-actions">--}}
{{--          <span class="m-messenger__messages-action ua-icon-comment"></span>--}}
{{--          <span class="m-messenger__messages-action ua-icon-phone"></span>--}}
{{--          <span class="m-messenger__messages-action ua-icon-video"></span>--}}
{{--        </div>--}}
{{--      </div>--}}
      <div class="m-messenger__messages-body">
        <div class="m-messenger__messages-body-scrollpane js-scrollable">
          <div class="m-messenger__messages-block">



          </div>


          <div id="senderMessages">



          </div>

          <div id=" receiverMessages">

          <div class="m-messenger__messages-message is-interlocutor">
            <img src="img/users/user-8.png" alt="" width="34" height="34" class="rounded-circle m-messenger__messages-avatar">
            <div class="m-messenger__messages-wrap">
              <div class="m-messenger__messages-message-text" id="sentMessages">Good afternoon, Rebecca! Need an online consultant for the site?</div>
              <span class="m-messenger__messages-date">1:25 am</span>
            </div>
          </div>

          </div>


        </div>
      </div>
      <div class="m-messenger__messages-footer">

        <div class="m-messenger__messages-textarea">
          <textarea id="message" name="message" class="form-control" placeholder="Type your message here..."></textarea>
        </div>

        <div class="m-messenger__messages-footer-actions dropup">

          <div class="dropdown">
            <a href="#" class="btn btn-link dropdown-toggle" data-toggle="dropdown">
              <span class="ua-icon-addon"></span>
            </a>

{{--            <div class="dropdown-menu">--}}
{{--              <a class="dropdown-item" href="#">Add file</a>--}}
{{--              <a class="dropdown-item" href="#">Add video</a>--}}
{{--              <a class="dropdown-item" href="#">Add image</a>--}}
{{--            </div>--}}

          </div>
          <button class="btn btn-info m-messenger__messages-footer-submit" onclick="sentMessage()">Submit</button>
        </div>

      </div>
    </div>


{{--    <div class="m-messenger__info js-scrollable">--}}
{{--      <div class="m-messenger__info-user">--}}
{{--        <img src="img/users/user-lg-1.png" alt="" width="110" height="110" class="m-messenger__info-avatar">--}}
{{--        <span class="m-messenger__info-username">Rebecca Harris</span>--}}
{{--        <span class="m-messenger__info-location">San Francisco, CA</span>--}}
{{--        <div class="m-messenger__info-social">--}}
{{--          <a href="#" class="m-messenger__info-social-icon ua-icon-social-facebook-sm color-facebook"></a>--}}
{{--          <a href="#" class="m-messenger__info-social-icon ua-icon-social-twitter-sm color-twitter"></a>--}}
{{--          <a href="#" class="m-messenger__info-social-icon ua-icon-social-google-plus-sm color-google-plus"></a>--}}
{{--        </div>--}}
{{--      </div>--}}
{{--      <div class="m-messenger__info-item">--}}
{{--        <h6 class="m-messenger__info-heading">--}}
{{--          <span class="m-messenger__info-heading-icon ua-icon-folder"></span>--}}
{{--          Shared files--}}
{{--        </h6>--}}
{{--        <ul class="list-unstyled m-messenger__info-files">--}}
{{--          <li>--}}
{{--            <a href="#">Annual Revenue.pdf</a>--}}
{{--          </li>--}}
{{--          <li>--}}
{{--            <a href="#">Expenses.xls</a>--}}
{{--          </li>--}}
{{--          <li>--}}
{{--            <a href="#">Design mockups.sketch</a>--}}
{{--          </li>--}}
{{--        </ul>--}}
{{--      </div>--}}
{{--      <div class="m-messenger__info-item">--}}
{{--        <h6 class="m-messenger__info-heading">--}}
{{--          <span class="m-messenger__info-heading-icon ua-icon-image"></span>--}}
{{--          Shared photos--}}
{{--        </h6>--}}
{{--        <div class="m-messenger__info-photos">--}}
{{--          <a href="#">--}}
{{--            <img src="img/messenger/1.png" alt="">--}}
{{--          </a>--}}
{{--          <a href="#">--}}
{{--            <img src="img/messenger/2.png" alt="">--}}
{{--          </a>--}}
{{--          <a href="#">--}}
{{--            <img src="img/messenger/3.png" alt="">--}}
{{--          </a>--}}
{{--          <a href="#">--}}
{{--            <img src="img/messenger/4.png" alt="">--}}
{{--          </a>--}}
{{--        </div>--}}
{{--      </div>--}}
{{--    </div>--}}
  </div>
</div>


  </div>
</div>



  <script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/popper/popper.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="vendor/select2/js/select2.full.min.js"></script>
<script src="vendor/simplebar/simplebar.js"></script>
<script src="vendor/text-avatar/jquery.textavatar.js"></script>
<script src="vendor/tippyjs/tippy.all.min.js"></script>
<script src="vendor/flatpickr/flatpickr.min.js"></script>
<script src="vendor/wnumb/wNumb.js"></script>
<script src="js/main.js"></script>



<div class="sidebar-mobile-overlay"></div>


  <div class="settings-panel">
  <div class="settings-panel__header">
    <span class="settings-panel__close ua-icon-modal-close"></span>

    <h5 class="settings-panel__heading">Theme Customizer</h5>
    <div class="settings-panel__desc">Customize & Preview In Real Time</div>
  </div>
  <div class="settings-panel__body">
    <div class="settings-panel__layout-options">
      <h6 class="settings-panel__block-heading">Layout Options</h6>
      <div class="settings-panel__layout-option">
        <label class="switch-inline">
          <span class="switch">
            <input type="checkbox" id="collapse-sidebar">
              <span class="switch-slider"></span>
            </span>
            <span class="switch-inline__text">Collapse Sidebar</span>
        </label>
      </div>
      <div class="settings-panel__layout-option">
        <label class="switch-inline">
          <span class="switch">
            <input type="checkbox" id="hide-sidebar">
              <span class="switch-slider"></span>
            </span>
            <span class="switch-inline__text">Hide Sidebar</span>
        </label>
      </div>
      <div class="settings-panel__layout-option">
        <label class="switch-inline">
          <span class="switch">
            <input type="checkbox" id="full-height-sidebar">
              <span class="switch-slider"></span>
            </span>
          <span class="switch-inline__text">Full Height Sidebar</span>
        </label>
      </div>
      <div class="settings-panel__layout-option">
        <label class="switch-inline">
          <span class="switch">
            <input type="checkbox" id="rounded-form-controls">
              <span class="switch-slider"></span>
            </span>
          <span class="switch-inline__text">Rounded Form Controls</span>
        </label>
      </div>
    </div>
    <div class="settings-panel__theme-colors">
      <h6 class="settings-panel__block-heading">Theme Colors</h6>

      <ul class="list-unstyled">
        <!--<li>
          <label class="color-radio js-settings-color">
            <input type="radio" name="settings_color" data-style="style-a">
            <span class="color-radio__color"></span>
            <span class="color-radio__text">#1</span>
          </label>
        </li>-->
        <li>
          <label class="color-radio js-settings-color">
            <input type="radio" name="settings_color" data-style="style-b">
            <span class="color-radio__color color-radio__color--deep-cerulean"></span>
            <span class="color-radio__text">#2</span>
          </label>
        </li>
        <li>
          <label class="color-radio js-settings-color is-checked">
            <input type="radio" name="settings_color" data-style="style" checked>
            <span class="color-radio__color color-radio__color--river-bad"></span>
            <span class="color-radio__text">#3</span>
          </label>
        </li>
        <li>
          <label class="color-radio js-settings-color">
            <input type="radio" name="settings_color" data-style="style-d">
            <span class="color-radio__color color-radio__color--sun-juan"></span>
            <span class="color-radio__text">#4</span>
          </label>
        </li>
        <li>
          <label class="color-radio js-settings-color">
            <input type="radio" name="settings_color" data-style="style-e">
            <span class="color-radio__color color-radio__color--bermuda-gray"></span>
            <span class="color-radio__text">#5</span>
          </label>
        </li>
        <li>
          <label class="color-radio js-settings-color">
            <input type="radio" name="settings_color" data-style="style-f">
            <span class="color-radio__color color-radio__color--deep-sea"></span>
            <span class="color-radio__text">#6</span>
          </label>
        </li>
        <li>
          <label class="color-radio js-settings-color">
            <input type="radio" name="settings_color" data-style="style-i">
            <span class="color-radio__color color-radio__color--wine-berry"></span>
            <span class="color-radio__text">#7</span>
          </label>
        </li>
        <li>
          <label class="color-radio js-settings-color">
            <input type="radio" name="settings_color" data-style="style-g">
            <span class="color-radio__color  color-radio__color--big-stone"></span>
            <span class="color-radio__text">#8</span>
          </label>
        </li>
        <li>
          <label class="color-radio js-settings-color">
            <input type="radio" name="settings_color" data-style="style-j">
            <span class="color-radio__color color-radio__color--killarney"></span>
            <span class="color-radio__text">#9</span>
          </label>
        </li>
        <li>
          <label class="color-radio js-settings-color">
            <input type="radio" name="settings_color" data-style="style-h">
            <span class="color-radio__color color-radio__color--kabul"></span>
            <span class="color-radio__text">#10</span>
          </label>
        </li>
      </ul>
    </div>
  </div>
</div>

<span class="settings-panel-control">
  <span class="settings-panel-control__icon ua-icon-settings"></span>
</span>
<script src="js/preview/settings-panel.min.js"></script>




  <div class="slide-nav">
  <div class="slide-nav__header">
    <a href="#" class="slide-nav__back ua-icon-step-arrow-left"></a>
    <img src="img/logo.png" alt="" class="slide-nav__logo">
  </div>
  <div class="slide-nav__body">
    <div class="slide-nav__scrollpane js-scrollable">
      <div class="slide-nav__items">
        <a href="#" class="slide-nav__item">
          <img src="img/slidenav/30.png" alt="" class="slide-nav__item-image">
          <span class="slide-nav__item-text">Storage</span>
        </a>
        <a href="#" class="slide-nav__item">
          <img src="img/slidenav/31.png" alt="" class="slide-nav__item-image">
          <span class="slide-nav__item-text">Search</span>
        </a>
        <a href="#" class="slide-nav__item">
          <img src="img/slidenav/32.png" alt="" class="slide-nav__item-image">
          <span class="slide-nav__item-text">Calendar</span>
        </a>
        <a href="#" class="slide-nav__item">
          <img src="img/slidenav/33.png" alt="" class="slide-nav__item-image">
          <span class="slide-nav__item-text">Mail</span>
        </a>
        <a href="#" class="slide-nav__item">
          <img src="img/slidenav/34.png" alt="" class="slide-nav__item-image">
          <span class="slide-nav__item-text">Images</span>
        </a>
        <a href="#" class="slide-nav__item">
          <img src="img/slidenav/35.png" alt="" class="slide-nav__item-image">
          <span class="slide-nav__item-text">News</span>
        </a>
        <a href="#" class="slide-nav__item">
          <img src="img/slidenav/36.png" alt="" class="slide-nav__item-image">
          <span class="slide-nav__item-text">Maps</span>
        </a>
        <a href="#" class="slide-nav__item">
          <img src="img/slidenav/37.png" alt="" class="slide-nav__item-image">
          <span class="slide-nav__item-text">Market</span>
        </a>
        <a href="#" class="slide-nav__item">
          <img src="img/slidenav/38.png" alt="" class="slide-nav__item-image">
          <span class="slide-nav__item-text">Weather</span>
        </a>
        <a href="#" class="slide-nav__item">
          <img src="img/slidenav/39.png" alt="" class="slide-nav__item-image">
          <span class="slide-nav__item-text">Music</span>
        </a>
        <a href="#" class="slide-nav__item">
          <img src="img/slidenav/40.png" alt="" class="slide-nav__item-image">
          <span class="slide-nav__item-text">Tickets</span>
        </a>
        <a href="#" class="slide-nav__item">
          <img src="img/slidenav/41.png" alt="" class="slide-nav__item-image">
          <span class="slide-nav__item-text">Stats</span>
        </a>
      </div>
    </div>
  </div>
</div>
<script src="js/preview/slide-nav.min.js"></script>
<script src="https://js.pusher.com/4.4/pusher.min.js"></script>
<script>

  var pusher = new Pusher('7fba0d0ef6faf9172064',{
    encrypted:true,
    cluster:'mt1',
  });
    console.log("KKKKKey",pusher);
    var channel = pusher.subscribe("chat_chanel");
    console.log("Channel",channel);
  // pusher.disconnect();
    var state = pusher.connection.state;
    console.log("state",state);

    channel.bind('pusher:subscription_succeeded', function(status) {
    console.log("Succeeded");
  });

  // Pusher.log = function(message) {
  //   if (window.console && window.console.log) {
  //     window.console.log(message);
  //   }
  // };

    channel.bind('chat_saved', function(data){
      var event = new CustomEvent("incoming_chat",data);
      event.data = data;
      dispatchEvent(event);
      // console.log("Event",data);
  });
  //
    addEventListener("incoming_chat", function(chatMessage) {
    incomingChat(chatMessage.data.message);
    console.log("Eventtttttttt"); // Prints "Example of an event"
  });
  //

  function incomingChat(chatMessage)
  {
    console.log("Message",chatMessage);
    userMessages.push(chatMessage);
    console.log(userMessages);
    var adminMessages = document.getElementById('adminMessages');
    adminMessages.innerHTML = "";
    for (var i=0; i<userMessages.length; i++)
    {
      adminMessages.innerHTML += userMessages[i].message;
    }
    // console.log(userMessages);
  }

  var userMessages;
  var user_Id=null;
  function changeChatUser(userId)
  {
// window.alert(document.getElementById('categorySelect').value);
    user_Id = userId;
    console.log("User Id",userId);
    var adminMessages = document.getElementById('adminMessages');
    var senderMessages = document.getElementById('senderMessages');
    var $dropdown = $("#adminMessages");

    $.ajax({
      url: "http://localhost:8000/getMessages/"+user_Id,
      type: "get", //send it through get method
      success: function(response) {
          // adminMessages.innerHTML = "";
          // senderMessages.innerHTML = "";
        userMessages = response.userChat;
        for (var i=0; i < response.userChat.length; i++)
        {
          var adminMessages = document.getElementById('adminMessages');
          console.log(response.userChat[i].message);

          $('#senderMessages').html(response.userChat[i].message);
          // alert('Load was performed.');
          // adminMessages.innerHTML += response.userChat[i].message;
          // senderMessages.innerHTML += '"<h1>" +${response.userChat[i].message}+"</h1>"'

          //
          //         "<div class=\"m-messenger__messages-message is-self\">\n<img src=\"img/users/user-9.png\" alt=\"\" width=\"34\" height=\"34\" class=\"rounded-circle m-messenger__messages-avatar\">\n<div class=\"m-messenger__messages-wrap\">\n<div class=\"m-messenger__messages-message-text\" id=\"adminMessages\">\n" + $("#result").html( response.userChat[i].message)</div>\n +
          // "              <span class=\"m-messenger__messages-date\">1:25 am</span>\n" +
          // "            </div>\n" +
          // "          </div>"



          // adminMessages.innerHTML=+response.userChat[i].message


        }
      },
    })
  }

  function sentMessage()
  {

    var userId = user_Id;
    console.log("User Id",userId);

    var message = $('#message').val();
    console.log("Message",message);
    $.ajax({
      url: "http://localhost:8000/sendMessage/"+userId,
      type: "post",
      data: {message:message},
      success: function(response)
      {
        // console.log("Hooray, It worked!");
        $('#message').val('');
      },
    })
  }
</script>


</body>
</html>
