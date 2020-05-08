
@if ($type == 'text' || $type == 'email' || $type == 'number' || $type == 'date')
  <div class="field">
    <label for="{{$name}}">{{$title}}</label>
    <input type="{{$type}}" id="{{$name}}" name="field-{{$name}}" @if ($required) required @endif>
  </div>   
@elseif($type == 'select')
  <div class="field" id="field-{{$name}}">
    <label for="{{$name}}">{{$title}}</label>
    <select name="field-{{$name}}" id="{{$name}}" @if ($required) required @endif>
      <option value=""></option>
      @foreach ($options as $option)
        <option value="{{$option['id']}}">{{$option['name']}}</option>  
      @endforeach
    </select>
  </div>   
@endif
