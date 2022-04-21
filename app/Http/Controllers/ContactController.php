<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactRequest;
use App\Http\Requests\UpdateContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contact::paginate(15);

        return view("index", ['contacts' => $contacts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreContactRequest $request
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function store(StoreContactRequest $request)
    {

        // Retrieve the validated input data...
        $validated = $request->validated();

        $contact = Contact::create($validated);

        if($contact){
            return  redirect()->route('index');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $contact = Contact::where('id', $id)->firstOrFail();

        return view('show', compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $contact = Contact::where('id', $id)->firstOrFail();

        return view('form', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateContactRequest $request
     * @param \App\Models\Contact $contact
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function update(UpdateContactRequest $request, $id)
    {
        // Retrieve the validated input data...
        $validated = $request->validated();

        $contact = Contact::where('id', $id)->firstOrFail();

        $contact->name = $validated['name'];
        $contact->contact = $validated['contact'];
        $contact->email = $validated['email'];
        $contact->save();

        return view('show', compact('contact'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
