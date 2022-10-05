<?php
	include "header.php";
?>
<main id="main">
<!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">
		
        
        <h2>Acceso Clientes </h2>
		<style="margin-top:10px;">
      </div>
    </section><!-- End Breadcrumbs -->
</br>
</br>
</br>

	<header class="bs-docs-nav" id="top" role="banner">    
		<div class="container">
			<br>
	  	</div>
	</header>
    
    <div class="container bs-docs-container">
	    <div class="row">
			<div class="col-sm-4 col-md-4 col-md-offset-4">
				<div class="panel panel-default">

					<div>
						<div>
		        	<h4><img src="gc.jpeg" height="150" width="330"></h4>
		        </div>
		      </div>

		    <div class="panel-body">
						
				
<!-- action=http://mb.p9000/mb/demo/altaDemo -->
<form  method="POST">
   	<fieldset>
	
		<div class="form-group  " id="user_field">
			<label class="control-label" for="user">Usuario</label>
			<input type="text" id="usuario" name="usuario" value="" required="true" placeholder="usuario" class="form-control">
		</div>
		    	
		<div class="form-group  " id="pass_field">
			<label class="control-label" for="pass">Password</label>
			<input type="text" id="pass" name="pass" value="" required="true" placeholder="contraseña" class="form-control">
		</div>
		    	
		<div class="form-group  " id="correo_field">
			<label class="control-label" for="correo">Correo</label>
			<input type="email" id="correo" name="correo" value="" required="true" placeholder="Correo de contacto" class="form-control">
		</div>    	

			<button class="btngren" type="submit" value="Alta">Ingresar</button>

    </fieldset>
</form>    
					</div>
				</div>
			</div>
		</div>
  	</div>
</main>

<title>Acceso Clientes</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<!-- Optional theme -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="/mb/assets/javascripts/bootstrap-multiselect.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

<!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    

    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="index.php" class="logo d-flex align-items-center">
              <img src="assets/img/gc.png" alt="">
              <span>Global Corp</span>
            </a>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Enlaces</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="index.php">Inicio</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="nosotros.php">Acerca de</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Servicios</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
            <h4>Contactanos</h4>
            <p>
              Av García Salinas  <br>
              Guadalupe, Zacatecas c.p. 98619<br>
              México <br><br>
              <strong>Teléfono:</strong> +52 492 925 2742<br>
              <strong>Correo:</strong> GlobalCorpAsesorias@unisima.com<br>
            </p>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>UNISIMA</span></strong>. Todos los derechos reservados
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flexstart-bootstrap-startup-template/ -->
        Diseñado por <a href="https://bootstrapmade.com/">Green Bug's</a>
      </div>
    </div>
  </footer><!-- End Footer -->