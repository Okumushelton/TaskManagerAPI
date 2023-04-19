<?php
namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;
use App\Models\tasks;
use Illuminate\Http\Request;
use Validator;
class ProductController extends Controller
{
/**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
public function index()
{
$tasks = Tasks::all();
return response()->json([
"success" => true,
"message" => "Product List",
"data" => $tasks
]);
}
/**
* Store a newly created resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @return \Illuminate\Http\Response
*/
public function store(Request $request)
{
$input = $request->all();
$validator = Validator::make($input, [
'name' => 'required',
'description' => 'required'
]);
if($validator->fails()){
return $this->sendError('Validation Error.', $validator->errors());       
}
$tasks = Tasks::create($input);
return response()->json([
"success" => true,
"message" => "Product created successfully.",
"data" => $task
]);
} 
/**
* Display the specified resource.
*
* @param  int  $id
* @return \Illuminate\Http\Response
*/
public function show($id)
{
$task = Tasks::find($id);
if (is_null($product)) {
return $this->sendError('Task Not Available.');
}
return response()->json([
"success" => true,
"message" => "Task retrieved successfully.",
"data" => $tasks
]);
}
/**
* Update the specified resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @param  int  $id
* @return \Illuminate\Http\Response
*/
public function update(Request $request, Product $product)
{
$input = $request->all();
$validator = Validator::make($input, [
'name' => 'required',
'description' => 'required'
]);
if($validator->fails()){
return $this->sendError('Validation Error.', $validator->errors());       
}
$tasks->name = $input['name'];
$tasks->detail = $input['description'];
$tasks->save();
return response()->json([
"success" => true,
"message" => "Product updated successfully.",
"data" => $tasks
]);
}
/**
* Remove the specified resource from storage.
*
* @param  int  $id
* @return \Illuminate\Http\Response
*/
public function destroy(Product $product)
{
$product->delete();
return response()->json([
"success" => true,
"message" => "Product deleted successfully.",
"data" => $tasks
]);
}
}