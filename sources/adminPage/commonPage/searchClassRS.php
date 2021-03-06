<?php

/*  ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ 	
	wizGrade V 1.1 (Formerly SDOSMS) is Developed by Igweze Ebele Mark | https://www.iem.wizgrade.com 
	https://www.wizgrade.com | Release Date � 2nd April, 2019
	~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ 	
	Copyright 2014-2019 IGWEZE EBELE MARK | https://www.iem.wizgrade.com 
	
	Licensed under the Apache License, Version 2.0 (the "License");
	you may not use this file except in compliance with the License.
	You may obtain a copy of the License at

		http://www.apache.org/licenses/LICENSE-2.0

	Unless required by applicable law or agreed to in writing, software
	distributed under the License is distributed on an "AS IS" BASIS,
	WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
	See the License for the specific language governing permissions and
	limitations under the License	
	~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ 
	wizGrade School App is Dedicated To Almighty God, My Amazing Parents ENGR Mr & Mrs Igweze Okwudili Godwin, 
	To My Fabulous and Supporting Wife Mrs Igweze Nkiruka Jennifer
	and To My Inestimable Sons Osinachi Michael, Ifechukwu Othniel and My Unborn lil Child.  
	
	WEBSITE 					PHONES												EMAILS
	https://www.wizgrade.com	+234 - 80 - 30 716 751, +234 - 80 - 22 000 490 		info@wizgrade.com	
	
	
	~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~Page/Code Explanation~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
	This page search student class results
	~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ */ 


		if (!defined('wizGrade')) /* This checks if this page was wrongly access by users */

		die('Hahahaha, Hacking attempt . . . . Be Careful . . . . You Are Been Warned !!!!');
				
		require_once $wizGradeIconPage; /* This include top middle global icon page eg go back, print buttons etcs */

