@props(['name'])

<label for="{{$name}}"{{$attributes->merge(['class' =>"block mb-2 text-sm font-medium text-gray-900" ])}} >{{$slot}}</label>
