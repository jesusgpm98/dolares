@extends('layouts.admin')
@section('content')
  <div class="content bg-gray-lighter">
                    <div class="row items-push">
                        <div class="col-sm-7">
                            <h1 class="page-heading">
                                DataTables <small>Tables transformed with dynamic features. Powered by DataTables.</small>
                            </h1>
                        </div>
                        <div class="col-sm-5 text-right hidden-xs">
                            <ol class="breadcrumb push-10-t">
                                <li>Tables</li>
                                <li><a class="link-effect" href="">DataTables</a></li>
                            </ol>
                        </div>
                    </div>
                </div>

<admin-categoria></admin-categoria>
                  <!-- END Dynamic Table Full Pagination -->

@endsection
@push('js')

  <!-- Page JS Plugins -->
  <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" defer></script>


<script type="text/javascript">
$(document).ready( function () {
$('#myTable').DataTable();
} );
</script>
@endpush
