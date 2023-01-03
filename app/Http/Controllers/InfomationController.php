<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Infomation;

class InfomationController extends Controller
{
    public function index($id = null)
    {
        if ($id == null) {
            return Infomation::all();
        }else {
            return Infomation::find($id);
        }
    }
    public function create( Request $request)
    {
        try {
            $infomation = new Infomation();
            $infomation->image = $request->input('image');
            $infomation->service_id = $request->input('service_id');

            $infomation->save();
            return $infomation;
        } catch (Throwable $err) {
            return $err->getMessage();
        }
    }
    public function update($id, Request $request)
    {
        try {
            $infomation = Infomation::find($id);
            if (!$infomation) {
                return 'data not';
            } 
            $infomation->image = $request->input('image');
            $infomation->service_id = $request->input('service_id');

            $infomation->save();
            return $infomation;
        } catch (Throwable $err) {
            return $err->getMessage();
        }
    }
    public function delete($id)
    {
        try {
            $infomation = Infomation::find($id);
            if ($infomation) {
                $infomation->delete();
                return $infomation;
            }else {
                return 'data not';
            }
        } catch (Throwable $err) {
            return $err->getMessage();
        }
    }
}
