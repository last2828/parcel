<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="{{asset('img/logo.png')}}" class="logo" alt="Laravel Logo" style="width: 200px; height: 50px">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
