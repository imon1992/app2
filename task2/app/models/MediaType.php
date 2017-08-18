<?php

class MediaType extends Eloquent
{
    protected $table = 'MediaType';
    protected $primaryKey = 'MediaTypeId';

    public function track()
    {
        return $this->belongsTo('Track', 'MediaTypeId', 'MediaTypeId');
    }
}