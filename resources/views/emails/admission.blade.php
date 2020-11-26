@component('mail::message')
# Introduction

Thanks for choosing Us.
We will contact to you soon.

@component('mail::button', ['url' => 'http://nescbd.com'])
our website
@endcomponent
<a href="http://nescbd.com/pdfform" download="true" >Download form</a>
Thanks,<br>
{{ config('app.name') }}
@endcomponent
