<?php include('header.php');?>

<?php
$csv = array_map('str_getcsv', file('https://raw.githubusercontent.com/graciacov/clase_12/gh-pages/data.csv'));
      array_walk($csv, function(&$a) use ($csv) {
      $a = array_combine($csv[0], $a);
      });
      array_shift($csv);
?>

<main role="main" class="container">
<h1 class="mb-4">Top 10 Spotify Songs</h1>
<div class="row">

<?php for($t = 0; $t < count($csv); $t++){?> <!--consulta linea por linea -->
    <div class="col-sm-4 py-3" >
    <h3 class="border-top pt-3"> <?php print($csv[$t]['title'])?></h3>

    
    <figure style="height:170px; overflow:hidden;">
    
    <img src="
    <?php if ($csv[$t]['foto'] == NULL){
        print ("img/gris.png");
    } else {
        print ($csv[$t]['foto']);
    };?>" 

    class="img-fluid">
    </figure>

    <?php if ($csv[$t]['artist'] == NULL){
        print '<h5><a  target="_blank" href="'.($csv[$t]['video']).'">'.($csv[$t]['album']).' </a></h5>';
    } else {
        print '<h5><a  target="_blank" href="'.($csv[$t]['video']).'">'.($csv[$t]['artist']).'</a></h5>';
    }?>


        
        <table class="table">
        <tbody>
            <tr>
              <th scope="row">Ranking</th>
              <td><?php print($csv[$t]['rank'])?></td>
            </tr>
            <tr>
              <th scope="row">Album</th>
              <td><?php print($csv[$t]['album'])?></td>
            </tr>
            <tr>
              <th scope="row">Streams</th>
              <td><?php print($csv[$t]['streams'])?></td>
            </tr>
            <tr>
              <th scope="row">Fecha</th>
              <td><?php print($csv[$t]['publication date'])?></td>
            </tr>
            
            
        </tbody>
        </table>


    </div>
<?php };?>
</div>

</main>
<?php include('footer.php');?>