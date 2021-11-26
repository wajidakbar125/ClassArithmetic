<html>
<head>
<title>
data save in file
</title>
</head>
<body>
<form method="post">
<label>enter name</label> <br>
<input type="text" name="text"><br>
<label>enter password</label> <br>
<input type="text" name="password"><br><br>
<button type="submit" name="submit">submit</button>
</form>

<?php
$txt="how are u";
echo "hello world" .$txt. "brother";
?>
</body>
</html>
<?php
if(isset($_POST['text']) && ($_POST['password']))
{
$name=$_POST['text'];
$pass=$_POST['password'];
$file=fopen('text.txt','a');
fwrite($file,$name);
fwrite($file,$pass);
fclose($file);

}
?>
