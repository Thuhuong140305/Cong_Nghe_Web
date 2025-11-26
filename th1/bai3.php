<?php 
    $SVfile = fopen('65HTTT_Danh_sach_diem_danh.csv','r') or die ("Lỗi mở file");

    echo "<table border='1' cellpadding='8' cellspacing='0'>";
    echo "<thead><tr>";

    // Đọc dòng đầu tiên làm tiêu đề (header)
    if (($header = fgetcsv($SVfile, 1000, ",")) !== FALSE) {
        foreach ($header as $col) {
            echo "<th>$col</th>";
        }
    }
    echo "</tr></thead><tbody>";

    // Đọc các dòng còn lại
    while (($row = fgetcsv($SVfile, 1000, ",")) !== FALSE) {
        echo "<tr>";
        foreach ($row as $col) {
            echo "<td>$col</td>";
        }
        echo "</tr>";
    }

    echo "</tbody></table>";

    fclose($SVfile);
?>