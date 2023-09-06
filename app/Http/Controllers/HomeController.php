<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shorturl;
use Illuminate\Support\Str;
use URL;
use Yajra\DataTables\DataTables;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $urlCount = Shorturl::count();
        return view('dashboard', compact('urlCount'));
    }
    public function url_shortner(Request $request)
    {

        if ($request->ajax()) {
      
            $urlList = Shorturl::orderBy('id', 'desc');
            return Datatables::of($urlList)
                   
                    ->addIndexColumn()
                    
                    ->addColumn('created_at', function ($row){
                        return date("d-M-Y", strtotime($row->created_at));
                    })
                    ->addColumn('short_url', function ($row){
                        return URL::to('/').'/'.$row->short_url;
                    })
                    ->addColumn('action', function($row){
                        $btn = '<button class="btn btn-sm btn-primary changetext" onclick="copyToClipboard(this,\''.URL::to('/').'/'.$row->short_url.'\');">Copy</button>';
                        return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }

        return view('url_shortner');
    }   
    public function submit_url(Request $request)
    {
        $request->validate([
            'url' => 'required|url',
            'title' => 'required',
        ]);
        $url = new Shorturl;
        $url->title = $request->title;
        $url->url = $request->url;
        $url->short_url = \Illuminate\Support\Str::random(6); 
  
        if ($url->save()) {
            return response()->json(['status' => true]);
        } else {
            return response()->json(['status' => false]);
        }
    } 
    public function redirecttosite($requrl)
    {
        $urlList = Shorturl::where('short_url', $requrl)->first();
        if($urlList){
            return redirect($urlList->url);
        }
        else{
       
        }
    }    

}
