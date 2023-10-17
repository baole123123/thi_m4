

<a href="{{ route('categorie.create') }}" class="btn btn-add">Thêm mới</a>

<div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
    <h1 class="text-white text-capitalize ps-3">Danh sách chi tiêu</h1>
</div>

<div class="table-responsive p-0">
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Danh mục</th>
                <th>Ngày</th>
                <th>Tiền</th>
                <th>Ghi chú</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $key => $categorie)
            @php
                $total = 0;
            @endphp
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $categorie->danhmuc }}</td>
                <td>{{ $categorie->ngay }}</td>
                <td>{{ $categorie->tien }}</td>
                <td>{{ $categorie->ghichu }}</td>
                <td>
                    <div class="btn-group">
                        <a href="{{ route('categorie.edit',$categorie->id) }}">
                            <button type="button" class="btn btn-primary">Sửa</button>
                        </a>
                        <a href="{{ route('categorie.show',$categorie->id) }}">
                            <!-- <button type="button" class="btn btn-success mb-2">Xem</button> -->
                        </a>
                        <form method="POST" action="{{ route('categories.destroy',$categorie->id) }}">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn có muốn xóa ?')">Xóa</button>
                        </form>
                    </div>
                </td>
            </tr>

            @endforeach
            <div class="mt-3">
                            <h4>Tổng: {{number_format($totalAmount)}} VNĐ</h4>
                        </div>
           
        </tbody>
    </table>
</div>

<div class="card-footer">
    <nav class="float-right">
        {{ $categories->appends(request()->query())->links('pagination::bootstrap-4') }}
    </nav>
</div>

<style>
    /* CSS cho bảng */
    table {
        width: 100%;
        border-collapse: collapse;
    }

    th,
    td {
        border: 1px solid #ddd;
        padding: 8px;
    }

    th {
        background-color: #f2f2f2;
    }

    /* CSS cho nút sửa và xóa */
    .btn {
        padding: 5px 10px;
        border: none;
        border-radius: 3px;
        color: #FF0000;
        cursor: pointer;
    }

    .btn-primary {
        background-color: #007bff;
        color: #fff;
    }

    .btn-danger {
        background-color: #dc3545;
        color: #fff;
    }

    /* CSS cho nút thêm mới */
    .btn-add {
        padding: 5px 10px;
        border: none;
        border-radius: 3px;
        background-color: #f44336;
        color: #fff;
        cursor: pointer;
    }

    tr:hover {
        background-color: #E6E6E6;
        transition: background-color 0.3s;
    }

    tr:hover td {
        transform: scale(1.1);
        transition: transform 0.3s;
    }

    .card-footer {
        background-color: #f8f9fa;
        border-top: 1px solid #dee2e6;
        padding: 0.75rem 1.25rem;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .pagination {
        display: inline-block;
       margin: 0;
        padding: 0;
    }

    .pagination li {
        display: inline;
    }

    .pagination li a {
        color: #007bff;
        padding: 0.25rem 0.5rem;
        text-decoration: none;
        background-color: blue;
        /* Màu nền của ô phân trang */
    }

    .pagination li.active a {
        background-color: #007bff;
        color: #fff;
    }

    .pagination li.disabled a {
        color: #6c757d;
        pointer-events: none;
    }

    .btn-add {
        padding: 5px 10px;
        border: none;
        border-radius: 3px;
        background-color: red;
        color: #fff;
        cursor: pointer;
    }
</style>
