<?php

namespace App\Http\Controllers;

use App\Models\Adoption;
use Illuminate\Http\Request;

class AdoptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $adoption = Adoption::latest()->paginate(10);

        return view('adoption', compact('adoption'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add');
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
            'age' => 'required',
            'breed' => 'required',
            'color' => 'required',
            'weight' => 'required',
            'gender' => 'required',
            'detail' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $adoption = Adoption::create([
            'name' => $request->name,
            'age' => $request->age,
            'breed' => $request->breed,
            'color' => $request->color,
            'weight' => $request->weight,
            'gender' => $request->gender,
            'detail' => $request->detail
        ]);

        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $adoption->image = "$profileImage";
        }

        $adoption->save();

        return redirect('dogList')
            ->with('success', 'Adoptabable list created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Adoption  $adoption
     * @return \Illuminate\Http\Response
     */
    public function show(Adoption $adoption)
    {
        return view('dog-details', [
            'title' => 'ADOPTION',
            'adoption' => $adoption
        ]);
    }

    public function showAll()
    {

        return view('dogList', [
            "title" => "MIFILM- Daftar Film",
            "adoption" => Adoption::latest()->get()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Adoption  $adoption
     * @return \Illuminate\Http\Response
     */
    public function edit(Adoption $adoption)
    {
        return view('edit', compact('adoption'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Adoption  $adoption
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $request->validate([
            'name' => 'required',
            'age' => 'required',
            'breed' => 'required',
            'color' => 'required',
            'weight' => 'required',
            'age' => 'required',
            'detail' => 'required',
        ]);

        $adoption = Adoption::findOrFail($id);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        } else {
            unset($input['image']);
        }

        $adoption->update($input);

        return redirect()->route('dog.details', $adoption->id)
            ->with('success', 'adoptable list updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Adoption  $adoption
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $adoption = Adoption::find($id);
        $adoption->delete();

        return redirect()->route('adoption.index')
            ->with('success', 'adoptable list deleted successfully');
    }
}
