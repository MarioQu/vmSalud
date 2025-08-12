<!DOCTYPE html>
<html lang="es">
    <head>
		<?php include("layout/head.php"); ?>
    </head>
    
    
    <body data-bs-spy="scroll" data-bs-target="#navId" tabindex="0">
        <!-- Navbar -->  
		<?php include("layout/navbar.php"); ?>

		
		<!-- Main -->
        <section class="container-fluid mt-4">
            <div class="container-lg">
                <h2 class="text-center f-size80 f-green4 titles1 tit-backline2">
					Contáctanos
				</h2>
            </div>
        </section>
        
        <section class="container-fluid back-contacto mt-5" > </section>
		
		<section class="container-fluid mb-5">
            <div class="container-lg">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1 col-form py-5 px-5">
                        <h3 class="f-black titles1 f-size24 mb-5">¡Contáctanos y en breve nos pondremos en contacto contigo! </h3>
						<form action="">
							<div class="row">
								<div class="col-12 col-sm-12 col-md-4 col-lg-4 mb-5">
								  <input type="text" class="form-control" placeholder="Nombre" aria-label="Nombre">
								</div>
								<div class="col-12 col-sm-12 col-md-4 col-lg-4 mb-5">
								  <input type="text" class="form-control" placeholder="Apellido Paterno" aria-label="Apellido Paterno">
								</div>
								<div class="col-12 col-sm-12 col-md-4 col-lg-4 mb-5">
									<input type="text" class="form-control" placeholder="Apellido Materno" aria-label="Apellido Materno">
								  </div>
							  </div>
							  <div class="row">
								<div class="col-12 col-sm-12 col-md-4 col-lg-4 mb-5">
								  <input type="text" class="form-control" placeholder="Correo Electrónico" aria-label="Nombre">
								</div>
								<div class="col-12 col-sm-12 col-md-4 col-lg-4 mb-5">
								  <input type="text" class="form-control" placeholder="Teléfono" aria-label="Apellido Paterno">
								</div>
								<div class="col-12 col-sm-12 col-md-4 col-lg-4 mb-5">
									<select class="form-select" aria-label="Default select example">
										<option selected>Tipo de servicio o análisis</option>
										<option value="1">One</option>
										<option value="2">Two</option>
										<option value="3">Three</option>
									  </select>
								  </div>
							  </div>
							  <div class="row">
								<div class="col-12 col-sm-12 col-md-4 col-lg-4 mb-5">
								  
								  <textarea name="" id="" class="form-control" placeholder="Comentarios adicionales"></textarea>
								</div>
								
								  </div>
								  <div class="row">
									<div class="col-12 col-sm-12 col-md-4 col-lg-4">
										<a href="contacto" class="btn custom-btn">Enviar información</a>
									</div>
								  </div>
							  </div>
						</form>
                    </div>
                </div>
            </div>
        </section>
        
          
		<!-- Footer -->
		<footer class="container-fluid">
			<?php include("layout/footer.php") ?>
		</footer>
          
       
        <script src="assets/js/jquery-3.7.1.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/aos.js"></script>
		<script>
			AOS.init();
		</script>
    </body>
</html>