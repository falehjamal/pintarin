<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modules;
use App\Subjects;
class ModuleController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $url = "modules";
    public function index()
    {
        //
        $title = "Modul";
        $datas = Modules::all();
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
        $title = "Tambah Modul";

        $subjects = Subjects::all();
         return view($this->url.'/create',compact('title','url','subjects'));
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
        $class = new Modules;
        $class->name = $request->name;
        $class->time = $request->time;
        $class->description = $request->description;
        $class->id_subjects = $request->subjects;
        $save = $class->save();

        if ($save == true) {
            $request->session()->flash('success', 'success');
            return redirect('admin/'.$this->url);
        }


// name content subjects time desription
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

        $title = "Edit Modul";
        $url = $this->url;

        $data = Material::find($id);

        $subjects = Subjects::all();
        return view('modules/edit',compact('title','url','id','data','subjects'));
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
        $class = Material::find($id);
        $class->name = $request->name;
        $class->content = $request->content;
        $class->id_subject = $request->subjects;

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
        $class = Material::find($id);
        $delete = $class->delete();
        // if ($delete == true) {
                $request->session()->flash('success', 'Berhasil Menghapus Data');
                            return redirect('admin/'.$this->url);
        // }

    }
}
