<!DOCTYPE html> 
<html lang="en">
     <head> <meta charset="UTF-8"> <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
     <title>registrar venta</title>
    </head> 
    <body> 
        <form action="registrar ventas2.php" method="post" enctype="application/x-www-form-urlencoded"> 
            <label for="usuario">usuario:</label><br>
             <input type="text" id="usuario" name="usuario"> <br><br> 
             <label for="producto">Producto:</label><br> 
             <select name="producto" id="producto">
                <option value="Split de pared.">Split de pared.</option>
                <option value="Split de techo.">Split de techo.</option> 
                <option value="Split portátil.">Split portatil.</option> 
                <option value="Sistemas de aire acondicionado centralizado.">Sistemas de aire acondicionado centralizado.</option>
                <option value="Unidades de ventana.">Unidades de ventana.</option>
                <option value="Sistemas de aire acondicionado inverter.">Sistemas de aire acondicionado inverter.</option>
                <option value="Sistemas de aire acondicionado con bomba de calor.">Sistemas de aire acondicionado con bomba de calor.</option>
                <option value="Aires acondicionados comerciales e industriales.">Aires acondicionados comerciales e industriales.</option> 
            </select> </form> <br> <br> 
            <label for="cantidad">Cantidad:</label><br>
            <input type="number" id="cantidad" name="cantidad"><br> <br> 
            <input type="submit" value="Registrar venta"><br> 
</body> </html>