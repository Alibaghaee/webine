@extends('main.main')
@section('content')

    <div class="card">
        <div class="card-header">
            {{$product->status}}
        </div>
        <div class="card-body">
            <h5 class="card-title">{{$product->title}}</h5>
            <p class="card-text">{!! $product->description !!}</p>
        </div>
    </div>

@endsection
