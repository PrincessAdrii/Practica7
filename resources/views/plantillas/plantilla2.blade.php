<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/sass/app.scss','resources/js/app.js']);
   <style>
  
  html, body {
          margin: 0;
          padding: 0;
          height: 100%;
          display: flex;
          flex-direction: column;
      }

     

      /* Contenedor principal que ocupa todo el espacio disponible */
      .content {
         height: 50%;
      }
      form{
        padding: 60px;
      }
      footer {
          background-color: #030000;
          text-align: center;
          padding: 10px;
          margin-top: 70px;
          width: 100%;
          color: white;
          height: 200px;
          
      }
 
   
   </style>
</head>
<body>
     @include("menu")
   
       
            <div class="row">
                <div class="col">
                    @yield("contenido3")
                </div>
            </div>

       
             
              @yield("contenido1")
              <!-- @empty($__env->yieldContent('contenido1'))
              <p class="center-text">BIENVENIDOS A MI PAGINA</p>
          @endempty -->
            
        

        <div class="row">
            <div class="col">
                <footer> @yield("footer")</footer>
               
            </div>
        </div>

</body>
</html>