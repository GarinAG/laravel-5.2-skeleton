<?php
namespace Intergit\Products\Http\Controllers;

use App\Http\Controllers\Controller;
use Intergit\Products\Models\PrsoCategory as Category;
use Intergit\Products\Models\PrsoProduct as Product;

class PrsoProductController extends Controller
{

    public function show($slug, $categoryid = null)
    {
        if ($product = Product::where('slug', $slug)->first()) {
            $parentCategores = $product->categories;
            $pathCategory = Category::find($categoryid);
            return view('Productso::product_show', compact('product', 'parentCategores', 'pathCategory'));
        }
        abort(404);
    }
}