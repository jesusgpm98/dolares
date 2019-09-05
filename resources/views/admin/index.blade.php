@extends('layouts.admin')
@section('content')
  <div class="bg-image overflow-hidden" style="background-image: url('assets/img/photos/photo31@2x.jpg');">
      <div class="bg-black-op">
          <div class="content content-narrow">
              <div class="block block-transparent">
                  <div class="block-content block-content-full">
                      <h1 class="h1 font-w300 text-white animated fadeInDown push-50-t push-5">Dashboard</h1>
                      <h2 class="h4 font-w300 text-white-op animated fadeInUp">Welcome Administrator</h2>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- END Page Header -->

  <!-- Page Content -->
  <div class="content content-narrow">
      <!-- Stats -->
      <div class="row text-uppercase">
          <div class="col-xs-6 col-sm-3">
              <div class="block block-rounded">
                  <div class="block-content block-content-full">
                      <div class="text-muted">
                          <small><i class="si si-calendar"></i> Today</small>
                      </div>
                      <div class="font-s12 font-w700">Unq Visitors</div>
                      <a class="h2 font-w300 text-primary" href="base_comp_charts.html" data-toggle="countTo" data-to="480950"></a>
                  </div>
              </div>
          </div>
          <div class="col-xs-6 col-sm-3">
              <div class="block block-rounded">
                  <div class="block-content block-content-full">
                      <div class="text-muted">
                          <small><i class="si si-calendar"></i> Today</small>
                      </div>
                      <div class="font-s12 font-w700">Prd Sales</div>
                      <a class="h2 font-w300 text-primary" href="base_comp_charts.html" data-toggle="countTo" data-to="495"></a>
                  </div>
              </div>
          </div>
          <div class="col-xs-6 col-sm-3">
              <div class="block block-rounded">
                  <div class="block-content block-content-full">
                      <div class="text-muted">
                          <small><i class="si si-calendar"></i> Today</small>
                      </div>
                      <div class="font-s12 font-w700">Earnings</div>
                      <a class="h2 font-w300 text-primary" href="base_comp_charts.html" data-toggle="countTo" data-to="148000" data-before="$"></a>
                  </div>
              </div>
          </div>
          <div class="col-xs-6 col-sm-3">
              <div class="block block-rounded">
                  <div class="block-content block-content-full">
                      <div class="text-muted">
                          <small><i class="si si-calendar"></i> Today</small>
                      </div>
                      <div class="font-s12 font-w700">Average Sale</div>
                      <a class="h2 font-w300 text-primary" href="base_comp_charts.html" data-toggle="countTo" data-to="299" data-before="$"></a>
                  </div>
              </div>
          </div>
      </div>
      <!-- END Stats -->
</div>
@endsection
@push('js')
  <!-- Page Plugins -->
  <script src="{{ asset('') }}assets/assets/js/plugins/chartjs/Chart.min.js"></script>

  <!-- Page JS Code -->
  <script src="{{ asset('') }}assets/assets/js/pages/base_pages_dashboard_v2.js"></script>


@endpush
