@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2>Usuário <strong>{{ $user->name }}</strong></h2>
            Dados do usuário
            <ul>
                <li>Nome: {{ $user->name }}</li>
                <li>Email: {{ $user->email }}</li>
            </ul>
        </div>
    </div>
</div>
@endsection