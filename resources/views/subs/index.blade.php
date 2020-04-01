    @extends('layouts.layout')

    @section('content')
    <div class="wrapper sub-index">
    <h1>Sub Orders </h1>
    @foreach ($subs as $sub)
        <div class="sub-item">
            <img src="/img/sub.png" alt="minisub">
           <h4><a href="subs/{{ $sub->id }}"> {{ $sub->name }}</a></h4>
        
        </div>
    @endforeach

    </div>
            

    @endsection
