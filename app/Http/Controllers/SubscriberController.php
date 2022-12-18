<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubscriberRequest;
use App\Models\LogicField;
use App\Models\Rule;
use App\Models\Subscriber;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return
     */
    public function index()
    {
        $data['subscribers'] = Subscriber::latest()->get();
        return view('subscriber.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {

        //return $firstNameLogic = Rule::with('logic')->where(['logic_field_id'=>LogicField::where('field_name', 'first_name')->first()->id])->first();

        //$logicFieldId = LogicField::where('field_name', 'first_name')->first()->id;
        //return Rule::with('logic')->where(['logic_field_id'=>$logicFieldId])->first();
        return view('subscriber.crate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Response
     */
    public function store(SubscriberRequest $request)
    {
        return $request->all();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
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
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
