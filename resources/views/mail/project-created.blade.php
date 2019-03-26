@component('mail::message')
# New Post: {{ $post->body }}

The body of your message.

@component('mail::button', ['url' => url("/posts/{$post->id}")])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
