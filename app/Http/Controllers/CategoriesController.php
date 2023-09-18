<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;

use Symfony\Component\HttpFoundation\Response;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //

        $categories = Categories::when( $request->name,function($query,$value){
            $query->where('name','LIKE','%value%')->orwhere('description','LIKE','%value%');

        })->when($request->parent_id,function($query,$value){
        $query->where('parent_id','=',$value);})->get();
        $parents = Categories::orderBy('name','asc')->get();

        return view('admin.categories.index',['categories'=>$categories,'parents'=>$parents]);


      }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $parents = Categories::orderBy('name','asc')->get();
        return view('admin.categories.create',['parents'=>$parents,
        'title'=>'Add category',]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryRequest $request)
    {
        //Request تحويل الي طريقة
        /*******----------------- ******/
        // $request->validate([
        //     'name' => 'required|max:50',
        //     'description' => 'nullable|max:50',
        //     'parent_id' => ['nullable','exists:categories,id'],
        //     'image' => "nullable|image|mimes:jpeg,jpg,png|max:1024",
        //     "status" => "required|in:active,inactive",

        // ],[
        //     'name.required' => 'أدخل الاسم ',
        //     'status.required' => 'أدخل الحالة ',
        // ]);
        // if (!$validator->fails()) {
            $category = new Categories();
            $category->name = $request->input('name');
            $category->slug =Str::slug($request->input('name'));
            $category->description = $request->input('description');
            $category->parent_id = $request->input('parent_id');

            $category->status = $request->input('status');
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $filename = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('images'), $filename);
                $category->img = $filename;
            // }
            $saved = $category->save();
            // return redirect()->back();
            Session::flash('message', 'تم اضافة التصنيف بنجاح ..');
            return redirect()->route('category.index');

            // return response()->json([

            //     'message' => $saved ? 'Add suuccessfuly' : 'Faild to add',
            // ]
            //     , $saved ? Response::HTTP_CREATED : Response::HTTP_BAD_REQUEST
            // );
        }
        // else {
        //     return response()->json([
        //         'message' => $validator->getMessageBag()->first(),
        //     ], Response::HTTP_BAD_REQUEST
        //     );

        // }
    }

    /**
     * Display the specified resource.
     */
    public function show(Categories $categories)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Categories $categories)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Categories $categories)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categories $categories)
    {
        //
    }
}
