<?php

namespace App\Http\Controllers;

use App\Models\Costcenter as ModelsCostcenter;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CostcenterController extends Controller
{
   // TEST RULE FUNCTION

   protected function CostcenterRule($id=null) {

    return [
        'name'=> ['required','string','max:35', Rule::unique('suppliers')->ignore($id)
    ],
        'code'=>  'nullable|string|max:35'
    ];
}

    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        return view('costcenters.index',['costcenters'=>ModelsCostcenter::paginate(10)]);
    }


    /**
     * Display a query's result .
     */
    public function search (Request $request){

        $searchQuery = $request->input('searchValue');
        //dd( $searchQuery);
         $costcenters = ModelsCostcenter::where('name', 'LIKE', "%{$searchQuery}%")
                    ->paginate(10);
            return view('costcenters.index',['costcenters'=>$costcenters]);
        }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('costcenters.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate($this->CostcenterRule());

        $costcenter = new ModelsCostcenter();
        $costcenter->name = $request->name;
        $costcenter->code = $request->code;

        $costcenter->save();

        return redirect('costcenters');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $costcenters=ModelsCostcenter::all();
        $costcenter = $costcenters->find($id);
        return view ('costcenters.show',['costcenter'=>$costcenter]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $costcenters=ModelsCostcenter::all();
        $costcenter = $costcenters->find($id);
        return view ('costcenters.edit',['costcenter'=>$costcenter]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $costcenter = ModelsCostcenter::find($id);

        $request->validate($this->CostcenterRule($id));

        $data = $request->all();

        $costcenter->fill($data);
        $costcenter->update();

        return redirect('costcenters');
    }

    public function delete(string $id)
    {
        $costcenters=ModelsCostcenter::all();
        $costcenter = $costcenters->find($id);
        return view ('costcenters.delete',['costcenter'=>$costcenter]);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $costcenters=ModelsCostcenter::all();
        $costcenter = $costcenters->find($id);
        $costcenter->delete();
        return redirect('costcenters');
    }
}
