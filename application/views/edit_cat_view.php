<div class="wrapper wrapper-content animated fadeInRight">
<div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
						<?php $cat_data = $catdata[0]; ?>
                            <h5>Edit <?php echo $cat_data->cat_name; ?></h5>
                            <!--div class="ibox-tools">
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
                            </div-->
                        </div>
                        <div class="ibox-content">
                            <form method="post" class="form-horizontal" action="#">
                                <div class="form-group"><label class="col-lg-2 control-label">Category</label>
                                    <div class="col-lg-10">
									<!--<input type="text" name="cat_name" disabled="" placeholder="Disabled input here..." value="test" class="form-control">-->
									<input type="text" name="cat_name" value="<?php echo $cat_data->cat_name; ?>" class="form-control" readonly>
									</div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                
                                <div class="form-group"><label class="col-sm-2 control-label">Status <br/>
                                    </label>

                                    <div class="col-sm-10">                                        
                                        <div><label> <input type="radio" <?php if($cat_data->status =='1'){echo "checked=''";} ?> value="1" id="optionsRadios1" name="status"> Active </label></div>
                                        <div><label> <input type="radio" <?php if($cat_data->status =='0'){echo "checked=''";} ?>  value="0" id="optionsRadios2" name="status"> Inactive </label></div>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                
                                <div class="form-group">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        <!--button class="btn btn-white" type="submit">Cancel</button-->
                                        <button class="btn btn-primary" type="submit" name='submit' value='submit'>Save changes</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
</div>