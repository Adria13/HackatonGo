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
</content>