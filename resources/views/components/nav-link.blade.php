@props(['active' => false])

<a {{$attributes}}
class="{{$active ? ' bg-slate-800' : 'bg-slate-700'}} px-3 py-2 rounded-md hover:bg-slate-900"
>{{$slot}}</a>
