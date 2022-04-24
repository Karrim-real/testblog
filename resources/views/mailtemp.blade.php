
@component('mail::message')
<h2 style="text-align: center">Contact Form From Testblog</h2>

<div class="col-md-4">
    <h3 style="text-align: center">Welcome {{ $messageBody['name'] }}</h3>
    <p>
        Sender Name: {{ $messageBody['name'] }} <br>
        Sender email: {{ $messageBody['email'] }}<br>
        Sender subjet: {{ $messageBody['subject'] }}<br>
        Message: {{ $messageBody['message'] }}<br>
    </p>
</div>

@component('mail::button',['url'=> 'www.google.com/'.bcrypt(rand(1000, 9999))])
Verify Account
@endcomponent

@endcomponent
