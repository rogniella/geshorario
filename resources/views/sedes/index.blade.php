@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center fs-5">
            <div class="col-12 mb-4">
                <h3 class="fw-bold titulo">Sedes</h3>
            </div>

            <div class="col-9 mb-4">
                <table class="table table-hover p-2 bg-body-tertiary border border-black rounded table-isfd text-center">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($sedes as $sede)
                            <tr>
                                <td scope="row">{{ $sede->id }}</td>
                                <td>{{ $sede->nombre }}</td>
                                <td>
                                    <a href="{{ route('sedes.mostrar_asistencias', $sede->id)}}" class="btn-btn-primary"> <!-- aca deberia buscar segun el tipo de id -->
                                        <i class="bi bi-three-dots"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        let minDate, maxDate;
        
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
        
        minDate = new DateTime('#min', {
            format: 'MMMMM Do YYYY'
        });
        
        maxDate = new DateTime('#max', {
            format: 'MMMM Do YYYY'
        });
        
        let table = new DataTable('#example', {
            language: {
                url: '//cdn.datatables.net/plug-ins/1.13.7/i18n/es-ES.json',
            },
        });
        
        document.querySelectorAll('#min, #max').forEach((el) => {
            el.addEventListener('change', () => table.draw());
        });
    </script>

   
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.2/moment.min.js"></script>
    <script src="https://cdn.datatables.net/datetime/1.5.1/js/dataTables.dateTime.min.js"></script>
    

@endsection
