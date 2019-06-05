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

class AdminController extends Controller
{
    public  function index(){
        $main_slides = Slider::query()->paginate(5, ['*'], 'slide');
        $pictures = Pictures::query()->get();
        $texts = Text::query()->get();
        $our_partners = Our_partners::query()->paginate(5, ['*'], 'partner');
        $years = Years_of_exp::query()->paginate(5, ['*'], 'year');
        $teams = Team::query()->paginate(5, ['*'], 'team');

        return view('admin.index',compact('main_slides','years','our_partners','teams','pictures','texts'));
    }
    public  function about(){
        $why_choose_uses=Why_choose_us::query()->paginate(5, ['*'], 'why_choose_use');
        $timelines=Timeline::query()->paginate(5, ['*'], 'timeline');
        $pictures = Pictures::query()->get();
        $texts = Text::query()->get();
        $results = Result::query()->paginate(5, ['*'], 'result');
        $wpses = What_people_say::query()->paginate(5, ['*'], 'wps');
        $our_clients=Our_clients::query()->paginate(5, ['*'], 'our_client');
        return view('admin.about',compact('our_clients','why_choose_uses','timelines','results','wpses','pictures','texts'));
    }
    public  function services(){
        $services = Services::query()->paginate(5, ['*'], 'service');
        $pictures = Pictures::query()->get();
        $texts = Text::query()->get();
        return view('admin.services',compact('services','pictures','texts'));
    }
    public  function portfolio(){
        $works=Work::query()->paginate(5, ['*'], 'work');
        $pictures = Pictures::query()->get();
        $texts = Text::query()->get();
        $categories=Category::query()->paginate(5, ['*'], 'category');
        return view('admin.portfolio',compact('works','categories','pictures','texts'));
    }
    public  function gallery(){
        $images=Image::query()->paginate(5, ['*'], 'image');
        $cats=Cat::query()->paginate(5, ['*'], 'cat');
        $pictures = Pictures::query()->get();
        $texts = Text::query()->get();
        return view('admin.gallery',compact('images','cats','pictures','texts'));
    }

    public  function main_slide_preview($id){

        $main_slide = Slider::query()->find($id);
        return view('admin.preview.main_slide_preview',compact('main_slide'));
    }
    public  function team_preview($id){

        $team = Team::query()->find($id);
        return view('admin.preview.team_preview',compact('team'));
    }
    public  function services_preview($id){

        $service = Services::query()->find($id);
        return view('admin.preview.services_preview',compact('service'));
    }
    public  function why_choose_use_preview($id){

        $why_choose_use = Why_choose_us::query()->find($id);
        $wcus= wcu_skill::query()->get();
        if ($id==2){
            return view('admin.preview.why_choose_use_preview2',compact('why_choose_use','wcus'));
        }
        else{
        return view('admin.preview.why_choose_use_preview',compact('why_choose_use'));
        }
    }
    public function work_preview($id)
    {
        $categories= Category::query()->get();
        $work=Work::query()->find($id);
        return view('admin.preview.work_preview',compact('work','categories'));
    }
    public function timeline_preview($id)
{
    $timeline=Timeline::query()->find($id);
    return view('admin.preview.timeline_preview',compact('timeline'));
}
    public function wps_preview($id)
    {
        $wps=What_people_say::query()->find($id);
        return view('admin.preview.wps_preview',compact('wps'));
    }

    public function image_preview($id)
    {
        $cats= Cat::query()->get();
        $image=Image::query()->find($id);
        return view('admin.preview.image_preview',compact('image','cats'));
    }
    public  function main_slide_add(){

        return view('admin.add.add_main_slide');
    }
    public  function our_clients_add(){

        return view('admin.add.add_our_clients');
    }
    public  function our_partners_add(){

        return view('admin.add.add_our_partners');
    }
    public  function team_add(){

        return view('admin.add.add_team');
    }
    public  function timeline_add(){

        return view('admin.add.add_timeline');
    }
    public  function services_add(){

        return view('admin.add.add_services');
    }
    public function add_category()
    {
        return view('admin.add.add_category');
    }
    public function add_wps()
    {
        return view('admin.add.add_wps');
    }
    public function add_work()
    {
        $categories= Category::query()->get();
        return view('admin.add.add_work',compact('categories'));
    }

    public function add_cat()
    {
        return view('admin.add.add_cat');
    }
    public function add_image()
    {
        $cats= Cat::query()->get();
        return view('admin.add.add_image',compact('cats'));
    }
}
