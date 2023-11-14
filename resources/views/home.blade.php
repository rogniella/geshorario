@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-lg-5 col-md-6 p-2 mb-4 container-login">

            <div class="text-center mb-4 rounded-2 bg-secondary-subtle p-0">
                <h2 class="fw-bold mb-3">{{ __('Dashboard') }}</h2>
            </div>
            
            <div class="p-5 pt-0">    
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                {{ __('You are logged in!') }}
            </div>

        </div>
    </div>
</div>

<script>
     setTimeout(function() {
        // Redirige al usuario a la vista de registro
        window.location.href = "{{ route('profesores.registro') }}";
    }, 3000);
</script>

@endsection
