@extends('layouts.layout')

@section('content')
<div class="wrapper create-sub">
    <h1>Create a New Sub</h1>
    <form action="/subs" method="POST">
        @csrf
        <label for="name">Your Name:</label>
        <input type="text" id="name" name="name">
        <label for="type">Choose your sub type: </label>
        <select name="type" id="type">
            <option value="BMT">BMT</option>
            <option value="meatball">Meatball Marinara</option>
            <option value="vegetarian">Vegetarian</option>
            <option value="chicken">Chicken</option>
        </select>
    <!-- bread -->
        <select name="bread" id="bread">
            <option value="herbs and cheese">Herbs and Cheese</option>
            <option value="hearty italian">Hearty Italian</option>
            <option value="flat bread">Flat Bread</option>
            <option value="Paprika">Paprika</option>
        </select>
        <fieldset>
            <label>Salad: </label>
            <input type="checkbox" name="salad[]" value="cucumber">Cucumber <br />
            <input type="checkbox" name="salad[]" value="peppers">Peppers <br />
            <input type="checkbox" name="salad[]" value="onions">Onions <br />
            <input type="checkbox" name="salad[]" value="lettuce">Lettuce <br />
        </fieldset>
        <input type="submit" value="Order the Sub">
    </form>
</div>
@endsection
