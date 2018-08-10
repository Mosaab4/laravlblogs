@extends('layouts.app')

@section('content')

    @include('admin.includes.errors')

    <div class="panel panel-default">
        <div class="panel-heading">
            Edit your profile
        </div>

        <div class="panel-body">
            <form action="{{ route('user.profile.update') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="user">Username </label>
                    <input type="text" value="{{ $user->name }}" name="name" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" value="{{ $user->email }}" name="email" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="password">New Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="avatar">Upload new avatar</label>
                    <input type="file" name="avatar" class="form-control">
                </div>

                <div class="form-group">
                    <label for="facebook">Facebook profile</label>
                    <input type="text" value="{{ $user->profile->facebook }}" name="facebook" class="form-control">
                </div>

                <div class="form-group">
                    <label for="youtub">Youtube channel</label>
                    <input type="text" value="{{ $user->profile->youtube }}" name="youtube" class="form-control">
                </div>

                <div class="form-group">
                    <label for="about">About you</label>                    
                    <textarea name="about" id="about" cols="6" rows="6" class="form-control">{{ $user->profile->about }}</textarea>
                </div>

                <div class="form-group">                
                    <div class="text-center">
                        <button class="btn btn-success" type="submit">
                            Update user
                        </button>    
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection