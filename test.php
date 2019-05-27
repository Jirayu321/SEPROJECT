<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
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
        var mySecs1 = ""+ mySecs;
        mySecs1= mySecs1.substring(0,mySecs1.indexOf("."));
        document.forms[0].timespent.value = mySecs1
        window.setTimeout('getSecs()',1000);
}
</script>
</head>
<body onLoad="window.setTimeout('getSecs()',1)">
<form>
    <input name = 'timespent'>
</form>
</center>
</body>
</html>
