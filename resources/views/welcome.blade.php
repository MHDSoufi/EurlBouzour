<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@200&display=swap" rel="stylesheet">


      
    </head>
    <body>

        {{storage('images/Promotion les rosier/1593547733_EWIh2.png')}}
       <div id = "root"></div>
       <script src="{{asset('js/app.js')}}"></script>
       <script src="https://unpkg.com/react/umd/react.production.min.js" crossorigin></script>

       <script
         src="https://unpkg.com/react-dom/umd/react-dom.production.min.js"
       crossorigin></script>

       <script
        src="https://unpkg.com/react-bootstrap@next/dist/react-bootstrap.min.js"
        crossorigin></script>

<script>var Alert = ReactBootstrap.Alert;
    console.log(Alert);
</script>
    </body>
</html>
