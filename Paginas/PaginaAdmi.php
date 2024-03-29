<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="../node_modules/bootstrap-toggle/css/bootstrap2-toggle.min.css">
    <link rel="stylesheet" href="../node_modules/pageCSS/index.css">
    <script src="../node_modules/jquery/dist/jquery.min.js"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../node_modules/popper.js/dist/popper.min.js"></script>
    
    <title>Proyecto de Ingenieria de Software</title>
</head>
<body>
    <header class=" text-center font-weight-bolder row mr-0" >
                    
                    <div class="Titulo card-header py-3 ml-5">   Bienvenido a Ingenieria de Software
                        </div>
               <button class="ImgUser">

               </button>       
                                        
    </header>
       
     
    <div class="pos-f-t">
      <div class="collapse" id="navbarToggleExternalContent">
        <div class="bg-dark p-4">
        
        
          <div class="row">
          <div class="botonesMenu col-6">
           <p> <a href="ConfiguracionUsuario.php">
             <button class="btn btn-secondary col-md-6"> Usuarios </button>
           </a>           </p>
           <p> 
           <p> <a href="roles.php">
           <button class="btn btn-secondary col-md-6"> Roles </button></a>
          </p>
          <p> <a href="permisos.php">
          <button class="btn btn-secondary col-md-6"> Permisos </button>
          </a></p>
          
        </div>
        <div class="Cal col-6">
         <table id="calendar">
            <caption></caption>
            <thead>
              <tr>
                <th>Lun</th><th>Mar</th><th>Mie</th><th>Jue</th><th>Vie</th><th>Sab</th><th>Dom</th>
              </tr>
            </thead>
            <tbody>
            </tbody>
          </table>
        </div>
        </div>
        </div>
      </div>
      <nav class="navbar navbar-dark bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="NombreAdmi row">
            <div id="user">Administrador</div>
          <a href="cerrar_sesion.php">
            <button class="CerrarSe">
          </button>
          </a>          </div>
      </nav>
    </div>
    
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="../ImgFondos/carusel3.jpeg" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="../ImgFondos/carusel2.jpg" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="../ImgFondos/carusel1.jpg" alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <!-- Footer -->
<footer class="page-footer font-small teal pt-4">

    <!-- Footer Text -->
    <div class="container-fluid text-center text-md-left">
  
      <!-- Grid row -->
      <div class="row">
  
        <!-- Grid column -->
        <div class="col-md-6 mt-md-0 mt-3">
  
          <!-- Content -->
          <h5 class="text-uppercase font-weight-bold">INTEGRANTES</h5>
          <p class="integrante">Erwin Quinteros Villarroel</p>
          <p class="integrante">Savina Ayma Marza</p>
          <p class="integrante">Ivan Mamani Choque</p>
          <p class="integrante">Maribel Chipani Corrales</p>
          <p class="integrante">Wlider Canaviri Astete</p>
          <p class="integrante">Adan Lopez Vargas</p>
  
        </div>
        <!-- Grid column -->
  
        <hr class="clearfix w-100 d-md-none pb-3">
  
        <!-- Grid column -->
        <div class="col-md-6 mb-md-0 mb-3">
  
          <!-- Content -->
          <img class="logoUmss" src="../ImgFondos/UMSS.png" alt="">
        </div>
        <!-- Grid column -->
  
      </div>
      <!-- Grid row -->
  
    </div>
    <!-- Footer Text -->
  
    <!-- Copyright -->
    <div class="footer-copyright text-center py-3 bg-info">Facultad de Ciencias y Tecnologia :
        <strong>Universidad Mayor de San Simon</strong>
      </div>
    <!-- Copyright -->
  
  </footer>
  <!-- Footer -->

      
       
      <script>
      var actual=new Date();
      function mostrarCalendario(year,month)
      {
        var now=new Date(year,month-1,1);
        var last=new Date(year,month,0);
        var primerDiaSemana=(now.getDay()==0)?7:now.getDay();
        var ultimoDiaMes=last.getDate();
        var dia=0;
        var resultado="<tr bgcolor='silver'>";
        var diaActual=0;
        console.log(ultimoDiaMes);
       
        var last_cell=primerDiaSemana+ultimoDiaMes;
       
        // hacemos un bucle hasta 42, que es el máximo de valores que puede
        // haber... 6 columnas de 7 dias
        for(var i=1;i<=42;i++)
        {
          if(i==primerDiaSemana)
          {
            // determinamos en que dia empieza
            dia=1;
          }
          if(i<primerDiaSemana || i>=last_cell)
          {
            // celda vacia
            resultado+="<td>&nbsp;</td>";
          }else{
            // mostramos el dia
            if(dia==actual.getDate() && month==actual.getMonth()+1 && year==actual.getFullYear())
              resultado+="<td class='hoy'>"+dia+"</td>";
            else
              resultado+="<td>"+dia+"</td>";
            dia++;
          }
          if(i%7==0)
          {
            if(dia>ultimoDiaMes)
              break;
            resultado+="</tr><tr>\n";
          }
        }
        resultado+="</tr>";
       
        var meses=Array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
       
        // Calculamos el siguiente mes y año
        nextMonth=month+1;
        nextYear=year;
        if(month+1>12)
        {
          nextMonth=1;
          nextYear=year+1;
        }
       
        // Calculamos el anterior mes y año
        prevMonth=month-1;
        prevYear=year;
        if(month-1<1)
        {
          prevMonth=12;
          prevYear=year-1;
        }
       
        document.getElementById("calendar").getElementsByTagName("caption")[0].innerHTML="<div>"+meses[month-1]+" / "+year+"</div><div><a onclick='mostrarCalendario("+prevYear+","+prevMonth+")'>&lt;</a> <a onclick='mostrarCalendario("+nextYear+","+nextMonth+")'>&gt;</a></div>";
        document.getElementById("calendar").getElementsByTagName("tbody")[0].innerHTML=resultado;
      }
       
      mostrarCalendario(actual.getFullYear(),actual.getMonth()+1);
      </script>
    
     
    </body>
</html>