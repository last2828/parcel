@extends('layouts.default')

@section('content')
<form method="POST" action="{{route('send', $step['id'])}}">
  @csrf

  <div class="step">
    <div class="container">
      @include('step.components.steps', ['current' => $step['id']])
      
    
      <h2>{{$step['name']}}</h2>
      @foreach ($step['group'] as $group)
      <div class="group">
        <h3>{{$group['name']}}</h3>
        @foreach ($group['field'] as $field)
          @include('step.components.field', ['title' => $field['name'], 'required' => $field['required'], 'name' => $field['id'], 'type' => $field['type'], 'options' => $field['option']])
        @endforeach

      </div>
      @endforeach
      
      @if ($step['id'] == 1)
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
      @elseif($step['id'] == 6)
        <div class="grey">
          <div class="flex">
            <div class="checkbox">
              <input type="checkbox" name="checkbox" id="checkbox" >
              <label for="checkbox"></label>
            </div>
            <label class="label" for="checkbox">
              Hiermit beauftrage ich die PARCEL.ONE GmbH für die Abwicklung des Vertrages. Ich stimme den Konditionen und den Richtlinien des Angebotes zu. Ich habe die aktuell gültigen <b>AGB</b> der PARCEL.ONE GmbH gelesen, verstanden und stimme diesen zu.
            </label>
          </div>
        </div>
      @endif
      <button class="btn btn-submit">
        Absenden
      </button>
    </div>
  </div>
</form>
@endsection
