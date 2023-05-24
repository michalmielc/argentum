<?php

namespace App\Http\Controllers;

use App\Models\Supplier as ModelsSupplier;
use Database\Seeders\SupplierSeeder;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;
use Illuminate\Validation\Rule;


class SupplierController extends Controller
{
    // TEST RULE FUNCTION

    protected function SupplierRule($id=null) {

        return [
            'name'=> ['required', Rule::unique('suppliers')->ignore($id)
        ],
            'address'=>  'required|string|max:100',
            'postalcode'=>  'required|string|max:15',
            'city'=>  'required|string|max:50',
            'region'=>  'string|max:50',
            'country'=>  'required|string|max:40',
            'email'=>  'required|email'
        ];
    }



    /**
     * Display a listing of the resource.
     */
    public function index (){

        return view('suppliers.index',['suppliers'=>ModelsSupplier::paginate(10)]);
    }

    /**
     * Display a query's result .
     */
    public function search (Request $request){

    $searchQuery = $request->input('searchField');
    //dd( $searchQuery);
     $suppliers = ModelsSupplier::where('name', 'LIKE', "%{$searchQuery}%")
                ->paginate(10);
        // return view('suppliers.index',['suppliers'=>ModelsSupplier::paginate(15)]);
        return view('suppliers.index',['suppliers'=>$suppliers]);
    }

      /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('suppliers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'name'=>'required|unique:suppliers'
        // ]);

        $request->validate($this->SupplierRule());

        $supplier = new ModelsSupplier();
        $supplier->name = $request->name;
        $supplier->address = $request->address;
        $supplier->postalcode = $request->postalcode;
        $supplier->city= $request->city;
        $supplier->region = $request->region;
        $supplier->country = $request->country;
        $supplier->email = $request->email;
        $supplier->save();

        return redirect('suppliers');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $suppliers=ModelsSupplier::all();
        $supplier = $suppliers->find($id);
        return view ('suppliers.show',['supplier'=>$supplier]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $suppliers=ModelsSupplier::all();
        $supplier = $suppliers->find($id);
        return view ('suppliers.edit',['supplier'=>$supplier]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $supplier = ModelsSupplier::find($id);
        // $request->validate([
        //     'name'=>'required|unique:suppliers,name,'.$id
        // ]);

        $request->validate($this->SupplierRule($id));

        $data = $request->all();
        $supplier->fill($data);
        $supplier->update();

        return redirect('suppliers');
    }

    public function delete(string $id)
    {
        $suppliers=ModelsSupplier::all();
        $supplier = $suppliers->find($id);
        return view ('suppliers.delete',['supplier'=>$supplier]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $suppliers=ModelsSupplier::all();
        $supplier = $suppliers->find($id);
        $supplier->delete();
        return redirect('suppliers');
    }
}
