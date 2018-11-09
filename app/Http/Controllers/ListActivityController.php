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
        $activity = new ListActivity([
            'id' => $request->id,
            'user_id' => $request->user()->id,
            'jenis_kegiatan' => $request->jenis_kegiatan,
            'tanggal_kegiatan' => $request->tanggal_kegiatan,
            'deskripsi_kegiatan' => $request->deskripsi_kegiatan,
            'keterangan' => 'To Do',
        ]);
        $activity->save();

        return view('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $activity = ListActivity::where('user_id',$request->user()->id)->get();
        return view('ListActivity')->with('listActivity', $activity);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $activity = ListActivity::find($id);
        return view('ListActivity.edit', compact($activity));
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
        $activity = ListActivity::find($id);
        $activity->jenis_kegiatan = $request->jenis_kegiatan;
        $activity->tanggal_kegiatan = $request->tanggal_kegiatan;
        $activity->deskripsi_kegiatan = $request->deskripsi_kegiatan;
        $activity->keterangan = $request->keterangan;
        $activity->save();

        return redirect('/ListActivity');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $list = ListActivity::find($id)->delete();
        return redirect('/ListActivity');
    }
}
