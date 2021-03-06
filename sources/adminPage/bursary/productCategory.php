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
	This script handle product category
	~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ */

		if (!defined('wizGrade'))

		die('Hahahaha, Hacking attempt . . . . Be Careful . . . . You Are Been Warned !!!!');
				
			require_once $wizGradeIconPage; /* This include top middle global icon page eg go back, print buttons etcs */

?>				
			<!-- row -->
			<!-- row -->	
					<div class="row">  
				<div class="col-sm-10">
					<section class="panel">
					<header class="panel-heading">
						<i class="fa fa-wrench fa-lg"></i> Product Category Manager
						<span class="tools pull-right">
						<a href="javascript:;" class="fa fa-chevron-down"></a>
						<a href="javascript:;" class="fa fa-times"></a>
						</span>
					</header>
					<div class="panel-body wizGrade-line"> 
					
						<!--tab nav start-->
						<section class="panel">
						<header class="panel-heading tab-bg-dark-navy-blue" id="scrollTarget">
							<ul class="nav nav-tabs nav-justified">
								<li class="active">
								<a data-toggle="tab" href="#viewProductCategory">
								<i class="fa fa-home"></i>
								Product Category
								</a>
								</li>

								<li>
								<a data-toggle="tab" href="#addProductCategory">
								<i class="fa fa-plus-square"></i>
								Add New Category
								</a>
								</li>
							</ul>
						</header>
						<div class="panel-body">
							<div class="tab-content">
							<div id="viewProductCategory" class="tab-pane active"> <?php require 'productCategoryInfo.php';  ?> </div> 

							<div id="addProductCategory" class="tab-pane">

								<!-- row -->
								<!-- row -->	
					<div class="row">  
								<div class="col-lg-12"> 

								<br clear="all" />

								<center><img src="loading.gif" alt="Page Loading >>>>>" id="saveLoader"  
								style="cursor:pointer; display:none; margin-bottom:5px;" /></center>

								<div id="hmsgBox"> </div>
									<!-- form -->
									<!-- form --><form class="form-horizontal" id="frmsaveProductCategory" role="form"> 

									<div class="form-group">
										<label for="productCategory" class="col-lg-5 control-label">*
										Product Name</label>
										<div class="col-lg-7">
										<div class="iconic-input">
										<i class="fa fa-money"></i>
										<input type="text"  id="product" name="product"  class="form-control"  required style="text-transform:Capitalize;">
										</div>
										</div>
									</div>     

									<div class="form-group">
									<input type="hidden" name="productCategoryData" value="productCategoryConfigs" /> 

									<center><button type="submit" class="btn btn-danger buttonMargin" id="saveProductCategory">
									<i class="fa fa-save"></i> Save Product </button></center>

									</div>

									</form><!-- / form -->  
									<!-- / form -->
								</div>
								</div>
								<!-- / row --> 

							</div>

							</div>
						</div>
						</section>
						<!--tab nav start--> 

					</div>
					</section>
				</div>

			</div>
			<!-- / row -->

			<!-- product category removal pop up modal start -->				  
			<a href="#removeModal" data-toggle="modal" id="modalRemoveBtn" class=""> </a>

			<div class="modal fade" id="removeModal" tabindex="-1" role="dialog"  aria-labelledby="wizGrade-modalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" 
					data-dismiss="modal" aria-hidden="true">
					<span style='color:#fff !important;'>&times;</span></button>
					<h4 class="modal-title"> Are sure you want to remove this productCategory information ?
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
				<div class="modal-footer slideUpFrmDiv">
					<button  class="btn btn-danger demoDisenable" id="removeProductCategory" 
					type="button">Yes</button>
					<button data-dismiss="modal" class="btn btn-danger" 
					type="button">Cancel</button>
				</div>
				</div>
			</div>
			</div>

			<!-- product category removal pop up modal end -->		

			<!-- product category edit pop up modal start -->					  

			<a href="#editModal" data-toggle="modal" id="modalEditBtn" class=""> </a>

			<div class="modal fade" id="editModal" tabindex="-1" role="dialog"  aria-labelledby="wizGrade-modalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" 
					data-dismiss="modal" aria-hidden="true">
					<span style='color:#fff !important;'>&times;</span></button>
					<h4 class="modal-title"> ProductCategory Information Management
					</h4>
				</div>
				<div class="modal-body"> 

					<center><img src="loading.gif" alt="Page Loading >>>>>" id="editLoader"  
					style="cursor:pointer; display:none; margin-bottom:5px;" /></center>

					<div id="editMsg"> </div> 

					<div class="slideUpFrmUDiv">

					<section class="panel">

					<div class="panel-body"> 

						<div id="editProductCategoryDiv"></div> 

					</div>

					</section>

					</div>

				</div>
				<div class="modal-footer slideUpFrmDiv">

					<button data-dismiss="modal" class="btn btn-danger"  type="button">Close</button>
					
				</div>
				</div>
			</div>
			</div>
			<!-- product category edit pop up modal end --> 