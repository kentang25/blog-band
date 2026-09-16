<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::All();
        return view('admin.contact', compact('contacts'));
    }

    public function insert(Request $request)
    {
        $validate = $request->validate([
            'email' => 'required|email',
            'instagram' => 'required|string',
            'bandcamb' => 'required|string',
        ]);

        Contact::create($validate);
        return redirect()->to('/contact')->with('success', 'contact berhasil ditambahkan');
    }

    public function edit(Request $request, $id_contact)
    {
        $contact = Contact::findOrFail($id_contact);
        return view('admin.editContact', compact('contact'));
    }

    public function update(Request $request, Contact $contact, $id_contact)
    {
        $validate = $request->validate([
            'email' => 'required|email',
            'instagram' => 'required|string',
            'bandcamb' => 'required|string',
        ]);

        $contact = Contact::findOrFail($id_contact);
        $contact->update($validate);

        return redirect()->to('/contact')->with('success', 'contact berhasil diperbarui');
    }
}
