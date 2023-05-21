<?php

namespace App\Http\Controllers;

use App\Models\Supplier as ModelsSupplier;
use Database\Seeders\SupplierSeeder;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;
use Illuminate\Validation\Rule;


class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index (){

       // $suppliers = ModelsSupplier::all();
        return view('suppliers.index',['suppliers'=>ModelsSupplier::paginate(15)]);
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
        $request->validate([
            'name'=>'required|unique:suppliers'
        ]);

        $supplier = new ModelsSupplier();
        $supplier->name = $request->name;
        $supplier->address = $request->address;
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
        $request->validate([
            'name'=>'required|unique:suppliers,name,'.$id
        ]);

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
