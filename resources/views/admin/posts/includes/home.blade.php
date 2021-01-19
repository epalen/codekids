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
              <a href="{{ route('publicacion.create') }}">
                <button type="submit" class="btn btn-sm btn-secondary">
                  <i class="icon-book-open"></i>
                  &nbsp; Crear publicación
                </button>
              </a>  
            </div>                      
            <div class="card-actions col-lg-3">
              {!! Form::open(['route' => 'publicacion.index', 'method' => 'GET']) !!}
                <div class="input-group input-group-sm">
                <span class="input-group-addon">
                  <i class="fa fa-search"></i>
                </span>
                {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Buscar publicaicones...']) !!}
                </div>
              {!! Form::close() !!}
            </div>
          </div>
          <div class="card-body">
            <table class="table table-responsive-sm table-striped table-sm">
              <thead>
                <tr>
                  <th style="width: 2%">#</th>
                  <th style="width: 15%">Título de publicación</th>
                  <th style="width: 10%; text-align: center;">Categoría</th>
                  <th style="width: 15%; text-align: center;">Usuario</th>
                  <th style="width: 15%; text-align: center;">Fecha de publicación</th>
                  <th style="text-align: center">Acción</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($data as $key => $posts)
                  <tr>
                    <td style="width: 2%">{{ ++$i }}</td>
                    <td style="width: 15%">
                      {{ $posts->title }}
                    </td>
                    <td style="width: 15%; text-align: center;">
                      {{ $posts->category->name }}
                    </td>
                    <td style="width: 10%" align="center">
                      {{ $posts->user->name }} {{ $posts->user->last_name }}
                    </td>
                    <td style="width: 15%; text-align: center;">
                      {{ Carbon::parse($posts->end_date)->format('d M Y') }}
                    </td>
                    <td style="width: 15%" align="center">
                      <a class="btn btn-info btn-sm" href="{{ route('publicacion.show',$posts->id) }}" data-toggle="tooltip" rel="tooltip" data-placement="top" title="Detalle de la publicación"> 
                        <i class="icon-info"></i> 
                      </a>
                      <a class="btn btn-warning btn-sm" href="{{ route('publicacion.edit',$posts->id) }}" data-toggle="tooltip" data-placement="top" title="Editar publicación"> 
                        <i class="icon-pencil"></i> 
                      </a>
                      @can('eliminar-post')
                        <a class="btn btn-danger btn-sm" href="{{ route('publicacion.destroy', $posts->id) }}" data-toggle="tooltip" data-placement="top" title="Eliminar publicación" onclick="return confirm('Se eliminará la publicación de la lista!!!')"> 
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
                {!! $data->count() !!} publicación registrada !!}
              @else (count($data) < 1)
                {!! $data->count() !!} publicaciones de {!! $data->total() !!}
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