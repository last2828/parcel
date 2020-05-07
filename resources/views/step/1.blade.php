@extends('layouts.default')

@section('content')
<form method="POST" action="{{route('send', 1)}}">
  <div class="step">
    <div class="container">
      @include('step.steps', ['current' => 1])
      
    
      <h2>Firma</h2>
      <div class="group">
        <h3>Rechnungsadresse</h3>

        @include('step.input', ['title' => 'Firma *', 'required' => false, 'name' => 'firma', 'type' => 'text'])


        @include('step.input', ['title' => 'Straße, Nr. *', 'required' => false, 'name' => 'str', 'type' => 'text'])

        @include('step.input', ['title' => 'PLZ, Ort *', 'required' => false, 'name' => 'plz', 'type' => 'text'])

        @include('step.input', ['title' => 'Land *', 'required' => false, 'name' => 'land', 'type' => 'text'])

        @include('step.input', ['title' => 'Geschäftsführer *', 'required' => false, 'name' => 'ges', 'type' => 'text'])
        @include('step.input', ['title' => 'Ust.-ID Nr. *', 'required' => false, 'name' => 'id', 'type' => 'text'])
        
        
      </div>
      <div class="group">
        <h3>Kontakt</h3>
        @include('step.input', ['title' => 'Telefon *', 'required' => false, 'name' => 'tel', 'type' => 'text'])

        @include('step.input', ['title' => 'Mobil', 'required' => false, 'name' => 'mob', 'type' => 'text'])

        @include('step.input', ['title' => 'E-Mail *', 'required' => false, 'name' => 'email', 'type' => 'email'])

        @include('step.input', ['title' => 'Website', 'required' => false, 'name' => 'website', 'type' => 'text'])
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
