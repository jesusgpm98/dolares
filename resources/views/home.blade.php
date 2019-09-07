@extends('layouts.dashboard')
@section('css')
  <!-- Web fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">

  <!-- Bootstrap and OneUI CSS framework -->
  <link rel="stylesheet" href="{{ asset('') }}assets/css/bootstrap.min.css">
  <link rel="stylesheet" id="css-main" href="{{ asset('') }}assets/css/oneui.css">

@endsection
@section('js')
  <!-- OneUI Core JS: jQuery, Bootstrap, slimScroll, scrollLock, Appear, CountTo, Placeholder, Cookie and App.js -->
  <script src="{{ asset('') }}assets/js/core/jquery.min.js"></script>
  <script src="{{ asset('') }}assets/js/core/bootstrap.min.js"></script>
  <script src="{{ asset('') }}assets/js/core/jquery.slimscroll.min.js"></script>
  <script src="{{ asset('') }}assets/js/core/jquery.scrollLock.min.js"></script>
  <script src="{{ asset('') }}assets/js/core/jquery.appear.min.js"></script>
  <script src="{{ asset('') }}assets/js/core/jquery.countTo.min.js"></script>
  <script src="{{ asset('') }}assets/js/core/jquery.placeholder.min.js"></script>
  <script src="{{ asset('') }}assets/js/core/js.cookie.min.js"></script>
  <script src="{{ asset('') }}assets/js/app.js"></script>

  <script>


        $(function () {
      $("li a:contains('Dashboard')").parent().addClass('active');
  });

    </script>
