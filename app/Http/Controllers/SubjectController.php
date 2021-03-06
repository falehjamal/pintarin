<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subjects;
class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $url = "subjects";
    public function index()
    {
        //
        $title = "Mata Pelajaran";
        $datas = Subjects::all();
        $no = 1;
        $url = $this->url;
        return view($this->url.'/index',compact('title','datas','no','url'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $url = $this->url;
        $title = "Tambah Mata Pelajaran";
         return view($this->url.'/create',compact('title','url'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    	$requests = $request->except(['_token','_method']);
    	$class = new Subjects;
    	$class->name = $request->name;
    	$save = $class->save();
    	if ($save == true) {
    		$request->session()->flash('success', 'success');
    		return redirect('admin/'.$this->url);
    	}
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

        $title = "Edit Mata Pelajaran";
        $url = $this->url;

        $data = Subjects::find($id);
        return view('subjects/edit',compact('title','url','id','data'));
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
         $class = Subjects::find($id);
    	$class->name = $request->name;

    	$class->save();
    	$request->session()->flash('success', 'Berhasil Mengubah Data');
        return redirect('admin/'.$this->url);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,Request $request)
    {
        //
        $class = Subjects::find($id);
        $delete = $class->delete();
        // if ($delete == true) {
        	    $request->session()->flash('success', 'Berhasil Menghapus Data');
        	        		return redirect('admin/'.$this->url);
        // }

    }
}
