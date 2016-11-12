<?php

function getTaskid($tskid) {
 require_once 'jsonRPCClient.php';
$myExample = new jsonRPCClient('http://79.127.124.82/webservice/');
$param['auth']='86b3ad90c5fb712c600b9a12a8a7cb35';
$param['taskid']=$tskid;

$yy=$myExample->getTaskDetails($param);
if(!empty($yy['data']['target']['type'])&&isset($yy['data']['target']['type'])){
	$s=$yy['data']['target']['type'];
	if($s=='service'){
return ($yy['data']['taskid']);
}
}
else{return (' ');}
} 

function getTaskSubscriberName($tskid) {
 require_once 'jsonRPCClient.php';
$myExample = new jsonRPCClient('http://79.127.124.82/webservice/');
$param['auth']='86b3ad90c5fb712c600b9a12a8a7cb35';
$param['taskid']=$tskid;

$yy=$myExample->getTaskDetails($param);

if(!empty($yy['data']['target']['type'])&&isset($yy['data']['target']['type'])){
	$s=$yy['data']['target']['type'];
if($s=='service'){
	return ($yy['data']['target']['subscriberName']);
}
}
else{return (' ');}

}


function getTaskServicePackageName($tskid) {
 require_once 'jsonRPCClient.php';
$myExample = new jsonRPCClient('http://79.127.124.82/webservice/');
$param['auth']='86b3ad90c5fb712c600b9a12a8a7cb35';
$param['taskid']=$tskid;

$yy=$myExample->getTaskDetails($param);
$s=$yy['data']['target']['type'];
if($s=='service'){
	return ($yy['data']['target']['type']);
}
else{return (' ');}
}

function getTaskServiceUsername($tskid) {
 require_once 'jsonRPCClient.php';
$myExample = new jsonRPCClient('http://79.127.124.82/webservice/');
$param['auth']='86b3ad90c5fb712c600b9a12a8a7cb35';
$param['taskid']=$tskid;

$yy=$myExample->getTaskDetails($param);
if(!empty($yy['data']['target']['type'])&&isset($yy['data']['target']['type'])){
	$s=$yy['data']['target']['type'];
if($s=='service'){
	return ($yy['data']['target']['serviceUsername']);
}
}
else{return (' ');}
}

function getTaskServicePassword($tskid) {
 require_once 'jsonRPCClient.php';
$myExample = new jsonRPCClient('http://79.127.124.82/webservice/');
$param['auth']='86b3ad90c5fb712c600b9a12a8a7cb35';
$param['taskid']=$tskid;

$yy=$myExample->getTaskDetails($param);
if(!empty($yy['data']['target']['type'])&&isset($yy['data']['target']['type'])){
	$s=$yy['data']['target']['type'];
if($s=='service'){
	return ($yy['data']['target']['servicePassword']);
}
}
else{return (' ');}
}
?>