<?php 
    include_once("koneksi.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    Berhasil Registrasi
    <form action="" method="post">
    <button type="submit" name="btnlogout">Logout</button>
    </form>
<?php 

session_start();
$mysqli = new mysqli("localhost", "kevin", "123", "database_ppdb"); 
if(isset($_POST['btnlogout'])){
$_SESSION['usernames'] = "";
unset($_SESSION['session_email']);
session_unset();
session_destroy();
$sqli = mysqli_query($mysqli,"SELECT * FROM log_users ORDER BY id DESC LIMIT 1");
$print_data = mysqli_fetch_row($sqli);
$sql = "DELETE FROM log_users ORDER BY id=$print_data[0] "; 
if($mysqli->query($sql) === true){ 
    echo "Record was deleted successfully."; 
} else{ 
    echo "ERROR: Could not able to execute $sql. "  
                                         . $mysqli->error; 
} 
header("location:index.php");
};

?>
</body>
</html>