<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    public function index($id = null)
    {
        if($id==null){
            return Service::all();
        }else {
            return Service::find($id);
        }
    }
    public function create( Request $request)
    {
        try {
            $service = new Service();
            $service->name = $request->input('name');

            $service->save();
            return $service;
        } catch (Throwable $err) {
            return $err->getMessage();
        }
    }
    public function update($id, Request $request)
    {
        try {
            $service = Service::find($id);
            if (!$service) {
                return 'data not';
            } 
            $service->name = $request->input('name');

            $service->save();
            return $service;
        } catch (Throwable $err) {
            return $err->getMessage();
        }
    }
    public function delete($id)
    {
        try {
            $service = Service::find($id);
            if ($service) {
                $service->delete();
                return $service;
            }else {
                return 'data not';
            }
        } catch (Throwable $err) {
            return $err->getMessage();
        }
    }
}
