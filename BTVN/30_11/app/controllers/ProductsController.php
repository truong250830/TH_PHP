<?php
require_once __DIR__ . '/../models/Products.php';

class ProductsController {

    
    public function index() {
        $products = Products::getAll();
        require_once __DIR__ . '/../views/products/index.php';
    }

   
    public function show() {
        $id = $_GET['id'];
        $product = Products::getById($id);
        require_once __DIR__ . '/../views/products/show.php';
    }

    public function create() {
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $price = $_POST['price'];
    
           
            Products::create($name, $price);
    
            
            header('Location: ?page=products');
            exit();
        }
    
        // Nếu là GET request, hiển thị form thêm sản phẩm
        require_once __DIR__ . '/../views/products/create.php';
    }
    
    public function edit() {
        $id = $_GET['id'];
        
        $product = Products::getById($id);
    
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $price = $_POST['price'];
    
           
            if (Products::update($id, $name, $price)) {
         
                header('Location: ?page=products&action=index'); 
                exit();
            } else {
                
                echo "Cập nhật sản phẩm không thành công.";
            }
        }
    
        require_once __DIR__ . '/../views/products/edit.php'; 
    }
    
    
    
    
    public function delete() {
        $id = $_GET['id'];
    
        // Gọi hàm để xóa sản phẩm
        Products::delete($id);
    
        // Sau khi xóa xong, chuyển hướng về trang danh sách sản phẩm
        header('Location: ?page=products');
        exit();
    }
    
}
?>
