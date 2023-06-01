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

                'barcode'=> ['required','string',"max:50", Rule::unique('storageplaces')->ignore($id)
            ],
                'stillageNo'=>'required|numeric|min:0|max:10000',
                'shelfNo'=>'required|numeric|min:0|max:10000',
                'placeNo'=>'required|numeric|min:0|max:10000',
                'maxHeight'=>'required|numeric|min:0|max:10000',
                'maxWeight'=>'required|numeric|min:0|max:100000',
                'lane'=>'required|numeric|min:0|max:10000',
                'name'=> ['required','string',"max:50", Rule::unique('storageplaces')->ignore($id)],
                'accessTime'=>'required|numeric|min:0|max:1000',
                'maxAmountOfItems'=>'required|numeric|min:0|max:1000',

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

        $searchQuery = $request->input('searchValue');


         $storageplaces = ModelsStorageplace::whereRaw ("name LIKE  '%{$searchQuery}%' OR barcode LIKE '%{$searchQuery}%'")->paginate(10);

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

            $request->validate($this->StorageplaceRule());

            $storageplace = new ModelsStorageplace();
            $storageplace->barcode = $request->barcode;
            $storageplace->stillageNo = $request->stillageNo;
            $storageplace->shelfNo = $request->shelfNo;
            $storageplace->placeNo = $request->placeNo;
            $storageplace->maxHeight= $request->maxHeight;
            $storageplace->maxWeight = $request->maxWeight;
            $storageplace->lane = $request->lane;
            $storageplace->name = $request->name;
            $storageplace->accessTime = $request->accessTime;
            $storageplace->isActive = $request->has('isActive')? 1 : 0;
            $storageplace->onlySingle = $request->has('onlySingle')? 1 : 0;
            $storageplace->maxAmountOfItems = $request->maxAmountOfItems;
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


            $data['isActive'] = $request->has('isActive')? 1 : 0;
            $data['onlySingle'] = $request->has('onlySingle')? 1 : 0;

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
