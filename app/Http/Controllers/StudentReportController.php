<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Report;
use App\User;
use DB;
use Auth;

class StudentReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $reports = Report::latest('report_id')->where('apart_num', 'like', 'M1-06-01')->get();
        //$reports = Report::latest('report_id')->where('apart_num', 'like', 'M1-06-01')->get();
        return view('reports.studindex', compact('reports'));

    }

    public function studhome()
    {

        $reports = Report::latest('report_id')->get();
        
        return view('reports.studhome', compact('reports'));

    }

    public function staffindex(Request $request)
    {
        $reports = Report::latest('report_id')->where('status', 'like', 'Reported')->get();
        
        return view('reports.staffindex', compact('reports'));

    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
        return view('reports.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {        
        $report = new Report;
        $report->report_type =  $request->report_type;
        $report->apart_num = $request->apart_num;
        $report->student_name = $request->student_name;
        $report->user_id = Auth::user()->user_id;
        $report->phone_no = $request->phone_no;
        $report->sub_of_rep = $request->sub_of_rep;
        $report->des_of_rep = $request->des_of_rep;

        

        if($request->exists('attachment')) {
            // $request->validate([
            //     'attachment' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            // ]);
            if(request()->attachment->getClientOriginalExtension() == 'jpeg' || request()->attachment->getClientOriginalExtension() == 'png' || request()->attachment->getClientOriginalExtension() == 'gif' || request()->attachment->getClientOriginalExtension() == 'mp4' || request()->attachment->getClientOriginalExtension() == 'jpg')
            {
                $attachment = $request->student_name . "-report-" . time() . '.' . request()->attachment->getClientOriginalExtension();
                $request->attachment->storeAs('attachment', $attachment);
                $report->attachment = $attachment;
            }
            else{
                return back()->withInput()->with('error', 'The format of the file you uploaded is not valid');
            }
        }

        $report->save();

    
        return redirect('studentreport/index')->with('success', 'Report saved!');
    }

    public function studhistory()
    {

        $reports = Report::all()->where('user_id', Auth::user()->user_id);
        
        return view('reports.studhistory', compact('reports'));

    }

    public function staffhistory()
    {

        $reports = Report::all();
        
        return view('reports.staffhistory', compact('reports'));

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

    public function edit($report_id)
    {
        $report = Report::find($report_id);
        return view('reports.edit',  compact('report'));        
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $report_id
     * @return \Illuminate\Http\Response
     */
    public function ackreport(Request $request)
    {
        
        $report = Report::find($request ->report_id);
        $report->report_id =  $request->report_id;
        $report->report_type =  $request->report_type;
        $report->apart_num = $request->apart_num;
        $report->student_name = $request->student_name;
        $report->phone_no = $request->phone_no;
        $report->sub_of_rep = $request->sub_of_rep;
        $report->des_of_rep = $request->des_of_rep;
        $report->report_receive = $request->report_receive;
        $report->status = $request->status;
        $report->save();

        return redirect('/staffreport/index')->with('success', 'Report updated!');
    }

    public function update(Request $request)
    {
        $reports = Report::latest('report_id')->where('status', 'like', 'In Progress')->get();
        return view('reports.update',  compact('reports'));
    }

    public function updatestatus($report_id)
    {
        $report = Report::find($report_id);
        return view('reports.updatestatus',  compact('report'));        
    }


    public function updaterep(Request $request)
    {
        
        $report = Report::find($request ->report_id);
        $report->status = $request->status;
        $report->save();

        return redirect('staffreport/update')->with('success', 'Status updated!');
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        $reports = Report::latest('report_id')->where('apart_num', 'like', '%'.$search.'%')->paginate(5);
        $reports -> appends($request->all());
        return view('reports.staffhistory',compact('reports'));
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
