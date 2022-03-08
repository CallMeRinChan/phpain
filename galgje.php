<?php
$ant1 = $_GET['ant1'] ?? "_";
$ant2 = $_GET['ant2'] ?? "_";
$ant3 = $_GET['ant3'] ?? "_";
$ant4 = $_GET['ant4'] ?? "_";
$ant5 = $_GET['ant5'] ?? "_";

$woord1 = "h";
$woord2 = "o";
$woord3 = "n";
$woord4 = "d";
$woord5 = "t";

$gekozen = "";


  if (isset($_GET['gokje'])) {
    if($_GET['gokje']==$woord1) {
    $ant1 = $woord1;
  }
  $gekozen = $_GET['gekozen'].$_GET['gokje'];
}
if (isset($_GET['gokje'])) {
  if($_GET['gokje']==$woord2) {
  $ant2 = $woord2;
}
$gekozen = $_GET['gekozen'].$_GET['gokje'];
}
if (isset($_GET['gokje'])) {
  if($_GET['gokje']==$woord3) {
  $ant3 = $woord3;
}
$gekozen = $_GET['gekozen'].$_GET['gokje'];
}
if (isset($_GET['gokje'])) {
  if($_GET['gokje']==$woord4) {
  $ant4 = $woord4;
}
$gekozen = $_GET['gekozen'].$_GET['gokje'];
}
if (isset($_GET['gokje'])) {
  if($_GET['gokje']==$woord5) {
  $ant5 = $woord5;
}
$gekozen = $_GET['gekozen'].$_GET['gokje'];
}
 ?>

    <br/>
     <?php echo $ant1 . " " . $ant2 . " " . $ant3 . " " . $ant4 . " " . $ant5; ?>
    <br/><br/>
    <form action="les2.php" method="get">
      <input type="text" name="gokje" maxlength="1"/>
      <input type="hidden" name="ant1" value="<?php echo $ant1 ?>">
      <input type="hidden" name="ant2" value="<?php echo $ant2 ?>">
      <input type="hidden" name="ant3" value="<?php echo $ant3 ?>">
      <input type="hidden" name="ant4" value="<?php echo $ant4 ?>">
      <input type="hidden" name="ant5" value="<?php echo $ant5 ?>">
      <input type="hidden" name="gekozen" value="<?php echo $gekozen; ?>"/>
      <input type="submit" value = "Click me daddy!"/>
    </form>

<?php
if(($ant1 == $woord1) && ($ant2 == $woord2) && ($ant3 == $woord3) && ($ant4 == $woord4) && ($ant5 == $woord5)){
?> <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTrUpjs-mnJJi38zcDjROIB8JBLpzImo45kZvquzrfphCvE1w_sIOJSMKyEugXgDR5Vszw&usqp=CAU"/> <?php
}
z
 ?>
