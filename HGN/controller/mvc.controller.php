<?php

require 'model/usuario.class.php';
require 'model/noticia.class.php';
require 'pageGenerator.php';

class mvc_controller{
	function principal(){
		$usuario1= new Usuario;
		if(!isset($_SESSION)){
			if(isset($_POST)){
				if($_POST['tipo']=="Registrarse"){
					//echo 'Registro';
					$usuario1->registrar();
				}elseif($_POST['tipo']=="Login"){
					$usuario1->iniciar();
					/*echo 'Login';*/
				}
			}else{
				session_start();
				echo 'No hay post';
			}
		}else{
			//echo 'Existe sesión';
			//$_SESSION=$_POST;
		}
		session_start();
		/*echo 'SESSION';
		var_dump($_SESSION);*/
		$pagina=load_template('Inicio');
		$css = load_page('../HGN/views/modules/m.style.php');
		$banderas = load_page('../HGN/views/modules/m.banderas.php');
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
		/********************IDIOMA DEL MENÚ**********************/
		if($_GET['lang']=='en'){
			$menu=load_page('../HGN/views/modules/m.enMenu.php');
		}else{
			$menu=load_page('../HGN/views/modules/m.esMenu.php');
		}
		/*******************CONTENIDO***********************/
		//var_dump($lista);
		//var_dump($_GET);
		$contenido='';
		if(sizeof($lista)==0){
			if($_GET['lang']=='en'){
				$contenido=$contenido.'News not found';
			}else{
				$contenido=$contenido.'No se han encontrado noticias';
			}
		}else{
			if(!isset($_GET['pagina'])&sizeof($lista)<5){
				for($i=0;$i<sizeof($lista);$i++){
					$pokeball= $noticias->valoracion($lista[$i]->Id_noticia);
					//var_dump($pokeball);
					$contenido=$contenido.'<div class="news"><a href="index.php?action=noticia&id='.$lista[$i]->Id_noticia.'"><img class="imgNews" src="img/'.$lista[$i]->imagen.'">
					'.$lista[$i]->fecha.'<div class="tituloNews">';
					if($_GET['lang']=='en'){
						$contenido=$contenido.$lista[$i]->title.'</div><div class="cuerpoNews">'.$lista[$i]->text.' </div>';
						$contenido=$contenido.'</a><br><span> Rating news:<span><div class="pball">';
					}else{
						$contenido=$contenido.$lista[$i]->titulo.'</div><div class="cuerpoNews">'.$lista[$i]->texto.' </div>';
						$contenido=$contenido.'</a><br><span> Valoración de la noticia:<span><div class="pball">';
					}
					for($j=0;$j<$pokeball;$j++){
						$contenido=$contenido.'<img height="50px" width="auto" src="img/pokeball.png">';
					}

					$contenido=$contenido.'</div>';
					$contenido=$contenido.'</div></div></content>';
				}	
			}elseif(!isset($_GET['pagina'])&sizeof($lista)>4){
				for($i=0;$i<4;$i++){
					$pokeball= $noticias->valoracion($lista[$i]->Id_noticia);
					//var_dump($pokeball);
					$contenido=$contenido.'<div class="news"><a href="index.php?action=noticia&id='.$lista[$i]->Id_noticia.'"><img class="imgNews" src="img/'.$lista[$i]->imagen.'">
					'.$lista[$i]->fecha.'<div class="tituloNews">';
					if($_GET['lang']=='en'){
						$contenido=$contenido.$lista[$i]->title.'</div><div class="cuerpoNews">'.$lista[$i]->text.' </div>';
						$contenido=$contenido.'</a><br><span> Rating news:<span><div class="pball">';
					}else{
						$contenido=$contenido.$lista[$i]->titulo.'</div><div class="cuerpoNews">'.$lista[$i]->texto.' </div>';
						$contenido=$contenido.'</a><br><span> Valoración de la noticia:<span><div class="pball">';
					}
					for($j=0;$j<$pokeball;$j++){
						$contenido=$contenido.'<img height="50px" width="auto" src="img/pokeball.png">';
					}

					$contenido=$contenido.'</div>';
					$contenido=$contenido.'</div></div>';
					
					
					$contenido=$contenido.'</content>';

				}
				$contenido=$contenido."Pagina: ";
				$numpag=sizeof($lista)/4;
					for($j=0;$j<$numpag;$j++){
						$contenido=$contenido.'<a href="index.php?action=principal&pagina='.($j+1).'""> '.($j+1).' </a>';
					}
			}else{
				//var_dump($_GET['pagina']);
				//echo $_GET['pagina'];
				$inicio=($_GET['pagina']-1)*4;
				$fin=($_GET['pagina'])*4;
				if($fin>sizeof($lista)){
					for($i=$inicio;$i<sizeof($lista);$i++){
						$pokeball= $noticias->valoracion($lista[$i]->Id_noticia);
						//var_dump($pokeball);
						$contenido=$contenido.'<div class="news"><a href="index.php?action=noticia&id='.$lista[$i]->Id_noticia.'"><img class="imgNews" src="img/'.$lista[$i]->imagen.'">
						'.$lista[$i]->fecha.'<div class="tituloNews">';
						if($_GET['lang']=='en'){
							$contenido=$contenido.$lista[$i]->title.'</div><div class="cuerpoNews">'.$lista[$i]->text.' </div>';
							$contenido=$contenido.'</a><br><span> Rating news:<span><div class="pball">';
						}else{
							$contenido=$contenido.$lista[$i]->titulo.'</div><div class="cuerpoNews">'.$lista[$i]->texto.' </div>';
							$contenido=$contenido.'</a><br><span> Valoración de la noticia:<span><div class="pball">';
						}
						for($j=0;$j<$pokeball;$j++){
							$contenido=$contenido.'<img height="50px" width="auto" src="img/pokeball.png">';
						}

						$contenido=$contenido.'</div>';
						$contenido=$contenido.'</div></div>';
						
						
						$contenido=$contenido.'</content>';

					}
					$contenido=$contenido."Pagina: ";
					$numpag=sizeof($lista)/4;
					for($j=0;$j<$numpag;$j++){
						$contenido=$contenido.'<a href="index.php?action=principal&pagina='.($j+1).'""> '.($j+1).' </a>';
					}
				}else{
	
					for($i=$inicio;$i<$fin;$i++){
						$pokeball= $noticias->valoracion($lista[$i]->Id_noticia);
						//var_dump($pokeball);
						$contenido=$contenido.'<div class="news"><a href="index.php?action=noticia&id='.$lista[$i]->Id_noticia.'"><img class="imgNews" src="img/'.$lista[$i]->imagen.'">
						'.$lista[$i]->fecha.'<div class="tituloNews">';
						if($_GET['lang']=='en'){
							$contenido=$contenido.$lista[$i]->title.'</div><div class="cuerpoNews">'.$lista[$i]->text.' </div>';
							$contenido=$contenido.'</a><br><span> Rating news:<span><div class="pball">';
						}else{
							$contenido=$contenido.$lista[$i]->titulo.'</div><div class="cuerpoNews">'.$lista[$i]->texto.' </div>';
							$contenido=$contenido.'</a><br><span> Valoración de la noticia:<span><div class="pball">';
						}
						for($j=0;$j<$pokeball;$j++){
							$contenido=$contenido.'<img height="50px" width="auto" src="img/pokeball.png">';
						}

						$contenido=$contenido.'</div>';
						$contenido=$contenido.'</div></div>';
						
						
						$contenido=$contenido.'</content>';
						
					}
					$contenido=$contenido."Pagina: ";
					$numpag=sizeof($lista)/4;
					for($j=0;$j<$numpag;$j++){
						$contenido=$contenido.'<a href="index.php?action=principal&pagina='.($j+1).'""> '.($j+1).' </a>';
					}
				}			
			}
		}
		//$contenido=$contenido.'<button id="cargar">Ver más noticias</button>';
		/*$contenido=$contenido.'<script>$(function(){
			    $(".news").slice(0, 2).show();
			    $("#cargar").click(function(e){
			        e.preventDefault();
			        $(".news:hidden").slice(0, 2).show();
			        if($(".news:hidden").length == 0){
			            alert("No hay más noticias");
			        }
			    })
			})</script>';*/

		replace_page($contenido,$css,$menu,$pokedex,$banderas,$slider);
	}

