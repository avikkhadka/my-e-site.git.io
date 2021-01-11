
<?php require_once('includes/head.php')?>
<?php 
$con=mysqli_connect('localhost','root','','beauty_spot');
$sql="SELECT * FROM product";
$res=mysqli_query($con,$sql);
$result=array();
while($row=mysqli_fetch_assoc($res))
{
$result[]=$row;
}
 ?>

<title>All Products</title>
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
                        Products
                        <small></small>
                    </h3>
                    <ul class="breadcrumb">
                        <li>
                            <i class="icon-home"></i>
                            <a href="index.php">Home</a>
                            <span class="icon-angle-right"></span>
                        </li>
                        <li>
                            <a href="#">Products</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- END PAGE HEADER-->

            <a href="add_products.php" class="btn btn success">Add Product</a><br><h2></h2>
            <!-- BEGIN PAGE CONTENT-->
            <div class="row-fluid">
                <div class="span12">
                    <!-- BEGIN EXAMPLE TABLE PORTLET-->
                    <div class="portlet box blue">
                        <div class="portlet-title">
                            <div class="caption"><i class="icon-edit"></i> Products</div>
                            <div class="tools">
                                <a href="javascript:;" class="collapse"></a>
                                <a href="#portlet-config" data-toggle="modal" class="config"></a>
                                <a href="javascript:;" class="reload"></a>
                                <a href="javascript:;" class="remove"></a>
                            </div>
                        </div>
                        <div class="portlet-body">


                            <form action="" method="post" enctype="multipart/form-data" >
                                <div  style=" unicode-bidi:bidi-override;
                                          direction: ltr;overflow: auto;">
                                    <table class="table table-striped table-hover table-bordered">
                                        <thead>
                                        <tr>

                                            <th>Sr#</th>
                                            <th>Product Category</th>
                                            <th>Product Name</th>
                                            <th>Product Description</th>
                                            <th>Product Price</th>
                                            <th>Product Image</th>

                                            <th>Action</th>



                                        </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $i=0;
                                             foreach($result as $val)
                                         {
                                            $i++
                                                ?>



                                            
                                            <tr class="response">
                                                <td><?php echo $i;?></td>
                                                <td><?php echo $val['product_cat'];?></td>
                                               
                                                <td><?php echo $val['product_name'];?></td>
                                                <td><?php echo $val['product_desc'];?></td>
                                                <td><?php echo $val['product_price'];?></td>
                                                <td><img src="../images/<?php echo $val['product_image'];?>" width="100px" height="100px"></td>
                                                <td>
                                                    <a href='view_products.php?id=<?php echo $val['id'];?>'>View</a>|
                                                    <a href="update_products.php?id=<?php echo $val['id'];?>">Update</a>|
                                                    <a href="delete_products.php?id=<?php echo $val['id'];?>">Delete</a>
                                            </td>
                                            </tr>

                                        </tbody>
                                    <?php }?>
                                    </table>
                                </div>
                            </form>



                        </div>
                    </div>
                    <!-- END EXAMPLE TABLE PORTLET-->
                </div>
            </div>
            <!-- END PAGE CONTENT-->
        </div>
        <!-- END PAGE CONTAINER-->
    </div>
    <!-- END PAGE -->
</div>
<!-- END CONTAINER -->


<!-- BEGIN FOOTER -->*
<?php require_once('includes/footer.php') ?>
<!-- END FOOTER -->

</body>
<!-- END BODY -->
</html>