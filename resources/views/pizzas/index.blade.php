
@extends('layouts.app')

@section('content')

        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    My Pizzas
                </div>

                <div class="card-deck">

                    @foreach ($pizzas as $pizza)
                        <div class="card text-white bg-info mb-3">
                            <div class="card-header">{{ $pizza->type }}  </div>
                            <div class="card-body">
                              <h5 class="card-title">{{ $pizza->name}} </h5>
                              <a href={{route('pizzas.show', $pizza->id)}}> View more</a>
                            </div>
                          </div>
                    @endforeach

                </div>
            </div>
        </div>

        @endsection

