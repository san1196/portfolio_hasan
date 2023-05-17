<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\About;

class AboutController extends Controller
{
        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
		$filter = $request->filter;
		
		$data['cek'] = About::count();
		$data['about'] = About::get();
        return view('menu.about.v_about',$data);
    }
		
	public function tambah()
    {
    	return view('menu.about.v_about_tambah');
    }
	
	public function store(Request $request)
    {
    	$this->validate($request,[
    		'name' => 'required',
    		'telephone' => 'required',
    		'address' => 'required',
    		'email' => 'required',
    		'sosmed' => 'required',
    	],
		[
			'name.required' => 'Field Name harus diisi',
			'telephone.required' => 'Field Telephone harus diisi',
			'address.required' => 'Field Address harus diisi',
			'email.required' => 'Field Email harus diisi',
			'sosmed.required' => 'Field Sosmed harus diisi',
		]);
 
        About::create([
    		'name' => $request->name,
    		'telephone' => $request->telephone,
    		'address' => $request->address,
    		'email' => $request->email,
    		'sosmed' => $request->sosmed,
    	]);
 
    	return redirect('/about');
    }
	
	public function edit($id)
	{
	   $data['about'] = About::find($id);
	   return view('menu.about.v_about_edit',$data);
	}
	
	public function update($id, Request $request)
	{
		$this->validate($request,[
    		'name' => 'required',
    		'telephone' => 'required',
    		'address' => 'required',
    		'email' => 'required',
    		'sosmed' => 'required',
    	],
		[
			'name.required' => 'Field Name harus diisi',
			'telephone.required' => 'Field Telephone harus diisi',
			'address.required' => 'Field Address harus diisi',
			'email.required' => 'Field Email harus diisi',
			'sosmed.required' => 'Field Sosmed harus diisi',
		]);
	 
		$ab = About::find($id);
		$ab->name = $request->name;
		$ab->telephone = $request->telephone;
		$ab->address = $request->address;
		$ab->email = $request->email;
		$ab->sosmed = $request->sosmed;
		$ab->save();
		return redirect('/about');
	}
	
}