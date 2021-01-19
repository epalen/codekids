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
              <a href="{{ route('roles.create') }}">
                <button type="submit" class="btn btn-sm btn-secondary">
                  <i class="icon-user-follow"></i>
                  &nbsp; Crear rol
                </button>
              </a>  
            </div>                      
            <div class="card-actions col-lg-3">
              {!! Form::open(['route' => 'roles.index', 'method' => 'GET']) !!}
                <div class="input-group input-group-sm">
                <span class="input-group-addon">
                  <i class="fa fa-search"></i>
                </span>
                {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Buscar roles...']) !!}
                </div>
              {!! Form::close() !!}
            </div>
          </div>
          <div class="card-body">
            <table class="table table-responsive-sm table-striped table-sm">
              <thead>
                <tr>
                  <th style="width: 2%">#</th>
                  <th style="width: 20%">Nombre</th>
                  <th style="60%">Descripción</th>
                  <th style="text-align: center">Acción</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($roles as $key => $role)
                  <tr>
                    <td style="width: 2%">{{ ++$i }}</td>
                    <td style="width: 20%">
                      {{ $role->name }}
                    </td>
                    <td style="width: 60%">{{ $role->description }}</td>
                    <td style="width: 20%" align="center">
                      <a class="btn btn-info btn-sm" href="{{ route('roles.show',$role->id) }}" data-toggle="tooltip" rel="tooltip" data-placement="top" title="Detalle del usuario"> 
                        <i class="icon-info"></i> 
                      </a>
                      <a class="btn btn-warning btn-sm" href="{{ route('roles.edit',$role->id) }}" data-toggle="tooltip" data-placement="top" title="Editar usuario"> 
                        <i class="icon-pencil"></i> 
                      </a>
                      <a class="btn btn-danger btn-sm" href="{{ route('roles.destroy', $role->id) }}" data-toggle="tooltip" data-placement="top" title="Editar usuario" onclick="return confirm('Se eliminará el rol de la lista!!!')"> 
                        <i class="icon-trash"></i> 
                      </a>
                    </td>
                  </tr>
                @endforeach
                </tr>
              </tbody>
            </table>
            <nav>
              @if (count($roles) == 0)
                
              @elseif (count($roles) == 1)
                {!! $roles->count() !!} Rol registrado
              @else (count($roles) < 1)
                {!! $roles->count() !!} roles de {!! $roles->total() !!}
              @endif
            </nav>
            <nav>
              <ul class="pagination pagination-sm no-margin pull-right">
                {!! $roles->setPath('')->render("pagination::bootstrap-4") !!}
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