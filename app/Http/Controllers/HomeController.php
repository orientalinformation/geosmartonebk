<?php

namespace App\Http\Controllers;

use App\Models\Block;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class HomeController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $blocks = Block::whereStatus('ACTIVE')->orderBy('order')->get();
        return view('frontend.home.index')->with('blocks', $blocks);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function changeLocale(Request $request)
    {
        $locale = App::isLocale('fr') ? 'en' : 'fr';
        $request->session()->put('locale', $locale);
        return back();
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function datasheet()
    {
        return view('frontend.datasheet.index');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function brochure()
    {
        return view('frontend.brochure.index');
    }
}
