@extends('layouts.staffapp')

@section('main')

<div class="flex-center position-ref content">
  <img height="280px" class="img-round" width="1800px" src="/img/uniten3.jpg" alt="unitenlogo">
</div>

<br><br><br>

<div class="row">
<div class="col-sm-12">
    <h1 class="display-3 center">Notices</h1>  
    <br><br>

    <div>
      <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" href={{"notice"}} role="tab">All Notices</a>
        </li>
        <li class="nav-item">
          <a class="nav-link "  href={{"addnotice"}} role="tab">Add Notice</a>
        </li>
      </ul>
    </div>

  <table class="table table-striped">
    <thead>
        <tr>
            <td>Notice ID</td>
            <td>Notice Type</td>
            <td>Description</td>
            <td colspan = 2>Delete</td>
        </tr>
    </thead>
    <tbody>
        @foreach($notices as $notice)
        <tr>
            <td>{{$notice['notice_id']}}</td>
            <td>{{$notice['notice_type']}}</td>
            <td>{{$notice['description']}}</td>
            <td>
                <form action="{{route('notices.destroy',$notice->notice_id)}}" method="post">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
    <div class="col-sm-12">

        @if(session()->get('success'))
            <div class="alert alert-success">
            {{ session()->get('success') }}  
            </div>
        @endif

    </div>

  </table>
<div>
</div>
@endsection
