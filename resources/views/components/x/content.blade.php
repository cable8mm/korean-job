@props(['content', 'format'])

@switch($format)
@case(App\Enums\TextareaType::text->name)
{!! nl2br($content) !!}
@break

@case(App\Enums\TextareaType::markdown->name)
{!! Str::of($content)->markdown() !!}
@break

@case(App\Enums\TextareaType::html->name)
{!! $content !!}
@break

@default
{{ nl2br($content) }}
@endswitch