<div class="nav"><a class="btn btn-expanded"></a>
  <nav class="nav-main-menu">
    <ul class="main-menu">
    
    <li> <a class="dashboard2 active" href="/admin"><img src="{{asset('backend/assets/imgs/page/dashboard/dashboard.svg')}}" alt="jobBox"><span class="name">Dashboard</span></a>
      </li>
      
      <li> <a class="dashboard2" href="{{URL('all-job')}}"><img src="{{asset('backend/assets/imgs/page/dashboard/jobs.svg')}}" alt="jobBox"><span class="name">All Jobs</span></a>
      </li>
      <li> <a class="dashboard2" href="{{URL('catagories/')}}"><img src="{{asset('backend/assets/imgs/page/dashboard/folder-plus.svg')}}" alt="jobBox"><span class="name">Categories</span></a>
      </li>
      <li> <a class="dashboard2" href="{{URL('locations/')}}"><img src="{{asset('backend/assets/imgs/page/dashboard/folder-plus.svg')}}" alt="jobBox"><span class="name">Locations</span></a>
      <li> <a class="dashboard2" href="{{URL('industries/')}}"><img src="{{asset('backend/assets/imgs/page/dashboard/folder-plus.svg')}}" alt="jobBox"><span class="name">Industries</span></a>
      </li>
      <li> <a class="dashboard2" href="/all-candidates"><img src="{{asset('backend/assets/imgs/page/dashboard/candidates.svg')}}" alt="jobBox"><span class="name">Candidates</span></a>
      </li>
      <li> <a class="dashboard2" href="/all-companies"><img src="{{asset('backend/assets/imgs/page/dashboard/recruiters.svg')}}" alt="jobBox"><span class="name">Companies</span></a>
      </li>
      <li> <a class="dashboard2" href="/payments"><img src="{{asset('backend/assets/imgs/page/dashboard/credit-card.svg')}}" alt="jobBox"><span class="name">Payments</span></a>
      </li>
      <li> <a class="dashboard2" href="/profile"><img src="{{asset('backend/assets/imgs/page/dashboard/profiles.svg')}}" alt="jobBox"><span class="name">My Profiles</span></a>
      </li>
      <li> <a class="dashboard2" href="{{ route('logout') }}"><img src="{{asset('backend/assets/imgs/page/dashboard/logout.svg')}}" alt="jobBox"><span class="name">Logout</span></a>
    </ul>
  </nav>
</div>