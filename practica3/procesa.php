<!DOCTYPE HTML>
<?php
$precio1 = $_POST['precio1'];
$producto1 = $_POST['producto1'];
$descripcion1 = $_POST['descripcion1'];

$precio2 = $_POST['precio2'];
$producto2 = $_POST['producto2'];
$descripcion2 = $_POST['descripcion2'];

$precio3 = $_POST['precio3'];
$producto3 = $_POST['producto3'];
$descripcion3 = $_POST['descripcion3'];
?>
<html>
    <body>
         <table>
         <tr>
         <th> cantidad</th>
         <th> Descripcion</th>
         <th> Precio </th>
         </tr>
         <tr>
         <th>
         <?php echo $producto1;?>
         </th>
         <th><?php echo $descripcion1;?></th>
         <th><?php $resultado = $precio1 * $producto1; echo $resultado; ?></th>
         </tr>
         <tr>
         <th>
         <p>
         <?php
         echo $producto2;
         ?>
         </p> 
         </th>
         <th>
         <p>
         <?php
         echo $descripcion2;
         ?>
         </p> 
         </th>
         <th>
         <p>
         <?php
                      $resul = $precio2 * $producto2;
                      echo $resul;
         ?>
         </p> 
         </th>
         </tr>
         <tr>
         <th>
         <p>
         <?php
         echo $producto3;
         ?>
         </p> 
         </th>
         <th>
         <p>
         <?php
         echo $descripcion3;
         ?>
         </p> 
         </th>
          <th>
          <p>
          <?php
                      $result = $precio3 * $producto3;
                      echo $result;
          ?>
          </p>
          </th>
          </tr>
          <tr>
          <th></th>
          <th>Subtotal</th>
          <th>
         <p>
         <?php
         $subtotal = $resultado + $resul + $result;
         echo  $subtotal;
          ?>
         </p>
          </th>
          </tr>
          <tr>
          <th></th>
          <th>I.V.A.</th>
          <th>
          <p>
          <?php
          $iva = $subtotal * .16;
          echo $iva; 
          ?>
          </p>
          </th>
          </tr>
          <tr>
          <th></th>
          <th> TOTAL </th>
          <th>
          <p>
          <?php
          $total = $iva + $subtotal;
          echo $total;
          ?>
          </p>
          </th>
          </tr>
    </table>
    </body>

</html>