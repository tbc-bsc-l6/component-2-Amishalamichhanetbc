<?php

namespace App\Http\Controllers;
use App\Models\Cd;
use Illuminate\Http\Request;

class CdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        {
           
            $cds = cd::paginate(2);
          return view ('cds.index')->with('cds', $cds);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cds.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return view('cds.edit',compact('cd'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cd = cd::find($id);//maybe cd
        return view('cds.show')->with('cds', $cd);
    }

    public function edit($id)
    {
        $cd = cd::find($id);//cdmaybe
        return view('cds.edit')->with('cds', $cd);
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
        $cd = cd::find($id);
        $input = $request->all();
        $cd->update($input);
        return redirect('cd')->with('flash_message', 'Updated!');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        cd::destroy($id);//cd maybe
        return redirect('cd')->with('flash_message', 'deleted!');  
    }

}
