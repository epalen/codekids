<div class="container-fluid">
  <div class="animated fadeIn">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header">
            <i class="fa fa-edit"></i>Editar rol
            
          </div>
          <div class="card-body">
            <h4>Información personal</h4>

              {!! Form::model($role, ['method' => 'PATCH','route' => ['roles.update', $role->id]]) !!}

                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      {!! Form::text('name', null, array('placeholder' => 'Nombre','class' => 'form-control')) !!}
                    </div>
                    <div class="form-group">
                      <strong>Descripción:</strong>
                      {!! Form::textarea('description', null, ['rows' => 4, 'cols' => 80, 'class' => 'form-control']) !!}
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <strong>Permisos:</strong>
                      <br/>
                      @foreach($permission as $value)
                        <label>
                          {{ Form::checkbox('permission[]', $value->id, in_array($value->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                          {{ $value->name }}
                        </label>
                        <br/>
                      @endforeach
                    </div>
                  </div>

                  <div class="col-sm-12">

                    <div class="form-group" align="center">
                        <a class="btn btn-warning" href="{{ route('roles.index') }}" data-toggle="tooltip" rel="tooltip" data-placement="top" title="Retornar">
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