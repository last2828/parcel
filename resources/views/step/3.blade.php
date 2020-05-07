@extends('layouts.default')

@section('content')
<form action="">
  <div class="step">
    <div class="container">
      @include('step.steps', ['current' => 3])
    
      <h2>Produktauswahl und Abrechnung</h2>
      <div class="group">
        <h3>Details zur Produktauswahl und Abrechnung</h3>

        @include('step.input', ['title' => 'Firma *', 'required' => true, 'name' => 'firma', 'type' => 'text'])

        @include('step.input', ['title' => 'Straße, Nr. *', 'required' => true, 'name' => 'str', 'type' => 'text'])

        @include('step.input', ['title' => 'PLZ, Ort *', 'required' => true, 'name' => 'plz', 'type' => 'text'])

        @include('step.input', ['title' => 'Land *', 'required' => true, 'name' => 'land', 'type' => 'text'])

        @include('step.input', ['title' => 'Geschäftsführer *', 'required' => true, 'name' => 'ges', 'type' => 'text'])
        
        @include('step.input', ['title' => 'Ust.-ID Nr. *', 'required' => true, 'name' => 'id', 'type' => 'text'])
        
        
      </div>
      <div class="group">
        <h3>Kontakt</h3>
        @include('step.input', ['title' => 'Telefon *', 'required' => true, 'name' => 'tel', 'type' => 'text'])

        @include('step.input', ['title' => 'Mobil', 'required' => false, 'name' => 'mob', 'type' => 'text'])

        @include('step.input', ['title' => 'E-Mail *', 'required' => true, 'name' => 'email', 'type' => 'email'])

        @include('step.input', ['title' => 'Website', 'required' => true, 'name' => 'website', 'type' => 'text'])
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
