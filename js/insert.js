
function GetXmlHttpObject()
{
    if (window.XMLHttpRequest)
    {
       return new XMLHttpRequest();
    }
    if (window.ActiveXObject)
    {
       return new ActiveXObject("Microsoft.XMLHTTP");
    }
    return null;
}



function markinsert(n){
  for (var i=1;i<=n;i++){
var textname="marktext";
textname=textname.concat(i);
  if(document.getElementById(textname).value==0){
  }
else{

var e=document.getElementById(textname);
var col_name=e.getAttribute("colname");
var rollno=e.getAttribute("rollno");
var mark=e.value;
var xmlhttp=GetXmlHttpObject();

if (xmlhttp==null)
 {
       alert ("Your browser does not support AJAX!");
       return;
 }
var url="insertmark.php";
var parameters="rollno="+rollno+"&column="+col_name+"&mark="+mark;
//alert(parameters);
xmlhttp.onreadystatechange=function(){
if (xmlhttp.readyState==4 && xmlhttp.status == 200)
{
}

}


xmlhttp.open("POST",url,false);
xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
xmlhttp.setRequestHeader("Content-length", parameters .length);
xmlhttp.setRequestHeader("Connection", "close");
xmlhttp.send(parameters);



}

  }

alert("inserted successfully");

}

//echo '<td><input type="text" name="'.$textname.'" rollno="'.$row1[0].'" colname="'.$row[0].'" value="'.$row1[$i].'" size="5" ></td>';
