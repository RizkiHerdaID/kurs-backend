<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kurs;

class KursController extends Controller
{
    public function all()
    {
        return response(Kurs::all());
    }

    public function create(Request $request)
    {
        $validated = $this->validate($request, [
            'bank' => 'required',
            'kurs_beli' => 'required|numeric',
            'kurs_jual' => 'required|numeric|gte:kurs_beli',
        ]);

        $kurs = Kurs::create($validated);

        if (!$kurs) {
            return response(null, 400);
        }

        return response($kurs);
    }

    public function show($id)
    {
        if (!$id) {
            return response('id_required', 400);
        }
        $kurs = Kurs::find($id);
        if (!$kurs) {
            return response('no_record', 400);
        }
        return response($kurs);
    }

    public function update(Request $request, $id)
    {
        if (!$id) {
            return response('id_required', 400);
        }
        $validated = $this->validate($request, [
            'bank' => 'required',
            'kurs_beli' => 'required|numeric',
            'kurs_jual' => 'required|numeric|gte:kurs_beli',
        ]);

        $kurs = Kurs::find($id);
        $kurs->bank = $validated['bank'];
        $kurs->kurs_jual = $validated['kurs_jual'];
        $kurs->kurs_beli = $validated['kurs_beli'];

        if (!$kurs->save()) {
            return response(null, 400);
        }

        return response($kurs);
    }

    public function delete($id)
    {
        if (!$id) {
            return response('id_required', 400);
        }

        if (!Kurs::destroy($id)) {
            return response('no_record', 400);
        }

        return response(null, 200);
    }
}
