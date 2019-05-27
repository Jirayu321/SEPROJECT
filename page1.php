<?php

include 'navbar2.php';

$name1 = 'กิ่งไผ่';
$n1 = $_SESSION['Username'];

$query = "select * from member where Username = '$n1'";
$result = mysqli_query($mysqli, $query);

$q1 = "update pretty set View = View+1 where Name = '$name1'";
$r1 = mysqli_query($mysqli, $q1);

$q2 = "update member set View1 = View1+1 where Username = '$n1'";
$r2 = mysqli_query($mysqli, $q2);

if ($row1 = $result -> fetch_assoc()){
  if ($row1['View1'] == 1){
    $timer1 = $_POST['timespent'];
    if ($timer1 >= 10){
      $q3 = "update pretty set View = View+1 where Name = '$name1'";
      $r3 = mysqli_query($mysqli, $q3);
      $timer1 = 0;
    }
  }
}
?>
<body onLoad="window.setTimeout('getSecs()',1)">
  <form method = 'POST' action = 'page1.php'>
    <input name = 'timespent'/>
    <script type="text/javascript">
      alert('ดูแล้ว');
    </script>
  </form>
</body>

<script>
startday = new Date();
clockStart = startday.getTime();
function initStopwatch()
{
 var myTime = new Date();
        var timeNow = myTime.getTime();
        var timeDiff = timeNow - clockStart;
        this.diffSecs = timeDiff/1000;
        return(this.diffSecs);
}
function getSecs()
{
        var mySecs = initStopwatch();
        var mySecs1 = ""+mySecs;
        mySecs1= mySecs1.substring(0,mySecs1.indexOf("."));
        document.forms[0].timespent.value = mySecs1
        window.setTimeout('getSecs()',1000);
}
</script>
