<?PHP
$server = 'localhost';
 
$username = 'root'; 
 
$password = '';
 
$conn = @mysql_connect($server,$username,$password); 

mysql_select_db('chat');

mysql_query("set names utf8");
?>