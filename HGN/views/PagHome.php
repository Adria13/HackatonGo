<html>
<head>
	<meta charset="UTF-8">
	<title>Home</title>
	<link rel="stylesheet" href="style.css">

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
	<img id="pika" src="img/Pikachu.png"></img>
	<img id="slider" src="img/movil.png">
		<img class="sliderImgs" src="img/1.jpg"></img>
		<img class="sliderImgs" src="img/2.jpg"></img>
		<img class="sliderImgs" src="img/3.jpg"></img>
		<img class="sliderImgs" src="img/4.png"></img>
		<img class="sliderImgs" src="img/5.jpeg"></img>	
		<img class="sliderImgs" src="img/6.jpg"></img>
		<img class="sliderImgs" src="img/7.png"></img>
	</img>
<script>
	var myIndex = 0;
	carousel();

	function carousel() {
	    var i;
	    var x = document.getElementsByClassName("sliderImgs");
	    for (i = 0; i < x.length; i++) {
	       x[i].style.display = "none";
	    }
	    myIndex++;
	    if (myIndex > x.length) {myIndex = 1}
	    x[myIndex-1].style.display = "block";
	    setTimeout(carousel, 4000);//segundos 
	}
</script>
	<img id="char" src="img/Charizard.png"></img>
	<div id="part2">

		<div class="news"></div>


	</div>



</content>

	<footer>
		<p>Hackathon GO NEWS | <a href="http://www.pokemongo.com/es-es/">Pokemon GO official web</a></p>
	</footer>


</body>
</html>