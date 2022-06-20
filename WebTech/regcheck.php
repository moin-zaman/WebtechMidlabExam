
<?php 

$id = $_REQUEST['id'];
$password = $_REQUEST['pass'];
$user_name = $_REQUEST['name'];
$con_password =$_REQUEST['cp'];

if ($id == null || $password == null || $user_name == null||$con_password== null) {
    echo "invalid id/username/password <br>";
}else{
    $data = $id."|".$password."|".$user_name."\r\n";
    $file = fopen('user.txt', 'a');
    fwrite($file, $data);

    
            header('location: sign.php ');	
        
    }
?>               