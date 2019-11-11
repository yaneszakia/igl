<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Planning;
use Image;
class PlanningController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('ajoutplan');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
      $a = new Planning;
      $a->grp = $request->input('grp');
      if ($request->hasFile('photo'))
        {
           $file =$request->file('photo');
           $extension = $file->getClientOriginalExtension();
        /*  $filename = time() .'.'. $extension;
        $file->move('/uploads/planning/',$filename);
          $a->photp = $filename;*/
          //$file->storeAs('public/uploads/images',$filename);
     //     Image::make($file)->resize(300, 300)->save( public_path('/uploads/planning/' . $filename ) );
        //  $photo = new Photo;
        //  $photo->filename = $filename;
      //      $photo->id_annonce=$request->annonce;
      Storage::disk('public')->put($file->getFilename().'.'.$extension,  File::get($file));
      $a->photo= $file->getFilename().'.'.$extension;

        }     
      $a->save();
    /*  if ($request->hasFile('file'))
        {

           foreach($request->file as $file)
          {
          $filename = $file->getClientOriginalName();
          //$file->storeAs('public/uploads/images',$filename);
          Image::make($file)->resize(300, 300)->save( public_path('/uploads/planning/' . $filename ) );
         /* $photo = new Photo;
          $photo->filename = $filename;
            $photo->id_annonce=$request->annonce;
             $photo->save();*/
      /*       $a = new Planning;
             $a->filename = $filename;
             $a->grp = $request->input('grp');
             $a->save();




          }

}*/
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
