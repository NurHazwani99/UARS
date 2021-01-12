@extends('layouts.staffapp') 

@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Report Details</h1>

        
        <form method="post" action="statusupdated">
            @csrf
            
            <div class="form-group">
                <label for="report_id">Report ID:</label>
                <input type="text" class="form-control" name="report_id" value="{{$report['report_id']}}">
            </div>

            <div class="form-group">
                <label for="report_type">Report Type:</label>
                <input type="text" class="form-control" name="report_type" value="{{$report['report_type']}}"/>
            </div>

            <div class="form-group">
                <label for="apart_num">Apartment Number:</label>
                <input type="text" class="form-control" name="apart_num" value="{{$report['apart_num']}}"/>
            </div>

            <div class="form-group">
                <label for="student_name">Student Name:</label>
                <input type="text" class="form-control" name="student_name" value="{{$report['student_name']}}"/>
            </div>
            <div class="form-group">
                <label for="phone_no">Phone Number:</label>
                <input type="text" class="form-control" name="phone_no" value="{{$report['phone_no']}}" />
            </div>
            <div class="form-group">
                <label for="sub_of_rep">Subjects:</label>
                <input type="text" class="form-control" name="sub_of_rep" value="{{$report['sub_of_rep']}}" />
            </div>
            <div class="form-group">
                <label for="des_of_rep">Description:</label>
                <input type="text" class="form-control" name="des_of_rep" value="{{$report['des_of_rep']}}" />
            </div>

            <div class="form-group">
                <label for="report_receive">Staff receive report:</label>
                <input type="text" class="form-control" name="report_receive" value="{{ Auth::user()->name }}" />
            </div>

            <div class="form-group">
                <label for="status">Status:</label>
                <select id="status" name="status" class="form-control">
                    @if ($report->status == '')
                        <option value="">Select Report Type</option>
                    @else
                        <option value="{{$report->status}}">{{$report->status}}</option>
                    @endif
                    @if($report->status == 'In Progress')
                        <option value="Completed">Completed</option>
                    @elseif($report->status == 'Reported')
                        <option value="In Progress">In Progress</option>
                    @else
                        <option value="In Progress">In Progress</option>
                        <option value="Completed">Completed</option>
                    @endif
                </select>
            </div>

            <div class="form-group">
                <label for="attachment">Attachment:</label>
                <br>
                <img height="180px" alt="Attachment" src="/storage/attachment/{{$report['attachment']}}" />
            </div>

            <style>
                .dropdown {
                position: relative;
                display: inline-block;
                }

                .dropdown-content {
                display: none;
                position: absolute;
                background-color: #f9f9f9;
                min-width: 160px;
                box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                padding: 12px 16px;
                z-index: 1;
                }

                .dropdown:hover .dropdown-content {
                display: block;
                }
            </style>

                

                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
@endsection
