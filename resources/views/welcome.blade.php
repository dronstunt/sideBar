<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>


    <link href="{{ asset('css/app.css')}}" rel="stylesheet">
    <link href="{{ asset('css/sidebar.css')}}" rel="stylesheet">
    <link href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css')}}" rel="stylesheet">
    <script src="{{ asset('js/app.js')}}"></script>

</head>

<body>
    <div class="container-fluid">
    <div class="row d-flex d-md-block flex-nowrap wrapper">
    <!--se cambia el tamaño del cuadro que aparece al aplastar las tres lineas -->
        <div class="col-md-2 float-left col-6 pl-0 pr-0 collapse height " id="sidebar">
            <div class="list-group border-0 card text-center text-md-left">
                <a href="#menu1" class="list-group-item list-group-item-success d-inline-block collapsed" data-toggle="collapse" data-parent="#sidebar"
                    aria-expanded="false">
                    <span class="d-md-inline">sub indice verde :v <i class="fa fa-arrow-down"></i></span>
                </a>
                <div class="collapse" id="menu1">
                    <a href="#menu1sub1" class="list-group-item" data-toggle="collapse" aria-expanded="false">Demos </a>
                    <a href="#menu1sub1" class="list-group-item" data-toggle="collapse" aria-expanded="false">Informacion </a>
                </div>
                <a href="#menu2" class="list-group-item list-group-item-danger d-inline-block collapsed" data-toggle="collapse" data-parent="#sidebar"
                    aria-expanded="false">
                    <span class="d-md-inline">sub indice rojo :v <i class="fa fa-arrow-down"></i></span>
                </a>
                <div class="collapse" id="menu2">
                    <a href="#menu2sub1" class="list-group-item" data-toggle="collapse" aria-expanded="false">otra cosa </a>
                    <a href="#menu2sub2" class="list-group-item" data-toggle="collapse" aria-expanded="false">x2 </a>
                </div>

                <a href="#menu3" class="list-group-item list-group-item-warning d-inline-block collapsed" data-toggle="collapse" data-parent="#sidebar"
                    aria-expanded="false">
                    <span class="d-md-inline">sin sub indices amarillo :v <i class="fa fa-bitcoin"></i></span>
                </a>
            </div>           
        </div>

    <main class="col-md-12  main">
        <a href="#" id="barra" data-target="#sidebar" data-toggle="collapse">
            <i class="fa fa-bars fa-2x py-2 p-1"></i>
        </a>

        
    </main>
  
       
</div>



<div class="col-md-8 offset-md-4">
<h4>aqui va todo el desmadre del contenido :v</h4>
</div>
</div>

</body>

</html>