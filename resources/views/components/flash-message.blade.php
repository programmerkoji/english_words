@props(['status' => 'info'])

@php
if($status === 'info'){ $bgColor = 'bg-blue-300';}
if($status === 'error'){ $bgColor = 'bg-red-500';}
@endphp

@if(session('message'))
<p class="{{ $bgColor }} w-1/2 mx-auto p-2 text-white text-center">{{ session('message' )}}</p>
@endif
