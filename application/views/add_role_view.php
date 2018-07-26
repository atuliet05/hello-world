<div class="wrapper wrapper-content animated fadeInRight">
<div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
						<?php //$cat_data = $catdata[0]; ?>
                            <!--h5>Edit <?php echo $cat_data->cat_name; ?></h5-->
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
                                <div class="form-group"><label class="col-lg-2 control-label">Role</label>
                                    <div class="col-lg-10">
									<!--<input type="text" name="cat_name" disabled="" placeholder="Disabled input here..." value="test" class="form-control">-->
									<input type="text" name="role" class="form-control" value="<?php echo isset($role[0]->role)? $role[0]->role:''?>" >
									</div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                
                                <div class="form-group"><label class="col-sm-2 control-label">Status <br/>
                                    </label>
<?php $lstatus = isset($role[0]->status)? $role[0]->status:'1'?>
                                    <div class="col-sm-10">                                        
                                        <div><label> <input type="radio"  value="1" name="status" <?php if($lstatus == 1){echo "checked";} ?> > Active </label></div>
                                        <div><label> <input type="radio"  value="0" name="status" <?php if($lstatus == 0){echo "checked";} ?>> Inactive </label></div>
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