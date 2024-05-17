<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }}</title>
    <script src="https://kit.fontawesome.com/76a9090d04.js" crossorigin="anonymous"></script>
    
    {{-- /*****BOOTSTRAP y CSS*****/ --}}
    

    @vite(['resources/css/app.css'])
    {{ $style ?? '' }}

</head>
<body>
    <x-nav/>
 
    {{ $slot }}








    
    
    {{ $script ?? '' }}
    
    @vite(['resources/js/app.js'])

    <x-footer/>
</body>
</html>