@endsection
@section('content')
  <!-- Page Content -->
  <div class="content content-boxed">


      <!-- Charts -->
      <div class="row">
          <div class="col-md-6">

                                <!-- Topics Block -->
                                <div class="block">
                                    <div class="block-header bg-gray-lighter">
                                        <ul class="block-options">
                                            <li>
                                                <button type="button" data-toggle="block-option" data-action="fullscreen_toggle"></button>
                                            </li>
                                            <li>
                                                <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                                            </li>
                                        </ul>
                                        <ul class="block-options block-options-left">
                                            <li>
                                                <a href="base_pages_forum_new_topic.html"><i class="fa fa-plus"></i> Publicaciones de Compra</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="block-content">
                                        <!-- Topics -->
                                        <table class="table table-striped table-borderless table-vcenter">
                                            <thead>
                                                <tr>
                                                    <th colspan="2">Tipo</th>
                                                    <th class="text-center hidden-xs hidden-sm" style="width: 100px;">Categoria</th>
                                                    <th class="text-center hidden-xs hidden-sm" style="width: 100px;">Precio</th>
                                                    <th class="hidden-xs hidden-sm" style="width: 200px;">Publicado por</th>
                                                </tr>
                                            </thead>
                                            <tbody>



                                                <tr>
                                                    <td colspan="2">
                                                        <h4 class="h6 font-w600 push-5">
                                                            <a href="base_pages_forum_discussion.html">Compra</a>
                                                        </h4>

                                                    </td>
                                                    <td class="text-center hidden-xs hidden-sm">
                                                        <a class="font-w600" href="javascript:void(0)">Paypal</a>
                                                    </td>
                                                    <td class="text-center hidden-xs hidden-sm">
                                                        <a class="font-w600" href="javascript:void(0)">632</a>
                                                    </td>
                                                    <td class="hidden-xs hidden-sm">
                                                        <span class="font-s13">by <a href="base_pages_profile.html">Joshua Munoz</a><br>July 13, 2015</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">
                                                        <h4 class="h6 font-w600 push-5">
                                                            <a href="base_pages_forum_discussion.html">Compra</a>
                                                        </h4>

                                                    </td>
                                                    <td class="text-center hidden-xs hidden-sm">
                                                        <a class="font-w600" href="javascript:void(0)">Skrill</a>
                                                    </td>
                                                    <td class="text-center hidden-xs hidden-sm">
                                                        <a class="font-w600" href="javascript:void(0)">698</a>
                                                    </td>
                                                    <td class="hidden-xs hidden-sm">
                                                        <span class="font-s13">by <a href="base_pages_profile.html">George Stone</a><br>July 2, 2015</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">
                                                        <h4 class="h6 font-w600 push-5">
                                                            <a href="base_pages_forum_discussion.html">Compra</a>
                                                        </h4>

                                                    </td>
                                                    <td class="text-center hidden-xs hidden-sm">
                                                        <a class="font-w600" href="javascript:void(0)">Paypal</a>
                                                    </td>
                                                    <td class="text-center hidden-xs hidden-sm">
                                                        <a class="font-w600" href="javascript:void(0)">350</a>
                                                    </td>
                                                    <td class="hidden-xs hidden-sm">
                                                        <span class="font-s13">by <a href="base_pages_profile.html">Amber Walker</a><br>July 2, 2015</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">
                                                        <h4 class="h6 font-w600 push-5">
                                                            <a href="base_pages_forum_discussion.html">Compra</a>
                                                        </h4>
                                                    </td>
                                                    <td class="text-center hidden-xs hidden-sm">
                                                        <a class="font-w600" href="javascript:void(0)">Zelle</a>
                                                    </td>
                                                    <td class="text-center hidden-xs hidden-sm">
                                                        <a class="font-w600" href="javascript:void(0)">1685</a>
                                                    </td>
                                                    <td class="hidden-xs hidden-sm">
                                                        <span class="font-s13">by <a href="base_pages_profile.html">Rebecca Gray</a><br>July 1, 2015</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">
                                                        <h4 class="h6 font-w600 push-5">
                                                            <a href="base_pages_forum_discussion.html">Compra</a>
                                                        </h4>

                                                    </td>
                                                    <td class="text-center hidden-xs hidden-sm">
                                                        <a class="font-w600" href="javascript:void(0)">Paypal</a>
                                                    </td>
                                                    <td class="text-center hidden-xs hidden-sm">
                                                        <a class="font-w600" href="javascript:void(0)">795</a>
                                                    </td>
                                                    <td class="hidden-xs hidden-sm">
                                                        <span class="font-s13">by <a href="base_pages_profile.html">Keith Simpson</a><br>July 1, 2015</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">
                                                        <h4 class="h6 font-w600 push-5">
                                                            <a href="base_pages_forum_discussion.html">Compra</a>
                                                        </h4>
                                                    </td>
                                                    <td class="text-center hidden-xs hidden-sm">
                                                        <a class="font-w600" href="javascript:void(0)">Zelle</a>
                                                    </td>
                                                    <td class="text-center hidden-xs hidden-sm">
                                                        <a class="font-w600" href="javascript:void(0)">1500</a>
                                                    </td>
                                                    <td class="hidden-xs hidden-sm">
                                                        <span class="font-s13">by <a href="base_pages_profile.html">Vincent Sims</a><br>July 12, 2015</span>
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                        <!-- END Topics -->

                                    </div>
                                </div>
                                <!-- END Topics Block -->
                </div>
                <!-- END Full Table -->

                <div class="col-md-6">
                  <div class="block">
                    <div class="block-header bg-gray-lighter">
                        <ul class="block-options">
                            <li>
                                <button type="button" data-toggle="block-option" data-action="fullscreen_toggle"></button>
                            </li>
                            <li>
                                <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                            </li>
                        </ul>
                        <ul class="block-options block-options-left">
                            <li>
                                <a href="base_pages_forum_new_topic.html"><i class="fa fa-plus"></i> Rating de Personas</a>
                            </li>
                        </ul>
                    </div>
                    <div class="block-content">


                    <div class="table-responsive">
                                <table class="table table-striped table-vcenter">
                                    <thead>
                                        <tr>
                                            <th class="text-center" style="width: 120px;"><i class="si si-user"></i></th>
                                            <th>Nombre</th>
                                            <th style="width: 30%;">Email</th>
                                            <th style="width: 15%;">Access</th>
                                            <th class="text-center" style="width: 100px;">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">
                                                <img class="img-avatar img-avatar48" src="assets/img/avatars/avatar4.jpg" alt="">
                                            </td>
                                            <td class="font-w600">Amy Hunter</td>
                                            <td>client1@example.com</td>
                                            <td>
                                                <span class="label label-warning">Trial</span>
                                            </td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="" data-original-title="Edit Client"><i class="fa fa-pencil"></i></button>
                                                    <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="" data-original-title="Remove Client"><i class="fa fa-times"></i></button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <img class="img-avatar img-avatar48" src="assets/img/avatars/avatar7.jpg" alt="">
                                            </td>
                                            <td class="font-w600">Sara Holland</td>
                                            <td>client2@example.com</td>
                                            <td>
                                                <span class="label label-info">Business</span>
                                            </td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="" data-original-title="Edit Client"><i class="fa fa-pencil"></i></button>
                                                    <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="" data-original-title="Remove Client"><i class="fa fa-times"></i></button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <img class="img-avatar img-avatar48" src="assets/img/avatars/avatar1.jpg" alt="">
                                            </td>
                                            <td class="font-w600">Laura Bell</td>
                                            <td>client3@example.com</td>
                                            <td>
                                                <span class="label label-primary">Personal</span>
                                            </td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="" data-original-title="Edit Client"><i class="fa fa-pencil"></i></button>
                                                    <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="" data-original-title="Remove Client"><i class="fa fa-times"></i></button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <img class="img-avatar img-avatar48" src="assets/img/avatars/avatar5.jpg" alt="">
                                            </td>
                                            <td class="font-w600">Denise Watson</td>
                                            <td>client4@example.com</td>
                                            <td>
                                                <span class="label label-info">Business</span>
                                            </td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="" data-original-title="Edit Client"><i class="fa fa-pencil"></i></button>
                                                    <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="" data-original-title="Remove Client"><i class="fa fa-times"></i></button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <img class="img-avatar img-avatar48" src="assets/img/avatars/avatar7.jpg" alt="">
                                            </td>
                                            <td class="font-w600">Ann Parker</td>
                                            <td>client5@example.com</td>
                                            <td>
                                                <span class="label label-info">Business</span>
                                            </td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="" data-original-title="Edit Client"><i class="fa fa-pencil"></i></button>
                                                    <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="" data-original-title="Remove Client"><i class="fa fa-times"></i></button>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- End Table responsive -->
                          </div>
                        <!--End Block-Content-->
                  </div>
                  <!--End Block-->
              </div>

              <!-- End Col-md-6 -->
          </div>
<!--End Row-->


      </div>
      <!-- END Charts -->
  </div>
@endsection
