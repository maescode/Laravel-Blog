@props(['active'=>false])
@php
    $classes = "block px-3 text-left text-xs leading-6  hover:bg-blue-500 hover:text-white focus:bg-blue-500 focus:text-white";
    if($active===true) $classes = "bg-blue-500 text-white ".$classes
@endphp
<a {{$attributes(["class"=>$classes])}}>{{$slot}}</a>
