<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="CSS/MenuPrincipalCSS.css" type="text/css" media="screen">
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <title></title>
    </head>
    <body>
       
        
        <div id="menuLateral" style="background: url(Imagenes/leftMenu.jpeg); background-size: cover;">
            
          <ul id="ListaMenuLateral">
              <li><a>CLUBES PRO</a>
               
                <li><a>TORNEOS VIGENTES</a>
              <!--  <ul>
                <li><a>PRIMERA DIVISIÓN</a></li>
                <li><a>SEGUNDA DIVISIÓN A</a></li>
                <li><a>SEGUNDA DIVISIÓN B</a></li>
                <li><a>TERCERA DIVISIÓN A</a></li>
                <li><a>TERCERA DIVISIÓN B</a></li>
              
                </ul>-->
                </li>
                
                
                <li><a>CLUBES</a>
            
                </li>
                
                <li><a>JUGADORES</a>
             
                </li>
                
                 <li><a>TRANSFERENCIAS</a>
             
                </li>
                
                 <li><a>RANKING POR CLUBES</a>
             
                </li>
                
                
                
            </ul>
            
            
        </div>
     
     
        
        
            
        <div id="menuSuperior" style="background:url(Imagenes/topMenu.jpeg); background-size: cover; "> 
        
            <ul id="ListaMenuSuperior">
                <li><a href="#">CLUBES PRO</a></li>
                <li><a href="PVSP.php">1 VS 1</a></li>
                <li><a>REGLAMENTO</a></li>
                <li><a>SALA DE TROFEOS</a></li>
                <li><a>NOTICIAS</a></li>
                <li><a>LOGIN</a></li>
              
                 
            </ul>
        
        
        </div>
        
        <div id="menuCentral" style="background:url(Imagenes/middleMenu.jpeg); background-size: cover;" >
                 
            
            
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


