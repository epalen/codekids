<div class="container-fluid">
  <div class="animated fadeIn">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header">
            <i class="fa fa-info"></i>Información de usuario
          </div>
          <div class="card-body">
            <div class="row">
              <!-- left column -->
              <div class="col-sm-4">
                <div class="text-justify">
                  <div class="panel-heading">
                      <h4 class="panel-title">{{ $users->name }} {{ $users->last_name }}</h4> 
                  </div>
                    <img src="{{ URL::asset('uploads/avatars/' . $users->avatar) }}" class="avatar-lg img-circle img-thumbnail" alt="avatar">
                  </div>
              </div>
              <!-- right column -->
              <div class="col-sm-3">
                <div class="form-group">
                  <strong>Sexo:</strong>
                  @if ($users->gender == 'F')
                    Femenino
                  @else ($users->gender == 'M')
                    Masculino
                  @endif
                </div>
                <div class="form-group">
                  <strong>Edad:</strong>
                  {{ Carbon\Carbon::parse($users->birthdate)->addDays(10)->diffForHumans() }}
                </div>
                <div class="form-group">
                  <strong>Estado:</strong>
                  @if ($users->active == 1)
                    <span class="badge badge-success">Activo</span>
                  @else
                    <span class="badge badge-danger">Inactivo</span>
                  @endif
                </div>
                <div class="form-group">
                  <strong>Rol:</strong>
                  @if(!empty($users->getRoleNames()))
                      @foreach($users->getRoleNames() as $v)
                      <label class="badge badge-info">{{ $v }}</label>
                      @endforeach
                  @endif
                </div>
                <div class="form-group">
                  <strong>Posición:</strong>
                  {{ $users->job_title }}
                </div>
                <div class="form-group">
                  <strong>Dirección:</strong>
                  {{ $users->address }}
                </div>
                <div class="form-group">
                  <strong>Provincia:</strong>
                  {{ $users->province->name }}
                </div>
                <div class="form-group">
                  <strong>Teléfono:</strong>
                  {{ substr_replace(substr_replace($users->phone,'-',3,0),'-',7,0) }}
                </div> 
              </div>
              <div class="col-sm-5"> 
                <form class="form-group" role="form">  
                  <div class="form-group">
                      <strong>Gustos:</strong>
                      <br>
                      <p align="justify">{{ $users->likes }}</p>
                  </div>
                  <div class="form-group">
                      <strong>Descripción:</strong>
                      <br>
                      <p align="justify">{{ $users->description }}</p>
                  </div>
                  <div class="form-group">
                      <strong>Enlace redes sociales:</strong>
                      <br>
                      <a class="btn btn-info btn-sm" href="{{ $users->fb_link }}" target="_blank" data-toggle="tooltip" rel="tooltip" data-placement="top" title="Enlace Facebook"> 
                      <i class="icon-social-facebook"></i> 
                      </a>
                      <a class="btn btn-info btn-sm" href="{{ $users->tw_link }}" target="_blank" data-toggle="tooltip" rel="tooltip" data-placement="top" title="Enlace Facebook"> 
                      <i class="icon-social-twitter"></i> 
                      </a>
                      <a class="btn btn-info btn-sm" href="{{ $users->ins_link }}" target="_blank" data-toggle="tooltip" rel="tooltip" data-placement="top" title="Enlace Facebook"> 
                      <i class="icon-social-instagram"></i> 
                      </a>
                      <a class="btn btn-info btn-sm" href="{{ $users->in_link }}" target="_blank" data-toggle="tooltip" rel="tooltip" data-placement="top" title="Enlace Facebook"> 
                      <i class="icon-social-linkedin"></i> 
                      </a>
                      <a class="btn btn-info btn-sm" href="{{ $users->git_link }}" target="_blank" data-toggle="tooltip" rel="tooltip" data-placement="top" title="Enlace Facebook"> 
                      <i class="icon-social-github"></i> 
                      </a>
                  </div>
                </form>
              </div>
              <div class="col-sm-12">
                <div class="form-group" align="center">
                  <a class="btn btn-warning" href="{{ route('usuarios.index') }}" data-toggle="tooltip" rel="tooltip" data-placement="top" title="Retornar">
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