?> 
                 	<!-- row -->	
					<div class="row">  
						<div class="col-lg-7">                     
						<section class="panel wizGradeSectionDiv">
							<header class="panel-heading">                              
								<i class="fa fa-search-plus fa-lg"></i>  Search Class Results 
								<span class="tools pull-right">
									<a href="javascript:;" class="fa fa-chevron-down"></a>
									<a href="javascript:;" class="fa fa-times"></a>
								</span>
							</header>
							<div class="panel-body wizGrade-line"> 
                         
                            <!-- form --><form class="form-horizontal" id="frmRS1" role="form"> 
							  
							<?php if ($admin_grade == $staffGrade) {  /*  check if school staff */ ?>

                              	<?php if ($wizGradeMode == $fiVal){  /* session run mode */ ?>
								<div class="form-group">
                                    <label for="sess" class="col-lg-4 col-sm-4 control-label">* School Session</label>                                     
									<div class="col-lg-8">
											<div class="iconic-input">
												<i class="fa fa-clock-o"></i>                                              
												<select class="form-control"  id="ftSession" name="sess" required>
                                              
                                				<option value = "">Please select One</option>
												<?php 
												
												   try  {
														
															formTeacherSession($conn, $adminID, $wizGradeMode);  /* class teacher school session  */ 
												 
														}catch(PDOException $e) {
							
															wizGradeDie( 'Ooops Database Error: ' . $e->getMessage());
							 
														} 
														
												?>
                                              
												</select>
											</div>
										  <?php echo $sessNote; ?>
                                    </div>                                  
								</div>
								<?php } ?>
								
								<?php if ($wizGradeMode == $seVal){  /* current run mode */ ?>
								<div class="form-group">
                                    <label for="sess" class="col-lg-4 col-sm-4 control-label">*  School Level</label>                                     
									<div class="col-lg-8">
											<div class="iconic-input">
												<i class="fa fa-clock-o"></i>                                              
												<select class="form-control"  id="ftSessL" name="ftSessL" required>
                                              
                                				<option value = "">Please select One</option>
												<?php 
												
												   try  {
														
															formTeacherSession($conn, $adminID, $wizGradeMode);  /* class teacher school session  */ 
												 
														}catch(PDOException $e) {
							
															wizGradeDie( 'Ooops Database Error: ' . $e->getMessage());
							 
														} 
														
												?>
                                              
												</select>
											</div>
                                    </div>
                                </div>
								<?php } ?> 
                                              
								<?php }else{ ?>  	
							
								<?php if ($wizGradeMode == $fiVal){  /* session run mode */ ?>
                              
                              	<div class="form-group">
                                    <label for="sess" class="col-lg-4 col-sm-4 control-label">* School Session</label>                                     
									<div class="col-lg-8">
											<div class="iconic-input">
												<i class="fa fa-clock-o"></i>                                              
												<select class="form-control"  id="sess" name="sess" required>
                                              
                                				<option value = "">Please select One</option>
												<?php 
													 try {
														
															schoolSession($conn); /* school session  */
												 
														}catch(PDOException $e) {
							
														wizGradeDie( 'Ooops Database Error: ' . $e->getMessage());
							 
														} 
												?>
                                              
												</select>
											</div>
                                           
                                             <?php echo $sessNote; ?>
                                    </div>
                                </div>
								
								<div class="form-group">
                                    <label for="level" class="col-lg-4 col-sm-4 control-label">* School Level</label>                                     
									<div class="col-lg-8">
											<div class="iconic-input">
												<i class="fa fa-level-up"></i>                                              
												<select class="form-control"  id="levelCM" name="level" required>
                                              
                                				<option value = "">Please select One</option>
												<?php 
												
													 try {
														
															studentLevel($conn);  /* retrieve student level */
												 
														}catch(PDOException $e) {
							
														wizGradeDie( 'Ooops Database Error: ' . $e->getMessage());
							 
														} 
												?> 
                                              
												</select>
											</div>
                                    </div>
                                </div>
								  
								<?php } ?>
								
								<?php if ($wizGradeMode == $seVal){  /* current run mode */ ?>  
								
								
								<div class="form-group">
									<label for="sess" class="col-lg-4 col-sm-4 control-label">* School Level</label>                                     
									<div class="col-lg-8">
											<div class="iconic-input">
												<i class="fa fa-clock-o"></i>                                              
												<select class="form-control"  id="sesslevel" name="sesslevel" required>
                                              
													<option value = "">Please select One</option>
													<?php 
													
													 try {
														
															schoolSessionL($conn);  /* school session  */
												 
														}catch(PDOException $e) {
							
														wizGradeDie( 'Ooops Database Error: ' . $e->getMessage());
							 
														}

													?>
                                              
												</select>
												<input type="hidden" name ="classAll" id="classAll" value="<?php echo $fiVal; ?>" />
											</div>
                                          
                                    </div>
                                </div>
								<?php } ?>  
                                  

								<?php } ?>  	

								<span id="wait_1" style="display: none;"> <center><img alt="Please Wait" src="loading.gif"/> <!-- loading image --></center> <!-- loading image --> </span>
    							<span id="result_1" style="display: none;"></span> <!-- loading div -->  <!-- jquery loading div -->

								<div class="form-group">
                                    <label  for="schoolTerm" class="col-lg-4 col-sm-4 control-label">* School Term</label>                                     
									<div class="col-lg-8">
											<div class="iconic-input">
												<i class="fa fa-cubes"></i>                                              
												<select class="form-control"  id="schoolTerm" name="term" required>
                                              
                                				<option value = "">Please select One</option>
												<?php
												
													try {
													
															$curTerm = currentSessionTerm($conn);    /* current school term  */
											 
													}catch(PDOException $e) {
						
													wizGradeDie( 'Ooops Database Error: ' . $e->getMessage());
						 
													} 


													foreach($term_list as $term_key => $term_value){    /* loop array */

														if ($curTerm == $term_key){
															$selected = "SELECTED";
														} else {
															$selected = "";
														}

														echo '<option value="'.$term_key.'"'.$selected.'>'.$term_value.'</option>' ."\r\n";

													}

												?>
                                              
												</select>
											</div>
                                      </div>
                                </div>

								<input type="hidden" value="searchSessionRS" name = "searchData"/>                               	
                                <div class="form-group">
                                        <center><button type="submit" class="btn btn-danger buttonMargin" id="searchSessionRS">
                                        <i class="fa fa-search-plus"></i> Select Class </button></center>
                                </div>
  


                            </form><!-- / form -->
							 
							</div>
                         
						</section>
						</div>
					</div>
                    <!-- /row -->
					
                	 
					<!-- row -->	
					<div class="row">  
						<div class="col-lg-12">						  
					  
							<div id="wizGradePageDiv"> </div> <!-- This a div where jquery loads its contents -->					 
					 
						</div>
					</div>
					<!-- /row -->