<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\ValidationException;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use App\Traits\RestApiResponseHandlerTrait;
use Waavi\Sanitizer\Laravel\SanitizesInput;

class BrandStoreRequest extends FormRequest
{
    use RestApiResponseHandlerTrait;
    use SanitizesInput;
    

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
     * @return array
     */
    public function rules()
    {
        return [
            'name' => array('bail', 'required', 'unique:brands', 'string', 'regex:/(^([a-z- ]+)?$)/iu'),
            'slug' => array('bail', 'required', 'unique:brands', 'string', 'max:50', 'regex:/(^([a-z-]+)?$)/iu'),
            'short_description' => array('bail', 'nullable','string'),
            'description' => array('bail','nullable','string'),
            'is_featured' => array('bail','boolean'),
            'is_active' => array('bail','boolean'),
            'logo' => array('bail','nullable','regex:/\.(png|jpe?g)$/i'),
            'meta_title' => array('bail','sometimes','nullable','string','regex:/(^([a-z-]+)?$)/iu'),
            'meta_description' => array('bail','sometimes','nullable','string','regex:/(^([a-z-]+)?$)/iu'),
            'meta_keywords' => array('bail','sometimes','nullable','string','regex:/(^([a-z-]+)?$)/iu')
        ];
    }

    public function messages()
    {
        return [
            'name.unique' => 'Name already taken',
            'slug.unique' => 'Slug already taken',
            'logo.regex' => 'Only jpg, png, jpeg images are allowed'
        ];
    }

    /**
     *  Filters to be applied to the input.
     *
     * @return array
     */
    public function filters()
    {
     
        return [
            'name' => 'trim|capitalize',
            'slug' => 'trim|lowercase',
            'is_active' => 'cast:int',
            'is_featured' => 'cast:int'
        ];
    }

    /**
     *  Handle failed validation response
     *
     * @return Illuminate\Http\Exceptions\HttpResponseException
     */
    protected function failedValidation(Validator $validator)
    {
        $errors = (new ValidationException($validator))->errors();
        $data = $this->validationData();
        $httpResponse= $this->sendFailedValidationResponse($errors,$data);

        throw new HttpResponseException($httpResponse);
    }

}
