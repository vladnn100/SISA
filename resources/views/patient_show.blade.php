

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
              <h6 class="h2 text-white d-inline-block mb-0">Patient</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="{{url('/admin')}}"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="{{url('/doctor_show')}}">Doctor</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Patient</li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
              <a href="{{url('patient_create')}}" class="btn btn-sm btn-neutral">Add new Patient</a>
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
              <h3 class="mb-0">Patients</h3>
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
                    <th scope="col">	Age</th>
                    <th scope="col">	Gender</th>
                    <th scope="col">	description</th>
                    <th scope="col">	Contact</th>
                    <th scope="col">	E-mail	</th>
                    <th scope="col">	Address</th>
                    <th scope="col">	Actions</th>
                  </tr>
                </thead>
                <tbody class="list">
               
                      <tr>
                      @foreach($patient_arr as $patient)
                      <tr>
                      <td>{{$patient->id}}</td>
                      <td>{{$patient->fname}}</td>
                      <td>{{$patient->lname}}</td> 
                      <td>{{$patient->age}}</td>
                      <td>{{$patient->gender}}</td>
                      <td>{{$patient->description}}</td>
                      <td>{{$patient->phone_number}}</td>
                      <td>{{$patient->email}}</td>
                      <td>{{$patient->address}}</td>
                            <td>
                      <a class="btn btn-sm btn-danger" href="patient_delete/{{$patient->id}}">Delete</a>
                      <a class="btn btn-sm btn-neutral" href="patient_update/{{$patient->id}}">Edit</a>
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

    
    
            
           
      







<!--       
      
      
  
      {{session('msg')}}
      <a href="patient_create">Add patient</a>
      <table id="customers">
      <tr>
      <th>ID</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Contact</th>
      <th>Age</th>
      <th>Gender</th>
      <th>description</th>
      <th>E-mail</th>
      <th>Address</th>
      <th>Join at</th>
      <th>Discharge at</th>
      <th>Actions</th>
      </tr>
      @foreach($patient_arr as $patient)
      <tr>
      <td>{{$patient->id}}</td>
      <td>{{$patient->fname}}</td>
      <td>{{$patient->lname}}</td>
      <td>{{$patient->phone_number}}</td>
      <td>{{$patient->age}}</td>
      <td>{{$patient->gender}}</td>
      <td>{{$patient->description}}</td>
      <td>{{$patient->email}}</td>
      <td>{{$patient->address}}</td>
      <td>{{$patient->created_at}}</td>
      <td>{{$patient->updated_at}}</td>
      <td>
      <a href="patient_delete/{{$patient->id}}">Delete</a>
      <a href="patient_update/{{$patient->id}}">Edit</a>
      </td>
      </tr>
      @endforeach
      </table>

 -->
