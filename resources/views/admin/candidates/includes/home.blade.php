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
              <a href="{{ route('candidato.create') }}">
                <button type="submit" class="btn btn-sm btn-secondary">
                  <i class="icon-user-follow"></i>
                  &nbsp; Crear candidato
                </button>
              </a>  
            </div>                      
            <div class="card-actions col-lg-3">
              {!! Form::open(['route' => 'candidatos.index', 'method' => 'GET']) !!}
                <div class="input-group input-group-sm">
                <span class="input-group-addon">
                  <i class="fa fa-search"></i>
                </span>
                {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Buscar candidatos...']) !!}
                </div>
              {!! Form::close() !!}
            </div>
          </div>
          <div class="card-body">
            <table class="table table-responsive-sm table-striped table-sm">
              <thead>
                <tr>
                  <th style="width: 2%">#</th>
                  <th style="width: 8%">Nombres</th>
                  <th style="width: 8%">Apellidos</th>
                  <th style="width: 10%; text-align: center;">Edad</th>
                  <th style="width: 10%; text-align: center;">Grupo</th>
                  <th style="width: 10%; text-align: center;">Curso</th>
                  <th style="width: 10%; text-align: center;">Avance</th>
                  <th style="width: 10%; text-align: center;">Meta</th> 
                  <th style="width: 10%; text-align: center;">Estado</th>                  
                  <th style="text-align: center">Acción</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($data as $key => $candidates)
                  <tr>
                    <td style="width: 2%">{{ ++$i }}</td>
                    <td style="width: 8%">
                      {{ $candidates->name }}
                    </td>
                    <td style="width: 8%">
                      {{ $candidates->last_name }}
                    </td>
                    <td style="width: 10%" align="center">
                      {{ Carbon\Carbon::parse($candidates->birthdate)->addDays(10)->diffForHumans() }}
                    </td>
                    <td style="width: 10%; text-align: center;">
                      {{ $candidates->g_name }}
                    </td>
                    <td style="width: 10%; text-align: center;">
                      {{ $candidates->c_name }}
                    </td>                    
                    <td style="width: 10%; text-align:center">
                      <div class="progress-bar" role="progressbar" style="width: {{ number_format((($candidates->total/$candidates->goal) * 100), 2) }}%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">{{ number_format((($candidates->total/$candidates->goal) * 100)) }}%</div>
                    </td>
                    <td style="width: 10%; text-align: center;">
                      US$ {{ $candidates->goal }}
                    </td> 
                    <td style="width: 10%; text-align: center;">
                      @if ($candidates->active == 1)
                        <span class="badge badge-success">Activo</span>
                      @else
                        <span class="badge badge-danger">Inactivo</span>
                      @endif
                    </td>                   
                    <td style="width: 10%" align="center">
                      <a class="btn btn-info btn-sm" href="{{ route('candidato.show',$candidates->id) }}" data-toggle="tooltip" rel="tooltip" data-placement="top" title="Detalle del usuario"> 
                        <i class="icon-info"></i> 
                      </a>
                      <a class="btn btn-warning btn-sm" href="{{ route('candidato.edit',$candidates->id) }}" data-toggle="tooltip" data-placement="top" title="Editar usuario"> 
                        <i class="icon-pencil"></i> 
                      </a>
                      @can('eliminar-usuario')
                        <a class="btn btn-danger btn-sm" href="{{ route('candidato.destroy', $candidates->id) }}" data-toggle="tooltip" data-placement="top" title="Editar usuario" onclick="return confirm('Se eliminará el usuario de la lista!!!')"> 
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