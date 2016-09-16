<?php

require 'model/usuario.class.php';
require 'model/noticia.class.php';
require 'pageGenerator.php';

class mvc_controller{
	function principal(){
		//$pagina=load_template('Inicio');
		$css = load_page('../HGN/views/modules/m.style.php');
		$slider = load_page('../HGN/views/modules/m.inicio.php');
		$noticias = new Noticia;
		//var_dump($noticias);
		if(isset($_GET['Id_categoria'])){
			$lista = $noticias->listar($_GET['Id_categoria']);
			//echo "categoria";
		}else{
			$lista = $noticias->listartodas();
			//echo "Todas las noticias";
		}
		//var_dump($lista);
		$contenido='';
		if(sizeof($lista)==0){
			$contenido=$contenido.'No se han encontrado noticias';
		}else{
			for($i=0;$i<sizeof($lista);$i++){
				$pokeball= $noticias->valoracion($lista[$i]->Id_noticia);
				//var_dump($pokeball);
				$contenido=$contenido.'<div class="news"><a href="index.php?action=noticia&id='.$lista[$i]->Id_noticia.'"><h3>';
				$contenido=$contenido.$lista[$i]->fecha."<br>";
				$contenido=$contenido.$lista[$i]->titulo."</h3>".$lista[$i]->texto." Fecha: ";
				
				$contenido=$contenido.'<img class="imanot" src="img/'.$lista[$i]->imagen.'"></a><br>Valoración de la noticia:';
				for($j=0;$j<$pokeball;$j++){
					$contenido=$contenido.'<img height="50px" width="auto" src="img/pokeball.png">';
				}
				if(!isset($_SESSION['nombre_usuario'])){
					$contenido=$contenido.'Puntua la noticia: ';
					for($k=0;$k<5;$k++){
					$contenido=$contenido.'<div class="valora"><img height="50px" width="auto" src="img/pokeball.png">';
					}
					$contenido=$contenido."</div></div></div></div></div>";
				}
				$contenido=$contenido.'</div></div></content>';
			}	
		}
		replace_page($contenido,$css,$slider);
	}

	function noticia(){
		$css = load_page('../HGN/views/modules/m.stylenoticia.php');
		$slider = load_page('../HGN/views/modules/m.vacio.php');
		$noticia1 = new Noticia;
		//var_dump($noticia1);
		$datos = $noticia1->mostrar($_GET['id']);
		
		//var_dump($datos);
		$i=0;
		$contenido='<div id="date">Fecha</div><div id="linea2"></div>';
		$contenido=$contenido.'<div id="CuerpoNoticia"><img id="ImgNoticia" src="img/'.$datos[$i]->imagen.'"></img>';
		$contenido=$contenido.'<div id="Titulo">'.$datos[$i]->titulo.'</div><div id"TextoNotice">'.$datos[$i]->texto.'</div>';
		$contenido=$contenido.'<div id="categoria">Categoria</div></div>';
		//Copiando html
		$contenido=$contenido.'<div id="linea2"></div></div>
</content>

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
		</div>';

//
		replace_page($contenido,$css,$slider);
	}

	function login(){
		$pagina = load_page('../HGN/views/page.php');
		$css = load_page('../HGN/views/modules/m.stylenoticia.php');
		$slider = load_page('../HGN/views/modules/m.vacio.php');
		replace_page($contenido,$css,$slider);
		$nusuario1 = new Usuario;
		$usuario1->iniciar();
	}

	function registrarse(){
		$pagina = load_page('../HGN/views/page.php');
		$nusuario1 = new Usuario;
		$usuario1->registrarse();
	}
}

?>