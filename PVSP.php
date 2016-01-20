<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="CSS/PVSP.css" type="text/css" media="screen">
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <title></title>
    </head>
    <body>
       
        
        <div id="menuLateral" style="background: url(Imagenes/leftMenu.jpeg); background-size: cover;">
            
          <ul id="ListaMenuLateral">
              <li><a>1 VS 1</a>
               
                <li><a>DIVISIONES LIGA</a>
                <ul>
                <li><a>PRIMERA DIVISIÓN</a></li>
                <li><a>SEGUNDA DIVISIÓN A</a></li>
                <li><a>SEGUNDA DIVISIÓN B</a></li>
                <li><a>TERCERA DIVISIÓN A</a></li>
                <li><a>TERCERA DIVISIÓN B</a></li>
              
                </ul>
                </li>
                
                
                <li><a>COPA</a>
                <ul>
                <li><a href="Fase1PvsP.php">FASE 1</a></li>
                <li><a href="Fases.php">FASE 2</a></li>
                <li><a>FASE 3</a></li>
                
                </ul>
                </li>
                
                <li><a>ADMINISTRADOR</a>
                <ul>
                <li><a>CREAR TORNEO</a></li>
                <li><a>CREAR COPA</a></li>
                
                
                </ul>
                </li>
                
            </ul>
            
            
        </div>
     
     
        
        
            
        <div id="menuSuperior" style="background:url(Imagenes/topMenu.jpeg); background-size: cover; "> 
        
            <ul id="ListaMenuSuperior">
                <li><a href="CLUBESPRO.php">CLUBES PRO</a></li>
                <li><a href="PVSP.php">1 VS 1</a></li>
                <li><a>REGLAMENTO</a></li>
                <li><a>SALA DE TROFEOS</a></li>
                <li><a>NOTICIAS</a></li>
                <li><a>LOGIN</a></li>
              
                 
            </ul>
        
        
        </div>
        
        <div id="menuCentral" style="background:url(Imagenes/fondo1vs1.jpg); background-size: cover;" >
                 
            <div>
               .
            </div>
            <div>
               
                <h1 class="title">1 VS 1</h1>
            </div>
            
        </div>
        
        
    </body>
    
    <script>
    
    $(document).ready(function () {
  $('#ListaMenuLateral > li > a').click(function(){
    if ($(this).attr('class') != 'active'){
      $('#ListaMenuLateral li ul').slideUp();
      $(this).next().slideToggle();
      $('#ListaMenuLateral li a').removeClass('active');
      $(this).addClass('active');
    }
  });
});
    </script>
</html>


