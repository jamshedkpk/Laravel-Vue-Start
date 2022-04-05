<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;

class CartController extends Controller
{
public function index()
{
dd('ok');
}
public function create()
{
dd('okokok');
}
public function store(Request $request)
{
$userid=$request->userid;
$productid=$request->productid;
// Getting product detail 
$product=Product::where(['id'=>$productid])->first();
$quantity=1;
$price=$product->sale_price;

// To find if their is already a product in a cart
$productfoundincart=Cart::where(['product_id'=>$productid])->pluck('id');
if($productfoundincart->isEmpty())
{
// If their is not product then simply add this product
$cart=Cart::create
([
'user_id'=>$userid,
'product_id'=>$productid,
'quantity'=>1,
'price'=>$product->sale_price,
'total'=>$quantity*$price,
]);
}
else
{
// If this product is already in a cart then simply increase its quantity
$cart=Cart::where(['product_id'=>$productid])->increment('quantity');
// Find out new quantity of this cart
$newquantity=Cart::where(['product_id'=>$productid])->pluck('quantity')->first();
// Find out id of cart
$id=Cart::where(['product_id'=>$productid])->pluck('id')->first();
// Update total amount of cart
$obj=Cart::find($id);
$obj->total=($newquantity*$price);
$obj->save();
}
}

}
