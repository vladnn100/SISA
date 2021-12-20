@extends('layouts.navemp')

  @section('styleCSS')
  <!-- AQUI COLOCAN SU HREF A SU CSS -->
  @endsection('styleCSS')

  @section('header')
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Doctors</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="{{url('/admin')}}"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="{{url('/patient_show')}}">Patient</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Tables</li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
              <a href="{{url('doctor_create')}}" class="btn btn-sm btn-neutral">Add new Doctor</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  @endsection('header')


  @section('content')
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col">
          <div class="card">
            <!-- Card header -->
            <div class="card-header border-0">
              <h3 class="mb-0">Doctors</h3>
            </div>
            <!-- Light table -->
            <div class="table-responsive">
            {{session('msg')}}
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col" class="sort" data-sort="name">ID</th>
                    <th scope="col" class="sort" data-sort="budget">First Name</th>
                    <th scope="col" class="sort" data-sort="status">Last Name</th>
                    <th scope="col">	Date of Birth</th>
                    <th scope="col">	Gender</th>
                    <th scope="col">	Speciality</th>
                    <th scope="col">	Contact</th>
                    <th scope="col">	E-mail	</th>
                    <th scope="col">	Address</th>
                    <th scope="col">	Actions</th>
                  </tr>
                </thead>
                <tbody class="list">
                  @foreach($doctroarr as $doctor)
                      <tr>
                      <td>{{$doctor->id}}</td>
                      <td>{{$doctor->fname}}</td>
                      <td>{{$doctor->lname}}</td>
                      <td>{{$doctor->date_of_birth}}</td>
                      <td>{{$doctor->gender}}</td>
                      <td>{{$doctor->speciality}}</td>
                      <td>{{$doctor->phone_number}}</td>
                      <td>{{$doctor->email}}</td>
                      <td>{{$doctor->address}}</td>
                      <td>
                      <a class="btn btn-sm btn-danger"  href="doctor_delete/{{$doctor->id}}">Delete</a>
                      <a class="btn btn-sm btn-neutral" href="doctor_update/{{$doctor->id}}">Edit</a>
                      </td>
                      </tr>
                    @endforeach 
                  </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  @endsection('content')

            
           
      
