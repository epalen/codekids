<div class="container-fluid">
  <div class="animated fadeIn">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header">
            <i class="fa fa-edit"></i>Crear estudiante
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

            {!! Form::open(array('route' => 'estudiante.store','method' => 'POST', 'enctype' => 'multipart/form-data')) !!}
              <div class="row">
                <div class="col-sm-4">
                  <div class="form-group">
                    <strong>{{ Form::label('candidate_id', 'Candidato') }}</strong>
                    {!! Form::select('candidate_id', $candidates, null, ['class' => 'form-control', 'placeholder' => 'Seleccionar candidato']) !!}            
                  </div>
                </div>

                <div class="col-sm-4">
                  <div class="form-group">
                    <strong>{{ Form::label('group_id', 'Grupo') }}</strong>
                    {!! Form::select('group_id', $groups, null, ['class' => 'form-control', 'placeholder' => 'Seleccionar grupo']) !!}  
                  </div>    
                </div>

                <div class="col-sm-4"> 
                  <div class="form-group">
                    <strong>{{ Form::label('course_id', 'Curso') }}</strong>
                    {!! Form::select('course_id', $courses, null, ['class' => 'form-control', 'placeholder' => 'Seleccionar curso']) !!}            
                  </div>
                  <div class="form-group">
                    <strong>{{ Form::label('active', 'Estado') }}</strong>
                    <br>
                    <label class="switch switch-lg switch-3d switch-primary">                    
                      {!! Form::checkbox('active', null, true, ['class' => 'switch-input']) !!}
                      <span class="switch-label" data-on="On" data-off="Off"></span>
                      <span class="switch-handle"></span>
                    </label>
                  </div>         
                </div>
                
                <div class="col-sm-12">
                  <div class="form-group" align="center">
                      <a class="btn btn-warning" href="{{ route('estudiante.index') }}" data-toggle="tooltip" rel="tooltip" data-placement="top" title="Retornar">
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