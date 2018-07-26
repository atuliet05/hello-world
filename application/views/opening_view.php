<link href="<?php echo site_url(); ?>css/plugins/dataTables/datatables.min.css" rel="stylesheet">
<script type="text/javascript" src="/asset/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="/asset/ckfinder/ckfinder.js"></script>

<div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Data Tables</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index-2.html">Home</a>
                        </li>
                        <li>
                            <a>Tables</a>
                        </li>
                        <li class="active">
                            <strong>Data Tables</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
			
			<div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <a href="<?php echo site_url('dashboard/addopening'); ?>">Add Openings</a>
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
                    <div class="ibox-content">

                        <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                    <thead>
                    <tr>                        
                        <th>Title</th>
						<th>Status</th>
                        <th>Action</th>                        
                    </tr>
                    </thead>
                    <tbody>
					<?php 
					//echo '<pre>'.print_r($category);
					
					foreach($category as $cat_data){
						//echo '<tr class="gradeX"><td>'.$cat_data->title.'</td><td>'.($cat_data->status)?"active":"inactive".'</td><td>edit/delete</td></tr>';
					?>
						<tr>
							<td><?php echo html_entity_decode($cat_data->title).' '.$cat_data->title2; ?></td>							
							<td><?php echo ($cat_data->status)?"Active":"Inactive" ; ?></td>
							<td><a href="<?php echo site_url('dashboard/editopening/'.$cat_data->id); ?>" >edit</a> / <a href="<?php echo site_url('dashboard/deleteCategory/'.$cat_data->id); ?>" >delete</a></td>
						</tr>
					<?php
					}
					
					?>
                    </tbody>
                    <!--<tfoot>
                    <tr>
                        <th>Rendering engine</th>
                        <th>Browser</th>
                        <th>Platform(s)</th>
                        <th>Engine version</th>
                        <th>CSS grade</th>
                    </tr>
                    </tfoot>-->
                    </table>
                        </div>

                    </div>
                </div>
            </div>
            </div>
        </div>
		
		  
