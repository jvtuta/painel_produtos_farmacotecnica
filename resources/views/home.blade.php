@extends('layout.app')

@section('content')

    <div>
        teste php
    </div>
    <div>
        <form action="{{ action([App\Http\Controllers\Home::class, 'data']) }}", method="POST">
            @csrf
            <button type="submit">Teste</button>
        </form>
    </div>
    
@endsection