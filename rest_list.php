<!DOCTYPE html>
<html>
<head>
    <title>Restaurants | Gourmet</title>
    <link type="text/css" rel="stylesheet" href="css/rest_list.css" >
</head>
<body>


    <div class="header">
      <div class="header_top" >
        <div class="left_buttons">
          <a href="./food_list.php" class="header_hover" >Cuisines</a>
          <a href="./rest_list.php">Restaurant</a>
        </div>
        <div class="right_buttons">
          <?php
            include('login_buttons.php');
          ?>
        </div>
      </div>
    </div>
    <div class="headerbg"></div>
    <center>
        <div class="bodyhead">
        </div>
    <?php
        include("PhpMysqlConnectivity.php");
        $result=mysqli_query($link,"SELECT DISTINCT a.id, a.name, a.address, a.mobile_no, a.star, a.city, a.veg_nonveg, a.open_time, a.close_time FROM restaurant a WHERE  a.city='jabalpur' AND CAST(CURRENT_TIME() AS time) BETWEEN a.open_time AND a.close_time ORDER BY a.star DESC;");

        if($result){
          if(!$result->num_rows == 0){
            echo "<h1 style='color:white;text-shadow:0px 2px 7px #000;font-family: \"Roboto\", sans-serif;margin:5px;margin-top:50px;'>Open Currently</h1>";
            if (!isset($_SESSION['u_id'])) {
              echo "<h4 style='color:rgb(255, 137, 2);;text-shadow:0px 0px 7px rgba(255, 236, 11, 0.75);font-family: \"Roboto\", sans-serif;margin:5px;margin-top:10px;'>For booking a table, please login first.</h4>";
            }
          }
        }

        while($row = mysqli_fetch_array($result)) {

            $nm=$row["name"];
            $url = urlencode($nm);
            echo '<div class="bodytrbg"><div style="background:rgba(50,50,50,0.8);border-radius: 5px;"><a href=./search.php?search_type=restaurant&keyword='.$url.'>';
            echo '<table border=0 cellpadding=2>';
            echo '<tr>';
            echo '<td  class="field name">'.$row["name"].'  ('.$row["veg_nonveg"].')</td>';
            $piclen = 40*$row["star"];
            echo '<td class="field starttd" ><div class="star" style="width:'.$piclen.'px;"></div></td>';
            echo '<td class="field open">'.$row["open_time"].' - '.$row["close_time"].'</td>';
            echo '</tr><tr>';
            echo '<td colspan=2 class="field address">&nbsp;&nbsp;'.$row["address"].', '.$row["city"].'</td>';

            if (isset($_SESSION['u_id'])) {
              echo '<td rowspan=2 ><a class="styledanchor" href="./booking.php?r_id='.$row['id'].'">Book Table</a></td>';
            }

            echo '</tr><tr>';
            echo '<td colspan=2 class="field mobile">&nbsp;&nbsp;'.$row["mobile_no"].'</td>';
            echo '</tr>';

            echo '</table>';
            echo '</a></div></div>';
        }
        $result=mysqli_query($link,"SELECT DISTINCT a.id, a.name, a.address, a.mobile_no, a.star, a.city, a.veg_nonveg, a.open_time, a.close_time FROM restaurant a WHERE  a.city='jabalpur' AND CAST(CURRENT_TIME() AS time) NOT BETWEEN a.open_time AND a.close_time ORDER BY a.star DESC;");

        if($result && !$result->num_rows == 0){
          echo "<h1 style='color:white;text-shadow:0px 2px 7px #000;font-family: \"Roboto\", sans-serif;margin:5px;margin-top:50px;'>Closed Now</h1>";
        }


        while($row = mysqli_fetch_array($result)){

            $nm=urlencode($row["name"]);
            echo '<div class="bodytrbg"><div style="background:rgba(50,50,50,0.8);border-radius: 5px;"><a href=search.php?search_type=restaurant&keyword='.$nm.'>';
            echo '<table border=0 cellpadding=2>';
            echo '<tr>';
            echo '<td  class="field name">'.$row["name"].'  ('.$row["veg_nonveg"].')</td>';
            $piclen = 40*$row["star"];
            echo '<td class="field starttd" ><div class="star" style="width:'.$piclen.'px;"></div></td>';
            echo '<td class="field open">'.$row["open_time"].' - '.$row["close_time"].'</td>';
            echo '</tr><tr>';
            echo '<td colspan=2 class="field address">&nbsp;&nbsp;'.$row["address"].', '.$row["city"].'</td>';

            echo '</tr><tr>';
            echo '<td colspan=2 class="field mobile">&nbsp;&nbsp;'.$row["mobile_no"].'</td>';
            echo '</tr>';

            echo '</table>';
            echo '</a></div></div>';
        }
    ?>
<br><br>
</center>
 </body>
 </html>
