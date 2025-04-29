



<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Attribute;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use League\CommonMark\Extension\Attributes\Node\Attributes;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index',compact('products'));
    }
    public function create(){
        return view('products.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'qty' => 'required|integer|min:0',
            'description' => 'nullable|string',
            'Isavailable' => 'sometimes|boolean'
        ]);

        Product::create($request->all());
        return redirect()->route('products.index')
        ->with('success','Product Created Successfully');
    }
    public function edit($id){
        $product = Product::findOrFail($id);
        return view ('products.edit',compact('product'));
    }


    public function update(Request $request, $id){
        $request->validate([
            'name' => 'required|string|max:255',
            'qty' => 'required|integer|min:0',
            'description' => 'nullable|string',
            'Isavailable' => 'sometimes|boolean'
        ]);

        $product = Product::findOrFail($id);
        $product->update($request->all());
        return redirect()->route('products.index')
        ->with('success','Products Updated Successfully');
    }
    public function destroy($id){
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('products.index')
        ->with('success','Products Deleted Successfully');

}
}






........
<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Attribute;
use Illuminate\Http\Request;
use League\CommonMark\Extension\Attributes\Node\Attributes;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index',compact('products'));
    }
    public function create(){
        return view('products.create');
    }

    public function store(Request $request)
    {
        $request->validate([

        ]);

        Product::create($request->all());
        return redirect()->route('products.index')
        ->with('success','Product Created Successfully');
    }
    public function edit($id){
        $product = Product::findOrFail($id);
        return view ('products.edit',compact('product'));
    }


    public function update(Request $request, $id){
        $product = Product::findOrFail($id);
        $product->update($request->all());
        return redirect()->route('products.index')
        ->with('success','Products Updated Successfully');
    }
    public function destroy($id){
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('products.index')
        ->with('success','Products Deleted Successfully');

}
}











