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
				
				$contenido=$contenido.'<img class="imanot" src="img/'.$lista[$i]->imagen.'"></a><br>Valoración de la noticia:<div class="pball">';
				for($j=0;$j<$pokeball;$j++){
					$contenido=$contenido.'<img height="50px" width="auto" src="img/pokeball.png">';
				}
				$contenido=$contenido.'</div>';
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
		$cat=$noticia1->categoria($_GET['id']);
		//var_dump($datos);

		$i=0;
		$contenido='<div id="date">'.$datos[$i]->fecha.'</div><div id="linea2"></div>';
		$contenido=$contenido.'<div id="CuerpoNoticia"><img id="ImgNoticia" src="img/'.$datos[$i]->imagen.'"></img>';
		$contenido=$contenido.'<div id="Titulo">'.$datos[$i]->titulo.'</div><div id"TextoNotice">'.$datos[$i]->texto.'</div>';
		$contenido=$contenido.'<div id="categoria">'.$cat[$i]->nombre_categoria.'</div></div>';
		///////////////VALORACION/////////////////////////
		$pokeball= $noticia1->valoracion($lista[$i]->Id_noticia);
		//var_dump($pokeball);
		$contenido=$contenido.'<br>Valoración de la noticia:<div class="pball">';
		for($j=0;$j<$pokeball;$j++){
			$contenido=$contenido.'<img height="50px" width="auto" src="img/pokeball.png">';
		}
		if(!isset($_SESSION['nombre_usuario'])){
			$contenido=$contenido.'</div>Puntua la noticia:<div class="pball"> ';
			for($k=0;$k<5;$k++){
			$contenido=$contenido.'<div class="valora"><img height="50px" width="auto" src="img/pokeball.png">';
			}
			$contenido=$contenido."</div></div></div></div></div></div>";
		}
		$contenido=$contenido.'</div></div></content>';
		//////////////////////////////////////
		$contenido=$contenido.'<div id="linea2"></div></div></content>';

		
		$notrel=$noticia1->relacionadas($cat[$i]->Id_categoria);
		//var_dump($notrel);
		$contenido=$contenido.'<div id="noticiaCategoriaIzq">';
		for($k=0;$k<2;$k++){
			$contenido=$contenido.'<img class="imgCategoria" src="img/'.$notrel[$k]->imagen.'">
			<div class="tituloCategoria">'.$notrel[$k]->titulo.'</div>
			<div class="cuerpoCategoria">'.$notrel[$k]->texto;
			$contenido=$contenido.'</div><div class="etc">...</div>';
			$pokeball= $noticia1->valoracion($notrel[$k]->Id_noticia);
			//var_dump($pokeball);
			$contenido=$contenido.'<div class="pball">';
			for($j=0;$j<$pokeball;$j++){
				$contenido=$contenido.'<img height="50px" width="auto" src="img/pokeball.png">';
			}
			$contenido=$contenido.'</div>';
			if($k==0){
				$contenido=$contenido.'</img></div><div id="noticiaCategoriaDer">';
			}
		}
		$contenido=$contenido.'</img></div>';
		//
		
		//var_dump($cat);
		//$contenido=$contenido.$cat[$i]->nombre_categoria;
		
//
		replace_page($contenido,$css,$slider);
	}

	function login(){
		$pagina = load_page('../HGN/views/page.php');
		$css = load_page('../HGN/views/modules/m.style.php');
		$slider = load_page('../HGN/views/modules/m.vacio.php');
		$contenido = load_page('../HGN/views/modules/m.login.php');
		replace_page($contenido,$css,$slider);
		$nusuario1 = new Usuario;
		//$usuario1->iniciar();
	}
}

?>