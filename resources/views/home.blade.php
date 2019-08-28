@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    You are logged in!

                    @if ($success)
                        <div class="alert alert-success" role="alert">
                        Member Updated!
                        </div>
                    @endif
                 
                </div>
            </div>
        </div>
    </div>
</div>


<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Email</th>
            <th scope="col">Membership</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
    @foreach ($memberfiles as $memfile):
        <tr>
        <td> {{$memfile->fname}} </td>
        <td> {{$memfile->lname}} </td>           
        <td> {{$memfile->email}} </td>
        <td> {{$memfile->membership}} </td>
        <td> <a class="nav-link" href="edit/{{ $memfile->id }}">{{ __('EDIT') }}</a></td>
        </tr>
    @endforeach
    </tbody>
</table>
{{ $memberfiles->links() }}
@endsection
