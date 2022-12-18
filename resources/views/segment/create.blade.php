@extends('master')

@section('content')
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Subscriber</h1>
    </div>
    <div class="d-flex justify-content-between">
        <h2>Add Segment</h2>
        <div>
            <a href="{{route('segments.index')}}" class="btn btn-primary">Segment List</a>
        </div>
    </div>
    <div>
        <form action="{{route('segments.store')}}" method="post">
            <div class="row g-3">
                @csrf
                <div class="col-12">
                    <label for="segment_name" class="form-label">Segment name</label>
                    <input type="text" class="form-control" name="segment_name" id="segment_name"
                           placeholder="Segment Name" value="">
                    @if($errors->has('segment_name'))
                        <div class="text-danger">{{ $errors->first('segment_name') }}</div>
                    @endif
                </div>

                <hr>
                <h3>Segment Logic</h3>
                <div class="row">
                    <div class="col-md-3">
                        <select class="form-select" id="country" required="" name="rules[1][logic_field_id]">
                            @foreach($logicFields as $logicField)
                                <option value="{{$logicField->id}}">{{$logicField->field_name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-3">
                        <select class="form-select" required="" name="rules[1][logic_id]" id="logic_name_1"
                                onchange="setDescription({{json_encode($logics)}}, 1)">
                            @foreach($logics as $logic)
                                <option value="{{$logic->id}}">{{$logic->logic_name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-3">
                        <input type="text" name="rules[1][description]" id="description_1" placeholder="Description"
                               class="form-control">
                    </div>

                    <div class="col-md-3" id="or_condition_1">
                        <input type="hidden" name="rules[1][group]" value="or">
                        <button class="btn btn-success" type="button" onclick="addOrRules(1)">+ OR</button>
                    </div>

                    <div class="col-12 mt-2" id="and_condition_1">
                        <input type="hidden" name="rules[1][group]" value="and">
                        <button class="btn btn-success" type="button" onclick="addAndRules(1)">+ And</button>
                    </div>
                </div>
                <div id="addRulesField"></div>
                <div class="col-md-2">
                    <button type="submit" class="btn btn-success">Save</button>
                </div>
            </div>
        </form>
    </div>
@endsection
@push('script')
    <script>
        function addAndRules(key) {
            addRules(key)
            $(`#and_condition_${key}`).children('button').remove()
            $(`#or_condition_${key}`).remove()
        }

        function addOrRules(key) {
            addRules(key)
            $(`#or_condition_${key}`).children('button').remove()
            $(`#and_condition_${key}`).remove()
        }

        function addRules(key) {
            var keys = key + 1
            let html = `
           <div class="row mb-2">
                <div class="col-md-3">
                     <select class="form-select" id="country" required="" name="rules[${keys}][logic_field_id]">
                         @foreach($logicFields as $logicField)
                            <option value="{{$logicField->id}}">{{$logicField->field_name}}</option>
                         @endforeach
                    </select>
            </div>

            <div class="col-md-3">
                    <select class="form-select" id="logic_name_${keys}" required="" name="rules[${keys}][logic_id]" onchange="setDescription({{json_encode($logics)}}, ${keys})">
                        @foreach($logics as $logic)
                            <option value="{{$logic->id}}">{{$logic->logic_name}}</option>
                        @endforeach
                    </select>
            </div>

            <div class="col-md-3">
                <input type="text" name="rules[${keys}][description]" id="description_${keys}" placeholder="Description" class="form-control">
            </div>

            <div class="col-md-3" id="or_condition_${keys}">
                @foreach($groups as $group)
                    @if($group->group_name === 'or')
                        <input type="hidden" name="rules[${keys}][group]" value="or">
                        <button class="btn btn-success" type="button" onclick="addOrRules(${keys})">+ OR</button>
                    @endif
                @endforeach
            </div>

            <div class="col-12 mt-2" id="and_condition_${keys}">
                <input type="hidden" name="rules[${keys}][group]" value="and">
                <button class="btn btn-success" type="button" onclick="addAndRules(${keys})">+ And</button>
            </div>
        </div>
`
            $("#addRulesField").append(html);

        }

        function setDescription(logics, key) {
            const description = $(`#logic_name_${key}`).find(":selected").val()

            var logic_type = '';
            logics.forEach((logic) => {
                if (Number(logic.id) === Number(description)) {
                    logic_type = logic.type
                }
            })

            if (logic_type === 'text_type') {
                $(`#description_${key}`).attr("type", "text");
            } else {
                $(`#description_${key}`).attr("type", "date");
            }
        }
    </script>
@endpush



