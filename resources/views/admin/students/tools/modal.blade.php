<div class="modal fade" id="modalCreate" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Crear estudiante</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {!! Form::open(array('route' => 'estudiante.store','method' => 'POST', 'enctype' => 'multipart/form-data')) !!}
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="form-group">
                          <strong>{{ Form::label('candidate_id', 'Candidato') }}</strong>
                          {!! Form::select('candidate_id', $candidates, null, ['class' => 'form-control', 'placeholder' => 'Seleccionar candidato']) !!}            
                        </div>
                        <div class="form-group">
                          <strong>{{ Form::label('group_id', 'Grupo') }}</strong>
                          {!! Form::select('group_id', $groups, null, ['class' => 'form-control', 'placeholder' => 'Seleccionar grupo']) !!}  
                        </div>    
                      </div>
      
                      <div class="col-sm-6"> 
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
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-close"></i> Cerrar</button>
                <button type="submit" class="btn btn-success"><i class="fa fa-save"> Guardar</i></button>
            </div>
                {!! Form::close() !!}
        </div>
    </div>
</div>