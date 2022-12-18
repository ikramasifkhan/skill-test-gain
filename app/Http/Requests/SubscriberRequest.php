<?php

namespace App\Http\Requests;

use App\Models\LogicField;
use App\Models\Rule;
use Illuminate\Foundation\Http\FormRequest;

class SubscriberRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        $firstNameLogic = Rule::with('logic')->where(['logic_field_id'=>LogicField::where('field_name', 'first_name')->first()->id])->first();
        $firstNameLogicName = $firstNameLogic->logic->logic_name;
        $firstNameLogicDescription = $firstNameLogic->description;

        $firstNameLogic = Rule::with('logic')->where(['logic_field_id'=>LogicField::where('field_name', 'last_name')->first()->id])->first();
        $lastNameLogicName = $firstNameLogic->logic->logic_name;
        $lastNameLogicDescription = $firstNameLogic->description;
        return [
            'first_name'=>['required',
                "$firstNameLogicName : $firstNameLogicDescription"
            ],
            'last_name'=>['required',
                "$lastNameLogicName : $lastNameLogicDescription"
            ],
        ];
    }
}
