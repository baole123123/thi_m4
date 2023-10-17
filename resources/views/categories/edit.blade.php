<!DOCTYPE html>
<html>
<body>
    <h2>Sửa chi tiêu</h2>
    <form action="<?php echo route('categorie.update', $categories->id) ?>" method="POST">
        @csrf
        @method('PUT')
        <label for="danhmuc">Danh mục:</label>
        <br>
        <input type="text" id="list" name="danhmuc" value="{{$categories->danhmuc}}">
        <br>
        <label for="ngay">Ngày:</label>
        <br>
        <input type="date" id="ngay" name="ngay" value="{{$categories->ngay}}">
        <br>
        <label for="price">Tiền:</label>
        <br>
        <input type="number" id="tien" name="tien" value="{{$categories->tien}}">
        <br>
        <label for="note">Ghi chú:</label>
        <br>
        <input type="text" id="ghichu" name="ghichu" value="{{$categories->ghichu}}">
        <br></br>
  <a href="{{ route('categorie.index') }}" class="btn">Hủy</a>

        <input type="submit" value="Cập nhật">
    </form>
</body>
</html>







