<head>

    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
            integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
            crossorigin="anonymous" referrerpolicy="no-referrer">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/x-icon" href="https://boolean.careers/favicon/favicon.ico">
        {{-- <link rel="stylesheet" href="./css/style.css"><!--css--> --}}
        <title>homepage.blade.php</title>
    </head>

<body>


    <nav>
        <h2>Hello World</h2>
        @if ($eta > 18)
            <h3>ciao {{ $nome }} {{ $cognome }}</h3>
        @else
            <h3>mi dispiace ma non entri</h3>
        @endif





    </nav>

            {{-- <ul>
            @foreach ($lista as $sel)
                <li>{{ $sel }}</li>
            @endforeach
        </ul> --}}
    {{-- <script src="./js/main.js"></script> --}}
</body>

</html>
