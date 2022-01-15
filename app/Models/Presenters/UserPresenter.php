<?php

namespace App\Models\Presenters;

trait UserPresenter
{
    public function presentFullName()
    {
        return $this->first_name. ' '.$this->last_name;
    }

    public function getFullNameAttribute()
    {
        return $this->first_name. ' '.$this->last_name;
    }

    public function presentFullAddress()
    {
        return $this->address. ' '.$this->city;
    }

    public function getFullAddressAttribute()
    {
        return $this->address. ' '.$this->city;
    }
}
