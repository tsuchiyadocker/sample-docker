
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
 
<head>
    <meta charset="UTF-8">
    <title>docker test</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
 
<body>
 
    <div>
        <gafam-component id="app"></gafam-component>
    </div>
 
    <script src="{{ mix('js/app.js') }}"></script>
</body>
 
</html>