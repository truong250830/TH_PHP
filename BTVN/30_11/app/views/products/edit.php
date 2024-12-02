
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa Sản Phẩm</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto py-4">
        <h1 class="text-2xl font-bold text-center mb-4">Sửa Sản Phẩm</h1>

        <form action="?page=products&action=edit&id=<?= $product['id'] ?>" method="POST" class="max-w-lg mx-auto bg-white p-6 shadow-md rounded">
            <div class="mb-4">
                <label for="name" class="block text-gray-700">Tên sản phẩm:</label>
                <input type="text" name="name" id="name" value="<?= htmlspecialchars($product['name']) ?>" class="w-full p-2 border border-gray-300 rounded mt-2" required>
            </div>
            <div class="mb-4">
                <label for="price" class="block text-gray-700">Giá sản phẩm:</label>
                <input type="number" name="price" id="price" step="0.01" value="<?= htmlspecialchars($product['price']) ?>" class="w-full p-2 border border-gray-300 rounded mt-2" required>
            </div>
            <div class="mb-4 flex justify-between">
                <a href="?page=products&action=index" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">Hủy</a>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Cập Nhật</button>
            </div>
        </form>
    </div>
</body>
</html>
