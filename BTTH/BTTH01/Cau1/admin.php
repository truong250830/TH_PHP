<?php


include './includes/data.php';
session_start();


if (!isset($_SESSION['flowers'])) {
    $_SESSION['flowers'] = $flowers; 
}

$flowers = $_SESSION['flowers'];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản trị các loài hoa</title>
    <script src="/Tailwind//Tailwind//tailwind.js"></script>
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
</head>
<body class="bg-gray-100">
    <div class="container mx-auto py-10">
        <h1 class="text-3xl font-bold text-center text-gray-800 mb-10">Quản trị các loài hoa</h1>
        
        <div class="mb-6 p-3 text-left">
            <a href="add_flowers.php" class="bg-green-500 text-white py-2 px-4 rounded-md hover:bg-green-600 transition duration-200">
                Thêm mới
            </a>
        </div>

        <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden">
            <thead>
                <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                    <th class="py-3 px-6 text-left">Tên Hoa</th>
                    <th class="py-3 px-6 w-2/4 text-left">Mô Tả</th>
                    <th class="py-3 px-6 text-center">Ảnh</th>
                    <th class="py-3 px-6 text-center">Hành Động</th>
                </tr>
            </thead>
            <tbody class="text-gray-600 text-sm font-light">
                <?php foreach ($flowers as $index => $flower): ?>
                    <tr class="border-b border-gray-200 hover:bg-gray-100">
                        <td class="py-3 px-6 font-bold text-left"><?php echo $flower['name']; ?></td>
                        <td class="py-3 px-6 text-left"><?php echo $flower['description']; ?></td>
                        <td class="py-3 px-6 text-center flex items-center justify-center space-x-2">
                            <img src="<?php echo $flower['images'][0]; ?>" alt="<?php echo $flower['name']; ?>" class="w-16 h-16 object-cover rounded-lg">
                            <img src="<?php echo $flower['images'][1]; ?>" alt="<?php echo $flower['name']; ?>" class="w-16 h-16 object-cover rounded-lg">
                        </td>
                        <td class="py-3 px-6 text-center">
                            <div class="flex space-x-2 justify-center">
                               
                            <a href="edit_flowers.php?edit=<?php echo $index; ?>" class="text-white px-4 py-2 rounded-lg">✏️</a>
                            <a href="delete_flowers.php?delete=<?php echo $index; ?>" class="text-white px-4 py-2 rounded-lg" onclick="return confirm('Bạn có chắc muốn xóa không?')">🗑️</a>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
