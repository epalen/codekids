<div class="container-fluid">
  <div class="animated fadeIn">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header">
            <i class="fa fa-edit"></i>Crear campaña
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
            <h4>Información</h4>           

            {!! Form::open(array('route' => 'campanas.store','method' => 'POST', 'enctype' => 'multipart/form-data')) !!}
              <div class="row">
                <div class="col-sm-4">
                  <div class="form-group">
                    <strong>{{ Form::label('title', 'Campaña') }}</strong>
                    {!! Form::text('title', null, array('placeholder' => 'Nombre de campaña','class' => 'form-control')) !!}
                  </div>
                  <div class="form-group">
                    <strong>{{ Form::label('subtitle', 'Subtítulo') }}</strong>
                    {!! Form::text('subtitle', null, array('placeholder' => 'Subtítulo','class' => 'form-control')) !!}
                  </div>
                  <div class="form-group">
                    <strong>{{ Form::label('raised', 'Recaudado') }}</strong>
                    {!! Form::text('raised', null, array('placeholder' => 'Recaudado','class' => 'form-control')) !!}                    
                  </div>
                </div>

                <div class="col-sm-4">
                  <div class="form-group">
                    <strong>{{ Form::label('group_id', 'Grupo') }}</strong>
                    {!! Form::select('group_id', $groups, null, ['class' => 'form-control', 'placeholder' => 'Seleccionar grupo']) !!}  
                  </div>
                  <div class="form-group">
                    <strong>{{ Form::label('course_id', 'Curso') }}</strong>
                    {!! Form::select('course_id', $courses, null, ['class' => 'form-control', 'placeholder' => 'Seleccionar curso']) !!}            
                  </div>
                  <div class="form-group">
                    <strong>{{ Form::label('goal', 'Meta') }}</strong>
                    {!! Form::text('goal', null, array('placeholder' => 'Meta','class' => 'form-control')) !!}
                  </div>
                </div>

                <div class="col-sm-4">                    
                  <div class="form-group">
                    <strong>{{ Form::label('description', 'Descripción') }}</strong>
                    {!! Form::textarea('description', null, ['rows' => 3, 'cols' => 57, 'style' => 'resize:none']) !!}
                  </div>
                  <div class="form-group">
                    <strong>{{ Form::label('start_date', 'Fecha de inicio') }}</strong>
                    {!! Form::date('start_date', null, array('class' => 'form-control', 'placeholder' => 'Fecha de inicio'), \Carbon\Carbon::now()) !!}
                  </div> 
                  <div class="form-group">
                    <strong>{{ Form::label('end_date', 'Fecha final') }}</strong>
                    {!! Form::date('end_date', null, array('class' => 'form-control', 'placeholder' => 'Fecha final'), \Carbon\Carbon::now()) !!}
                  </div>  
                  <div class="form-group">
                    <strong>{{ Form::label('avatar', 'Imagen') }}</strong>
                    {!! Form::file('avatar', null, array('class' => 'form-control')) !!}
                  </div>    
                </div>
                
                <div class="col-sm-12">
                  <div class="form-group" align="center">
                      <a class="btn btn-warning" href="{{ route('campanas.index') }}" data-toggle="tooltip" rel="tooltip" data-placement="top" title="Retornar">
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