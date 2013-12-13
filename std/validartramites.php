<?php
require 'libs/Smarty.class.php';
require 'generales/classes.php';

  include('config.php');
  if (!$login->logged())
  {
    header("location: index.php");
    die();
  }

$idcur=$_REQUEST[idcur];
$idt=$_REQUEST[idt];

echo $idt;

$idu=$_SESSION['cf_login_id'];
$cu=$_SESSION['cf_login_username']; 
$nu=$_SESSION['cf_login_privilege'];
$tu=$_SESSION['cf_login_lastactive'];
$gu=$_SESSION['cf_login_grupousuario'];

$smarty = new Smarty; 
$smarty->compile_check =true; 
$smarty->debugging = true;

$ctramites=new ctramites;

$listatramite=$ctramites->listatramite();
while($row = mysql_fetch_assoc($listatramite)){
	$idtramite[]=$row['idtramite'];
	$nombretramite[]=$row['nombretramite'];
}

$smarty->assign ("idu", $idu);
$smarty->assign ("cu", $cu);
$smarty->assign ("nu", $nu);
$smarty->assign ("tu", $tu);
$smarty->assign ("gu", $gu);


$smarty->assign ("option_valuesit",$idtramite);
$smarty->assign ("option_outputit",$nombretramite);

#$smarty->assign ("nombretramite", $nombretramite);
#$smarty->assign ("idtramite", $idtramite);

$smarty->assign ("hea","header.tpl");
$smarty->assign ("menusu","menusuperior.tpl");
$smarty->assign ("menu","menutramites.tpl");
$smarty->assign ("inc","validartramites.tpl");
$smarty->assign ("foo","footer.tpl");
$smarty->display('interface.tpl');
?>