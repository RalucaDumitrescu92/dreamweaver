<?php
echo file_get_contents("html/header.html");

$users=[];
$file=fopen("users.txt", "r");
while(!feof($file)){
	$line=trim(fgets($file));
	$exploded=explode("/",$line, 2);
	$user=$exploded[0];
	$password=$exploded[1];
	$users[$user]=$password;
}
$uname=$_POST["uname"];
if(isset($users["$uname"])) {
if($_POST["psw"]==$users[$uname]) {
	echo"Welcome $uname!";
	session_start();
	$_SESSION["user"]= $uname;
}
	else{
	echo "Nume nu se potriveste cu parola";
}

} else {
		echo "Nu exista userul";
	}


echo file_get_contents("html/footer.html");