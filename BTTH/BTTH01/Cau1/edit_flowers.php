<?php
session_start();


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   
    $index = $_POST['index']; 
    $name = $_POST['name'];
    $description = $_POST['description'];

    
    $image1 = $_FILES['image1'];
    $image2 = $_FILES['image2'];

    
    $target_dir = "images/";

    
    $flower = $_SESSION['flowers'][$index];

    
    if ($image1["error"] === UPLOAD_ERR_OK) {
        $image1_name = $target_dir . time() . "_" . basename($image1["name"]);
        move_uploaded_file($image1["tmp_name"], $image1_name);
    } else {
        
        $image1_name = $flower['images'][0];
    }

    if ($image2["error"] === UPLOAD_ERR_OK) {
        $image2_name = $target_dir . time() . "_" . basename($image2["name"]);
        move_uploaded_file($image2["tmp_name"], $image2_name);
    } else {
        
        $image2_name = $flower['images'][1];
    }

   
    $_SESSION['flowers'][$index] = [
        'name' => $name,
        'description' => $description,
        'images' => [$image1_name, $image2_name]
    ];

   
    header("Location: admin.php");
    exit();
}

if (isset($_GET['edit']) && isset($_SESSION['flowers'][$_GET['edit']])) {
    $index = $_GET['edit'];
    $flower = $_SESSION['flowers'][$index]; 
} else {
    
    header("Location: admin.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa loài hoa</title>
    <script src="/Tailwind//Tailwind//tailwind.js"></script>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto py-10">
        <h1 class="text-3xl font-bold text-center text-gray-800 mb-10">Sửa thông tin loài hoa</h1>

        <!-- Form sửa hoa -->
        <form action="edit_flowers.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="index" value="<?php echo $index; ?>">

            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Tên Hoa</label>
                <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($flower['name']); ?>" class="mt-1 p-2 w-full border rounded-md">
            </div>

            <div class="mb-4">
                <label for="description" class="block text-sm font-medium text-gray-700">Mô Tả</label>
                <textarea id="description" name="description" class="mt-1 p-2 w-full border rounded-md"><?php echo htmlspecialchars($flower['description']); ?></textarea>
            </div>

            <div class="mb-4">
                <label for="image1" class="block text-sm font-medium text-gray-700">Ảnh 1</label>
                <input type="file" id="image1" name="image1" class="mt-1 p-2 w-full border rounded-md">
                <img src="<?php echo $flower['images'][0]; ?>" alt="Ảnh 1 hiện tại" class="mt-2 w-32 h-32 object-cover rounded-lg">
            </div>

            <div class="mb-4">
                <label for="image2" class="block text-sm font-medium text-gray-700">Ảnh 2</label>
                <input type="file" id="image2" name="image2" class="mt-1 p-2 w-full border rounded-md">
                <img src="<?php echo $flower['images'][1]; ?>" alt="Ảnh 2 hiện tại" class="mt-2 w-32 h-32 object-cover rounded-lg">
            </div>

            <div class="flex justify-end">
                <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 transition duration-200">Cập nhật</button>
            </div>
        </form>
    </div>
</body>
</html>
