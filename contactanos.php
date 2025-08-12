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
						<form id="ContactForm">
							<div class="row">
								<div class="col-12 col-sm-12 col-md-4 col-lg-4 mb-5">
								  <input type="text" class="form-control" placeholder="Nombre" id="nombre" name="nombre">
								</div>
								<div class="col-12 col-sm-12 col-md-4 col-lg-4 mb-5">
								  <input type="text" class="form-control" placeholder="Apellido Paterno" id="apaterno" name="apaterno">
								</div>
								<div class="col-12 col-sm-12 col-md-4 col-lg-4 mb-5">
									<input type="text" class="form-control" placeholder="Apellido Materno" id="amaterno" name="amaterno">
								  </div>
							  </div>
							  <div class="row">
								<div class="col-12 col-sm-12 col-md-4 col-lg-4 mb-5">
								  <input type="text" class="form-control" placeholder="Correo Electrónico" id="email" name="email">
								</div>
								<div class="col-12 col-sm-12 col-md-4 col-lg-4 mb-5">
								  <input type="text" class="form-control" placeholder="Teléfono" id="telefono" name="telefono">
								</div>
								<div class="col-12 col-sm-12 col-md-4 col-lg-4 mb-5">
									<select class="form-select" id="tipo_servicio" name="tipo_servicio">
										<option value="0" selected>Tipo de servicio o análisis</option>
										<option value="Audiometría">Audiometría</option>
										<option value="Electrocardiograma">Electrocardiograma estático y dinámico</option>
										<option value="Holter 24 horas">Holter 24 horas</option>
										<option value="Rayos X digital">Rayos X digital</option>
										<option value="Bioimpedancia corporal">Bioimpedancia corporal</option>
										<option value="Estudio visual">Estudio visual</option>
										<option value="Mastografía digital">Mastografía digital</option>
										<option value="Salud femenina">Salud femenina</option>
										<option value="Densitometría">Densitometría</option>
										<option value="Espirometría">Espirometría</option>
										<option value="Prueba de esfuerzo">Prueba de esfuerzo</option>
										<option value="Bacteriología">Bacteriología</option>
										<option value="Inmunología">Inmunología</option>
										<option value="Toxicología">Toxicología</option>
										<option value="Cromatografía de gases">Cromatografía de gases</option>
										<option value="Parasitología">Parasitología</option>
										<option value="Uroanálisis">Uroanálisis</option>
										<option value="Hematología">Hematología</option>
									  </select>
								  </div>
							  </div>
							  <div class="row">
								<div class="col-12 col-sm-12 col-md-4 col-lg-4 mb-5">								  
									<textarea id="comentarios" name="comentarios" class="form-control" placeholder="Comentarios adicionales"></textarea>
								</div>
								
								
							</div>
								  <div class="row">
									<div class="col-12 col-sm-12 col-md-4 col-lg-4">
										<button class="btn custom-btn" id="btn-sendform">
											Enviar información
											<div class="spinner-border spinner-border-sm d-none" role="status">
  												<span class="visually-hidden">Loading...</span>
											</div>
										</button>
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
		<script src="core.js"></script>
		<script>
			AOS.init();
			
			function onSubmit(token) {
     			document.getElementById("demo-form").submit();
   			}
		</script>
    </body>
</html>