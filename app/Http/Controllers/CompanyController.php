<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Company;

class CompanyController extends Controller
{
    // Listing Company Details

    public function index()
    {
        $company_details= Company::all();
        $data = DB::table('company')->orderBy('id','asc')->pagination(5);
        return view ('company.index',compact('data',$data))->with('company_details',$company_details);
    }

    // Create Company Details


    public function create()
    {
        return view('company.create');
    }

    public function store(Request $request)
    {


        $validation = $request->validate([
            'company_name'=>['required','unique:company_details,company_name'],
            'email'=>['required','email','unique:company_details,email'],
            "company_logo"  => ['dimensions:min_width=100,min_height=100'],
            'website_url'=>['required','url','unique:company_details,website_url'],
  
            ]);

        $input = $request->all();
        $fileName = time().$request->file('company_logo')->getClientOriginalName();
        $path=$request->file('company_logo')->storeAs('images',$fileName,'public');
        $input["company_logo"] ='/storage/'.$path;

        Company::create([
            'company_name'=>$input['company_name'],
            'email'=>$input['email'],
            'company_logo'=>$input['company_logo'],
            'website_url'=>$input['website_url'],
            "created_at" =>  \Carbon\Carbon::now() # new \Datetime()
            
      
        ]);

        return redirect('company')->with('message','New Company Successful Added');
    }

  public function view($id)
  {
    $company = Company::find($id);
    return view('company.view')->with('company',$company);

  }

  public function edit($id)
  {
    $company = Company::find($id);
    return view('company.edit')->with('company',$company);

  }

  public function update(Request $request,$id)
  {
    $company = Company::find($id);
    $input = $request->all();
    $fileName = time().$request->file('company_logo')->getClientOriginalName();
    $path=$request->file('company_logo')->storeAs('images',$fileName,'public');
    $input["company_logo"] ='/storage/'.$path;
    $company->update($input);
    return redirect('company')->with('flash_message','Company Successful Update!!');

  }

  public function delete($id)
  {
    $company = Company::find($id);
    $company->delete();
    return redirect('company')
      ->with('success', 'deleted successfully');

  }

}
