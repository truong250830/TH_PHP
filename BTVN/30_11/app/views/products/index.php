<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách sản phẩm</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/font-awesome/css/font-awesome.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto py-4">
        
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-2xl font-bold text-center w-full">Danh sách sản phẩm</h1>
            
        </div>

            <a href="?page=products&action=create" 
               class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">
                Thêm mới
            </a>   
       
        <table class="table-auto mt-6 w-full border-collapse border border-gray-300">
            <thead>
                <tr class="bg-gray-200">
                    <th class="border border-gray-300 px-4 py-2">ID</th>
                    <th class="border border-gray-300 px-4 py-2">Tên sản phẩm</th>
                    <th class="border border-gray-300 px-4 py-2">Giá</th>
                    <th class="border border-gray-300 px-4 py-2 text-center">Hành động</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($products as $product): ?>
                    <tr class="hover:bg-gray-100">
                        <td class="border border-gray-300 px-4 py-2 text-center"><?= $product['id'] ?></td>
                        <td class="border border-gray-300 px-4 py-2"><?= htmlspecialchars($product['name']) ?></td>
                        <td class="border border-gray-300 px-4 py-2 text-center"><?= number_format($product['price'], 2) ?> VND</td>
                        <td class="border border-gray-300 px-4 py-2 text-center flex justify-center gap-4">
                          
                            <a href="?page=products&action=show&id=<?= $product['id'] ?>" 
                               class="text-blue-500 hover:text-blue-700">
                                <i class="fa fa-eye"></i>
                            </a>
                            
                            <a href="?page=products&action=edit&id=<?= $product['id'] ?>" 
                               class="text-yellow-500 hover:text-yellow-700">
                                <i class="fa fa-edit"></i>
                            </a>
                            
                            <a href="?page=products&action=delete&id=<?= $product['id'] ?>" 
                               class="text-red-500 hover:text-red-700" 
                               onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này?')">
                               <i class="fa fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>

