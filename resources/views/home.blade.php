<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('css')
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>LIS</title>
  </head>

  <style>
    .triangulo-equilatero-bottom-left {
     width: 0;
     height: 0;
     background: -webkit-linear-gradient(left,red,orange,yellow, green, blue,indigo,violet);
     border-right: 320px solid transparent;
     border-top: 320px solid transparent;
     border-left: 320px solid #28784c;
     border-bottom: 320px solid #28784c;
    }

    .wrapper {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      grid-gap: 10px;
      grid-auto-rows: minmax(100px, auto);
    }
    .one {
      /*background: red;*/ 
      grid-column: 1;
      grid-row: 1/6;
    }

    .two {
      /*background: red;*/ 
      grid-column: 1;
      grid-row: 1/6;
      margin-top: 600px;
    }
    
    .three {
      background: white;
      grid-column: 2 / 4;
      grid-row: 1;
      margin-top: 100px;
      margin-right: 20px;
      margin-left: 0px;
    }

    .four {
      background: white;
      grid-column: 2 / 4;
      grid-row: 1 / 3;
      margin-top: 220px;
      margin-right: 20px;
      margin-left: 0px;
      text-align: center;
    }

    .five {
      background: white;
      grid-column: 2 / 4;
      grid-row: 1 / 3;
      margin-top: 550px;
      margin-right: 0px;
      margin-left: 0px;
    }
  </style>
  
  <body>
    <div class="wrapper">
      <div class="one">
        <div class="triangulo-equilatero-bottom-left" ></div>
      </div>
      <div class="two" style="color:white">
        Powered by:
        <img src="imagenes/logo_60.png">
      </div>
      <div class="three" style="text-align:center;">
        <h1 style="font-weight: 600; color: rgb(119, 118, 118);">Bienvenido al Sistema de información de Laboratorio clínico</h1>
      </div>
      <div class="four">
        <div class="container">
          <form method="POST" action="/resultados">
          @csrf
          <div style="color:gray">
            Ingrese su número de documento si desea conocer el resultado de la prueba del perfil lipídico
          </div>
          <input name="documento" placeholder="Documento" style="width : 500px; heigth : 1px">
          <div style="margin:20px;">
            <button type="submit" class="btn btn-success" style="height:40px; width:200px;">Enviar</button></form>
          </div>
        </div>
      </div>
      <div class="five" >
        <a style="margin-left: 450px;" href="/patients" class="btn btn-primary">Ingreso como bacteriólogo</a>
      </div>
    </div>
    

    
  </body>
</html>

