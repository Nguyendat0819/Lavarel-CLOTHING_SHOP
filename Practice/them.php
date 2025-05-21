<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="header"></div>
    <div class="container">
        <div class="contain_them">
        <form action="xuly.php" method="post" style="max-width: 400px; margin: auto;">
            <h2>Thêm sản phẩm</h2>
            <div style="margin-bottom: 12px;">
                <label for="productCode">Mã sản phẩm</label><br>
                <input type="text" id="productCode" name="productCode" autocomplete="off" style="width: 100%; padding: 8px;" >
            </div>

            <div style="margin-bottom: 12px;">
                <label for="productName">Tên sản phẩm</label><br>
                <input type="text" id="productName" name="productName" autocomplete="off" style="width: 100%; padding: 8px;">
            </div>

            <div style="margin-bottom: 12px;">
                <label for="buyPrice">Giá sản phẩm</label><br>
                <input type="text" id="buyPrice" name="buyPrice" autocomplete="off" style="width: 100%; padding: 8px;">
            </div>

            <div style="margin-bottom: 12px;">
                <label for="qualityStock">Số lượng</label><br>
                <input type="text" id="qualityStock" name="qualityStock" autocomplete="off" style="width: 100%; padding: 8px;">
            </div>

            <div style="margin-bottom: 12px;">
                <label for="type">Loại sản phẩm</label><br>
                <input type="text" id="type" name="type" autocomplete="off" style="width: 100%; padding: 8px;">
            </div>

            <div style="margin-bottom: 12px;">
                <label for="fileImage">Thêm hình ảnh</label><br>
                <input type="file" id="fileImage" name="fileImage" autocomplete="off" style="width: 100%; padding: 8px;">
            </div>

            <button type="submit" name="them" style="padding: 10px 20px;">Thêm sản phẩm</button>
        </form>

        </div>
    </div>
    <div class="footer"></div>
</body>
</html>