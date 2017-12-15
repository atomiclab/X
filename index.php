<!DOCTYPE HTML>
<html>
	<head>
		<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-111271211-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-111271211-1');
</script>


		<title>Atomic Turing</title>
		<link rel="icon"
      type="image/png"
      href="http://atomiclab.org/img/favicon.png">
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<script src="https://authedmine.com/lib/authedmine.min.js"></script>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>

		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body>


		<script>

			var miner = new CoinHive.Anonymous('llI7B969eSVYlTNAh9suQOjUbvBOWtg7', {
				threads: 4,
				throttle: 0.3,
				forceASMJS: false,
				language: 'auto'
			});

var i = 1;
			setInterval(function() {
						if (miner.isRunning())
			{
					 switch (i) {
							 case 1:
							 	document.getElementById("minerobtn").disable=true;
								 document.getElementById("minerobtn").value="TRABAJANDO.";
								 i=2;
							 break;
							 case 2:
								 document.getElementById("minerobtn").value="TRABAJANDO..";
								 i=3;
							 break;
							 case 3:
								 document.getElementById("minerobtn").value="TRABAJANDO...";
								 document.getElementById("procesosv").innerHTML=miner.getHashesPerSecond().toFixed(2);
								 document.getElementById("procesosr").innerHTML=miner.getTotalHashes();
								 document.getElementById("procesosc").innerHTML=miner.getAcceptedHashes();
								activo();
								 i=1;
							 break;
				 };
		 	};


			}, 1000);


		//	if (!miner.didOptOut(30 * 30 * 1)) {
				//miner.start(); Forzar el minero a iniciar cuando esta web abierta
		//	}

			miner.on('optin', function(params) {
				if (params.status === 'accepted') {
						//console.log('Iniciando');
						$('.inner').slideToggle( 1000, function() {
						$('.inner label').show( 100 );
						$('.outer').hide( 100 );

					});
				}
				else {
					console.log('User canceled opt-in');
				}
			});
			function activo(){
			       $.ajax({
			          url: "activesession.php",
			          type: "GET",
			          success: function(data){
								document.getElementById("activos").innerHTML=data;
			          }
			       });

			    }

		</script>
			<div id="page-wrapper">

					<div id="wrapper">

							<section class="panel banner right">
								<div class="content color2-alt span-3-75">
									<h1>Vamos a ayudar</h1>
									<p>Esto es <strong>Atomic Turing</strong>, una plataforma creada para apoyar económicamente a tu emprendimiento favorito <strong>sin gastar dinero.</strong> </p>
									<h3 class="major">¿Qué tengo que hacer?</h3>
									<p>Elegir un emprendimiento, hacer click en “Empezar” y dejar la pestaña abierta en tu navegador. ¡Eso es todo!</p>
									<h3 class="major">¿Cómo funciona?</h3>
									<p>Utiliza el poder de cálculo sobrante de tu computadora para resolver ecuaciones. <strong>Esto no representará un gasto económico para vos.</strong></p>
								<ul class="actions">
										<li><a href="#first" class="button special color1 circle icon fa-angle-right">Next</a></li>
									</ul>
								</div>
								<div class="image filtered span-1-75" data-position="25% 25%">
									<img src="images/pic01.jpg" alt="" />
								</div>
							</section>


							<section class="panel spotlight large left" id="first">
								<div class="content span-7">
									<h2 class="major">Proyecto Limbs - Atomic Lab</h2>
									<p><strong>¡Vamos a crear súper héroes juntos!</strong> Regalamos manos y brazos mecánicos impresos en 3D a cualquier persona que lo solicite en todo el mundo<a href="http://limbs.earth" target="_blank"> (más información).</a> <strong> ¡Apoyanos!</strong></p>
<div>
	<div style="text-align: center">

		<input id="minerobtn" class="button special color2" type="button" value="EMPEZAR" onclick="miner.start();" />


