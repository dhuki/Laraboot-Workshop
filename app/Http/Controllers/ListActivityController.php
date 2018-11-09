<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ListActivity;

class ListActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('ListActivity');
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
        $list = new ListActivity([
            'id' => $request->get('id'),
            'user_id' => $request->user()->id,
            'jenis_kegiatan' => $request->get('jenis_kegiatan'),
            'tanggal_kegiatan' => $request->get('tanggal_kegiatan'),
            'deskripsi_kegiatan' => $request->get('deskripsi_kegiatan'),
            'keterangan' => 'Not Yet',
        ]);

        $list->save();
        return view('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $req)
    {
        $list = ListActivity::where('user_id',$req->user()->id)->get();
        return view('ListActivity')->with('listActivity', $list);
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
        //$list = ListActivity::where('id',$id)->delete();
        $list = ListActivity::find($id)->delete();
        return redirect('/ListActivity');
    }
}
