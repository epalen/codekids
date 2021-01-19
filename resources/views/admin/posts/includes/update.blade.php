<div class="container-fluid">
  <div class="animated fadeIn">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header">
            <i class="fa fa-edit"></i>Editar publicación            
          </div>
          <div class="card-body">
            @if (count($errors) > 0)
              <div class="alert text-white bg-danger alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
            @endif
            <h4>Información personal</h4>

            {!! Form::model($post, ['method' => 'PATCH','route' => ['publicacion.update', $post->id], 'enctype' => 'multipart/form-data']) !!}
              <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
              <div class="row">
                <div class="col-sm-4">
                  <div class="form-group">
                    <strong>{{ Form::label('title', 'Título') }}</strong>
                    {!! Form::text('title', null, array('placeholder' => 'Título','class' => 'form-control')) !!}
                  </div>
                </div>

                <div class="col-sm-4">
                    <strong>{{ Form::label('category_id', 'Categoría') }}</strong>
                    {!! Form::select('category_id', $categories, null, ['class' => 'form-control', 'placeholder' => 'Seleccionar una provincia']) !!}
                </div>

                <div class="col-sm-12">   
                  <div class="form-group">                 
                    {{Form::textarea('content',null,array('class' => 'form-control', 'placeholder'=>'Content', 'size' => '30x4', 'id' => 'technig'))}}
                  </div>
                  <div class="form-group">
                    <strong>{{ Form::label('avatar', 'Agregar imagen') }}</strong>
                    <input type="file" name="avatar" class="well well-sm" style="width: 100%;">
                  </div>
                </div>
                
                <div class="col-sm-12">
                  <div class="form-group" align="center">
                      <a class="btn btn-warning" href="{{ route('publicacion.index') }}" data-toggle="tooltip" rel="tooltip" data-placement="top" title="Retornar">
                          <i class="fa fa-arrow-left"></i>
                      </a>
                      <span></span>
                      <button type="submit" class="btn btn-success" data-toggle="tooltip" rel="tooltip" data-placement="top" title="Guardar">
                          <i class="fa fa-save"></i>
                      </button>
                  </div>
                </div>
              </div>
            {!! Form::close() !!}
          </div>
        </div>
      </div>
      <!--/.col-->
    </div>
  </div>
</div>