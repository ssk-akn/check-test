<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\category;

class Contact extends Model
{
    use HasFactory;

    public $fillable = [
        'category_id',
        'first_name',
        'last_name',
        'gender',
        'email',
        'tel',
        'address',
        'building',
        'detail'
    ];

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    public function scopeSearchKeyword($query, $keyword)
    {
        if (!empty($keyword)) {
            $query->where(function ($q) use ($keyword) {
                $q->where('first_name', 'like', "%$keyword%")
                ->orWhere('last_name', 'like', "%$keyword%")
                ->orWhere('email', 'like', "%$keyword%");
            });
        }
    }
    public function scopeFilterGender($query, $gender)
    {
        if (!empty($gender)) {
            $query->where('gender', $gender);
        }
    }
    public function scopeFilterCategory($query, $categoryId)
    {
        if (!empty($categoryId)) {
            $query->where('category_id', $category_id);
        }
    }
    public function scopeFilterDate($query, $date)
    {
        if (!empty($date)) {
            $query->whereDate('created_at', $date);
        }
    }
}
