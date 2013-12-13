<?PHP
  include('login.php');
  $login = new login(array(
    'database' => 'std',
    'table'    => 'tm_usuarios',
    'username' => 'root',
    'password' => 'jorge'
  ));
?>