<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>EI Label Generator</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>

            html, body {
                background-color: #333;
                color: white;
                font-family: 'Helvetica', sans-serif;
                font-size: 18px;
                height: 100vh;
                margin: 0;
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .title {
                font-size: 84px;
            }

            .content {
              background: white;
              width: 50vw;
              height: 200px;
              box-shadow: 0 .5mm 2mm rgba(0,0,0,.3);
              display: flex;
              justify-content: center;
              align-items: center;
            }

        </style>
    </head>
    <body>
      <div class="content">
        <a href="{{ route('labels', ['start' => 1, 'length' => 42]) }}">Generate Labels</a>
    </body>
</html>
