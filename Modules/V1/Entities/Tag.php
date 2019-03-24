<?php
namespace Modules\V1\Entities;

use SoliDry\Extension\BaseModel;

class Tag extends BaseModel 
{
    // >>>props>>>
    protected $primaryKey = 'id';
    protected $table = 'tag';
    public $timestamps = false;
    // <<<props<<<
    // >>>methods>>>

    public function article() 
    {
        return $this->belongsToMany(Article::class, 'tag_article');
    }
    // <<<methods<<<
}
