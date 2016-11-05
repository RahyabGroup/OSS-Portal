<!DOCTYPE html>
<head>
<script src="js.js" type="text/javascript"></script>
</head>
<body>
<?php
session_start();
require_once 'jsonRPCClient.php';
$myExample = new jsonRPCClient('https://79.127.124.82/webservice/');

$param['auth']='86b3ad90c5fb712c600b9a12a8a7cb35';
$param['pagetype']="my";
$param['userid']=3;
$param['start']=0;
$param['count']=30;
$param['priority']=3;
$param['status']=0;
$param['closedate']=30;
try {
 print_r($myExample->getTasks($param));
}catch(Exception $e)
{
 echo $e->getMessage();
}
exit();
?>