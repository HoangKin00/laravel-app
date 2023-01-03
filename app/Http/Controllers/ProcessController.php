<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Process;

class ProcessController extends Controller
{
    public function index($id = null)
    {
        if ($id == null) {
            return Process::all();
        }else {
            return Process::find($id);
        }
    }
    public function create( Request $request)
    {
        try {
            $process = new Process();
            $process->process = $request->input('process');
            $process->image = $request->input('image');
            $process->service_id = $request->input('service_id');

            $process->save();
            return $process;
        } catch (Throwable $err) {
            return $err->getMessage();
        }
    }
    public function update($id, Request $request)
    {
        try {
            $process = Process::find($id);
            if (!$process) {
                return 'data not';
            } 
            $process->process = $request->input('process');
            $process->image = $request->input('image');
            $process->service_id = $request->input('service_id');

            $process->save();
            return $process;
        } catch (Throwable $err) {
            return $err->getMessage();
        }
    }
    public function delete($id)
    {
        try {
            $process = Process::find($id);
            if ($process) {
                $process->delete();
                return $process;
            }else {
                return 'data not';
            }
        } catch (Throwable $err) {
            return $err->getMessage();
        }
    }
}
