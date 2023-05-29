<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item as ModelsItem;
use Illuminate\Validation\Rule;

class ItemController extends Controller
{
        // TEST RULE FUNCTION

        protected function ItemRule($id=null) {

            return [
                'name1'=> ['required|string|max:100', Rule::unique('items')->ignore($id)
            ],
                'name2'=>  'string|max:100',
                'name3'=>  'string|max:100',
                'barcode'=>  'required|string|max:50',
                // 'boxAmount'=> '',
                'minInv'=>  'numeric|min:0',
                // 'sizes'=>  '',
                'weight'=>  'numeric|min:0',
                'picture'=>  'string|max:100',
                'isActive'=> 'required|boolean',
                // 'expiryDate'=> '',
                'isBlocked'=> 'required|boolean'

            ];
        }


        /**
         * Display a listing of the resource.
         */
        public function index (){

            return view('items.index',['items'=>ModelsItem ::paginate(10)]);
        }

        /**
         * Display a query's result .
         */
        public function search (Request $request){

        $searchQuery = $request->input('searchField');

        // DO POPRAWY WYSZUKIWANIE
         $items = ModelsItem::where('name', 'LIKE', "%{$searchQuery}%")
                    ->paginate(10);

            return view('items.index',['items'=>$items]);
        }

          /**
         * Show the form for creating a new resource.
         */
        public function create()
        {
           return view('items.create');
        }

        /**
         * Store a newly created resource in storage.
         */
        public function store(Request $request)
        {

            $request->validate($this->ItemRule());

            //DO POPRAWY STORE
            $item = new ModelsItem();
            $item->name = $request->name;
            $item->address = $request->address;
            $item->postalcode = $request->postalcode;
            $item->city= $request->city;
            $item->region = $request->region;
            $item->country = $request->country;
            $item->email = $request->email;
            $item->save();

            return redirect('items');
        }

        /**
         * Display the specified resource.
         */
        public function show(string $id)
        {
            $items=ModelsItem::all();
            $item = $items->find($id);
            return view ('items.show',['item'=>$item]);
        }

        /**
         * Show the form for editing the specified resource.
         */
        public function edit(string $id)
        {
            $items=ModelsItem::all();
            $item = $items->find($id);
            return view ('items.edit',['item'=>$item]);
        }

        /**
         * Update the specified resource in storage.
         */
        public function update(Request $request, string $id)
        {
            $item = ModelsItem::find($id);

            $request->validate($this->ItemRule($id));

            $data = $request->all();
            $item->fill($data);
            $item->update();

            return redirect('items');
        }

        public function delete(string $id)
        {
            $items=ModelsItem::all();
            $item = $items->find($id);
            return view ('items.delete',['item'=>$item]);
        }

        /**
         * Remove the specified resource from storage.
         */
        public function destroy(string $id)
        {
            $items=ModelsItem::all();
            $item = $items->find($id);
            $item->delete();
            return redirect('items');
        }
}
