<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="{{ mix('css/shop.css') }}" rel="stylesheet">

    <title>{{ config('app.name') }}</title>
</head>
<body>
<div id="app"></div>
</body>
<script src="{{ mix('js/shop.js') }}"></script>
</html>
