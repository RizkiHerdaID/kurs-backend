<?php

namespace App\Http\Controllers;

use App\Models\Erate;
use Illuminate\Http\Request;


class ErateController extends Controller
{

    public function all()
    {
        return response(Erate::orderBy('date_created', 'desc')->get());
    }

    public function create(Request $request)
    {
        $validated = $this->validate($request, [
            'erate_beli' => 'required|numeric',
            'erate_jual' => 'required|numeric',
            'ttcounter_beli' => 'required|numeric',
            'ttcounter_jual' => 'required|numeric',
        ]);

        $erate = Erate::create($validated);

        if (!$erate) {
            return response(null, 400);
        }

        return response($erate);
    }

    public function show($id)
    {
        if (!$id) {
            return response('id_required', 400);
        }
        $erate = Erate::find($id);
        if (!$erate) {
            return response('no_record', 400);
        }
        return response($erate);
    }

    public function update(Request $request, $id)
    {
        if (!$id) {
            return response('id_required', 400);
        }
        $validated = $this->validate($request, [
            'erate_beli' => 'required|numeric',
            'erate_jual' => 'required|numeric',
            'ttcounter_beli' => 'required|numeric',
            'ttcounter_jual' => 'required|numeric',
        ]);

        $erate = Erate::find($id);
        $erate->erate_jual = $validated['erate_jual'];
        $erate->erate_beli = $validated['erate_beli'];
        $erate->ttcounter_jual = $validated['ttcounter_jual'];
        $erate->ttcounter_beli = $validated['ttcounter_beli'];

        if (!$erate->save()) {
            return response(null, 400);
        }

        return response($erate);
    }

    public function delete($id)
    {
        if (!$id) {
            return response('id_required', 400);
        }

        if (!Erate::destroy($id)) {
            return response('no_record', 400);
        }

        return response(null, 200);
    }
}
