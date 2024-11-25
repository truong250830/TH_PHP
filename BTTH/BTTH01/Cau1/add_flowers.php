<?php
session_start();


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $name = $_POST['name'];
    $description = $_POST['description'];

    
    $image1 = $_FILES['image1'];
    $image2 = $_FILES['image2'];

  
    $target_dir = "images/";

    
    $image1_name = $target_dir . time() . "_" . basename($image1["name"]);
    $image2_name = $target_dir . time() . "_" . basename($image2["name"]);

   
    if (move_uploaded_file($image1["tmp_name"], $image1_name) && move_uploaded_file($image2["tmp_name"], $image2_name)) {
        
        $new_flower = [
            'name' => $name,
            'description' => $description,
            'images' => [$image1_name, $image2_name]
        ];

       
        $_SESSION['flowers'][] = $new_flower;

        
        header("Location: admin.php");
        exit();
    } else {
        echo "Lỗi tải ảnh! Chi tiết: " . print_r(error_get_last(), true);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Mới Loài Hoa</title>
    <script src="/Tailwind/Tailwind/tailwind.js"></script>
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
</head>
<body class="bg-gray-100">
    <div class="container mx-auto py-10">
        <h1 class="text-3xl font-bold text-center text-gray-800 mb-10">Thêm Mới Loài Hoa</h1>
        
        
        <form action="add_flowers.php" method="POST" enctype="multipart/form-data" class="bg-white p-6 rounded-lg shadow-md">
            <div class="mb-4">
                <label for="name" class="block text-sm font-semibold text-gray-700">Tên Hoa</label>
                <input type="text" name="name" id="name" class="w-full p-3 border border-gray-300 rounded-md" required>
            </div>

            <div class="mb-4">
                <label for="description" class="block text-sm font-semibold text-gray-700">Mô Tả</label>
                <textarea name="description" id="description" rows="4" class="w-full p-3 border border-gray-300 rounded-md" required></textarea>
            </div>

            <div class="mb-4">
                <label for="image1" class="block text-sm font-semibold text-gray-700">Ảnh 1</label>
                <input type="file" name="image1" id="image1" class="w-full p-3 border border-gray-300 rounded-md" required>
            </div>

            <div class="mb-4">
                <label for="image2" class="block text-sm font-semibold text-gray-700">Ảnh 2</label>
                <input type="file" name="image2" id="image2" class="w-full p-3 border border-gray-300 rounded-md" required>
            </div>

            <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 transition duration-200">Thêm mới</button>
        </form>
    </div>
</body>
</html>
