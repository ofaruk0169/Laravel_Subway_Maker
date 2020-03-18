    @extends('layouts.layout')

    @section('content')
    <div class="flex-center position-ref full-height">
        

        <div class="content">
            <div class="title m-b-md">
                Subs List
            </div>
            


            <!-- @for($i = 0; $i < 5; $i++)
                <p>The value of i is {{ $i }}</p>
            @endfor -->

            <!-- @for($i = 0; $i < count($subs); $i++)
                <p>{{ $subs[$i]['type'] }}</p>
            @endfor -->

            @foreach ($subs as $sub)
                <div>
                    {{ $loop->index }} {{ $sub['type'] }} - {{ $sub['bread']}}
                    @if($loop->first)
                        <span>first in the loop</span>
                    @endif
                    @if($loop->last)
                        <span>Last in the loop </span>
                    @endif
                </div>
            @endforeach

        </div>
    </div>
    @endsection
