<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết Sản phẩm</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto py-4">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-2xl font-bold">Chi tiết Sản phẩm</h1>
            <a href="?page=products" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Quay lại</a>
        </div>

        <div class="bg-white p-4 rounded shadow-lg">
            <p><strong>ID:</strong> <?= $product['id'] ?></p>
            <p><strong>Tên Sản phẩm:</strong> <?= htmlspecialchars($product['name']) ?></p>
            <p><strong>Giá:</strong> <?= htmlspecialchars($product['price']) ?> VND</p>
        </div>
    </div>
</body>
</html>
