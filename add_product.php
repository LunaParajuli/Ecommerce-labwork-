<?php require_once('inc/top.php');?>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
       
        <?php require_once('inc/sidebar.php');?>
         <!--  End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php require_once('inc/navbar.php');?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Add Product</h1>
                 <div class="row">
                    <div class="col">
                         <form action="" method="post">
                           <div class="form-group">
                            <label>Product Name</label>
                             <input type="text" name="category_name" class="form-control">
                           </div>

                           <div class="form-group">
                            <label>Category ID</label>
                             <input type="text" name="category_id" class="form-control">
                           </div>

                           <div class="form-group">
                            <label> Product Details</label>
                             <select class="form-control" name="product_details" >
                                <option >Good Quality</option>
                                <option >Certified Course</option>
                                <option >Above 10000</option>

                             </select>

                           </div>
                           <div class="form-group">
                            
                             <input type="submit" name="insert-btn" value="Add product" class="btn btn-success"/>
                           </div>

                        </form>
                      
                        <?php 
                        require_once('inc/db.php');
                        
                        // if(mysqli_connect_errno()){
                        //     echo"fail";
                        // }else{
                        //     echo"connection successful";    
                        // }

                        
                        if(isset($_POST['insert-btn'])){

                            $product_name = $_POST['product_name'];
                            $category_id = $_POST['category_id'];
                            $product_details = $_POST['product_details'];
                         
                           $insert_product= "INSERT INTO product(product_name,category_id,product_details) VALUES('$product_name','$category_id','$product_details')";

                         $run_product = mysqli_query($conn,$insert_product);
                         
                         if($run_product == true){
                            echo"Data has been inserted";
                         }else{
                            echo"failed try again";
                         }

                        }

                        ?>

                    </div>

                  </div>


                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <?php require_once('inc/footer.php');?>