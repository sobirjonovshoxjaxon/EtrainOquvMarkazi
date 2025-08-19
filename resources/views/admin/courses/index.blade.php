@extends('admin.master')
@section('content')

            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Courses Table</h4>
                    <a href="{{ route('courses.create')}}" class="btn btn-success">Create</a>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered table-md">
                        <tr>
                          <th>T/R</th>
                          <th>Course Type</th>
                          <th>Title</th>
                          <th>Image</th>
                          <th>Description</th>
                          <th>Trainer's name</th>
                          <th>Course Price</th>
                          <th>Available seats</th>
                          <th>Schedule</th>
                          <th colspan="3">Action</th>
                        </tr>
                        <tr>
                          <td>1</td>
                          <td>Web design</td>
                          <td>Web UX/UI Design</td>
                          <td>Image</td>
                          <td>Lorem Text are who are you ?</td>
                          <td>Mr John</td>
                          <td>220$</td>
                          <td>available 15 seats</td>
                          <td>2.00 pm to 4.00 pm</td>
                          <td>
                            <a href="" class="btn btn-primary">Show</a>
                          </td>
                          <td>
                            <a href="" class="btn btn-warning">Edit</a>
                          </td>
                          <td>
                            <a href="" class="btn btn-danger">Delete</a>
                          </td>
                        </tr>
                      </table>
                    </div>
                  </div>
                  <div class="card-footer text-right">
                    <nav class="d-inline-block">
                      <ul class="pagination mb-0">
                        <li class="page-item disabled">
                          <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1 <span
                              class="sr-only">(current)</span></a></li>
                        <li class="page-item">
                          <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                          <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                        </li>
                      </ul>
                    </nav>
                  </div>
                </div>
            </div>

@endsection