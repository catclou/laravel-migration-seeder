@extends('layouts.layout')

@section('content') 

<div class="row row-cols-3 g-3">

    @forelse ($trains as $key => $train)
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{{$train->azienda}}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{$train->stazione_di_partenza}}</h6>
                <h6 class="card-subtitle mb-2 text-muted">{{$train->stazione_di_arrivo}}</h6>
                <h6 class="card-subtitle mb-2 text-muted">{{$train->orario_di_partenza}}</h6>
                <h6 class="card-subtitle mb-2 text-muted">{{$train->orario_di_arrivo}}</h6>
                <h6 class="card-subtitle mb-2 text-muted">{{$train->stazione_di_arrivo}}</h6>
                <a href="" class="card-link">Più informazioni</a>
            </div>
        </div>
    @empty
        <h3>Non ci sono treni da visualizzare</h3>
    @endforelse

</div>


@endsection