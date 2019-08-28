@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Add Item
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('members.edit',$members1->id) }}">
          <div class="form-group">
              @csrf
              <label for="fname">First Name:</label>
              <input type="text" class="form-control" name="fname" value='{{$members1->fname}}'/>
          </div>
          <div class="form-group">
              <label for="lname">Last Name:</label>
              <input type="text" class="form-control" name="lname" value='{{$members1->lname}}'/>
          </div>
          <div class="form-group">
              <label for="email">Email Address:</label>
              <input type="text" class="form-control" name="email" value='{{$members1->email}}'/>
          </div>
          <div class="form-group">
              <label for="address">Address:</label>
              <input type="text" class="form-control" name="address" value='{{$members1->address}}'/>
          </div>
          <div class="form-group">
          <label for="dob">Date of Birth:</label>
              <div class="input-group-prepend">
                <span class="input-group-text">yyyy/mm/dd</span>
              </div>
              <input type="text" class="form-control" name="dob" value='{{$members1->dob}}'/>
          </div>
          <div class="form-group">
              <label for="phone">Phone Number:</label>
              <input type="number" class="form-control" name="tp" value='{{$members1->tp}}'/>
          </div>
          <div class="form-group">
              <input type="radio" name="membership" value="annual" {{$members1->membership=='annual' ? 'checked' : ''}}/>
              <label for="memb">Annual Membership</label>

              <input type="radio" name="membership" value="monthly" {{$members1->membership=='monthly' ? 'checked' : ''}}/>
              <label for="memb">Monthly Membership</label>
              
          </div>
          <button type="submit" class="btn btn-primary">Update Member</button>
      </form>
  </div>
</div>
@endsection