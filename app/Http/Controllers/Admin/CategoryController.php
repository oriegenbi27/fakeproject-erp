<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Gate;

class CategoryController extends Controller
{
    //

    public function index(Request $request)
    {
        // dd($request);
        abort_if(Gate::denies('category_access'), Response::HTTP_FORBIDDEN, '403 Forbiden');

        return view('admin.category.index');
    }

    public function create()
    {
        abort_if(Gate::denies('category_create'), Response::HTTP_FORBIDDEN, '403 Forbiden');

        return view('admin.category.create');
    }
    public function edit(Request $request)
    {
        abort_if(Gate::denies('category_edit'), Response::HTTP_FORBIDDEN, '403 Forbiden');
        return view('admin.category.edit');
    }
}
