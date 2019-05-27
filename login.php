<?php

include 'navbar1.php';

?>

<br><br><br><br><br><br>
<form action="login.php" method="post">
  <table width = '300px' align = 'center'>
    <tr>
      <td>
        <div class="container">
          <label for="username">Username</label>
          <input class = 'form-control' name = 'textbox1' id = 'p1' type = 'text' autofocus required placeholder = 'Username : '/>
          <label for="password">Password</label>
          <input class = 'form-control' name = 'textbox2' id = 'p1' type = 'password' required placeholder = 'Password : '/>
          <input class = 'btn btn-primary btn-lg btn-block' name = 'button1' type = 'submit' value = 'Login'/>
        </div>
      </td>
    </tr>
  </table>
</form>

<?php

if (isset($_POST['button1'])){
  $user = $_POST['textbox1'];
  $pass = $_POST['textbox2'];

  $query = "select * from member where Username = '".$user."' and Password = '".$pass."'";
  $result = mysqli_query($mysqli, $query);

  $query1 = "select * from pretty";
  $result1 = mysqli_query($mysqli, $query1);

  $row = mysqli_fetch_array($result);
  $row1 = mysqli_fetch_array($result1);

  if ($row){
    $_SESSION['id'] = $row['id'];
    $_SESSION['Username'] = $row['Username'];
    $_SESSION['View'] = $row1['View'];
    $_SESSION['Like'] = $row1['p_Like'];

    header('location: home.php');
  }else{
    echo "<p align = 'center'>who</p>";
  }
}


?>
