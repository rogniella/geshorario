@extends('layouts.app')

@section('content')

<div class="modal fade fw-bold" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" data-bs-theme="" aria-hidden="true" data-bs-backdrop="static">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-header fw-bold">
                <h5 class="modal-title" id="loginModalLabel">Registro de Entrada/Salida</h5>
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal" aria-label="Close">
                    <i class="bi bi-x"></i>
                </button>
            </div>
            <form class="" method="POST" action="{{ route('profesores.registro_graba') }}">
            @csrf
                <div class="modal-body">
                    
                    <ul class="list-group list-group-flush text-center">
                        <li class="list-group-item" id="MyClockDate" onload="showDate();"></li>
                        <li class="list-group-item" id="MyClockTime" onload="showTime();"></li>
                    </ul>

                    <div class="mb-4">
                        <label for="form-label">DNI</label>
                        <input id="dni" type="text" name="dni" class="form-control" value="" required  autofocus>
                    </div>
                    
                    <div class="mb-4">
                        <label for="form-label">Contraseña</label>
                        <input id="password" type="password" class="form-control" name="password" value="" required>
                    </div>
            
                </div>
                
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success btn-block">Ingresar</button>
                </div>
            </form> 
        </div>
    </div>
  </div>
</div>

<!--  HICE UN COMMIT SIN VER PRIMERO LO QUE SE ACTUALIZÓ, ASI QUE COMENTÉ LO CAMBIADO PORQUE NO SABIA COMO ARREGLAR -- NICO :D

<section class="container py-1">
<div class="row justify-content-center ">
  <div class="col-lg-5 col-md-6">
    <div class="card mb-4 border-primary border border-4">
      <div class="card-body bg-black text-white">
        <div class="text-center">
          <img src="{{ asset('img/isfdlogo.png') }}"class="rounded" width="150" alt="">
        </div>
        <h5 class="card-title">Registro de Entrada/Salida</h5>
        <form method="POST" action="{{ route('profesores.registro_graba') }}">
            @csrf
            
            <p>FECHA: <h7 class="" id="MyClockDate" onload="showDate();"></h7></p>
            <p>HORA: <h7 class="" id="MyClockTime" onload="showTime();"></h7></p>
            
            <div class="input-group input-group-sm mb-3">
              <input id="dni" type="text" name="dni" class="form-control" value="" placeholder="Ingrese Dni" aria-label="Sizing example input"aria-describedby="inputGroup-sizing-sm" required  autofocus></p>
            </div>
            <div class="input-group input-group-sm mb-3">
              <input id="password" type="password" class="form-control" name="password" value="" placeholder="Ingrese Contraseña" aria-label="Sizing example input"aria-describedby="inputGroup-sizing-sm" required>
            </div>
            <div class="card-footer text-center">
            <button type="submit" class="btn btn-primary btn-block">Ingresar datos</button>
            <br>
            <a class="text-secondary" href="/register">¿Olvidaste tu contraseña? Haz click aquí</a>
            </div>
          </div>
</section>
 -->


@endsection

@section('script')

<script>

 
    $(document).ready(function () {
        showDate();
        showTime();
        $('#loginModal').modal('show');

    });

        function showTime() {
            const now = dayjs();

            let h = now.hour();
            let m = now.minute();
            let s = now.second();

            if (h == 0 && m == 0 && s == 0) {
                showDate();
            }

            h = (h < 10) ? "0" + h : h;
            m = (m < 10) ? "0" + m : m;
            s = (s < 10) ? "0" + s : s;

            const time = h + ":" + m + ":" + s;
            document.getElementById("MyClockTime").textContent = time;

            setTimeout(showTime, 1000);
        }

        function showDate() {
            const now = dayjs();

            let d = now.date();
            let m = now.month() + 1;
            let y = now.year();

            d = (d < 10) ? "0" + d : d;
            m = (m < 10) ? "0" + m : m;

            const date = d + "/" + m + "/" + y;
            document.getElementById("MyClockDate").textContent = date;
        }

</script>

@endsection()    