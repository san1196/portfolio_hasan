<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mahasiswa;

class MahasiswaController extends Controller
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
		
		$data['mahasiswa'] = Mahasiswa::get();
        return view('menu.mahasiswa.v_mahasiswa',$data);
    }

    public function tambah()
    {
    	return view('menu.mahasiswa.v_mahasiswa_tambah');
    }

    public function store(Request $request)
    {
    	$this->validate($request,[
    		'nama' => 'required',
    		'telepon' => 'required',
    		'alamat' => 'required',
    		'email' => 'required',
    		'sekolah' => 'required',
    	],
		[
			'nama.required' => 'Field Name harus diisi',
			'telepon.required' => 'Field Telephone harus diisi',
			'alamat.required' => 'Field Address harus diisi',
			'email.required' => 'Field Email harus diisi',
			'sekolah.required' => 'Field Sekolah harus diisi',
		]);
 
        Mahasiswa::create([
    		'nama' => $request->nama,
    		'telepon' => $request->telepon,
    		'alamat' => $request->alamat,
    		'email' => $request->email,
    		'sekolah' => $request->sekolah,
    	]);
 
    	return redirect('/mahasiswa');
    }

    public function edit($id)
	{
	   $data['mahasiswa'] = Mahasiswa::find($id);
	   return view('menu.mahasiswa.v_mahasiswa_edit',$data);
	}

    public function update($id, Request $request)
	{
		$this->validate($request,[
    		'nama' => 'required',
    		'telepon' => 'required',
    		'alamat' => 'required',
    		'email' => 'required',
    		'sekolah' => 'required',
    	],
		[
			'nama.required' => 'Field Name harus diisi',
			'telepon.required' => 'Field Telephone harus diisi',
			'alamat.required' => 'Field Address harus diisi',
			'email.required' => 'Field Email harus diisi',
			'sekolah.required' => 'Field Sekolah harus diisi',
		]);
	 
		$ab = Mahasiswa::find($id);
		$ab->nama = $request->nama;
		$ab->telepon = $request->telepon;
		$ab->alamat = $request->alamat;
		$ab->email = $request->email;
		$ab->sekolah = $request->sekolah;
		$ab->save();
		return redirect('/mahasiswa');
	}

    public function hapus($id)
    {
        Mahasiswa::where('id',$id)->delete();
        return redirect('/mahasiswa')->with('status', 'Berhasil hapus data');
    }

}
?>