<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usd;

class UsdController extends Controller{

    public function all()
    {
        return response(Usd::all());
    }

    public function create(Request $request)
    {
        $validated = $this->validate($request, [
            'mata_uang' => 'required|alpha',
            'jual_week' => 'required|numeric',
            'jual_month' => 'required|numeric',
            'jual_threemonth' => 'required|numeric',
            'jual_sixmonth' => 'required|numeric',
        ]);

        $erate = Usd::create($validated);

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
        $erate = Usd::find($id);
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
            'mata_uang' => 'required|alpha',
            'jual_week' => 'required|numeric',
            'jual_month' => 'required|numeric',
            'jual_threemonth' => 'required|numeric',
            'jual_sixmonth' => 'required|numeric',
        ]);

        $erate = Usd::find($id);
        $erate->mata_uang = $validated['mata_uang'];
        $erate->jual_month = $validated['jual_month'];
        $erate->jual_week = $validated['jual_week'];
        $erate->jual_sixmonth = $validated['jual_sixmonth'];
        $erate->jual_threemonth = $validated['jual_threemonth'];

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

        if (!Usd::destroy($id)) {
            return response('no_record', 400);
        }

        return response(null, 200);
    }
}