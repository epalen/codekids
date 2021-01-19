<div class="container-fluid">
  <div class="animated fadeIn">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header">
            <i class="fa fa-info"></i>Información de estudiante
          </div>
          <div class="card-body">
            <div class="row">
              <!-- left column -->
              <div class="col-sm-4">
                <div class="text-justify">
                  <div class="panel-heading">
                      <h4 class="panel-title">{{ $students->candidate->name }} {{ $students->candidate->last_name }}</h4> 
                  </div>
                    <img src="{{ URL::asset('uploads/candidates/' . $students->candidate->avatar) }}" class="avatar-lg img-circle img-thumbnail" alt="avatar">
                  </div>
              </div>
              <!-- right column -->
              <div class="col-sm-3">
                <div class="form-group">
                  <strong>Sexo:</strong>
                  @if ($students->candidate->gender == 1)
                  Femenino
                  @else ($students->candidate->gneder == 0)
                  Masculino
                  @endif
                </div>
                <div class="form-group">
                  <strong>Edad:</strong>
                  {{ Carbon\Carbon::parse($students->candidate->birthdate)->addDays(10)->diffForHumans() }}
                </div>
                <div class="form-group">
                  <strong>Gustos:</strong>
                  {{ $students->candidate->likes }}
                </div>
                <div class="form-group">
                  <strong>Talentos:</strong>
                  {{ $students->candidate->talent }}
                </div>
                <div class="form-group">
                  <strong>Deseos:</strong>
                  {{ $students->candidate->wishes }}
                </div>
                <div class="form-group">
                  <strong>Nombre del padre:</strong>
                  {{ $students->candidate->father_name }}
                </div>
                <div class="form-group">
                  <strong>Cédula</strong>
                  {{ $students->candidate->f_doc_id }}
                </div>
                <div class="form-group">
                  <strong>Teléfono</strong>
                  {{ $students->candidate->f_phone }}
                </div>
                <div class="form-group">
                  <strong>Email</strong>
                  {{ $students->candidate->f_email }}
                </div>
              </div>
              <div class="col-sm-5"> 
                <form class="form-group" role="form">
                  <div class="form-group">
                    <strong>Nombre de la madre:</strong>
                    {{ $students->candidate->mother_name }}
                  </div> 
                  <div class="form-group">
                    <strong>Cédula</strong>
                    {{ $students->candidate->m_doc_id }}
                  </div>
                  <div class="form-group">
                    <strong>Teléfono</strong>
                    {{ $students->candidate->m_phone }}
                  </div>
                  <div class="form-group">
                    <strong>Email</strong>
                    {{ $students->candidate->m_email }}
                  </div>
                  <div class="form-group">
                    <strong>Dirección:</strong>
                    {{ $students->candidate->address }}
                  </div>
                  <div class="form-group">
                      <strong>Ciudad:</strong>
                      {{ $students->candidate->city }}
                    </div>
                  <div class="form-group">
                      <strong>Descripción:</strong>
                      <br>
                      <p align="justify">{{ $students->candidate->description }}</p>
                  </div>      
                </form>
              </div>
              <div class="col-sm-12">
                <br>
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="text-align: center" colspan="2">Descripción</th>
                      <th style="text-align: center" colspan="6">Calificaciones</th>
                    </tr>
                    <tr>
                      <th style="width: 2%" scope="col">#</th>
                      <th style="width: 25%" scope="col">Curso</th>
                      <th style="text-align: center" scope="col">Asistencia</th>
                      <th style="text-align: center" scope="col">Participación</th>
                      <th style="text-align: center" scope="col">Practicas</th>
                      <th style="text-align: center" scope="col">Proyectos</th>
                      <th style="text-align: center" scope="col">Total</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>{{ $students->course->name }}</td>
                      <td align="center">25%</td>
                      <td align="center">25%</td>
                      <td align="center">25%</td>
                      <td align="center">25%</td>
                      <td align="center"><strong>100%</strong></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="col-sm-12">
                <div class="form-group" align="center">
                  <a class="btn btn-warning" href="{{ route('estudiante.index') }}" data-toggle="tooltip" rel="tooltip" data-placement="top" title="Retornar">
                      <i class="fa fa-arrow-left"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--/.col-->
    </div>
  </div>
</div>