@extends('layouts.app')

@section('content')

<section class="container py-1">

    <div class="row justify-content-center">
        <div class="col-lg-5 col-md-6 shadow-lg p-2 bg-body-tertiary rounded border border-4 mb-4">
            <div class="card-body">
                <div class="text-center mb-4">
                    <img src="{{ asset('img/isfdlogo.png') }}"class="rounded mb-2" width="150" alt="">
                    <h5 class="fw-bold mb-3">Registro de entrada y salida</h5>
                </div>
                <form method="POST" action="{{ route('profesores.registro_graba') }}">
                @csrf
                    
                    <p class="fw-bold">FECHA: <h7 id="fecha_entrada" name='fecha_entrada' onload="showDate();"></h7></p>
                    <p class="fw-bold">HORA: <h7 id="hora_entrada" name='hora_entrada' onload="showTime();"></h7></p>
<!-- 
                    <div class="mt-4 mb-3">
                        <label for="dni" class="form-label fw-bold">Numero de DNI</label>
                        <input type="text" class="form-control" id="dni" name="dni">
                    </div>
 -->

                    <label for="dni" class="form-label fw-bold">Nombre</label>

                    <select class="form-select" name="dni" id="dni" data-live-search="true" autocomplete="off">
                    @foreach($profe as $prof)
                        <option value="{{ $prof->name}}">
                        {{ $prof->apellidonombre}}
                        </option>
                    @endforeach()
                    </select>
 
                    <div class="mb-3">
                        <label for="password" class="form-label fw-bold">Contraseña</label>
                        <input type="password" class="form-control" id="password" autocomplete="new-password" name="password">
                    </div>

                    <div class="container text-center">
                        <div class="mb-4">
                            <button type="submit" class="btn btn-primary btn-block">Ingresar datos</button>
                        </div>
                        
                        <div class="mb-1">
                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                        
                        <!-- 
                        <div class="mb-1">
                            <a class="text-secondary" href="/register">¿Olvidaste tu contraseña? Haz click aquí</a>
                        </div>
                         -->
                         
                    </div>
                    
                </form> 
            </div>
        </div>
    </div>
    
</section>

@endsection

@section('script')

<script>

    $(document).ready(function() {
        $('#dni').select2();
    });

    $(document).ready(function () {
        showDate();
        showTime();
        $('#loginModal').modal('show');
        }
    );

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
        document.getElementById("hora_entrada").textContent = time;

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
        document.getElementById("fecha_entrada").textContent = date;
    }

</script>

@endsection()    