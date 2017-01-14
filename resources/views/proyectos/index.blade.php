@extends('admin1')

@section('css')
{!! Html::style('plugins/datatable/css/bootstrap.datatable.min.css') !!} 
@endsection

@section('contenido')


@if(Session::has('message'))
<div class="alert alert-success alert-dismissible" role="alert" style="width: 100%; margin-top: 100px; ">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
{{Session::get('message')}}
</div>
@endif


<div class="the-box">
{!!link_to_route('proyectos.create', $title = 'Crear Proyecto', $parameters=null, $attributes = ['class'=>'btn btn-primary'])!!}

<br>
<br>
<div class="table-responsive">
    <table class="table table-striped table-hover" id="tr-pry" style="font-size:13px;" width="100%">
        <thead class="the-box dark full">
            <tr>
                <th>Corelativo</th>
		  		<th>Nombre</th>
		  		<th>Tipo</th>
		  		<th>Usuario Creacion</th>
		  		<th>Fecha Creacion</th>
		  		<th>Opciones</th>
            </tr>
        </thead>
        <tbody></tbody>
    </table>
    </div><!-- /.table-responsive -->


</div>

@endsection

@section('js')
{!! Html::script('plugins/datatable/js/jquery.dataTables.min.js') !!}
{!! Html::script('plugins/datatable/js/bootstrap.datatable.js') !!}
<script>
    
$( document ).ready(function(){
   var table = $('#tr-pry').DataTable({
        filter: true,
        serverSide: true,
        
        ajax: '{!! route('dt.row.data.proyectos') !!}',
        columns: [  
            
            
            {data: 'idProyecto', name: 'pry.idProyecto'},
            {data: 'nombreProyecto', name: 'pry.nombreProyecto'},
            {data: 'tipoProyecto', name: 'tipo.tipoProyecto'},
            {data: 'nombres', name: 'nombres'},
            {data: 'fechaCreacion', name: 'pry.fechaCreacion'},
            {data: 'eliminar', name: 'eliminar',orderable: false, searchable: false}
            
                      
        ],
    
        
        language: {
            "url": "{{ asset('plugins/datatable/lang/es.json') }}"
        },
        order: [[1, 'desc']]
       
    });
});
</script>
@endsection