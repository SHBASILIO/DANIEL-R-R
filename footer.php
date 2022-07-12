	<footer class="footer_01">
		<div class="container">
			<div class="w33">
				<p><img src="_imagens/sign24.png"> Cons. Lafaiete, MG</p>
				<p><a href="https://wa.me/553137628183" target="_blank"><i class="fab fa-whatsapp"></i> (31) 3762 - 8183</a></p>
			</div> <!--w33 01-->

			<div class="w33">
				<h5>DANIEL R | R - REPAROS RESIDENCIAIS</h5>
			</div> <!--w33 02-->

			<div class="w33"> 
			
				<div class="group_icon">
					<p><a href="https://www.instagram.com/danielreparosresidenciais/" target="_blank"><i class="fab fa-instagram"></i> /danielreparosresidenciais</a></p>
				</div>

				<!--
				<div class="group_icon">
					<p><i class="fab fa-facebook-square"></i> /danielreparosresidenciais</p>
				</div>
				-->

			</div> <!--w33 03-->

			<div class="clear"></div>
		</div>	
	</footer>

	<footer class="footer_02">
		<p>Todos os direitos reservados | 2018</p>
		<a href="#"><img class="topo" src="_imagens/arrow-up.png"></a>
	</footer>
	</footer>

	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script>
		$('nav.menu_mobile img').click(function(){
			$('nav.menu_mobile ul').slideToggle();
		});

		jQuery('.voltar-ao-topo').click(function(event) {
                event.preventDefault();
                jQuery('html, body').animate({scrollTop: 0}, 300);
            })
	</script>

	<script>

		var slideIndex = 1;
		showDivs(slideIndex);

	function plusDivs(n) {
	 	showDivs(slideIndex += n);
	}
	
	function showDivs(n) {
 		 var i;
  		var x = document.getElementsByClassName("sobre__single_img");
  		if (n > x.length) {slideIndex = 1}    
 			if (n < 1) {slideIndex = x.length}
 				for (i = 0; i < x.length; i++) {
    			 x[i].style.display = "none";  
 		 		}
 		 x[slideIndex-1].style.display = "block";  
		}

</script>