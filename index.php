<?php

include 'navbar1.php';

$query = "select * from pretty";
$result = mysqli_query($mysqli, $query);
$result1 = mysqli_query($mysqli, $query);
$result2 = mysqli_query($mysqli, $query);
?>

<br>

<h1 align = 'center'>TOP VIEWS ON WEEK</h1>

<table class = 'table table-bordered'>
  <tr>
    <td><img src = './img/1.jpg'/ width = '200px' height = '200px'></td>
    <td><img src = './img/2.peg'/ width = '200px' height = '200px'></td>
    <td><img src = './img/3.jpg'/ width = '200px' height = '200px'></td>
    <td><img src = './img/4.jpg'/ width = '200px' height = '200px'></td>
  </tr>

  <tr align = 'center'>
    <?php while ($row = $result -> fetch_assoc()){ ?>
      <td>Name : <?php echo $row['Name'];  ?></td>
    <?php } ?>
  </tr>

  <tr align = 'center'>
    <?php while ($row1 = $result1 -> fetch_assoc()){ ?>
      <td>View : <?php echo $row1['View']; ?></td>
    <?php } ?>
  </tr>

  <tr align = 'center'>
    <?php while ($row2 = $result2 -> fetch_assoc()){ ?>
      <td>Like : <?php echo $row2['p_Like1']; ?></td>
    <?php } ?>
  </tr>

  <tr align = 'center'>
    <td><a href = 'page1.php'><input class = 'btn btn-warning' name = 'button1' type = 'submit' value = 'Profile'/></a></td>
    <td><a href = 'page2.php'><input class = 'btn btn-warning' name = 'button2' type = 'submit' value = 'Profile'/></a></td>
    <td><a href = 'page3.php'><input class = 'btn btn-warning' name = 'button3' type = 'submit' value = 'Profile'/></a></td>
    <td><a href = 'page4.php'><input class = 'btn btn-warning' name = 'button4' type = 'submit' value = 'Profile'/></a></td>
  </tr>

  <tr align = 'center'>
    <td><input class = 'btn btn-primary' name = 'button11' type = 'submit' value = 'Like'/></td>
    <td><input class = 'btn btn-primary' name = 'button22' type = 'submit' value = 'Like'/></td>
    <td><input class = 'btn btn-primary' name = 'button33' type = 'submit' value = 'Like'/></td>
    <td><input class = 'btn btn-primary' name = 'button44' type = 'submit' value = 'Like'/></td>
  </tr>

</table>
