<html>
    <head>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>我要赚点钱</title>
        <link rel="shortcut icon" href="images/bitbug_favicon.ico" />
        <style>
            body {
                margin:0 auto;
            }
        </style>
    </head>
    <body>
        <div id="app">
        <router-view></router-view>
        </div>
    </body>
    <script src="{{ mix('/js/app.js') }}"></script>
    <link rel="stylesheet" href="css/main.css">
</html>