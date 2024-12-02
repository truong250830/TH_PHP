<?php
require_once __DIR__ . '/../config/database.php';

class Products {
    private static $conn;

    // Kết nối cơ sở dữ liệu
    private static function getConnection() {
        if (self::$conn === null) {
            $database = new Database();
            self::$conn = $database->getConnection();
        }
        return self::$conn;
    }

    // Lấy tất cả sản phẩm
    public static function getAll() {
        $conn = self::getConnection();
        $sql = "SELECT * FROM products";
        $result = $conn->query($sql);
        $products = [];
        while ($row = $result->fetch_assoc()) {
            $products[] = $row;
        }
        return $products;
    }

    // Lấy sản phẩm theo ID
    public static function getById($id) {
        $conn = self::getConnection();
        $sql = "SELECT * FROM products WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    // Thêm sản phẩm
public static function create($name, $price) {
    $conn = self::getConnection();
    $sql = "INSERT INTO products (name, price) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sd", $name, $price); // 's' là cho string, 'd' là cho double (giá trị thực)
    return $stmt->execute();
}
// Cập nhật sản phẩm
public static function update($id, $name, $price) {
    $conn = self::getConnection();
    $sql = "UPDATE products SET name = ?, price = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sdi", $name, $price, $id); // 's' cho string, 'd' cho double, 'i' cho integer
    return $stmt->execute();
}
// Xóa sản phẩm
public static function delete($id) {
    $conn = self::getConnection();
    $sql = "DELETE FROM products WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id); // 'i' cho integer
    return $stmt->execute();
}

}
?>

