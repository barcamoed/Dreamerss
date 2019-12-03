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


    <link rel="stylesheet"  href="{{ asset('fonts/open-sans/style.min.css') }}"> <!-- common font  styles  -->
    <link rel="stylesheet"  href="{{ asset('fonts/universe-admin/style.css') }}"> <!-- universeadmin icon font styles -->
    <link rel="stylesheet"  href="{{ asset('fonts/mdi/css/materialdesignicons.min.css') }}"> <!-- meterialdesignicons -->
    <link rel="stylesheet"  href="{{ asset('fonts/iconfont/style.css') }}"> <!-- DEPRECATED iconmonstr -->
    <link rel="stylesheet"  href="{{ asset('vendor/flatpickr/flatpickr.min.css') }}"> <!-- original flatpickr plugin (datepicker) styles -->
    <link rel="stylesheet"  href="{{ asset('vendor/simplebar/simplebar.css') }}"> <!-- original simplebar plugin (scrollbar) styles  -->
    <link rel="stylesheet"  href="{{ asset('vendor/tagify/tagify.css') }}"> <!-- styles for tags -->
    <link rel="stylesheet"  href="{{ asset('vendor/tippyjs/tippy.css') }}"> <!-- original tippy plugin (tooltip) styles -->
    <link rel="stylesheet"  href="{{ asset('vendor/select2/css/select2.min.css') }}"> <!-- original select2 plugin styles -->
    <link rel="stylesheet"  href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}"> <!-- original bootstrap styles -->
    <link rel="stylesheet"  id="stylesheet" href="{{ asset('css/style.min.css') }}"> <!-- universeadmin styles -->



    <script src="{{ asset('js/ie.assign.fix.min.js') }}"></script>
</head>
<body class="js-loading "> <!-- add for rounded corners: form-controls-rounded -->



