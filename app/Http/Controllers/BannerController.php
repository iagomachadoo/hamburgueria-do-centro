<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Http\Requests\StoreBannerRequest;
use App\Http\Requests\UpdateBannerRequest;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('painel.banner.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('painel.banner.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(StoreBannerRequest $request)
    // {
    //     dd($request->all());
    // }
    public function store(Request $request)
    {
        $dados = $request->validate([
            'banner_desktop' => 'required',
            'banner_mobile' => 'required',
            'titulo' => 'required|string|max:45',
            'subtitulo' => 'required|string|max:50',
        ]);

        dd($dados);
    }

    /**
     * Display the specified resource.
     */
    public function show(Banner $banner)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Banner $banner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBannerRequest $request, Banner $banner)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Banner $banner)
    {
        //
    }
}