	function noticia(){
		session_start();
		$css = load_page('../HGN/views/modules/m.stylenoticia.php');
		$banderas='<a href="index.php?action=noticia&id='.$_GET['id'].'&lang=es"><img class="bandera" src="img/es.jpg"></img></a>
<a href="index.php?action=noticia&id='.$_GET['id'].'&lang=en"><img class="bandera" src="img/en.jpg"></img></a>';
		$slider = load_page('../HGN/views/modules/m.vacio.php');
		$noticia1 = new Noticia;
		//var_dump($noticia1);
		$datos = $noticia1->mostrar($_GET['id']);
		$cat=$noticia1->categoria($_GET['id']);
		$usuario1 = new Usuario;
		//var_dump($_SESSION);
		$usuario=$_SESSION['id'];
		$noticia=$_GET['id'];
		$valor=$_GET['pokeball'];
		if(isset($_GET['pokeball'])){
			$puntua=$usuario1->valorar($usuario,$noticia,$valor);
			//var_dump($puntua);
		}
		//var_dump($datos);
		/********************IDIOMA DEL MENÚ**********************/
		if($_GET['lang']=='en'){
			$menu=load_page('../HGN/views/modules/m.enMenu.php');
		}else{
			$menu=load_page('../HGN/views/modules/m.esMenu.php');
		}
		/*********************POKEDEX******************************/
		if(isset($_SESSION['user'])){
			$pokedex=load_page('../HGN/views/modules/m.logueado.php');
			$pokedex=$pokedex.$_SESSION['user'].'!</span></img></a>';
		}else{
			$pokedex=load_page('../HGN/views/modules/m.pokedex.php');
		}
		/*********************CONTENIDO*********************/
		$i=0;
		$contenido='<div id="date">'.$datos[$i]->fecha.'</div><div id="linea2"></div>';
		$contenido=$contenido.'<div id="CuerpoNoticia"><img id="ImgNoticia" src="img/'.$datos[$i]->imagen.'"></img>';
		if($_GET['lang']==en){
			$contenido=$contenido.'<div id="Titulo">'.$datos[$i]->title.'</div><div id"TextoNotice">'.$datos[$i]->text.'</div>';
			$contenido=$contenido.'<div id="categoria">'.$cat[$i]->nombre_categoria.'</div></div>';
		}else{
			$contenido=$contenido.'<div id="Titulo">'.$datos[$i]->titulo.'</div><div id"TextoNotice">'.$datos[$i]->texto.'</div>';
			$contenido=$contenido.'<div id="categoria">'.$cat[$i]->nombre_categoria.'</div></div>';
		}
	
		///////////////VALORACION/////////////////////////
		$pokeball= $noticia1->valoracion($_GET['id']);
		//var_dump($pokeball);
		if($_GET['lang']==en){
			$contenido=$contenido.'<br> Rating news:<div class="pball">';
			$menu=load_page('../HGN/views/modules/m.enMenu.php');
		}else{
			$contenido=$contenido.'<br> Valoración de la noticia:<div class="pball">';
			$menu=load_page('../HGN/views/modules/m.esMenu.php');
		}
		
		for($j=0;$j<$pokeball;$j++){
			$contenido=$contenido.'<div class="pokeball"><img src="img/pokeball.png"></div>';
		}
		if(isset($_SESSION['user'])){
			if($_GET['lang']==en){
				$contenido=$contenido.'</div> Score the news:<div class="pball"> ';
			}else{
				$contenido=$contenido.'</div> Puntua la noticia:<div class="pball"> ';	
			}
			for($k=0;$k<5;$k++){
			$contenido=$contenido.'<div class="valora"><a class="pokeball" href="index.php?action=noticia&id='.$_GET['id'].'&pokeball='.($k+1).'"><img src="img/pokeball.png"></a>';
			}
			$contenido=$contenido."</div></div></div></div></div></div>";
		}
		$contenido=$contenido.'</div></div></content>';
		//////////////////////////////////////
		$contenido=$contenido.'<div id="linea2"></div></div></content>';

		
		$notrel=$noticia1->relacionadas($datos[$i]->Id_noticia,$cat[$i]->Id_categoria);
		//var_dump($notrel);
		$contenido=$contenido.'<div id="noticiaCategoriaIzq">';
		for($k=0;$k<2;$k++){
			$contenido=$contenido.'<a href="index.php?action=noticia&id='.$notrel[$k]->Id_noticia.'"><img class="imgCategoria" src="img/'.$notrel[$k]->imagen.'">';
			if($_GET['lang']==en){
				$contenido=$contenido.'<div class="tituloCategoria">'.$notrel[$k]->title.'</div>
			<div class="cuerpoCategoria">'.$notrel[$k]->text;
			}else{
				$contenido=$contenido.'<div class="tituloCategoria">'.$notrel[$k]->titulo.'</div>
			<div class="cuerpoCategoria">'.$notrel[$k]->texto;
			}
			
			$contenido=$contenido.'</div><div class="etc">...</div></a>';
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
		replace_page($contenido,$css,$menu,$pokedex,$banderas,$slider);
	}

	function login(){
		session_start();
		//var_dump($_SESSION);
		session_destroy();
		error_reporting(0);
		//var_dump($_SESSION);
		$pagina = load_page('../HGN/views/page.php');
		$css = load_page('../HGN/views/modules/m.style.php');
		if($_GET['lang']=='en'){
			$menu=load_page('../HGN/views/modules/m.enMenu.php');
		}else{
			$menu=load_page('../HGN/views/modules/m.esMenu.php');
		}
		$pokedex=load_page('../HGN/views/modules/m.vacio.php');
		$banderas = load_page('../HGN/views/modules/m.banderas.php');
		if(!isset($_SESSION['user'])){
			$slider = load_page('../HGN/views/modules/m.vacio.php');
		}else{
			$slider = load_page('../HGN/views/modules/m.cerrar.php');
			session_destroy();
		}
		$contenido = load_page('../HGN/views/modules/m.login.php');	
		replace_page($contenido,$css,$menu,$pokedex,$banderas,$slider);
		$usuario1 = new Usuario;
		$usuario1->iniciar();

	}
}

?>