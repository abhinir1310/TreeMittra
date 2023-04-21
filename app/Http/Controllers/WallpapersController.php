<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Wallpapers;
use Redirect;

class WallpapersController extends Controller
{
    public function create(){
        return view("wallpapers.create");
    }

    public function store(Request $request){
        $request->validate([
            'name'=>'required',
            'image'=>'required',
            'thumbnail'=>'required',
            'desc'=>'required|max:500',
            'date'=>'required',
        ]);
        $wallpaper = new Wallpapers();
        $image=$request->image;
        $imagename =time().'.'.$image->getClientOriginalExtension();
        $request->image->move('wallpaper',$imagename);
        $wallpaper->image=$imagename;

        $wallpaper->name =$request->name;
        $wallpaper->date =$request->date;
        $wallpaper->desc =$request->desc;

        $image=$request->thumbnail;
        $imagename =time().'.'.$image->getClientOriginalExtension();
        $request->thumbnail->move('thumbnail',$imagename);
        $wallpaper->thumbnail=$imagename;

        $wallpaper->save();

		return Redirect::route('wallpapers.create')->with('success', __('Wallpaper Added Successfully'));

        
    }

    public function all(){
        $wallpaper=Wallpapers::all();
        return view("wallpapers.all",compact("wallpaper"));
    }

    public function destroy(Request $request, $id){
        Wallpapers::destroy(array('id',$id));
        
		return Redirect::route('wallpapers.all')->with('success', __('Wallpaper Deleted Successfully'));
        
    }

    public function edit(Request $request,$id){
        return view('wallpapers.edit')->with('wallpapers',Wallpapers::find($id));
    }

    public function update(Request $request, $id){
        $rwallpaperes=Wallpapers::find($id);
        $image=$request->input('image');
        $imagename =time().'.'.$image->getClientOriginalExtension();
            $request->image->move('wallpaper',$imagename);
            $wallpaper->image=$imagename;
            
        $image=$request->input('thumbnail');
        $imagename =time().'.'.$image->getClientOriginalExtension();
            $request->thumbnail->move('thumbnail',$imagename);
            $wallpaper->thumbnail=$imagename;

            $wallpaper->name=$request->input('name');

            $wallpaper->date=$request->input('date');

            $wallpaper->desc=$request->input('desc');

            $wallpaper->update();
            return Redirect()::back()->with('success', __('Wallpaper Updated Successfully'));
    }
}
