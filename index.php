<!DOCTYPE HTML>
<html>
	<head>
		<title>Atom X</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<script src="https://authedmine.com/lib/simple-ui.min.js" async></script>
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body>

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Wrapper -->
					<div id="wrapper">

						<!-- Panel (Banner) -->
							<section class="panel banner right">
								<div class="content color2-alt span-3-75">
									<h1 class="major">Vamos a ayudar</h1>
									<p>Esto es <strong>Atom X</strong>, una pagina/concepto creado para poder apoyar a tu emprendimiento favorito sin necesidad de donar dinero.</p><p>Solamente selecciona que emprendimiento queres apoyar y deja la pestaña abierta, tu computadora hará cómputos que generará dinero para ellos. </p>
									<ul class="actions">
										<li><a href="#first" class="button special color1 circle icon fa-angle-right">Next</a></li>
									</ul>
								</div>
								<div class="image filtered span-1-75" data-position="25% 25%">
									<img src="images/pic01.jpg" alt="" />
								</div>
							</section>

						<!-- Panel (Spotlight) -->
							<section class="panel spotlight large left" id="first">
								<div class="content span-7">
									<h2 class="major">Proyecto Limbs - Atomic Lab</h2>
									<p>Vamos a crear súper héroes juntos! Gracias a la impresión 3D creamos podemos imprimir manos y brazos mecánicos que ayudan a realizar cualquier tarea cotidiana. Apoyanos! </p>

<div>

								<div class="coinhive-miner"
										style="width: 100%; height: 175px"
										data-key="llI7B969eSVYlTNAh9suQOjUbvBOWtg7"
										data-autostart="true"
										data-whitelabel="true"
										data-background="#fafafa"
										data-text="#000"
										data-action="#1e9ee0"
										data-graph="#1e9ee0"
										data-threads="4"
										data-throttle="0.1">
										<em>Cargando...</em>
									</div>
									<p>Personas haciendo la misma tarea: <script language="JavaScript">var fhs = document.createElement('script');var fhs_id = "5533771";
var ref = (''+document.referrer+'');var pn =  window.location;var w_h = window.screen.width + " x " + window.screen.height;
fhs.src = "//freehostedscripts.net/ocounter.php?site="+fhs_id+"&e1=&e2=&r="+ref+"&m=0&wh="+w_h+"&a=1&pn="+pn+"";
document.head.appendChild(fhs);
document.write("<span id='o_"+fhs_id+"'></span>");
</script>
</p>
</div>


<?php
        // create curl resource
        $ch = curl_init();

        // set url
        curl_setopt($ch, CURLOPT_URL, "https://api.coinhive.com/stats/site?secret=FO56O25TKRHVBlmIkF31jcLlyc0kw6i1");

        //return the transfer as a string
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        // $output contains the output string
        $output = curl_exec($ch);
				$data= json_decode($output);
				debug_to_console( $data );

        // close curl resource to free up system resources
        curl_close($ch);

				function debug_to_console( $data ) {
    		$output = $data;

    		echo "<script>console.log( 'Debug Objects: " . $output->xmrPending . "' );</script>";
}


				// create curl resource
				$chvalue = curl_init();

				// set url
				curl_setopt($chvalue, CURLOPT_URL, "https://api.coinhive.com/stats/payout?secret=FO56O25TKRHVBlmIkF31jcLlyc0kw6i1");

				//return the transfer as a string
				curl_setopt($chvalue, CURLOPT_RETURNTRANSFER, 1);

				// $output contains the output string
				$outputusd = curl_exec($chvalue);
				$datausd= json_decode($outputusd);

				// close curl resource to free up system resources
				curl_close($chvalue);

?>

<p class="juntado">Llevamos recaudado: <?php echo $data->xmrPending ?> XMR </p>
<p class="usd">En USD: <?php echo $data->xmrPending * $datausd-xmrToUsd?> USD</p>
								</div>
								<div class="image filtered tinted" data-position="top left">
									<img src="images/pic02.jpg" alt="" />
								</div>
							</section>





							<section class="panel color4-alt">
															<div class="intro color4">

																<h3>¿Por qué deberia usarlo? </h3>
																<ul>
																	<li>Muchas computadoras tienen sobrante de poder de procesamiento, nos pareció ideal darles uso.
																	</li>
																</ul>
																<h3>¿Cómo funciona?</h3>
																<ul>
																	<li>Cada uno de los proyectos tiene su propio minero de "Monero" programado en JavaScript, una moneda virtual como el bitcoin.
																	</li>
																</ul>															</div>
															<div class="inner columns divided">

																<div class="span-1-5">
																	<ul class="contact-icons color1">
																		<li class="icon fa-twitter"><a href="http://twitter.com/TheAtomicLab">@TheAtomicLab</a></li>
																		<li class="icon fa-facebook"><a href="http://facebook.com/TheAtomicLab">/TheAtomicLab</a></li>

																		<li class="icon fa-instagram"><a href="http://instagram.com/TheAtomicLab">@TheAtomicLab</a></li>
																	</ul>
																</div>
															</div>
														</section>
						<!-- Copyright -->
							<div class="copyright">&copy; <a href="http://www.atomiclab.org">Atomic Lab</a>.</div>

					</div>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
