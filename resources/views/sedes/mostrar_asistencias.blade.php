@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center fs-5">
            <div class="col-12 mb-4">
                <h3 class="fw-bold titulo">Asistencias para la Sede: {{ $sede->nombre }}</h3>
            </div>

            <div class="col-9 mb-4">
                @if ($sede->asistencias->count() > 0)
                    <table class="table table-hover p-2 bg-body-tertiary border border-black rounded table-isfd text-center" id="example">
                        <thead>
                            <tr>
                                <th scope="col">ID_Ingreso</th>
                                <!-- Agrega otras columnas según tu estructura de datos -->
                                <th scope="col">Fecha</th>
                                <th scope="col">Profesor</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($sede->asistencias as $asistencia)
                                <tr>
                                    <td scope="row">{{ $asistencia->id }}</td>
                                    <!-- Agrega otras celdas según tu estructura de datos -->
                                    <td>{{ $asistencia->created_at}}</td>
                                    <td>
                                        @if ($asistencia->usuario)
                                            {{ $asistencia->usuario->name }}
                                        @else
                                            Sin usuario asignado
                                        @endif
                                    </td>
                                    

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                    <p>No hay asistencias registradas para esta sede.</p>
                @endif
            </div>
        </div>
    </div>
@endsection

@section('script')


<script>
let minDate, maxDate;
 
// Custom filtering function which will search data in column four between two values
DataTable.ext.search.push(function (settings, data, dataIndex) {
    let min = minDate.val();
    let max = maxDate.val();
    let date = new Date(data[2]);
 
    if (
        (min === null && max === null) ||
        (min === null && date <= max) ||
        (min <= date && max === null) ||
        (min <= date && date <= max)
    ) {
        return true;
    }
    return false;
});
 
// Create date inputs
minDate = new DateTime('#min', {
    format: 'MMMMM Do YYYY'
});

maxDate = new DateTime('#max', {
    format: 'MMMM Do YYYY'
});
 
// DataTables initialisation
let table = new DataTable('#example', {
	language: {
        url: '//cdn.datatables.net/plug-ins/1.13.7/i18n/es-ES.json',
    },
});

 
// Refilter the table
document.querySelectorAll('#min, #max').forEach((el) => {
    el.addEventListener('change', () => table.draw());
});
</script>



<script url="https://code.jquery.com/jquery-3.7.0.js"></script>
<script url="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script url="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.2/moment.min.js"></script>
<script url="https://cdn.datatables.net/datetime/1.5.1/js/dataTables.dateTime.min.js"></script>
<!-- <script url="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.19.4/locale/es.js"></script> --> <!-- SCRIPT PARA PASAR DATETIME A ESPAÑOL --> 


@endsection()