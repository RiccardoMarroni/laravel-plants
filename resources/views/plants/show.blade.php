@extends('layouts.app')

@section('title', 'Home')

@section('content')
<main style=" background-image: url({{ $plantDetail-> img }}); background-repeat: no-repeat; background-size: cover;">
    <h1>Plants</h1>
    <div class="container plantShow">
   
       <p class="details">
        {{ $plantDetail-> common_name }}
       </p>
       <p class="details">
       {{ $plantDetail-> scientific_name }}
       </p>
       <p class="details">
       {{ $plantDetail-> notes }}
       </p>
        
       </div>




    {{-- <ul>
        <li>{{ $plant-> class }}</li>
        <li>{{ $plant-> species }}</li>
        <li>{{ $plant-> width }}</li>
        <li>{{ $plant-> height }}</li>
        <li>{{ $plant-> habitat }}</li>
        <li>{{ $plant-> leaf_type }}</li>
        <li>{{ $plant-> leaf_color }}</li>
        <li>{{ $plant-> flower_color }}</li>
        <li>{{ $plant-> date_spotted }}</li>
        <li>{{ $plant-> place_spotted }}</li>
        <li>{{ $plant-> notes }}</li>
    </ul> --}}

</main>

@endsection