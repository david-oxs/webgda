<!DOCTYPE html>
<html>
    <head>
        <title>GDA</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
    
      <!-- Fixed navbar -->
	    <div id="navigation" class="navbar navbar-default navbar-fixed-top">
	      <div class="container">
	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
	          <a class="navbar-brand" href="#"><b>GDA</b></a>
	        </div>
	        <div class="navbar-collapse collapse">
	          <ul class="nav navbar-nav">
	            <li class="active"><a href="#home" class="smothscroll">Inicio</a></li>
	            <li><a href="#caracteristicas" class="smothscroll">Características</a></li>
	            <li><a href="#clientes" class="smothScroll">Nuestros Clientes</a></li>
	            <li><a href="#demostracion" class="smothScroll">Demo</a></li>
	            <li><a href="#costos" class="smothScroll">Costos</a></li>
	            <li><a href="#contacto" class="smothScroll">Contacto</a></li>
	          </ul>
	        </div><!--/.nav-collapse -->
	      </div>
	    </div>

        <section id="home" name="home"></section>
	    <div class="header">
	    	<div>
	    		<div align="center">
	    		<div >
	    			<img src="" alt="logo">
	    		</div>
					<h2>Gestor de Documentos y <b>Archivos</b></h2>
					<br>
	    		</div>
	    		
	    		<div align="center">	    			
	    			<img  src="..\resources\assets\img\app.png" alt="">
	    		</div>
	    		
	    		</div>
	    </div> <!--/ .header -->

	    <section id="caracteristicas" name="caracteristicas"></section>
	    <div id="features">
	    <hr>
			<div align="center">
				<h1>Caracteristicas</h1>
				<br>
				<br>
				<div >
					<img src="" align="left" alt="imagen1">
					<img src="" align="center" alt="imagen2">
					<img src="" align="right" alt="imagen3">
					
				</div>
				<div align="left">
				    <h4>Titulo1</h4>
				    <label>descripción</label>
				</div>
				<div align="center">
					<h4>Titulo2</h4>
					<label>descripción</label>
				</div>
				<div align="right">
					<h4>Titulo3</h4>					
					<label>descripción</label>
				</div>
				
			</div>
			<br>
	    </div><!--/ #features -->

	    <section id="clientes" name="clientes"></section>
	    <div class="clite">
	    <hr>
	    <div align="center">
	    <h1>Nuestros Clientes</h1>
		</div>
			<br>
			<br>
	     <div class="slide" align="center">
					    <div>
					      <img src="" alt="slide1">
					    </div>
					    <div>
					      <img src="" alt="slide2">
					    </div>
		 </div>
	    </div>

	    <section id="demostracion" name="demostracion"></section>
	    <div ="demo">
	    <hr>
	    <div align="center">
	    <h1>DEMO</h1>
		</div>
			<br>
			<br>
	     <div class="slide" align="left">
					    <div>
					      <img src="" alt="slide1">
					    </div>
					    <div>
					      <img src="" alt="slide2">
					    </div>
		 </div>
		 <div class="slide" align="right">
		 <label>Solicita una demostración haciendo <a href="#">clic aquí</a></label>

		 </div>
	    </div>

	     <section id="costos" name="costos"></section>
	    <div class="costo" align="center">
	    <hr>
	    <div align="center">
	    <h1>Costos</h1>
		</div>
			<br>
			<br>
	     <div >
		 <table >
    	 <tr>
          <td style="display:block;">datos<input type="checkbox"></td>
         </tr>
         <tr>
          <td style="display:block;">datos<input type="checkbox"></td>
         </tr>
         <tr>
          <td style="display:block;">datos<input type="checkbox"></td>
         </tr>
         <tr>
          <td style="display:block;">datos<input type="checkbox"></td>
         </tr>
         <tr>
          <td style="display:block;"><button>cotizar</button></td>
         </tr>
         

		 </table>
         <br>
		 <table >
    	 <tr>
          <td style="display:block;">datos<input type="checkbox"></td>
         </tr>
         <tr>
          <td style="display:block;">datos<input type="checkbox"></td>
         </tr>
         <tr>
          <td style="display:block;">datos<input type="checkbox"></td>
         </tr>
         <tr>
          <td style="display:block;">datos<input type="checkbox"></td>
         </tr>
         <tr>
          <td style="display:block;"><button>cotizar</button></td>
         </tr>
         

		 </table>
		 </div>		 
	    </div>

	    <section id="contacto" name="contato"></section>
	    <div ="info">
	    <hr>
	    <div align="center">
	    <h1>CONTACTO</h1>
		</div>
			<br>
			<br>
		<div class="slide">
	    <table>
	    <tr>
          <td style="display:inline-block;"><h2>Dirección Puebla</h2></td>
           <td></td>
           
          <td style="display:block;"><h2>form</h2></td>
           <td style="display:block;"> 
           <form>
            <input type="text" placeholder="Nombre">
            <br>
            <input type="mail" placeholder="Email">
            <br>
            <label>Mensaje</label>
            <br>
            <textarea></textarea>
            <br>
            <button>Enviar</button>
           </form>
           </td>
         </tr>
    	 <tr>
    	 <td style="display:inline-block;"><h2>Dirección New York</h2></td>
    	 </tr>	        
		 </table>

		 </div>
	    </div>
	    <hr>
	    <footer>
         <div align="right">
	    GlobalOX
        </div>
	    </footer>
    </body>
</html>
