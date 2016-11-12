<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
 require_once 'jsonRPCClient.php';
$myExample = new jsonRPCClient('http://79.127.124.82/webservice/');
$param['auth']='86b3ad90c5fb712c600b9a12a8a7cb35';
$param['taskid']=$tskid;

$yy=$myExample->getTaskDetails($param);
print_r($yy['data']['taskid']);
?>
</body>
</html>
