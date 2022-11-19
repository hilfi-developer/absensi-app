<?php

namespace App\Http\Controllers;

use App\Models\Data_Kepsek;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class DataKepsekController extends Controller
{
    public function index()
    {
        return view('admin.data_kepsek.index');
    }

    public function data(Request $request)
    {
        $orderBy = 'tb_datakepsek.nuptk';
        switch ($request->input('order.0.column')) {
            case "1":
                $orderBy = 'tb_datakepsek.nuptk';
                break;
            case "2":
                $orderBy = 'tb_datakepsek.nama';
                break;
            case "3":
                $orderBy = 'tb_datakepsek.unit_kerja';
                break;
            case "4":
                $orderBy = 'tb_datakepsek.no_hp';
                break;
            case "5":
                $orderBy = 'tb_datakepsek.alamat';
                break;
            case "6":
                $orderBy = 'tb_datakepsek.tempat_lahir';
                break;
            case "7":
                $orderBy = 'tb_datakepsek.tanggal_lahir';
                break;
            case "8":
                $orderBy = 'tb_datakepsek.foto';
                break;
        }

        $data = Data_Kepsek::select('*');

        if ($request->input('search.value') != null) {
            $data = $data->where(function ($q) use ($request) {
                $q->whereRaw('LOWER(tb_datakepsek.nuptk) like ? ', ['%' . strtolower($request->input('search.value')) . '%'])
                    ->orWhereRaw('LOWER(tb_datakepsek.nama) like ? ', ['%' . strtolower($request->input('search.value')) . '%']);
            });
        }


        $recordsFiltered = $data->get()->count();
        if ($request->input('length') != -1) $data = $data->skip($request->input('start'))->take($request->input('length'));
        $data = $data->orderBy($orderBy, $request->input('order.0.dir'))->get();
        $recordsTotal = $data->count();
        return response()->json([
            'draw' => $request->input('draw'),
            'recordsTotal' => $recordsTotal,
            'recordsFiltered' => $recordsFiltered,
            'data' => $data
        ]);
    }

    public function update(Request $request, $id)
    {
        $rules = [
            'nuptk' => 'nullable',
            'nama' => 'nullable',
            'unit_kerja' => 'nullable',
            'no_hp' => 'nullable',
            'alamat' => 'nullable',
            'tempat_lahir' => 'nullable',
            'tanggal_lahir' => 'nullable',
            'foto' => 'nullable'
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $upload = Data_Kepsek::where('id', $id)->first();
        if ($request->file('foto') == "") {
            $upload->update([
                'nuptk' => $request->nuptk,
                'nama' => $request->nama,
                'unit_kerja' => $request->unit_kerja,
                'no_hp' => $request->no_hp,
                'alamat' => $request->alamat,
                'tempat_lahir' => $request->tempat_lahir,
                'tanggal_lahir' => $request->tanggal_lahir
            ]);
        } else {

            Storage::disk('local')->delete('public/img/' . $upload->foto);

            $image = $request->file('foto');
            $image->storeAs('public/img', $image->hashName());

            $upload->update([
                'nuptk' => $request->nuptk,
                'nama' => $request->nama,
                'unit_kerja' => $request->unit_kerja,
                'no_hp' => $request->no_hp,
                'alamat' => $request->alamat,
                'tempat_lahir' => $request->tempat_lahir,
                'tanggal_lahir' => $request->tanggal_lahir,
                'foto' => $image->hashName()
            ]);
        }

        return response()->json(['data' => $upload]);
    }
}
