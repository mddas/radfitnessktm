<?php

namespace App\Helpers;


use App\Models\Navigation;

class FrontendHelper
{
    public function getPagesBySlug($alias)
    {
        return Navigation::where('alias', $alias)->first();
    }
    public function getPagesById($id)
    {
        return Navigation::where('id', $id)->first();
    }

    public function getNavigationListByParent($parent_id)
    {
        return Navigation::where('id',$parent_id)->first();
    }

    public function latestEvent($parent_id)
    {
        return Navigation::where('parent_page_id',$parent_id)->latest()->first();
    }

    public function withPagination($parent_id,$limit = 10)
    {
        return Navigation::where('parent_page_id',$parent_id)->orderBy('id','DESC')->paginate($limit);
    }

    public function search($search,$limit = 10)
    {
        return Navigation::where('nav_name',$search)->orderBy('id','DESC')->paginate($limit);
    }


    public function latestNews()
    {
        return Navigation::where('parent_page_id',21)->orderBy('id','DESC')->limit(5)
            ->get();
    }

    public function eventByDate()
    {
        return Navigation::where('parent_page_id',33)->orderBy('extra_one','desc')->take(6)->get();
    }

    public function childMenu($parent_id)
    {
        return  Navigation::find($parent_id)->childs()->where('page_status',1)->orderBy('position','asc')->get();
    }
}