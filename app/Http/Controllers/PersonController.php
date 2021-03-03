<?php

namespace App\Http\Controllers;

use App\Http\Requests\PersonRequest;
use App\Models\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $person = Person::all();
        return $person;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PersonRequest $request)
    {
        $person = new Person;
        $person->firstName = $request->firstName;
        $person->lastName = $request->lastName;
        $person->email = $request->email;
        $person->phone = $request->phone;
        $person->save();
        return true;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PersonRequest $request,$id)
    {
        $person = Person::find($id);
        $person->firstName = $request->firstName;
        $person->lastName = $request->lastName;
        $person->email = $request->email;
        $person->phone = $request->phone;
        $person->save();
        return true;
    }

    /**
     * soft delete the specified resource from storage.
     *
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $person = Person::find($id);
        $person->delete();
        return true;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $person = Person::find($id);
        $person->destroy();
        return true;
    }
}
