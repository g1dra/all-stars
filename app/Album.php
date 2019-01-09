<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Image;
use Carbon\Carbon;

class Album extends Model
{
    protected $table = 'albums';

    protected $fillable = array('name','description','cover_image');

    public function photos()
    {
        return $this->hasMany(Image::class);
    }

    public function getCreatedAtAttribute($date)
    {
        return Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('d-M-Y');
    }
}
