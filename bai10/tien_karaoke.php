<?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $start = $_POST['start'];
            $end = $_POST['end'];

            // Giá tiền quy định
            $priceBefore17 = 45000; // Giá trước 17h
            $priceAfter17 = 60000;  // Giá sau 17h
            $result = '';

            // Kiểm tra giờ nhập có hợp lệ không
            if ($start >= $end) {
                $result = "Giờ bắt đầu phải nhỏ hơn giờ kết thúc!";
            } elseif ($start < 0 || $end > 24 || $start > 24 || $end < 0) {
                $result = "Giờ nghỉ, không trong khoảng 0-24h!";
            } else {
                // Trường hợp 1: Cả bắt đầu và kết thúc đều nhỏ hơn hay bằng 17h
                if ($end <= 17) {
                    $totalCost = ($end - $start) * $priceBefore17;
                    $result = "Tổng số tiền: " . $totalCost . " VND";
                }
                // Trường hợp 2: Bắt đầu >= 17h
                elseif ($start >= 17) {
                    $totalCost = ($end - $start) * $priceAfter17;
                    $result = "Tổng số tiền: " . $totalCost . " VND";
                }
                // Trường hợp 3: Bắt đầu <= 17h và kết thúc >= 17h
                else {
                    $before17 = 17 - $start; // Số giờ trước 17h
                    $after17 = $end - 17;    // Số giờ sau 17h
                    $totalCost = ($before17 * $priceBefore17) + ($after17 * $priceAfter17);
                    $result = "Tổng số tiền: " . $totalCost . " VND";
                }
            }
        }
        ?>