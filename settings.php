
<!DOCTYPE html>
<html>
<head>
	<title>Kcet-Login</title>
	<link rel="stylesheet" type="text/css" href="css/custom.css">
	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
</head>
<body>
<div class="container-fluid">
	<button type="button" class="btn btn-danger " style="margin-top:40px;margin-left:40px;float:left;" onclick="window.location='logout.php'">  <span class="glyphicon glyphicon-log-out" aria-hidden="true" style="font-size: 20px;"></span>Logout</button>
	<div class="row" style="height:80px;"></div>
		<div class="row"><center><h1>SETTINGS</h1></center></div>
		<hr>
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
		            <div class="panel panel-default">
	               		<div class="panel-body">
	                        <div class="form-horizontal">
								
								<div class="form-group">
	                         	 	<label for="pass" class="col-md-4 control-label">Old Password</label>
	                         	 	<div class="col-md-6">
										<input type="password" class="form-control" name="pass" id="old_t">
	                          		</div>
	                         	 </div>
	                         	
	                         	

	                         	 <div class="form-group">
	                         	 	<label for="pass" class="col-md-4 control-label">New Password</label>
	                         	 	<div class="col-md-6">
										<input type="password" class="form-control" name="pass" id="pass_t">
	                          		</div>
	                         	 </div>

	                         	 
	                         	 <div class="form-group">
	                         	 	<label for="cpass" class="col-md-4 control-label">Confirm Password</label>
	                         	 	<div class="col-md-6">
										<input type="password" class="form-control" name="cpass" id="conpass_t">
	                          		</div>
	                         	 </div>

	                         	 <div class="form-group">
	                         	 	<label for="role" class="col-md-4 control-label">Department</label>
	                         	 	<div class="col-md-6">

								      <select class="form-control" id="dept_d">
								        <option value="CSE" selected>CSE</option>
								        <option value="ECE">ECE</option>
								        <option value="IT">IT</option>
								        <option value="MECH">MECH</option>
								      </select>
								 </div>
								 </div>



								 <div class="form-group">
	                         	 	<label for="cpass" class="col-md-4 control-label">Batch</label>
	                         	 	<div class="col-md-6">
										<label class="checkbox-inline"><input type="checkbox" id="batch1" value="920401" >920401 -> 2013-17</label><br>
										<label class="checkbox-inline"><input type="checkbox" id="batch2" value="920402">920402 -> 2014-18</label><br>
										<label class="checkbox-inline">	 <input type="checkbox" id="batch3" value="920403" >920403 -> 2015-19</label><br>
										<label class="checkbox-inline">	<input type="checkbox" id="batch4" value="920404" >920404 -> 2016-20</label><br>									
									</div>
	                         	 </div>
									

	                         	 <div class="form-group">
	                         	 	<label for="cpass" class="col-md-4 control-label">Semester</label>
	                         	 	<div class="col-md-6">
	                         	 		<label class="checkbox-inline"><input type="checkbox" id="sem3" value="3" onclick="trig_code(this,'semester3')";>III</label>
										<label class="checkbox-inline"><input type="checkbox" id="sem4" value="4" onclick="trig_code(this,'semester4')";>IV</label>
										 <label class="checkbox-inline"><input type="checkbox" id="sem5" value="5" onclick="trig_code(this,'semester5')";>V</label>
										<label class="checkbox-inline"><input type="checkbox" id="sem6" value="6" onclick="trig_code(this,'semester6')";>VI</label>
										 <label class="checkbox-inline"><input type="checkbox" id="sem7" value="7" onclick="trig_code(this,'semester7')";>VII</label>
										<label class="checkbox-inline"><input type="checkbox" id="sem8" value="8" onclick="trig_code(this,'semester8')";>VIII</label>

	                         	 	</div>
	                         	 </div>
								
								<div id="semester3">
	                         	  <div class="form-group">
	                         	 	<label for="cpass" class="col-md-4 control-label">III Semester Codes</label>
	                         	 	<div class="col-md-7">
	                         	 		<label class="checkbox-inline"><input type="checkbox" id="code1" value="MA6351">MA6351</label>
										<label class="checkbox-inline"><input type="checkbox" id="code2" value="CS6301">CS6301 </label>
										<label class="checkbox-inline"><input type="checkbox" id="code3" value="CS6302">CS6302 </label>
										<label class="checkbox-inline"><input type="checkbox" id="code4" value="CS6303">CS6303</label>
										<label class="checkbox-inline"><input type="checkbox" id="code5" value="CS6304">CS6304</label>
										<label class="checkbox-inline"><input type="checkbox" id="code6" value="GE6351">GE6351</label><hr>
	                         	 	</div>
	                         	 </div>
	                         	 </div>

								<div id="semester4">
	                         	  <div class="form-group">
	                         	 	<label for="cpass" class="col-md-4 control-label">IV Semester Codes</label>
	                         	 	<div class="col-md-7">
	                         	 		<label class="checkbox-inline"><input type="checkbox" id="code7" value="MA6453">MA6453</label>
											<label class="checkbox-inline"><input type="checkbox" id="code8" value="CS6551">CS6551</label>
											<label class="checkbox-inline"><input type="checkbox" id="code9" value="CS6401">CS6401</label>
											<label class="checkbox-inline"><input type="checkbox" id="code10" value="CS6402">CS6402</label>
											<label class="checkbox-inline"><input type="checkbox" id="code11" value="EC6504">EC6504</label>
											<label class="checkbox-inline"><input type="checkbox" id="code12" value="CS6403">CS6403</label><hr>

	                         	 	</div>
	                         	 </div>
	                         	 </div>


								<div id="semester5">
	                         	  <div class="form-group">
	                         	 	<label for="cpass" class="col-md-4 control-label">V Semester Codes</label>
	                         	 	<div class="col-md-7">
	                         	 		<label class="checkbox-inline"><input type="checkbox" id="code13" value="MA6566">MA6566</label>
											<label class="checkbox-inline"><input type="checkbox" id="code14" value="CS6501">CS6501</label>
											<label class="checkbox-inline"><input type="checkbox" id="code15" value="CS6502">CS6502</label>
											<label class="checkbox-inline"><input type="checkbox" id="code16" value="CS6503">CS6503</label>
											<label class="checkbox-inline"><input type="checkbox" id="code17" value="CS6504">CS6504</label><hr>
	                         	 	</div>
	                         	 </div>
	                         	 </div>

								<div id="semester6">
	                         	  <div class="form-group">
	                         	 	<label for="cpass" class="col-md-4 control-label">VI Semester Codes</label>
	                         	 	<div class="col-md-7">
	                         	 		<label class="checkbox-inline"><input type="checkbox" id="code18" value="CS6601">CS6601</label>
											<label class="checkbox-inline"><input type="checkbox" id="code19" value="IT6601">IT6601</label>
											<label class="checkbox-inline"><input type="checkbox" id="code20" value="CS6660">CS6660</label>
											<label class="checkbox-inline"><input type="checkbox" id="code21" value="IT6502">IT6502</label>
											<label class="checkbox-inline"><input type="checkbox" id="code22" value="CS6659">CS6659</label><br>
											<label class="control-label">Elective:</label><br>
											<label class="checkbox-inline"><input type="checkbox" id="code23" value="CS6001">CS6001</label>
											<label class="checkbox-inline"><input type="checkbox" id="code24" value="GE6757">GE6757</label>
											<label class="checkbox-inline"><input type="checkbox" id="code25" value="IT6702">IT6702</label>
											<label class="checkbox-inline"><input type="checkbox" id="code26" value="CS6002">CS6002</label>
											<label class="checkbox-inline"><input type="checkbox" id="code27" value="IT6004">IT6004</label>
											<label class="checkbox-inline"><input type="checkbox" id="code28" value="GE6084">GE6084</label><hr>
	                         	 	</div>
	                         	 </div>
	                         	 </div>



	                         	 <div id="semester7">
	                         	  <div class="form-group">
	                         	 	<label for="cpass" class="col-md-4 control-label">VII Semester Codes</label>
	                         	 	<div class="col-md-7">
	                         	 		<label class="checkbox-inline"><input type="checkbox" id="code29" value="CS6701">CS6701</label>
											<label class="checkbox-inline"><input type="checkbox" id="code30" value="CS6702">CS6702</label>
											<label class="checkbox-inline"><input type="checkbox" id="code31" value="CS6703">CS6703</label>
											<label class="checkbox-inline"><input type="checkbox" id="code32" value="CS6704">CS6704</label>
											<br>
											<label class="control-label">Elective 1:</label><br>
											<label class="checkbox-inline"><input type="checkbox" id="code33" value="CS6003">CS6003</label>
											<label class="checkbox-inline"><input type="checkbox" id="code34" value="CS6004">CS6004</label>
											<label class="checkbox-inline"><input type="checkbox" id="code35" value="CS6005">CS6005</label>
											<label class="checkbox-inline"><input type="checkbox" id="code36" value="BM6005">BM6005</label>
											<label class="checkbox-inline"><input type="checkbox" id="code37" value="IT6801">IT6801</label>
											<br>
											<label class="control-label">Elective 2:</label><br>
											<label class="checkbox-inline"><input type="checkbox" id="code38" value="IT6005">IT6005</label>
											<label class="checkbox-inline"><input type="checkbox" id="code39" value="EC6703">EC6703</label>
											<label class="checkbox-inline"><input type="checkbox" id="code40" value="CS6006">CS6006</label>
											<label class="checkbox-inline"><input type="checkbox" id="code41" value="CS6007">CS6007</label>
											<label class="checkbox-inline"><input type="checkbox" id="code42" value="IT6006">IT6006</label><hr>
	                         	 	</div>
	                         	 </div>
	                         	 </div>


	                         	 <div id="semester8">
	                         	  <div class="form-group">
	                         	 	<label for="cpass" class="col-md-4 control-label">VIII Semester Codes</label>
	                         	 	<div class="col-md-7">
	                         	 		<label class="checkbox-inline"><input type="checkbox" id="code43" value="CS6801">CS6801</label><br>
											
											<label class="control-label">Elective 1:</label><br>
											<label class="checkbox-inline"><input type="checkbox" id="code44" value="CS6008">CS6008</label>
											<label class="checkbox-inline"><input type="checkbox" id="code45" value="CS6009">CS6009</label>
											<label class="checkbox-inline"><input type="checkbox" id="code46" value="IT6011">IT6011</label>
											<label class="checkbox-inline"><input type="checkbox" id="code47" value="CS6010">CS6010</label>
											<label class="checkbox-inline"><input type="checkbox" id="code48" value="CS6013">CS6013</label>
											<br>
											<label class="control-label">Elective 2:</label><br>
											<label class="checkbox-inline"><input type="checkbox" id="code49" value="MG6088">MG6088</label>
											<label class="checkbox-inline"><input type="checkbox" id="code50" value="GE6075">GE6075</label>
											<label class="checkbox-inline"><input type="checkbox" id="code51" value="CS6011">CS6011</label>
											<label class="checkbox-inline"><input type="checkbox" id="code52" value="CS6012">CS6012</label>
											<label class="checkbox-inline"><input type="checkbox" id="code53" value="GE6083">GE6083</label><hr>
	                         	 	</div>
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
		                                	<button type="button" class="btn btn-primary" onclick="update();">
		                                    	<i class="fa fa-btn fa-sign-in"></i> Update
		                                	</button>
		                            	</div>
	                            		<div class="col-md-3">
		                                	<button type="button" class="btn btn-danger" onclick="window.location='home.php';">
		                                    	<i class="fa fa-btn fa-sign-in"></i> Cancel
		                                	</button>
	                            		</div>
	                            	</div>
	                        	</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		

</div>
 	<script src="js/bootstrap.min.js"></script>
 	 	<script type="text/javascript" src="js/in_body.js"></script>

</body>
</html>

