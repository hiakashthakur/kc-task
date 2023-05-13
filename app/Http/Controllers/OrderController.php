<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\Order;

class OrderController extends Controller
{
    public function dashboard(){
        $get_order=Order::orderBy('id','desc')->get();
        $shipped_order=Order::where('status_type', 'shipped')->count();
        $pending_order=Order::where('status_type', 'pending')->count();
        $total_order=order::get()->count();
        return view('dashboard',['get_order'=>$get_order,'shipped_order'=>$shipped_order,'pending_order'=>$pending_order,'total_order'=>$total_order]);
    }
    public function createOrder(Request $request){
        $validator = Validator::make($request->all(), [
            'product' => 'required',
            'category' => 'required',
            'status_type' => 'required',
            'price' => 'required',
            'quantity' => 'required',
        ]);

        if($validator->fails()){
            return response()->json( $validator->errors() );
        }
        $input=$request->all();
        $user = Order::create($input);
        $html = view('ProductTable',[
            'get_order' => Order::orderBy('id','desc')->get(),
            'pending_order'=>Order::where('status_type', 'pending')->count(),
            'shipped_order'=>Order::where('status_type', 'shipped')->count(),
            'total_order'=>order::get()->count(),
            true])->render();
        return response()->json(['url'=> route('dashboard'),'msg'=> 'Order Create Successfully','html'=>$html]);
    }
    public function editOrder(Request $request, $id){
        $html = view('EditOrder',['html' => Order::where('id',$id)->first(),true])->render();
        return response()->json(['html' => $html]);
    }
    public function updateOrder(Request $request, $id){
        $validator = Validator::make($request->all(), [
            'product' => 'required',
            'category' => 'required',
            'status_type' => 'required',
            'price' => 'required',
            'quantity' => 'required',
        ]);

        if($validator->fails()){
            return response()->json( $validator->errors() );
        }
        $input = $request->except('_token');
        $user = Order::where('id',$id)->update($input);
        $html = view('ProductTable',[
            'get_order' => Order::orderBy('id','desc')->get(),
            'pending_order'=>Order::where('status_type', 'pending')->count(),
            'shipped_order'=>Order::where('status_type', 'shipped')->count(),
            'total_order'=>order::get()->count(),
            true])->render();
        return response()->json(['url'=> route('dashboard'),'msg'=> 'Order update Successfully','html'=>$html]);
    }
    public function deleteOrder($id){
        $delete_order=Order::find($id);
        if($delete_order==true){
            $delete_order->delete();
        }
        return redirect()->back()->with('msg','Delete Successfully');
    }
}
