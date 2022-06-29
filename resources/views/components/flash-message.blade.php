@props(['status' => 'info'])

@php
if($status === 'info'){ $bgColor = 'bg-blue-300';}
if($status === 'error'){ $bgColor = 'bg-red-500';}
@endphp

@if(session('message'))
<p class="{{ $bgColor }} mx-auto py-2 px-8 text-white">{{ session('message' )}}</p>
@endif
