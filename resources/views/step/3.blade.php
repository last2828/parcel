@extends('layouts.default')

@section('content')

<?php 
$arr1 = [
  'Kein LETTER, nur PARCEL',
  'Nach Gewichtsstaffel (LETTER Eco+Basic)',
  'Nach Kilotarif (LETTER Plus)',
  'Zalando-Workflow'
]
?>
<form action="">
  <div class="step">
    <div class="container">
      @include('step.components.steps', ['current' => 3])
    
      <h2>Produktauswahl und Abrechnung</h2>
      <div class="group">
        <h3>Details zur Produktauswahl und Abrechnung</h3>

        @include('step.components.input', ['title' => 'Firma *', 'required' => true, 'name' => 'firma', 'type' => 'text'])

      </div>

      <div class="grey">
        <div class="flex">
          <div class="checkbox">
            <input type="checkbox" name="" id="checkbox" required>
            <label for="checkbox"></label>
          </div>
          <label class="label" for="checkbox">
            Ich stimme zu, dass meine Angaben und Daten für eine Registrierung bei PARCEL.ONE elektronisch erhoben und gespeichert werden.<br>Hinweis: Sie können Ihre Einwilligung jederzeit für die Zukunft per E-Mail an info@parcel.one widerrufen.
          </label>
        </div>
      </div>
      <button class="btn btn-submit">
        Absenden
      </button>
    </div>
  </div>
</form>
@endsection
