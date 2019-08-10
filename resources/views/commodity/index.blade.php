@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @foreach ($commodities as $commodity)
               <p>名稱：{{ $commodity->name }}</p>
               <p>售價：{{ $commodity->price }}</p>
            @endforeach
        </div>
    </div>
</div>

@endsection
