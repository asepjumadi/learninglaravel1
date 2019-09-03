@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/p" enctype="multipart/form-data" method="post">
    @csrf
        <div class="row">
            <div class="col-8 offset-2">
                <h2>Add New Posts</h2>
                            <div class="row flex-column">
                                    <label for="caption" class="col-md-2 col-form-label text-md-left">Post Caption</label>
                                        <input id="caption"
                                        type="text"
                                        class="form-control {{$errors->has('caption')?'is-invalid':''}}"
                                        name="caption" 
                                        value="{{ old('caption') }}" 
                                        autocomplete="caption" 
                                        autofocus>

                                            @if($errors->has('caption'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('caption')}}</strong>
                                                </span>
                                            @endif
                                    
                                </div>
                                <div class="row pt-0">
                                    <label for="image" class="col-md-2 col-form-label">Post Image</label>
                                
                                        <input type="file" class="form-control-file" id="image" name="image">
                                        @if($errors->has('image'))
                                            <!-- <span class="invalid-feedback" role="alert"> -->
                                                <strong>{{ $errors->first('image')}}</strong>
                                            <!-- </span> -->
                                        @endif
                                </div>
                                <div class="row pt-3">
                                    <button class="btn btn-primary">Add New Posts</button>
                                </div>
            </div>
        </div>
    </form>
</div>
@endsection
