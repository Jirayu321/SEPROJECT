<?php

include 'navbar2.php';

$_SESSION['score1'] = 0;

$query = "select * from pretty";
$result = mysqli_query($mysqli, $query);
$result1 = mysqli_query($mysqli, $query);
$result2 = mysqli_query($mysqli, $query);

$name1 = 'กิ่งไผ่';
$name2 = 'พิชานา อยู่สุข';
$name3 = 'โบวี่';
$name4 = 'เบสท์';

if (isset($_POST['button1'])){
  header('location: page1.php');
}

if (isset($_POST['button2'])){
  header('location: page2.php');
}

if (isset($_POST['button3'])){
  header('location: page3.php');
}

if (isset($_POST['button4'])){
  header('location: page4.php');
}

if (isset($_POST['button11'])){
  $n1 = $_SESSION['Username'];
  $q1 = "select * from member where Username = '$n1'";
  $r1 = mysqli_query($mysqli, $q1);
  $fr1 = mysqli_fetch_array($r1);
  if ($fr1['p_Like1'] == 0){
    $query1 = "update pretty set p_Like1 = p_Like1+1 where Name = '$name1'";
    $result111 = mysqli_query($mysqli, $query1);

    $query2 = "update member set p_Like1 = p_Like1+1 where Username = '$n1'";
    $result222 = mysqli_query($mysqli, $query2);

  }else{
    echo "<script>alert('ท่านกดถูกใจไปแล้ว');</script>";
  }
}

if (isset($_POST['button22'])){
  $n1 = $_SESSION['Username'];
  $q1 = "select * from member where Username = '$n1'";
  $r1 = mysqli_query($mysqli, $q1);
  $fr1 = mysqli_fetch_array($r1);
  if ($fr1['p_Like2'] == 0){
    $query1 = "update pretty set p_Like1 = p_Like1+1 where Name = '$name2'";
    $result111 = mysqli_query($mysqli, $query1);

    $query2 = "update member set p_Like2 = p_Like2+1 where Username = '$n1'";
    $result222 = mysqli_query($mysqli, $query2);

  }else{
    echo "<script>alert('ท่านกดถูกใจไปแล้ว');</script>";
  }
}

if (isset($_POST['button33'])){
  $n1 = $_SESSION['Username'];
  $q1 = "select * from member where Username = '$n1'";
  $r1 = mysqli_query($mysqli, $q1);
  $fr1 = mysqli_fetch_array($r1);
  if ($fr1['p_Like3'] == 0){
    $query1 = "update pretty set p_Like1 = p_Like1+1 where Name = '$name3'";
    $result111 = mysqli_query($mysqli, $query1);

    $query2 = "update member set p_Like3 = p_Like1+1 where Username = '$n1'";
    $result222 = mysqli_query($mysqli, $query2);

  }else{
    echo "<script>alert('ท่านกดถูกใจไปแล้ว');</script>";
  }
}

if (isset($_POST['button44'])){
  $n1 = $_SESSION['Username'];
  $q1 = "select * from member where Username = '$n1'";
  $r1 = mysqli_query($mysqli, $q1);
  $fr1 = mysqli_fetch_array($r1);
  if ($fr1['p_Like4'] == 0){
    $query1 = "update pretty set p_Like1 = p_Like1+1 where Name = '$name4'";
    $result111 = mysqli_query($mysqli, $query1);

    $query2 = "update member set p_Like4 = p_Like4+1 where Username = '$n1'";
    $result222 = mysqli_query($mysqli, $query2);

  }else{
    echo "<script>alert('ท่านกดถูกใจไปแล้ว');</script>";
  }
}
?>

<br>
<body onLoad="window.setTimeout('getSecs()',1)">
<form method = 'POST' action = 'home.php'>
  <input class = 'form-control' name = 'timespent' type = 'number'/>


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
      <td><input class = 'btn btn-warning' name = 'button1' type = 'submit' value = 'Profile'/></td>
      <td><input class = 'btn btn-warning' name = 'button2' type = 'submit' value = 'Profile'/></td>
      <td><input class = 'btn btn-warning' name = 'button3' type = 'submit' value = 'Profile'/></td>
      <td><input class = 'btn btn-warning' name = 'button4' type = 'submit' value = 'Profile'/></td>
    </tr>

    <tr align = 'center'>
      <td><input class = 'btn btn-primary' name = 'button11' type = 'submit' value = 'Like'/></td>
      <td><input class = 'btn btn-primary' name = 'button22' type = 'submit' value = 'Like'/></td>
      <td><input class = 'btn btn-primary' name = 'button33' type = 'submit' value = 'Like'/></td>
      <td><input class = 'btn btn-primary' name = 'button44' type = 'submit' value = 'Like'/></td>
    </tr>

  </table>
</form>
