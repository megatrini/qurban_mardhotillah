<?php

namespace App\Http\Controllers\API;

use App\Helpers\ApiFormatter;
use App\Helpers\ApiFormatters;
use App\Http\Controllers\Controller;
use App\Models\Qurban;
use Illuminate\Http\Request;
use Exception;

class QurbanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Qurban::all();
        return response()->json(['message'=>'succes',
            'data'=>$data],200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    $request->validate(
        [
            'tgl' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'jenis' => 'required',
            'bayar' => 'required',
        ]);
    $qurban = Qurban::create($request->all());

    return  response()->json(['message' => 'Succes',
        'data'=> $qurban], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Qurban::find($id);
        return response()->json($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $qurban = Qurban::find($id);

        $qurban->update($request->all());

        return response()->json([
            'message' => 'Success',
            'data' => $qurban
        ],200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        {
            $qurban = Qurban::find($id);
            $qurban->delete();
    
            return response()->json([
                'message' => 'Deleted',
                'data' => $qurban
            ],200);
        }
    }
}
