<div class="container-fluid">
  @if ($message = Session::get('success'))
    <div class="alert text-white bg-success alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <p>{{ $message }}</p>
    </div>
  @endif

  <div class="animated fadeIn">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header col-lg-12">
            <div class="col-lg-3">
              <a href="{{ route('usuarios.create') }}">
                <button type="submit" class="btn btn-sm btn-secondary">
                  <i class="icon-user-follow"></i>
                  &nbsp; Crear usuario
                </button>
              </a>  
            </div>                      
            <div class="card-actions col-lg-3">
              {!! Form::open(['route' => 'usuarios.index', 'method' => 'GET']) !!}
                <div class="input-group input-group-sm">
                <span class="input-group-addon">
                  <i class="fa fa-search"></i>
                </span>
                {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Buscar usuarios...']) !!}
                </div>
              {!! Form::close() !!}
            </div>
          </div>
          <div class="card-body">
            <table class="table table-responsive-sm table-striped table-sm">
              <thead>
                <tr>
                  <th style="width: 2%">#</th>
                  <th style="width: 20%">Nombre de usuario</th>
                  <th style="width: 20%">Email</th>
                  <th style="width: 20%; text-align: center;">Fecha de registro</th>
                  <th style="width: 5%; text-align: center;">Estado</th>
                  <th style="width: 5%; text-align: center;">Rol</th>
                  <th style="text-align: center">Acción</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($data as $key => $users)
                  <tr>
                    <td style="width: 2%">{{ ++$i }}</td>
                    <td style="width: 20%">
                      {{ $users->name }} {{ $users->last_name }}
                    </td>
                    <td style="width: 20%">
                      {{ $users->email }}
                    </td>
                    <td style="width: 20%" align="center">
                      {{ Carbon::parse($users->created_at)->format('d M Y') }}
                    </td>
                    <td style="width: 5%; text-align: center;">
                      @if ($users->active == 1)
                        <span class="badge badge-success">Activo</span>
                      @else
                        <span class="badge badge-danger">Inactivo</span>
                      @endif
                    </td>
                    <td style="width: 5%; text-align: center;">
                      @if(!empty($users->getRoleNames()))
                        @foreach($users->getRoleNames() as $v)
                          <label class="badge badge-info">{{ $v }}</label>
                        @endforeach
                      @endif
                    </td>
                    <td style="width: 20%" align="center">
                      <a class="btn btn-info btn-sm" href="{{ route('usuarios.show',$users->id) }}" data-toggle="tooltip" rel="tooltip" data-placement="top" title="Detalle del usuario"> 
                        <i class="icon-info"></i> 
                      </a>
                      <a class="btn btn-warning btn-sm" href="{{ route('usuarios.edit',$users->id) }}" data-toggle="tooltip" data-placement="top" title="Editar usuario"> 
                        <i class="icon-pencil"></i> 
                      </a>
                      @can('eliminar-usuario')
                        <a class="btn btn-danger btn-sm" href="{{ route('usuarios.destroy', $users->id) }}" data-toggle="tooltip" data-placement="top" title="Editar usuario" onclick="return confirm('Se eliminará el usuario de la lista!!!')"> 
                          <i class="icon-trash"></i> 
                        </a>
                      @endcan
                    </td>
                  </tr>
                @endforeach
                </tr>
              </tbody>
            </table>
            <nav>
              @if (count($data) == 1)
                {!! $data->count() !!} usuario registrado !!}
              @else (count($data) < 1)
                {!! $data->count() !!} usuarios de {!! $data->total() !!}
              @endif
            </nav>
            <nav>
              <ul class="pagination pagination-sm no-margin pull-right">
                {!! $data->setPath('')->render("pagination::bootstrap-4") !!}
              </ul>
            </nav>
          </div>
        </div>
      </div>
      <!--/.col-->
    </div>
    <!--/.row-->
  </div>
</div>