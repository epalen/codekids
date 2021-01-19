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
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalCreate" data-placement="top" title="Crear estudiante">
                  <i class="icon-user-follow"></i>
                  &nbsp; Crear estudiante
              </button>   
            </div>                      
            <div class="card-actions col-lg-3">
              {!! Form::open(['route' => 'estudiante.index', 'method' => 'GET']) !!}
                <div class="input-group input-group-sm">
                <span class="input-group-addon">
                  <i class="fa fa-search"></i>
                </span>
                {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Buscar estudiantes...']) !!}
                </div>
              {!! Form::close() !!}
            </div>
          </div>
          <div class="card-body">
            <table class="table table-responsive-sm table-striped table-sm">
              <thead>
                <tr>
                  <th style="width: 2%">#</th>
                  <th style="width: 15%">Nombres</th>
                  <th style="width: 15%">Apellidos</th>
                  <th style="width: 10%; text-align: center;">Edad</th>
                  <th style="width: 10%; text-align: center;">Grupo</th>
                  <th style="width: 10%; text-align: center;">Curso</th>
                  <th style="width: 10%; text-align: center;">Estado</th>                  
                  <th style="text-align: center">Acción</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($data as $key => $estudiantes)
                  <tr>
                    <td style="width: 2%">{{ ++$i }}</td>
                    <td style="width: 15%">
                      {{ $estudiantes->candidate->name }}
                    </td>
                    <td style="width: 15%">
                      {{ $estudiantes->candidate->last_name }}
                    </td>
                    <td style="width: 10%" align="center">
                      {{ Carbon\Carbon::parse($estudiantes->candidate->birthdate)->addDays(10)->diffForHumans() }}
                    </td>
                    <td style="width: 10%; text-align: center;">
                      {{ $estudiantes->group->name }}
                    </td>
                    <td style="width: 15%; text-align: center;">
                      {{ $estudiantes->course->name }}
                    </td>  
                    <td style="width: 10%; text-align: center;">
                      @if ($estudiantes->active == 1)
                        <span class="badge badge-success">Activo</span>
                      @else
                        <span class="badge badge-danger">Inactivo</span>
                      @endif
                    </td>                   
                    <td style="width: 10%" align="center">
                      <a class="btn btn-info btn-sm" href="{{ route('estudiante.show',$estudiantes->id) }}" data-toggle="tooltip" rel="tooltip" data-placement="top" title="Detalle del estudiante"> 
                        <i class="icon-info"></i> 
                      </a>
                      <a class="btn btn-warning btn-sm" href="{{ route('estudiante.edit',$estudiantes->id) }}" data-toggle="tooltip" data-placement="top" title="Editar estudiante"> 
                        <i class="icon-pencil"></i> 
                      </a>
                    </td>
                  </tr>
                @endforeach
                </tr>
              </tbody>
            </table>
            <nav>
              @if (count($data) == 1)
                {!! $data->count() !!} estudiante registrado
              @else (count($data) < 1)
                {!! $data->count() !!} estudiantes de {!! $data->total() !!}
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

<!-- Modal -->
@include('admin.students.tools.modal')