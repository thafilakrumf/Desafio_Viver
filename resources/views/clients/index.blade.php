@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-right">{{ __('Todos os Clientes') }}</div>

               
                <div class="card-body">
                        <div class="row">
                    <div class="col-md-12">
                   
                        @csrf

                        {{-- NOME --}}
                        <div class="form-group row">
                            

                            <div class="col-md-12">

                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th scope="col">#ID</th>
                                                <th scope="col">Nome</th>
                                                <th scope="col">Sobrenome</th>
                                                <th scope="col">Login</th>
                                                <th scope="col">Aniversário</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $n=0;
                                            @endphp
                                            @foreach ($clients as $client )
                                                
                                                <tr>
                                                    <th scope="row">{{++$n}}</th>
                                                    <td>{{$client->name}}</td>
                                                    <td>{{$client->sobrenome}}</td>
                                                    <td>{{$client->email}}</td>
                                                    <td>{{date("d/m/Y",strtotime($client->aniversario))}}</td>
                                                </tr>                                          
                                            @endforeach
                                        </tbody>
                                    </table>
                                    
                                {{-- <label for="name" class="col-md-12 col-form-label text-md-left">{{ __('Nome') }}</label>
                                <input id="name" placeholder="nome" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif --}}
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4 text-right">
                            <a href="{{route('client.create')}}" type="submit" class="btn btn-primary">
                                    {{ __('Cadastrar novo cliente') }}
                                </a>
                            </div>
                        </div>
                 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
