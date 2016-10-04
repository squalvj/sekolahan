<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\siswa;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class Crud extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('siswa.register');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (count($request->interest) > 0){
            $interest = implode(',', $request->interest);
            $siswa = new Siswa;
            $siswa->nama = $request->nama;
            $siswa->alamat = $request->alamat;
            $siswa->handphone = $request->handphone;
            $siswa->gender = $request->gender;
            $siswa->interest = $interest;
            $siswa->save();
        }else{
            return Redirect::back()->withErrors(['Minimal Harus Mengisi 1 interest']);
        }
        // $nama = Input::get('nama');
        // $gender = Input::get('gender');  < metode satu            
        // $alamat = Input::get('alamat');
        // $handphone = Input::get('handphone');
        


        $this->validate($request, [
            'nama' => 'required',
            'alamat' => 'required',
            'handphone' => 'required'
        ]);
        

        // create new task
        // DB::table('siswa')->insert(
        //     ['nama' => $nama, 'gender' => $gender] < metode 1
        // );
        return redirect('/');
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
