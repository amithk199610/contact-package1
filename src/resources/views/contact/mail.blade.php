<x-mail::message>
# Introduction
Hi {{$name}},
The body of your message.

From : {{$country}}

<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
