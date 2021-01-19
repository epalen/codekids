<div class="container-fluid">
  <div class="animated fadeIn">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header">
            <i class="fa fa-edit"></i>Editar usuario            
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

            {!! Form::model($users, ['method' => 'PATCH','route' => ['usuarios.update', $users->id], 'enctype' => 'multipart/form-data']) !!}
              <div class="row">
                <div class="col-sm-4">
                  <div class="form-group">
                    {!! Form::text('name', null, array('placeholder' => 'Nombres','class' => 'form-control')) !!}
                  </div>
                  <div class="form-group">
                    {!! Form::text('last_name', null, array('placeholder' => 'Apellidos','class' => 'form-control')) !!}
                  </div>
                  <div class="form-group">
                    {!! Form::text('phone', null, array('placeholder' => 'Teléfono','class' => 'form-control')) !!}
                  </div>
                  <div class="form-group">
                    {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
                  </div>
                  <div class="form-group">                    
                    <strong>{{ Form::label('gender', 'Género') }}</strong>
                    <div class="col-lg-12">
                      @if($users->gender == 'M')
                        {{ Form::radio('gender', 'F', false)}} Mujer
                        {{ Form::radio('gender', 'M', true)}} Hombre
                      @elseif($users->gender == 'F')
                        {{ Form::radio('gender', 'F', true)}} Mujer
                        {{ Form::radio('gender', 'M', false)}} Hombre
                      @endif
                    </div>                    
                  </div>  
                  <div class="form-group">
                    <strong>{{ Form::label('birthdate', 'Fecha de nacimiento') }}</strong>
                    {!! Form::date('birthdate', null, array('class' => 'form-control', 'placeholder' => 'Fecha de nacimiento'), \Carbon\Carbon::now()) !!}
                  </div>
                  <div class="form-group">
                    {!! Form::text('job_title', null, array('placeholder' => 'Posición laboral','class' => 'form-control')) !!}
                  </div>
                  <div class="form-group">
                    {!! Form::text('fb_link', null, array('placeholder' => 'Facebook','class' => 'form-control')) !!}
                  </div>
                  <div class="form-group">
                    {!! Form::text('tw_link', null, array('placeholder' => 'Twitter','class' => 'form-control')) !!}
                  </div>
                  <div class="form-group">
                    {!! Form::text('ins_link', null, array('placeholder' => 'Instagram','class' => 'form-control')) !!}
                  </div>
                  <div class="form-group">
                    {!! Form::text('in_link', null, array('placeholder' => 'Linkedin','class' => 'form-control')) !!}
                  </div>
                  <div class="form-group">
                    {!! Form::text('git_link', null, array('placeholder' => 'Github','class' => 'form-control')) !!}
                  </div>
                </div>

                <div class="col-sm-4">
                  <div class="form-group">
                    {!! Form::text('address', null, array('placeholder' => 'Dirección','class' => 'form-control')) !!}
                  </div>
                  <div class="form-group">
                    <strong>{{ Form::label('province_id', 'Ciudad / Provincia') }}</strong>
                    {!! Form::select('province_id', $provinces, null, ['class' => 'form-control', 'placeholder' => 'Seleccionar una provincia']) !!}
                  </div> 
                  <div class="form-group">
                    <strong>{{ Form::label('likes', 'Gustos') }}</strong>
                    {!! Form::textarea('likes', null, ['rows' => 2, 'cols' => 57, 'style' => 'resize:none']) !!}
                  </div> 
                  <div class="form-group">
                    <strong>{{ Form::label('description', 'Descripción') }}</strong>
                    {!! Form::textarea('description', null, ['rows' => 2, 'cols' => 57, 'style' => 'resize:none']) !!}
                  </div> 
                  @can('roles-usuario')                         
                    <div class="form-group">
                      <strong>Rol:</strong>
                      {!! Form::select('roles[]', $roles,$userRole, array('class' => 'form-control','multiple')) !!}
                    </div>
                  @endcan   
                  <div class="form-group">
                    {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control')) !!}
                  </div>   
                  <div class="form-group">
                    <strong>{{ Form::label('active', 'Estado') }}</strong>
                    <br>Inactivo 
                    <label class="switch switch-lg switch-3d switch-primary">
                        {!! Form::checkbox('active', null, $users->active == 1 ? true : false, ['class' => 'switch-input']) !!}
                        <span class="switch-label" data-on="On" data-off="Off"></span>
                        <span class="switch-handle"></span>
                    </label> Activo
                  </div>                              
                </div>

                <div class="col-sm-4">
                  <div class="form-group">
                    <strong>{{ Form::label('avatar', 'Imagen') }}</strong>
                    <a href="#" class="thumbnail">
                      <img src="{{ URL::asset('uploads/avatars/' . $users->avatar) }}" class="avatar img-thumbnail" alt="avatar" style="height: 300px; width: 100%;">            
                    </a>
                  </div>   
                  <div class="form-group">
                    {{ Form::label('avatar', 'Imagen de perfil') }}
                    {!! Form::file('avatar', null, array('class' => 'form-control')) !!}
                  </div>                          
                </div>                
                <div class="col-sm-12">
                  <div class="form-group" align="center">
                      <a class="btn btn-warning" href="{{ route('usuarios.index') }}" data-toggle="tooltip" rel="tooltip" data-placement="top" title="Retornar">
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