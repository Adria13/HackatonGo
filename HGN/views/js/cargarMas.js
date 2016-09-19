$(function(){
   $(".news").slice(0, 2).show();
	 	$("#cargar").click(function(e){
	       e.preventDefault();
	        $(".news:hidden").slice(0, 2).show();
	        if($(".news:hidden").length == 0){
			     alert("No hay más noticias");
	      }
   })
});