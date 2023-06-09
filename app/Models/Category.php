<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name','slug','status','user_id'];

    /**
     * @param array $input
     * @return Builder|Model
     */
    public function storCategory(array $input):Builder|Model
    {
      return self::query()->create($input);
    }
}
