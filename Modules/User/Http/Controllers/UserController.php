<?php

namespace Modules\User\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Modules\Invoice\Entities\Invoice;
use Modules\User\Entities\User;

use Yajra\DataTables\DataTables as DataTable;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('user::index');
    }

    public function datatable()
    {
        return DataTable::of(User::query())->make(true);
    }

    public function api(Request $request)
    {
       $user = User::where('api_token', $request->api_token)->first();
       $invoices = Invoice::where('user_id', $user->id)->get();
       return $invoices;
    }

    public function api_gen(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        if(Hash::check($request->key, $user->password)){
            if($user->api_token!=="" && $user->api_token !== null){
                return ["api_token" => $user->api_token];
            }else{
                $user->api_token = Str::random(60);
                $user->save();
                return ["api_token" => $user->api_token];
            }
        }
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('user::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('user::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('user::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}
