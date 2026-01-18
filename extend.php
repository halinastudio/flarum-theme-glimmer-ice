<?php

use Flarum\Extend;

return [
    // 
    (new Extend\Frontend('forum'))
        ->css(__DIR__.'/less/forum/extension.less'),
    
    // 
    // (new Extend\Frontend('admin'))
    //     ->css(__DIR__.'/less/admin/extension.less'),
];
