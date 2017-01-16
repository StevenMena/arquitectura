@extends('admin1')
@section('contenido')
<div style="display:none">
{!!link_to_route('user.create', $title = 'Interesados', $subtitle = '')!!}
</div>
<div class="the-box">
  <h3> ESTUDIANTES INTERESADOS EN PROYECTOS</h3>
  <div class="table-responsive">
    <table class="table table-striped table-hover" id="tr-est" style="font-size:13px;" width="100%">
        <thead class="the-box dark full">
          <tr>
            <th>ID proyecto</th>
            <th>Nombre Proyecto</th>
            <th>Estudiante</th>
            <th>Correo</th>
            <th>Telefono</th>
            <th>Fecha Ingreso</th>
          </tr>
        </thead>
        <tbody></tbody>
    </table>
  </div><!-- /.table-responsive -->
</div>
@endsection
