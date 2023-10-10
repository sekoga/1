
<?
$log = "";
$pass = "";
if(isset($_GET['login'])) $log = $_GET['login'];
if (isset($_GET['password'])) $pass = $_GET['password'];

require 'lp.php';

if($log == $login and $pass==$password) echo"Доступ разрешён!";
else echo "Дотсуп запрещен!";
?>



