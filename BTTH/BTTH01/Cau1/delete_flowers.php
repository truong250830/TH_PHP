<?php
session_start();


if (isset($_GET['delete'])) {
    $index = $_GET['delete'];

    
    if (isset($_SESSION['flowers'][$index])) {
        $flower = $_SESSION['flowers'][$index]; 

        
        $image1_path = $flower['images'][0];
        $image2_path = $flower['images'][1];

        if (file_exists($image1_path)) {
            unlink($image1_path);
        }

        if (file_exists($image2_path)) {
            unlink($image2_path); 
        }

        
        unset($_SESSION['flowers'][$index]);

        
        header("Location: admin.php");
        exit();
    } else {
        echo "Không tìm thấy loài hoa!";
        exit();
    }
}
?>
