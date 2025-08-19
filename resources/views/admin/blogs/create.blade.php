@extends('admin.master')
@section('content')

            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">  
                  <div class="card-header">
                    <h4>This is Create Blog Form</h4>
                    <a href="{{ route('blogs.index')}}" class="btn btn-dark">Back</a>
                  </div>
                  <div class="card-body">
                    <form action="">

                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" class="form-control" name="title">
                        </div>

                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" class="form-control" name="image">
                        </div>

                        <div class="form-group">
                            <label>Description</label>
                            <textarea name="description" class="form-control"></textarea>
                        </div>

                        <button type="submit" class="btn btn-success">Create</button>
                        <button type="reset" class="btn btn-warning">Reset</button>
                    </form>
                   
                    
                   
                    
                  
                </div>
            </div>

@endsection