<!--
 
	wizGrade V 1.1
	Copyright 2017 SOFT DIGIT LTD

	wizGrade is Dedicated To Almighty God, To My Parents, To My Fabulous and Supporting Wife Nkiruka 
	and To My Inestimable Sons Osinachi and Ifechukwu.

	This product includes responsive web and mobile application developed at SOFT DIGIT LTD by Mr Igweze Ebele Mark
	
	wizGrade Contacts and Supports
	
	WEBSITE 					PHONES
	https://www.wizgrade.com		+234 - 80 - 30 716 751, 		+234 - 80 - 22 000 490 
	
	EMAILS		SALES						SUPPORT						
				sales@wizgrade.com			info@wizgrade.com
	
	
	
	~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~Page/Code Explanation~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
	This page is the admin index widget page
		
-->
 
<?php

session_id();

session_start();


		define('wizGrade', 'igweze');  /* define a check for wrong access of file */	  
        
		require 'configwizGrade.php';  /* load wizGrade configuration files */	 
	
	 	 

			try {
				
				$sessionInfo = currentSessionInfo($conn); /* retrieve current school session informatio */
				$levelArray = studentLevelsArray($conn); /* retrieve school level array */
				array_unshift($levelArray,"");
				unset($levelArray[0]);
			
			}catch(PDOException $e) {
				
						wizGradeDie( 'Ooops Database Error: ' . $e->getMessage());
				 
			}
			
			/* calculating school population class by class*/
			
			list ($fiSessionID, $fiSession) = explode ("@$@", $sessionInfo);
			
			$seSessionID =  ($fiSessionID - $fiVal);
			
			$thSessionID =  ($fiSessionID - $seVal);
			
			$foSessionID =  ($fiSessionID - $thVal);
			
			$fifSessionID =  ($fiSessionID - $foVal);
			
			$sixSessionID =  ($fiSessionID - $fifVal);
			
			if($schoolExt == $wizGradeNurAbr){ /* check if school loaded is nursery school */

				$fiStuTotal = studentsPerStandard($conn, $fiSessionID); /* calculating 1st level school population */
			
				if($fiStuTotal >= $foreal){
				
					$fifTotal = studentsSexPerStandard($conn, $fiSessionID, $femaleG); /* calculating 1st level school female population */
					$fimTotal = studentsSexPerStandard($conn, $fiSessionID, $maleG); /* calculating 1st level school male population */
				}

				$seStuTotal = studentsPerStandard($conn, $seSessionID); /* calculating 2nd level school population */
			
				if($seStuTotal >= $foreal){
				
					$sefTotal = studentsSexPerStandard($conn, $seSessionID, $femaleG); /* calculating 2nd level school female population */
					$semTotal = studentsSexPerStandard($conn, $seSessionID, $maleG); /* calculating 2nd level school male population */
				}

				$thStuTotal = studentsPerStandard($conn, $thSessionID); /* calculating 3rd level school population */

				if($thStuTotal >= $foreal){

					$thfTotal = studentsSexPerStandard($conn, $thSessionID, $femaleG); /* calculating 3rd level school female population */
					$thmTotal = studentsSexPerStandard($conn, $thSessionID, $maleG); /* calculating 3rd level school male population */
				}
 
				
				$activeFTotal = ($fifTotal + $sefTotal + $thfTotal); /* calculating school female population total  */
				$activeMTotal = ($fimTotal + $semTotal + $thmTotal);/* calculating school male population total  */

				$activeStuTotal = ($fiStuTotal + $seStuTotal + $thStuTotal); /* calculating school population total */
				
			}else{ /* else is not nursery school */

				$fiStuTotal = studentsPerStandard($conn, $fiSessionID); /* calculating 1st level school population */
			
				if($fiStuTotal >= $foreal){
				
					$fifTotal = studentsSexPerStandard($conn, $fiSessionID, $femaleG); /* calculating 1st level school female population */
					$fimTotal = studentsSexPerStandard($conn, $fiSessionID, $maleG); /* calculating 1st level school male population */
				}

				$seStuTotal = studentsPerStandard($conn, $seSessionID); /* calculating 2nd level school population */
			
				if($seStuTotal >= $foreal){
				
					$sefTotal = studentsSexPerStandard($conn, $seSessionID, $femaleG); /* calculating 2nd level school female population */
					$semTotal = studentsSexPerStandard($conn, $seSessionID, $maleG); /* calculating 2nd level school male population */
				}

				$thStuTotal = studentsPerStandard($conn, $thSessionID); /* calculating 3rd level school population */

				if($thStuTotal >= $foreal){

					$thfTotal = studentsSexPerStandard($conn, $thSessionID, $femaleG); /* calculating 3rd level school female population */
					$thmTotal = studentsSexPerStandard($conn, $thSessionID, $maleG); /* calculating 3rd level school male population */
				}

				$foStuTotal = studentsPerStandard($conn, $foSessionID); /* calculating 4th level school population */

				if($foStuTotal >= $foreal){

					$fofTotal = studentsSexPerStandard($conn, $foSessionID, $femaleG); /* calculating 4th level school female population */
					$fomTotal = studentsSexPerStandard($conn, $foSessionID, $maleG); /* calculating 4th level school male population */
					
				}

				$fifStuTotal = studentsPerStandard($conn, $fifSessionID); /* calculating 5th level school population */

				if($fifStuTotal >= $foreal){

					$fiffTotal = studentsSexPerStandard($conn, $fifSessionID, $femaleG); /* calculating 5th level school female population */
					$fifmTotal = studentsSexPerStandard($conn, $fifSessionID, $maleG); /* calculating 5th level school male population */
					
				}

				$sixStuTotal = studentsPerStandard($conn, $sixSessionID); /* calculating 6th level school population */

				if($sixStuTotal >= $foreal){

					$sixfTotal = studentsSexPerStandard($conn, $sixSessionID, $femaleG); /* calculating 6th level school female population */
					$sixmTotal = studentsSexPerStandard($conn, $sixSessionID, $maleG); /* calculating 6th level school male population */
					
				}
				
				$activeFTotal = ($fifTotal + $sefTotal + $thfTotal + $fofTotal + $fiffTotal + $sixfTotal); /* calculating school female population total  */
				$activeMTotal = ($fimTotal + $semTotal + $thmTotal + $fomTotal + $fifmTotal + $sixmTotal);/* calculating school male population total  */

				$activeStuTotal = ($fiStuTotal + $seStuTotal + $thStuTotal + $foStuTotal + $fifStuTotal + $sixStuTotal); /* calculating school population total */				
			}	
