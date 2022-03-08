<?php
  $tekens = array("", "X", "O");
  $O = $tekens[2];
  $X = $tekens[1];

  $vakje1 = $tekens[rand(0,2)];
  $vakje2 = $tekens[rand(0,2)];
  $vakje3 = $tekens[rand(0,2)];
  $vakje4 = $tekens[rand(0,2)];
  $vakje5 = $tekens[rand(0,2)];
  $vakje6 = $tekens[rand(0,2)];
  $vakje7 = $tekens[rand(0,2)];
  $vakje8 = $tekens[rand(0,2)];
  $vakje9 = $tekens[rand(0,2)];


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
     </style>
   </head>
   <body>
     <center>
       <table>
         <tr>
           <td><?php echo $vakje1 ?></td>
           <td><?php echo $vakje2 ?></td>
           <td><?php echo $vakje3 ?></td>
         </tr>
         <tr>
           <td><?php echo $vakje4 ?></td>
           <td><?php echo $vakje5 ?></td>
           <td><?php echo $vakje6 ?></td>
         </tr>
         <tr>
           <td><?php echo $vakje7 ?></td>
           <td><?php echo $vakje8 ?></td>
           <td><?php echo $vakje9 ?></td>
         </tr>
       </table>
       <br/>
       <?php

       if ($vakje1 == $X && $vakje2 == $X && $vakje3 == $X) {
         echo "X heeft gewonnen!!";
       }elseif ($vakje4 == $X && $vakje5 == $X && $vakje6 == $X) {
         echo "X heeft gewonnen!!";
       }elseif ($vakje7 == $X && $vakje8 == $X && $vakje9 == $X) {
         echo "X heeft gewonnen!!";
       }elseif($vakje1 == $X && $vakje4 == $X && $vakje7 == $X){
         echo "X heeft gewonnen!!";
       }elseif($vakje2 == $X && $vakje5 == $X && $vakje8 == $X){
         echo "X heeft gewonnen!!";
       }elseif($vakje3 == $X && $vakje6 == $X && $vakje9 == $X){
         echo "X heeft gewonnen!!";
       }elseif($vakje1 == $X && $vakje5 == $X && $vakje9 == $X){
         echo "X heeft gewonnen!!";
       }elseif($vakje3 == $X && $vakje5 == $X && $vakje7 == $X){
         echo "X heeft gewonnen!!";
       }

       if ($vakje1 == $O && $vakje2 == $O && $vakje3 == $O) {
         echo "O heeft gewonnen!!";
       }elseif ($vakje4 == $O && $vakje5 == $O && $vakje6 == $O) {
         echo "O heeft gewonnen!!";
       }elseif ($vakje7 == $O && $vakje8 == $O && $vakje9 == $O) {
         echo "O heeft gewonnen!!";
       }elseif($vakje1 == $O && $vakje4 == $O && $vakje7 == $O){
         echo "O heeft gewonnen!!";
       }elseif($vakje2 == $O && $vakje5 == $O && $vakje8 == $O){
         echo "O heeft gewonnen!!";
       }elseif($vakje3 == $O && $vakje6 == $O && $vakje9 == $O){
         echo "O heeft gewonnen!!";
       }elseif($vakje1 == $O && $vakje5 == $O && $vakje9 == $O){
         echo "O heeft gewonnen!!";
       }elseif($vakje3 == $O && $vakje5 == $O && $vakje7 == $O){
         echo "O heeft gewonnen!!";
       }
       ?>
    </center>
   </body>
 </html>
