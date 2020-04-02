@extends('layouts.app')

@section('content')
<div class="wrapper sub-details">
    <h1>Order for {{ $sub->name }}</h1>
    <p class="type">Type - {{ $sub->type }}</p>
    <p class="bread">Bread - {{ $sub->bread }}</p>
    <p class="salad"> Extra Salad: </p>

    <ul>
        @foreach($sub->salad as $salad)
            <li> {{ $salad }}  </li>
        @endforeach
    </ul>
    <form action="{{ route('subs.destroy', $sub->id) }}" method="POST">
        @csrf 
        @method('DELETE')
        <button>Complete Order</button>
    </form>
</div>
<a href="/subs" class=back><- back to all subs</a>
@endsection
