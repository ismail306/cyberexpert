@props(['messages'])

@if ($messages)
<p {{$attributes}}>
    @foreach ((array) $messages as $message)
    {{ $message }}
    <br>
    @endforeach
</p>
@endif