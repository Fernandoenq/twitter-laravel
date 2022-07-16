@extends('layouts.app')

@section('content')

<div class="d-flex flex-column justify-content-center align-items-center" 
    style="height: 100vh">

    <h1 class="mb-4">Login</h1>
    <form action="/signin" method="post" class="d-flex flex-column">
        @csrf
        <input type="email" name="email" placeholder="E-mail" class="form-control mb-3">
        <input type="password" name="password" placeholder="Senha" class="form-control mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>

    <a href="/register" class="mt-3"> Registre-se</a>

</div>
@endsection