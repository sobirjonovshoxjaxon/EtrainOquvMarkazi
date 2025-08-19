@extends('admin.master')
@section('content')

            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">  
                  <div class="card-header">
                    <h4>This is Create Courses Form</h4>
                    <a href="{{ route('courses.index')}}" class="btn btn-dark">Back</a>
                  </div>
                  <div class="card-body">
                    <form action="">

                        <div class="form-group">
                            <label>Course Type</label>
                            <input type="text" class="form-control" name="course_type">
                        </div>

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

                        <div class="form-group">
                            <label>Trainer's name</label>
                            <input name="trainers_name" class="form-control"></input>
                        </div>

                        <div class="form-group">
                            <label>Course price</label>
                            <input name="course_price" class="form-control"></input>
                        </div>

                        <div class="form-group">
                            <label>Available seats</label>
                            <input name="available_seats" class="form-control"></input>
                        </div>

                        <div class="form-group">
                            <label>Schedule</label>
                            <input name="schedule" class="form-control"></input>
                        </div>

                        <button type="submit" class="btn btn-success">Create</button>
                        <button type="reset" class="btn btn-warning">Reset</button>
                    </form>
                </div>
            </div>

@endsection