<?php

namespace App\Models;

use App\Models\Company;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $allowedRelations = [
        'category',
        'company'
    ];


    protected $allowedFilters = [
        'category',
        'company'
    ];


    //by default products are searched by id, chanched to be searched by product slug.
    public function getRouteKeyName(){
        return 'slug';
    }


    //relation one by one (inverse)
    public function category(){
        return $this->belongsTo(Category::class);
    }


    public function company(){
        return $this->belongsTo(Company::class);
    }

    
    //scope to make relationship between tables
    public function scopeRelations(Builder $query){
        if (empty(request('relations')) || empty($this->allowedRelations)) {
            return;
        }
        
        $relations = explode(',', request('relations'));
        $allowedRelations = collect($this->allowedRelations);

        //verify which relations are allowed
        foreach ($relations as $index => $relation) {
            //if relation is not in the white list, remove from array
            if (!$allowedRelations->contains($relation)) {
                //remove relation
               unset($relations[$index]);
            }
        }

        //return relation with relations allowed
        return $query->with($relations);
    }

    //filter products by category
    public function scopeFilterByCategory(Builder $query){
        if (empty(request('category') || empty($this->allowedFilters))) {
            return;
        }

        $filter = request('category');

        return $query->where('category_id', $filter);
    }


    //filtering products by company
    public function scopeFilterByCompany(Builder $query){
        if (empty(request('company') || empty($this->allowedFilters))) {
            return;
        }

        $filter = request('company');

        return $query->where('company_id', $filter);
    }



    //limit the numbers of items showed
    public function scopeLimit(Builder $query){
        
        if (empty(request('limit'))) {
            return;
        }

        $limit = request('limit');

        return $query->paginate($limit);
    }



    //search products by product name
    public function scopeSearch(Builder $query){

        if (empty(request('search'))) {
            return;
        }

        $search = request('search');

        return $query->where('name', 'like', '%' . $search . '%');
    }





}
