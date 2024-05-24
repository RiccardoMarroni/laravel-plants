@extends('layouts.app')

@section('title', 'Home')

@section('content')
<main>
    <div id="hero">
        <img src="https://www.levissima.it/sites/site.prod1.levissima.it/files/inline-images/1000x667.jpg" alt="bosco">
    </div>
</main>

@endsection



























<!-- <h1>Plants</h1>
    <div class="d-flex flex-wrap ms-3 me-3 container">
        @foreach ($plants as $plant)
        <div class="card" style="width: 18rem;">
            <img src="{{ $plant-> img }}" class="card-img-top" alt="{{ $plant-> common_name }}">
            <div class="card-body">
            <h5 class="card-title">{{ $plant-> common_name }} ({{ $plant-> scientific_name }})</h5>
            <p class="card-text">{{ $plant-> family }}</p>
            <a href="#" class="btn btn-primary">Details</a>
            </div>
        </div>
        @endforeach
    </div> -->
