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

<!--
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
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