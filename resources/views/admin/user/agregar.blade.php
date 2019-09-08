@extends('layouts.admin')
@section('content')
  <div class="content bg-gray-lighter">
    <div class="row items-push">
      <div class="col-sm-7">
        <h1 class="page-heading">
          Crear Usuario <small>users</small>
        </h1>
      </div>
      <div class="col-sm-5 text-right hidden-xs">
        <ol class="breadcrumb push-10-t">
          <li>Admin</li>
          <li><a class="link-effect" href="#">Crear Usuario</a></li>
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
  <h3 class="block-title">Crear usuario</h3>
</div>
<div class="block-content">
  <form class="form-horizontal" action="{{ route('admin.user.store') }}" method="post">
    @csrf

    <div class="row">
      <div class="col-sm-7">
        <div class="form-group">
          <div class="col-xs-6">
            <label for="nombre">Nombre</label>
            <input class="form-control input-lg @error('nombre') is-invalid @enderror" type="text" id="nombre" value="{{ old('nombre') }}" name="nombre" placeholder="Enter your firstname.." autofocus >
              @error('nombre')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>

            <div class="col-xs-6">
              <label for="apellido">Apellido</label>
              <input class="form-control input-lg @error('apellido') is-invalid @enderror" type="text" id="apellido" value="{{ old('apellido') }}" name="apellido" placeholder="Enter your lastname..">
                @error('apellido')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
            </div>
          </div>

          <div class="col-sm-5">
            <div class="form-group">
              <div class="col-xs-12">
                <label for="ci">C.I</label>
                <input class="form-control input-lg @error('ci') is-invalid @enderror" type="text" id="ci" name="ci" value="{{ old('ci') }}" placeholder="Enter your ID card..">
                  @error('ci')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-7">
              <div class="form-group">
                <div class="col-xs-6">
                  <label for="pais">País</label>
                  <input class="form-control input-lg @error('pais') is-invalid @enderror" type="text" id="pais" value="{{ old('pais') }}" name="pais" placeholder="Enter your country..">
                    @error('pais')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>

                  <div class="col-xs-6">
                    <label for="estado">Estado</label>
                    <input class="form-control input-lg @error('estado') is-invalid @enderror" type="text" id="estado" value="{{ old('estado') }}" name="estado" placeholder="Enter your state..">
                      @error('estado')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                    </div>
                  </div>
                </div>

                <div class="col-sm-5">
                  <div class="form-group">
                    <div class="col-xs-12">
                      <label for="telefono">Telefono</label>
                      <input class="form-control input-lg @error('telefono') is-invalid @enderror" type="text" id="telefono" value="{{ old('telefono') }}" name="telefono" placeholder="Enter your phone..">
                        @error('telefono')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <div class="col-xs-6">
                        <label for="ubicacion">Ubicacion</label>
                        <input class="form-control input-lg @error('ubicacion') is-invalid @enderror" type="text" id="ubicacion" value="{{ old('ubicacion') }}" name="ubicacion" placeholder="Enter your location..">
                          @error('ubicacion')
                            <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                            </span>
                          @enderror
                        </div>

                        <div class="col-xs-6">
                          <label for="rol">Rol</label>
                          <select class="form-control input-lg" id="rol" name="rol_id">
                            @foreach ($rol as $row)
                              <option value="{{ $row->id }}">{{ $row->nombre }}</option>
                            @endforeach
                          </select>
                        </div>

                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-sm-7">
                      <div class="form-group">
                        <div class="col-xs-6">
                          <label for="email">Correo</label>
                          <input class="form-control input-lg @error('email') is-invalid @enderror" type="email" id="email" value="{{ old('email') }}" name="email" placeholder="Enter your email..">
                            @error('email')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                            @enderror
                          </div>

                          <div class="col-xs-6">
                            <label for="password">Contraseña</label>
                            <input class="form-control input-lg @error('password') is-invalid @enderror" type="password" id="password" name="password" placeholder="Enter your password..">
                              @error('password')
                                <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                                </span>
                              @enderror
                            </div>
                          </div>
                        </div>

                      </div>

                      <div class="form-group">
                        <div class="col-xs-12">
                          <button class="btn btn-warning" type="submit"><i class="fa fa-check push-5-r"></i> Crear usuario</button>
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
