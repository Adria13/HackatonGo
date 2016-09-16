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
	function replace_page($contenido,$css,$slider){//Reemplaza los # por el contenido que se desea
		error_reporting(0);
		$pagina = load_page('../HGN/views/page.php');
	//	session_start();//Iniciando la sesión aquí no hace falta iniciarla en cada página
		$pagina = replace_content('/\#CSS\#/ms' ,$css , $pagina);	
		$pagina = replace_content('/\#SLIDER\#/ms' ,$slider , $pagina);	
		$pagina = replace_content('/\#CONTENIDO\#/ms' ,$contenido , $pagina);
		view_page($pagina);
	}
	function replace_content($in='/\#CONTENIDO\#/ms', $out,$pagina){//Reemplaza el contenido
		 return preg_replace($in, $out, $pagina);	 	
	}
?>