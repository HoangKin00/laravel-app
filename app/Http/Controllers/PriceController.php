<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Price;

class PriceController extends Controller
{
    public function index($id = null)
    {
        if ($id == null) {
            return Price::all();
        }else {
            return Price::find($id);
        }
    }
    public function create( Request $request)
    {
        try {
            $price = new Price();
            $price->name = $request->input('name');
            $price->preferential = $request->input('preferential');
            $price->price = $request->input('price');
            $price->promotional = $request->input('promotional');
            $price->service_id = $request->input('service_id');

            $price->save();
            return $price;
        } catch (Throwable $err) {
            return $err->getMessage();
        }
    }
    public function update($id, Request $request)
    {
        try {
            $price = Price::find($id);
            if (!$price) {
                return 'data not';
            } 
            $price->name = $request->input('name');
            $price->preferential = $request->input('preferential');
            $price->price = $request->input('price');
            $price->promotional = $request->input('promotional');
            $price->service_id = $request->input('service_id');

            $price->save();
            return $price;
        } catch (Throwable $err) {
            return $err->getMessage();
        }
    }
    public function delete($id)
    {
        try {
            $price = Price::find($id);
            if ($price) {
                $price->delete();
                return $price;
            }else {
                return 'data not';
            }
        } catch (Throwable $err) {
            return $err->getMessage();
        }
    }
}
