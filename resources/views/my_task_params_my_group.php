<?php 
require_once 'jsonRPCClient.php';
$myExample = new jsonRPCClient('http://79.127.124.82/webservice/');

$param['auth']='86b3ad90c5fb712c600b9a12a8a7cb35';
$param['pagetype']="mygroup";
$param['userid']=3;
$param['page']=0;
$param['count']=30;



$xx_my_group=$myExample->getTasks($param);
$c=$xx_my_group['count'];
if($c%5){
	
$xx_my_group['data']=$xx_my_group['data']+array($c=>array('taskid'=> '',
            'title' => ' ',
            'description' =>' ',
			'type' => ' ',
            'priority' => ' ',
            'closedate' => ' ',
            'submitdate' => ' ',
            'status' => ' '))+array(($c+1)=>array('taskid'=> '',
            'title' => ' ',
            'description' =>' ',
			'type' => ' ',
            'priority' => ' ',
            'closedate' => ' ',
            'submitdate' => ' ',
            'status' => ' '))+array(($c+2)=>array('taskid'=> '',
            'title' => ' ',
            'description' =>' ',
			'type' => ' ',
            'priority' => ' ',
            'closedate' => ' ',
            'submitdate' => ' ',
            'status' => ' '))+array(($c+3)=>array('taskid'=> '',
            'title' => ' ',
            'description' =>' ',
			'type' => ' ',
            'priority' => ' ',
            'closedate' => ' ',
            'submitdate' => ' ',
            'status' => ' ',
            'status' => ' '))+array(($c+4)=>array('taskid'=> '',
            'title' => ' ',
            'description' =>' ',
			'type' => ' ',
            'priority' => ' ',
            'closedate' => ' ',
            'submitdate' => ' ',
            'status' => ' ') )+array(($c+5)=>array('taskid'=> '',
            'title' => ' ',
            'description' =>' ',
			'type' => ' ',
            'priority' => ' ',
            'closedate' => ' ',
            'submitdate' => ' ',
            'status' => ' ') );
			

}
//$xx=$xx+array( 'errcode' =>'','errmsg' =>'','data' => Array('taskid' =>'','title' =>'','description' =>'','type' =>'','priority' =>'','closedate' =>'','submitdate' =>'','status' =>''));

$total_rec=$xx_my_group['count'];

?>