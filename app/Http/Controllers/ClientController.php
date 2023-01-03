<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    public function index($id = null)
    {
        if ($id == null) {
            return Client::all();
        }else {
            return Client::find($id);
        }
    }
    public function create( Request $request)
    {
        try {
            $client = new Client();
            $client->image = $request->input('image');
            $client->service_id = $request->input('service_id');

            $client->save();
            return $client;
        } catch (Throwable $err) {
            return $err->getMessage();
        }
    }
    public function update($id, Request $request)
    {
        try {
            $client = Client::find($id);
            if (!$client) {
                return 'data not';
            } 
            $client->image = $request->input('image');
            $client->service_id = $request->input('service_id');

            $client->save();
            return $client;
        } catch (Throwable $err) {
            return $err->getMessage();
        }
    }
    public function delete($id)
    {
        try {
            $client = Client::find($id);
            if ($client) {
                $client->delete();
                return $client;
            }else {
                return 'data not';
            }
        } catch (Throwable $err) {
            return $err->getMessage();
        }
    }
}
