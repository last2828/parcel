@extends('layouts.default')

@section('content')
<form method="POST" action="{{route('send', 2)}}">
  @csrf
  <div class="step">
    <div class="container">
      @include('step.steps', ['current' => 2])
    
      <h2>Versandgut</h2>
      <div class="group">
        <h3>Details zur Ware</h3>

        @include('step.input', ['title' => 'Versandgut *', 'required' => true, 'name' => 'vers', 'type' => 'text'])

        @include('step.input', ['title' => 'Ø Warenwert *', 'required' => true, 'name' => 'waren', 'type' => 'number'])
        
      </div>
      <div class="group">
        <h3>Geplante Sendungsmengen im Jahr</h3>
        @include('step.input', ['title' => 'LETTER (national) in Stück', 'required' => false, 'name' => 'genplante-1', 'type' => 'nubmer'])

        @include('step.input', ['title' => 'LETTER (international) in Stück', 'required' => false, 'name' => 'genplante-2', 'type' => 'nubmer'])

        @include('step.input', ['title' => 'PARCEL (international) in Stück', 'required' => false, 'name' => 'genplante-3', 'type' => 'nubmer'])
      </div>
      
      <button class="btn btn-submit">
        Absenden
      </button>
    </div>
  </div>
</form>
@endsection
