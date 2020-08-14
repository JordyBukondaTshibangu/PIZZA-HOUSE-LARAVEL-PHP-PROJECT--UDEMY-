@extends('layouts.app')

@section('content')

<div class="wrapper pizza-create">
    <h1> Create a new pizza</h1>
    <form action={{route('pizzas.store')}} method="POST">
        @csrf
        <div class="form-row col-md-8">
            <div class="form-group col-md-4">
                <input type="text" class="form-control" name="name" id="name" placeholder="name">
            </div>
            <div class="form-group col-md-4">
                <select name="type" id="type" class="custom-select">
                    <option value="Marguerita"> Choose Type</option>
                    <option value="Marguerita"> Marguerita </option>
                    <option value="Huawaien"> Huawaien </option>
                    <option value="Mexican"> Mexican </option>
                    <option value="Bolognese"> Bolognese </option>
                </select>
            </div>
            <div class="form-group col-md-4">
                <select name="base" id="type" class="custom-select">
                    <option value="cheesy crust"> Choose Base</option>
                    <option value="cheesy crust"> cheesy crust </option>
                    <option value="garlic crust"> garlic crust </option>
                    <option value="thin and crispy"> thin and crispy </option>
                    <option value="thick"> thick </option>
                </select>
            </div>
            <div class="form-group col-md-6">
                <fieldset>
                    <h6>Add topppings</h6>
                    <input type="checkbox" name="toppings[]" value="mushroom"> Mushroom  <br>
                    <input type="checkbox" name="toppings[]" value="garlic"> Garlic <br>
                    <input type="checkbox" name="toppings[]" value="peppers"> Peppers <br>
                    <input type="checkbox" name="toppings[]" value="olives"> Olives <br>
                </fieldset>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10">
                <input type="submit" value="Submit" name="submit" class="btn btn-primary">
            </div>
          </div>

    </form>
</div>
    
@endsection