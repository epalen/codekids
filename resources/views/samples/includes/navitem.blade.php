<li class="nav-title">
  Administración
</li>
@role('Admin|Usuario')
  <li class="nav-item nav-dropdown">
    <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-people"></i> Usuarios</a>
    <ul class="nav-dropdown-items">
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/usuarios') }}"><i class="icon-settings"></i> Administración</a>
      </li>
    </ul>
  </li>
@else
@endrole
@role('Admin')
  <li class="nav-item nav-dropdown">
    <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-user"></i> Roles</a>
    <ul class="nav-dropdown-items">
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/roles') }}"><i class="icon-settings"></i> Administración</a>
      </li>
    </ul>
  </li>
@else
@endrole
@role('Admin|Editor')
  <li class="nav-item nav-dropdown">
    <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-book-open"></i> Publicaciones</a>
    <ul class="nav-dropdown-items">
      <li class="nav-item">
        <a class="nav-link" href="{{ url('admin/publicacion') }}"><i class="icon-settings"></i> Administración</a>
      </li>
    </ul>
  </li>
@else
@endrole
@role('Admin')
  <li class="nav-item nav-dropdown">
  <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-share"></i> Campañas</a>
    <ul class="nav-dropdown-items">
      <li class="nav-item">
        <a class="nav-link" href="{{ url('admin/campanas') }}"><i class="icon-settings"></i> Administración</a>
      </li>
    </ul>
  </li>
@else
@endrole
@role('Admin')
  <li class="nav-item nav-dropdown">
    <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-people"></i> Cadidatos</a>
    <ul class="nav-dropdown-items">
      <li class="nav-item">
        <a class="nav-link" href="{{ url('admin/candidatos') }}"><i class="icon-settings"></i> Administración</a>
      </li>
    </ul>
  </li>
@else
@endrole
@role('Admin')
  <li class="nav-item nav-dropdown">
    <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-graduation"></i> Estudiantes</a>
    <ul class="nav-dropdown-items">
      <li class="nav-item">
        <a class="nav-link" href="{{ url('admin/estudiantes') }}"><i class="icon-settings"></i> Administración</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><i class="icon-note"></i> Asistencia</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><i class="icon-check"></i> Calificación</a>
      </li>
    </ul>
  </li>
@else
@endrole
@role('Admin')
  <li class="nav-item nav-dropdown">
    <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i> Cursos</a>
    <ul class="nav-dropdown-items">
      <li class="nav-item">
        <a class="nav-link" href="#"><i class="icon-settings"></i> Administración</a>
      </li>
    </ul>
  </li>
@else
@endrole
@role('Admin')
  <li class="nav-item nav-dropdown">
    <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-people"></i> Equipo de trabajo</a>
    <ul class="nav-dropdown-items">
      <li class="nav-item">
        <a class="nav-link" href="#"><i class="icon-settings"></i> Administración</a>
      </li>
    </ul>
  </li>
@else
@endrole
@role('Admin')
  <li class="nav-item nav-dropdown">
    <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-wallet"></i> Auspiciadores</a>
    <ul class="nav-dropdown-items">
      <li class="nav-item">
        <a class="nav-link" href="#"><i class="icon-settings"></i> Administración</a>
      </li>
    </ul>
  </li>
@else
@endrole
@role('Admin')
  <li class="nav-item nav-dropdown">
    <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-credit-card"></i> Donaciones</a>
    <ul class="nav-dropdown-items">
      <li class="nav-item">
        <a class="nav-link" href="{{ url('donaciones/campanas') }}"><i class="icon-share"></i> Campañas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('donaciones/candidatos') }}"><i class="icon-people"></i> Candidatos</a>
      </li>
    </ul>
  </li>
@else
@endrole
<li class="divider"></li>
<li class="nav-title">
  Configuración
</li>
<li class="nav-item nav-dropdown">
  <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-briefcase"></i> Datos de la empresa</a>
  <ul class="nav-dropdown-items">
    <li class="nav-item">
      <a class="nav-link" href="#" target="_top"><i class="icon-settings"></i> Administración</a>
    </li>
  </ul>
</li>
<!--<li class="nav-item mt-auto">
  <a class="nav-link nav-link-success" href="http://coreui.io/" target="_top"><i class="icon-cloud-download"></i> Download CoreUI</a>
</li>
<li class="nav-item">
  <a class="nav-link nav-link-danger" href="http://coreui.io/pro/" target="_top"><i class="icon-layers"></i> Try CoreUI <strong>PRO</strong></a>
</li>-->