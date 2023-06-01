<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use App\Http\Requests\StoreComicRequest;
use App\Http\Requests\UpdateComicRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreComicRequest $request)
    {
        // DATA VALIDATION metodo semplice
        // $request->validate([
        //     'title' => 'required|min:5|max:30',
        //     'thumb' => 'required|min:3|max:30',
        //     'price' => 'required|min:1|max:10',
        //     'series' => 'required|min:5|max:100',
        //     'sale_date' => 'required',
        //     'type' => 'required|min:3|max:30',
        // ]);
        // $data = $request->all();

        $data = $request->validated();
        $comic = new Comic();
        $comic->fill($data);
        $comic->save();

        return redirect()->route('comics.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = Comic::findOrFail($id);
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comic = Comic::findOrFail($id);
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateComicRequest $request, $id)
    {
        // DATA VALIDATION metodo semplice
        // $request->validate([
        //     'title' => 'required|min:5|max:30',
        //     'thumb' => 'required|min:3|max:30',
        //     'price' => 'required|min:1|max:10',
        //     'series' => 'required|min:5|max:100',
        //     'sale_date' => 'required',
        //     'type' => 'required|min:3|max:30',
        // ]);
        // $data = $this->validation($request->all());

        $data = $request->validated();
        $comic = Comic::findOrFail($id);
        $comic->update($data);

        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comic = Comic::findOrFail($id);
        $comic->delete();

        return redirect()->route('comics.index');
    }


    // FUNZIONE PER DEFINIRE LE VALIDAZIONI metodo semplice
    // private function validation($data) {
    //     $validator = Validator::make($data, [
    //         'title' => 'required|min:5|max:30',
    //         'thumb' => 'required',
    //         'price' => 'required|min:1|max:10',
    //         'series' => 'required|min:5|max:100',
    //         'sale_date' => 'required',
    //         'type' => 'required|min:3|max:30',
    //     ], [
    //         'title.required' => 'Il titolo è obbligatorio',
    //         'title.min' => 'Il titolo deve essere lungo almeno :min caratteri',
    //         'title.max' => 'Il titolo non deve superare :max caratteri',
            
    //     ]);
    //     $validated_data = $validator->validate();
    //     return $validated_data;
    // }
}
