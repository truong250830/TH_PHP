<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý sản phẩm</title>
    <script src="/Tailwind/Tailwind/tailwind.js"></script>
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
</head>
<body class="bg-gray-100">
    <div class="container mx-auto">
        <!-- Header -->
        <header class="py-2 bg-white shadow-md p-3">
    <div class="container mx-auto flex justify-between items-center">
        <h1 class="text-2xl font-bold text-gray-800">Administration</h1>
        <nav class="space-x-4">
            <a href="index.php" class="<?php echo basename($_SERVER['PHP_SELF']) === 'index.php' ? 'font-bold text-blue-500' : 'text-gray-600 hover:text-blue-500'; ?>">Trang chủ</a>
            <a href="about.php" class="<?php echo basename($_SERVER['PHP_SELF']) === 'about.php' ? 'font-bold text-blue-500' : 'text-gray-600 hover:text-blue-500'; ?>">Trang ngoài</a>
            <a href="categories.php" class="<?php echo basename($_SERVER['PHP_SELF']) === 'categories.php' ? 'font-bold text-blue-500' : 'text-gray-600 hover:text-blue-500'; ?>">Thể loại</a>
            <a href="authors.php" class="<?php echo basename($_SERVER['PHP_SELF']) === 'authors.php' ? 'font-bold text-blue-500' : 'text-gray-600 hover:text-blue-500'; ?>">Tác giả</a>
            <a href="posts.php" class="<?php echo basename($_SERVER['PHP_SELF']) === 'posts.php' ? 'font-bold text-blue-500' : 'text-gray-600 hover:text-blue-500'; ?>">Bài viết</a>
        </nav>
    </div>
</header>



