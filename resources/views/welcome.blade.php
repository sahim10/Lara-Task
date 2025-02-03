<!DOCTYPE html>
<html>
<head>
    <title>CMS Project</title>
</head>
<body>
<h1>Hello, this is a test!</h1>
    <div id="app">
        <tree-view :pages="{{ json_encode($pages) }}"></tree-view>
    </div>
    <script src="{{ mix('js/app.js') }}"></script>

    @vite(['resources/js/app.js'])
    
</body>
</html>