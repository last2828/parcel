@extends('layouts.default')

@section('content')
    <div class="step">
        <div class="container">
            <h2>Admin Panel</h2>
        <form method="POST" action="{{route('admin-update', $fields['id'])}}">
            @method('PUT')
            @csrf
            <div class="group">
                <h3>Nummernkreise</h3>
                <div class="field">
                    <label for="number_ranges">Nächste Kundennummer</label>
                    <input type="text" id="number_ranges" name="number_ranges" value="{{(isset($fields['number_ranges']) ? $fields['number_ranges'] : '')}}">
                </div>
                <button class="btn btn-submit">
                    Speichern
                </button>
            </div>

            <div class="group">
                <h3>E-Mail Empfänger</h3>
                <div class="field">
                    <label for="number_ranges">Weitere Empfänger für E-Mail-Kopie</label>
                    <input type="text" id="number_ranges" name="number_ranges" value="{{(isset($fields['number_ranges']) ? $fields['number_ranges'] : '')}}">
                </div>
                <button class="btn btn-submit">
                    Speichern
                </button>
            </div>

            <div class="group">
                <h3>Kundenbenachrichtigung</h3>
                <div class="flex">
                    <label class="label" for="checkbox">
                        E-Mail an Absender schicken
                    </label>
                    <div class="checkbox">
                        <input type="checkbox" name="customer_notification" id="checkbox" {{($fields['customer_notification']) ? 'checked' : ''}}>
                        <label for="checkbox"></label>
                    </div>
                </div>
                <button class="btn btn-submit">
                    Speichern
                </button>
            </div>
        </form>
@endsection
