<?php 
require_once 'jsonRPCClient.php';
$myExample = new jsonRPCClient('http://79.127.124.82/webservice/');

$param['auth']='86b3ad90c5fb712c600b9a12a8a7cb35';
$param['pagetype']="my";
$param['userid']=3;
$param['page']=0;
$param['count']=30;



$xx=$myExample->getTasks($param);
$c=$xx['count'];
if($c%5){
	
$xx['data']=$xx['data']+array($c=>array('taskid'=> '',
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
$output='';
//$xx=$xx+array( 'errcode' =>'','errmsg' =>'','data' => Array('taskid' =>'','title' =>'','description' =>'','type' =>'','priority' =>'','closedate' =>'','submitdate' =>'','status' =>''));
if($c>0){
$output .='<h4 align="center"> search </h4>';
$output .='<div class="table-responsive"> 
   <table class="table table bordered">
   <tr>
       <th>c</th>
	   <th>cc</th>
	   <th>ccc<th>
   </tr>';
   $i=0;
if(isset($_REQUEST['search'])&&(!empty($_REQUEST['search'])))
{
	$req=$_REQUEST['search'];
}
else
{$req="";}
   
   while($i<=$c)
   {
	   
	$a=strtolower($req);
	$len=strlen($a);
	foreach($req as $name){
		if($stristr($a,substr($name,0,$len))){
			if($search===""){
				$search=$name;
			}
			else
			{$search .=",$name";}
		  }	
		}
	
	
	  $output .='
   <tr>
       <th>'.$xx['data'][$i]['taskid'].'</th>
	   <th>'.$xx['data'][$i]['title'].'</th>
	   <th>'.$xx['data'][$i]['taskid'].'<th>
   </tr>
   ';
   $i++;
   }
   echo ($output);
}
else
{
	echo ("no data found");
}

?>