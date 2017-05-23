<?

$inputuser = $_POST['user'];
$inputpass = $_POST['pass'];


if ($inputuser == "doran" && $inputpass == "123456"){
	
echo "welcome doran";

header('location: index.html');

} else {
	
	echo "Not user found"
}




?>