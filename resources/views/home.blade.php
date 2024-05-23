@extends('layouts.app')

@section('title', 'Home')

@section('content')
<main>
        @foreach ( $trains as $train )
            <h3>
                {{ $train->azienda }}
            </h3>
            <p>
                il treno numero
                <strong>
                    {{ $train->codice_treno }}
                </strong>. 
            <br> 
                proveniente dalla stazione: 
                <strong>
                    {{ $train->stazione_di_partenza }} 
                </strong>
            <br>
                partito alle ore: 
                <strong>
                    {{ $train->orario_di_partenza }} 
                </strong>
            <br>
                destinazione: 
                <strong> 
                    {{ $train->stazione_di_arrivo }}  
                </strong>
            <br>
              Arrivo previsto alle ore: 
              <strong>
                  {{ $train->orario_di_arrivo }}
              </strong>
              è in arrivo al binario: 01
            </p>
        @endforeach
</main>
@endsection
