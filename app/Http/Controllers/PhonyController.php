<?php

namespace App\Http\Controllers;


use App\Models\Phony;
use Illuminate\Http\Request;

class PhonyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $phonies = Phony::query()->orderBy('created_at', 'desc')->paginate(10);

        return view('phony.index', ['phonies' => $phonies]);;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
