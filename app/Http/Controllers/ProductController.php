<?php

namespace App\Http\Controllers;
use App\Http\Requests\Productequest;
use App\Models\Categories;
use App\Models\Product;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use PhpParser\JsonDecoder;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $products = Product::with('category')->latest()->paginate(5);
        return view('admin.products.index',[
            'products'=>$products,
            'categories'=>Categories::all(),
        ]);
        // return view('admin.product.index',compact('products',$products));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.products.create',[
            'product'=>new Product(),
            'categories'=>Categories::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $product= new Product();
        $validationRules =$product->validateRules();
        $request->merge([
            'slug'=>Str::slug($request->post('name')),
            // 'store_id'=>5,

        ]);
        $data= $request->all();
        if($request->hasFile('image')){
            $file = $request->file('image');
            $data['image'] = $file->store('/product',[
                'disk'=>'storage/product'
            ]);
        }
        // if ($request->hasFile('image')) {
        //     $file = $request->file('image');
        //     $imageName = time() . '_image_' . $product->name  . '.' . $file->getClientOriginalExtension();
        //     $file->storeAs('product', $imageName, ['disk' => 'public']);
        //     $data['image'] = $product->image = 'product/' . $imageName;
        // }

        $product = Product::create($data);
        //هاي نفس ناتج الي فوق
        $tags = $request->post('tags');
        $tags = json_decode($tags);
        //  DB::table('product_tag')->where(['product_id','=',$product->id])->delete();

        if(count($tags)>0){
            //$product_tag=[];
            foreach($tags as $tag){
                $tag_name= $tag->value ;
               $tag_model= Tag::where('name',$tag_name)->first();
               if(!$tag_model){
                Tag::create([
                    'name'=>$tag_name,
                    'slug'=>Str::slug($tag_name),
                ]);
               }
              $mohammed= DB::table('product_tag')->insert([
                "product_id"=>$product->id ,
                "tag_id"=>$tag_model,
               ]);
                //$product_tag[]=$tag_model->id;
            }
        }
        $product= new Product($data);
        $product->save();


        return redirect()->route('admin.products.index')->with('success','Product($product->name) created ! ');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product,$id)
    {
        //
        $product= Product::findOrFail($id);
        return view('admin.products.show',[
            'product'=>$product,

        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product,$id)
    {
        //
        $product= Product::findOrFail($id);
        return view('admin.products.edit',[
            'product'=>$product,
            'category'=>Categories::all()

        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product,$id)
    {
        //
        $product= Product::findOrFail($id);
        $request->validate(Product::validateRules());
        $request->update($request->all());
        //نفس الكود الي فوق لكن مابتخزن الا لما تعمل save
        // $request->fill($request->all())->save();
        return redirect()->route('admin.products.index')->with('success','Product($product->name) updated ! ');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product,$id)
    {
        //
        $product= Product::findOrFail($id);
        $product->delete();
        return redirect()->route('admin.products.index')->with('success','Product($product->name) deleted ! ');
    }
}
