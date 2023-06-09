<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest as StoreCategoryRequestAlias;
use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use Illuminate\Http\Response;

class CategoryController extends Controller
{
    /**
     * @return void
     */
    public function index():void
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreCategoryRequestAlias $request
     * @return Response
     */
    public function store(StoreCategoryRequest $request):StoreCategoryRequestAlias|Response
    {
        $category = $request->all();
        $category['user_id'] = auth()->id();
        (new Category())->storCategory($category);
        return response()->json(['msg'=>'Category created successfully','cls'=>'success']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return Response
     */
    public function show(Category $category)
    {

    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCategoryRequest  $request
     * @param  \App\Models\Category  $category
     * @return Response
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return Response
     */
    public function destroy(Category $category)
    {
        //
    }
}
