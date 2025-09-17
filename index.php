<?php
require_once 'database.php';

// Protección modificada para permitir acceso directo solo a index.php
$archivo_actual = basename(__FILE__);
if ($archivo_actual == basename($_SERVER["SCRIPT_FILENAME"]) && $archivo_actual != 'index.php') {
    die("Acceso denegado.");
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="robots" content="index">
    <title>JAZMIN VEGA</title>
    <script src="codexone.js"></script>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="templatemo-style.css">
</head>
<body >
    <!-- Page Loader -->
    <div id="loader-wrapper">
        <div id="loader"></div>

        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>

    </div>


   
    <nav>
        <div class="container-fluid">
                
            <div class="social-buttons-container">
                
                <a href="https://www.tiktok.com/@jazminde.la.vega?_t=ZM-8xhy3VfecHV&_r=1" target="_blank" class="social-link tiktok-link auto-hide-text" aria-label="TikTok">
                    <svg class="social-icon" viewBox="0 0 24 24" fill="white">
                        <path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.10-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"/>
                    </svg>
                    <span class="link-text">TikTok</span>
                </a>
                
            </div>   
        </div>
    </nav>

      

	<img src="cv1.jpg" alt="Ejemplo" class="ajuste">
    <img src="cv2.jpg" alt="Ejemplo" class="ajuste">
    <img src="cv3.jpg" alt="Ejemplo" class="ajuste">

    <style>
    .ajuste {
        max-width: 100%;
        height: auto;
        display: block;
        margin: 0 auto; /* centra la imagen */
		background-size: cover;
		-webkit-user-select: none;
		user-select: none;
    }
    </style>

	

    <script src="plugins.js"></script>
    <script>
        $(window).on("load", function() {
            $('body').addClass('loaded');
        });
    </script>

	<script>
	  document.addEventListener('contextmenu', e => e.preventDefault());
	  document.addEventListener('keydown', e => {
		// bloquear Ctrl+S, Ctrl+U, Ctrl+Shift+I, F12
		if ((e.ctrlKey && (e.key === 's' || e.key === 'u')) ||
			(e.ctrlKey && e.shiftKey && e.key.toLowerCase() === 'i') ||
			e.key === 'F12') e.preventDefault();
	  });
	</script>
		
</body>
</html>




