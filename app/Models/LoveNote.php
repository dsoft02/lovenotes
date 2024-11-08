<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoveNote extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'gender', 'age', 'message'];

    public function getAuthorAttribute()
    {
        $username = $this->name ?: 'Anonymous';
        $age = $this->age ?: '';
        $gender = ($this->gender && strtolower($this->gender) !== 'none') ? $this->gender : '';
        if ($age && $gender) {
            $author = "$username $age, $gender";
        } elseif ($age) {
            $author = "$username $age";
        } elseif ($gender) {
            $author = "$username, $gender";
        } else {
            $author = $username;
        }

        return $author;
    }
}
