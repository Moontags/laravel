<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Job extends Model {

    use HasFactory;
    protected $table = 'job_listings';
    protected $fillable = ['title', 'salary'];

    public function employer() {
        return $this->belongsTo(Employer::class);
    }

    public function tags() {
        return $this->belongsToMany(Tag::class, foreignPivotKey: "job_listing_id");
    }

}





// {
//     public static function all(): array
//     {
//         return [
//             ['id' => 1, 'title' => 'Director', 'salary' => '$50,000'],
//             ['id' => 2, 'title' => 'Programmer', 'salary' => '$70,000'],
//             ['id' => 3, 'title' => 'Teacher', 'salary' => '$40,000'],
//             ['id' => 4, 'title' => 'Nurse', 'salary' => '$60,000'],
//             ['id' => 5, 'title' => 'Engineer', 'salary' => '$80,000'],
//             ['id' => 6, 'title' => 'Sales Manager', 'salary' => '$65,000'],
//             ['id' => 7, 'title' => 'Accountant', 'salary' => '$55,000'],
//             ['id' => 8, 'title' => 'Marketing Specialist', 'salary' => '$50,000'],
//             ['id' => 9, 'title' => 'Graphic Designer', 'salary' => '$45,000'],
//             ['id' => 10, 'title' => 'Data Scientist', 'salary' => '$95,000']
//         ];
//     }

//     public static function find(int $id): ?array
//     {
//         return Arr::first(static::all(), fn($job) => $job['id'] === $id)
//             ?? abort(404, 'Job not found');
//     }
// }
