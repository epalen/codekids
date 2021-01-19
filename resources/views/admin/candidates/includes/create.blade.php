<div class="container-fluid">
  <div class="animated fadeIn">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header">
            <i class="fa fa-edit"></i>Crear candidato
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

            {!! Form::open(array('route' => 'candidato.store','method' => 'POST', 'enctype' => 'multipart/form-data')) !!}
              <div class="row">
                <div class="col-sm-4">
                  <div class="form-group">
                    <strong>{{ Form::label('name', 'Nombres') }}</strong>
                    {!! Form::text('name', null, array('placeholder' => 'Nombres','class' => 'form-control')) !!}
                  </div>
                  <div class="form-group">
                    <strong>{{ Form::label('last_name', 'Apellidos') }}</strong>
                    {!! Form::text('last_name', null, array('placeholder' => 'Apellidos','class' => 'form-control')) !!}
                  </div>
                  <div class="form-group">                    
                    <strong>{{ Form::label('gender', 'Género') }}</strong>
                    <div class="col-lg-12">
                      <label class="radio-inline" for="inline-radio1">
                        <input type="radio" id="Masculino" name="gender" value="0"> Masculino
                      </label>
                      <label class="radio-inline" for="inline-radio2">
                        <input type="radio" id="Femenino" name="gender" value="1"> Femenino
                      </label>
                    </div>                    
                  </div>  
                  <div class="form-group">
                    <strong>{{ Form::label('birthdate', 'Fecha de nacimiento') }}</strong>
                    {!! Form::date('birthdate', null, array('class' => 'form-control', 'placeholder' => 'Fecha de nacimiento'), \Carbon\Carbon::now()) !!}
                  </div> 
                  <div class="form-group">
                    <strong>{{ Form::label('likes', 'Gustos') }}</strong>
                    {!! Form::text('likes', null, array('placeholder' => 'Gustos','class' => 'form-control')) !!}
                  </div>
                  <div class="form-group">
                    <strong>{{ Form::label('talent', 'Talentos') }}</strong>
                    {!! Form::text('talent', null, array('placeholder' => 'Talentos','class' => 'form-control')) !!}
                  </div>
                  <div class="form-group">
                    <strong>{{ Form::label('wishes', 'Deseos') }}</strong>
                    {!! Form::text('wishes', null, array('placeholder' => 'Deseos','class' => 'form-control')) !!}
                  </div>
                  <div class="form-group">
                    <strong>{{ Form::label('group_id', 'Grupo') }}</strong>
                    {!! Form::select('group_id', $groups, null, ['class' => 'form-control', 'placeholder' => 'Seleccionar grupo']) !!}  
                  </div>
                  <div class="form-group">
                    <strong>{{ Form::label('course_id', 'Curso') }}</strong>
                    {!! Form::select('course_id', $courses, null, ['class' => 'form-control', 'placeholder' => 'Seleccionar curso']) !!}            
                  </div>
                </div>

                <div class="col-sm-4">
                  <div class="form-group">
                    <strong>{{ Form::label('goal', 'Meta') }}</strong>
                    {!! Form::text('goal', null, array('placeholder' => '$ Meta','class' => 'form-control')) !!}
                  </div>
                  <div class="form-group">
                    <strong>{{ Form::label('father_name', 'Nombre del padre') }}</strong>
                    {!! Form::text('father_name', null, array('placeholder' => 'Nombre del padre','class' => 'form-control')) !!}
                  </div>
                  <div class="form-group">
                    <strong>{{ Form::label('f_doc_id', 'Cédula') }}</strong>
                    {!! Form::text('f_doc_id', null, array('placeholder' => 'Cédula del padre','class' => 'form-control')) !!}
                  </div>
                  <div class="form-group">
                    <strong>{{ Form::label('f_phone', 'Teléfono') }}</strong>
                    {!! Form::text('f_phone', null, array('placeholder' => 'Teléfono del padre','class' => 'form-control')) !!}
                  </div>
                  <div class="form-group">
                    <strong>{{ Form::label('f_email', 'Email') }}</strong>
                    {!! Form::text('f_email', null, array('placeholder' => 'Email del padre','class' => 'form-control')) !!}
                  </div>
                  <div class="form-group">
                    <strong>{{ Form::label('mother_name', 'Nombre de la madre') }}</strong>
                    {!! Form::text('mother_name', null, array('placeholder' => 'Nombre de la madre','class' => 'form-control')) !!}
                  </div>
                  <div class="form-group">
                    <strong>{{ Form::label('m_doc_id', 'Cédula') }}</strong>
                    {!! Form::text('m_doc_id', null, array('placeholder' => 'Cédula de la madre','class' => 'form-control')) !!}
                  </div>
                  <div class="form-group">
                    <strong>{{ Form::label('m_phone', 'Teléfono') }}</strong>
                    {!! Form::text('m_phone', null, array('placeholder' => 'Teléfono de la madre','class' => 'form-control')) !!}
                  </div>
                  <div class="form-group">
                    <strong>{{ Form::label('m_email', 'Email') }}</strong>
                    {!! Form::text('m_email', null, array('placeholder' => 'Email de la madre','class' => 'form-control')) !!}
                  </div>         
                </div>

                <div class="col-sm-4">                    
                  <div class="form-group">
                    <strong>{{ Form::label('family_income', 'Ingreso familiar') }}</strong>
                    {!! Form::text('family_income', null, array('placeholder' => '$ Ingreso familiar','class' => 'form-control')) !!}
                  </div>
                  <div class="form-group">
                    <strong>{{ Form::label('address', 'Dirección') }}</strong>
                    {!! Form::text('address', null, array('placeholder' => 'Dirección','class' => 'form-control')) !!}
                  </div>
                  <div class="form-group">
                    <strong>{{ Form::label('city', 'Ciudad / Provincia') }}</strong>
                    {!! Form::text('city', null, array('placeholder' => 'Ciudad','class' => 'form-control')) !!}
                  </div>
                  <div class="form-group">
                    <strong>{{ Form::label('ailment', 'Alergias') }}</strong>
                    {!! Form::textarea('ailment', null, ['rows' => 2, 'cols' => 57, 'style' => 'resize:none']) !!}
                  </div>
                  <div class="form-group">
                    <strong>{{ Form::label('medicines', 'Medicamentos') }}</strong>
                    {!! Form::textarea('medicines', null, ['rows' => 2, 'cols' => 57, 'style' => 'resize:none']) !!}
                  </div>
                  <div class="form-group">
                    <strong>{{ Form::label('description', 'Descripción') }}</strong>
                    {!! Form::textarea('description', null, ['rows' => 2, 'cols' => 57, 'style' => 'resize:none']) !!}
                  </div>
                  <div class="form-group">
                    <strong>{{ Form::label('avatar', 'Imagen de perfil') }}</strong>
                    {!! Form::file('avatar', null, array('class' => 'form-control')) !!}
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
                      <a class="btn btn-warning" href="{{ route('candidatos.index') }}" data-toggle="tooltip" rel="tooltip" data-placement="top" title="Retornar">
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