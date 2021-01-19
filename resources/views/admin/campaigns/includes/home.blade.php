<div class="container-fluid">
  <div class="animated fadeIn">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header col-lg-12">
            <div class="col-lg-3">
              <a href="{{ route('campanas.create') }}">
                <button type="submit" class="btn btn-sm btn-secondary">
                  <i class="icon-share"></i>
                  &nbsp; Crear campaña
                </button>
              </a>  
            </div>                      
            <div class="card-actions col-lg-3">
              {!! Form::open(['route' => 'campanas.index', 'method' => 'GET']) !!}
                <div class="input-group input-group-sm">
                <span class="input-group-addon">
                  <i class="fa fa-search"></i>
                </span>
                {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Buscar campañas...']) !!}
                </div>
              {!! Form::close() !!}
            </div>
          </div>
          <div class="card-body">
            <table class="table table-responsive-sm table-striped table-sm">
              <thead>
                <tr>
                  <th style="width: 2%">#</th>
                  <th style="width: 15%">Título de campaña</th>
                  <th style="width: 15%">Sub título</th>
                  <th style="width: 10%; text-align: center;">Grupo</th>
                  <th style="width: 15%; text-align: center;">Curso</th>
                  <th style="width: 15%; text-align: center;">Tiempo restante</th>
                  <th style="text-align: center">Acción</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($data as $key => $campaigns)
                  <tr>
                    <td style="width: 2%">{{ ++$i }}</td>
                    <td style="width: 20%">
                      {{ $campaigns->title }}
                    </td>
                    <td style="width: 15%">
                      {{ $campaigns->subtitle }}
                    </td>
                    <td style="width: 10%" align="center">
                      {{ $campaigns->group->name }}
                    </td>
                    <td style="width: 15%; text-align: center;">
                      {{ $campaigns->course->name }}
                    </td>
                    <td style="width: 15%; text-align: center;">
                      <span class="badge badge-info">{{ Carbon::parse($campaigns->end_date)->diffForHumans() }}</span>
                    </td>
                    <td style="width: 15%" align="center">
                      <a class="btn btn-info btn-sm" href="{{ route('campanas.show',$campaigns->id) }}" data-toggle="tooltip" rel="tooltip" data-placement="top" title="Detalle de la campaña"> 
                        <i class="icon-info"></i> 
                      </a>
                      <a class="btn btn-warning btn-sm" href="{{ route('campanas.edit',$campaigns->id) }}" data-toggle="tooltip" data-placement="top" title="Editar campaña"> 
                        <i class="icon-pencil"></i> 
                      </a>
                      @can('eliminar-campana')
                        <a class="btn btn-danger btn-sm" href="{{ route('campanas.destroy', $campaigns->id) }}" data-toggle="tooltip" data-placement="top" title="Eliminar campaña" onclick="return confirm('Se eliminará la campaña de la lista!!!')"> 
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
                {!! $data->count() !!} campaña registrada !!}
              @else (count($data) < 1)
                {!! $data->count() !!} campañas de {!! $data->total() !!}
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