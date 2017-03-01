<?php namespace Doitonlinemedia\Pages\App\Http\Controllers;

use App\Http\Controllers\Controller;
use Doitonlinemedia\Admin\App\Models\DocumentType;
use Doitonlinemedia\Pages\App\Models\Page;

class PageController extends Controller {

    public function __construct(Page $model = null, DocumentType $documentType)
    {
        $this->model = $model;
        if($model) $this->document = $model->document;
        $this->documentType = $documentType;
    }

    public function show()
    {
        return 'show' ;
    }

    public function index() {
        return 'index';
    }


}