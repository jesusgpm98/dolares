@extends('layouts.admin')
@section('content')
  <div class="content bg-gray-lighter">
    <div class="row items-push">
      <div class="col-sm-7">
        <h1 class="page-heading">
          Categorias <small>agregar</small>
        </h1>
      </div>
      <div class="col-sm-5 text-right hidden-xs">
        <ol class="breadcrumb push-10-t">
          <li>Admin</li>
          <li><a class="link-effect" href="#">Agregar categoria</a></li>
        </ol>
      </div>
    </div>
  </div>
  <div class="content content-narrow">

    <div class="block block-bordered">
      <div class="block-header bg-gray-lighter">
        {{-- <ul class="block-options">
        <li>
        <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
      </li>
      <li>
      <button type="button" data-toggle="block-option" data-action="content_toggle"><i class="si si-arrow-up"></i></button>
    </li>
  </ul> --}}
  <h3 class="block-title">Agregar</h3>
</div>
<div class="block-content">

  <form class="form-horizontal" action="{{ route('admin.categoria.store') }}" method="post">
    @csrf
    <div class="row">

      <div class="col-md-12">
        <div class="form-group">
          <div class="col-md-5">
            <label for="nombreCategoria">Nombre</label>
            <input class="form-control input-lg @error('nombreCategoria') is-invalid @enderror" type="text" id="nombreCategoria" name="nombreCategoria" value="{{ old('nombreCategoria') }}" placeholder="Enter category.." autofocus>
              @error('nombreCategoria')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
          </div>


          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <div class="col-md-12">
                  <label for="descripcion">Descripcion</label>
                  <textarea class="form-control input-lg @error('descripcionCategoria') is-invalid @enderror" id="descripcion" name="descripcionCategoria" rows="6" placeholder="Enter a few descripcion..">{{ old('descripcionCategoria') }}</textarea>
                    @error('descripcionCategoria')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-12">
            <div class="form-group">
              <div class="col-md-8">
                <button class="btn btn-success" type="submit"><i class="fa fa-check push-5-r"></i> Agregar</button>
              </div>
            </div>
          </div>

        </form>
      </div>
    </div>
  </div>

@endsection
@push('js')

  <!-- Page JS Plugins -->
  <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" defer></script>


  <script type="text/javascript">
  $(document).ready( function () {
    $('#myTable').DataTable();
  });
  </script>
@endpush
