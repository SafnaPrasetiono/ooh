<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\loker;
use App\Models\proposal;
use App\Models\User;
use App\Models\users_validation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class lokerAdmin extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.loker.data');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.loker.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title'        => 'required',
            'type'  => 'required',
            'description'      => 'required',
            'content'      => 'required',
            'date_start'      => 'required',
            'date_end'      => 'required',
            'images'       => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ], [
            'title.required'        => 'Please input field title news',
            'type.required'  => 'Please input job type',
            'description.required'      => 'Please input description job',
            'content.required'      => 'Please input content job',
            'date_start.required'      => 'Please input date post job',
            'date_end.required'      => 'Please input end date post job',
            'images.required'       => 'Please upload images',
            'images.image'          => 'File is not images',
            'images.mimes'          => 'File must be images',
            'images.max'            => 'File images oversized',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            // slug from title
            $slug = str::slug($request->title);
            $resorce = $request->images;
            $OriginNameFiles = $resorce->getClientOriginalName();
            $NewNameImages = "IMG-" . substr(md5($OriginNameFiles . date("YmdHis")), 0, 14);
            $NameImages = $NewNameImages . "." . $resorce->getClientOriginalExtension();
            loker::create([
                'title' => $request->title,
                'slug' => $slug,
                'type' => $request->type,
                'description' => $request->description,
                'content' => $request->content,
                'date_start' => $request->date_start,
                'date_end' => $request->date_end,
                'images' => $NameImages,
            ]);
            $resorce->move(public_path() . "/images/loker/", $NameImages);
            return redirect()->route('admin.loker')->with('success', 'news data saved successfully');
            try {
            } catch (\Throwable $th) {
                return redirect()->back()->with('error', 'sorry database is busy try again letter');
            }
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
        $data = loker::find($id);
        return view('admin.loker.detail', [
            'data' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = loker::find($id);
        return view('admin.loker.edit', [
            'data' => $data
        ]);
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
        $validator = Validator::make($request->all(), [
            'title'        => 'required',
            'type'  => 'required',
            'description'      => 'required',
            'content'      => 'required',
            'date_start'      => 'required',
            'date_end'      => 'required',
        ], [
            'title.required'        => 'Please input field title news',
            'type.required'  => 'Please input type job',
            'description.required'      => 'Please input description job',
            'content.required'      => 'Please input content job',
            'date_start.required'      => 'Please input date post job',
            'date_end.required'      => 'Please input end date post job',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            // slug from title
            $slug = str::slug($request->title);

            if ($request->images) {
                $imgValid = Validator::make($request->all(), [
                    'images'       => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                ], [
                    'images.required'       => 'Please upload images',
                    'images.image'          => 'File is not images',
                    'images.mimes'          => 'File must be images',
                    'images.max'            => 'File images oversized',
                ]);
                if($imgValid->fails()){
                    return redirect()->back()->withErrors($validator)->withInput();
                } else {
                    $resorce = $request->images;
                    $OriginNameFiles = $resorce->getClientOriginalName();
                    $NewNameImages = "IMG-" . substr(md5($OriginNameFiles . date("YmdHis")), 0, 14);
                    $NameImages = $NewNameImages . "." . $resorce->getClientOriginalExtension();
                    try {
                        loker::find($id)->update([
                            'title' => $request->title,
                            'slug' => $slug,
                            'type' => $request->type,
                            'description' => $request->description,
                            'content' => $request->content,
                            'date_start' => $request->date_start,
                            'date_end' => $request->date_end,
                            'images' => $NameImages,
                        ]);
                        $resorce->move(public_path() . "/images/loker/", $NameImages);
                        return redirect()->route('admin.loker')->with('success', 'Data loker telah terupdate');
                    } catch (\Throwable $th) {
                        return redirect()->back()->with('error', 'sorry database is busy try again letter');
                    }
                }
            } else {
                try {
                    loker::find($id)->update([
                        'title' => $request->title,
                        'slug' => $slug,
                        'type' => $request->type,
                        'description' => $request->description,
                        'content' => $request->content,
                        'date_start' => $request->date_start,
                        'date_end' => $request->date_end,
                    ]);
                    return redirect()->route('admin.loker')->with('success', 'Data loker telah terupdate');
                } catch (\Throwable $th) {
                    return redirect()->back()->with('error', 'sorry database is busy try again letter');
                }
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function proposalDetail($id)
    // {
    //     $data = proposal::find($id);
    //     $loker = loker::find($data->id_lokers);
    //     $user = User::find($data->id_users);
    //     $userPublic = users_validation::where('id_users', $data->id_users)->first();
    //     return view('admin.loker.proposalDetail', [
    //         'data'=> $data,
    //         'loker' => $loker,
    //         'user' => $user,
    //         'userPublic'=>$userPublic
    //     ]);
    // }
    // public function proposalPost(Request $request, $id){
    //     $data = proposal::find($id);
    //     $data->status = $request->status;
    //     $data->content = $request->content;
    //     if($data->save()){
    //         return redirect()->back()->with('success', 'Lamaran telah diinfokan ke user');
    //     }else{
    //         return redirect()->back()->with('error', 'sorry database is busy');
    //     }
    // }
}
