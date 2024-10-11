<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giải Phương Trình Bậc Nhất</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="number"], input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
        }
        input[readonly] {
            background-color: #f0f0f0;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #28a745;
            color: #fff;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }
        button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Giải Phương Trình Bậc Nhất</h2>
        <div class="form-group">
            <label for="a">Nhập hệ số a:</label>
            <input type="number" id="a" placeholder="Nhập giá trị của a">
        </div>
        <div class="form-group">
            <label for="b">Nhập hệ số b:</label>
            <input type="number" id="b" placeholder="Nhập giá trị của b">
        </div>
        <button onclick="giaiPhuongTrinh()">Giải</button>
        <div class="form-group">
            <label for="result">Nghiệm của phương trình:</label>
            <input type="text" id="result" readonly>
        </div>
    </div>

    <script>
        function giaiPhuongTrinh() {
            // Lấy giá trị của a và b từ form
            let a = document.getElementById('a').value;
            let b = document.getElementById('b').value;

            // Kiểm tra nếu a không bằng 0
            if (a != 0) {
                // Tính nghiệm
                let x = -b / a;
                document.getElementById('result').value = x;
            } else if (a == 0 && b == 0) {
                document.getElementById('result').value = "Phương trình vô số nghiệm";
            } else {
                document.getElementById('result').value = "Phương trình vô nghiệm";
            }
        }
    </script>
</body>
</html>
