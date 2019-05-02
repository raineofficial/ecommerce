
	<div class="block">
		<h4 class="title">
			<span class="pull-left"><span class="text">Fashion Quotes</span></span>
		</h4>
			<p><div id="changeText"><i>Life is too short to wear boring clothes.</i><br><br><strong> - Anonymous</strong></div></p>
	</div>	


	<script type="text/javascript">
		var text = ["<i>You can have everything you want in your life if you dress for it!</i><br><br><strong> - Edith Head</strong>", 
					"<i>No matter how you feel, get up, dress up and show up.</i><br><br><strong> - Regina Brett</strong>", 
					"<i>A woman makes an outfit her own with accessories.</i><br><br><strong> - Oscar De La Renta</strong>",
					"<i>Life isn't perfect, but your bikinis can be.</i><br><br><strong> - LSpace Swim</strong>",
					"<i>Life is too short to wear boring clothes.</i><br><br><strong> - Anonymous</strong>"];
		var counter = 0;
		var elem = document.getElementById("changeText");
		var inst = setInterval(change, 5000);

		function change() {
		  elem.innerHTML = text[counter];
		  counter++;
		  if (counter >= text.length) {
		    counter = 0;
		  }
		}
	</script>
