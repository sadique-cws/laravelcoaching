@extends('homepage.base')


@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-3">
                <div class="card">
                    <img src="{{asset('upload/'. $student->dp)}}" alt="" class="card-img-top">
                    <div class="card-body">
                        <h2 class="h4">{{$student->name}}</h2>
                    </div>
                        <table class="table-bordered table">
                            <tr>
                                <th>Gender</th>
                                <td>{{$student->gender}}</td>
                            </tr>
                            <tr>
                                <th>contact</th>
                                <td>{{$student->contact}}</td>
                            </tr>
                            <tr>
                                <th>nationality</th>
                                <td>{{$student->nationality}}</td>
                            </tr>
                            <tr>
                                <th>dob</th>
                                <td>{{$student->dob}}</td>
                            </tr>
                            <tr>
                                <th>school_name</th>
                                <td>{{$student->school_name}}</td>
                            </tr>
                            <tr>
                                <th>skills</th>
                                <td>{{$student->skills}}</td>
                            </tr>
                            <tr>
                                <th>email</th>
                                <td>{{$student->email}}</td>
                            </tr>
                        </table>
                   
                </div>
            </div>
            <div class="col-lg-9">
                <div class="container p-4 bg-light text-dark">
                    <h2 class="display-4">Welcome in Student Portal</h2>
                    <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, optio sed deserunt consequuntur adipisci iure molestiae provident similique iste maxime dolorum accusamus excepturi modi repellendus neque nostrum quasi odio ut!</p>
                </div>
            </div>
        </div>
    </div>
@endsection