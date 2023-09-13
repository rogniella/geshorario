@extends('layouts.app')

@section('content')
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" data-bs-theme="dark"
  aria-hidden="true" data-bs-backdrop="static">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="loginModalLabel">REGISTRO de Entrada/Salida</h5>
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        
        <form method="POST" action="{{ route('profesores.registro_graba') }}">
            @csrf
            
            <h3 id="MyClockDate" onload="showDate();"></h3>
            <h3  id="MyClockTime" onload="showTime();"></h3>

            <p>Dni</p>
            <input id="dni" type="text" name="dni" class="form-control" value="" required  autofocus>
            <br>
            <p>Password</p>
            <input id="password" type="password" class="form-control" name="password" value="" required>
    
          <div class="modal-footer">
            <button type="submit" class="btn btn-success btn-block">Ingresar</button>
          </div>
        </div>
        </form> 
      </div>
    </div>
</div>
<!--<div>Registro de Entrada/Salida</div>

<form method="POST" action="{{ route('profesores.registro_graba') }}">
    @csrf

    <input id="dni" type="text" name="dni" class="form-control" value="" required  autofocus>

    <input id="password" type="password" class="form-control" name="password" required>
    
    <button type="submit" class="btn btn-success btn-block">Ingresar</button>

</form>  -->  
@endsection

@section('scrip')

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