<?php include('header.php')?>
<div class="container">
<div class="row"> 
<div class="col-sm-12 py-5">

<?php
  $la_url = $_GET['url'];
  $json = file_get_contents($la_url);
  $datos = json_decode($json,true);
?>

<h3>PHP+JSON:</h3>

<h5>En esta página vemos el detalle de los indicadores del <?php echo('Smart Citizen Kit '.$datos['id'].' instalado en '.$datos['data']['location']['city'].', '.$datos['data']['location']['country']);?>:</h5>

<pre><code><?php print_r($datos)?></code></pre>

</div>
</div>
</div>
<?php include('footer.php');?>
