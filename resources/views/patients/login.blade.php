@extends('app')

@section('titulo', 'Login de Paciente')

@section('conteudo')
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6 mx-auto mb-3">
            <div class="card">
                <div class="card-header">{{ __('Login de Paciente') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('patients.login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-2 col-form-label text-md-right">{{ __('E-mail') }}</label>

                            <div class="col-lg-9 mx-auto mb-3">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
 
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-2 col-form-label text-md-right">{{ __('Senha') }}</label>

                            <div class="col-lg-9 mx-auto mb-3">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-lg-7 mx-auto mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Lembrar-me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="mb-3 text-center">
                                <button type="submit" class="btn btn-light" style="color: #ffffff; background-color: #27b8a0;">
                                    {{ __('Login') }}
                                </button>

                                <!-- @if (Route::has('patients.password.request'))
                                    <a class="btn btn-link" style="color: #27b8a0;" href="{{ route('patients.password.request') }}">
                                        {{ __('Esqueseu a senha?') }}
                                    </a>
                                @endif -->
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="mb-3 text-center">
                                <a class="btn btn-link" style="color: #27b8a0;" href="{{ route('patients.create') }}">
                                    {{ __('Novo aqui? Cadastre-se agora') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
