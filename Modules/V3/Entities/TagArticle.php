<?php
namespace Modules\V3\Entities;

use rjapi\extension\BaseModel;

class TagArticle extends BaseModel 
{
    // >>>props>>>
    protected $primaryKey = 'id';
    protected $table = 'tag_article';
    public $timestamps = true;
    // <<<props<<<
}
