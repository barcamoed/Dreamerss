<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <title>Dreamerss</title>
  <link rel="shortcut icon"  href="{{ asset('img/favicon.png') }}">

  <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" >
    <link rel="stylesheet" href="{{ asset('fonts/open-sans/style.min.css') }}"> <!-- common font  styles  -->
<link rel="stylesheet"  href="{{ asset('fonts/universe-admin/style.css') }}"> <!-- universeadmin icon font styles -->
<link rel="stylesheet" href="{{ asset('fonts/mdi/css/materialdesignicons.min.css') }}"> <!-- meterialdesignicons -->
<link rel="stylesheet"  href="{{ asset('fonts/iconfont/style.css') }}"> <!-- DEPRECATED iconmonstr -->
<link rel="stylesheet"  href="{{ asset('vendor/flatpickr/flatpickr.min.css') }}"> <!-- original flatpickr plugin (datepicker) styles -->
<link rel="stylesheet"  href="{{ asset('vendor/simplebar/simplebar.css') }}"> <!-- original simplebar plugin (scrollbar) styles  -->
<link rel="stylesheet"  href="{{ asset('vendor/tagify/tagify.css') }}"> <!-- styles for tags -->
<link rel="stylesheet"  href="{{ asset('vendor/tippyjs/tippy.css') }}"> <!-- original tippy plugin (tooltip) styles -->
<link rel="stylesheet"  href="{{ asset('vendor/select2/css/select2.min.css') }}"> <!-- original select2 plugin styles -->
<link rel="stylesheet"  href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}"> <!-- original bootstrap styles -->
<link rel="stylesheet" href="{{ asset('css/style.min.css') }}" id="stylesheet"> <!-- universeadmin styles -->

  <script src="{{ asset('js/ie.assign.fix.min.js')}}" ></script>
</head>
<body class="js-loading "> <!-- add for rounded corners: form-controls-rounded -->


<div class="page-preloader js-page-preloader">
  <div class="page-preloader__logo">
    <img  src="{{ asset('img/logo-black-lg.png') }}" alt="" class="page-preloader__logo-image">
  </div>
  <div class="page-preloader__desc">Pro Edition</div>
  <div class="page-preloader__loader">
    <div class="page-preloader__loader-heading">System Loading</div>
    <div class="page-preloader__loader-desc">Widgets update</div>
    <div class="progress progress-rounded page-preloader__loader-progress">
      <div id="page-loader-progress-bar" class="progress-bar bg-info" role="progressbar" style="width: 10%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
  </div>
  <div class="page-preloader__copyright">ThemesAnytime, 2018</div>
</div>


@include('admin.header')



<div class="page-wrap">

  @include('admin.sidebar')

  

  <div class="page-content">
    
