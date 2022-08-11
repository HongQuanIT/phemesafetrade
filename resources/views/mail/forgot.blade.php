<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <p><label>Hello {{ $fullname }},</label></p></br>
    <p>
        <bold>Your information login changed</bold>
    </p>
    </br>
    Your login information:
    </br>
    <p>Login: {{ $email }}</p>
    </br>
    <p>Password: {{ $password }}</p>
    </br>
    <p>You can login here: <a href="{{ URL::to('/login') }}">{{ URL::to('/login') }}</a> </p></br>
    </br>
    Contact us immediately if you did not authorize this registration.
    </br>
    Thank you.

</body>

</html>
