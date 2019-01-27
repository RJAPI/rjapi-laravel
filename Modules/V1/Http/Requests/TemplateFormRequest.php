<?php
namespace Modules\V1\Http\Requests;

use rjapi\extension\BaseFormRequest;

class TemplateFormRequest extends BaseFormRequest 
{
    // >>>props>>>
    public $id = null;
    // Attributes
    public $category_id = null;
    public $title = null;
    public $description = null;
    public $thumbnail_url = null;
    public $example_vid_url = null;
    public $template_json = null;
    public $input_schema = null;
    public $input_options = null;
    public $input_data = null;
    public $input_view = null;
    // Relations

    // <<<props<<<

    // >>>methods>>>
    public function authorize(): bool 
    {
        return true;
    }

    public function rules(): array 
    {
        return [
                // Category identifier  (connected to category table)
            'category_id' => 'required|integer',
                // Template title
            'title' => 'required|string|max:50',
                // Template Description
            'description' => 'required|string',
                // Image (url) to show template
            'thumbnail_url' => 'string|required',
                // Video Demo of template
            'example_vid_url' => 'string|required',
                // JSON data of Template
            'template_json' => 'string|required',
                // Alpaca Forms - Schema data for form inputs (define input form to edit template)
            'input_schema' => 'string|required',
                // Alpaca Forms - options data for form inputs (define input form to edit template)
            'input_options' => 'string|required',
                // Alpaca Forms - data for form inputs (define input form to edit template)
            'input_data' => 'string|required',
                // Alpaca Forms - input data for form inputs (define input form to edit template)
            'input_view' => 'string|required',
        ];
    }

    public function relations(): array 
    {
        return [
            'category_template',
        ];
    }
    // <<<methods<<<
}