<div class="container-fluid container-fh p-activity">
  <div class="main-container main-container--empty container-fh__content">
    <div class="container-header">
      <h2 class="container-heading">Activity</h2>
      <div class="container-header-controls">
        <div class="container-header-tabs">
          <ul class="nav nav-tabs">
            <li class="nav-item">
              <a class="nav-link active" data-toggle="tab" href="#activity-stream">Activity Stream</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#dashboard">Dashboard</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#discussions">Discussions <span class="nav-tabs__link-amount">3</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#tasks">Tasks <span class="nav-tabs__link-amount">3</span></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="container-body">
      <div class="tab-content">
        <div class="tab-pane active" id="activity-stream">
          <div class="p-activity__items">
            <h3 class="p-activity__heading">Recent Activity</h3>
            <div class="p-activity__item">
              <div class="p-activity__item-wrap">
                <span class="p-activity__item-figure p-activity__item-figure--scooter">
                  <span class="ua-icon-arrow-up p-activity__item-icon p-activity__item-icon--lg"></span>
                </span>
                <div class="p-activity__item-info">
                  <a href="#" class="p-activity__item-user">
                    <img src="img/users/user-16.png" width="22" height="22" alt="" class="p-activity__item-user-avatar rounded-circle"> <span>chrislloyd</span>
                  </a> promoted <a href="#" class="link-info">Auto-archive discussion after n-period</a> <span class="text-muted-md">#123</span>
                </div>
              </div>
            </div>
            <div class="p-activity__item">
              <div class="p-activity__item-wrap">
                <span class="p-activity__item-figure">
                  <span class="ua-icon-activity-comments p-activity__item-icon"></span>
                </span>
                <div class="p-activity__item-info">
                  <a href="#" class="p-activity__item-user">
                    <img src="img/users/user-15.png" width="22" height="22" alt="" class="p-activity__item-user-avatar rounded-circle"> <span>Joan Russell</span>
                  </a> commented on <a href="#" class="link-info">Competition to award $100K in prizes to the product that makes the money in 4 mounth</a> <span class="text-muted-md">#656</span>
                </div>
              </div>
            </div>
            <div class="p-activity__item-date">
              <div class="p-activity__item-date-wrap">
                <span class="p-activity__item-date-value">an hour ago</span>
                <span class="p-activity__item-date-figure"></span>
              </div>
            </div>
            <div class="p-activity__item">
              <div class="p-activity__item-wrap">
                <span class="p-activity__item-figure">
                  <span class="ua-icon-activity-comments p-activity__item-icon"></span>
                </span>
                <div class="p-activity__item-info">
                  <a href="#" class="p-activity__item-name link-info">3 comments</a> made on task <a href="#" class="link-info">Signing up for app ideas doesnt work</a> <span class="text-muted-md">#458</span>
                  <div class="p-activity__item-users">
                    <a href="#" class="p-activity__item-user">
                      <img src="img/users/user-13.png" alt="" class="p-activity__item-user-avatar" width="20" height="20">
                    </a>
                    <a href="#" class="p-activity__item-user">
                      <img src="img/users/user-15.png" alt="" class="p-activity__item-user-avatar" width="20" height="20">
                    </a>
                    <a href="#" class="p-activity__item-user">
                      <img src="img/users/user-16.png" alt="" class="p-activity__item-user-avatar" width="20" height="20">
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="p-activity__item">
              <div class="p-activity__item-wrap">
                <span class="p-activity__item-figure p-activity__item-figure--info">
                  <span class="ua-icon-activity-promoted p-activity__item-icon p-activity__item-icon--lg"></span>
                </span>
                <div class="p-activity__item-info">
                  <a href="#" class="p-activity__item-user">
                    <img src="img/users/user-16.png" width="22" height="22" alt="" class="p-activity__item-user-avatar rounded-circle"> <span>chrislloyd</span>
                  </a> promoted <a href="#" class="link-info">Auto-archive discussion after n-period</a> <span class="text-muted-md">#123</span>
                </div>
              </div>
            </div>
            <div class="p-activity__item">
              <div class="p-activity__item-wrap">
                <span class="p-activity__item-figure p-activity__item-figure--info">
                  <span class="ua-icon-activity-edit p-activity__item-icon p-activity__item-icon--lg"></span>
                </span>
                <div class="p-activity__item-info">
                  <a href="#" class="p-activity__item-user">
                    <img src="img/users/user-16.png" width="22" height="22" alt="" class="p-activity__item-user-avatar rounded-circle"> <span>chrislloyd</span>
                  </a> promoted <a href="#" class="link-info">Auto-archive discussion after n-period</a> <span class="text-muted-md">#123</span>
                  <div class="p-activity__item-image">
                    <img src="img/activity/image.png" alt="">
                  </div>
                </div>
              </div>
            </div>
            <div class="p-activity__item">
              <div class="p-activity__item-wrap">
                <span class="p-activity__item-figure">
                  <span class="ua-icon-activity-comments p-activity__item-icon"></span>
                </span>
                <div class="p-activity__item-info">
                  <a href="#" class="p-activity__item-user">
                    <img src="img/users/user-15.png" width="22" height="22" alt="" class="p-activity__item-user-avatar rounded-circle"> <span>Joan Russell</span>
                  </a> commented on <a href="#" class="link-info">Competition to award $100K in prizes to the product that makes the money in 4 mounth</a> <span class="text-muted-md">#656</span>

                  <div class="p-activity__comments">
                    <div class="p-activity__comment">
                      <img src="img/users/user-17.png" width="34" height="34" alt="" class="p-activity__comment-avatar rounded-circle">
                      <div class="p-activity__comment-info">
                        <div class="p-activity__comment-name">
                          <a href="#">Donald Pierce</a> wrote:
                        </div>
                        <div class="p-activity__comment-content">
                          go signup for this app <a href="#" class="link-info">http://example.com/link</a> and you’ll be redirected to
                          <a href="#" class="link-info">...ideas/example.com/vote</a>
                        </div>
                      </div>
                    </div>
                    <div class="p-activity__comment">
                      <img src="img/users/user-17.png" width="34" height="34" alt="" class="p-activity__comment-avatar rounded-circle">
                      <div class="p-activity__comment-info">
                        <div class="p-activity__comment-name">
                          <a href="#">Donald Pierce</a> wrote:
                        </div>
                        <div class="p-activity__comment-content">
                          go signup for this app <a href="#" class="link-info">http://example.com/link</a> and you’ll be redirected to
                          <a href="#" class="link-info">...ideas/example.com/vote</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="p-activity__item-date">
              <div class="p-activity__item-date-wrap">
                <span class="p-activity__item-date-value">2 hours ago</span>
                <span class="p-activity__item-date-figure"></span>
              </div>
            </div>
            <div class="p-activity__item">
              <div class="p-activity__item-wrap">
                <span class="p-activity__item-figure p-activity__item-figure--cornflower-blue">
                  <span class="ua-icon-activity-bookmark p-activity__item-icon p-activity__item-icon-lg p-activity__item-icon--lg"></span>
                </span>
                <div class="p-activity__item-info">
                  A git hub repository was created at <a href="#" class="link-info">app-products/example</a>
                </div>
              </div>
            </div>
            <div class="p-activity__item">
              <div class="p-activity__item-wrap">
                <span class="p-activity__item-figure p-activity__item-figure--yellow-orange">
                  <span class="ua-icon-star p-activity__item-icon p-activity__item-icon--lg"></span>
                </span>
                <div class="p-activity__item-info">
                  <a href="#" class="p-activity__item-user">
                    <img src="img/users/user-16.png" width="22" height="22" alt="" class="p-activity__item-user-avatar rounded-circle"> <span>chrislloyd</span>
                  </a> promoted <a href="#" class="link-info">Auto-archive discussion after n-period</a> <span class="text-muted-md">#123</span>
                </div>
              </div>
            </div>
            <div class="p-activity__item">
              <div class="p-activity__item-wrap">
                <span class="p-activity__item-figure">
                  <span class="ua-icon-activity-pencil p-activity__item-icon p-activity__item-icon--lg"></span>
                </span>
                <div class="p-activity__item-info">
                  <a href="#" class="p-activity__item-user">
                    <img src="img/users/user-16.png" width="22" height="22" alt="" class="p-activity__item-user-avatar rounded-circle"> <span>chrislloyd</span>
                  </a> renamed <span class="text-muted-md text-line-through">Thrust Budger</span> to New App
                </div>
              </div>
            </div>
            <div class="p-activity__item">
              <div class="p-activity__item-wrap">
                <span class="p-activity__item-figure p-activity__item-figure--info">
                  <span class="ua-icon-activity-push p-activity__item-icon"></span>
                </span>
                <div class="p-activity__item-info">
                  <a href="#" class="p-activity__item-user">
                    <img src="img/users/user-16.png" width="22" height="22" alt="" class="p-activity__item-user-avatar rounded-circle"> <span>chrislloyd</span>
                  </a> pushed to master at <a href="#" class="link-info">app-products/example</a>

                  <div class="p-activity__item-info-content">
                    Commit <a href="#" class="link-info">1042a3</a>: "#606 Use gorp in main as well as test"
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane" id="dashboard">
          Dashboard
        </div>
        <div class="tab-pane" id="discussions">
          Discussions
        </div>
        <div class="tab-pane" id="tasks">
          Tasks
        </div>
      </div>
    </div>
  </div>
