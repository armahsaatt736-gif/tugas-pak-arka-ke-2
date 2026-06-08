<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    protected $fillable = [
        'title',
        'description',
        'target_donation',
        'collected_donation',
        'deadline'
    ];
    public function account()
    {
        return $this->hasone(CampaignAccount::class);
    }

    public function donations()
    {
        return $this->hasmany(Donation::class);
    
    }

    public function categories()
    {
        return $this->belongsToMany(categoty::class, 'campaign_category');
    }
}