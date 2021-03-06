<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Activity;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;   

class ActivityController extends Controller
{
    public function __construct()
    {
        $this->activity = new Activity();
    }
    /**
     * Display a listing of the resource.   
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $activitys = Activity::all();
        return view('backend.kegiatan.index', compact('activitys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $getCode = $this->activity->generateCode();

        return view('backend.kegiatan.create',compact('getCode'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        // return view("backend.kegiatan.store");
        $activity = Activity::create($this->validateRequest());
        $this->storeImage($activity);
        return redirect()->back()->with(['success' => 'Kegiatan Berhasil Dibuat']);
    }

    private function validateRequest(){
        return tap(request()->validate([
            'code_activity' => 'required',
            'name'          => 'required',
            'date'          => 'required',
            'information'   => 'required',
            'status'        => 'required',
            'price'         => 'required',
            'images'        => 'file|image|max:5000',
            'capacity'      => 'required',
        ]), function(){
            if(request()->hasFile('images')){
                request()->validate([
                    'images'  => 'file|image|max:5000',
                ]);
            }
        });  
    }
    private function storeImage($activity){
        if(request()->has('images')){
            $activity->update([
                'images' =>request()->images->store('uploads','public'),
            ]);
            $image = Image::make(public_path('storage/'. $activity->images))->fit(300,300, null,'top-left');
            $image->save();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $activity = Activity::findOrFail($id);

        return view('backend.kegiatan.edit', compact('activity'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */ 

    public function update(Activity $activity)
    {
        
    $activity -> update($this->validateRequest());
    $this->storeImage($activity);
    return redirect()->back()->with(['success' => 'Berhasil diUpdate']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Activity $activity)
    {
        $activity->delete();

        if(\File::exists(public_path('storage/'. $activity->images))){
            \File::delete(public_path('storage/'. $activity->images));
        }

        return redirect()->back()->with(['success' => 'Kegiatan berhasil di hapus']);
    }
}