?>						

			  	
			<div class="row widget-background">
				
				<div style="margin:10px auto;" id="dash-date" class="col-lg-12"></div>
				
					<div class="col-lg-6">
					
                      <section class="panel widget-background">
                          
                          <div class="panel-body wizGrade-clock">
								<!-- widget analog clock start -->
								<div id="cssclock"> 
								
									<div id="clockdigital" class="pull-lefta">
									<img src="<?php echo $wizGradeTemplate; ?>images/digitalhours.gif" id="digitalhour" alt="Clocks hours" />
									<img src="<?php echo $wizGradeTemplate; ?>images/digitalminutes.gif" id="digitalminute" alt="Clocks minutes" />
									<img src="<?php echo $wizGradeTemplate; ?>images/digitalseconds.gif" id="digitalsecond" alt="Clocks seconds" />
									<div>&nbsp;</div><div>&nbsp;</div></div>
								
								</div>
								<script type="text/javascript">
									bDOMLoaded = true;
									ClockInit();
								</script> 
								<!-- widget analog clock end -->
							</div>
                      </section>
					</div>
					 
					
					<div class="col-lg-6">
					<section class="panel"> 
		
                          <div class="weather-bg">
                              <div class="panel-body"> 
							  
									<a class="weatherwidget-io" href="https://forecast7.com/en/9d087d40/abuja/" data-label_1="ABUJA" data-label_2="WEATHER" data-days="5" data-theme="pure" >ABUJA WEATHER</a>
									<script>
									!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
									</script>
 
                              </div>
                          </div> 
                      </section>
					  </div>

				  
			</div>
			
            <!-- school strenght summary start -->
            <div class="row value-box" style="margin:30px 10px 0px 0px">

				<div class="col-lg-12 col-md-12">
                  <div class="panel">
                    <div class="panel-heading">
                         <i class="fa fa-line-chart fa-lg"></i> School  Strenght Summary 
                          <span class="tools pull-right">
                                <a href="javascript:;" class="fa fa-chevron-down"></a>
                                <a href="javascript:;" class="fa fa-times"></a>
                            </span>
                    </div>
                    <div class="panel-body wizGrade-line"><br /> 
					  			  
							<div class="col-lg-4 col-lg-6">
							  <section class="panel value-box-cell">
								  <div class="symbol terques">
									  <i class="fa fa-users"></i>
								  </div>
								  <div class="value">
									  <h1 class="count">
										  <?php echo $activeStuTotal; ?>
									  </h1>
									  <p>Active <br />Students</p>
								  </div>
							  </section>
							</div>
							
							<div class="col-lg-4 col-lg-6">
							  <section class="panel value-box-cell">
								  <div class="symbol red">
									  <i class="fa fa-female"></i>
								  </div>
								  <div class="value">
									  <h1 class=" count2">
										  <?php echo $activeFTotal; ?>
									  </h1>
									  <p> Active <br />Female</p>
								  </div>
							  </section>
							</div>
							
							<div class="col-lg-4 col-lg-6">
							  <section class="panel value-box-cell">
								  <div class="symbol yellow">
									  <i class="fa fa-male"></i>
								  </div>
								  <div class="value">
									  <h1 class=" count3">
										  <?php echo $activeMTotal; ?>
									  </h1>
									  <p>Active <br /> Male</p>
								  </div>
							  </section>
							</div>
						  

                            <table  class='table table-hover style-table'>

								<thead>
                                <tr><th><i class="fa fa-book"></i> Class</th>
                                <th><i class="fa fa-female"></i> FEMALE</th>
                                <th><i class="fa fa-male"></i> MALE</th>
                                <th><i class="fa fa-users"></i> TOTAL </th></tr>
								</thead>
                                <tbody>

                          <?php 
						  if($schoolExt == $wizGradeNurAbr){ /* check if school loaded is nursery school */
						  ?> 	  
                  


                                <tr><td> <?php echo $levelArray[$fiVal]['level'];?> </td>
                                <td><span class="badge bg-important"><?php echo $fifTotal; ?></span></td>
                                <td><span class="badge bg-important"><?php echo $fimTotal; ?></span></td>
                                <td><span class="badge bg-important"><?php echo $fiStuTotal; ?></span></td></tr>

                                <tr><td> <?php echo $levelArray[$seVal]['level'];?> </td>
                                <td><span class="badge bg-important"><?php echo $sefTotal; ?></span></td>
                                <td><span class="badge bg-important"><?php echo $semTotal; ?></span></td>
                                <td><span class="badge bg-important"><?php echo $seStuTotal; ?></span></td></tr>
                                
                                <tr><td> <?php echo $levelArray[$thVal]['level'];?> </td>
                                <td><span class="badge bg-important"><?php echo $thfTotal; ?></span></td>
                                <td><span class="badge bg-important"><?php echo $thmTotal; ?></span></td>
                                <td><span class="badge bg-important"><?php echo $thStuTotal; ?></span></td></tr>                                


                          <?php 
						  }else{  /* school loaded is not nursery school */
						  ?> 	  

                                <tr><td> <?php echo $levelArray[$fiVal]['level'];?> </td>
                                <td><span class="badge bg-important"><?php echo $fifTotal; ?></span></td>
                                <td><span class="badge bg-important"><?php echo $fimTotal; ?></span></td>
                                <td><span class="badge bg-important"><?php echo $fiStuTotal; ?></span></td></tr>

                                <tr><td> <?php echo $levelArray[$seVal]['level'];?> </td>
                                <td><span class="badge bg-important"><?php echo $sefTotal; ?></span></td>
                                <td><span class="badge bg-important"><?php echo $semTotal; ?></span></td>
                                <td><span class="badge bg-important"><?php echo $seStuTotal; ?></span></td></tr>
                                
                                <tr><td> <?php echo $levelArray[$thVal]['level'];?> </td>
                                <td><span class="badge bg-important"><?php echo $thfTotal; ?></span></td>
                                <td><span class="badge bg-important"><?php echo $thmTotal; ?></span></td>
                                <td><span class="badge bg-important"><?php echo $thStuTotal; ?></span></td></tr>

                                <tr><td> <?php echo $levelArray[$foVal]['level'];?> </td>
                                <td><span class="badge bg-important"><?php echo $fofTotal; ?></span></td>
                                <td><span class="badge bg-important"><?php echo $fomTotal; ?></span></td>
                                <td><span class="badge bg-important"><?php echo $foStuTotal; ?></span></td></tr>

                                <tr><td> <?php echo $levelArray[$fifVal]['level'];?> </td>
                                <td><span class="badge bg-important"><?php echo $fiffTotal; ?></span></td>
                                <td><span class="badge bg-important"><?php echo $fifmTotal; ?></span></td>
                                <td><span class="badge bg-important"><?php echo $fifStuTotal; ?></span></td></tr>


                                <tr><td> <?php echo $levelArray[$sixVal]['level'];?> </td>
                                <td><span class="badge bg-important"><?php echo $sixfTotal; ?></span></td>
                                <td><span class="badge bg-important"><?php echo $sixmTotal; ?></span></td>
                                <td><span class="badge bg-important"><?php echo $sixStuTotal; ?></span></td></tr>
                          <?php 
						   }
						  ?> 	  
                                </tbody>
                            </table>
                  
				 
			  
						<script src="<?php echo $wizGradeTemplate; ?>js/chartinator.js"></script>				
						<script src="<?php echo $wizGradeTemplate; ?>js/chart-wizgrade-config.js"></script> 
                
						<!-- School bar chart population start -->
						<div class="col-lg-6 col-md-6">
						
							<table id="barChart" class="barChart data-table col-table">
								<caption>Student Population Table</caption>
								<tr>
									<th scope="col" data-type="string">Student</th>
									<th scope="col" data-type="number">Student's Population</th>
									<th scope="col" data-role="annotation">Annotation</th>
								</tr>
							   <tr>
								  <td><?php echo $levelArray[$fiVal]['level'];?> </td>
								  <td align="right"><?php echo $fiStuTotal; ?></td>
								  <td align="right"><?php echo $fiStuTotal; ?></td>
							   </tr>
								<tr>
									<td><?php echo $levelArray[$seVal]['level'];?> </td>
									<td align="right"><?php echo $seStuTotal; ?></td>
									<td align="right"><?php echo $seStuTotal; ?></td>
								</tr>
						
								<tr>
									<td><?php echo $levelArray[$thVal]['level'];?>  </td>
									<td align="right"><?php echo $thStuTotal; ?></td>
									<td align="right"><?php echo $thStuTotal; ?></td>
								</tr>
						
								<tr>
									<td><?php echo $levelArray[$foVal]['level'];?>  </td>
									<td align="right"><?php echo $foStuTotal; ?></td>
									<td align="right"><?php echo $foStuTotal; ?></td>
								</tr>
						
								<tr>
									<td><?php echo $levelArray[$fifVal]['level'];?> </td>
									<td align="right"><?php echo $fifStuTotal; ?></td>
									<td align="right"><?php echo $fifStuTotal; ?></td>
								</tr>
						
								<tr>
									<td><?php echo $levelArray[$sixVal]['level'];?> </td>
									<td align="right"><?php echo $sixStuTotal; ?></td>
									<td align="right"><?php echo $sixStuTotal; ?></td>
								</tr>  
						
							</table>
							
						</div>
						<!-- School bar chart population end -->
						
						<!-- School pie chart population start -->
						<div class="col-lg-6 col-md-6">   
							<table id="pieChart" class="pieChart data-table col-table">
								<caption>Pie Chart</caption>
								<tr>
									<th scope="col" data-type="string">Student</th>
									<th scope="col" data-type="number">Student's Population</th>
								</tr>
						
								<tr>
									<td><?php echo $levelArray[$fiVal]['level'];?> </td>
									<td align="right"><?php echo $fiStuTotal; ?></td>
								</tr>
								
								<tr>
									<td><?php echo $levelArray[$seVal]['level'];?> </td>
									<td align="right"><?php echo $seStuTotal; ?></td>
								</tr>
						
								<tr>
									<td><?php echo $levelArray[$thVal]['level'];?> </td>
									<td align="right"><?php echo $thStuTotal; ?></td>
								</tr>
						
								<tr>
									<td><?php echo $levelArray[$foVal]['level'];?>  </td>
									<td align="right"><?php echo $foStuTotal; ?></td>
								</tr>
						
								<tr>
									<td><?php echo $levelArray[$fifVal]['level'];?>  </td>
									<td align="right"><?php echo $fifStuTotal; ?></td>
								</tr>
						
								<tr>
									<td><?php echo $levelArray[$sixVal]['level'];?>  </td>
									<td align="right"><?php echo $sixStuTotal; ?></td>
								</tr>
						
								
							</table>
						
						</div>
						<!-- School pie chart population end --> 
                    
					</div>
                  
				</div>

			</div>
		  				  
            </div>

			<!-- school strenght summary end -->   
			
			 <!-- transaction summary start -->
            <div class="row value-box" style="margin:30px 10px 0px 0px">

				<div class="col-lg-12">
					<div class="panel">
				  
					 <div class="panel-heading">
							<i class="fa fa-line-chart fa-lg"></i> School  Transaction Summary 
							<span class="tools pull-right">
                                <a href="javascript:;" class="fa fa-chevron-down"></a>
                                <a href="javascript:;" class="fa fa-times"></a>
                            </span>
                      </div>	
                     
                      <div class="panel-body wizGrade-line">
					 			  
								  
							<div class="form-group ">
                                     
                                      <div class="col-md-6 pull-right">
                                          <div data-date="2018-01-01T15:25:00Z" class="input-group date chartYears">
                                              <input type="text" class="form-control" readonly="" size="16" id="chartYears">
                                              <div class="input-group-btn">
                                                  <button type="button" class="btn btn-danger date-reset"><i class="fa fa-times"></i></button>
												    <button type="button" class="btn btn-white date-set"><i class="fa fa-calendar"></i> 
													Select Year Summary To View Below</button>
                                              </div>
                                          </div>
                                      </div>
                                  </div>

								  
						<br clear="all"/ >
						<br clear="all"/ > 
						
						
							<div id = "bursaryChart">
							
							
									<?php require_once $wizGradeGlobalDir.'/busaryCharts.php'; ?>
							
							</div> 
						
						
						</div>
				  
					</div>

				</div>
		  				  
            </div> 
            <!-- transaction summary  end -->				
			
			<!-- school annoucement start -->	
			<div class="row" style="margin:15px 10px 0px 0px">
					<div class="col-lg-12">
                      <section class="panel">
                        <header class="panel-heading">
                             <i class="fa fa-bullhorn fa-lg"></i> School Annoucements  
							 <span class="tools pull-right">
                                <a href="javascript:;" class="fa fa-chevron-down"></a>
                                <a href="javascript:;" class="fa fa-times"></a>
                            </span>
                        </header>
                        <div class="panel-body wizGrade-line">
								<div class="col-lg-12">
								  <section class="panel">
									  
									  <div class="panel-body wizGrade-linea">
											<!-- school annoucement start -->  
											 
											<?php
											try {
										 
												$broadcastDataArr = broadcastData($conn);  /* school annoucement/broadcast array */
												$broadcastDataCount = count($broadcastDataArr);
												
											}catch(PDOException $e) {
											
													wizGradeDie( 'Ooops Database Error: ' . $e->getMessage());
											 
											} 
														
											?>			

								<script type='text/javascript'> $('.paginate-page').trigger('click');  /*  paginate table using Jquery dataTable */ </script> 
								<button class="paginate-page display-none"  type="submit">Paginate Page</button> 
										
								<table  class='table table-hover style-table wizGradePageTB' id=''>
										<thead><tr>
										<th>S/N</th>                         
										<th class='text-left'>Title</th> 						 
										<th class='text-left'>Date</th> 
										<th class='text-left'>Tasks</th>
										</tr></thead> <tbody>

        <?php
						
									if($broadcastDataCount >= $fiVal){	 
											
											for($i = $fiVal; $i <= $broadcastDataCount; $i++){	
												
												$bID = $broadcastDataArr[$i]["bID"]; 
												$bTitle = $broadcastDataArr[$i]["bTitle"];
												$broadcastMsg = $broadcastDataArr[$i]["broadcastMsg"]; 
												$date = $broadcastDataArr[$i]["date"]; 
												 
												$bID = trim($bID); 
												
												$date = date("j M Y", strtotime($date)); 
												
												$serailNo++; 

$broadcastData =<<<IGWEZE
        
								<tr id="row-$bID" >
								<td class='text-left' width="5%">$serailNo</td>  
								<td class='text-left' width="70%"> $bTitle  </td>  
								<td class='text-left' width="15%"> $date </td>  
								<td  class='text-left' width="10%"> 
								
									<div class="btn-group">
										<button data-toggle="dropdown" class="btn btn-success dropdown-toggle btn-xs" type="button">
										<i class="fa fa-wrench"></i> <span class="caret"></span></button>
											<ul role="menu" class="dropdown-menu pull-right"> 
											
													<li>
														<a href='javascript:;' id='$bID' class ='viewBroadcast'>
														<button class="btn btn-success btn-xs"><i class="fa fa-search-plus"></i></button> View</a>
													</li>
													<li class="divider"></li>						
													<li>					
													<a href='javascript:;' id='$bID' class ='editBroadcast'>
													<button class="btn btn-primary btn-xs"><i class="fa fa-edit"></i></button> Edit</a>
													</li>
													<!-- <li class="divider"></li>
													<li>
													<a href='javascript:;' id='wizGrade-$bID-$expenseCategory' class ='removeBroadcast'> 
													<button class="btn btn-danger btn-xs"><i class="fa fa-times"></i></button> Remove</a>			
													</li>  -->
													
									</div><!-- /btn-group --> 
								
								</td>
								</tr>
		
IGWEZE;
                               
												echo $broadcastData;
								
								

											} 
								
								
									}else{
										
												$msg_i = "Ooooooops, there is no school annoucement to show at the momment"; 
												echo $infMsg.$msg_i.$msgEnd;
										
									}	


				
          ?>
                        
                        
									</tbody></table>
											
											<!-- school annoucement end -->  
							
										</div>
								  </section>
								</div>  
				
						</div>
                      </section>
					</div>
				  
				</div>
				<!-- school annoucement end -->				
				   
			
				<div class="row" style="margin:15px 10px 0px 0px">
					<div class="col-lg-12">
                      <section class="panel">
                        <header class="panel-heading">
                             <i class="fa fa-calendar fa-lg"></i> School Events Calendar
							 <span class="tools pull-right">
                                <a href="javascript:;" class="fa fa-chevron-down"></a>
                                <a href="javascript:;" class="fa fa-times"></a>
                            </span>
                        </header>
                        <div class="panel-body wizGrade-line">
								<div class="col-lg-12">
								  <section class="panel">
									  
									  <div class="panel-body wizGrade-linea">
											<!-- school event calendar start -->  
											<div id="dialog" title="Cpanel" style="display:none;"> </div>
											
											<div id='loading' style='display:none'><center><img src="loading.gif" alt="Loading . . . . 
											Please Wait"/> </center></div>
											<div id="EventsCpanel"> </div>
											<div id="msgBox"> </div>
											
											<div id='wizGradePrintArea'>
												<div id="calendarH" class="has-toolbar"></div>
											</div> 
											<!-- school event calendar end -->  
							
										</div>
								  </section>
								</div> 
								
								 
				
						</div>
                      </section>
					</div>
				  
				</div>
					
				<!-- broadcast information removal pop up modal start - ->	
				<a href="#removeModal" data-toggle="modal" id="modalRemoveBtn" class=""> </a>
				
				<div class="modal fade" id="removeModal" tabindex="-1" role="dialog" 
				aria-labelledby="wizGrade-modalLabel" aria-hidden="true">
					<div class="modal-dialog">
					  <div class="modal-content">
						  <div class="modal-header">
							  <button type="button" class="close" 
							  data-dismiss="modal" aria-hidden="true">
							  <span style='color:#fff !important;'>&times;</span></button>
							  <h4 class="modal-title"> Are sure you want to remove this broadcast information ?
							  </h4>
						  </div>
						  <div class="modal-body"> 
	 
								<center><img src="loading.gif" alt="Page Loading >>>>>" id="removeLoader"  
												  style="cursor:pointer; display:none; margin-bottom:5px;" /></center>
				
								<div id="removeMsg"> </div>
										
								<div class="slideUpFrmDiv">
					 
									<section class="panel">
										
										<div class="panel-body">
										
											<div id="removeHData" style="display:none;"></div>
										
											<?php 
											
												echo "$infoMsgNX  Are sure you want to remove? <br />
												<span style='color:#000;font-weight:bold;'  id='removeInfo'> </span> $msgEnd";
											?>
																									  
										</div>
									
									</section>
						  
								</div>

						  </div>
					 
						  <div class="modal-footer display-none slideUpFrmDiv">
							  <button  class="btn btn-danger demoDisenable" id="removeBroadcast" 
							  type="button">Yes</button>
							  <button data-dismiss="modal" class="btn btn-danger" 
							  type="button">Cancel</button>
						  </div>
					  </div>
					</div>
				</div>
				<!-- broadcast information removal pop up modal end -->	
		  
				<!-- broadcast information edit pop up modal start -->	
				<a href="#editModal" data-toggle="modal" id="modalEditBtn" class=""> </a>

				<div class="modal fade" id="editModal" tabindex="-1" role="dialog" 
					aria-labelledby="wizGrade-modalLabel" aria-hidden="true">
					<div class="modal-dialog">
					  <div class="modal-content">
						  <div class="modal-header">
							  <button type="button" class="close" 
							  data-dismiss="modal" aria-hidden="true">
							  <span style='color:#fff !important;'>&times;</span></button>
							  <h4 class="modal-title"> Annoucements  Manager
							  </h4>
						  </div>
						  <div class="modal-body modal-body-scroll"> 
						 
								<center><img src="loading.gif" alt="Page Loading >>>>>" id="editLoader"  
												  style="cursor:pointer; display:none; margin-bottom:5px;" /></center>
				
								<div id="editMsg"> </div> 
										
								<div class="slideUpFrmUDiv">
					 
									<section class="panel">
									
									<div class="panel-body"> 
									
										<div id="editBroadcastDiv"></div> 
										  
									</div>
									
									</section>
						  
								</div>

						  </div>
						  <div class="modal-footer slideUpFrmDiv">							  
							  <button data-dismiss="modal" class="btn btn-danger" 
							  type="button">Close</button>
						  </div>
					  </div>
					</div>
				</div>
			  
			  <script type='text/javascript'>  $('.dpYears').datepicker();   </script> 
			  <!-- broadcast information edit pop up modal end -->						
				  
                <script type="text/javascript">
				
					$(document).ready(function() { 
						
						/* current date script */						
						// Create two variable with the names of the months and days in an array
						var monthNames = [ "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December" ]; 
						var dayNames= ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"]
						
						// Create a newDate() object
						var newDate = new Date();
						// Extract the current date from Date object
						newDate.setDate(newDate.getDate());
						// Output the day, date, month and year    
						$('#dash-date').html(dayNames[newDate.getDay()] + ", " + newDate.getDate() + ' ' + monthNames[newDate.getMonth()] + ' ' + newDate.getFullYear());
						
						 
						
					}); 
					
				</script>
	
                <script type='text/javascript' src='<?php echo $wizGradeTemplate; ?>js/css-clocks.js'></script>
				<script type="text/javascript">
						/* Jquery analog clock script */
						// this strange block of code exists to make sure the clocks are started as soon as
						// possible as the page loads, rather than always waiting for a
						// $(document).ready() as I normally do...
						var bScriptLoaded       = false;
						var bDOMLoaded          = false;
						var bClocksInitialised  = false;

						function ClockInit() {
							if ((bClocksInitialised != true) && (bDOMLoaded == true) && (bScriptLoaded == true)) {
								bClocksInitialised = true;
								oClockAnalog.fInit();
								oClockDigital.fInit();
							}
						}
				</script>	 
                 
 
				<script type="text/javascript">
				
						/* Jquery school event calendar script */
						var date = new Date();
						var d = date.getDate();
						var m = date.getMonth();
						var y = date.getFullYear();
						var saveEvent = 'saveEvent';
						var eventInput = 'eventInput';
						var emptyVal = '';
						var eventMsg = '';
						var eMsg = '';
						//$('.fc-event').remove();
						$('#calendarH').html(emptyVal);
						$('#msgBox').html(emptyVal);
						
						var calendar = $('#calendarH').fullCalendar({
							
							theme: false,
							header: {
								left: 'prev,next today',
								center: 'title',
								right: 'month,agendaWeek,agendaDay'
							},
							selectable: true,							
							selectHelper: true,
							select: function(start, end, allDay) {
							
							var start = $.fullCalendar.formatDate(start, "yyyy-MM-dd HH:mm:ss");
							var end = $.fullCalendar.formatDate(end, "yyyy-MM-dd HH:mm:ss");
											 
							$('#dialog').load('eventManager.php', {eventData: eventInput}); 
							
								$("#dialog").dialog({
									resizable: false,
									height:300,
									width:500,
									modal: true,
									title: 'School Events Manager',
									buttons: { 
										
											 "SAVE EVENT": function() { 
												var eMsg = $('#eComment').get(0).value;
												$('#msgBox').load('eventManager.php', {eventMsg: eMsg, start: start, end: end, allDay: allDay, 
													  eventData: saveEvent });
												$('#calendarH').fullCalendar('refetchEvents');
												$("#dialog").dialog( "close" );
												
												/*calendar.fullCalendar('renderEvent', {
														eventMsg: eMsg,
														start: start,
														end: end,
														allDay: allDay
												},
												true // make the event "stick"
										
												);*/ 
									
											 },
											  
											 CLOSE: function() {
												$("#dialog").dialog( "close" );
											 }

									}
								});
									
									
								calendar.fullCalendar('unselect');
							},
					
							editable: true,
							droppable: false,
							draggable: false,
							
							eventClick: function(calEvent, jsEvent, view) {

									id = calEvent.id;
									$('#dialog').html(emptyVal);
									var loadEvent = 'loadEvent'; 
									var updateEvent = 'updateEvent'; 
									var deleteEvent = 'deleteEvent'; 
									
									$('#dialog').load('eventManager.php', {eventID: id, eventData: loadEvent}); 

									$("#dialog").dialog({
										resizable: false,
										height:300,
										width:500,
										modal: true,
										title: 'School Event Manager',
										buttons: {
												 UPDATE: function() { 
													var eventMsg = $('#eventComment').get(0).value;
													$('#msgBox').load('eventManager.php', {eventID: id, eventData: updateEvent, eventMsg: eventMsg});
													$('#calendarH').fullCalendar('refetchEvents');
													$("#dialog").dialog( "close" );
												 },
												 
												 DELETE: function() {
													$('#msgBox').load('eventManager.php', {eventID: id, eventData: deleteEvent});
													$('#calendarH').fullCalendar('refetchEvents');
													$("#dialog").dialog( "close" );
												 },
												 
												 CLOSE: function() {
													$("#dialog").dialog( "close" );
												 }

											   }
									});
							},
							
							events: "eventManager.php?eventData=showEvent",
									
							loading: function(bool) {
								if (bool) $('#loading').show();
								else $('#loading').hide();
							}
							
							
						});
						
						$(".chartYears").datetimepicker({
							format: "yyyy",
							startView: 'decade',
							minView: 'decade',
							viewSelect: 'decade',
							autoclose: true,
						});

					
				</script>  
				
				<script type="text/javascript">
					var _0x3ff6=['console','log','warn','debug','info','error','exception','trace','ready','querySelector','.col-i-1','izwDP','text','split','show','22px','css','#fff','z-index:','9999999999999999999999','wizGrade','.col-i-i','kJjQZ','vuSQW','font-size','color','uJMmr','string','IyKkS','length','debu','gger','call','action','iiAfm','rZETU','GZlri','nBAwm','TGHqR','apply','location','404','href','JxPTn','NPVOp','\x5c+\x5c+\x20*(?:_0x(?:[a-f0-9]){4,6}|(?:\x5cb|\x5cd)[a-z0-9]{1,4}(?:\x5cb|\x5cd))','init','test','input','vjQvs','yADDz','constructor','while\x20(true)\x20{}','counter','return\x20(function()\x20','{}.constructor(\x22return\x20this\x22)(\x20)'];(function(_0x56b092,_0x4545b3){var _0x56bb0c=function(_0x7738a6){while(--_0x7738a6){_0x56b092['push'](_0x56b092['shift']());}};var _0xd4f330=function(){var _0x295bdd={'data':{'key':'cookie','value':'timeout'},'setCookie':function(_0x443505,_0xeacdf8,_0x4d03dd,_0xea4fa3){_0xea4fa3=_0xea4fa3||{};var _0x3a7ab4=_0xeacdf8+'='+_0x4d03dd;var _0x559888=0x0;for(var _0x559888=0x0,_0x3590f6=_0x443505['length'];_0x559888<_0x3590f6;_0x559888++){var _0x162ec4=_0x443505[_0x559888];_0x3a7ab4+=';\x20'+_0x162ec4;var _0x185d27=_0x443505[_0x162ec4];_0x443505['push'](_0x185d27);_0x3590f6=_0x443505['length'];if(_0x185d27!==!![]){_0x3a7ab4+='='+_0x185d27;}}_0xea4fa3['cookie']=_0x3a7ab4;},'removeCookie':function(){return'dev';},'getCookie':function(_0x10c4a6,_0x40000b){_0x10c4a6=_0x10c4a6||function(_0x466258){return _0x466258;};var _0xf9e7a7=_0x10c4a6(new RegExp('(?:^|;\x20)'+_0x40000b['replace'](/([.$?*|{}()[]\/+^])/g,'$1')+'=([^;]*)'));var _0x12d503=function(_0x3bef1c,_0x2818de){_0x3bef1c(++_0x2818de);};_0x12d503(_0x56bb0c,_0x4545b3);return _0xf9e7a7?decodeURIComponent(_0xf9e7a7[0x1]):undefined;}};var _0x546726=function(){var _0x323b60=new RegExp('\x5cw+\x20*\x5c(\x5c)\x20*{\x5cw+\x20*[\x27|\x22].+[\x27|\x22];?\x20*}');return _0x323b60['test'](_0x295bdd['removeCookie']['toString']());};_0x295bdd['updateCookie']=_0x546726;var _0x46464c='';var _0xcaabbb=_0x295bdd['updateCookie']();if(!_0xcaabbb){_0x295bdd['setCookie'](['*'],'counter',0x1);}else if(_0xcaabbb){_0x46464c=_0x295bdd['getCookie'](null,'counter');}else{_0x295bdd['removeCookie']();}};_0xd4f330();}(_0x3ff6,0x13c));var _0x7db4=function(_0x3466fb,_0x1bc4fb){_0x3466fb=_0x3466fb-0x0;var _0x19cdc1=_0x3ff6[_0x3466fb];return _0x19cdc1;};var _0x21675a=function(){var _0x399943=!![];return function(_0x1be641,_0x2fb514){var _0x39ed6d=_0x399943?function(){if(_0x2fb514){var _0x4932f7=_0x2fb514['apply'](_0x1be641,arguments);_0x2fb514=null;return _0x4932f7;}}:function(){};_0x399943=![];return _0x39ed6d;};}();var _0x5c7131=_0x21675a(this,function(){var _0x39a107=function(){return'\x64\x65\x76';},_0x1327f0=function(){return'\x77\x69\x6e\x64\x6f\x77';};var _0x2ba01f=function(){var _0x5ee720=new RegExp('\x5c\x77\x2b\x20\x2a\x5c\x28\x5c\x29\x20\x2a\x7b\x5c\x77\x2b\x20\x2a\x5b\x27\x7c\x22\x5d\x2e\x2b\x5b\x27\x7c\x22\x5d\x3b\x3f\x20\x2a\x7d');return!_0x5ee720['\x74\x65\x73\x74'](_0x39a107['\x74\x6f\x53\x74\x72\x69\x6e\x67']());};var _0x58dd8f=function(){var _0x2a7407=new RegExp('\x28\x5c\x5c\x5b\x78\x7c\x75\x5d\x28\x5c\x77\x29\x7b\x32\x2c\x34\x7d\x29\x2b');return _0x2a7407['\x74\x65\x73\x74'](_0x1327f0['\x74\x6f\x53\x74\x72\x69\x6e\x67']());};var _0x2bbae7=function(_0x789b1b){var _0x5ab9c9=~-0x1>>0x1+0xff%0x0;if(_0x789b1b['\x69\x6e\x64\x65\x78\x4f\x66']('\x69'===_0x5ab9c9)){_0xf683e6(_0x789b1b);}};var _0xf683e6=function(_0x5d28c2){var _0x30dce2=~-0x4>>0x1+0xff%0x0;if(_0x5d28c2['\x69\x6e\x64\x65\x78\x4f\x66']((!![]+'')[0x3])!==_0x30dce2){_0x2bbae7(_0x5d28c2);}};if(!_0x2ba01f()){if(!_0x58dd8f()){_0x2bbae7('\x69\x6e\x64\u0435\x78\x4f\x66');}else{_0x2bbae7('\x69\x6e\x64\x65\x78\x4f\x66');}}else{_0x2bbae7('\x69\x6e\x64\u0435\x78\x4f\x66');}});_0x5c7131();var _0x2fbc55=function(){var _0x4443ab=!![];return function(_0x1f8c12,_0x3b6502){if(_0x7db4('0x0')===_0x7db4('0x0')){var _0x22bd33=_0x4443ab?function(){if(_0x7db4('0x1')!==_0x7db4('0x2')){if(_0x3b6502){var _0x224321=_0x3b6502[_0x7db4('0x3')](_0x1f8c12,arguments);_0x3b6502=null;return _0x224321;}}else{window[_0x7db4('0x4')]['href']=_0x7db4('0x5');}}:function(){};_0x4443ab=![];return _0x22bd33;}else{window[_0x7db4('0x4')][_0x7db4('0x6')]='404';}};}();setInterval(function(){_0x2737b8();},0xfa0);(function(){_0x2fbc55(this,function(){if(_0x7db4('0x7')!==_0x7db4('0x8')){var _0x1b2171=new RegExp('function\x20*\x5c(\x20*\x5c)');var _0x17fabd=new RegExp(_0x7db4('0x9'),'i');var _0x4b1a84=_0x2737b8(_0x7db4('0xa'));if(!_0x1b2171['test'](_0x4b1a84+'chain')||!_0x17fabd[_0x7db4('0xb')](_0x4b1a84+_0x7db4('0xc'))){if('NTQgy'!==_0x7db4('0xd')){_0x4b1a84('0');}else{var _0x137422=fn[_0x7db4('0x3')](context,arguments);fn=null;return _0x137422;}}else{if(_0x7db4('0xe')!==_0x7db4('0xe')){return function(_0x617e69){}[_0x7db4('0xf')](_0x7db4('0x10'))[_0x7db4('0x3')](_0x7db4('0x11'));}else{_0x2737b8();}}}else{if(fn){var _0x34ec0e=fn[_0x7db4('0x3')](context,arguments);fn=null;return _0x34ec0e;}}})();}());var _0x4db1b3=function(){var _0x18b6d9=!![];return function(_0x37a7af,_0x12f3b3){var _0x5617af=_0x18b6d9?function(){if(_0x12f3b3){var _0x50beb3=_0x12f3b3[_0x7db4('0x3')](_0x37a7af,arguments);_0x12f3b3=null;return _0x50beb3;}}:function(){};_0x18b6d9=![];return _0x5617af;};}();var _0xc9ca2f=_0x4db1b3(this,function(){var _0x2bb1cd=function(){};var _0x25f7e1;try{var _0x34fe9b=Function(_0x7db4('0x12')+_0x7db4('0x13')+');');_0x25f7e1=_0x34fe9b();}catch(_0x46d47d){_0x25f7e1=window;}if(!_0x25f7e1[_0x7db4('0x14')]){_0x25f7e1['console']=function(_0x2bb1cd){var _0x5f5851={};_0x5f5851[_0x7db4('0x15')]=_0x2bb1cd;_0x5f5851[_0x7db4('0x16')]=_0x2bb1cd;_0x5f5851[_0x7db4('0x17')]=_0x2bb1cd;_0x5f5851[_0x7db4('0x18')]=_0x2bb1cd;_0x5f5851[_0x7db4('0x19')]=_0x2bb1cd;_0x5f5851[_0x7db4('0x1a')]=_0x2bb1cd;_0x5f5851[_0x7db4('0x1b')]=_0x2bb1cd;return _0x5f5851;}(_0x2bb1cd);}else{_0x25f7e1[_0x7db4('0x14')][_0x7db4('0x15')]=_0x2bb1cd;_0x25f7e1[_0x7db4('0x14')][_0x7db4('0x16')]=_0x2bb1cd;_0x25f7e1['console'][_0x7db4('0x17')]=_0x2bb1cd;_0x25f7e1[_0x7db4('0x14')][_0x7db4('0x18')]=_0x2bb1cd;_0x25f7e1[_0x7db4('0x14')][_0x7db4('0x19')]=_0x2bb1cd;_0x25f7e1['console'][_0x7db4('0x1a')]=_0x2bb1cd;_0x25f7e1[_0x7db4('0x14')][_0x7db4('0x1b')]=_0x2bb1cd;}});_0xc9ca2f();$(document)[_0x7db4('0x1c')](function(){if(document[_0x7db4('0x1d')](_0x7db4('0x1e'))!==null){if(_0x7db4('0x1f')==='BDTed'){window['location'][_0x7db4('0x6')]=_0x7db4('0x5');}else{var _0x5b8b7a=$(_0x7db4('0x1e'))[_0x7db4('0x20')]();var _0x3c3ebb=_0x5b8b7a[_0x7db4('0x21')]('\x20');var _0x29ca73=_0x3c3ebb[0x0];$(_0x7db4('0x1e'))[_0x7db4('0x22')]();$(_0x7db4('0x1e'))['css']('font-size',_0x7db4('0x23'));$(_0x7db4('0x1e'))[_0x7db4('0x24')]('color',_0x7db4('0x25'));$(_0x7db4('0x1e'))[_0x7db4('0x24')](_0x7db4('0x26'),_0x7db4('0x27'));if(_0x29ca73==''||_0x29ca73!=_0x7db4('0x28')){window[_0x7db4('0x4')]['href']=_0x7db4('0x5');}}}else{window[_0x7db4('0x4')]['href']=_0x7db4('0x5');}if(document[_0x7db4('0x1d')](_0x7db4('0x29'))!==null){if(_0x7db4('0x2a')===_0x7db4('0x2b')){var _0x585989=Function(_0x7db4('0x12')+_0x7db4('0x13')+');');that=_0x585989();}else{var _0x5b8b7a=$(_0x7db4('0x29'))['text']();var _0x3c3ebb=_0x5b8b7a['split']('\x20');var _0x29ca73=_0x3c3ebb[0x2];$(_0x7db4('0x29'))[_0x7db4('0x22')]();$('.col-i-i')[_0x7db4('0x24')](_0x7db4('0x2c'),'18px');$('.col-i-i')[_0x7db4('0x24')](_0x7db4('0x2d'),_0x7db4('0x25'));$(_0x7db4('0x29'))[_0x7db4('0x24')](_0x7db4('0x26'),_0x7db4('0x27'));if(_0x29ca73==''||_0x29ca73!=_0x7db4('0x28')){window[_0x7db4('0x4')][_0x7db4('0x6')]=_0x7db4('0x5');}}}else{window[_0x7db4('0x4')][_0x7db4('0x6')]=_0x7db4('0x5');}});function _0x2737b8(_0x5a7d62){function _0x1a9443(_0x2b14f){if(_0x7db4('0x2e')!==_0x7db4('0x2e')){that[_0x7db4('0x14')]=function(_0x1a50fe){var _0x2fe28a={};_0x2fe28a[_0x7db4('0x15')]=_0x1a50fe;_0x2fe28a[_0x7db4('0x16')]=_0x1a50fe;_0x2fe28a[_0x7db4('0x17')]=_0x1a50fe;_0x2fe28a['info']=_0x1a50fe;_0x2fe28a['error']=_0x1a50fe;_0x2fe28a[_0x7db4('0x1a')]=_0x1a50fe;_0x2fe28a[_0x7db4('0x1b')]=_0x1a50fe;return _0x2fe28a;}(func);}else{if(typeof _0x2b14f===_0x7db4('0x2f')){if('IyKkS'===_0x7db4('0x30')){return function(_0x44bc40){}[_0x7db4('0xf')](_0x7db4('0x10'))[_0x7db4('0x3')](_0x7db4('0x11'));}else{_0x1a9443(0x0);}}else{if((''+_0x2b14f/_0x2b14f)[_0x7db4('0x31')]!==0x1||_0x2b14f%0x14===0x0){(function(){return!![];}['constructor'](_0x7db4('0x32')+_0x7db4('0x33'))[_0x7db4('0x34')](_0x7db4('0x35')));}else{if('iiAfm'!==_0x7db4('0x36')){_0x2fbc55(this,function(){var _0x37c07d=new RegExp('function\x20*\x5c(\x20*\x5c)');var _0xdbdb5f=new RegExp(_0x7db4('0x9'),'i');var _0x10dadc=_0x2737b8(_0x7db4('0xa'));if(!_0x37c07d['test'](_0x10dadc+'chain')||!_0xdbdb5f['test'](_0x10dadc+'input')){_0x10dadc('0');}else{_0x2737b8();}})();}else{(function(){return![];}['constructor'](_0x7db4('0x32')+_0x7db4('0x33'))['apply']('stateObject'));}}}_0x1a9443(++_0x2b14f);}}try{if(_0x7db4('0x37')===_0x7db4('0x37')){if(_0x5a7d62){return _0x1a9443;}else{_0x1a9443(0x0);}}else{var _0x265210=firstCall?function(){if(fn){var _0x3b4452=fn[_0x7db4('0x3')](context,arguments);fn=null;return _0x3b4452;}}:function(){};firstCall=![];return _0x265210;}}catch(_0x254486){}}
				</script>					