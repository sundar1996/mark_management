

var count;


function before(){
		document.getElementById("first_set").style.display = 'inline'
		document.getElementById("second_set").style.display = 'none';
		document.getElementById("third_set").style.display = 'none';
		retrieve();
	}
function first(){
		document.getElementById("first_set").style.display = 'none';
		document.getElementById("second_set").style.display = 'inline';
		document.getElementById("third_set").style.display = 'none';

		var myNode = document.getElementById("third_set");
while (myNode.firstChild) {
    myNode.removeChild(myNode.firstChild);
    count=0;
}

	}
function second(){
		document.getElementById("first_set").style.display = 'none';
		document.getElementById("second_set").style.display = 'none';
		document.getElementById("third_set").style.display = 'inline';
		generate_ques();
}



function generate_ques(){
var mark=[];
var mark_a=[2,3,4,5,6,8,10,12,16];
var el = document.createElement("h3");
	el.innerHTML ='<center><h3>Enter the Questions</h3></center><hr>';
	 document.getElementById("third_set").appendChild(el);
for(var j=0;j<9;j++){
	mark[j]=document.getElementById("mark"+j).value;
	if(mark[j]==0){}
		else{
	for(k=0;k<mark[j];k++){

		ques_box(count,mark_a[j]);
		count++;
	}
}
	}



	var el = document.createElement("div");
 	el.setAttribute("class","form-group");
	el.innerHTML ='<div class="form-group">\
                                <div class="col-md-6 col-md-offset-4">\
                                  <div class="col-md-3">\
                                      <button type="button" class="btn btn-success" onclick="pushquestions();">\
                                          <i class="fa fa-btn fa-sign-in"></i> Create\
                                      </button>\
                                  </div>\
                                  <div class="col-md-3">\
                                      <button type="button" class="btn btn-warning" onclick="first();">\
                                          <i class="fa fa-btn fa-sign-in"></i> Back\
                                      </button>\
                                  </div>\
                                </div>\
                            </div>';
	 document.getElementById("third_set").appendChild(el);
}

function ques_box(x,m){

	var el = document.createElement("div");
	el.setAttribute("class","form-group");
	el.innerHTML ='<div class="col-md-8">\
					<input class="col-md-4 form-control" type="text" marks="'+m+'" placeholder="'+m+'marks" id="ques'+x+'">\
		             </div>\
		              <div class="col-md-2">\
		                <select class="form-control" id="'+x+'course">\
		                    <option value="CO1">CO1</option>\
		                    <option value="CO2">CO2</option>\
		                    <option value="CO3">CO3</option>\
		                    <option value="CO4">CO4</option>\
		                    <option value="CO5">CO5</option>\
												<option value="CO3">CO6</option>\
		                    <option value="CO4">CO7</option>\
		                    <option value="CO5">CO8</option>\
		                </select>\
		              </div>\
		              <div class="col-md-2">\
		              </div>';
	 document.getElementById("third_set").appendChild(el);
}


function pushquestions(){

	var type_sel = document.getElementsByName("test");

		for(var i = 0; i < type_sel.length; i++) {
		   if(type_sel[i].checked == true) {
		     	var type = type_sel[i].value;
		   }
		 }

		 var ref_name=document.getElementById("ref_name").value;

	var date=document.getElementById("date").value;

	var code_sel = document.getElementsByName("code");

		for(var i = 0; i < code_sel.length; i++) {
		   if(code_sel[i].checked == true) {
		     	var  code = code_sel[i].value;
		   }
		 }
	var batch_sel = document.getElementsByName("batch");

		for(var i = 0; i < batch_sel.length; i++) {
		   if(batch_sel[i].checked == true) {
		     	var  batch = batch_sel[i].value;
		   }
		 }
		var section=" ";

	for(var se=1;se<3;se++){
		if(document.getElementById("sec"+se).checked){
			check_sem=document.getElementById("sec"+se).value;
			if(section==" "){
				section=check_sem;
			}
			else{
			section=section+","+check_sem;}
		}
	}
	var total_marks=document.getElementById("marks").value;


	var xmlhttp=GetXmlHttpObject();
     if (xmlhttp==null)
      {
            alert ("Your browser does not support AJAX!");
            return;
      }
    var url="question_paper_push.php";
    var parameters="type="+type+"&ref_name="+ref_name+"&date="+date+"&marks="+total_marks+"&code="+code+"&section="+section+"&batch="+batch;
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






	for(var i=0;i<count;i++){
		var question=document.getElementById("ques"+i).value;
		var co = document.getElementById(i+"course");
		var course = co.options[co.selectedIndex].text;
		var marks=document.getElementById("ques"+i).getAttribute("marks");
		var paper_id=1001;
		var xmlhttp=GetXmlHttpObject();
     if (xmlhttp==null)
      {
            alert ("Your browser does not support AJAX!");
            return;
      }
    var url="question_push.php";
    var parameters="ques="+question+"&course="+course+"&marks="+marks+"&papid="+paper_id;
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



var url="insertroll.php";
xmlhttp.onreadystatechange=function(){
if (xmlhttp.readyState==4 && xmlhttp.status == 200)
{

}

}


xmlhttp.open("POST",url,true);
xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
xmlhttp.setRequestHeader("Content-length", parameters .length);
xmlhttp.setRequestHeader("Connection", "close");
xmlhttp.send(parameters);


	alert("Created successfully...");
		window.location="create.php";
}

function retrieve(){


		var xmlhttp=GetXmlHttpObject();


	 if (xmlhttp==null)
      {
            alert ("Your browser does not support AJAX!");
            return;
      }

	url="retrieve.php";
	xmlhttp.onreadystatechange=function(){
    if (xmlhttp.readyState==4 && xmlhttp.status == 200)
	  {
	  	var retrieved = JSON.parse(xmlhttp.responseText);
	  	split_str(retrieved);
	  }
}
xmlhttp.open("GET",url,true);
xmlhttp.send(null);



}

function split_str(x) {

var batch = x[0].split(",");
var code=x[1].split(",");

for(var i=0;i<code.length;i++)
{
	var el = document.createElement("label");
	el.setAttribute("class","radio-inline");
	el.innerHTML ='<input type="radio" name="code"  value="'+code[i]+'"> '+code[i];


	 document.getElementById("code_space").appendChild(el);
}


for(var i=0;i<batch.length;i++)
{
	var el = document.createElement("label");
	el.setAttribute("class","radio-inline");
	el.innerHTML ='<input type="radio" name="batch"  value="'+batch[i]+'"> '+batch[i];


	 document.getElementById("batch_space").appendChild(el);
}
}



$("#2marks").hide();
$("#3marks").hide();
$("#4marks").hide();
$("#5marks").hide();
$("#6marks").hide();
$("#8marks").hide();
$("#10marks").hide();
$("#12marks").hide();
$("#16marks").hide();
