<!DOCTYPE html>
<html>
<head>
<title>xxx</title>
<link href="bootstrap.min.css" type="text/css" rel="stylesheet" >
<link href="bootstrap-modal-bs3patch.css" type="text/css" rel="stylesheet"> 
<link rel="stylesheet" href="bootstrap.min.css">
<link rel="stylesheet" href="jquery-ui.css">
<script src="jquery-3.1.1.min.js" ></script>
<script src="jquery-ui.min.js"></script>
<link rel="stylesheet" href="pagination.css">
<script src="pagination.js"></script> 
<link rel="stylesheet" href="w3.css">
</head>
<body>


<?php 
///////////////////////////////////////////////////////////////////////////
require_once 'jsonRPCClient.php';
$myExample = new jsonRPCClient('http://79.127.124.82/webservice/');

$param['auth']='86b3ad90c5fb712c600b9a12a8a7cb35';
$param['pagetype']="my";
$param['userid']=3;
$param['page']=0;
$param['count']=30;
try {
$xx=$myExample->getTasks($param);
}catch(Exception $e)
{
 echo $e->getMessage();
}


  include('jdf.php');
     $datepickerFrom=$_REQUEST['datepickerFrom'];
      $datepickerTo=$_REQUEST['datepickerTo'];

	
	$dateArrayFrom=explode("/",$datepickerFrom);
    $jTOgFrom=jalali_to_gregorian($dateArrayFrom[0],$dateArrayFrom[1],$dateArrayFrom[2]);
	if($jTOgFrom[1]<10)
	{$jTOgFrom[0]=$jTOgFrom[0]*10;}
	if($jTOgFrom[2]<10)
	{$jTOgFrom[1]=$jTOgFrom[1]*10;}
    $dateStingFrom=implode("",$jTOgFrom);
	/////////////////////////////////////////////////////////////
	$dateArrayTO=explode("/",$datepickerTo);
    $jTOgTO=jalali_to_gregorian($dateArrayTO[0],$dateArrayTO[1],$dateArrayTO[2]);
	if($jTOgTO[1]<10)
	{$jTOgTO[0]=$jTOgTO[0]*10;}
	if($jTOgTO[2]<10)
	{$jTOgTO[1]=$jTOgTO[1]*10;}
    $dateStingTO=implode("",$jTOgTO);
	
	$c=$xx['count'];
	
	$output='';
$output .="
<table class='table table-bordered' >
<tr>
<th width='8%' style='text-align:center; direction: rtl; font-family: BNAZANIN;'></th>
<th width='30%' style='text-align:center; direction: rtl; font-family: BNAZANIN;'>عنوان</th>
<th width='30%' style='text-align:center; direction: rtl; font-family: BNAZANIN;'>  شناسه Task</th>


</tr>
";

	for($i=0;$i<=($c-1);$i++)
	{
		$dateFromArr=$xx['data'][$i]['submitdate'];
		$submitdate8first=substr($dateFromArr,0,8);
		?> </br>  <?php
		if(($dateStingFrom<=$submitdate8first)&&($dateStingTO>=$submitdate8first))
		{
			$submitdatex=$xx['data'][$i]['submitdate'];
			$taskidx=$xx['data'][$i]['taskid'];
			$titlex=$xx['data'][$i]['title'];
			$output .="
<tr>
<th width='8%' style='text-align:center; direction: rtl; font-family: BNAZANIN;'>".$submitdatex."</th>
<th width='30%' style='text-align:center; direction: rtl; font-family: BNAZANIN;'>".$taskidx."</th>
<th width='30%' style='text-align:center; direction: rtl; font-family: BNAZANIN;'>".$titlex."</th>


</tr>
";
		}
		
	
		
	}
$output .='</table><br /><div align="center">';

echo $output;
	
	
	
///////////////////////////////////////////////////////////////////////////////////////
//include('jdf.php');
     $datepickerFrom=$_REQUEST['datepickerFrom'];
      $datepickerTo=$_REQUEST['datepickerTo'];


//echo($datepickerTo);
//$dateArray=explode("/",$datepickerFrom);
//$jTOg=jalali_to_gregorian($dateArray[0],$dateArray[1],$dateArray[2]);
//$dateSting=implode("",$jTOg);
//print_r($dateSting);




//joda kardan array - tarikh az samte server
$datemiladi='20130308';
$yearDate=substr($datemiladi,0,4);
$monthDate=substr($datemiladi,4,2);
$dayDate=substr($datemiladi,6,2);


//check kardan tarikh ke mosbat bashad (manfi nabashad)

$date1=date_create("$yearDate-$monthDate-$dayDate");
$date2=date_create("2013-12-12");
$diff=date_diff($date1,$date2);
$diffchecker=$diff->format("%R");
if($diffchecker=="-"){
	//print_r("tarikh check");
}

else{//print_r($diff->format("%R"));
}


//for($i=0;...............................)
//if($datemiladi)


?>

</body>
</html>