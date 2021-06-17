<?php
namespace App\Lib\Crud;
use App\Http\Controllers\Crud\ContactController;
use App\Models\Contact as Model;
use Illuminate\Support\Facades\Log;

class Contact{
    public static function get($data){
        try{
            // dd($data);
            $result = Model::create($data);
            return $result;
        }catch(\Exception $e){
            Log::error($e);
        }
    }
    public static function show():array{
        try{
            $data = Model::all();
            if($data){
                return $data->toArray();
            }else{
                return [];
            }
        }catch(\Exception $e){
            Log::error($e);
        }
    }
    public static function getById($id):object{
        try{
            $data = Model::find($id);  
            // dd($data);
            if($data){
                return $data;
            }else{
                return '';
            }
        }catch(\Exception $e){
            Log::error($e);
        }
    }
    public static function update(array $data):bool{
        try{
            // dd($data);
            $employee_data = [
                'name' => $data['name'],
                'email' => $data['email'],
                'mobile' => $data['mobile'],
                'amount' => $data['amount'],
                'designation' => $data['designation']
            ];
            $id = $data['id'];
            $result = Model::where('id', $id)->update($employee_data);
            if($result){
                return true;
            }else{
                return false;
            }
        }catch(\Exception $e){
            Log::error($e);
        }
    }
    public static function delete($id):bool{
        try{
            $result = Model::find($id)->delete();
            if($result){
                return true;
            }else{
                return false;
            }
        }catch(\Exception $e){
            Log::error($e);
        }
    }
}