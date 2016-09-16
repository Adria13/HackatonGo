<html>
<head>
	<meta charset="UTF-8">
	<title>NEW</title>
	<link rel="stylesheet" href="styleNew.css">

</head>
<body>



<header>
	<a href="PagHome.php"><img id="logo" src="img/logo.png"></img></a>
	<a href="PagNew.php"><img class="cat" src="img/actua.png"></img></a>
	<a href="PagNew.php"><img class="cat" src="img/sucesos.png"></img></a>
	<a href="PagNew.php"><img class="cat" src="img/trucos.png"></img></a>
	<a href="loginregistro.php"><img id="dex" src="img/pokedex1.png" onmouseover="this.src='img/dex2.png';" onmouseout="this.src='img/Pokedex1.png';"/></img></a>

	<div id="linea1"></div>	
</header>	

<content>		
		<div id="date"> 
			<?php 
			$time = time();
			echo date("d-m-Y", $time);
			?>
		</div>
	<div id="nombreCategoria">#NOMBRE DE LA CATEGORÍA</div>
	
	<div id="linea2"></div>	
	
	<div id="CuerpoNoticia">

		
	<img id="ImgNoticia" src="img/noticia.jpg">	</img/>

		<div id="FechaNoticia">
			#19-202-2321
		</div>

		<div id="Titulo">
			#ESTO ES UNA PRUEBA DEL TITULO
		</div>

			<div id="Subtitulo">
				#SUBTITULO DE LA NOTICIA
			</div>
				<div id="TextoNotice">
								La nueva actualización de Pokémon Go ha sido bien recibida por los usuarios del videojuego, quienes ahora no viajarán solos, sino acompañadados de uno de sus pokémones favoritos.Algunos lo harán sobre su hombro, otros caminando a su lado, incluso algunos compañeros volarán sobre ellos recolectando caramelos para poder evolucionar o aumentar su poder, aunque esto no sea visual en el mapa. dfhdfhdfhdjdgjdgjfdjddjgdfjdjdjdgjgdjgdj sino acompañadados de uno de sus pokémones favoritos.Algunos lo harán sobre su hombro, otros
				</div>

			<div id="categoria">
				#CATEGORIA 1
			</div>
		</div>	

</content>
		<div id="linea2"></div>	

		<div id="noticiaCategoriaIzq">
			<img id="imgCategoria" src="img/Logo.png">
				
				<div id="tituloCategoria">
					#ESTO ES EL TITULO #ESTO ES EL TITULO#ESTO ES EL 
				</div>

					<div id="subtituloCategoria">
						#SUBTITULO
					</div>
						<div id="cuerpoCategoria">
						
							#CUERPO POR CATEGORIA
						</div>
			</img>
		</div>

		<div id="noticiaCategoriaDer">
			<img id="imgCategoria" src="img/Logo.png">
				<div id="tituloCategoria">
					#ESTO ES EL TITULO#ESTO ES EL TITULO#ESTO ES EL 
				</div>
					<div id="subtituloCategoria">
						#SUBTITULO#SUBTITULO
					</div>
						<div id="cuerpoCategoria">
							#CUERPO POR CATEGORIA
						</div>
			</img>
		</div>

	<footer>
		<p>Hackathon GO NEWS | <a href="http://goo.gl/x4tE2M">Florida Universitaria</a></p>

	</footer>


</body>
</html>
