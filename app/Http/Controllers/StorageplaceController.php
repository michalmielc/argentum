<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\Storageplace as ModelsStorageplace;

class StorageplaceController extends Controller
{
        // TEST RULE FUNCTION

        protected function StorageplaceRule($id=null) {

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

            return view('storageplaces.index',['storageplaces'=>ModelsStorageplace::paginate(10)]);
        }

        /**
         * Display a query's result .
         */
        public function search (Request $request){

        $searchQuery = $request->input('searchField');

         $storageplaces = ModelsStorageplace::where('name', 'LIKE', "%{$searchQuery}%")
                    ->paginate(10);

            return view('storageplaces.index',['storageplaces'=>$storageplaces]);
        }

          /**
         * Show the form for creating a new resource.
         */
        public function create()
        {
           return view('storageplaces.create');
        }

        /**
         * Store a newly created resource in storage.
         */
        public function store(Request $request)
        {
            // $request->validate([
            //     'name'=>'required|unique:suppliers'
            // ]);

            $request->validate($this->StorageplaceRule());

            $storageplace = new ModelsStorageplace();
            $storageplace->name = $request->name;
            $storageplace->address = $request->address;
            $storageplace->postalcode = $request->postalcode;
            $storageplace->city= $request->city;
            $storageplace->region = $request->region;
            $storageplace->country = $request->country;
            $storageplace->email = $request->email;
            $storageplace->save();

            return redirect('storageplaces');
        }

        /**
         * Display the specified resource.
         */
        public function show(string $id)
        {
            $storageplace=ModelsStorageplace::all();
            $storageplace = $storageplace->find($id);
            return view ('storageplaces.show',['storageplace'=>$storageplace]);
        }

        /**
         * Show the form for editing the specified resource.
         */
        public function edit(string $id)
        {
            $storageplaces=ModelsStorageplace::all();
            $storageplace = $storageplaces->find($id);
            return view ('storageplaces.edit',['storageplace'=>$storageplace]);
        }

        /**
         * Update the specified resource in storage.
         */
        public function update(Request $request, string $id)
        {
            $storageplace = ModelsStorageplace::find($id);


            $request->validate($this->StorageplaceRule($id));

            $data = $request->all();
            $storageplace->fill($data);
            $storageplace->update();

            return redirect('storageplaces');
        }

        public function delete(string $id)
        {
            $storageplaces=ModelsStorageplace::all();
            $storageplace = $storageplaces->find($id);
            return view ('storageplaces.delete',['storageplace'=>$storageplace]);
        }

        /**
         * Remove the specified resource from storage.
         */
        public function destroy(string $id)
        {
            $storageplaces=ModelsStorageplace::all();
            $storageplace = $storageplaces->find($id);
            $storageplace->delete();
            return redirect('storageplaces');
        }
}
