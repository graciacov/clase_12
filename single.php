<?php include('header.php');?>
<main role="main" class="container">
<?php
$la_url = $_GET['video'];
$nuevojson = file_get_contents($la_url);
$json_data = json_decode($nuevojson,true);
?>
	

<main role="main">

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          	<div class="carousel-item active">
            	<div class="container">
		            <div class="carousel-caption text-left">
		                <h1>Visualizaciones de las canciones mas escuchadas</h1>
		                
		                	<div id="content">
		         <div class="input-group mb-3">
					<div class="input-group-prepend" >
					<span class="input-group-text" id="basic-addon-1"><i class="fa fa-search"></i></span>
					</div>	 
							  
                <select class="custom-select" id="input" value="" name="s">
                <option selected>Escoge una Canción </option>
                <option value="1">One Dance | Drake</option>
                <option value="2">Lean On | Major Lazer</option>
                <option value="3">Sorry | Justin Bieber</option>
                <option value="4">Love Yourself | Justin Bieber</option>
                <option value="5">Thinking Out Loud | Ed Sheeran </option>
                </select>
                <div class="input-group-append" >
                  <button class="btn btn-outline-secondary" type="submit">Search</button>
                  </form>
                </div>

                </div>
                			<input type="file" id="thefile" accept="audio/*" role="button"/>	
							 <canvas id="canvas"></canvas>
							 <audio id="audio" controls></audio>
							</div>
		            </div>
            	</div>
          	</div>
        </div>
    </div>
        <script>
                function setup() {
                var button = select('#thefile');
                button.mousePressed(play);

              }

                function play() {
                  if (input.value() == 1){
                  var audio = new Audio('onedance.mp3'); 
                  } else if (input.value() == 2){
                  var audio = new Audio('leanon.mp3'); 
                  } else if (input.value() == 3){
                   var audio = new Audio('sorry.mp3'); 
                  }else if (input.value() == 4){
                   var audio = new Audio('love.mp3'); 
                  }else if (input.value() == 5){
                   var audio = new Audio('loud.mp3'); 
                  }
                  audio.play();

                }

                
              </script>
      

	</main>

</body>

<h3 class="mb-4"><?php print($json_data[properties][title])?></h3>
<code>
<pre>
<?php print_r($json_data);?>
</pre>
</code>

</main>
<?php include('footer.php');?>