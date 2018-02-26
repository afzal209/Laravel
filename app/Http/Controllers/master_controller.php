<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\class_model;
use App\student_model;
use App\admission_model;

use App\security_model;

use App\addmision;
use Illuminate\Support\Facades\DB;

class master_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sho=class_model::all();
        return view('layouts.classstudent')->with('sho', $sho);
    }
// public function indexx()
//     {
//         $sho=class_model::all();
//         return view('layouts.security_fee')->with('sho', $sho);
//     }


public function insertt(Request $req)
    {
        $data=new security_model();
        $data->class_name=$req->sel_cla;
        $data->security_amount=$req->sec;
        
        $data->save();

        return redirect('security');

    }

    public function sh()
    {
        $cl=class_model::all();
        $sc=security_model::all();
        return view('layouts.security_fee')->with('cl', $cl)->with('sc',$sc);
    



    }

    
    // public function coount()
    // {
    //   $cou=DB::table('student_models')->select(['st_first_name'])->count();
    //   return view('layouts.forhome')->with('cou', $cou);    




    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function upd_fee(Request $req)
    {
       $update_fee=admission_model::find($req->id);
       $update_fee->Admission_fee=$req->adm_fee;
      $update_fee->update();  
     return redirect('ad');
        
    }
    public function ed_fee(Request $id)
    {
        $e_fee=admission_model::find($id->id);
        return view('layouts.updateadmission')->with('e_fee', $e_fee);


    }


    public function admi(Request $re)
    {
        $adm=new admission_model();
        $adm->class_name=$re->cla_name;
        $adm->Admission_fee=$re->ad_fee;
        $adm->save();
        return redirect('ad');


    }
    public function show_ad()
    {
        $s=admission_model::all();
        return view('layouts.admissionfee')->with('s', $s);


    }
    public function ed(Request $requ){

        $edd=student_model::find($requ->id);
        return view('layouts.update_student')->with('edd', $edd);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=new class_model();
        $data->class_name=$request->cl_name;
        $data->Monthly_fee=$request->month_fee;
        $data->save();
        return redirect('clst');
        
    }
    public function view_class(Request $id)
    {
        $shif=class_model::all();
        return view('layouts.view_form')->with('shif', $shif);



    }

public function st_up(Request $re )
{
$edita=student_model::find($re->id);
$edita->Address=$re->add;
$edita->Mobile_Number=$re->st_ptcl;
$edita->update();  
return redirect ('mon');

}
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $id)
    {
        $ed=class_model::find($id->id);
        return view('layouts.feeupd')->with('ed',$ed);
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $upda=class_model::find($request->id);
        $upda->Monthly_fee=$request->class_fee;
        $upda->update();
        return redirect('clst');
       }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function std_addd(Request $Req)
    {
        $d=new student_model();
        $d->c_id=$Req->st_id;
        $d->st_class=$Req->st_class;
        $d->std_Admission_fee=$Req->std_Admission_fee;
        $d->st_first_name=$Req->st_fname;
        $d->st_last_name=$Req->st_lname;
        $d->st_father_name=$Req->st_father;
        
        $d->gender=$Req->st_gend;
        $d->Address=$Req->add;
        $d->Mobile_Number=$Req->st_ptcl;
        $d->save();
        return redirect('mon');
        


    }
    public function show_class()
    {

         $showw=class_model::all();
        return view('layouts.addstudent')->with('showw', $showw);
    }

public function show_data()
    {

         $stu=student_model::all();
        return view('layouts.monthlyfee')->with('stu', $stu);
    }

    public function showname()
    {
        $sho=student_model::all();
        return view('layouts.fee_paid')->with('sho', $sho);

    }
    
    public function jooin(Request $id)
    {
        $show=DB::table('student_models')->select(['student_models.st_first_name', 'student_models.st_last_name', 'student_models.st_father_name', 'student_models.gender'])->where('c_id', $id->id)->get();

        return view('layouts.javaform')->with('show', $show);




    }
    public function studlogs()
    {
        $stlog=student_model::all();
        return view('layouts.studentlogs')->with('stlog', $stlog);

    }
    public function coount()
    {
        $count=DB::table('student_models')->count();
        return view('layouts.forhome')->with('count', $count);


    }

    public function print_s(){
        $print=student_model::all();
        return view('layouts.printstudent')->with('print',$print);
    }

    public function fee()
    {
        $fe=addmision::all();
         // $ad=DB::table('addmisions')->sum('addmision_fees','+','class_fee','+','security');
         
        return view('layouts.fees')->with('fe',$fe);
    }


    public function add()
    {
       

    }
    public function destroy($id)
    {
        //
    }
}