{{--<div class="page-preloader js-page-preloader">--}}
{{--<div class="page-preloader__logo">--}}
{{--<img src="{{ asset('img/logo-black-lg.png') }}" alt="" class="page-preloader__logo-image">--}}
{{--</div>--}}
{{--<div class="page-preloader__desc">Pro Edition</div>--}}
{{--<div class="page-preloader__loader">--}}
{{--<div class="page-preloader__loader-heading">System Loading</div>--}}
{{--<div class="page-preloader__loader-desc">Widgets update</div>--}}
{{--<div class="progress progress-rounded page-preloader__loader-progress">--}}
{{--<div id="page-loader-progress-bar" class="progress-bar bg-info" role="progressbar" style="width: 10%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>--}}
{{--</div>--}}
{{--</div>--}}
{{--<div class="page-preloader__copyright">ThemesAnytime, 2018</div>--}}
{{--</div>--}}

@include('admin.header')

<div class="page-wrap">

    @include('admin.sidebar')

    <div class="page-content">

        <div class="container-fluid">
            {{--<div class="page-content__header">--}}
            {{--<div>--}}
            {{--<h2 class="page-content__header-heading">Form Inputs</h2>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--<div class="main-container">--}}
            {{--<h3>Form Elements</h3>--}}
            {{--<div class="row">--}}
            {{--<div class="col-3">--}}
            {{--<h4>Input</h4>--}}
            {{--<div class="form-group">--}}
            {{--<input type="text" placeholder="Favorite NBA Team" class="form-control">--}}
            {{--</div>--}}
            {{--<div class="form-group">--}}
            {{--<label for="disabled">Disabled</label>--}}
            {{--<input id="disabled" type="text" placeholder="Favorite NBA Team" class="form-control" disabled>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-3">--}}
            {{--<h4>Input with label</h4>--}}
            {{--<div class="form-group">--}}
            {{--<input type="text" placeholder="Favorite NBA Team" class="form-control">--}}
            {{--</div>--}}
            {{--<div class="form-group">--}}
            {{--<label for="read-only">Read Only</label>--}}
            {{--<input id="read-only" type="text" placeholder="Favorite NBA Team" class="form-control" readonly>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-6">--}}
            {{--<h4>Textarea</h4>--}}
            {{--<div class="form-group">--}}
            {{--<textarea rows="5" placeholder="Favorite NBA Team" class="form-control"></textarea>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</div>--}}
        </div>

        <div class="main-container">
            {{--<h3>Inputs</h3>--}}
            <form method="POST" role="form" enctype="multipart/form-data" action="{{ route('addCategory') }}">
                <div class="row">
                    <div class="col-5">
                        {{--<h4>Default</h4>--}}


                        <div class="input-group ">
                            <label style="margin-right: 1%">Category Name</label>
                            <input class="form-control" name="name">
                            <span class="input-icon "></span>
                        </div>

                        <div class="col-5">
                            <img src="" id="profile-img-tag" width="200px" />
                        </div>

                     <div class="col-5" style="margin-bottom: 10px">

                        <div class="btn-upload btn-upload--vista-green mt-4">
                            <input type="file" accept="image/*"  name="file" id="profile-img"  class="btn-upload__input-file">

                            <div class="btn-upload__top-side">
                                <span class="ua-icon-btn-upload btn-upload__icon"></span>
                                <span class="btn-upload__desc">Browse Image</span>
                            </div>
                        </div>

                       </div>


                        <div class="col-12">

                            <button class="btn btn-success btn-sm" type="submit">Save</button>
                            {{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}
                        </div>


                        <div class="col-5">

                        </div>



                    </div>

{{--                    <div class="col-sm-6">--}}
{{--                        --}}{{--<h2 style="color:#f2c02b; text-align:center;">Hell0 Admin!</h2>--}}
{{--                        <br>--}}


{{--                        <center>--}}
{{--                            <p style="color:black;">Admin Picture</p>--}}

{{--                            <div >--}}
{{--                                --}}{{--<div><small>Attach</small> </div>--}}
{{--                                --}}{{--<input type="file" accept="image/*"  name="newAdminPic"/>--}}
{{--                                --}}{{--<input type="file" id="upload-files-default" accept="image/*" name = "newAdminPic"/>--}}
{{--                                <img alt="" style="width: 20%;height: 20%" src="{{asset('adImagesFolder/'.App\Admin::getAdminProfilePic())}}">--}}
{{--                                --}}{{--{{asset('productImagesFolder/'.$product->url)}}--}}
{{--                                --}}{{--<div class="file-upload__browse-files" id="dropzone">--}}
{{--                                --}}{{--<input type="file" id="upload-files-default" accept="image/*" name = "newAdminPic"/>--}}
{{--                                --}}{{--<button class="btn btn-outline-info btn-lg btn-block btn-rounded file-upload__browse-btn">Browse Picture</button>--}}
{{--                                --}}{{--</div>--}}

{{--                                <div style="width: 50%" class="btn-upload btn-upload--fountain-blue mt-4" id="dropzone">--}}
{{--                                    <input type="file" class="btn-upload__input-file" accept="image/*" name="newAdminPic">--}}
{{--                                    <div class="btn-upload__top-side">--}}
{{--                                        <span class="ua-icon-btn-upload btn-upload__icon"></span>--}}
{{--                                        <span class="btn-upload__desc">Browse file</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                        </center>--}}

{{--                    </div>--}}

                </div>
            </form>
        </div>


    </div>
</div>



<script  src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
<script  src="{{ asset('vendor/popper/popper.min.js') }}"></script>
<script  src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<script  src="{{ asset('vendor/select2/js/select2.full.min.js') }}"> </script>
<script  src="{{ asset('vendor/simplebar/simplebar.js') }}"></script>
<script  src="{{ asset('vendor/text-avatar/jquery.textavatar.js') }}"></script>
<script  src="{{ asset('vendor/tippyjs/tippy.all.min.js') }}"></script>
<script  src="{{ asset('vendor/flatpickr/flatpickr.min.js') }}"></script>
<script  src="{{ asset('vendor/wnumb/wNumb.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>



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
<script src="{{ asset('js/preview/settings-panel.min.js') }}"></script>




<div class="slide-nav">
    <div class="slide-nav__header">
        <a href="#" class="slide-nav__back ua-icon-step-arrow-left"></a>
        <img src="{{ asset('img/logo.png') }}" alt="" class="slide-nav__logo">
    </div>
    <div class="slide-nav__body">
        <div class="slide-nav__scrollpane js-scrollable">
            <div class="slide-nav__items">
                <a href="#" class="slide-nav__item">
                    <img  src="{{ asset('img/slidenav/30.png') }}" alt="" class="slide-nav__item-image">
                    <span class="slide-nav__item-text">Storage</span>
                </a>
                <a href="#" class="slide-nav__item">
                    <img src="{{ asset('img/slidenav/31.png') }}" alt="" class="slide-nav__item-image">
                    <span class="slide-nav__item-text">Search</span>
                </a>
                <a href="#" class="slide-nav__item">
                    <img src="{{ asset('img/slidenav/32.png') }}" alt="" class="slide-nav__item-image">
                    <span class="slide-nav__item-text">Calendar</span>
                </a>
                <a href="#" class="slide-nav__item">
                    <img src="{{ asset('img/slidenav/33.png') }}" alt="" class="slide-nav__item-image">
                    <span class="slide-nav__item-text">Mail</span>
                </a>
                <a href="#" class="slide-nav__item">
                    <img  src="{{ asset('img/slidenav/34.png') }}" alt="" class="slide-nav__item-image">
                    <span class="slide-nav__item-text">Images</span>
                </a>
                <a href="#" class="slide-nav__item">
                    <img  src="{{ asset('img/slidenav/35.png') }}" alt="" class="slide-nav__item-image">
                    <span class="slide-nav__item-text">News</span>
                </a>
                <a href="#" class="slide-nav__item">
                    <img  src="{{ asset('img/slidenav/36.png') }}" alt="" class="slide-nav__item-image">
                    <span class="slide-nav__item-text">Maps</span>
                </a>
                <a href="#" class="slide-nav__item">
                    <img  src="{{ asset('img/slidenav/37.png') }}" alt="" class="slide-nav__item-image">
                    <span class="slide-nav__item-text">Market</span>
                </a>
                <a href="#" class="slide-nav__item">
                    <img  src="{{ asset('img/slidenav/38.png') }}" alt="" class="slide-nav__item-image">
                    <span class="slide-nav__item-text">Weather</span>
                </a>
                <a href="#" class="slide-nav__item">
                    <img  src="{{ asset('img/slidenav/39.png') }}" alt="" class="slide-nav__item-image">
                    <span class="slide-nav__item-text">Music</span>
                </a>
                <a href="#" class="slide-nav__item">
                    <img  src="{{ asset('img/slidenav/40.png') }}" alt="" class="slide-nav__item-image">
                    <span class="slide-nav__item-text">Tickets</span>
                </a>
                <a href="#" class="slide-nav__item">
                    <img  src="{{ asset('img/slidenav/41.png') }}" alt="" class="slide-nav__item-image">
                    <span class="slide-nav__item-text">Stats</span>
                </a>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('js/preview/slide-nav.min.js') }}"></script>

<script>

    $(function() {

        $('#dropzone').on('dragover', function() {
            $(this).addClass('hover');
        });

        $('#dropzone').on('dragleave', function() {
            $(this).removeClass('hover');
        });

        $('#dropzone input').on('change', function(e) {
            var file = this.files[0];

            $('#dropzone').removeClass('hover');



            $('#dropzone').addClass('dropped');
            $('#dropzone img').remove();

            if ((/^image\/(gif|png|jpeg)$/i).test(file.type)) {
                var reader = new FileReader(file);

                reader.readAsDataURL(file);

                reader.onload = function(e) {
                    var data = e.target.result,
                        $img = $('<img style="width:30%;height:30%" />').attr('src', data).fadeIn();

                    $('#dropzone div').html($img);
                    // console.log($img);
                    // var sbc = document.getElementById('upload-files-default');
                    // console.log(sbc.name);
                };
            } else {
                var ext = file.name.split('.').pop();

                $('#dropzone div').html(ext);
            }
        });
    });

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#profile-img-tag').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#profile-img").change(function(){
        readURL(this);
    });

</script>

</body>
</html>
