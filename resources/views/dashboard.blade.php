@extends('layouts.app')

@section('content')


<header>
    <a href=""><p>InterGames</p></a>
    <a href=""><img src="{‌{public_path('imagem/285391.jpg')}}" alt=""></a>
</header>

<div class="d-flex flex-column align-items-center">
    <div class="border" style="width: 600px">
        <form action="/tweets" method="post" class="d-flex align-items-center justify-content-between p-3">
            @csrf
            <input type="text" name="content" placeholder="O que está rolando em vossa mente?" class="form-control">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        @foreach ($tweets as $tweet)
            <div class="border-bottom p-3">
                <h4>{{$tweet->user->name}}</h4>
                <p>{{$tweet->content}}</p>
            </div>
        @endforeach
    </div>


</div>
@endsection