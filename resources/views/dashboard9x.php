
<!DOCTYPE HTML>
<html>
<head>
<script src="jq.min.js"></script>
  <script src="jquery.min.js"></script>
  <script src="bootstrap.min.js"></script>
<script>
function searchme(str) {
	if(str.length==0) {
document.getElementById ("src").innerHTML ="";
 return;
}
else {
var  xmlhttp = new XMLHttpRequest(); 
xmlhttp.onreadystatechange = function() { 
if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
	document.getElementById ("src").innerHTML = xmlhttp.responseText;
	} 
  }; 
 xmlhttp.open("GET", "fetch?a=" + str, true); 
 xmlhttp.send(); 
   }
 }
 </script>
 </head> 
 <body>
<h1>Search</h1>
<form>
<input type="text" onKeyup="searchme(this.value)" >
</form>
<p>Results<span id="src"></span></p>
</body>
</html>