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


function ques(qid){


	var xmlhttp=GetXmlHttpObject();
	if (xmlhttp==null)
      {
            alert ("Your browser does not support AJAX!");
            return;
      }
var url="ques.php";
url=url+"?qid="+qid;
url=url+"&sid="+Math.random();
xmlhttp.onreadystatechange=function(){
    if (xmlhttp.readyState==4 && xmlhttp.status == 200)
      {
            }
}
xmlhttp.open("GET",url,true);
xmlhttp.send(null);



      		window.location="question_list.php";


}


function updatecall(id){
  var link="update.php?id=";
  var urllink=link.concat(id);
  window.location=urllink;
}
