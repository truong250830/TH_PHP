<?php
require 'includes/data.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách các loài hoa</title>
    <script src="/Tailwind//Tailwind//tailwind.js"></script>
</head>
<body class="bg-gray-100 p-96">
    <div class="container mx-auto py-10">
        <h1 class="text-3xl font-bold text-center text-gray-800 mb-10">Danh sách các loài hoa</h1>
        <div class="space-y-8">
            <?php foreach ($flowers as $flower): ?>
                <div class="bg-white shadow-md rounded-lg overflow-hidden p-4">
                   
                    <div class="text-left">
                        <h2 class="text-2xl font-semibold text-gray-800"><?php echo $flower['name']; ?></h2>
                        <p class="text-gray-600 mt-2"><?php echo $flower['description']; ?></p>
                    </div>
                    
                    <div class="mt-4 space-y-4">
                        <img src="<?php echo $flower['images'][0]; ?>" 
                             alt="<?php echo $flower['name']; ?>" 
                             class="flex w-full max-w-md h-72 object-cover rounded-md mx-auto">
                        <img src="<?php echo $flower['images'][1]; ?>" 
                             alt="<?php echo $flower['name']; ?>" 
                             class="w-full max-w-md h-72 object-cover rounded-md mx-auto">
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>
