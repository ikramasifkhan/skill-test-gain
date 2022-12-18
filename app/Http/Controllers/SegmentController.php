<?php

namespace App\Http\Controllers;

use App\Http\Requests\SegmentRequest;
use App\Models\Group;
use App\Models\Logic;
use App\Models\LogicField;
use App\Models\Rule;
use App\Models\Segment;
use App\Models\SegmentRule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class SegmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['segments'] = Segment::with('rules', 'rules.logic_field', 'rules.logic')->latest()->get();
        return view('segment.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['logicFields'] = LogicField::latest()->get();
        $data['logics'] = Logic::latest()->get();
        $data['groups'] = Group::latest()->get();
        return view('segment.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SegmentRequest $request)
    {
        DB::beginTransaction();
        try{
            $segment = Segment::create([
                'segment_name'=>$request->segment_name
            ]);
            if($request->has('rules')){
                foreach ($request->rules as $rule) {
                    $newRule = Rule::create([
                        'logic_field_id' => $rule['logic_field_id'],
                        'logic_id' => $rule['logic_id'],
                        'description' => $rule['description'],
                    ]);

                    SegmentRule::create([
                        'segment_id'=>$segment->id,
                        'rule_id'=> $newRule->id,
                        'group'=> $rule['group']
                    ]);
                }

            }
            DB::commit();
            return redirect()->route('segments.index');

        }catch (\Exception $exception){
            echo $exception->getMessage();
            Log::info($exception->getMessage());
            DB::rollback();
            return redirect()->route('segments.index');
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
    public function update(Request $request, $id)
    {
        //
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
