<?php include('header.php');?>
<?php $aqui = "En estos lugares encontraras las mejores librerías de Nueva York"?>
<div class= "inner cover">

<h2 class="cover-heading">Librerias de Nueva York</h2>
<p class="lead"> En estos lugares encontraras las mejores librerías según su zona</p>
</div>

<div>

<?php
$csv = array_map('str_getcsv', file('data/public_libraries.csv'));

array_walk($csv, function(&$a) use ($csv) {$a = array_combine($csv[0], $a);});
   array_shift($csv);
   // ahora puedo crear un bucle "for(){}" que examine lo asignado como contenido a la variable $csv
   // lo que esté contenido en la variable se repetirá tantas veces como arreglos tenga la variable $csv
   for($a = 0; $a < $total = count($csv); $a++){?>

<article class="row">
   <hr>
  <div class="col-md-12">

 <h3><?php echo($a+1);?>. <?php echo $csv[$a]['Location Name'];?></h3>
          <h5>En el estado de <?php echo $csv[$a]['State'];?> </h5>
          <h6> Puedes llamar a <?php echo $csv[$a]['Phone Number'];?></h6>
          <p> Se encuentra en <?php echo $csv[$a]['Address'];?></p>

</div>
</article>

<?php };?>

<aside>
    <div class="alert alert-danger">
    <pre><code><?php print_r($csv);?></code></pre>
  </aside>

</div>
<?php include('footer.php');?>
