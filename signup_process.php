<?php

require("includes/conn.php"); 


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Lấy dữ liệu từ form
    $username = $_POST['username'];
    $fullname = $_POST['fullname'];
    $password = $_POST['password'];

    
    if (empty($username) || empty($fullname) || empty($password)) {
        echo "Vui lòng điền đầy đủ thông tin.";
        exit;
    }

    
    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "Tên đăng nhập đã tồn tại. Vui lòng chọn tên khác.";
        exit;
    }

    
    $stmt = $conn->prepare("INSERT INTO users (username, fullname, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $username, $fullname, $password);

    if ($stmt->execute()) {
        echo "<div class='row justify-content-center'>";
        echo "<div class='col-lg-8 text-center'>";
        echo "      <h2 style='font-weight: bold; margin-bottom: 20px;'>Đăng ký thành công! Bạn có thể <a href='login.php'>đăng nhập</a> bây giờ.</h2>";
        echo "       <hr>";
        echo "       <br>";
        echo "    </div>";
        echo "</div>";
    } else {
        echo "Đã xảy ra lỗi. Vui lòng thử lại.";
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Phương thức không hợp lệ.";
}
?>
