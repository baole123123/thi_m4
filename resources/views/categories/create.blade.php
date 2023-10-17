<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="{{route('categories.store')}}" method="POST" enctype="multipart/form-data">
@csrf

<h3> Thêm mới chi tiêu</h3>
  <label for="fname">Danh mục:</label><br>
  <input type="text" id="fname" name="danhmuc"><br>
  <label for="lname">Ngày:</label><br>
<input type="date" id="lname" name="ngay"><br>

<script>
    // Lấy ngày hiện tại
    var today = new Date().toISOString().split('T')[0];

    // Đặt giá trị mặc định cho trường ngày
    document.getElementById("lname").value = today;
</script>
  <label for="lname">Tiền:</label><br>
  <input type="text" id="lname" name="tien"><br><br>

  <label for="lname">Ghi chú:</label><br>
  <input type="text" id="lname" name="ghichu"><br><br>


  <a href="{{ route('categorie.index') }}" class="btn">Hủy</a>

  <input type="submit" value="Submit">
</form>


</body>
</html>
