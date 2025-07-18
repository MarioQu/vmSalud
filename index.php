<!DOCTYPE html>
<html lang="es">
    <head>
        <?php include("layout/head.php"); ?>
    </head>
    
    
    <body data-bs-spy="scroll" data-bs-target="#navId" tabindex="0">
        <!-- Navbar -->  
		<?php include("layout/navbar.php"); ?>

		
		<!-- Carrusel -->
        <section class="container-fluid p-0" id="inicio">
			<div id="CarHome" class="carousel slide">
				<div class="carousel-inner h-100">
					<div class="carousel-item active h-100">
						<div class="d-flex align-items-center h-100 justify-content-start">
							<div class="text-start captions">
								<h5 class="titles1 f-black f-size45">
									¡La mejor calidad <br> es nuestro compromiso!
								</h5>
								<p class="f-black f-size18">
									Estamos comprometidos con las personas y con su salud, por ello mantenemos las mejores medidas de calidad en nuestros servicios.
								</p>
								<p class="mt-5" data-aos="fade-up">
									<a href="contacto" class="btn custom-btn">Agendar una cita</a>
								</p>
							</div>
						</div>
					</div>
					<div class="carousel-item h-100">
						<div class="d-flex align-items-center h-100 justify-content-start">
							<div class="text-start captions">
								<h5 class="titles1 f-black f-size45">
									¡La mejor calidad <br> es nuestro compromiso!
								</h5>
								<p class="f-black f-size18">
									Estamos comprometidos con las personas y con su salud, por ello mantenemos las mejores medidas de calidad en nuestros servicios.
								</p>
								<p class="mt-5" data-aos="fade-up">
									<a href="contacto" class="btn custom-btn">Agendar una cita</a>
								</p>
							</div>
						</div>
					</div>
					<div class="carousel-item h-100">
						<div class="d-flex align-items-center h-100 justify-content-start">
							<div class="text-start captions">
								<h5 class="titles1 f-black f-size45">
									¡La mejor calidad <br> es nuestro compromiso!
								</h5>
								<p class="f-black f-size18">
									Estamos comprometidos con las personas y con su salud, por ello mantenemos las mejores medidas de calidad en nuestros servicios.
								</p>
								<p class="mt-5" data-aos="fade-up">
									<a href="contacto" class="btn custom-btn">Agendar una cita</a>
								</p>
							</div>
						</div>
					</div>
				</div>
				
				<button class="carousel-control-prev" type="button" data-bs-target="#CarHome" data-bs-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Previous</span>
				</button>
				<button class="carousel-control-next" type="button" data-bs-target="#CarHome" data-bs-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Next</span>
				</button>
			</div>				
		</section>
		
		
		<!-- Quienes somos -->
		<section class="container-fluid mt-5" id="quienes-somos">
			<div class="container-lg">
				<div class="row d-flex align-items-center">
					<div class="col-lg-6 text-center">
						<img src="assets/images/quienes-somos.svg" alt="VM Salud" class="img-fluid w-100" data-aos="fade-down">
					</div>
					<div class="col-lg-6 px-3 py-3 text-center text-sm-center text-md-start">
						<img src="assets/images/vm-salud.png" class="w-25" alt="VM Salud" data-aos="fade-up">
						<h1 class="f-size24 f-black titles1 my-4" data-aos="fade-down">¿Quiénes somos?</h1>
						
						<p class="f-dark1 f-size14" data-aos="fade-down" data-aos-duration="1000">
							VM Salud es una empresa 100% mexicana dedicada a la salud ocupacional. Ofrecemos soluciones integrales para empresas del sector público y privado mediante servicios médicos especializados, evaluaciones clínicas y auxiliares de diagnóstico.
						</p>
						<p class="f-dark1 f-size14" data-aos="fade-down" data-aos-duration="1500">
							Contamos con tecnología de última generación y cobertura a nivel nacional, lo que nos permite garantizar eficiencia, cumplimiento normativo y bienestar para los colaboradores de nuestros clientes.
						</p>
					</div>
				</div>
			</div>
		</section>
		
		
		<!-- Misión y Visión -->
		<section class="container-fluid my-5" id="sobre-nosotros">
			<div class="container-lg">
				<div class="row">
					<div class="col-lg-8">
						<div class="row d-flex align-items-center mb-4" data-aos="fade-down">
							<div class="col-12 col-sm-12 col-md-4 col-lg-4" data-aos="fade-up" data-aos-duration="1000">
								<img src="assets/images/mision.svg" class="img-fluid w-100" alt="Misión">
							</div>
							<div class="col-12 col-sm-12 col-md-7 col-lg-7 text-center text-sm-center text-md-start pt-3" data-aos="fade-down" data-aos-duration="1500">
								<h2 class="f-black f-size24 titles1">Misión</h2>
								<p class="f-dark1 f-size14">
									En VM Salud nuestra misión es ofrecer soluciones eficientes, precisas y oportunas en diagnósticos clínicos a cualquier persona u organización que lo solicite.
								</p>
							</div>
						</div><!-- row -->
						
						<div class="row d-flex align-items-center" data-aos="fade-up">
							<div class="col-12 col-sm-12 col-md-4 col-lg-4" data-aos="fade-up" data-aos-duration="1000">
								<img src="assets/images/vision.svg" class="img-fluid w-100" alt="Visión">
							</div>
							<div class="col-12 col-sm-12 col-md-7 col-lg-7 text-center text-sm-center text-md-start pt-4" data-aos="fade-down" data-aos-duration="1500">
								<h2 class="f-black f-size24 titles1">Visión</h2>
								<p class="f-dark1 f-size14">
									Posicionarnos como un laboratorio líder, enfocado en atender las demandas analíticas de las empresas con excelencia y confiabilidad, destacando por nuestra atención y servicio personalizado junto a rigurosos sistemas de control y calidad, garantizando resultados precisos y respaldando la confianza de nuestros clientes corporativos.
								</p>
							</div>
						</div><!-- row -->
					</div>
					
					<div class="col-lg-4 ps-2 ps-sm-0 ps-md-5 ps-lg-5">
						<div class="card pilares">
							<div class="card-body">
								<h3 class="f-black titles1 f-size24 mb-4">Nuestros Pilares</h3>
								
								<div class="f-size14 f-dark1 d-flex align-items-center mb-4" data-aos="fade-up" data-aos-duration="1000">
									<img src="assets/images/examenes.svg" class="img-fluid" alt="Exámenes">
									<div class="ps-3">
										<h3 class="titles1 f-size14 mb-0">Exámenes</h3>
										<span>Check UPS & Rutinas</span>
									</div>
								</div><!---->
								
								<div class="f-size14 f-dark1 d-flex align-items-center mb-4" data-aos="fade-up" data-aos-duration="1200">
									<img src="assets/images/laboratorio.svg" class="img-fluid" alt="Laboratorio">
									<div class="ps-3">
										<h3 class="titles1 f-size14 mb-0">Laboratorio</h3>
										<span>Análisis clínico</span>
									</div>
								</div><!---->
								
								<div class="f-size14 f-dark1 d-flex align-items-center mb-4" data-aos="fade-up" data-aos-duration="1400">
									<img src="assets/images/equipo-medico.svg" class="img-fluid" alt="Equipo médico de última generación">
									<div class="ps-3">
										<h3 class="titles1 f-size14 mb-0">Equipo médico</h3>
										<span>Equipo de última generación</span>
									</div>
								</div><!---->
								
								<div class="f-size14 f-dark1 d-flex align-items-center mb-4" data-aos="fade-up" data-aos-duration="1600">
									<img src="assets/images/vehiculos.svg" class="img-fluid" alt="Unidades Médicas Móviles">
									<div class="ps-3">
										<h3 class="titles1 f-size14 mb-0">Vehículos</h3>
										<span>Unidades Médicas Móviles</span>
									</div>
								</div><!---->
								
								<div class="f-size14 f-dark1 d-flex align-items-center mb-4" data-aos="fade-up" data-aos-duration="1800">
									<img src="assets/images/salud.svg" class="img-fluid" alt="Campañas de salud">
									<div class="ps-3">
										<h3 class="titles1 f-size14 mb-0">Salud</h3>
										<span>Campañas de salud</span>
									</div>
								</div><!---->
								
								<div class="f-size14 f-dark1 d-flex align-items-center mb-4" data-aos="fade-up" data-aos-duration="2000">
									<img src="assets/images/capital-humano.svg" class="img-fluid" alt="Personal altamente calificado">
									<div class="ps-3">
										<h3 class="titles1 f-size14 mb-0">Capital Humano</h3>
										<span>Personal altamente calificado</span>
									</div>
								</div><!---->
							</div>
						  </div>
					</div>
					
					<div class="col-12 text-center pt-5">
						<a href="contacto" class="btn custom-btn">Agendar una cita</a>
					</div>
				</div>
			</div>
		</section>
		
		
		<!-- Nuestros servicios -->
		<section class="container-fluid mt-5 py-5" id="nuestros-servicios">
			<div class="container-lg">
				<h2 class="text-center f-size80 f-white titles1 tit-backline1" data-aos="zoom-in">Nuestros servicios</h2>
				
				<div class="row my-5">
					<div class="col-12 text-center text-sm-center text-md-start text-lg-start">
						<span class="f-white f-size24 titles1">Exámenes Clínicos</span>
					</div>
				</div>
				
				<div class="row">
					<div class="col-lg-3 f-white text-center mb-3" data-aos="fade-up" data-aos-duration="1000">
						<img src="assets/images/servicios/audiometria.svg" class="img-fluid mb-3" alt="Audiometría">
						<h3 class="f-size18 titles1 text-center tit-serv">AUDIOMETRÍA</h3>
						<p class="f-size14">
							La audiometría es una prueba que evalúa la capacidad auditiva, detectando posibles pérdidas de audición y su gravedad. Es clave en salud ocupacional para prevenir daños por exposición al ruido.
						</p>
					</div><!---->
					
					<div class="col-lg-3 f-white text-center mb-3" data-aos="fade-down" data-aos-duration="1200">
						<img src="assets/images/servicios/electro.svg" class="img-fluid mb-3" alt="Electrocardiograma">
						<h3 class="f-size18 titles1 text-center tit-serv">ELECTROCARDIOGRAMA ESTÁTICO Y DINÁMICO</h3>
						<p class="f-size14">
							El electrocardiograma es un estudio que registra la actividad eléctrica del corazón. Permite detectar alteraciones en el ritmo cardíaco, la conducción eléctrica y posibles signos de enfermedades cardíacas.
						</p>
					</div><!---->
					
					<div class="col-lg-3 f-white text-center mb-3" data-aos="fade-up" data-aos-duration="1400">
						<img src="assets/images/servicios/holter.svg" class="img-fluid mb-3" alt="HOLTER 24 HORAS">
						<h3 class="f-size18 titles1 text-center tit-serv">HOLTER 24 HORAS</h3>
						<p class="f-size14">
							El Holter es un estudio que registra la actividad eléctrica del corazón durante 24 horas de forma continua. Sirve para detectar alteraciones del ritmo cardíaco que no se identifican en un electrocardiograma convencional.
						</p>
					</div><!---->
					
					<div class="col-lg-3 f-white text-center mb-3" data-aos="fade-down" data-aos-duration="1600">
						<img src="assets/images/servicios/rayos-x.svg" class="img-fluid mb-3" alt="RAYOS X DIGITAL">
						<h3 class="f-size18 titles1 text-center tit-serv">RAYOS X DIGITAL</h3>
						<p class="f-size14">
							Los Rayos X digitales son un estudio de imagen que permite visualizar estructuras internas del cuerpo, como huesos y órganos, de forma rápida y precisa. Utilizan tecnología digital que mejora la calidad de la imagen y reduce la exposición a la radiación.
						</p>
					</div><!---->
					
					<div class="col-lg-3 f-white text-center mb-3" data-aos="fade-up" data-aos-duration="1800">
						<img src="assets/images/servicios/bioimpedancia.svg" class="img-fluid mb-3" alt="BIOIMPEDANCIA CORPORAL">
						<h3 class="f-size18 titles1 text-center tit-serv">BIOIMPEDANCIA CORPORAL</h3>
						<p class="f-size14">
							La bioimpedancia corporal es una prueba que analiza la composición del cuerpo, midiendo porcentajes de grasa, músculo, agua y masa ósea. Es rápida, no invasiva y útil para evaluar el estado nutricional y físico de una persona.
						</p>
					</div><!---->
					
					<div class="col-lg-3 f-white text-center mb-3" data-aos="fade-down" data-aos-duration="2000">
						<img src="assets/images/servicios/visual.svg" class="img-fluid mb-3" alt="ESTUDIO VISUAL">
						<h3 class="f-size18 titles1 text-center tit-serv">ESTUDIO VISUAL</h3>
						<p class="f-size14">
							El estudio visual evalúa la agudeza y salud visual para detectar problemas como miopía, hipermetropía, astigmatismo o fatiga ocular. Es fundamental en salud ocupacional para prevenir riesgos laborales relacionados con la visión.
						</p>
					</div><!---->
					
					<div class="col-lg-3 f-white text-center mb-3" data-aos="fade-up" data-aos-duration="2200">
						<img src="assets/images/servicios/mastografia.svg" class="img-fluid mb-3" alt="MASTOGRAFÍA DIGITAL">
						<h3 class="f-size18 titles1 text-center tit-serv">MASTOGRAFÍA DIGITAL</h3>
						<p class="f-size14">
							La mastografía digital es un estudio de imagen que permite detectar de forma temprana anomalías en el tejido mamario, como quistes o tumores. Utiliza baja radiación y ofrece mayor precisión en la interpretación.
						</p>
					</div><!---->
					
					<div class="col-lg-3 f-white text-center mb-3" data-aos="fade-down" data-aos-duration="2400">
						<img src="assets/images/servicios/femenina.svg" class="img-fluid mb-3" alt="SALUD FEMENINA">
						<h3 class="f-size18 titles1 text-center tit-serv">SALUD FEMENINA</h3>
						<p class="f-size14">
							La salud femenina abarca la prevención, diagnóstico y cuidado integral de aspectos relacionados con el bienestar de la mujer, incluyendo salud reproductiva, hormonal, mamaria y ginecológica. Su atención oportuna es clave para una vida saludable.
						</p>
					</div><!---->
					
					<div class="col-lg-3 f-white text-center mb-3" data-aos="fade-up" data-aos-duration="2600">
						<img src="assets/images/servicios/densitometria.svg" class="img-fluid mb-3" alt="DENSITOMETRÍA">
						<h3 class="f-size18 titles1 text-center tit-serv">DENSITOMETRÍA</h3>
						<p class="f-size14">
							La densitometría es un estudio que mide la densidad mineral ósea para detectar osteoporosis o riesgo de fracturas. Es rápido, no invasivo y fundamental en la prevención de enfermedades óseas.
						</p>
					</div><!---->
					
					<div class="col-lg-3 f-white text-center mb-3" data-aos="fade-down" data-aos-duration="2800">
						<img src="assets/images/servicios/espirometria.svg" class="img-fluid mb-3" alt="ESPIROMETRÍA">
						<h3 class="f-size18 titles1 text-center tit-serv">ESPIROMETRÍA</h3>
						<p class="f-size14">
							La espirometría es una prueba que evalúa la función pulmonar midiendo la cantidad y velocidad del aire inhalado y exhalado. Es útil para detectar enfermedades respiratorias como asma, EPOC o afecciones laborales.
						</p>
					</div><!---->
					
					<div class="col-lg-3 f-white text-center mb-3" data-aos="fade-up" data-aos-duration="3000">
						<img src="assets/images/servicios/esfuerzo.svg" class="img-fluid mb-3" alt="PRUEBA DE ESFUERZO">
						<h3 class="f-size18 titles1 text-center tit-serv">PRUEBA DE ESFUERZO</h3>
						<p class="f-size14">
							La prueba de esfuerzo evalúa el funcionamiento del corazón durante la actividad física. Permite detectar alteraciones cardiovasculares que no se manifiestan en reposo y es útil para valorar la capacidad física y el riesgo cardíaco.
						</p>
					</div><!---->
				</div><!-- row servicios -->
				
				<div class="row">
					<div class="col-12 text-center pt-3">
						<a href="contacto" class="btn custom-btn2">Solicitar un servicio</a>
					</div>
				</div>
			</div>
		</section>
		
		
		<!-- Análisis clínicos -->
		<section class="container-fluid py-5 py-sm-3 py-md-5 py-lg-5" id="analisis_clinicos">
			<div class="container-lg">				
				<div class="row my-5">
					<div class="col-12 text-center text-sm-center text-md-start text-lg-start">
						<span class="f-white f-size24 titles1">Análisis Clínicos</span>
					</div>
				</div>
				
				<div class="row">
					<div class="col-lg-3 f-white text-center mb-3" data-aos="fade-up" data-aos-duration="1000">
						<img src="assets/images/analisis/bacteriologia.svg" class="img-fluid mb-3 rounded-img" alt="BACTERIOLOGÍA">
						<h3 class="f-size18 titles1 text-center tit-serv">BACTERIOLOGÍA</h3>
						<p class="f-size14">
							La bacteriología es el estudio de bacterias presentes en muestras clínicas para detectar infecciones y determinar el tratamiento adecuado. Es fundamental en el diagnóstico preciso de enfermedades infecciosas.
						</p>
					</div><!---->
					
					<div class="col-lg-3 f-white text-center mb-3" data-aos="fade-down" data-aos-duration="1200">
						<img src="assets/images/analisis/inmunologia.svg" class="img-fluid mb-3" alt="INMUNOLOGÍA">
						<h3 class="f-size18 titles1 text-center tit-serv">INMUNOLOGÍA</h3>
						<p class="f-size14">
							El examen de inmunología analiza la respuesta del sistema inmunológico para detectar infecciones,alergias o enfermedades autoinmunes. Evalúa la presencia de anticuerpos, antígenos u otros marcadores específicos en la sangre.
						</p>
					</div><!---->
					
					<div class="col-lg-3 f-white text-center mb-3" data-aos="fade-up" data-aos-duration="1400">
						<img src="assets/images/analisis/toxicologia.svg" class="img-fluid mb-3" alt="TOXICOLOGÍA">
						<h3 class="f-size18 titles1 text-center tit-serv">TOXICOLOGÍA</h3>
						<p class="f-size14">
							El examen de toxicología detecta la presencia de drogas, alcohol u otras sustancias tóxicas en el organismo. Se realiza comúnmente en orina o sangre y es útil para control laboral, clínico o legal.
						</p>
					</div><!---->
					
					<div class="col-lg-3 f-white text-center mb-3" data-aos="fade-down" data-aos-duration="1600">
						<img src="assets/images/analisis/cromatografia.svg" class="img-fluid mb-3" alt="CROMATOGRAFÍA DE GASES">
						<h3 class="f-size18 titles1 text-center tit-serv">CROMATOGRAFÍA DE GASES</h3>
						<p class="f-size14">
							La cromatografía de gases es una técnica analítica que permite identificar y cuantificar compuestos químicos en una muestra. Se utiliza para detectar sustancias tóxicas, contaminantes o residuos de medicamentos en sangre, orina o aire.
						</p>
					</div><!---->
					
					<div class="col-lg-3 f-white text-center mb-3" data-aos="fade-up" data-aos-duration="1800">
						<img src="assets/images/analisis/parasitologia.svg" class="img-fluid mb-3" alt="PARASITOLOGÍA">
						<h3 class="f-size18 titles1 text-center tit-serv">PARASITOLOGÍA</h3>
						<p class="f-size14">
							El examen de parasitología detecta la presencia de parásitos en muestras como heces, sangre o tejidos. Es clave para diagnosticar infecciones intestinales o sistémicas y orientar el tratamiento adecuado.
						</p>
					</div><!---->
					
					<div class="col-lg-3 f-white text-center mb-3" data-aos="fade-down" data-aos-duration="2000">
						<img src="assets/images/analisis/uroanalisis.svg" class="img-fluid mb-3" alt="UROANÁLISIS">
						<h3 class="f-size18 titles1 text-center tit-serv">UROANÁLISIS</h3>
						<p class="f-size14">
							El uroanálisis es un estudio de orina que permite evaluar el estado general de salud y detectar infecciones urinarias, problemas renales, diabetes u otras alteraciones metabólicas. Es rápido, no invasivo y de gran utilidad diagnóstica.
						</p>
					</div><!---->
					
					<div class="col-lg-3 f-white text-center mb-3" data-aos="fade-up" data-aos-duration="2200">
						<img src="assets/images/analisis/hematologia.svg" class="img-fluid mb-3" alt="HEMATOLOGÍA">
						<h3 class="f-size18 titles1 text-center tit-serv">HEMATOLOGÍA</h3>
						<p class="f-size14">
							El examen de hematología analiza los componentes de la sangre, como glóbulos rojos, glóbulos blancos y plaquetas. Ayuda a detectar anemias, infecciones, trastornos de coagulación y otras enfermedades hematológicas.
						</p>
					</div><!---->
					
					<div class="col-lg-3 f-white text-center mb-3" data-aos="fade-down" data-aos-duration="2400">
						<img src="assets/images/analisis/quimica-sanguinea.svg" class="img-fluid mb-3" alt="QUÍMICA SANGUÍNEA">
						<h3 class="f-size18 titles1 text-center tit-serv">QUÍMICA SANGUÍNEA</h3>
						<p class="f-size14">
							El examen de química sanguínea evalúa distintos parámetros en la sangre como glucosa, colesterol, triglicéridos, urea y creatinina. Permite detectar alteraciones metabólicas, renales, hepáticas y el estado general de salud.
						</p>
					</div><!---->					
				</div><!-- row servicios -->
				
				<div class="row">
					<div class="col-12 text-center pt-3">
						<a href="contacto" class="btn custom-btn2">Solicitar un servicio</a>
					</div>
				</div>
			</div>
		</section>
		
		
		<!-- Beneficios -->
		<section class="container-fluid my-5" id="beneficios">
			<div class="container-lg">
				<h2 class="text-center f-size80 f-green4 titles1 tit-backline2">Beneficios</h2>
				
				<div class="row mt-5">
					<div class="col-lg-10 offset-lg-1">
						<div id="CarBeneficios" class="carousel slide">
							<div class="carousel-indicators">
								<button type="button" data-bs-target="#CarBeneficios" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
								<button type="button" data-bs-target="#CarBeneficios" data-bs-slide-to="1" aria-label="Slide 2"></button>
								<button type="button" data-bs-target="#CarBeneficios" data-bs-slide-to="2" aria-label="Slide 3"></button>
							</div>
							  
							  
							<div class="carousel-inner h-100">
								<div class="carousel-item active">
									<div class="container h-100">
										<div class="row d-flex flex-column flex-sm-column flex-md-row flex-lg-row align-items-center h-100">
											<div class="col-12 col-sm-12 col-md-6 col-lg-6 text-center h-100">
												<img src="assets/images/equipo_medico.svg" class="img-fluid" alt="Equipo Médico">
											</div>
											<div class="col-12 col-sm-12 col-md-6 col-lg-6 h-100 pt-3">
												<h3 class="f-black titles1 f-size24 mb-3 text-center text-sm-center text-md-start text-lg-start">
													Equipo Médico
												</h3>
												<p class="f-dark1 f-size14 text-center text-sm-center text-md-start text-lg-start">
													En VM Salud utilizamos equipo médico con tecnología de punta, que garantiza diagnósticos precisos, rápidos y confiables. Nuestros dispositivos cumplen con altos estándares de  calidad y nos permiten ofrecer servicios actualizados, eficientes y alineados con las exigencias del sector salud.
												</p>
												<ul class="f-size14 text-uppercase">
													<li>AUDIOMETRÍA</li>
													<li>BIOIMPEDANCIA CORPORAL</li>
													<li>ELECTROCARDIOGRAMA</li>
													<li>ESPIROMETRÍA</li>
													<li>HOLTER 24 HORAS</li>
													<li>RADIOLOGÍA DIGITAL PACS</li>
												</ul>
											
												<p class="mt-5 text-center text-sm-center text-md-start text-lg-start">
													<a href="contacto" class="btn custom-btn">Agendar una cita</a>
												</p>
											</div>
										</div>
									</div><!-- container -->
								</div><!-- item -->
								
								<div class="carousel-item">
									<div class="container h-100">
										<div class="row d-flex flex-column-reverse flex-sm-column-reverse flex-md-row flex-lg-row align-items-center h-100">											
											<div class="col-12 col-sm-12 col-md-6 col-lg-6 h-100 pt-3">
												<h3 class="f-black titles1 f-size24 mb-3 text-center text-sm-center text-md-start text-lg-start">
													Unidades Móviles
												</h3>
												<p class="f-dark1 f-size14 text-center text-sm-center text-md-start text-lg-start">
													VM Salud cuenta con unidades móviles totalmente equipadas para brindar servicios médicos directamente en las instalaciones de nuestros clientes, sin necesidad de adecuaciones especiales. Cumplen con los más altos estándares de seguridad en materiales, instalaciones eléctricas, diseño y equipos. Utilizan material nuevo y desechable, garantizando higiene y protección en cada consulta. Su diseño compacto permite operarlas en un cajón de estacionamiento estándar y no requieren conexiones adicionales. Disponibles a nivel nacional, nuestras unidades son una solución práctica para cumplir con la normatividad en salud ocupacional y cuidar a tu equipo.
												</p>
											
												<p class="mt-5 text-center text-sm-center text-md-start text-lg-start">
													<a href="contacto" class="btn custom-btn">Agendar una cita</a>
												</p>
											</div>
											<div class="col-12 col-sm-12 col-md-6 col-lg-6 text-center h-100">
												<img src="assets/images/unidades-moviles.svg" class="img-fluid" alt="Unidades móviles">
											</div>
										</div>
									</div><!-- container -->
								</div><!-- item -->
							  
								<div class="carousel-item">
									<div class="container h-100">
										<div class="row d-flex flex-column flex-sm-column flex-md-row flex-lg-row align-items-center h-100">		
											<div class="col-12 col-sm-12 col-md-6 col-lg-6 text-center h-100">
												<img src="assets/images/jornadas-de-salud.svg" class="img-fluid" alt="Jornadas de salud">
											</div>									
											<div class="col-12 col-sm-12 col-md-6 col-lg-6 h-100 pt-3">
												<h3 class="f-black titles1 f-size24 mb-3">Jornadas de salud</h3>
												<p class="f-dark1 f-size14">
													<strong>Prevención de adicciones</strong>
													Exámenes Toxicológicos (Antidoping) para la detección oportuna de adicciones

													<strong>Control & Prevención de la Diabetes & Obesidad</strong>
													<ul>
														<li>Pruebas de Glucosa, Colesterol, Triglicéridos.</li>
														<li>Hemoglobina Glucosilada, Micro albuminuria, etc.</li>
														<li>Uroanálisis</li>
													</ul>
												</p>
											
												<p class="mt-5 text-center text-sm-center text-md-start text-lg-start">
													<a href="contacto" class="btn custom-btn">Agendar una cita</a>
												</p>
											</div>											
										</div>
									</div><!-- container -->
								</div><!-- item -->		
								
								<div class="carousel-item">
									<div class="container h-100">
										<div class="row flex-column-reverse flex-sm-column-reverse flex-md-row flex-lg-row align-items-center h-100">		
											<div class="col-12 col-sm-12 col-md-6 col-lg-6 h-100 pt-3">
												<h3 class="f-black titles1 f-size24 mb-3 text-center text-sm-center text-md-start text-lg-start">
													Capital Humano
												</h3>
												<p class="f-dark1 f-size14 text-center text-sm-center text-md-start text-lg-start">													
													En VM Salud contamos con un equipo multidisciplinario de profesionales altamente capacitados, comprometidos con la salud y el bienestar de cada paciente. Nuestro personal médico, técnico y administrativo se distingue por su experiencia, ética y enfoque en la atención de calidad.
												</p>
												<ul>
													<li>Laboratorio de Alta Calidad</li>
													<li>Cardiología</li>
													<li>Optometría</li>
													<li>Psicología</li>
													<li>Radiología Digital PACS</li>
												</ul>
											
												<p class="mt-5 text-center text-sm-center text-md-start text-lg-start">
													<a href="contacto" class="btn custom-btn">Agendar una cita</a>
												</p>
											</div>	
											<div class="col-12 col-sm-12 col-md-6 col-lg-6 text-center h-100">
												<img src="assets/images/capital_humano.svg" class="img-fluid" alt="Capital Humano">
											</div>											
										</div>
									</div><!-- container -->
								</div><!-- item -->			
							</div>
							
							<button class="carousel-control-prev" type="button" data-bs-target="#CarBeneficios" data-bs-slide="prev">
							  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
							  <span class="visually-hidden">Previous</span>
							</button>
							<button class="carousel-control-next" type="button" data-bs-target="#CarBeneficios" data-bs-slide="next">
							  <span class="carousel-control-next-icon" aria-hidden="true"></span>
							  <span class="visually-hidden">Next</span>
							</button>
						</div><!-- carrusel beneficios -->	
					</div>
				</div>								
			</div>
		</section>
		
		
		<!-- Cobertura -->
		<section class="container-fluid my-5">
			<div class="container-lg">
				<h2 class="text-center f-size80 f-green4 titles1 tit-backline2">
					Cobertura
				</h2>
				
				<div class="row">
					<div class="col-lg-10 offset-1 pt-3">
						<p class="f-dark1 f-size14 text-center">
							En VM Salud contamos con presencia operativa en todo el país, lo que nos permite ofrecer nuestros servicios de salud ocupacional a nivel nacional.
							Gracias a nuestra red de profesionales, unidades móviles y capacidad logística, atendemos empresas en cualquier estado de la República Mexicana, garantizando la misma calidad, eficiencia y cumplimiento normativo en cada ubicación.
						</p>
					</div>
					
					<div class="col-12 text-center pt-5">
						<img src="assets/images/mapa.svg" class="img-fluid w-100" alt="Cobertura VM Salud">
					</div>
				</div>
			</div>
		</section>
		
		
		<!-- Nuestros clientes -->
		<section class="container-fluid my-5">
			<div class="container-lg">
				<h2 class="text-center f-size80 f-green4 titles1 tit-backline2">
					Nuestros clientes
				</h2>
				
				<div class="row">
					<div class="col-lg-10 offset-1">
						<p class="f-dark1 f-size14 text-center text-sm-center text-md-center text-lg-center">
							En VM Salud nos sentimos orgullosos de contar con la confianza de empresas de distintos sectores a nivel nacional. Agradecemos profundamente su preferencia, que nos impulsa a mantener altos estándares de calidad, innovación y compromiso en cada servicio. Su confianza es la base que nos motiva a seguir creciendo y cuidando la salud ocupacional de miles de colaboradores en todo México.
						</p>
					</div>
					
					<div class="col-12 text-center">
						<img src="assets/images/clientes.png" class="img-fluid w-100" alt="Clientes VM Salud">
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