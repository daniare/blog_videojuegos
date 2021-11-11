@extends('layouts.plantilla')

@section("title","Registrar")

@section('content')

<div class="row">
    <div class="col">
        <h1 class="h1">Crear usuario</h1>
    </div>
</div>
<form class="mb-3" action="{{route('usuario.crear')}}" method="post"> 
    @csrf
<div class="row">
    <div class="col-12">
        <h2 class="h2">Nombre de Usuario</h2>
    </div>
    <div class="col-12">
        <input type="text" name="nombre_usuario" class="form-control"/>
    </div>
    <div class="col-6">
        <h2 class="h2">Nombre</h2>
    </div>
    <div class="col-6">
        <h2 class="h2">Apellidos</h2>
    </div>
    <div class="col-6">
        <input type="text" class="form-control" name="nombre">
    </div>
    <div class="col-6">
        <input type="text" class="form-control" name="apellidos">
    </div>
    <div class="col-12">
        <h2 class="h2">Email</h2>
    </div>
    <div class="col-12">
        <input type="email" class="form-control" name="email">
    </div>
    <div class="col-12">
        <h2 class="h2">Contraseña</h2>
    </div>
    <div class="col-12">
        <input type="password" class="form-control" name="password">
    </div>
    <input type="submit" class="btn btn-success" value="Registrar">
</div>
</form>

<!--=======================================================-->
<!--div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('usuario.registrar') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div-->
@endsection
