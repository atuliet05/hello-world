
<div class="wrapper wrapper-content">

            <div class="row">
                <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <!--h5>Wyswig Summernote Editor</h5-->
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="#">Config option 1</a>
                                </li>
                                <li><a href="#">Config option 2</a>
                                </li>
                            </ul>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
					<div class="row">
					<form method="post" action="">
					<div class="col-md-12"><div class="col-md-2">Title: </div><div class="col-md-10">
					<input type="text" name="title" required />
					</div></div>
					<div class="col-md-12"><div class="col-md-2">Sub Title: </div><div class="col-md-10">
					<input type="text" name="title2" required />
					</div></div>
					
					
					<div class="col-md-12">
						<?php echo $this->ckeditor->editor("opening",""); ?>
						<input type="radio" name="status" value="0">Inactive
						<input type="radio" name="status" value="1" checked >Active<br/>
						Category: 
						<select name="category">
							<option value="">Select Category</option>
						<?php
						foreach($category as $cat_data){							
						?>
							<option value="<?php echo $cat_data->id; ?>"><?php echo $cat_data->cat_name; ?></option>
						<?php
						}
						?>
						</select>
						<br/>
						<h4>Responsibilities:</h4>
						<div class="field_wrapper">
						<div>
						<input type="text" name="respnsblt[]" ><a href="javascript:void(0)" class="btn btn-success add_button"><span class="glyphicon glyphicon glyphicon-plus" aria-hidden="true"></span> Add</a>
						</div>
						</div>
						
						
						<h4>Preferred Skills:</h4>
						<div class="field_wrapper_skill">
						<div>
						<input type="text" name="prfrdskill[]" ><a href="javascript:void(0)" class="btn btn-success add_button_skill"><span class="glyphicon glyphicon glyphicon-plus" aria-hidden="true"></span> Add</a>
						</div>
						</div>
						
						<input type="submit" value="submit" name="submit" />
					</div>
					
					</form>
					</div>
                </div>
            </div>
            </div>
           

            </div>