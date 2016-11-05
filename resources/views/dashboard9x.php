<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
require_once 'jsonRPCClient.php';
$myExample = new jsonRPCClient('http://79.127.124.82/webservice/');

$param['auth']='86b3ad90c5fb712c600b9a12a8a7cb35';
$param['pagetype']="my";
$param['userid']=3;
$param['page']=0;
$param['count']=30;
try {

 $xx=$myExample->getTasks($param);
 print_r($xx);
 //print_r($xx['count']);
 ?></br><?php
 //print_r($xx['data'][1]['taskid']);

 //print_r($xx['data'][2]['taskid']);

}catch(Exception $e)
{
 echo $e->getMessage();
}
exit();

?>
</body>
</html>
