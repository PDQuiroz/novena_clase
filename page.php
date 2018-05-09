<?php include('header.php');?>

<?php
$csv = array_map('str_getcsv', file('https://raw.githubusercontent.com/PDQuiroz/novena_clase/master/finaltop20.csv'));
      array_walk($csv, function(&$a) use ($csv) {
      $a = array_combine($csv[0], $a);
      });
      array_shift($csv);
?>

<main role="main" class="container">
<h1 class="mb-4">Topisimos 20</h1>
<div class="row">

<?php for($t = 0; $t < count($csv); $t++){?>
    <div class="col-sm-4 col-md-3 py-3">
    <h3 class="border-top pt-3">  <?php print($csv[$t]['pelicula'])?></h3>
    
    <figure style="height:268px; overflow:hidden;">
    <a href="<?php print($csv[$t]['link']);?>">
    <img src="
    <?php if ($csv[$t]['image'] == NULL){
        print ("img/gris.png");
    } else {
        print ($csv[$t]['image']);
    };?>" 
</a>
    class="img-fluid">
    </figure>



    <?php if ($csv[$t]['name'] == NULL){
        print '<p>IMDb <a href="'.($csv[$t]['link']).'">'.($csv[$t]['imdb rating']).'</a></p>';
    } else {
        print '<p>IMDb <a href="'.($csv[$t]['link']).'">'.($csv[$t]['imdb rating']).'</a></p>';
    }?>


<?php if ($csv[$t]['brief'] == NULL){
        print '<p> '.($csv[$t]['brief']).'</p>';
    } else {
        print '<p>'.($csv[$t]['brief']).'</a></p>';
    }?>


    </div>
<?php };?>
</div>

</main>
<?php include('footer.php');?>

<!--  para poner un link

    <a href="'.($csv[$t]['url']).'">

-->









