@extends('frontend.layouts.app')

@section('title','Home Page')

@section('content')
{{-- <main class="main">
  <section class="section-box">
    <div class="banner-hero hero-2">
      <div class="banner-inner">
        <div class="block-banner">
          <h1 class="text-42 color-white wow animate__animated animate__fadeInUp">The #1 <span class="color-green">Job Board for</span><br class="d-none d-lg-block">Hiring or Find your next job</h1>
          <div class="font-lg font-regular color-white mt-20 wow animate__animated animate__fadeInUp" data-wow-delay=".1s">Each month, more than 3 million job seekers turn to website in their search for work, making over 140,000 applications every single day</div>
          <div class="form-find mt-40 wow animate__animated animate__fadeIn" data-wow-delay=".2s">
            <form>
              <div class="box-industry">
                <select class="form-input mr-10 select-active input-industry" name="industry">
                  <option value="0">Industry</option>
                  @foreach($industries as $item)
                  <option value="{{$item->id}}" {{old('industry')==$item->id?'selected':''}}>{{$item->name}}</option>
                  @endforeach
                </select>
              </div>
              <select class="form-input mr-10 select-active" name="location">
                <option value="">Location</option>
                @foreach($locations as $item)
                <option value="{{$item->id}}" {{old('location')==$item->id?'selected':''}}>{{$item->name}}</option>
                @endforeach
              </select>
              <input class="form-input input-keysearch mr-10" type="text" placeholder="Your keyword... ">
              <button class="btn btn-default btn-find font-sm">Search</button>
            </form>
          </div>
          <div class="list-tags-banner mt-20 wow animate__animated animate__fadeInUp" data-wow-delay=".3s"><strong>Popular Searches:</strong><a href="#">Designer</a>, <a href="#">Web</a>, <a href="#">IOS</a>, <a href="#">Developer</a>, <a href="#">PHP</a>, <a href="#">Senior</a>, <a href="#">Engineer</a></div>
        </div>
        <div class="mt-60">
          <div class="row">
            <div class="col-lg-3 col-sm-3 col-6 text-center mb-20">
              <div class="d-inline-block text-start">
                <h4 class="color-white"> <span class="count">265</span><span> K+</span></h4>
                <p class="font-sm color-text-mutted">Daily Jobs Posted</p>
              </div>
            </div>
            <div class="col-lg-3 col-sm-3 col-6 text-center mb-20">
              <div class="d-inline-block text-start">
                <h4 class="color-white"><span class="count">17</span><span> K+</span></h4>
                <p class="font-sm color-text-mutted">Recruiters</p>
              </div>
            </div>
            <div class="col-lg-3 col-sm-3 col-6 text-center mb-20">
              <div class="d-inline-block text-start">
                <h4 class="color-white"> <span class="count">15</span><span> K+</span></h4>
                <p class="font-sm color-text-mutted">Freelancers</p>
              </div>
            </div>
            <div class="col-lg-3 col-sm-3 col-6 text-center mb-20">
              <div class="d-inline-block text-start">
                <h4 class="color-white"> <span class="count">28</span><span> K+</span></h4>
                <p class="font-sm color-text-mutted">Blog Tips</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="list-brands mt-40 mb-30">
        <div class="box-swiper">
          <div class="swiper-container swiper-group-9 swiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide"><a href="#"><img src="assets/imgs/slider/logo/microsoft.svg" alt="jobBox"></a></div>
              <div class="swiper-slide"><a href="#"><img src="assets/imgs/slider/logo/sony.svg" alt="jobBox"></a></div>
              <div class="swiper-slide"><a href="#"><img src="assets/imgs/slider/logo/acer.svg" alt="jobBox"></a></div>
              <div class="swiper-slide"><a href="#"><img src="assets/imgs/slider/logo/nokia.svg" alt="jobBox"></a></div>
              <div class="swiper-slide"><a href="#"><img src="assets/imgs/slider/logo/assus.svg" alt="jobBox"></a></div>
              <div class="swiper-slide"><a href="#"><img src="assets/imgs/slider/logo/casio.svg" alt="jobBox"></a></div>
              <div class="swiper-slide"><a href="#"><img src="assets/imgs/slider/logo/dell.svg" alt="jobBox"></a></div>
              <div class="swiper-slide"><a href="#"><img src="assets/imgs/slider/logo/panasonic.svg" alt="jobBox"></a></div>
              <div class="swiper-slide"><a href="#"><img src="assets/imgs/slider/logo/vaio.svg" alt="jobBox"></a></div>
              <div class="swiper-slide"><a href="#"><img src="assets/imgs/slider/logo/sharp.svg" alt="jobBox"></a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="section-box mt-30">
    <div class="container">
      <div class="text-start">
        <h2 class="section-title mb-10 wow animate__animated animate__fadeInUp">Jobs of the day</h2>
        <p class="font-lg color-text-paragraph-2 wow animate__animated animate__fadeInUp">Search and connect with the right candidates faster.</p>
        <div class="list-tabs mt-40">
          <ul class="nav nav-tabs" role="tablist">
            <li><a class="active" id="nav-tab-job-1" href="#tab-job-1" data-bs-toggle="tab" role="tab" aria-controls="tab-job-1" aria-selected="true"><img src="assets/imgs/page/homepage1/management.svg" alt="jobBox"> Management</a></li>
            <li><a id="nav-tab-job-2" href="#tab-job-2" data-bs-toggle="tab" role="tab" aria-controls="tab-job-2" aria-selected="false"><img src="assets/imgs/page/homepage1/marketing.svg" alt="jobBox"> Marketing &amp; Sale</a></li>
            <li><a id="nav-tab-job-3" href="#tab-job-3" data-bs-toggle="tab" role="tab" aria-controls="tab-job-3" aria-selected="false"><img src="assets/imgs/page/homepage1/finance.svg" alt="jobBox"> Finance</a></li>
            <li><a id="nav-tab-job-4" href="#tab-job-4" data-bs-toggle="tab" role="tab" aria-controls="tab-job-4" aria-selected="false"><img src="assets/imgs/page/homepage1/human.svg" alt="jobBox"> Human Resource</a></li>
            <li><a id="nav-tab-job-5" href="#tab-job-5" data-bs-toggle="tab" role="tab" aria-controls="tab-job-5" aria-selected="false"><img src="assets/imgs/page/homepage1/retail.svg" alt="jobBox"> Retail &amp; Products</a></li>
            <li><a id="nav-tab-job-6" href="#tab-job-6" data-bs-toggle="tab" role="tab" aria-controls="tab-job-6" aria-selected="false"><img src="assets/imgs/page/homepage1/content.svg" alt="jobBox"> Content Writer</a></li>
          </ul>
        </div>
      </div>
      <div class="mt-50">
        <div class="tab-content" id="myTabContent-1">
          <div class="tab-pane fade show active" id="tab-job-1" role="tabpanel" aria-labelledby="tab-job-1">
            <div class="row">
              @foreach($jobs as $item)
              <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="card-grid-2 grid-bd-16 hover-up">
                  <div class="card-grid-2-image"><span class="lbl-hot bg-green"><span>{{$item->category->name}}</span></span>
                    <div class="image-box">
                      <figure><img src="{{ asset('uploads/' . $item->image) }}" alt="jobBox"></figure>
                    </div>
                  </div>
                  <div class="card-block-info">
                    <h5><a href="{{route('job.details',$item->id)}}">{{$item->title}}</a></h5>
                    <div class="mt-5"><span class="card-location mr-15">{{$item->location->name}}</span><span class="card-time">{{$item->created_at}}</span></div>
                    <div class="card-2-bottom mt-20">
                      <div class="row">
                        @foreach($item->tag as $tag)
                        <div class="col-xl-3 col-md-4 col-sm-6 mb-2"><a class="btn btn-tags-sm mr-5" href="jobs-grid.html">{{$tag}}</a>
                        </div>
                        @endforeach
                        <div class="col-xl-5 col-md-5 text-lg-end"><span class="card-text-price">{{$item->salary}}</span><span class="text-muted">/Hour</span></div>
                      </div>
                    </div>
                    <p class="font-sm color-text-paragraph mt-20">{{ Str::words($item->description, $words = 20, $end = '...') }}</p>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="section-box mt-50">
    <div class="section-box wow animate__animated animate__fadeIn">
      <div class="container">
        <div class="text-start">
          <h2 class="section-title mb-10 wow animate__animated animate__fadeInUp">Popular category</h2>
          <p class="font-lg color-text-paragraph-2 wow animate__animated animate__fadeInUp">Search and connect with the right candidates faster.</p>
        </div>
        <div class="box-swiper mt-50">
          <div class="swiper-container swiper-group-6 mh-none swiper">
            <div class="swiper-wrapper pb-70 pt-5">
              @foreach($categories as $item)
              <div class="swiper-slide hover-up">
                <div class="card-grid-5 card-category hover-up" style="background-image: url('assets/imgs/page/homepage2/img-big1.png')"><a href="jobs-grid.html">
                    <div class="box-cover-img">
                      <div class="content-bottom">
                        <h6 class="color-white mb-5">{{$item->name}}</h6>
                        <p class="color-white font-xs"><span>{{ $item->job->sum('vacancy') }}</span><span> Jobs Available</span></p>
                      </div>
                    </div>
                  </a></div>
              </div>
              @endforeach
            </div>
          </div>
          <div class="swiper-button-next swiper-button-next-1"></div>
          <div class="swiper-button-prev swiper-button-prev-1"></div>
        </div>
      </div>
    </div>
  </section>
  <section class="section-box mt-50">
    <div class="container">
      <div class="text-start">
        <h2 class="section-title mb-10 wow animate__animated animate__fadeInUp">Jobs by Location</h2>
        <p class="font-lg color-text-paragraph-2 wow animate__animated animate__fadeInUp">Find your favourite jobs and get the benefits of yourself</p>
      </div>
      <div class="container">
        <div class="row mt-50">
          @foreach($locations as $item)
          <div class="col-xl-3 col-lg-3 col-md-5 col-sm-12 col-12">
            <div class="card-image-top hover-up"><a href="jobs-grid.html">
                <div class="image" style="background-image: url(assets/imgs/page/homepage1/location1.png);"></div>
                <!-- <span class="lbl-hot"></span> -->
              </a>
              <div class="informations"><a href="jobs-grid.html">
                  <h5>{{$item->name}}</h5>
                </a>
                <div class="row">                
                  <div class="col-lg-6 col-6"><span class="text-14 color-text-paragraph-2">{{ $item->job->sum('vacancy') }} Vacancy</span></div>
                  <div class="col-lg-6 col-6 text-end"><span class="color-text-paragraph-2 text-14"></span></div>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </section>
  <section class="section-box overflow-visible mt-50 mb-50">
    <div class="container">
      <div class="row">
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
          <div class="text-center">
            <h1 class="color-brand-2"><span class="count">25</span><span> K+</span></h1>
            <h5>Completed Cases</h5>
            <p class="font-sm color-text-paragraph mt-10">We always provide people a <br class="d-none d-lg-block">complete solution upon focused of<br class="d-none d-lg-block"> any business</p>
          </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
          <div class="text-center">
            <h1 class="color-brand-2"><span class="count">17</span><span> +</span></h1>
            <h5>Our Office</h5>
            <p class="font-sm color-text-paragraph mt-10">We always provide people a <br class="d-none d-lg-block">complete solution upon focused of <br class="d-none d-lg-block">any business</p>
          </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
          <div class="text-center">
            <h1 class="color-brand-2"><span class="count">86</span><span> +</span></h1>
            <h5>Skilled People</h5>
            <p class="font-sm color-text-paragraph mt-10">We always provide people a <br class="d-none d-lg-block">complete solution upon focused of <br class="d-none d-lg-block">any business</p>
          </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
          <div class="text-center">
            <h1 class="color-brand-2"><span class="count">28</span><span> +</span></h1>
            <h5>CHappy Clients</h5>
            <p class="font-sm color-text-paragraph mt-10">We always provide people a <br class="d-none d-lg-block">complete solution upon focused of <br class="d-none d-lg-block">any business</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="section-box mt-50">
    <div class="container">
      <div class="text-start">
        <h2 class="section-title mb-10 wow animate__animated animate__fadeInUp">Top Recruiters</h2>
        <p class="font-lg color-text-paragraph-2 wow animate__animated animate__fadeInUp">Discover your next career move, freelance gig, or internship</p>
      </div>
    </div>
    <div class="container">
      <div class="box-swiper mt-50">
        <div class="swiper-container swiper-group-1 swiper-style-2 swiper">
          <div class="swiper-wrapper pt-5">
            <div class="swiper-slide">
              <div class="item-5 hover-up wow animate__animated animate__fadeIn"><a href="#">
                  <div class="item-logo">
                    <div class="image-left"><img alt="jobBox" src="assets/imgs/brands/brand-1.png"></div>
                    <div class="text-info-right">
                      <h4>Linkedin</h4><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><span class="font-xs color-text-mutted ml-10"><span>(</span><span>68</span><span>)</span></span>
                    </div>
                    <div class="text-info-bottom mt-5"><span class="font-xs color-text-mutted icon-location">New York, US</span><span class="font-xs color-text-mutted float-end mt-5">25<span> Open Jobs</span></span></div>
                  </div>
                </a></div>
              <div class="item-5 hover-up wow animate__animated animate__fadeIn"><a href="#">
                  <div class="item-logo">
                    <div class="image-left"><img alt="jobBox" src="assets/imgs/brands/brand-2.png"></div>
                    <div class="text-info-right">
                      <h4>Adobe</h4><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><span class="font-xs color-text-mutted ml-10"><span>(</span><span>42</span><span>)</span></span>
                    </div>
                    <div class="text-info-bottom mt-5"><span class="font-xs color-text-mutted icon-location">New York, US</span><span class="font-xs color-text-mutted float-end mt-5">17<span> Open Jobs</span></span></div>
                  </div>
                </a></div>
              <div class="item-5 hover-up wow animate__animated animate__fadeIn"><a href="#">
                  <div class="item-logo">
                    <div class="image-left"><img alt="jobBox" src="assets/imgs/brands/brand-3.png"></div>
                    <div class="text-info-right">
                      <h4>Dailymotion</h4><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><span class="font-xs color-text-mutted ml-10"><span>(</span><span>46</span><span>)</span></span>
                    </div>
                    <div class="text-info-bottom mt-5"><span class="font-xs color-text-mutted icon-location">New York, US</span><span class="font-xs color-text-mutted float-end mt-5">65<span> Open Jobs</span></span></div>
                  </div>
                </a></div>
              <div class="item-5 hover-up wow animate__animated animate__fadeIn"><a href="#">
                  <div class="item-logo">
                    <div class="image-left"><img alt="jobBox" src="assets/imgs/brands/brand-4.png"></div>
                    <div class="text-info-right">
                      <h4>NewSum</h4><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><span class="font-xs color-text-mutted ml-10"><span>(</span><span>68</span><span>)</span></span>
                    </div>
                    <div class="text-info-bottom mt-5"><span class="font-xs color-text-mutted icon-location">New York, US</span><span class="font-xs color-text-mutted float-end mt-5">25<span> Open Jobs</span></span></div>
                  </div>
                </a></div>
              <div class="item-5 hover-up wow animate__animated animate__fadeIn"><a href="#">
                  <div class="item-logo">
                    <div class="image-left"><img alt="jobBox" src="assets/imgs/brands/brand-5.png"></div>
                    <div class="text-info-right">
                      <h4>PowerHome</h4><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><span class="font-xs color-text-mutted ml-10"><span>(</span><span>87</span><span>)</span></span>
                    </div>
                    <div class="text-info-bottom mt-5"><span class="font-xs color-text-mutted icon-location">New York, US</span><span class="font-xs color-text-mutted float-end mt-5">34<span> Open Jobs</span></span></div>
                  </div>
                </a></div>
              <div class="item-5 hover-up wow animate__animated animate__fadeIn"><a href="#">
                  <div class="item-logo">
                    <div class="image-left"><img alt="jobBox" src="assets/imgs/brands/brand-6.png"></div>
                    <div class="text-info-right">
                      <h4>Whop.com</h4><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><span class="font-xs color-text-mutted ml-10"><span>(</span><span>34</span><span>)</span></span>
                    </div>
                    <div class="text-info-bottom mt-5"><span class="font-xs color-text-mutted icon-location">New York, US</span><span class="font-xs color-text-mutted float-end mt-5">56<span> Open Jobs</span></span></div>
                  </div>
                </a></div>
              <div class="item-5 hover-up wow animate__animated animate__fadeIn"><a href="#">
                  <div class="item-logo">
                    <div class="image-left"><img alt="jobBox" src="assets/imgs/brands/brand-7.png"></div>
                    <div class="text-info-right">
                      <h4>Greewood</h4><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><span class="font-xs color-text-mutted ml-10"><span>(</span><span>124</span><span>)</span></span>
                    </div>
                    <div class="text-info-bottom mt-5"><span class="font-xs color-text-mutted icon-location">New York, US</span><span class="font-xs color-text-mutted float-end mt-5">78<span> Open Jobs</span></span></div>
                  </div>
                </a></div>
              <div class="item-5 hover-up wow animate__animated animate__fadeIn"><a href="#">
                  <div class="item-logo">
                    <div class="image-left"><img alt="jobBox" src="assets/imgs/brands/brand-8.png"></div>
                    <div class="text-info-right">
                      <h4>Kentucky</h4><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><span class="font-xs color-text-mutted ml-10"><span>(</span><span>54</span><span>)</span></span>
                    </div>
                    <div class="text-info-bottom mt-5"><span class="font-xs color-text-mutted icon-location">New York, US</span><span class="font-xs color-text-mutted float-end mt-5">98<span> Open Jobs</span></span></div>
                  </div>
                </a></div>
              <div class="item-5 hover-up wow animate__animated animate__fadeIn"><a href="#">
                  <div class="item-logo">
                    <div class="image-left"><img alt="jobBox" src="assets/imgs/brands/brand-9.png"></div>
                    <div class="text-info-right">
                      <h4>Qeuity</h4><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><span class="font-xs color-text-mutted ml-10"><span>(</span><span>76</span><span>)</span></span>
                    </div>
                    <div class="text-info-bottom mt-5"><span class="font-xs color-text-mutted icon-location">New York, US</span><span class="font-xs color-text-mutted float-end mt-5">90<span> Open Jobs</span></span></div>
                  </div>
                </a></div>
              <div class="item-5 hover-up wow animate__animated animate__fadeIn"><a href="#">
                  <div class="item-logo">
                    <div class="image-left"><img alt="jobBox" src="assets/imgs/brands/brand-10.png"></div>
                    <div class="text-info-right">
                      <h4>Honda</h4><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><span class="font-xs color-text-mutted ml-10"><span>(</span><span>89</span><span>)</span></span>
                    </div>
                    <div class="text-info-bottom mt-5"><span class="font-xs color-text-mutted icon-location">New York, US</span><span class="font-xs color-text-mutted float-end mt-5">34<span> Open Jobs</span></span></div>
                  </div>
                </a></div>
              <div class="item-5 hover-up wow animate__animated animate__fadeIn"><a href="#">
                  <div class="item-logo">
                    <div class="image-left"><img alt="jobBox" src="assets/imgs/brands/brand-5.png"></div>
                    <div class="text-info-right">
                      <h4>Toyota</h4><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><span class="font-xs color-text-mutted ml-10"><span>(</span><span>34</span><span>)</span></span>
                    </div>
                    <div class="text-info-bottom mt-5"><span class="font-xs color-text-mutted icon-location">New York, US</span><span class="font-xs color-text-mutted float-end mt-5">26<span> Open Jobs</span></span></div>
                  </div>
                </a></div>
              <div class="item-5 hover-up wow animate__animated animate__fadeIn"><a href="#">
                  <div class="item-logo">
                    <div class="image-left"><img alt="jobBox" src="assets/imgs/brands/brand-3.png"></div>
                    <div class="text-info-right">
                      <h4>Lexuxs</h4><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><span class="font-xs color-text-mutted ml-10"><span>(</span><span>27</span><span>)</span></span>
                    </div>
                    <div class="text-info-bottom mt-5"><span class="font-xs color-text-mutted icon-location">New York, US</span><span class="font-xs color-text-mutted float-end mt-5">54<span> Open Jobs</span></span></div>
                  </div>
                </a></div>
              <div class="item-5 hover-up wow animate__animated animate__fadeIn"><a href="#">
                  <div class="item-logo">
                    <div class="image-left"><img alt="jobBox" src="assets/imgs/brands/brand-6.png"></div>
                    <div class="text-info-right">
                      <h4>Ondo</h4><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><span class="font-xs color-text-mutted ml-10"><span>(</span><span>54</span><span>)</span></span>
                    </div>
                    <div class="text-info-bottom mt-5"><span class="font-xs color-text-mutted icon-location">New York, US</span><span class="font-xs color-text-mutted float-end mt-5">58<span> Open Jobs</span></span></div>
                  </div>
                </a></div>
              <div class="item-5 hover-up wow animate__animated animate__fadeIn"><a href="#">
                  <div class="item-logo">
                    <div class="image-left"><img alt="jobBox" src="assets/imgs/brands/brand-2.png"></div>
                    <div class="text-info-right">
                      <h4>Square</h4><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><span class="font-xs color-text-mutted ml-10"><span>(</span><span>16</span><span>)</span></span>
                    </div>
                    <div class="text-info-bottom mt-5"><span class="font-xs color-text-mutted icon-location">New York, US</span><span class="font-xs color-text-mutted float-end mt-5">37<span> Open Jobs</span></span></div>
                  </div>
                </a></div>
              <div class="item-5 hover-up wow animate__animated animate__fadeIn"><a href="#">
                  <div class="item-logo">
                    <div class="image-left"><img alt="jobBox" src="assets/imgs/brands/brand-8.png"></div>
                    <div class="text-info-right">
                      <h4>Vista</h4><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><span class="font-xs color-text-mutted ml-10"><span>(</span><span>97</span><span>)</span></span>
                    </div>
                    <div class="text-info-bottom mt-5"><span class="font-xs color-text-mutted icon-location">New York, US</span><span class="font-xs color-text-mutted float-end mt-5">43<span> Open Jobs</span></span></div>
                  </div>
                </a></div>
            </div>
          </div>
        </div>
        <div class="swiper-button-next swiper-button-next-1"></div>
        <div class="swiper-button-prev swiper-button-prev-1"></div>
      </div>
    </div>
  </section>
  <section class="section-box mt-50">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-12 mb-15 mb-lg-0">
          <div class="box-radius-8 bg-urgent hover-up">
            <div class="image">
              <figure><img src="assets/imgs/page/homepage2/job-tools.png" alt="jobBox"></figure>
            </div>
            <div class="text-info">
              <h3>Job Tools Services</h3>
              <p class="font-sm color-text-paragraph-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet rutrum quam, id faucibus erat interdum a. Curabitur eget tortor a nulla interdum semper.</p>
              <div class="mt-15"><a class="btn btn-arrow-right" href="#">Find Out More</a></div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-12">
          <div class="box-radius-8 bg-9 hover-up">
            <div class="image">
              <figure><img src="assets/imgs/page/homepage2/planning-job.png" alt="jobBox"></figure>
            </div>
            <div class="text-info">
              <h3>Planning a Job?</h3>
              <p class="font-sm color-text-paragraph-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet rutrum quam, id faucibus erat interdum a. Curabitur eget tortor a nulla interdum semper.</p>
              <div class="mt-15"><a class="btn btn-arrow-right" href="#">Find Out More</a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="section-box mt-50 mb-50">
    <div class="container">
      <div class="text-start">
        <h2 class="section-title mb-10 wow animate__animated animate__fadeInUp">News and Blog</h2>
        <p class="font-lg color-text-paragraph-2 wow animate__animated animate__fadeInUp">Get the latest news, updates and tips</p>
      </div>
    </div>
    <div class="container">
      <div class="mt-50">
        <div class="box-swiper style-nav-top">
          <div class="swiper-container swiper-group-3 swiper">
            <div class="swiper-wrapper pb-70 pt-5">
              <div class="swiper-slide">
                <div class="card-grid-3 hover-up wow animate__animated animate__fadeIn">
                  <div class="text-center card-grid-3-image"><a href="#">
                      <figure><img alt="jobBox" src="assets/imgs/page/homepage1/img-news1.png"></figure>
                    </a></div>
                  <div class="card-block-info">
                    <div class="tags mb-15"><a class="btn btn-tag" href="blog-grid.html">News</a></div>
                    <h5><a href="blog-details.html">21 Job Interview Tips: How To Make a Great Impression</a></h5>
                    <p class="mt-10 color-text-paragraph font-sm">Our mission is to create the world&amp;rsquo;s most sustainable healthcare company by creating high-quality healthcare products in iconic, sustainable packaging.</p>
                    <div class="card-2-bottom mt-20">
                      <div class="row">
                        <div class="col-lg-6 col-6">
                          <div class="d-flex"><img class="img-rounded" src="assets/imgs/page/homepage1/user1.png" alt="jobBox">
                            <div class="info-right-img"><span class="font-sm font-bold color-brand-1 op-70">Sarah Harding</span><br><span class="font-xs color-text-paragraph-2">06 September</span></div>
                          </div>
                        </div>
                        <div class="col-lg-6 text-end col-6 pt-15"><span class="color-text-paragraph-2 font-xs">8 mins to read</span></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="card-grid-3 hover-up wow animate__animated animate__fadeIn">
                  <div class="text-center card-grid-3-image"><a href="#">
                      <figure><img alt="jobBox" src="assets/imgs/page/homepage1/img-news2.png"></figure>
                    </a></div>
                  <div class="card-block-info">
                    <div class="tags mb-15"><a class="btn btn-tag" href="blog-grid.html">Events</a></div>
                    <h5><a href="blog-details.html">39 Strengths and Weaknesses To Discuss in a Job Interview</a></h5>
                    <p class="mt-10 color-text-paragraph font-sm">Our mission is to create the world&amp;rsquo;s most sustainable healthcare company by creating high-quality healthcare products in iconic, sustainable packaging.</p>
                    <div class="card-2-bottom mt-20">
                      <div class="row">
                        <div class="col-lg-6 col-6">
                          <div class="d-flex"><img class="img-rounded" src="assets/imgs/page/homepage1/user2.png" alt="jobBox">
                            <div class="info-right-img"><span class="font-sm font-bold color-brand-1 op-70">Steven Jobs</span><br><span class="font-xs color-text-paragraph-2">06 September</span></div>
                          </div>
                        </div>
                        <div class="col-lg-6 text-end col-6 pt-15"><span class="color-text-paragraph-2 font-xs">6 mins to read</span></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="card-grid-3 hover-up wow animate__animated animate__fadeIn">
                  <div class="text-center card-grid-3-image"><a href="#">
                      <figure><img alt="jobBox" src="assets/imgs/page/homepage1/img-news3.png"></figure>
                    </a></div>
                  <div class="card-block-info">
                    <div class="tags mb-15"><a class="btn btn-tag" href="blog-grid.html">News</a></div>
                    <h5><a href="blog-details.html">Interview Question: Why Dont You Have a Degree?</a></h5>
                    <p class="mt-10 color-text-paragraph font-sm">Learn how to respond if an interviewer asks you why you dont have a degree, and read example answers that can help you craft</p>
                    <div class="card-2-bottom mt-20">
                      <div class="row">
                        <div class="col-lg-6 col-6">
                          <div class="d-flex"><img class="img-rounded" src="assets/imgs/page/homepage1/user3.png" alt="jobBox">
                            <div class="info-right-img"><span class="font-sm font-bold color-brand-1 op-70">Wiliam Kend</span><br><span class="font-xs color-text-paragraph-2">06 September</span></div>
                          </div>
                        </div>
                        <div class="col-lg-6 text-end col-6 pt-15"><span class="color-text-paragraph-2 font-xs">9 mins to read</span></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div>
        <div class="text-center"><a class="btn btn-brand-1 btn-icon-load mt--30 hover-up" href="blog-grid.html">Load More Posts</a></div>
      </div>
    </div>
  </section>
  <section class="section-box mt-50 mb-20">
    <div class="container">
      <div class="box-newsletter">
        <div class="row">
          <div class="col-xl-3 col-12 text-center d-none d-xl-block"><img src="assets/imgs/template/newsletter-left.png" alt="joxBox"></div>
          <div class="col-lg-12 col-xl-6 col-12">
            <h2 class="text-md-newsletter text-center">New Things Will Always<br> Update Regularly</h2>
            <div class="box-form-newsletter mt-40">
              <form class="form-newsletter">
                <input class="input-newsletter" type="text" value="" placeholder="Enter your email here">
                <button class="btn btn-default font-heading icon-send-letter">Subscribe</button>
              </form>
            </div>
          </div>
          <div class="col-xl-3 col-12 text-center d-none d-xl-block"><img src="assets/imgs/template/newsletter-right.png" alt="joxBox"></div>
        </div>
      </div>
    </div>
  </section>
  <script src="assets/js/plugins/counterup.js"></script>
</main> --}}
@endsection