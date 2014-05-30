<?php namespace PcHistory\Repositories;


use PcHistory\Entities\Category;

class CategoryRepo extends BaseRepo{

    public function getModel(){
        return new Category;
    }



}