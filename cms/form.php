<?php require_once('includes/head.php')?>
<title>Add New Electronic</title>
</head>
<!-- END HEAD -->

<!-- BEGIN BODY -->
<body class="page-header-fixed">


<!-- BEGIN HEADER -->
<?php require_once('includes/header.php'); ?>
<!-- END HEADER -->

<!-- BEGIN CONTAINER -->
<div class="page-container row-fluid">

    <!-- BEGIN SIDEBAR -->
    <?php require_once('includes/sidebar_menu.php'); ?>
    <!-- END SIDEBAR -->


    <!-- BEGIN PAGE -->
    <div class="page-content">
        <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
        <div id="portlet-config" class="modal hide">
            <div class="modal-header">
                <button data-dismiss="modal" class="close" type="button"></button>
                <h3>portlet Settings</h3>
            </div>
            <div class="modal-body">
                <p>Here will be a configuration form</p>
            </div>
        </div>
        <!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
        <!-- BEGIN PAGE CONTAINER-->
        <div class="container-fluid">

            <!-- BEGIN PAGE HEADER-->
            <div class="row-fluid">
                <div class="span12">

                    <!-- BEGIN STYLE CUSTOMIZER -->
                    <?php require_once('includes/customizer.php'); ?>
                    <!-- END BEGIN STYLE CUSTOMIZER -->


                    <h3 class="page-title">
                        Add
                        <small>New Electronic</small>
                    </h3>
                    <ul class="breadcrumb">
                        <li>
                            <i class="icon-home"></i>
                            <a href="index.php">Home</a>
                            <span class="icon-angle-right"></span>
                        </li>
                        <li>
                            <a href="#">Add New Electronic</a>
                            <span class="icon-angle-right"></span>
                        </li>
                        <li><a href="electronic.php">Back</a></li>
                    </ul>
                </div>
            </div>
            <!-- END PAGE HEADER-->

            <!-- BEGIN PAGE CONTENT-->
            <div class="row-fluid">
                <div class="span12">
                    <!-- BEGIN SAMPLE FORM PORTLET-->

                    <div class="portlet box blue tabbable">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="icon-reorder"></i>
                                <span class="hidden-480">Add</span>
                            </div>
                        </div>
                        <div class="portlet-body form">
                            <div class="tabbable portlet-tabs">
                                <ul class="nav nav-tabs">
                                    <li></li>
                                    <li></li>
                                    <li></li>

                                </ul>

                                <br/><br/><br/>

                                <div class="tab-content">
                                    <div class="tab-pane active" id="portlet_tab1">
                                        <!-- BEGIN FORM-->

                                        <form   action="" class="form-horizontal" method="POST" enctype="multipart/form-data">

                                                <div class="control-group">
                                                    <label class="control-label">Item Name</label>
                                                    <div class="controls">
                                                        <select class="m-wrap medium" name="electronic_id" required>
                                                            <option>Select Please</option>
                                                            <?php 
                                                            $events = mysql_query("select * from electronic_item");
                                                            while($row = mysql_fetch_array($events)){
                                                                    ?>
                                                            <option value="<?php echo $row['items']; ?>"><?php echo $row['items']; ?></option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                </div>

                                            <div class="control-group">
                                                <label class="control-label">Electronic Name</label>
                                                <div class="controls">
                                                    <input type="text" class="m-wrap medium" name="product_name" required/>
                                                </div>
                                            </div>

                                            <div class="control-group">
                                                <label class="control-label">Product Description</label>
                                                <div class="controls">
                                                    <textarea rows="5"   class="m-wrap medium" name="product_desc" required></textarea>
                                                </div>
                                            </div>

                                            <div class="control-group">
                                                <label class="control-label">Original Price</label>
                                                <div class="controls">
                                                    <input type="text" class="m-wrap medium" name="original_price" required/>
                                                </div>
                                            </div>

                                            <div class="control-group">
                                                <label class="control-label">Sale Price</label>
                                                <div class="controls">
                                                    <input type="text" class="m-wrap medium" name="sale_price" required/>
                                                </div>
                                            </div>

                                            <div class="control-group">
                                                <label class="control-label">Reduced</label>
                                                <div class="controls">
                                                    <input type="text" class="m-wrap medium" name="reduced" />
                                                </div>
                                            </div>

                                            <div class="control-group">
                                                <label class="control-label">Time Open</label>
                                                <div class="controls">
                                                    <input type="text" placeholder="9:00 am" class="m-wrap medium" name="time_open" required/>
                                                </div>
                                            </div>

                                            <div class="control-group">
                                                <label class="control-label">Time Close</label>
                                                <div class="controls">
                                                    <input type="text" placeholder="6:00 pm" class="m-wrap medium" name="time_close" required/>
                                                </div>
                                            </div>

                                            <div class="control-group">
                                                <label class="control-label">Time Out</label>
                                                <div class="controls">
                                                    <input type="text" placeholder="4 Days" class="m-wrap medium" name="time_out" />
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label">Map</label>
                                                <div class="controls">
                                                    <input type="text" placeholder="latitute, longitute" class="m-wrap medium" name="map" />
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label">Product Link</label>
                                                <div class="controls">
                                                    <input type="text" placeholder="http://www.facebook.com" class="m-wrap medium" name="product_link" required/>
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label">Electronic Image</label>
                                                <div class="controls">
                                                    <input type="file" class="m-wrap medium" name="files[]" accept="image/*" multiple required/>
                                                </div>
                                            </div>

                                            <div class="form-actions">
                                                <button type="submit" name="submit" class="btn blue"><i class="icon-ok"></i> Save</button>
                                                <a href="electronic.php" class="btn">Cancel</a>
                                            </div>
                                        </form>
                                        
                                        <?php
                                        if(isset($_POST['submit'])){
                                        $product_id = uniqid();
                                        $electronic_id = $_POST['electronic_id'];
                                        $product_name = $_POST['product_name'];
                                        $product_desc = $_POST['product_desc'];
                                        $original_price = $_POST['original_price'];
                                        $sale_price = $_POST['sale_price'];
                                        $reduced = $_POST['reduced'];   
                                        $time_open = $_POST['time_open'];
                                        $time_close = $_POST['time_close']; 
                                        $time_out = $_POST['time_out']; 
                                        $map = $_POST['map']; 
                                        $product_link = $_POST['product_link']; 
                                        
                                        $date = date("Y-m-d H:i:s");
                                           
                                        $query = "insert into all_products(main_item, items, product_id, brand, product_name, product_desc, original_price, sale_price, reduced, time_open, time_close, time_out, map, product_link, post_date)"
                                                . " values('Electronics', '$electronic_id', '$product_id', '$brand','$product_name', '$product_desc', '$original_price', '$sale_price', '$reduced', '$time_open', '$time_close', '$time_out', '$map', '$product_link', '$date')";
                                        $run = mysql_query($query);
                                        
                                        if(!empty($_FILES['files'])){
                                            $errors= array();
                                                foreach($_FILES['files']['tmp_name'] as $key => $tmp_name ){
                                                        $file_name = $key.$_FILES['files']['name'][$key];
                                                        $file_size =$_FILES['files']['size'][$key];
                                                        $file_tmp =$_FILES['files']['tmp_name'][$key];
                                                        $file_type=$_FILES['files']['type'][$key];	
                                                if($file_size > 10485760){
                                                                $errors[]='File size must be less than 10 MB';
                                                }		
                                                $query="INSERT into all_images (product_id, images) VALUES('$product_id', '$file_name')";
                                                $desired_dir="images/all_products";
                                                if(empty($errors)==true){
                                                    if(is_dir($desired_dir)==false){
                                                        mkdir("$desired_dir", 0700);		// Create directory if it does not exist
                                                    }
                                                    if(is_dir("$desired_dir/".$file_name)==false){
                                                        move_uploaded_file($file_tmp,"$desired_dir/".$file_name);
                                                    }else{									// rename the file if another one exist
                                                        $new_dir="$desired_dir/".$file_name.time();
                                                         rename($file_tmp,$new_dir) ;				
                                                    }
                                                         mysql_query($query);			
                                                }else{
                                                        print_r($errors);
                                                }
                                            }
                                                if(empty($error)){
                                                        echo "Success";
                                                }
                                        }                                          
                                        
                                        if($run){
                                            echo "<script>alert('New Electronic is Added.')</script>";
                                            echo "<script type='text/javascript' language='javascript'>
                                                        window.location = 'electronic.php';
                                                       </script>";
                                        }
                                        }

                                        ?>
                                        <!-- END FORM-->
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END SAMPLE FORM PORTLET-->
                </div>
            </div>
            <!-- END PAGE CONTENT-->
        </div>
        <!-- END PAGE CONTAINER-->
    </div>
    <!-- END PAGE -->
</div>
<!-- END CONTAINER -->


<!-- BEGIN FOOTER -->
<?php require_once('includes/footer.php') ?>
<!-- END FOOTER -->
    <script src="custom_js/jquery.simple-dtpicker.js" type="text/javascript"></script>
    <script>
        $(document).ready(function () {
            $('#event_date').appendDtpicker({
                "closeOnSelected": true
            });
            $("#event_date").val("Please select date and time");
        });


    </script>
</body>
<!-- END BODY -->
</html>