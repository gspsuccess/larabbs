<?php
/**
 * Created by PhpStorm.
 * User: ZNZG
 * Date: 2018/6/27
 * Time: 12:19
 */

namespace App\Observers;


use App\Models\Link;
use Cache;

class LinkObserver
{
    public function saved(Link $link)
    {
        Cache::forget($link->cache_key);
    }
}