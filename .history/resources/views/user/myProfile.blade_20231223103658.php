@extends('admin.index')
@section('content')


      <main id="main" class="main">

        <div class="pagetitle">
          <h1>Profile</h1>
          <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item">Users</li>
              <li class="breadcrumb-item active">Profile</li>
            </ol>
          </nav>
        </div><!-- End Page Title -->
    
        <section class="section profile">
          <div class="row">
            <div class="col-xl-4">
    
              <div class="card">
                <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                    @if (Auth::check())
                    @if (Auth::user()->media)
                        <!-- Assuming 'path' is the column in your media table storing the image path -->
                        <img src="{{ asset('images/' . Auth::user()->media->profileImage) }}" alt="Profile Image"style="height: 130px; width: 100px;">
                    @else
                        <!-- Default image or placeholder if the user has no profile image -->
                        <img src="{{ asset('path/to/default-image.jpg') }}" alt="Default Profile Image">
                    @endif
                @endif
                  {{-- <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle"> --}}
                  <h2>{{Auth::user()->name}}</h2>
                  <h3>{{Auth::user()->email}}</h3>
                  <div class="social-links mt-2">
                    <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                    <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
              </div>
    
            </div>
    
            <div class="col-xl-8">
    
              <div class="card">
                <div class="card-body pt-3">
                  <!-- Bordered Tabs -->
                  <ul class="nav nav-tabs nav-tabs-bordered">
    
                    <li class="nav-item">
                      <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                    </li>
    
                    <li class="nav-item">
                      <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Update Resume</button>
                    </li>
    
                  </ul>
                  <div class="tab-content pt-2">
    
                    <div class="tab-pane fade show active profile-overview" id="profile-overview">
                      {{-- <h5 class="card-title">About</h5> --}}
                      {{-- <p class="small fst-italic">Sunt est soluta temporibus accusantium neque nam maiores cumque temporibus. Tempora libero non est unde veniam est qui dolor. Ut sunt iure rerum quae quisquam autem eveniet perspiciatis odit. Fuga sequi sed ea saepe at unde.</p> --}}
    
                      <h5 class="card-title">Profile Details</h5>
    
                      <div class="row">
                        <div class="col-lg-3 col-md-4 label">User Name</div>
                        <div class="col-lg-9 col-md-8">{{$user->name}}</div>
                      </div>
    
                      <div class="row">
                        <div class="col-lg-3 col-md-4 label">Email</div>
                        <div class="col-lg-9 col-md-8">{{$user->email}}</div>
                      </div>
    
                      <div class="row">
                        <div class="col-lg-3 col-md-4 label">Contact</div>
                        <div class="col-lg-9 col-md-8">{{$user->contact}}</div>
                      </div>
    
                      <div class="row">
                        <div class="col-lg-3 col-md-4 label">Address</div>
                        <div class="col-lg-9 col-md-8">{{$user->address}}</div>
                      </div>
    
                      <div class="row">
                        <div class="col-lg-3 col-md-4 label">Skills:</div>
                        <div class="col-lg-9 col-md-8">{{$user->skills}}</div>
                      </div>
    
                      <div class="row">
                        <div class="col-lg-3 col-md-4 label">Experience</div>
                        <div class="col-lg-9 col-md-8">{{$user->experience}}</div>
                      </div>
                      <div class="row">
                        <div class="col-lg-3 col-md-4 label">Degree/Year/GPA</div>
                        <div class="col-lg-9 col-md-8">{{$user->degree}}/{{$user->gYear}}/{{$user->gpa}}</div>
                      </div>
                      <div class="row">
                        <div class="col-lg-3 col-md-4 label">UserType</div>
                        <div class="col-lg-9 col-md-8"><span class="badge rounded-pill bg-success">{{$user->usertype}}</span></div>
                      </div>
    
                    </div>
    
                    <div class="tab-pane fade profile-edit pt-3" id="profile-edit">
    
                      <!-- Profile Edit Form -->
                      <form>
                        <div class="row mb-3">
                          <!-- Your HTML code for the file input and label -->
                          <label for="resume">Resume:</label>
                          <div class="input-group">
                              <div class="custom-file">
                                  <input type="file" id="resume" name="resume" class="custom-file-input">
                                  <label class="custom-file-label" for="resume">No file chosen</label>
                              </div>
                              <div class="input-group-append">
                                  <span class="input-group-text" id="file-label">{{ Auth::user()->media->resume }}</span>
                              </div>
                          </div>

                        </div>    
                        <div class="text-center">
                          <button type="submit" class="btn btn-primary">Save Changes</button>
                        </div>
                      </form><!-- End Profile Edit Form -->
    
                    </div>
    
                    
    
                  </div><!-- End Bordered Tabs -->
    
                </div>
              </div>
    
            </div>
          </div>
        </section>
    
      </main>



@endsection