<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Doctor;
use App\Traits\GeneralTrait;
use Validator;

class DoctorController extends Controller
{

    use GeneralTrait;


    public function index()
    {
        $doctors =Doctor::get();

        return $this->returnData('doctor',$doctors,"The data was obtained successfully");
    }

 

    public function create()
    {
        //
    }

 
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
          'name' => 'required',
          'email' => 'required'
        ]);

        if($validator->fails())
        {
          return $this->returnError('001',"please ,  that field is required .");
        }
        else
        {
          // Create item
          $cat = new Doctor;
          $cat->name = $request->name;
          $cat->email = $request->email;


          $cat->save();

          return $this->returnData('category',$cat,"category is created successfully.");
        }
    }


    public function get_id_doctor($id){

        $id_doctor = Doctor::find($id);

        if(!$id_doctor){
            return $this->returnError('001','not fount , please choose other.');
        }

        return $this->returnData('id_doctor',$id_doctor,"the data was gotten successfully .");

    }

    
    public function show($id)
    {
        

        $id_doctor = Doctor::find($id);

        if(!$id_doctor){
            return $this->returnError('001','not fount , please choose other.');
        }

        return $this->returnData('id_doctor',$id_doctor,"the data was gotten successfully .");
    }

    public function edit($id)
    {
        //
    }

 
    public function update(Request $request,$id)
    {
      $validator = Validator::make($request->all(),[
        'name' => 'required',
        'email' => 'required',
      ]);

      if($validator->fails()){
        return $this->returnError('001','error');
      }
       else 
      {
        // Find 
       
         $id_doctor =  Doctor::find($id);
          $id_doctor->name = $request->input('name');
          $id_doctor->email = $request->input('email');

          $id_doctor->save();

        return $this->returnData('id_octor',$id_doctor,"data doctor is updated successfully.");
      }
    }

    // delete
    public function destroy($id)
    {
        $id_doctor = Doctor::find($id);
        
        if(!$id_doctor)
        {
            return $this->returnError('0001', 'this item was deleted already !');
        }

        $id_doctor->delete();

        return $this->returnSuccessMessage('this Doctor is Deleted successfully. ','S000');
    }
}
