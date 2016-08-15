var xmlhttp;
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

function update() {
	
	var old=document.getElementById("old_t").value;
	var pass=document.getElementById("pass_t").value;
	var conf=document.getElementById("conpass_t").value;
	var x = document.getElementById("dept_d");
	var department = x.options[x.selectedIndex].text;
	var semester=" "; 
	var code=" ";
	var batch=" ";
	for(var se=3;se<9;se++){
		if(document.getElementById("sem"+se).checked){
			check_sem=document.getElementById("sem"+se).value;
			if(semester==" "){
				semester=check_sem;
			}
			else{
			semester=semester+","+check_sem;}
		}
	}

	for(var co=1;co<=53;co++){
		if(document.getElementById("code"+co).checked){
			check_code=document.getElementById("code"+co).value;
			if(code==" "){
				code=check_code;
			}
			else{
			code=code+","+check_code;}
		}
	}

	for(var ba=1;ba<=4;ba++){
		if(document.getElementById("batch"+ba).checked){
			batch_code=document.getElementById("batch"+ba).value;
			if(batch==" "){
				batch=batch_code;
			}
			else{
			batch=batch+","+batch_code;}
		}
	}

	
	if(!old){
		alert("Enter old password");
	}
	else if(!pass){
		alert("no pass");
	}
	
	else if(batch==" "){
		alert("Batch not selected");
	}
	else if(code==" "){
		alert("code not selected");
	}

	else if(pass==conf){
	xmlhttp=GetXmlHttpObject();
      if (xmlhttp==null)
      {
            alert ("Your browser does not support AJAX!");
            return;
      }
    var url="updatedb.php";
    var parameters="pass="+pass+"&dept="+department+"&sem="+semester+"&code="+code+"&batch"+batch;
    xmlhttp.onreadystatechange=function(){
    if (xmlhttp.readyState==4 && xmlhttp.status == 200)
    {
    	alert("Updated successfully...");
		window.location="home.php";
	}
	}
      

    xmlhttp.open("POST",url,true);  
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.setRequestHeader("Content-length", parameters .length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);
}
else{
	alert("Passwords do not match");
}
}

function reset_details() {
	
	var name=document.getElementById("name_t").value;
	var username=document.getElementById("user_t").value;
	var pass=document.getElementById("pass_t").value;
	var conf=document.getElementById("conpass_t").value;
	var x = document.getElementById("dept_d");
	var department = x.options[x.selectedIndex].text;
	var semester=" "; 
	var code=" ";
	var batch=" ";
	for(var se=3;se<9;se++){
		if(document.getElementById("sem"+se).checked){
			check_sem=document.getElementById("sem"+se).value;
			if(semester==" "){
				semester=check_sem;
			}
			else{
			semester=semester+","+check_sem;}
		}
	}

	for(var co=1;co<=53;co++){
		if(document.getElementById("code"+co).checked){
			check_code=document.getElementById("code"+co).value;
			if(code==" "){
				code=check_code;
			}
			else{
			code=code+","+check_code;}
		}
	}

	for(var ba=1;ba<=4;ba++){
		if(document.getElementById("batch"+ba).checked){
			batch_code=document.getElementById("batch"+ba).value;
			if(batch==" "){
				batch=batch_code;
			}
			else{
			batch=batch+","+batch_code;}
		}
	}
	if(!name){
		alert("no name");
	}
	else if(!username){
		alert("no username");
	}
	else if(!pass){
		alert("no pass");
	}
	
	else if(batch==" "){
		alert("Batch not selected");
	}
	else if(code==" "){
		alert("code not selected");
	}

	else if(pass==conf){

	
	 xmlhttp=GetXmlHttpObject();
      if (xmlhttp==null)
      {
            alert ("Your browser does not support AJAX!");
            return;
      }
    var url="regdb.php";
    var parameters="name="+name+"&username="+username+"&pass="+pass+"&dept="+department+"&sem="+semester+"&code="+code+"&batch="+batch;
    xmlhttp.onreadystatechange=function(){
    if (xmlhttp.readyState==4 && xmlhttp.status == 200)
    {
    	alert("Updated successfully...");
		window.location="home.php";
	}
	}
      

    xmlhttp.open("POST",url,true);  
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.setRequestHeader("Content-length", parameters .length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);
}
else{
	alert("Passwords do not match");
}
}

function trig_code(box, id) {
    var el = document.getElementById(id);
    
    if ( box.checked ) {
        el.style.display = 'block';
    } else {
        el.style.display = 'none';
        var checks = document.querySelectorAll('#' + id + ' input[type="checkbox"]');
    for(var i =0; i< checks.length;i++){
        var check = checks[i];
        if(!check.disabled){
            check.checked = false;
        }
    }
    }
}


function ques() {

	window.location="question_list.php";
}
