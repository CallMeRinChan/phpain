     <form class="berekening" action="rekenmachine.php" method="post">
         Voer hier een getal in!:  <input type="number" name="input1" /><br />
         Voer hier een getal in!: <input type="number" name="input2" /><br />
         <input type="submit" name="submit" value="Tel op!" />
     </form>

<?php
$input1 = intval($_POST['input1']);
$input2 = intval($_POST['input2']);
$result = $input1 + $input2;

echo $result;
 ?>
