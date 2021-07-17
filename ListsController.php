<?php

namespace App\Http\Controllers;
use App\Http\Controllers\ListsController;
use App\Models\Lists;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use SimpleSoftwareIO\QrCode\Facades\QrCode;


class ListsController extends Controller
{
    /** streetfood = Attendance
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $first = Lists::latest()->paginate(5);

         return view('first.index', compact('first'))->with(request()->input('page'));

         
        // return Lists::all();
    
    }
    public function create()
    {
        return view('first.create');
        
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'class' => 'required'
        ]);
       
        $first = new Lists;

        $first->name = $request->name;
        $first->class = $request->class;

        $first->save();

        return redirect('lists')->with('message'. 'Success!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Lists::find($id);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Lists $lists)
    {
        return view('/cr', compact('lists'));
    }


    /* 


     public function update(Request $request, $lists)
    {
        $request->validate([
            'name' => 'required',
            'streetfood' => 'required',
        ]);

        $lists->update($request->all());

       return redirect()->route('lists.index')->with('success','List updated successfully');

    } 
    */
   

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /*

    
    Delete function
    */
    public function destroy($id)
    {
       
        $id = Lists::findOrFail($id);
        $id->delete();
        return redirect()->route('lists.index');
        
       
    }


   
}
