<?php
// Bước 1: Gọi file flowers.php chứa mảng dữ liệu (giả lập CSDL)
require 'flowers.php';

// Bước 2: Nhận thông báo thành công tạo mới qua phương thức GET (nếu có)
$success = $_GET['success'] ?? "";
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Quản lý loài hoa</title>
    <!-- Chèn CSS nếu cần, ví dụ Bootstrap hay style.css -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="navbar">
    <div>Quản lý loài hoa</div>
    <div>
        <a href="index.php">Dashboard</a>
        <a href="create.php" class="btn btn-primary">+ Thêm loài hoa</a>
    </div>
</div>

<div class="container">
    <h1>Dashboard</h1>
    <p>Dữ liệu trong ví dụ này đang được lưu cố định trong một mảng PHP (chưa dùng CSDL).</p>

    <!-- Bước 3: Hiển thị thông báo nếu có tham số ?success=created -->
    <?php if ($success == "created"): ?>
        <div style="padding: 10px; background:#d1e7dd; color:#0f5132; border-radius:4px; margin-bottom:16px;">
            Giả lập: Thêm đồ án mới thành công! (thông báo thông qua tham số GET trong URL).
        </div>
    <?php endif; ?>

    <!-- Bước 4: Hiển thị bảng dữ liệu -->
    <table class="table" border = 1>
    <thead>
        <tr>
            <th>stt</th>
            <th>Tên hoa</th>
            <th>Mô tả</th>
            <th>Hình ảnh</th>
            <th>điều Khiển</th>
        </tr>
        </thead>
        <tbody>
        <?php if (!empty($flowers_list)): ?>
            <?php foreach ($flowers_list as $item): ?>
        <tr>
            <td><?= $item['stt'] ?>
            <td><?= $item['name'] ?></td>
            <td><?= $item['mo ta'] ?></td>
            <td><img src = "<?= $item['anh'] ?>"></td>
            <td><button>Sửa</button><button>Xóa</button></td>
        </tr>
    <?php endforeach; ?>
        <?php else: ?>
            <!-- Trường hợp mảng rỗng -->
            <tr>
                <td colspan="7">Chưa có hoa nào trong mảng.</td>
            </tr>
        <?php endif; ?>
        </tbody>
    </table>
</div>
</body>
</html>
