<?php

namespace App\Http\Controllers;

use App\Helpers\FrontendHelper;
use App\Mail\ContactMailer;
use App\Mail\RegistrationMailer;
use App\Mail\SponsorMailer;
use App\Models\GlobalSetting;
use App\Models\Navigation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index(FrontendHelper $frontendHelper)
    {

        $settings = GlobalSetting::where('id', 1)->first();

        $menus = Navigation::where('nav_category', 'Main')->where('parent_page_id', 0)->where('page_status', 1)->orderBy('position', 'asc')->get();

        return view('website.home', [
            'frontend_helper' => $frontendHelper,
            'settings' => $settings,
            'menus' => $menus
        ]);
    }

    public function getPageDetail($alias, FrontendHelper $frontendHelper)
    {
        $settings = GlobalSetting::where('id', 1)->first();
        $sliders = Navigation::where('page_type', 'Slider')->first();
        $menus = Navigation::where('nav_category', 'Main')->where('parent_page_id', 0)->where('page_status', 1)->orderBy('position', 'ASC')->get();
        $page = Navigation::where('alias', $alias)->first();

        $view = 'website.pages.detail';

       /* if ($page->page_type == 'Group') {
            $view = 'website.pages.group-detail';
        }*/

      /*  if ($page->page_type == 'Photo Gallery') {
            $view = 'website.pages.gallery-detail';
        }*/
        if ($page->id == 10) {
            $view = 'website.pages.about';
        }
        if ($page->id == 1 || $page->id == 25) {
            $view = 'website.pages.services';

        }

        if ( $page->id != 1 && $page->parent_page_id == 1) {

            $view = 'website.pages.service-detail';
        }

        if ( $page->id != 25 && $page->parent_page_id == 25) {

            $view = 'website.pages.programs';
        }

        if ($page->id == 8) {
            $view = 'website.pages.community';
        }

        if ($page->id == 9) {
            $view = 'website.pages.contact';
        }





        return view($view, [
            'frontend_helper' => $frontendHelper,
            'settings' => $settings,
            'sliders' => $sliders,
            'menus' => $menus,
            'page' => $page
        ]);
    }

    public function getGalleryDetail($alias, FrontendHelper $frontendHelper)
    {
        $settings = GlobalSetting::where('id', 1)->first();
        $sliders = Navigation::where('page_type', 'Slider')->first();
        $menus = Navigation::where('nav_category', 'Main')->where('parent_page_id', 0)->where('page_status', 1)->orderBy('position', 'ASC')->get();
        $page = Navigation::where('alias', $alias)->first();
        $view = 'website.pages.gallery-detail';
        return view($view, [
            'frontend_helper' => $frontendHelper,
            'settings' => $settings,
            'sliders' => $sliders,
            'menus' => $menus,
            'page' => $page
        ]);

    }


    public function search(FrontendHelper $frontendHelper, Request $request)
    {
        $data = $request->all();

        $settings = GlobalSetting::where('id', 1)->first();
        $menus = Navigation::where('nav_category', 'Main')->where('parent_page_id', 0)->where('page_status', 1)->orderBy('position', 'ASC')->get();

        $searchResult = Navigation::where('nav_name', 'like', '%' . $data['s'] . '%')->orderBy('id', 'DESC')->paginate(10);

        return view('website.pages.search', [
            'frontend_helper' => $frontendHelper,
            'settings' => $settings,
            'searchResult' => $searchResult,
            'searchTitle' => $data['s'],
            'menus' => $menus
        ]);
    }





    public function contact(Request $request)
    {

        try {
            $data = $request->all();


            $error = Mail::to('shakyaavinesh@gmail.com')->send(new ContactMailer($data));

        } catch (\Throwable $e) {

            return redirect()->back()->with('error', $e->getMessage());
        }
        return redirect()->back()->with('success', 'Your request has been sent successfully. You will soon be notified.');
    }


}
