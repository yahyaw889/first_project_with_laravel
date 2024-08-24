<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Illuminate\Validation\Rules\Exists;

class Job extends Model {
    use HasFactory;
    protected $table = 'job_listings';
    protected $fillable = ['name' , 'sallery' , 'employer_id'];
        // protected $guarded = [];
    public function employer(){
      return  $this->belongsTo(Employer::class);
    }
    public function tags(){
        return $this->belongsToMany(Tag::class , foreignPivotKey : 'job_listing_id' );
    }
    // public function user(){
    //     $this->belongsTo(User::class);
    // }
}
