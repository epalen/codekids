<div class="container-fluid">
  <div class="animated fadeIn">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header">
            <i class="fa fa-info"></i>Información del rol
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-12">
                <div class="panel-heading">
                  <h4 class="panel-title">Tipo de rol: {{ $role->name }}</h4> 
                </div>
                <div class="panel-body">

                  <form class="form-group" role="form">
                    <div class="form-group">
                      <strong>Tipo de acceso:</strong>
                      {{ $role->guard_name }}
                    </div>
                    <div class="form-group">
                      <strong>Descripción</strong>
                      {{ $role->description }}
                    </div>
                    <div class="form-group">
                      <strong>Permisos:</strong>
                      @if(!empty($rolePermissions))
                          @foreach($rolePermissions as $v)
                              <label class="badge badge-info">{{ $v->name }},</label>
                          @endforeach
                      @endif
                    </div>
                  </form>
                  <br>

                </div>
              </div>
              <div class="col-sm-12">
                <div class="form-group" align="center">
                  <a class="btn btn-warning" href="{{ route('roles.index') }}" data-toggle="tooltip" rel="tooltip" data-placement="top" title="Retornar">
                      <i class="fa fa-arrow-left"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--/.col-->
    </div>
  </div>
</div>