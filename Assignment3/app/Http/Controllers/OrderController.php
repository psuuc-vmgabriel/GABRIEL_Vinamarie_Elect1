<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function customerDetails($id, $name, $address)
    {
    return view('customer', compact('id', 'name', 'address'));
    }

    public function item($itemNo, $name, $price)
    {
        return view('item', compact('itemNo', 'name', 'price'));
    }

    public function order($customerId, $name, $orderNo, $date)
    {
        return view('order', compact('customerId', 'name', 'orderNo', 'date'));
    }

    public function orderDetails($transNo, $orderNo, $itemID, $itemName, $price, $qty)
    {
    return view('orderdetails', compact('transNo', 'orderNo', 'itemID', 'itemName', 'price', 'qty'));
    }

}
