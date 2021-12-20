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
              <h6 class="h2 text-white d-inline-block mb-0">Ward & Beds</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="{{url('/admin')}}"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="{{url('/doctor_show')}}">Doctor</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Ward & Beds</li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
              <a href="{{url('ward_create')}}" class="btn btn-sm btn-neutral">Add new ward</a>
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
              <h3 class="mb-0">Ward Details</h3>
            </div>
            <!-- Light table -->
            <div class="table-responsive">
            {{session('msg')}}  
            <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col" class="sort" data-sort="name">ID</th>
                    <th scope="col" class="sort" data-sort="budget">First Name</th>
                    <th scope="col" >Beds</th>
                    <th scope="col">	Actions</th>
                  </tr>
                </thead>
                <tbody class="list">
               
                      <tr>
                      @foreach($ward_arr as $ward)
                      <tr>
                      <td>{{$ward->id}}</td>
                      <td>{{$ward->ward_name}}</td>
                      <td>{{$ward->no_bed}}</td>
                      <td>
                      <a class="btn btn-sm btn-danger" href="ward_delete/{{$ward->id}}">Delete</a>
                      <a class="btn btn-sm btn-neutral" href="ward_update/{{$ward->id}}">Edit</a>
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


    
            
     


      