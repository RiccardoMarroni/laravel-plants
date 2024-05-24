@extends('layouts.app')

@section('title', 'Home')

@section('content')
<main class="mainHome">
    <div class="container">
    <h1>Plants</h1>
    <h2>Fagaceae</h2>
    <div class="d-flex flex-wrap ms-3 me-3 gap-3">
        @foreach ($plants as $plant)
            @if($plant->family == 'Fagaceae')
                <div class="card" style="width: 18rem;">
                    <img src="{{ $plant->img }}" class="card-img-top" alt="{{ $plant->common_name }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $plant->common_name }} ({{ $plant->scientific_name }})</h5>
                        <p class="card-text">{{ $plant->family }}</p>
                        <a href="#" class="btn btn-primary">Details</a>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
    <h2>Betulaceae</h2>
    <div class="d-flex flex-wrap ms-3 me-3 gap-3 ">
        @foreach ($plants as $plant)
            @if($plant->family == 'Betulaceae')
                <div class="card" style="width: 18rem;">
                    <img src="{{ $plant->img }}" class="card-img-top" alt="{{ $plant->common_name }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $plant->common_name }} ({{ $plant->scientific_name }})</h5>
                        <p class="card-text">{{ $plant->family }}</p>
                        <a href="#" class="btn btn-primary">Details</a>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
    
    <h2>Rosaceae</h2>
    <div class="d-flex flex-wrap ms-3 me-3 gap-3 ">
        @foreach ($plants as $plant)
            @if($plant->family == 'Rosaceae')
                <div class="card" style="width: 18rem;">
                    <img src="{{ $plant->img }}" class="card-img-top" alt="{{ $plant->common_name }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $plant->common_name }} ({{ $plant->scientific_name }})</h5>
                        <p class="card-text">{{ $plant->family }}</p>
                        <a href="#" class="btn btn-primary">Details</a>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
    <h2>Cupressaceae</h2>
    <div class="d-flex flex-wrap ms-3 me-3 gap-3 ">
        @foreach ($plants as $plant)
            @if($plant->family == 'Cupressaceae')
                <div class="card" style="width: 18rem;">
                    <img src="{{ $plant->img }}" class="card-img-top" alt="{{ $plant->common_name }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $plant->common_name }} ({{ $plant->scientific_name }})</h5>
                        <p class="card-text">{{ $plant->family }}</p>
                        <a href="#" class="btn btn-primary">Details</a>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
    <h2>Aquifoliaceae</h2>
    <div class="d-flex flex-wrap ms-3 me-3 gap-3">
        @foreach ($plants as $plant)
            @if($plant->family == 'Aquifoliaceae')
                <div class="card" style="width: 18rem;">
                    <img src="{{ $plant->img }}" class="card-img-top" alt="{{ $plant->common_name }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $plant->common_name }} ({{ $plant->scientific_name }})</h5>
                        <p class="card-text">{{ $plant->family }}</p>
                        <a href="#" class="btn btn-primary">Details</a>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
    


    {{-- <ul>
        <li>{{ $plant->class }}</li>
        <li>{{ $plant->species }}</li>
        <li>{{ $plant->width }}</li>
        <li>{{ $plant->height }}</li>
        <li>{{ $plant->habitat }}</li>
        <li>{{ $plant->leaf_type }}</li>
        <li>{{ $plant->leaf_color }}</li>
        <li>{{ $plant->flower_color }}</li>
        <li>{{ $plant->date_spotted }}</li>
        <li>{{ $plant->place_spotted }}</li>
        <li>{{ $plant->notes }}</li>
    </ul> --}}
    </div>
</main>

@endsection