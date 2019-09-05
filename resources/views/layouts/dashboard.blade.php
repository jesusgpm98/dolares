<!DOCTYPE html>
<!--[if IE 9]>         <html class="ie9 no-focus" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-focus" lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title>OneUI - Admin Dashboard Template &amp; UI Framework</title>

        <meta name="description" content="OneUI - Admin Dashboard Template &amp; UI Framework created by pixelcave and published on Themeforest">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="assets/img/favicons/favicon.png">

        <link rel="icon" type="image/png" href="{{ asset('') }}/assets/img/favicons/favicon-16x16.png" sizes="16x16">
        <link rel="icon" type="image/png" href="{{ asset('') }}/assets/img/favicons/favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="{{ asset('') }}/assets/img/favicons/favicon-96x96.png" sizes="96x96">
        <link rel="icon" type="image/png" href="{{ asset('') }}/assets/img/favicons/favicon-160x160.png" sizes="160x160">
        <link rel="icon" type="image/png" href="{{ asset('') }}/assets/img/favicons/favicon-192x192.png" sizes="192x192">

        <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('') }}/assets/img/favicons/apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('') }}/assets/img/favicons/apple-touch-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('') }}/assets/img/favicons/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('') }}/assets/img/favicons/apple-touch-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('') }}/assets/img/favicons/apple-touch-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('') }}/assets/img/favicons/apple-touch-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('') }}/assets/img/favicons/apple-touch-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('') }}/assets/img/favicons/apple-touch-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('') }}/assets/img/favicons/apple-touch-icon-180x180.png">
        <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- Web fonts -->

        @yield('css')
        <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
        <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/flat.min.css"> -->
        <!-- END Stylesheets -->
    </head>
    <body>
    @auth
      <div id="page-container" class="sidebar-l side-scroll header-navbar-fixed">
          <!-- Side Overlay-->
          <aside id="side-overlay">
              <!-- Side Overlay Scroll Container -->
              <div id="side-overlay-scroll">
                  <!-- Side Header -->
                  <div class="side-header side-content">
                      <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                      <button class="btn btn-default pull-right" type="button" data-toggle="layout" data-action="side_overlay_close">
                          <i class="fa fa-times"></i>
                      </button>
                      <span class="font-w600">{{ Auth::user()->nombre }} {{ Auth::user()->apellido }}</span>
                  </div>
                  <!-- END Side Header -->

                  <!-- Side Content -->
                  <div class="side-content remove-padding-t">
                      <!-- Account -->
                      <div class="block pull-r-l">
                          <div class="block-header bg-gray-lighter">
                              <ul class="block-options">
                                  <li>
                                      <button type="button" data-toggle="block-option" data-action="content_toggle"></button>
                                  </li>
                              </ul>
                              <h3 class="block-title">Account</h3>
                          </div>

                      </div>
                      <!-- END Account -->

                      <!-- Quick Settings -->
                      <div class="block pull-r-l">
                          <div class="block-header bg-gray-lighter">
                              <ul class="block-options">
                                  <li>
                                      <button type="button" data-toggle="block-option" data-action="content_toggle"></button>
                                  </li>
                              </ul>
                              <h3 class="block-title">Quick Settings</h3>
                          </div>
                          <div class="block-content">
                              <!-- Quick Settings Form -->
                              <form class="form-bordered" action="base_pages_dashboard.html" method="post" onsubmit="return false;">
                                  <div class="form-group">
                                      <div class="row">
                                          <div class="col-xs-8">
                                              <div class="font-s13 font-w600">Online Status</div>
                                              <div class="font-s13 font-w400 text-muted">Show your status to all</div>
                                          </div>
                                          <div class="col-xs-4 text-right">
                                              <label class="css-input switch switch-sm switch-primary push-10-t">
                                                  <input type="checkbox" checked><span></span>
                                              </label>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <div class="row">
                                          <div class="col-xs-8">
                                              <div class="font-s13 font-w600">Auto Updates</div>
                                              <div class="font-s13 font-w400 text-muted">Keep up to date</div>
                                          </div>
                                          <div class="col-xs-4 text-right">
                                              <label class="css-input switch switch-sm switch-primary push-10-t">
                                                  <input type="checkbox" checked><span></span>
                                              </label>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <div class="row">
                                          <div class="col-xs-8">
                                              <div class="font-s13 font-w600">Notifications</div>
                                              <div class="font-s13 font-w400 text-muted">Do you need them?</div>
                                          </div>
                                          <div class="col-xs-4 text-right">
                                              <label class="css-input switch switch-sm switch-primary push-10-t">
                                                  <input type="checkbox"><span></span>
                                              </label>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <div class="row">
                                          <div class="col-xs-8">
                                              <div class="font-s13 font-w600">API Access</div>
                                              <div class="font-s13 font-w400 text-muted">Enable/Disable access</div>
                                          </div>
                                          <div class="col-xs-4 text-right">
                                              <label class="css-input switch switch-sm switch-primary push-10-t">
                                                  <input type="checkbox"><span></span>
                                              </label>
                                          </div>
                                      </div>
                                  </div>
                              </form>
                              <!-- END Quick Settings Form -->
                          </div>
                      </div>
                      <!-- END Quick Settings -->
                  </div>
                  <!-- END Side Content -->
              </div>
              <!-- END Side Overlay Scroll Container -->
          </aside>
          <!-- END Side Overlay -->

          <!-- Header -->
          <header id="header-navbar">
              <div class="content-mini content-mini-full content-boxed">
                  <!-- Header Navigation Right -->
                  <ul class="nav-header pull-right">
                      <li class="visible-xs">
                          <!-- Toggle class helper (for .js-header-search below), functionality initialized in App() -> uiToggleClass() -->
                          <button class="btn btn-default" data-toggle="class-toggle" data-target=".js-header-search" data-class="header-search-xs-visible" type="button">
                              <i class="fa fa-search"></i>
                          </button>
                      </li>
                      <li class="js-header-search header-search remove-margin">
                          <form class="form-horizontal" action="base_pages_search.html" method="post">
                              <div class="form-material form-material-primary input-group remove-margin-t remove-margin-b">
                                  <input class="form-control" type="text" id="base-material-text" name="base-material-text" placeholder="Search..">
                                  <span class="input-group-addon"><i class="si si-magnifier"></i></span>
                              </div>
                          </form>
                      </li>
                      <li>
                          <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                          <button class="btn btn-default btn-image" data-toggle="layout" data-action="side_overlay_toggle" type="button">
                              <img src="assets/img/avatars/avatar9.jpg" alt="Avatar">
                              <i class="fa fa-ellipsis-v"></i>
                          </button>
                      </li>
                  </ul>
                  <!-- END Header Navigation Right -->

                  <!-- Header Navigation Left -->
                  <ul class="nav-header pull-left">
                      <li class="header-content">
                          <a class="h5" href="index.html">
                              <i class="fa fa-circle-o-notch text-primary"></i> <span class="h4 font-w600 text-primary-dark">ne</span>
                          </a>
                      </li>
                      <li>
                          <!-- Themes functionality initialized in App() -> uiHandleTheme() -->
                          <div class="btn-group">
                              <button class="btn btn-link text-gray dropdown-toggle" data-toggle="dropdown" type="button">
                                  <i class="si si-drop"></i>
                              </button>
                              <ul class="dropdown-menu sidebar-mini-hide font-s13">
                                  <li>
                                      <a data-toggle="theme" data-theme="default" tabindex="-1" href="javascript:void(0)">
                                          <i class="fa fa-circle text-default pull-right"></i> <span class="font-w600">Default</span>
                                      </a>
                                  </li>
                                  <li>
                                      <a data-toggle="theme" data-theme="assets/css/themes/amethyst.min.css" tabindex="-1" href="javascript:void(0)">
                                          <i class="fa fa-circle text-amethyst pull-right"></i> <span class="font-w600">Amethyst</span>
                                      </a>
                                  </li>
                                  <li>
                                      <a data-toggle="theme" data-theme="assets/css/themes/city.min.css" tabindex="-1" href="javascript:void(0)">
                                          <i class="fa fa-circle text-city pull-right"></i> <span class="font-w600">City</span>
                                      </a>
                                  </li>
                                  <li>
                                      <a data-toggle="theme" data-theme="assets/css/themes/flat.min.css" tabindex="-1" href="javascript:void(0)">
                                          <i class="fa fa-circle text-flat pull-right"></i> <span class="font-w600">Flat</span>
                                      </a>
                                  </li>
                                  <li>
                                      <a data-toggle="theme" data-theme="assets/css/themes/modern.min.css" tabindex="-1" href="javascript:void(0)">
                                          <i class="fa fa-circle text-modern pull-right"></i> <span class="font-w600">Modern</span>
                                      </a>
                                  </li>
                                  <li>
                                      <a data-toggle="theme" data-theme="assets/css/themes/smooth.min.css" tabindex="-1" href="javascript:void(0)">
                                          <i class="fa fa-circle text-smooth pull-right"></i> <span class="font-w600">Smooth</span>
                                      </a>
                                  </li>
                              </ul>
                          </div>
                      </li>
                  </ul>
                  <!-- END Header Navigation Left -->
              </div>
          </header>
          <!-- END Header -->
          @include('partials.navBar')
      @endauth
  @yield('content')
      <!-- END Terms Modal -->
@auth
  <!-- END Page Content -->
</main>
<!-- END Main Container -->

<!-- Footer -->
<footer id="page-footer" class="bg-body font-s12">
  <div class="content-mini content-mini-full content-boxed clearfix push-15">
      <div class="pull-right">
          Crafted with <i class="fa fa-heart text-city"></i> by <a class="font-w600" href="http://goo.gl/vNS3I" target="_blank">pixelcave</a>
      </div>
      <div class="pull-left">
          <a class="font-w600" href="http://goo.gl/6LF10W" target="_blank">OneUI 3.4</a> &copy; <span class="js-year-copy">2015</span>
      </div>
  </div>
</footer>
<!-- END Footer -->
</div>
@endauth
      @yield('js')

      <!-- OneUI Core JS: jQuery, Bootstrap, slimScroll, scrollLock, Appear, CountTo, Placeholder, Cookie and App.js -->

  </body>
</html>
