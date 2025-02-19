<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function Termwind\render;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   public function index()
    {
        return view('catagory.catgory');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('catagory.createcatgory');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)

    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $catagory = new Category();
        $catagory-> name = $request->name;
        $catagory->save();

        return redirect()->route('catagory.index');

        
    }

    /**
     * Display the specified resource.
     */
  public function show(string $id){
   if($catagory = Category::find($id)){
       return view('catagory.showcatgory', compact('catagory'));
   }
   else{

       return redirect()->route('catagory.index');
   

  }
        
}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        if($catagory = Category::find($id)){
            return view('catagory.editcatgory', compact('catagory'));
        }
        else{
            return redirect()->route('catagory.index');
        }
    
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        if($catagory = Category::find($id)){
            $catagory->name = $request->name;
            $catagory->save();
        }

        return redirect()->route('catagory.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    { if ($catagory=Category::find($id))  {
        $catagory->delete();
    }  }
}
