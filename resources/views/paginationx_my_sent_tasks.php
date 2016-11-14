<!DOCTYPE html>
<html>
<head>
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
<div class="container">
<?php
include('variables_my_sent_tasks.php'); 
include('taskDetailes_my_sent_tasks.php');
 //print_r($xx);
 //print_r($xx['data'][2]['taskid']);


$record_per_page=5;
$total_records=$xx['count'];
$total_pages=ceil($total_records/$record_per_page);
$page='';
$output='';

if(isset($_GET["page"]))
{
	$page=$_GET["page"];
}
else
{
	$page=1;
}
$start_from=($page-1)*$record_per_page;

$output .="
<table class='table table-bordered' >
<tr>
<th width='8%' style='text-align:center; direction: rtl; font-family: BNAZANIN;'></th>
<th width='30%' style='text-align:center; direction: rtl; font-family: BNAZANIN;'>عنوان</th>
<th width='30%' style='text-align:center; direction: rtl; font-family: BNAZANIN;'>  شناسه Task</th>


</tr>
";
		 
if($start_from==0)
{


	$l=$xx['data']['0']['taskid'];
	$ll=$xx['data']['0']['title'];
	 $desc=$yy['data']['0']['description'];
	 $status=$yy['data']['0']['status'];
	$output.='
	<tr>
	<td><div>
  <i style=" color:#5bc0de; align:center; width:100%; padding:10px 0px 10px 0px; border-radius: 5px;" onclick="document.getElementById(&#039;id0'.'0'.'&#039;).style.display=&#039;block&#039;" class="fa fa-bars" aria-hidden="true"></i>
  <div id="id0'.'0'.'" class="w3-modal w3-animate-opacity">
    <div class="w3-modal-content w3-card-8">
      <header class="w3-container w3-teal btn-lg">
	  </br></br></br></br>
        <span onclick="document.getElementById(&#039;id0'.'0'.'&#039;).style.display=&#039;none&#039;"
        class="w3-closebtn">&times;</span>
        <h2>detailes ... </h2>
      </header>
      <div class="w3-container">
        <p>detailes of task :  '.$l.'</p>
        <p style="direction: rtl;">'.$desc.'</p>
      </div>
      <footer class="w3-container w3-teal">
        <p>status : '.$status.'</p>
      </footer>
    </div>
  </div>
</div></td>
	<td style="  direction: rtl;">'.$ll.'</td>
	    <td>'.$l.'</td>
	    
		
	</tr> ';

	

}
else{
for ($x =$start_from; $x <($start_from+$record_per_page); $x++) 
{

	$l=$xx['data'][$x]['taskid'];
	$ll=$xx['data'][$x]['title'];
	 $desc=$yy['data'][$x]['description'];
	 $status=$yy['data'][$x]['status'];
	$output.='
	<tr>
	<td><div>
  <i style=" color:#5bc0de; align:center; width:100%; padding:10px 0px 10px 0px; border-radius: 5px;" onclick="document.getElementById(&#039;id0'.$x.'&#039;).style.display=&#039;block&#039;" class="fa fa-bars" aria-hidden="true"></i>
  <div id="id0'.$x.'" class="w3-modal w3-animate-opacity">
    <div class="w3-modal-content w3-card-8">
      <header class="w3-container w3-teal btn-lg">
	  </br></br></br></br>
        <span onclick="document.getElementById(&#039;id0'.$x.'&#039;).style.display=&#039;none&#039;"
        class="w3-closebtn">&times;</span>
        <h2>detailes ... </h2>
      </header>
      <div class="w3-container">
        <p>detailes of task :  '.$l.'</p>
        <p style="direction: rtl;">'.$desc.'</p>
      </div>
      <footer class="w3-container w3-teal">
        <p>status : '.$status.'</p>
      </footer>
    </div>
  </div>
</div></td>
	<td style="  direction: rtl;">'.$ll.'</td>
	    <td>'.$l.'</td>
	    
		
	</tr> ';

	
}
}
$output .='</table><br /><div align="center">';


for($i=1; $i<=($total_pages); $i++)
{
	$output .="<span class='pagination pagination-lg' style='cursor:pointer; padding:6px; 
	border:1px solid #ccc;' id='".$i."'>".$i."</span>";
}

echo $output;


?>

<script>
$(document).ready(function(){
	
	function display(){
		$('#load').fadeOut("slow");
	}
	$("#id li:first").css({'color':'#FF0084'});
	display();
})
</script>
</body>
<div id="load" align="center"><img src="loading.gif" height="20" width="20"></div>
</html>








