@extends('layouts.app')

@section('title', 'Home')

@section('content')
<main>
    <ul>
        @foreach ( $trains as $train )
        <li>
            {{ $train->azienda }}
        </li>
        <li>
            {{ $train->stazione_di_partenza }}
        </li>
        @endforeach
    </ul>
</main>
@endsection
