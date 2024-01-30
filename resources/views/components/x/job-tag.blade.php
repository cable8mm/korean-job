@props([
    'value',
])

@php
$colors = [
    App\Enums\JobType::full_time->name => 'text-blue-700 bg-blue-200',
    App\Enums\JobType::part_time->name => 'text-red-700 bg-red-200',
    App\Enums\JobType::contract->name => 'text-orange-700 bg-orange-200',
    App\Enums\JobType::temporary->name => 'text-green-700 bg-green-200',
]
@endphp

<x-x.tag :value="__($value)" class="{{ $colors[$value] }}" />
