<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Management</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.12.0/dist/cdn.min.js"></script>
</head>
<body class="bg-gray-100 p-4">
    <div class="max-w-5xl mx-auto bg-white shadow-md rounded-lg p-6" x-data="productManager()">
        <h1 class="text-2xl font-bold mb-4">Product Management</h1>

        <form @submit.prevent="addProduct" class="mb-6">
            <div class="flex gap-4">
                <input type="text" x-model="newProduct.cname" placeholder="Company name" class="border rounded p-2 w-1/3">
                <input type="text" x-model="newProduct.address" placeholder="Address" class="border rounded p-2 w-1/3">
                <input type="text" x-model="newProduct.email" placeholder="Email" class="border rounded p-2 w-1/3">
               <input type="text" x-model="newProduct.contact" placeholder="Contact info" class="border rounded p-2 w-1/3">
                <input type="text" x-model="newProduct.sku" placeholder="SKU #" class="border rounded p-2 w-1/3">
                <input type="text" x-model="newProduct.number" placeholder="Product #" class="border rounded p-2 w-1/3">
               <input type="text" x-model="newProduct.desc" placeholder="Product Description" class="border rounded p-2 w-1/3">
                <input type="text" x-model="newProduct.title" placeholder="Product Title" class="border rounded p-2 w-1/3">
                <input type="text" x-model="newProduct.name" placeholder="Product Name" class="border rounded p-2 w-1/3">
              <input type="text" x-model="newProduct.unitkg" placeholder="Unit (kg)" class="border rounded p-2 w-1/3">
                <input type="text" x-model="newProduct.unittons" placeholder="Unit (tons)" class="border rounded p-2 w-1/3">
                <button type="submit" class="bg-blue-500 text-white rounded px-4">Add Product</button>
            </div>
        </form>

        <table class="w-full table-auto border-collapse">
            <thead>
                <tr class="bg-gray-200">
                    <th class="border px-4 py-2">Company name</th>
                    <th class="border px-4 py-2">Address</th>
                    <th class="border px-4 py-2">Email</th>
                    <th class="border px-4 py-2">Contact info</th>
                    <th class="border px-4 py-2">SKU #</th>
                    <th class="border px-4 py-2">Product #</th>
                    <th class="border px-4 py-2">Product Description</th>
                    <th class="border px-4 py-2">Product Title</th>
                  <th class="border px-4 py-2">Product Name</th>
                  <th class="border px-4 py-2">Unit (kg)</th>
                  <th class="border px-4 py-2">Unit (tons)</th>
                </tr>
            </thead>
            <tbody>
                <template x-for="(product, index) in products" :key="index">
                    <tr>
                        <td class="border px-4 py-2" x-text="product.cname"></td>
                        <td class="border px-4 py-2" x-text="product.address"></td>
                        <td class="border px-4 py-2" x-text="product.email"></td>
                      <td class="border px-4 py-2" x-text="product.contact"></td>
                        <td class="border px-4 py-2" x-text="product.sku"></td>
                        <td class="border px-4 py-2" x-text="product.number"></td>
                      <td class="border px-4 py-2" x-text="product.desc"></td>
                        <td class="border px-4 py-2" x-text="product.title"></td>
                        <td class="border px-4 py-2" x-text="product.name"></td>
                      <td class="border px-4 py-2" x-text="product.unitkg"></td>
                      <td class="border px-4 py-2" x-text="product.unittons"></td>
                        <td class="border px-4 py-2">
                            <button @click="deleteProduct(index)" class="bg-red-500 text-white px-2 py-1 rounded">Delete</button>
                        </td>
                    </tr>
                </template>
            </tbody>
        </table>
    </div>

    <script>
        function productManager() {
            return {
                products: [],
                newProduct: { cname: '', address: '', email: '', contact: '', sku: '', number: '', desc: '', title: '', name: '', unitkg: '', unittons: '' },
                addProduct() {
                    if (this.newProduct.cname && this.newProduct.address && this.newProduct.email && this.newProduct.contact && this.newProduct.sku && this.newProduct.number && this.newProduct.desc && this.newProduct.title && this.newProduct.name && this.newProduct.unitkg && this.newProduct.unittons) {
                        this.products.push({ ...this.newProduct });
                        this.newProduct = { cname: '', address: '', email: '', contact: '', sku: '', number: '', desc: '', title: '', name: '', unitkg: '', unittons: '' };
                    } else {
                        alert('All fields are required!');
                    }
                },
                deleteProduct(index) {
                    this.products.splice(index, 1);
                }
            };
        }
    </script>
</body>
</html>
