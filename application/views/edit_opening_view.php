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
					<form method="post">
					<?php 
					$title='';
					$status = '';
					$body ='';
					if(isset($opdata)){
						// print_r($opdata);
						$title=$opdata[0]->title;
						$status = $opdata[0]->status;
						// $body = htmlspecialchars($opdata[0]->body,ENT_QUOTES,'UTF-8' );
						// $body = html_entity_decode($opdata[0]->body,ENT_QUOTES, "ISO8859-1");
						$body = html_entity_decode($opdata[0]->body);
						$cat_id = isset($opdata[0]->cat_id)?$opdata[0]->cat_id:0;
						$title2 = $opdata[0]->title2;
					}
					echo '<pre>';
					print_r($opdata[0]);
					$responsibilities = (unserialize($opdata[0]->responsibilities));
					 
					// echo $opdata[0]->body;
					?>
					<div class="col-md-12"><div class="col-md-2">Title: </div><div class="col-md-10">
					<input type="text" name="title" required value="<?php echo $title; ?>" />
					</div></div>
					<div class="col-md-12"><div class="col-md-2">Sub Title: </div><div class="col-md-10">
					<input type="text" name="title2" required value="<?php echo $title2; ?>" />
					</div></div>
					
					<div class="row">
					<div class="col-md-12">
						<?php echo $this->ckeditor->editor("opening",$body); ?>
						<input type="radio" name="status" value="0" <?php if($status == '0'){echo "checked";} ?>>Inactive
						<input type="radio" name="status" value="1" <?php if($status == '1'){echo "checked";} ?>>Active<br/>
						Category: 
						<select name="category">
							<option value="">Select Category</option>
						<?php
						foreach($category as $cat_data){							
						?>
							<option value="<?php echo $cat_data->id; ?>" <?php if($cat_data->id ==$cat_id){ echo "selected";} ?>><?php echo $cat_data->cat_name; ?></option>
						<?php
						}
						?>
						</select>
						<br/>
						
	<h4>Responsibilities:</h4>
	<div class="field_wrapper">
	<?php
	$i= 0;
	if(!empty($responsibilities)){
	foreach($responsibilities as $rsnsblt){
		if($i == 0){
		?>
		<div>
	<input type="text" name="respnsblt[]" value="<?php echo $rsnsblt; ?>"><a href="javascript:void(0)" class="btn btn-success add_button">
	<span class="glyphicon glyphicon glyphicon-plus" aria-hidden="true"></span> Add</a>
	</div>
		<?php 
		}else{
		?>
		<div><input type="text" name="respnsblt[]" value="<?php echo $rsnsblt; ?>" >
	<a href="javascript:void(0);" class="btn btn-success remove_button" title="Remove field">
	<span class="glyphicon glyphicon glyphicon-minus" aria-hidden="true"></span>Remove</a></div>
		<?php	
		}
		$i++;
	}
	}else{
	?>
	<div>
	<input type="text" name="respnsblt[]" value=""><a href="javascript:void(0)" class="btn btn-success add_button">
	<span class="glyphicon glyphicon glyphicon-plus" aria-hidden="true"></span> Add</a>
	</div>
	<?php
	}
	?>
	</div>
	
						
						<input type="submit" value="submit" name="submit" />
					</div>
					</div>
					</form>
					</div>
                </div>
            </div>
            </div>
           


            </div>