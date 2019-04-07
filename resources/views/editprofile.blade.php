@extends('layouts.app')
@section('content')

<div class="container">
    <h1>my profile</h1>
    <h2>{{ $user->name }}</h2>
    <button type="button" class="btn btn-primary">Primary</button>
</div>    
<div class="container">
        <h2>Horizontal form</h2>
        <form class="form-horizontal" method="post">
                {{ csrf_field() }}
          <div class="form-group">
            <label class="control-label col-sm-2" for="name">Name:</label>
            <div class="col-sm-10">
              <input type="name" class="form-control" id="name" placeholder="Enter name" name="name" value="{{ $user->name }}">
            </div>
          </div>
          <div class="form-group">        
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-default">Submit</button>
            </div>
          </div>
        </form>
      </div>
@endsection
