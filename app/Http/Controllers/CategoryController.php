<?php
namespace App\Http\Controllers;
use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Requests\CustomerRequest;
use App\Models\Category;

class CategoryController extends Controller
{
    // Phần hiển thị chung
    public function index(Request $request)
    {
        // $this->authorize('viewAny', User::class);
        // Phân trang và tìm kiếm
        $categories = Category::paginate(5);
        if (isset($request->keyword)) {
            $keyword = $request->keyword;
            $categories = Category::where('name', 'like', "%$keyword%")
                ->paginate();
        }
        $totalAmount = $categories->sum('tien');

        return view('categories.index', compact('categories' , 'totalAmount'));
    }
    public function create()
    {
        $categories = Category::get();
        return view('categories.create', compact('categories'));
    }
    public function store(Request $request)
    {
        $categories = new Category();
        $categories->danhmuc = $request->danhmuc;
        $categories->ngay = $request->ngay;
        $categories->tien = $request->tien;
        $categories->ghichu = $request->ghichu;
        $categories->save();

        return redirect()->route('categorie.index');
    }
    // Chỉnh sửa
    public function edit($id)
    {
        $categories = Category::find($id);
        return view('categories.edit', compact('categories'));
    }
    public function update(Request $request, $id)
    {
        $categories = Category::find($id);
        $categories->danhmuc = $request->danhmuc;
        $categories->ngay = $request->ngay;
        $categories->tien = $request->tien;
        $categories->ghichu = $request->ghichu;
        $categories->save();

        return redirect()->route('categorie.index');
    }
    public function destroy($id)
    {
        $categories = Category::find($id);
        if ($categories) {
            $categories->delete();
        }
        return redirect()->route('categorie.index');
    }
}
