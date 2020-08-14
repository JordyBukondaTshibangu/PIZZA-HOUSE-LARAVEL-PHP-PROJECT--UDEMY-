@extends('layouts.layout')

@section('content')
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="logo">
                    <img src="/img/logo.jpg" alt="img">
                </div>
                <div class="title m-b-md">
                    Romance Pizza
                </div>
                <h4> {{ session('message')}} </h4>
            </div>
        </div>

    @endsection
