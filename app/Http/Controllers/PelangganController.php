<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;
use PDF;

class PelangganController extends Controller
{
    public function index()
    {
        return view('pelanggan.index');
    }

    public function data()
    {
        $pelanggan = Pelanggan::orderBy('id')->get();

        return datatables()
            ->of($pelanggan)
            ->addIndexColumn()
            ->addColumn('select_all', function ($pelanggan) {
                return '
                    <input type="checkbox" name="id_pelanggan[]" value="' . $pelanggan->id . '">
                ';
            })
            // Tambahkan kolom lainnya sesuai kebutuhan
            ->addColumn('actions', function ($pelanggan) {
                return '
                    <button type="button" onclick="editForm(`' . route('pelanggan.update', $pelanggan->id) . '`)" class="btn btn-xs btn-info btn-flat"><i class="fa fa-pencil"></i></button>
                    <button type="button" onclick="deleteData(`' . route('pelanggan.destroy', $pelanggan->id) . '`)" class="btn btn-xs btn-danger btn-flat"><i class="fa fa-trash"></i></button>
                ';
            })
            ->rawColumns(['select_all', 'actions'])
            ->make(true);
    }

    public function store(Request $request)
    {
        $pelanggan = new Pelanggan();
        // Ambil data dari request dan simpan ke dalam model Pelanggan
        $pelanggan->paket = $request->paket;
        $pelanggan->name = $request->name;
        $pelanggan->address = $request->address;
        $pelanggan->qty = $request->qty;
        $pelanggan->total_price = $request->total_price;
        $pelanggan->status = $request->status;
        // ...

        $pelanggan->save();

        return response()->json('Data berhasil disimpan', 200);
    }

    public function update(Request $request, $id)
    {
        $pelanggan = Pelanggan::find($id);

        // Update data pelanggan berdasarkan id
        $pelanggan->paket = $request->paket;
        $pelanggan->name = $request->name;
        $pelanggan->address = $request->address;
        $pelanggan->qty = $request->qty;
        $pelanggan->total_price = $request->total_price;
        $pelanggan->status = $request->status;
        // ...

        $pelanggan->save();

        return response()->json('Data berhasil diperbarui', 200);
    }

    public function destroy($id)
    {
        $pelanggan = Pelanggan::find($id);

        if (!$pelanggan) {
            return response()->json(['message' => 'Data tidak ditemukan.'], 404);
        }

        $pelanggan->delete();

        return response()->json(['message' => 'Data berhasil dihapus.'], 200);
    }
}
