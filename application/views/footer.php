<div class="row">
            <div class="col-lg-12">
			<div class="footer">
                    <div class="pull-right">
                        10GB of <strong>250GB</strong> Free.
                    </div>
                    <div>
                        <strong>Copyright</strong> Example Company &copy; 2014-2017
                    </div>
                </div>
            </div>
        </div>
		
		<!-- Mainly scripts -->
    <script src="<?php echo site_url(); ?>js/jquery-3.1.1.min.js"></script>
    <script src="<?php echo site_url(); ?>js/bootstrap.min.js"></script>
    <script src="<?php echo site_url(); ?>js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="<?php echo site_url(); ?>js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

   
    <!-- Custom and plugin javascript 
    <script src="<?php echo site_url(); ?>js/inspinia.js"></script>-->
    <script src="<?php echo site_url(); ?>js/plugins/pace/pace.min.js"></script>
	<script src="<?php echo site_url(); ?>assets/js/custom.js"></script>
	
	
	
<script type="text/javascript" src="<?php echo site_url(); ?>asset/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="<?php echo site_url(); ?>asset/ckfinder/ckfinder.js"></script>
	<script src="<?php echo site_url(); ?>js/plugins/dataTables/datatables.min.js"></script>
		    <script>
        $(document).ready(function(){
            $('.dataTables-example').DataTable({
                pageLength: 25,
                responsive: true,
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [
                    { extend: 'copy'},
                    {extend: 'csv'},
                    {extend: 'excel', title: 'ExampleFile'},
                    {extend: 'pdf', title: 'ExampleFile'},

                    {extend: 'print',
                     customize: function (win){
                            $(win.document.body).addClass('white-bg');
                            $(win.document.body).css('font-size', '10px');

                            $(win.document.body).find('table')
                                    .addClass('compact')
                                    .css('font-size', 'inherit');
                    }
                    }
                ]

            });

        });

    </script>

    <!-- jQuery UI -->
    <script src="<?php echo site_url(); ?>js/plugins/jquery-ui/jquery-ui.min.js"></script>

  

    <script type="text/javascript">
jQuery(document).ready(function(){
	
	/* for responsibility section */
    
    var addButton = jQuery('.add_button'); //Add button selector
    var wrapper = jQuery('.field_wrapper'); //Input field wrapper
    var fieldHTML = '<div><input type="text" name="respnsblt[]" ><a href="javascript:void(0);" class="btn btn-success remove_button" title="Remove field"><span class="glyphicon glyphicon glyphicon-minus" aria-hidden="true"></span>Remove</a></div>'; //New input field html 
    var x = 1; //Initial field counter is 1
    jQuery(addButton).click(function(){ //Once add button is clicked
        // if(x < maxField){ //Check maximum number of input fields
            // x++; //Increment field counter
            jQuery(wrapper).append(fieldHTML); // Add field html
        // }
    });
    jQuery(wrapper).on('click', '.remove_button', function(e){ //Once remove button is clicked
        e.preventDefault();
        jQuery(this).parent('div').remove(); //Remove field html
        // x--; //Decrement field counter
    });
	
	/* for Preferred skill section */
	var addButtonskl = jQuery('.add_button_skill'); //Add button selector
    var wrapperskl = jQuery('.field_wrapper_skill'); //Input field wrapper
    var fieldHTMLskl = '<div><input type="text" name="prfrdskill[]" ><a href="javascript:void(0);" class="btn btn-success remove_button_skill" title="Remove field"><span class="glyphicon glyphicon glyphicon-minus" aria-hidden="true"></span>Remove</a></div>'; //New input field html 
    var x = 1; //Initial field counter is 1
    jQuery(addButtonskl).click(function(){ //Once add button is clicked
        // if(x < maxField){ //Check maximum number of input fields
            // x++; //Increment field counter
            jQuery(wrapperskl).append(fieldHTMLskl); // Add field html
        // }
    });
    jQuery(wrapperskl).on('click', '.remove_button_skill', function(e){ //Once remove button is clicked
        e.preventDefault();
        jQuery(this).parent('div').remove(); //Remove field html
        // x--; //Decrement field counter
    });
});
</script>

    
	
	 
</body>

<!-- Mirrored from webapplayers.com/inspinia_admin-v2.7.1/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Jan 2018 06:01:13 GMT -->
</html>