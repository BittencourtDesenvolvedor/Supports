<?php

namespace App\Http\Controllers;

use App\Models\Support;
use Illuminate\Http\Request;
use App\Http\Requests\storeRequest;
class SupportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    { 
        $supports = Support::all();
        return view('admin/supports/index', ['supports' => $supports] );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin/supports/create' );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(storeRequest $request, Support $support)
    {
       $data = $request->validated();
       $support->create($data);
       return redirect()->route('support.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        if(!$support = Support::find($id)){
            return back();
        }
        return view('admin/supports/show', ['support' => $support]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        if(!$support = Support::find($id)){
            return back();
        }
        return view('admin/supports/edit', ['support' => $support]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(storeRequest $request, Support $support, $id)
    {
        if(!$support = Support::find($id)){
            return back();
        }
        $support->update($request->only([
            'subject', 'body'
        ]));

        return redirect()->route('support.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Support $support, $id)
    {
        if(!$support = Support::find($id)){
            return back();
        }
        $support->delete();
        return redirect()->route('support.index');
    }
}
