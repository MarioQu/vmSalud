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
            <div class="container-lg mb-5">
                <h2 class="text-center f-size80 f-green4 titles1 tit-backline2">
					Gracias
				</h2>
            </div>
            
            <div class="container-lg mt-3 mb-5">
                <h3 class="f-black titles1 f-size24 mb-3 text-center mb-5">
                    Por escribirnos, en breve nos pondremos en contacto contigo
                </h3>
                
                <p class="text-center my-5">
                    <img src="assets/images/vm-salud.png" alt="" class="w-25">
                </p>
            </div>
        </section>
        
        
        
          
		<!-- Footer -->
		<footer class="container-fluid fixed-bottom">
			<?php include("layout/footer.php") ?>
		</footer>
          
       
        <script src="assets/js/jquery-3.7.1.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/aos.js"></script>
		<script src="core.js"></script>
		<script>
			AOS.init();
		</script>
    </body>
</html>