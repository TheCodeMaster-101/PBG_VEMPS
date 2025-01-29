<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $company_name = mysqli_real_escape_string($con, $_POST['company_name']);
    $address = mysqli_real_escape_string($con, $_POST['address']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $contact_info = mysqli_real_escape_string($con, $_POST['contact_info']);
    $sku = mysqli_real_escape_string($con, $_POST['sku']);
    $product_number = mysqli_real_escape_string($con, $_POST['product_number']);
    $product_description = mysqli_real_escape_string($con, $_POST['product_description']);
    $product_title = mysqli_real_escape_string($con, $_POST['product_title']);
    $product_name = mysqli_real_escape_string($con, $_POST['product_name']);
    $unit_kg = mysqli_real_escape_string($con, $_POST['unit_kg']);
    $unit_tons = mysqli_real_escape_string($con, $_POST['unit_tons']);
    
    // Handling image upload
    if ($_FILES['image']['name']) {
        $image = 'uploads/' . basename($_FILES['image']['name']);
        move_uploaded_file($_FILES['image']['tmp_name'], $image);
    } else {
        $image = '';
    }

    // Insert product data into the database
    $query = "INSERT INTO products (company_name, address, email, contact_info, sku, product_number, product_description, product_title, product_name, unit_kg, unit_tons, image) 
              VALUES ('$company_name', '$address', '$email', '$contact_info', '$sku', '$product_number', '$product_description', '$product_title', '$product_name', '$unit_kg', '$unit_tons', '$image')";

    if (mysqli_query($con, $query)) {
        header('Location: dashboard.php'); // Redirect to dashboard
    } else {
        echo "Error: " . mysqli_error($con);
    }
}
?>
