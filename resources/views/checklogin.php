<!DOCTYPE html>
<head>
<script src="js.js" type="text/javascript"></script>
</head>
<body>
<?php
session_start();
$_SESSION['x']=' ';
          $username=$_REQUEST['username'];
          $password=$_REQUEST['password'];
		  require_once 'jsonRPCClient.php';
$myExample = new jsonRPCClient('http://79.127.124.82/webservice/');

$param['auth']='ee3e775c7528ba3eba629fceb99ccc85';
$param['username']=$username;
$param['password']=md5($password);
$param['ip']=$_SERVER['REMOTE_ADDR'];
try {


$x=$myExample->OSSLogin($param);	
if($x['errcode']==2&&$_SESSION['secure']==$_POST['secure']) { $_SESSION['username']= $username; header('Location:aroosha_oss');  exit(); }
elseif($x['errcode']!=2||$_SESSION['secure']!=$_POST['secure']){
	
	                                 if($x['errcode']!=2&&$_SESSION['secure']!=$_POST['secure']){$_SESSION['x']=' &emsp;&emsp;&emsp;اطلاعات وارد شده صحیح نمی باشد';}
							         elseif ($_SESSION['secure']!=$_POST['secure']) {$_SESSION['x']=' &emsp;&emsp;&emsp;کد امنیتی وارد شده صحیح نمی باشد';}
									  elseif($x['errcode']!=2){$_SESSION['x']='&emsp;&emsp;نام کاربری یا کلمه عبور صحیح نمی باشد';} 
									  else  {$_SESSION['x']=' &emsp;&emsp;&emsp;اطلاعات وارد شده صحیح نمی باشد';}
  ?>
								   <script>
                                         function myFunction() {
                                        
										  window.location.assign("login")
                                                               }
															   myFunction()
									
                                   </script>
 <?php 
}
else{ header('Location:http://79.127.124.85:8000/login');  exit(); }
}
catch(Exception $e)
{
 echo $e->getMessage();
}

?>
</body>