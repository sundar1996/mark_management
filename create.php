


<!DOCTYPE html>
<html>
<head>
  <title>Kcet-Login</title>
  <link rel="stylesheet" type="text/css" href="css/custom.css">
  <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
  <script src="js/jquery-3.0.0.min.js"></script>

</head>
<body  onload="before();">
<div class="container-fluid">
  <div class="row" style="height:40px;"></div>
    <div class="row">
      <div class="col-lg-2">
        <button type="button" class="btn btn-danger " style="float:left;" onclick="window.location='logout.php'">  <span class="glyphicon glyphicon-log-out" aria-hidden="true" 
            style="font-size: 20px;"></span>Logout
        </button>
      </div>
      <div class="col-lg-8"><center><h2>Create</h2></center></div>
      <div class="col-lg-2"> 
        <button type="button" class="btn btn-info " style="float:right;" onclick="window.location='home.php'"> Home
        </button>
      </div>
    </div>
    <hr>
      <div class="row" >
        <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body">
                          <div  class="form-horizontal">
                
                <div id="first_set">
                            



                            <div class="form-group">
                              <label for="type_m" class="col-md-4 control-label">Type</label>
                              <div class="col-md-6">
                                  <label class="radio-inline">
                                    <input type="radio" name="test" id="type1" value="Slip Test"> Slip Test
                                  </label>
                                  <label class="radio-inline">
                                    <input type="radio" name="test" id="type2" value="Assignment"> Assignment
                                  </label>
                                  <label class="radio-inline">
                                    <input type="radio" name="test" id="type3" value="Cycle Test"> Cycle Test
                                  </label>

                              </div>
                             </div>


                             <div class="form-group">
                                <label for="name" class="col-md-4 control-label">Reference Name</label>
                                <div class="col-md-6">
                      <input type="text" class="form-control" id="ref_name">
                                  </div>
                               </div>
                



                             <div class="form-group">
                              <label for="date" class="col-md-4 control-label">Date</label>
                              <div class="col-md-3">
                                  <input class="form-control"type="date" id="date"> 
                             </div>
                            </div>


                            <div class="form-group">
                              <label for="type" class="col-md-4 control-label">Code</label>
                              <div class="col-md-6 " id="code_space">

                                

                              </div>
                             </div>


                             <div class="form-group">
                              <label for="batch" class="col-md-4 control-label">Batch</label>
                              <div class="col-md-6" id="batch_space">
                                  
                                 

                              </div>
                             </div>

                

                             <div class="form-group">
                              <label for="cpass" class="col-md-4 control-label">Section</label>
                              <div class="col-md-6">
                                <label class="checkbox-inline"><input type="checkbox" id="sec1" value="A">A</label>
                                <label class="checkbox-inline"><input type="checkbox"  id="sec2" value="B">B</label>


                              </div>
                             </div>


                             <div class="form-group">
                                <label for="username" class="col-md-4 control-label">Total Marks</label>
                                <div class="col-md-1">
                      <input type="text" class="form-control" id="marks">
                                  </div>
                               </div>
                
                  <!--<div class="form-group">
                              <label for="cpass" class="col-md-4 control-label"></label>
                              <div class="col-md-6">
                              </div>
                             </div>-->
                             <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                  <div class="col-md-3">
                                      <button type="button" class="btn btn-success" onclick="first();">
                                          <i class="fa fa-btn fa-sign-in"></i> Next >>>
                                      </button>

                                  </div>
                                  
                                </div>
                            </div>
                          </div>
                          
                          <div id="second_set">

                          <div class="row" style="margin-bottom: 30px;margin-left: 80px;">

                          <button type="button" class="btn btn-primary" onclick="$('#2marks').toggle();">
                              <i class="fa fa-btn fa-sign-in"></i> 2 marks
                           </button>
                           <button type="button" class="btn btn-primary" onclick="$('#3marks').toggle();">
                              <i class="fa fa-btn fa-sign-in"></i> 3 marks
                           </button>
                           <button type="button" class="btn btn-primary" onclick="$('#4marks').toggle();">
                              <i class="fa fa-btn fa-sign-in"></i> 4 marks
                           </button>
                           <button type="button" class="btn btn-primary" onclick="$('#5marks').toggle();">
                              <i class="fa fa-btn fa-sign-in"></i> 5 marks
                           </button>
                           <button type="button" class="btn btn-primary" onclick="$('#6marks').toggle();">
                              <i class="fa fa-btn fa-sign-in"></i> 6 marks
                           </button>
                           <button type="button" class="btn btn-primary" onclick="$('#8marks').toggle();">
                              <i class="fa fa-btn fa-sign-in"></i> 8 marks
                           </button>
                           <button type="button" class="btn btn-primary" onclick="$('#10marks').toggle();">
                              <i class="fa fa-btn fa-sign-in"></i> 10 marks
                           </button>
                           <button type="button" class="btn btn-primary" onclick="$('#12marks').toggle();">
                              <i class="fa fa-btn fa-sign-in"></i> 12 marks
                           </button>
                           <button type="button" class="btn btn-primary" onclick="$('#16marks').toggle();">
                              <i class="fa fa-btn fa-sign-in"></i> 16 marks
                           </button>


                          </div>

                           <div class="form-group" id="2marks">
                              <label class="col-md-4 control-label">2 marks  x</label>
                                <div class="col-md-6">
                                  <input type="text" class="form-control"  id="mark0">
                              </div>
                            </div>

                            

                             <div class="form-group" id="3marks">
                              <label class="col-md-4 control-label">3 marks  x</label>
                              <div class="col-md-6">
                                  <input type="text" class="form-control"  id="mark1">

                              </div>
                             </div>

                             <div class="form-group" id="4marks">
                              <label for="cpass" class="col-md-4 control-label">4 marks  x</label>
                              <div class="col-md-6">
                                  <input type="text" class="form-control"  id="mark2">

                              </div>
                             </div>

                             <div class="form-group" id="5marks">
                              <label for="cpass" class="col-md-4 control-label">5 marks  x</label>
                              <div class="col-md-6">
                                  <input type="text" class="form-control"  id="mark3">

                              </div>
                             </div>

                             <div class="form-group" id="6marks">
                              <label for="cpass" class="col-md-4 control-label">6 marks  x</label>
                              <div class="col-md-6">
                                  <input type="text" class="form-control"  id="mark4">

                              </div>
                             </div>

                             <div class="form-group" id="8marks">
                              <label for="cpass" class="col-md-4 control-label">8 marks  x</label>
                              <div class="col-md-6">
                                  <input type="text" class="form-control"  id="mark5">

                              </div>
                             </div>

                             <div class="form-group" id="10marks">
                              <label for="cpass" class="col-md-4 control-label">10 marks  x</label>
                              <div class="col-md-6">
                                  <input type="text" class="form-control"  id="mark6">

                              </div>
                             </div>

                             <div class="form-group" id="12marks">
                              <label for="cpass" class="col-md-4 control-label">12 marks  x</label>
                              <div class="col-md-6">
                                  <input type="text" class="form-control"  id="mark7">

                              </div>
                             </div>

                             <div class="form-group" id="16marks">
                              <label for="cpass" class="col-md-4 control-label">16 marks  x</label>
                              <div class="col-md-6">
                                  <input type="text" class="form-control"  id="mark8">

                              </div>
                             </div>

                            
        <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                  <div class="col-md-3">
                                      <button type="button" class="btn btn-success" onclick="second();">
                                          <i class="fa fa-btn fa-sign-in"></i> Next >>>
                                      </button>
                                  </div>
                                  <div class="col-md-3">
                                      <button type="button" class="btn btn-warning" onclick="before();">
                                          <i class="fa fa-btn fa-sign-in"></i> Back
                                      </button>
                                  </div>
                                </div>
                            </div>
</div>

                         
                          


                          <div id="third_set">

                            
                          
                            
                             

                              

                            

 
                   </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    

</div>
  <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/in_body.js"></script>
        <script type="text/javascript" src="js/create.js"></script>


</body>
</html>


