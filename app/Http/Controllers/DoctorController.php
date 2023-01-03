<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;

class DoctorController extends Controller
{
    public function index($id = null)
    {
        if ($id == null) {
            return Doctor::all();
        }else {
            return Doctor::find($id);
        }
    }
    public function create( Request $request)
    {
        try {
            $doctor = new Doctor();
            $doctor->name = $request->input('name');
            $doctor->level = $request->input('level');
            $doctor->img = $request->input('img');
            $doctor->job = $request->input('job');
            $doctor->exp = $request->input('exp');
            $doctor->address = $request->input('address');
            $doctor->doctorLevel = $request->input('doctorLevel');
            $doctor->experience = $request->input('experience');
            $doctor->origin = $request->input('origin');
            $doctor->prize = $request->input('prize');
            $doctor->service_id = $request->input('service_id');

            $doctor->save();
            return $doctor;
        } catch (Throwable $err) {
            return $err->getMessage();
        }
    }
    public function update($id, Request $request)
    {
        try {
            $doctor = Doctor::find($id);
            if (!$doctor) {
                return 'data not';
            } 
            $doctor->name = $request->input('name');
            $doctor->level = $request->input('level');
            $doctor->img = $request->input('img');
            $doctor->job = $request->input('job');
            $doctor->exp = $request->input('exp');
            $doctor->address = $request->input('address');
            $doctor->doctorLevel = $request->input('doctorLevel');
            $doctor->experience = $request->input('experience');
            $doctor->origin = $request->input('origin');
            $doctor->prize = $request->input('prize');
            $doctor->service_id = $request->input('service_id');

            $doctor->save();
            return $doctor;
        } catch (Throwable $err) {
            return $err->getMessage();
        }
    }
    public function delete($id)
    {
        try {
            $doctor = Doctor::find($id);
            if ($doctor) {
                $doctor->delete();
                return $doctor;
            }else {
                return 'data not';
            }
        } catch (Throwable $err) {
            return $err->getMessage();
        }
    }
}
