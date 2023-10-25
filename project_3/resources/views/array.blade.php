<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Użytkownik</title>
</head>
<body>

    <h3>Użytkownik</h3>
    {{--
    {{print_r($user)}}<br>
    {{print_r($user['hobby'])}}<br>
    {{print_r($user['hobby'][0])}}<br>
    --}}

    Imię i nazwisko: {{$user['firstName']}} {{$user['lastName']}} <br>
    Miasto: {{$user['city']}} <br>
    hobby:
    <ul>
        @foreach($user['hobby'] as $hobby)
            <li>{{$hobby}}</li>
        @endforeach
    </ul>
    
</body>
</html>