<?php
  session_start();
  $tekens = array("", "X", "O");
  $O = $tekens[2];
  $X = $tekens[1];
  $Xwins = false;
  $Owins = false;
  $winzetten = 0;

  if(isset($_GET['reset'])){
    session_destroy();
    header("location:les4.php");
  }

  if(isset($_SESSION['vakje1'])){
  $vakje1 = $_SESSION['vakje1'];
  $vakje2 = $_SESSION['vakje2'];
  $vakje3 = $_SESSION['vakje3'];
  $vakje4 = $_SESSION['vakje4'];
  $vakje5 = $_SESSION['vakje5'];
  $vakje6 = $_SESSION['vakje6'];
  $vakje7 = $_SESSION['vakje7'];
  $vakje8 = $_SESSION['vakje8'];
  $vakje9 = $_SESSION['vakje9'];
  $wie = $_SESSION['wie'];
}else{
  $vakje1 = "";
  $vakje2 = "";
  $vakje3 = "";
  $vakje4 = "";
  $vakje5 = "";
  $vakje6 = "";
  $vakje7 = "";
  $vakje8 = "";
  $vakje9 = "";
  $wie = true;
}

  if(isset($_GET['klik'])){
    if($wie){
      $teken = 1;
    }else{
      $teken = 2;
    }
    if ($_GET['klik']==1) {
      $vakje1 = $tekens[$teken];
    }elseif($_GET['klik']==2){
      $vakje2 = $tekens[$teken];
    }elseif($_GET['klik']==3){
      $vakje3 = $tekens[$teken];
    }elseif($_GET['klik']==4){
      $vakje4 = $tekens[$teken];
    }elseif($_GET['klik']==5){
      $vakje5 = $tekens[$teken];
    }elseif($_GET['klik']==6){
      $vakje6 = $tekens[$teken];
    }elseif($_GET['klik']==7){
      $vakje7 = $tekens[$teken];
    }elseif($_GET['klik']==8){
      $vakje8 = $tekens[$teken];
    }elseif($_GET['klik']==9){
      $vakje9 = $tekens[$teken];
    }
  }

  $_SESSION['vakje1'] = $vakje1;
  $_SESSION['vakje2'] = $vakje2;
  $_SESSION['vakje3'] = $vakje3;
  $_SESSION['vakje4'] = $vakje4;
  $_SESSION['vakje5'] = $vakje5;
  $_SESSION['vakje6'] = $vakje6;
  $_SESSION['vakje7'] = $vakje7;
  $_SESSION['vakje8'] = $vakje8;
  $_SESSION['vakje9'] = $vakje9;
  $_SESSION['wie'] = !$wie;

       if ($vakje1 == $X && $vakje2 == $X && $vakje3 == $X) {
         $Xwins = true;
         $winzetten = 123;
       }elseif ($vakje4 == $X && $vakje5 == $X && $vakje6 == $X) {
         $Xwins = true;
         $winzetten = 456;
       }elseif ($vakje7 == $X && $vakje8 == $X && $vakje9 == $X) {
         $Xwins = true;
         $winzetten = 789;
       }elseif($vakje1 == $X && $vakje4 == $X && $vakje7 == $X){
         $Xwins = true;
         $winzetten = 147;
       }elseif($vakje2 == $X && $vakje5 == $X && $vakje8 == $X){
         $Xwins = true;
         $winzetten = 258;
       }elseif($vakje3 == $X && $vakje6 == $X && $vakje9 == $X){
         $Xwins = true;
         $winzetten = 369;
       }elseif($vakje1 == $X && $vakje5 == $X && $vakje9 == $X){
         $Xwins = true;
         $winzetten = 159;
       }elseif($vakje3 == $X && $vakje5 == $X && $vakje7 == $X){
         $Xwins = true;
         $winzetten = 357;
       }

       if ($vakje1 == $O && $vakje2 == $O && $vakje3 == $O) {
         $Owins = true;
         $winzetten = 123;
       }elseif ($vakje4 == $O && $vakje5 == $O && $vakje6 == $O) {
         $Owins = true;
         $winzetten = 456;
       }elseif ($vakje7 == $O && $vakje8 == $O && $vakje9 == $O) {
         $Owins = true;
         $winzetten = 789;
       }elseif($vakje1 == $O && $vakje4 == $O && $vakje7 == $O){
         $Owins = true;
         $winzetten = 147;
       }elseif($vakje2 == $O && $vakje5 == $O && $vakje8 == $O){
         $Owins = true;
         $winzetten = 258;
       }elseif($vakje3 == $O && $vakje6 == $O && $vakje9 == $O){
         $Owins = true;
         $winzetten = 369;
       }elseif($vakje1 == $O && $vakje5 == $O && $vakje9 == $O){
         $Owins = true;
         $winzetten = 159;
       }elseif($vakje3 == $O && $vakje5 == $O && $vakje7 == $O){
         $Owins = true;
         $winzetten = 357;
       }


       ?>
       <html lang="nl" dir="ltr">
         <head>
           <meta charset="utf-8">
           <title></title>
           <style type="text/css">
           html{
             background-color: rgb(220,220,220);
             margin: 50px;
             font-size: 2em;
           }

            table{
              border: 3px solid black;
              background-color: grey;
              border-radius: 5px;
              padding: 5px;
            }

             td{
               width: 75px;
               height: 75px;
               border: 1px solid black;
               text-align: center;
               border-radius: 5px;
               background: rgb(211,211,211);
               font-size: 1.7em;
               color: rgb(75, 0, 250);
               font-family: "Lucida Console";
             }

             .win{
               background: lightgreen;
             }

           </style>
         </head>
         <body>
           <center>
             <table>
               <tr>
                 <td <?php if($winzetten == 123 || $winzetten == 147 || $winzetten == 159){echo "class = 'win'";}?> onclick='window.location.href=`les4.php?klik=1`;'><?php echo $vakje1 ?></td>
                 <td <?php if($winzetten == 123 || $winzetten == 258){echo "class = 'win'";}?> onclick='window.location.href=`les4.php?klik=2`;'><?php echo $vakje2 ?></td>
                 <td <?php if($winzetten == 123 || $winzetten == 369 || $winzetten == 357){echo "class = 'win'";}?> onclick='window.location.href=`les4.php?klik=3`;'><?php echo $vakje3 ?></td>
               </tr>
               <tr>
                 <td <?php if($winzetten == 456 || $winzetten == 147){echo "class = 'win'";}?> onclick='window.location.href=`les4.php?klik=4`;'><?php echo $vakje4 ?></td>
                 <td <?php if($winzetten == 456 || $winzetten == 258 || $winzetten == 159 || $winzetten == 357){echo "class = 'win'";}?> onclick='window.location.href=`les4.php?klik=5`;'><?php echo $vakje5 ?></td>
                 <td <?php if($winzetten == 456 || $winzetten == 369){echo "class = 'win'";}?> onclick='window.location.href=`les4.php?klik=6`;'><?php echo $vakje6 ?></td>
               </tr>
               <tr>
                 <td <?php if($winzetten == 147 || $winzetten == 789 || $winzetten == 357){echo "class = 'win'";}?> onclick='window.location.href=`les4.php?klik=7`;'><?php echo $vakje7 ?></td>
                 <td <?php if($winzetten == 789 || $winzetten == 258){echo "class = 'win'";}?> onclick='window.location.href=`les4.php?klik=8`;'><?php echo $vakje8 ?></td>
                 <td <?php if($winzetten == 369 || $winzetten == 789 || $winzetten == 159){echo "class = 'win'";}?> onclick='window.location.href=`les4.php?klik=9`;'><?php echo $vakje9 ?></td>
               </tr>
             </table>
             <br/>

             <?php
             if($Owins == true){
               echo "O heeft gewonnen!!";
             }
             if($Xwins == true){
               echo "X heeft gewonnen!!";
             } ?>

       <p><a href="?reset">Reset</a></p>
    </center>
   </body>
 </html>
