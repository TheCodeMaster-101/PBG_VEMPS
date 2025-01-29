<form action="insert_product.php" method="POST" enctype="multipart/form-data">
    <label for="company_name">Company Name:</label>
    <input type="text" name="company_name" id="company_name" required>

    <label for="address">Address:</label>
    <textarea name="address" id="address" required></textarea>

    <label for="email">Email:</label>
    <input type="email" name="email" id="email" required>

    <label for="contact_info">Contact Info:</label>
    <input type="text" name="contact_info" id="contact_info">

    <label for="sku">SKU #:</label>
    <input type="text" name="sku" id="sku">

    <label for="product_number">Product #:</label>
    <input type="text" name="product_number" id="product_number">

    <label for="product_description">Product Description:</label>
    <textarea name="product_description" id="product_description" required></textarea>

    <label for="product_title">Product Title:</label>
    <input type="text" name="product_title" id="product_title" required>

    <label for="product_name">Product Name:</label>
    <input type="text" name="product_name" id="product_name" required>

    <label for="unit_kg">Unit (kg):</label>
    <input type="number" step="0.01" name="unit_kg" id="unit_kg" required>

    <label for="unit_tons">Unit (tons):</label>
    <input type="number" step="0.01" name="unit_tons" id="unit_tons" required>

    <label for="image">Product Image:</label>
    <input type="file" name="image" id="image">

    <button type="submit" class="btn btn-success">Add Product</button>
</form>
