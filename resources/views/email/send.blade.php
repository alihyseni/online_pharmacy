<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
</head>
<body>
<h2>Pharmacy Contact Form</h2>
<h4>Subject: {{$emailmessage['subject']}}</h4>
<p>Name: {{$emailmessage['fullname']}}</p>
<p>Email: {{$emailmessage['email']}}</p>
<p>Message: {{$emailmessage['emailmessage']}}</p>
</body>
</html>