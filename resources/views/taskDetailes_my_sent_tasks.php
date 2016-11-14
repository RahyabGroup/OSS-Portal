<?php
require_once 'jsonRPCClient.php';
$myExample = new jsonRPCClient('http://79.127.124.82/webservice/');

$param['auth']='86b3ad90c5fb712c600b9a12a8a7cb35';
$param['pagetype']="mysenttask";
$param['userid']=3;
$param['page']=0;
$param['count']=30;
$yy=$myExample->getTasks($param);

?>