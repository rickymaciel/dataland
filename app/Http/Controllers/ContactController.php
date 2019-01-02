<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

use DB;
use Log;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('contactos.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {        
        try {

            DB::beginTransaction();

            $this->_contacto($request);

            DB::commit();
            
        } catch (Exception $e) {
            DB::rollback();
            Log::error('store',['error'=>$e]);

            flash($e->getMessage())->error()->important();
            return redirect('/');
        }

        flash('Datos guardados!')->success()->important();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  $request
     * @return \Illuminate\Http\Response
     */
    public function _contacto(Request $request)
    {
        $contacto = new Contact();
        $contacto->Name = $request->Name;
        $contacto->Email = $request->Email;
        $contacto->Subject = $request->Subject;
        $contacto->Message = $request->Message;

        $contacto->save();
        
        return $contacto;
    }
}
