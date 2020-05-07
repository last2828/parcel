<div class="field">
  <label for="{{$name}}">{{$title}}</label>
  <select name="{{$name}}" id="{{$name}}">
    @foreach ($collection as $item)
        
    @endforeach
    <option value=""></option>
  </select>
  <input type="{{$type}}" id="{{$name}}" @if ($required) required @endif>
</div>