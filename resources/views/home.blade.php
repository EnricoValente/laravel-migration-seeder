@extends('layouts.main')

@section('page-title')
Homepage
@endsection


@section('main-content')
<div class="container">
    <h1>
        Trains
    </h1>

    <div class="row">
        @foreach ($trains as $train)
        
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <h3>
                            {{$train->company}}
                        </h3>
                        <div>
                            {{$train->departure_station}}
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection