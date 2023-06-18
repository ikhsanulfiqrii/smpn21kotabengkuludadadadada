<?php

namespace App\Http\Controllers\Backend\Website;

use App\Http\Controllers\Controller;
use App\Models\Struktur;
use Illuminate\Http\Request;
use App\Http\Requests\StrukturRequest;
use ErrorException;
use Session;

class StrukturController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $struktur = Struktur::first();
        return view('backend.website.tentang.struktur',compact('struktur'));
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
    public function store(StrukturRequest $request)
    {
        try {
            $image = $request->file('image');
            $nama_img = time()."_".$image->getClientOriginalName();
            // isi dengan nama folder tempat kemana file diupload
            $tujuan_upload = 'public/images/struktur';
            $image->storeAs($tujuan_upload,$nama_img);

            $struktur = new Struktur();
            $struktur->image     = $nama_img;
            $struktur->save();

            Session::flash('success','Struktur Sekolah Berhasil ditambahkan!');
            return redirect()->route('backend-struktur.index');

        } catch (ErrorException $e) {
            throw new ErrorException($e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function update(StrukturRequest $request, $id)
    {
        try {
            if ($request->image) {
                $image = $request->file('image');
                $nama_img = time()."_".$image->getClientOriginalName();
                // isi dengan nama folder tempat kemana file diupload
                $tujuan_upload = 'public/images/struktur';
                $image->storeAs($tujuan_upload,$nama_img);
            }

            $struktur = Struktur::find($id);
            $struktur->image     = $nama_img ?? $struktur->image;
            $struktur->save();

            Session::flash('success','Struktur Sekolah Berhasil diupdate!');
            return redirect()->route('backend-struktur.index');

        } catch (ErrorException $e) {
            throw new ErrorException($e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
