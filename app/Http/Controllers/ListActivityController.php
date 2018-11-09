<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\ListActivity;

class ListActivityController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $activity = ListActivity::where('user_id', Auth::id())->get();
        return view('list-activity.index', compact('activity'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('list-activity.create');
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
            'user_id' => Auth::id(),
            'jenis_kegiatan' => $request->jenis_kegiatan,
            'tanggal_kegiatan' => $request->tanggal_kegiatan,
            'deskripsi_kegiatan' => $request->deskripsi_kegiatan,
            'keterangan' => 'To Do',
        ]);
        $activity->save();

        return redirect()->route('index');
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
        return view('list-activity.edit', compact('activity'));
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

        return redirect()->route('index');
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
        return redirect()->route('index');
    }
}