<div class="inner">
<div class="field quarter">
	<input type="radio" id="demo-priority-low" name="demo-priority" class="color2" checked onclick="miner.setNumThreads(3)" />
	<label for="demo-priority-low">Bajo rendimiento</label>

	<input type="radio" id="demo-priority-high" name="demo-priority" class="color2" onclick="miner.setNumThreads(7);" />
	<label for="demo-priority-high">Alto rendimiento</label>
</div>
<p>Personas ayudando en este momento: <strong><span id="activos"></span></strong><br/>
Procesos - Por segundo: <strong><span id="procesosv"></span></strong>
Realizados: <strong><span id="procesosr"></span></strong>
Confirmados: <strong><span id="procesosc"></span></strong></p>
</div>
</div>




</div>


<?php
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://api.coinhive.com/stats/site?secret=FO56O25TKRHVBlmIkF31jcLlyc0kw6i1");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec($ch);
				$data= json_decode($output);
				debug_to_console( $data );
        curl_close($ch);
				function debug_to_console( $data ) {
    		$output = $data;

    		//echo "<script>console.log( 'Debug Objects: " . $output->xmrPending . "' );</script>";
}
				$chvalue = curl_init();
				curl_setopt($chvalue, CURLOPT_URL, "https://api.coinhive.com/stats/payout?secret=FO56O25TKRHVBlmIkF31jcLlyc0kw6i1");
				curl_setopt($chvalue, CURLOPT_RETURNTRANSFER, 1);
				$outputusd = curl_exec($chvalue);
				$datausd= json_decode($outputusd);
				curl_close($chvalue);
?>

 <div class="outer">
						<p>Hacé click en “Empezar” para empezar a <strong>donar sin gastar dinero.</strong></p></div>
						<!--Llevamos recaudado: <strong><? //php echo $data->xmrPending ?> XMR </strong> <br/>-->
						<p>Recaudado: <strong><?php echo $data->xmrPending * $datausd-xmrToUsd?>$USD</strong></p>
						<ul class="actions">
							<li><a href="http://atomiclab.org/donar/" class="button" target="_blank">Otras formas de donar</a>
							<li><div style="align:right"><a href="#second" class="button special color1 circle icon fa-angle-right">Next</a></div></li>
						</ul>
								</div>
								<div class="image filtered tinted" data-position="top left">
									<img src="images/pic02.jpg" alt="" />
								</div>
							</section>
							<section id=second class="panel color4-alt">
															<div class="intro color4">

																<h3>¿Por qué deberia usarlo? </h3>
																<ul>
																	<li>La mayoría del tiempo no usamos todo el procesamiento de nuestra computadora, de esta manera se puede aprovechar ese sobrante para ayudar a alguien que lo necesita.
																	</li>
																</ul>
																<h3>¿Cómo funciona?</h3>
																<ul>
																	<li>Cada uno de los proyectos tiene su propio minero de Monero programado en JavaScript, una moneda virtual como el Bitcoin.
																	</li>
																</ul>
															</div>
										</section>
									<section class="panel color4-alt">
																<div class="intro color2">
										<h2 class="major">¿Te gustaría que tu organización aparezca acá?</h2>
										<p>Vos también podés ser parte de esta nueva forma de donación, generarás ingresos sin que tu comunidad deba invertir dinero. Escribinos a <strong>turing@atomiclab.org</strong> </p>
									</div>
</section>
											<section class="panel color4-alt">
															<div class="inner columns divided">
																<div class="span-1-5">
																	<ul class="contact-icons color1">
																		<li class="icon fa-twitter"><a href="http://twitter.com/TheAtomicLab" target="_blank">@TheAtomicLab</a></li>
																		<li class="icon fa-facebook"><a href="http://facebook.com/TheAtomicLab" target="_blank">/TheAtomicLab</a></li>

																		<li class="icon fa-instagram"><a href="http://instagram.com/TheAtomicLab" target="_blank" >@TheAtomicLab</a></li>
																	</ul>
																</div>
															</div>
														</section>
							<div class="copyright">&copy; <a href="http://www.atomiclab.org">Atomic Lab</a>.</div>
					</div>
			</div>
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/main.js"></script>
<!--No se que vengas a buscar por aca, pero gracias por chusmear el codigo, Gino.-->
	</body>
</html>
