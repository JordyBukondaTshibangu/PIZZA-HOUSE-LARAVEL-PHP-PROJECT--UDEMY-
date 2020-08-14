@extends('layouts.app')

@section('content')

<div class="wrapper pizza-detail">
    <h1> Order for  - {{ $pizza->name }}</h1>
    <p class="type"> Type - {{ $pizza->type }} </p>
    <p class="base"> Base - {{ $pizza->base }} </p>
    @if ($pizza->toppings == null)
        <p>No toppings</p>
    @else
        <p> Extra toppings </p>
        <ul>
            @foreach ($pizza->toppings as $topping)
                <li> {{ $topping }}</li>
            @endforeach
        </ul>
    @endif
    <form action={{route('pizzas.destroy', $pizza->id)}} method="POST">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger">Complete order</button>
    </form>
</div>
<a href="/pizzas"> Back to all pizzas</a>
    
@endsection