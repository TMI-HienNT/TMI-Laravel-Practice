<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use Illuminate\Http\JsonResponse;

class BrandController extends Controller
{
    //index()	Hiển thị danh sách tất cả các tài nguyên.
    public function index()
    {
        $brands = Brand::all();
        return view('brands.index', compact('brands'));
    }

    //create()	Hiển thị form để tạo một tài nguyên mới.
    public function create()
    {
        return view('brands.create');
    }

    //store(Request $request)	Xử lý lưu một tài nguyên mới vào cơ sở dữ liệu.
    public function store(Request $request)
    {


        return response()->json([
           'message' => 'ahihi'
        ]);
    }

    //edit($id)	Hiển thị form để chỉnh sửa tài nguyên cụ thể.
    public function edit($id)
    {
        $brand = Brand::find($id);
        return view('brands.edit', compact('brand'));
    }

    //update(Request $request, $id)	Cập nhật thông tin tài nguyên trong cơ sở dữ liệu.
    public function update(Request $request, $id)
    {
        $brand = Brand::findOrFail($id);
        $brand->update([
            'name' => $request->brand_old_name,
        ]);

        return response()->json([
            'message' => "successfully",
            'data' => $brand,
        ], 200);
    }

    //show($id)	Hiển thị thông tin chi tiết của một tài nguyên cụ thể.
    public function show()
    {

    }



    //destroy($id)	Xóa một tài nguyên cụ thể khỏi cơ sở dữ liệu.

}
