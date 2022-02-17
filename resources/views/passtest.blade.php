<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pass Test</title>
</head>
<body>
<h2>passtest.blade.php</h2>
<div id="app">
<passtest :data_questions='{!! json_encode($data_questions) !!}'
          :data_title='{!! json_encode($data_title) !!}'
          :id='{!! json_encode($id) !!}'
>

</passtest>
</div>

<script src="{{ asset('js/app.js') }}"></script>
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
</body>
</html>
