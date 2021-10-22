@extends('layouts.app')
@section('content')
    <form action="{{route('contact')}}" class="col-md-6" method="post">
        {{csrf_field()}}
        
        <div class="col-md-4 form-group">
            <span>Name</span>
            <input type="text" name="name" value="{{old('name')}}" class="form-control">
            @error('name')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span>Email</span>
            <input type="text" name="email" value="{{old('email')}}"class="form-control">
            @error('email')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span>Phone</span>
            <input type="text" name="phone" value="{{old('phone')}}"class="form-control">
            @error('phone')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span>Message</span>
            <input type="text" name="message" value="{{old('message')}}"class="form-control">
            @error('message')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        
        <input type="submit" class="btn btn-primary" value="Submit" >
    </form>
@endsection