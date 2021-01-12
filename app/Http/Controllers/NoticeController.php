<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Report;
use App\User;
use App\Notice;
use DB;
use Auth;

class NoticeController extends Controller
{
    public function index(Request $request)
    {
        $notices = Notice::latest('notice_id')->get();
        return view('reports.notice', compact('notices'));

    }

    public function murni(Request $request)
    {
        $notices = Notice::latest('notice_id')->where('notice_type', 'like', 'Murni')->get();
        return view('reports.studhome', compact('notices'));

    }

    public function cendi(Request $request)
    {
        $notices = Notice::latest('notice_id')->where('notice_type', 'like', 'Cendekiawan')->get();
        return view('reports.studhomecendi', compact('notices'));

    }

    public function amanah(Request $request)
    {
        $notices = Notice::latest('notice_id')->where('notice_type', 'like', 'Amanah')->get();
        return view('reports.studhomeamanah', compact('notices'));

    }

    public function ilmu(Request $request)
    {
        $notices = Notice::latest('notice_id')->where('notice_type', 'like', 'Ilmu')->get();
        return view('reports.studhomeilmu', compact('notices'));

    }

    public function addnotice()
    {
      
        return view('reports.addnotice');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function storenotice(Request $request)
    {
        
        $notice = new Notice;
        $notice->notice_type =  $request->notice_type;
        $notice->description = $request->description;

        $notice->save();

    
        return redirect('staffreport/notice')->with('success', 'Notice posted!');
    }

    public function destroy($notice_id)
    {
        $notice = Notice::find($notice_id);
        $notice->delete();

        return redirect('staffreport/notice')->with('success','Notice deleted!');
    }
}
