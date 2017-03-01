<?php
namespace Doitonlinemedia\Pages\App\Models;

use Doitonlinemedia\Admin\App\Models\BaseModel;
use Doitonlinemedia\Admin\App\Models\Document;

/**
 * PHP Type Hints
 *
 * begin_type_hint
 * @property string $test test
 * end_type_hint
 */

class Page extends BaseModel
{
    protected $table = 'custom_page';

    protected $guarded = ['id'];

    public function document() {
        return $this->belongsTo(Document::class);
    }
}
