@props(['format' => App\Enums\TextareaType::text->name])

@switch($format)
@case(App\Enums\TextareaType::text->name)
{!! nl2br($slot) !!}
@break

@case(App\Enums\TextareaType::markdown->name)
{!! Str::of($slot)->markdown() !!}
@break

@case(App\Enums\TextareaType::html->name)
{!! $slot !!}
@break

@default
{{ nl2br($slot) }}
@endswitch
