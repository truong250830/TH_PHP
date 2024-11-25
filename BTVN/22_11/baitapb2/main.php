<?php

$showForm = isset($_POST['showForm']) ? true : false;


$products = [
    ['id' => 1, 'name' => 'Sản phẩm 1', 'price' => '1000 VND'],
    ['id' => 2, 'name' => 'Sản phẩm 2', 'price' => '2000 VND'],
    ['id' => 3, 'name' => 'Sản phẩm 3', 'price' => '3000 VND'],
];


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['addProduct'])) {
    $newProduct = [
        'id' => count($products) + 1,
        'name' => htmlspecialchars($_POST['productName']),
        'price' => htmlspecialchars($_POST['productPrice']) . ' VND'
    ];
    $products[] = $newProduct; 
}


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['updateProduct'])) {
    $productId = (int)$_POST['productId'];
    $updatedProductName = htmlspecialchars($_POST['productName']);
    $updatedProductPrice = htmlspecialchars($_POST['productPrice']) . ' VND';

   
    foreach ($products as &$product) {
        if ($product['id'] == $productId) {
            $product['name'] = $updatedProductName;
            $product['price'] = $updatedProductPrice;
            break;
        }
    }
}


if (isset($_GET['delete'])) {
    $productIdToDelete = (int)$_GET['delete'];
    
   
    foreach ($products as $key => $product) {
        if ($product['id'] == $productIdToDelete) {
            unset($products[$key]);
            break;
        }
    }
}

?>

<main class="mt-6">
    <div class="bg-white shadow-md rounded-lg p-4">
        
        <form method="POST" action="">
            <button type="submit" name="showForm" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Thêm mới</button>
        </form>

       
        <?php if ($showForm): ?>
        <form action="" method="POST" class="bg-gray-100 p-4 rounded-lg mt-4">
            <div class="mb-4">
                <label for="productName" class="block text-gray-700 font-bold mb-2">Tên sản phẩm:</label>
                <input type="text" id="productName" name="productName" class="w-full p-2 border border-gray-300 rounded" required>
            </div>
            <div class="mb-4">
                <label for="productPrice" class="block text-gray-700 font-bold mb-2">Giá thành:</label>
                <input type="number" id="productPrice" name="productPrice" class="w-full p-2 border border-gray-300 rounded" required>
            </div>
            <button type="submit" name="addProduct" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Thêm</button>
        </form>
        <?php endif; ?>

      
        <table class="w-full border-collapse border border-gray-200 mt-4">
            <thead>
                <tr class="bg-gray-100">
                    <th class="border border-gray-300 px-4 py-2 text-left">Sản phẩm</th>
                    <th class="border border-gray-300 px-4 py-2 text-left">Giá thành</th>
                    <th class="border border-gray-300 px-4 py-2 text-center">Sửa</th>
                    <th class="border border-gray-300 px-4 py-2 text-center">Xóa</th>
                </tr>
            </thead>
            <tbody>
                <?php
               
                foreach ($products as $product) {
                    echo "<tr>
                        <td class='border border-gray-300 px-4 py-2'>{$product['name']}</td>
                        <td class='border border-gray-300 px-4 py-2'>{$product['price']}</td>
                        <td class='border border-gray-300 px-4 py-2 text-center'>
                            <a href='?edit={$product['id']}' class='text-blue-500 hover:text-blue-700'>✏️</a>
                        </td>
                        <td class='border border-gray-300 px-4 py-2 text-center'>
                            <a href='?delete={$product['id']}' class='text-blue-500 hover:text-blue-700'>🗑️</a>
                        </td>
                    </tr>";
                }
                ?>
            </tbody>
        </table>

        <?php
        
        if (isset($_GET['edit'])) {
            $editProductId = (int)$_GET['edit'];
            $productToEdit = null;

            foreach ($products as $product) {
                if ($product['id'] == $editProductId) {
                    $productToEdit = $product;
                    break;
                }
            }

            if ($productToEdit): ?>
          
            <form action="" method="POST" class="bg-gray-100 p-4 rounded-lg mt-4">
                <input type="hidden" name="productId" value="<?= $productToEdit['id'] ?>">
                <div class="mb-4">
                    <label for="productName" class="block text-gray-700 font-bold mb-2">Tên sản phẩm:</label>
                    <input type="text" id="productName" name="productName" value="<?= $productToEdit['name'] ?>" class="w-full p-2 border border-gray-300 rounded" required>
                </div>
                <div class="mb-4">
                    <label for="productPrice" class="block text-gray-700 font-bold mb-2">Giá thành:</label>
                    <input type="number" id="productPrice" name="productPrice" value="<?= str_replace(' VND', '', $productToEdit['price']) ?>" class="w-full p-2 border border-gray-300 rounded" required>
                </div>
                <button type="submit" name="updateProduct" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Cập nhật</button>
            </form>
            <?php endif; 
        }
        ?>
    </div>
</main>
