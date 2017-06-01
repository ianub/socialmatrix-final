@component('mail::message')
# Welcome to Social Matrix

You have **signed in**

@component('mail::button', ['url' => 'http://localhost:8000/home'])
Go to our home page
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent