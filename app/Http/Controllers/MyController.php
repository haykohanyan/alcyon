<?php

namespace App\Http\Controllers;

use App\Models\About\Our_clients;
use App\Models\About\Result;
use App\Models\About\Timeline;
use App\Models\About\wcu_skill;
use App\Models\About\What_people_say;
use App\Models\About\Why_choose_us;
use App\Models\Gallery\Cat;
use App\Models\Gallery\Image;
use App\Models\Main\Our_partners;
use App\Models\Main\Slider;
use App\Models\Main\Team;
use App\Models\Main\Years_of_exp;
use App\Models\Pictures;
use App\Models\Portfolio\Category;
use App\Models\Portfolio\Work;
use App\Models\Services\Services;
use App\Models\Text;
use Illuminate\Http\Request;

class MyController extends Controller
{
public  function index(){
    $pictures = Pictures::query()->get();
    $main_slides = Slider::query()->get();
    $years = Years_of_exp::query()->get();
    $our_partners = Our_partners::query()->get();
    $teams = Team::query()->get();
    $texts = Text::query()->get();
    $recents = Work::query()->orderBy('id', 'desc')->limit(4)->get();

    return view('index',compact('main_slides','years','our_partners','teams','recents','pictures','texts'));
}
    public  function about(){
        $why_choose_uses=Why_choose_us::query()->get();
        $pictures = Pictures::query()->get();
        $wcus= wcu_skill::query()->get();
        $texts = Text::query()->get();
        $results = Result::query()->get();
        $wpses = What_people_say::query()->get();
        $timelines=Timeline::query()->get();
        $our_clients=Our_clients::query()->get();
        return view('about',compact('why_choose_uses','wcus','our_clients','timelines','results','wpses','pictures','texts'));
    }
    public  function services(){
        $services = Services::query()->get();
        $pictures = Pictures::query()->get();
        $texts = Text::query()->get();
        return view('services',compact('services','pictures','texts'));
    }
    public  function portfolio(){
        $works=Work::query()->get();
        $categories=Category::query()->get();
        $pictures = Pictures::query()->get();
        $texts = Text::query()->get();
        return view('portfolio',compact('works','categories','pictures','texts'));
    }
    public  function gallery(){
        $images=Image::query()->get();
        $pictures = Pictures::query()->get();
        $cats=Cat::query()->get();
        $texts = Text::query()->get();
        return view('gallery',compact('images','cats','pictures','texts'));
    }

}
