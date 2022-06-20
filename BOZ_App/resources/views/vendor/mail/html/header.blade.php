<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'BOZ')
{{-- <img src="{{asset('img/Bureau_Onbeperkte_Zaken_Logo.png')}}" class="logo" alt="Laravel Logo"> --}}
<img src="https://bureauonbeperktezaken.nl/wp-content/uploads/2021/10/Logo-BOZ.jpg" width="100" class="logo" alt="Bureau Onbeperkte Zaken">

@else
{{ $slot }}
@endif
</a>
</td>
</tr>
