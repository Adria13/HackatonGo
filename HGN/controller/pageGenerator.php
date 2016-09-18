<?php
	function load_template($title='Sin Titulo'){//Carga el titulo de la página
		$pagina = replace_content('/\#TITULO\#/ms' ,$title , $pagina);	
		return $pagina;
	}
    function load_page($page){//Carga la página
		return file_get_contents($page);
	}
	function view_page($html){//Muestra la página
		echo $html;
	}
	function replace_page($contenido,$css,$menu,$pokedex,$banderas,$slider){//Reemplaza los # por el contenido que se desea
		error_reporting(0);
		$pagina = load_page('../HGN/views/page.php');
		session_start();//Iniciando la sesión aquí no hace falta iniciarla en cada página
		$pagina = replace_content('/\#CSS\#/ms' ,$css , $pagina);
		$pagina = replace_content('/\#MENU\#/ms' ,$menu , $pagina);
		$pagina = replace_content('/\#BANDERAS\#/ms' ,$banderas , $pagina);		
		$pagina = replace_content('/\#SLIDER\#/ms' ,$slider , $pagina);	
		$pagina = replace_content('/\#CONTENIDO\#/ms' ,$contenido , $pagina);
		/*echo 'SESSION del page generator';
		var_dump($_SESSION);*/
		if(isset($_SESSION['user']) and $_SESSION['estado'] == 'Logueado') { 
		    $pokedex=load_page('../HGN/views/modules/m.logueado.php');
			$pokedex=$pokedex.$_SESSION['user'].'!<br>Pulse aquí para<br>cerrar sesión</span></img></a>';
		    //echo "Con sesión";
		}else{   
		    $pokedex=load_page('../HGN/views/modules/m.pokedex.php');
		     //echo "Sin sesión";
		}
		$pagina = replace_content('/\#POKEDEX\#/ms' ,$pokedex , $pagina);
		view_page($pagina);
	}
	function replace_content($in='/\#CONTENIDO\#/ms', $out,$pagina){//Reemplaza el contenido
		 return preg_replace($in, $out, $pagina);	 	
	}
?>