<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item as ModelsItem;
use Illuminate\Validation\Rule;
use Carbon\Carbon;

class ItemController extends Controller
{

        protected function ItemRule($id=null) {

            return [
                'name1'=> ['required','string',"max:100", Rule::unique('items')->ignore($id)
            ],
                'name2'=>  'string|max:100',
                'name3'=>  'max:100',
                'barcode'=>  'required|string|max:50',
                'boxAmount'=> 'numeric|min:0',
                'minInv'=>  'numeric|min:0',
                'sizes'=>  'string|max:100',
                'weight'=>  'numeric|min:0',
                'picture'=>  'string|max:100',
                'expiryDate' => 'nullable|date'

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

        $searchQuery = $request->input('searchValue');

        $items = ModelsItem::whereRaw ("name1 LIKE  '%{$searchQuery}%' OR name2 LIKE '%{$searchQuery}%'
        OR name3 LIKE '%{$searchQuery}%' OR barcode LIKE '%{$searchQuery}%'  ")->paginate(10);



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
            $item->name1 = $request->name1;
            $item->name2 = $request->name2;
            $item->name3 = $request->name3;
            $item->barcode = $request->barcode;
            $item->boxAmount = $request->boxAmount;
            $item->minInv= $request->minInv;
            $item->sizes = $request->sizes;
            $item->weight = $request->weight;
            $item->picture = $request->picture;
            $item->isActive = $request->has('isActive')? 1 : 0;
            $item->expiryDate = Carbon::parse($request->expiryDate)->toDateString() ;
            $item->isBlocked = $request->has('isBlocked')? 1 : 0;
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


            $data['isActive'] = $request->has('isActive')? 1 : 0;
            $data['isBlocked'] = $request->has('isBlocked')? 1 : 0;

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