</div>

  </div>
</div>



<script src="{{ asset('vendor/jquery/jquery.min.js')}}" ></script>
<script  src="{{ asset('vendor/popper/popper.min.js')}}"></script>
<script  src="{{ asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<script  src="{{ asset('vendor/select2/js/select2.full.min.js')}}"></script>
<script  src="{{ asset('vendor/simplebar/simplebar.js')}}"></script>
<script  src="{{ asset('vendor/text-avatar/jquery.textavatar.js')}}"></script>
<script  src="{{ asset('vendor/tippyjs/tippy.all.min.js')}}"></script>
<script  src="{{ asset('vendor/flatpickr/flatpickr.min.js')}}"></script>
<script  src="{{ asset('vendor/wnumb/wNumb.js')}}"></script>
<script src="{{ asset('js/main.js')}}"></script>



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

<script  src="{{ asset('js/preview/settings-panel.min.js')}}"></script>




  <div class="slide-nav">
  <div class="slide-nav__header">
    <a href="#" class="slide-nav__back ua-icon-step-arrow-left"></a>
    <img  src="{{ asset('img/logo.png')}}" alt="" class="slide-nav__logo">
  </div>
  <div class="slide-nav__body">
    <div class="slide-nav__scrollpane js-scrollable">
      <div class="slide-nav__items">
        <a href="#" class="slide-nav__item">
          <img src="{{ asset('img/slidenav/30.png')}}" alt="" class="slide-nav__item-image">
          <span class="slide-nav__item-text">Storage</span>
        </a>
        <a href="#" class="slide-nav__item">
          <img  src="{{ asset('img/slidenav/31.png')}}" alt="" class="slide-nav__item-image">
          <span class="slide-nav__item-text">Search</span>
        </a>
        <a href="#" class="slide-nav__item">
          <img src="{{ asset('img/slidenav/32.png')}}"  alt="" class="slide-nav__item-image">
          <span class="slide-nav__item-text">Calendar</span>
        </a>
        <a href="#" class="slide-nav__item">
          <img src="{{ asset('img/slidenav/33.png')}}" alt="" class="slide-nav__item-image">
          <span class="slide-nav__item-text">Mail</span>
        </a>
        <a href="#" class="slide-nav__item">
          <img src="{{ asset('img/slidenav/34.png')}}" alt="" class="slide-nav__item-image">
          <span class="slide-nav__item-text">Images</span>
        </a>
        <a href="#" class="slide-nav__item">
          <img src="{{ asset('img/slidenav/35.png')}}" alt="" class="slide-nav__item-image">
          <span class="slide-nav__item-text">News</span>
        </a>
        <a href="#" class="slide-nav__item">
          <img src="{{ asset('img/slidenav/36.png')}}" alt="" class="slide-nav__item-image">
          <span class="slide-nav__item-text">Maps</span>
        </a>
        <a href="#" class="slide-nav__item">
          <img src="{{ asset('img/slidenav/37.png')}}" alt="" class="slide-nav__item-image">
          <span class="slide-nav__item-text">Market</span>
        </a>
        <a href="#" class="slide-nav__item">
          <img src="{{ asset('img/slidenav/38.png')}}" alt="" class="slide-nav__item-image">
          <span class="slide-nav__item-text">Weather</span>
        </a>
        <a href="#" class="slide-nav__item">
          <img src="{{ asset('img/slidenav/39.png')}}" alt="" class="slide-nav__item-image">
          <span class="slide-nav__item-text">Music</span>
        </a>
        <a href="#" class="slide-nav__item">
          <img src="{{ asset('img/slidenav/40.png')}}" alt="" class="slide-nav__item-image">
          <span class="slide-nav__item-text">Tickets</span>
        </a>
        <a href="#" class="slide-nav__item">
          <img src="{{ asset('img/slidenav/41.png')}}" alt="" class="slide-nav__item-image">
          <span class="slide-nav__item-text">Stats</span>
        </a>
      </div>
    </div>
  </div>
</div>
<script src="{{ asset('js/preview/slide-nav.min.js')}}"></script>



</body>
</html>
