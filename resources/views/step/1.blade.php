@extends('layouts.default')

@section('content')
<form method="POST" action="{{route('send', 1)}}">
  @csrf
  <div class="step">
    <div class="container">
      @include('step.components.steps', ['current' => 1])
      
    
      <h2>Firma</h2>
      <div class="group">
        <h3>Rechnungsadresse</h3>

        @include('step.components.input', ['title' => 'Firma *', 'required' => true, 'name' => 'firma', 'type' => 'text'])

        @include('step.components.input', ['title' => 'Straße, Nr. *', 'required' => true, 'name' => 'str', 'type' => 'text'])

        @include('step.components.input', ['title' => 'PLZ, Ort *', 'required' => true, 'name' => 'plz', 'type' => 'text'])

        @include('step.components.input', ['title' => 'Land *', 'required' => true, 'name' => 'land', 'type' => 'text'])

        @include('step.components.input', ['title' => 'Geschäftsführer *', 'required' => true, 'name' => 'ges', 'type' => 'text'])

        @include('step.components.input', ['title' => 'Ust.-ID Nr. *', 'required' => true, 'name' => 'ust_id', 'type' => 'text'])

        
      </div>
      <div class="group">
        <h3>Kontakt</h3>
        @include('step.components.input', ['title' => 'Telefon *', 'required' => true, 'name' => 'tel', 'type' => 'text'])

        @include('step.components.input', ['title' => 'Mobil', 'required' => false, 'name' => 'mob', 'type' => 'text'])

        @include('step.components.input', ['title' => 'E-Mail *', 'required' => true, 'name' => 'email', 'type' => 'email'])

        @include('step.components.input', ['title' => 'Website', 'required' => true, 'name' => 'website', 'type' => 'text'])
      </div>
      

      <div class="grey">
        <div class="flex">
          <div class="checkbox">
            <input type="checkbox" name="checkbox" id="checkbox" >
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
