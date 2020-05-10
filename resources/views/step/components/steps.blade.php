<?php
$steps = [
  [
    'id' => 1,
    'name' => 'Firma'
  ],
  [
    'id' => 2,
    'name' => 'Versandgut'
  ],
  [
    'id' => 3,
    'name' => 'Produkt'
  ],
  [
    'id' => 4,
    'name' => 'Technische Anbindung'
  ],
  [
    'id' => 5,
    'name' => 'Zahlung'
  ],
  [
    'id' => 6,
    'name' => 'Absenden'
  ],
  [
    'id' => 7,
    'name' => 'Go-Live'
  ]
]
?>


<div class="steps">
  @foreach ($steps as $step)
    <div class="block @if($current == $step['id']) current @endif">
      <div class="circle @if($current == $step['id']) current @endif">
        @if ($current <= $step['id'])
            {{$step['id']}}
        @else
          <img src="{{asset('img/icons/check.svg')}}" alt="">
        @endif
      </div>
      <p>{{$step['name']}}</p>
    </div>
  @endforeach
</div>