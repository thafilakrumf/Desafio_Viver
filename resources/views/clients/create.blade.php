@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-right">{{ __('Cadastrar Cliente') }}</div>
                    <div class="card-body">
                        <form action="{{route('client.store')}}" method="POST">
                        <div class = "row">
                            <div class="col-md-6">
                                    @csrf

                                {{-- Nome --}}
                                    <div class="form-group row">
                                        <div class="col-md-12">
                                            <label for="name" class="col-md-12 col-form-label text-md-left">{{ __('Nome') }}</label>
                                            <input id="name" placeholder="nome" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                                            @if ($errors->has('name'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('name') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    {{-- Login / E-mail --}}
                                    <div class="form-group row">
                                        <div class="col-md-12">
                                            <label for="email" class="col-md-12 col-form-label text-md-left">{{ __('Login') }}</label>                        
                                            <input id="email" placeholder="login" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                            @if ($errors->has('email'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <label class="col-md-12 col-form-label text-md-center">{{ __('Informações de Segurança') }}</label>

                                    {{-- Senha --}}
                                    <div class="form-group row">
                                        <div class="col-md-12">
                                            <label for="password" class="col-md-12 col-form-label text-md-left">{{ __('Senha') }}</label>
                                            <input id="password" placeholder="senha" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                            @if ($errors->has('password'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                            
                            </div>
                                {{-- Sobrenome --}}
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <label for="sobrenome" class="col-md-12 col-form-label text-md-left">{{ __('Sobrenome') }}</label>
                                        <input id="sobrenome" placeholder="sobrenome" type="text" class="form-control" name="sobrenome" required>    
                                    </div>
                                </div> 
                            
                                    {{-- Data Aniversário --}}
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <label for="aniversario=" class="col-md-12 col-form-label text-md-left">{{ __('Data Aniversario') }}</label>
                                        <input id="aniversario" placeholder="data aniversário" type="date" class="form-control" name="aniversario" required> 
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12" style="padding-top: 34px">
                                        <label for="password-confirm" class="col-md-12 col-form-label text-md-left">{{ __('Repita Senha') }}</label>                            
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                    </div>
                                    
                                </div>
                            </div> 
                                    {{-- Botão Enviar --}}
                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" name="enviar" value="Enviar" class="btn btn-primary"/>
                                        {{"Cadastrar"}}
                                    </button>
                                    </form>
                                    </div>
                                </div>
                            </div> 
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
