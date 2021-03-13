<?php

namespace App\Traits;

trait RulesAccessor
{
    public function getRulesAttribute()
    {
        if(isset($this->rules)) return $this->rules;
    }
}