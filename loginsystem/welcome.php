<?php
session_start();
include_once('includes/config.php');
if (strlen($_SESSION['id'])==0) {
    header('location:logout.php');
} else{
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard | Registration and Login System</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
      <?php include_once('includes/navbar.php'); ?>
        <div id="layoutSidenav">
          <?php include_once('includes/sidebar.php'); ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <hr />
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>

<?php 
$userid = $_SESSION['id'];
$query = mysqli_query($con,"SELECT * FROM users WHERE id='$userid'");
while ($result = mysqli_fetch_array($query)) { ?>                         
                        <div class="row">
                            <div class="col-xl-5 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Welcome Back <?php echo $result['fname'] . ' ' . $result['lname']; ?></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="profile.php">View Profile</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
<?php } ?>

                        <!-- Product Section -->
                        <h2 class="mt-4">Product Management</h2>
                        <hr />
                        <div class="row">
                            <!-- Display products -->
                            <div class="col-xl-12 col-md-12">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-box"></i> Manage Products
                                    </div>
                                    <div class="card-body">
                                        <a href="add_product.php" class="btn btn-primary mb-3">Add New Product</a>
                                        <table class="table table-bordered" id="productTable">
                                            <thead>
                                                <tr>
                                                    <th>Product Name</th>
                                                    <th>Category</th>
                                                    <th>Price</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
<?php
// Fetch products from the database
$product_query = mysqli_query($con, "SELECT * FROM products");
while ($product = mysqli_fetch_array($product_query)) { ?>
                                                <tr>
                                                    <td><?php echo $product['product_name']; ?></td>
                                                    <td><?php echo $product['category']; ?></td>
                                                    <td><?php echo $product['price']; ?></td>
                                                    <td>
                                                        <a href="edit_product.php?id=<?php echo $product['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                                                        <a href="delete_product.php?id=<?php echo $product['id']; ?>" class="btn btn-danger btn-sm">Delete</a>
                                                    </td>
                                                </tr>
<?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
               </div>
          </div>
        </div>
                </main>
          <?php include('includes/footer.php'); ?>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
<?php } ?>
