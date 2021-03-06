<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\whoAre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Str;

class WhoAreController extends Controller
{


    protected $model ;
    protected $image;
    protected $viewsDomain = 'admin/who_are.';
    protected $url = 'admin/who-are';
    public function __construct()
    {
        $this->model = new whoAre();
        $this->image = new Image();

    }
    public function view($view, $params = [])
    {
        return view($this->viewsDomain . $view, $params);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {


        $records = $this->model->where(function ($q) use ($request) {
            if ($request->id) {
                $q->where('id', $request->id);
            }
            if ($request->name) {
                $q->where(function ($q) use ($request) {
                    $q->where('name', 'LIKE', '%' . $request->name . '%');
                });
            }

        })->paginate();
        return $this->view('index',compact('records'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = $this->model;
        $images = $this->image;

        return $this->view('create',compact('model','images'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $rules =
            [

                'message' => 'required',
                'name' => 'required',

                'url_video' => 'required',



            ];

        $error_sms =
            [

                'message.required' => 'الرجاء ادخال الرساله ',
                'name.required' => 'الرجاء ادخال اسم الرسالة ',

                'url_video.required' => 'الرجاء ادخال رابط الفيديو ',


            ];

        $data = validator()->make($request->all(), $rules, $error_sms);

        if ($data->fails()) {
            return back()->withInput()->withErrors($data->errors());
        }

        $record = $this->model->create($request->except('image'));
        if ($request->hasfile('image')) {

            $files= $request->file('image');
            foreach($files as $file){






                $name = $file->getClientOriginalName();
                $name = Str::random(40) . '.' . pathinfo($name, PATHINFO_EXTENSION);
                $new = $file->storeAs('Accessories/WhoAre', $name, 'upload_attachments');



                $images= new Image();
                $images->filename = $name;

                $record->image()->save($images);



            }
        }

        session()->flash('success', 'تمت الاضافة بنجاح');
        return redirect($this->url);
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
        $logPath = public_path('logs/customTest-' . (new \DateTime)->format('Y-m-d-H-i') . '-00-00.log');

        $model = $this->model->findOrFail($id);
        $images= $this->image;
        return $this->view('edit',compact('model','images'));
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

        $rules =
            [

                'message' => 'required',
                'name' => 'required',

                'url_video' => 'required',



            ];

        $error_sms =
            [

                'message.required' => 'الرجاء ادخال الرساله ',
                'name.required' => 'الرجاء ادخال اسم الرسالة ',

                'url_video.required' => 'الرجاء ادخال رابط الفيديو ',


            ];

        $data = validator()->make($request->all(), $rules, $error_sms);

        if ($data->fails()) {
            return back()->withInput()->withErrors($data->errors());
        }

        $record = $this->model->findOrFail($id);



        $record->update($request->except('image'));
        if ($request->hasfile('image')) {

            $files= $request->file('image');
            foreach($files as $file){






                $name = $file->getClientOriginalName();
                $name = Str::random(40) . '.' . pathinfo($name, PATHINFO_EXTENSION);

                $file->storeAs('Accessories/WhoAre', $name, 'upload_attachments');



                $images= new Image();
                $images->filename = $name;
                $record->image()->save($images);



            }

        }
        session()->flash('success', 'تمت تحديث بنجاح');
        return redirect($this->url);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $record = $this->model->findOrFail($id);

        $record->delete();

        $data = [
            'status' => 1,
            'message' => 'تم الحذف بنجاح',
            'id' => $id
        ];
        $images =   Image::where('imagable_id',$record->id)->get();
        foreach($images as $image){



            File::delete(public_path('Accessories/WhoAre/'.$image->filename));
        }


        $images =   Image::where('imagable_id',$record->id)->delete();
        return Response::json($data, 200);


    }

    public function getAttachment($id){
        $images =   Image::where('imagable_id',$id)->get();
        $details = whoAre::where('id',$id)->get();
        return $this->view('show',compact('images','details'));
    }



    public function editAttachment($id){
        $image = Image::where('id',$id)->first();
        $data = [
            'status' => 1,
            'message' => 'تم الحذف بنجاح',
            'id' => $id
        ];
        File::delete(public_path('Accessories/WhoAre/'.$image->filename));
        $image->delete();
        return Response::json($data, 200);




    }


    public function deleteAttachment($id){

       $whoare = whoAre::where('id',$id);
       $whoare->update(['url_video'=>Null,]);

        $data = [
            'status' => 1,
            'message' => 'تم الحذف بنجاح',
            'id' => $id
        ];


        return Response::json($data, 200);





    }


}
