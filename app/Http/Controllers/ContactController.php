<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact.index');
    }

    public function submitContact(Request $request)
    {
        // Validasi data yang diterima dari formulir
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        // Simpan data yang diterima dari formulir ke dalam database
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->message = $request->message;
        // Tambahkan kolom lain jika diperlukan

        $contact->save();

        // Redirect atau kembalikan response yang sesuai setelah data berhasil disimpan
        return redirect()->back()->with('success', 'Terima kasih! Pesan Anda berhasil dikirim.');
    }

    public function data()
    {
        $contacts = Contact::orderBy('id')->get();

        return datatables()
            ->of($contacts)
            ->addIndexColumn()
            ->addColumn('actions', function ($contact) {
            })
            ->rawColumns(['actions'])
            ->toJson();
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        $contact = new Contact();
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->message = $request->input('message');
        $contact->save();

        return response()->json('Data berhasil disimpan', 200);
    }



    public function destroy($id)
    {
        $contact = Contact::find($id);

        if (!$contact) {
            return response()->json(['message' => 'Data tidak ditemukan.'], 404);
        }

        $contact->delete();

        return response()->json(['message' => 'Data berhasil dihapus.'], 200);
    }

    public function update(Request $request, $id)
    {
        // Find the contact by ID
        $contact = Contact::find($id);

        if (!$contact) {
            return response()->json(['message' => 'Data not found.'], 404);
        }

        // Validate the updated data
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        // Update the contact record
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->message = $request->message;
        // Update other fields as needed

        $contact->save();

        return response()->json(['message' => 'Data updated successfully.'], 200);
    }
}
