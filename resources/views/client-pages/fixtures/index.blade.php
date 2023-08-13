@extends('layouts.client.client-layout')


@section('content')
  <!--Main Slider Start-->
  <div class="inner-banner-header wf100">
    <h1 data-generated="Fixtures">Fixtures</h1>
    <div class="gt-breadcrumbs">
       <ul>
          <li> <a href="#" class="active"> <i class="fas fa-home"></i> Home </a> </li>
          <li> <a href="#"> Fixtures </a> </li>
       </ul>
    </div>
<<<<<<< HEAD
 </div>
 <style>
 .match-left .mtl-left img {
        width: 73px;
        height: 50px;
    }
    .match-right .mtl-right img {
        width: 73px;
        height: 50px;
    }
</style>
 <!--Main Slider Start-->
 <!--Main Content Start-->
 <div class="main-content innerpagebg wf100">
    <!--team Page Start-->
    <div class="team wf100 p80">
       <!--Start-->
       <div class="player-squad">
          <div class="container">
             <div class="row">

                <!--Fixture Start-->
                <div class="col-lg-8">
                   <!--Last Match Result Start-->
                   <div class="last-match-result-full mb-60">

                      <h6>Last Match Result</h6>

                      <div class="p30">
                         <div class="row">


@foreach ($matches as $match)
                            <div class="col-sm-4">

                                  <?php
                            $teamAResult;
                            $teamBResult;
                            if ($match['Score'] > $match['Type']) {
                                $teamAResult = 'win';
                                $teamBResult = 'loss';
                            } elseif ($match['Score'] == $match['Type']) {
                                $teamAResult = 'tie';
                                $teamBResult = 'tie';
                            } else {
                                $teamAResult = 'loss';
                                $teamBResult = 'win';
                            }
                            ?>
                               <div class="match-left">

                                  <div class="mtl-left"> <img
                                    src="/images/{{ \App\Models\Club::find($match['TeamAID'])['Logo'] }}"
                                    alt=""> <strong>{{ \App\Models\Club::find($match['TeamAID'])['ClubName'] }}</strong> </div>
                                    <div class="mscore"> <strong>{{ $match['Score'] }}</strong>
                                        {{ $teamAResult }} </div>

                               </div>
                            </div>

                            <div class="col-sm-4">

                               <div class="lmr-info">
                                  <strong>Super Euro League</strong>
                                  <p>Indy Eleven Qualified for Semi Final</p>
                                  <img src="images/sp.png" alt="">
                                  <p>{{ $match['DateTimeEnd'] }}</p>
                                  <p>{{ $match['Stadium'] }}</p>
                                  <a href="#" class="mh">Match squad</a>
                               </div>
                            </div>


                            <div class="col-sm-4">

                               <div class="match-right">
                                <div class="mscore"> <strong> {{ $match['Type'] }}</strong>
                                    {{ $teamBResult }} </div>
                                    <div class="mtl-right"> <img
                                        src="/images/{{ \App\Models\Club::find($match['TeamBID'])['Logo'] }}"
                                        alt="">
                                    <strong>{{ \App\Models\Club::find($match['TeamBID'])['ClubName'] }}</strong>

                               </div>
                            </div>
                         </div>
                         @endforeach
                      </div>
                      </div>
                   </div>

                   <!--Last Match Result End-->
                   <!--Next Matches Schedule Start-->
                   <div class="next-matches-schedule wf100">
                      <h2 class="stitle">Next Matches Schedule</h2>
                      <!--Box Start-->

                      <div class="nms-box">
                         <div class="row">
                            <div class="col-sm-4">
                               <div class="team-logo-left"> <img
                                src="/images/{{ \App\Models\Club::find($match['TeamAID'])['Logo'] }}"
                                alt=""><strong>{{ \App\Models\Club::find($match['TeamAID'])['ClubName'] }}</strong>  </div>
                            </div>
                            <div class="col-sm-4">
                               <div class="nms-info">
                                  <strong class="vs">VS</strong>
                                  <p> <strong>Super Euro League</strong></p>
                                  <p>{{ $match['DateTimeEnd'] }}</p>
                                  <p>{{ $match['Stadium'] }}</p>

                               </div>
                            </div>
                            <div class="col-sm-4">
                               <div class="team-logo-right"><img src="/images/{{ \App\Models\Club::find($match['TeamBID'])['Logo'] }}" alt=""> <strong>{{ \App\Models\Club::find($match['TeamBID'])['ClubName'] }}</strong> </div>
                            </div>
                         </div>
                      </div>
                      <!--Box End-->
                      <!--Box Start-->



                        <!--Box Start-->
                        <div class="nms-box">
                           <div class="row">
                              <div class="col-sm-4">
                                 <div class="team-logo-left"> <img
                                  src="/images/{{ \App\Models\Club::find($match['TeamAID'])['Logo'] }}"
                                  alt=""><strong>{{ \App\Models\Club::find($match['TeamAID'])['ClubName'] }}</strong>  </div>
                              </div>
                              <div class="col-sm-4">
                                 <div class="nms-info">
                                    <strong class="vs">VS</strong>
                                    <p> <strong>Super Euro League</strong></p>
                                    <p>{{ $match['DateTimeEnd'] }}</p>
                                    <p>{{ $match['Stadium'] }}</p>

                                 </div>
                              </div>
                              <div class="col-sm-4">
                                 <div class="team-logo-right"><img src="/images/{{ \App\Models\Club::find($match['TeamBID'])['Logo'] }}" alt=""> <strong>{{ \App\Models\Club::find($match['TeamBID'])['ClubName'] }}</strong> </div>
                              </div>
                           </div>
                        </div>

                        <div class="nms-box">
                            <div class="row">
                               <div class="col-sm-4">
                                  <div class="team-logo-left"> <img
                                   src="/images/{{ \App\Models\Club::find($match['TeamAID'])['Logo'] }}"
                                   alt=""><strong>{{ \App\Models\Club::find($match['TeamAID'])['ClubName'] }}</strong>  </div>
                               </div>
                               <div class="col-sm-4">
                                  <div class="nms-info">
                                     <strong class="vs">VS</strong>
                                     <p> <strong>Super Euro League</strong></p>
                                     <p>{{ $match['DateTimeEnd'] }}</p>
                                     <p>{{ $match['Stadium'] }}</p>

                                  </div>
                               </div>
                               <div class="col-sm-4">
                                  <div class="team-logo-right"><img src="/images/{{ \App\Models\Club::find($match['TeamBID'])['Logo'] }}" alt=""> <strong>{{ \App\Models\Club::find($match['TeamBID'])['ClubName'] }}</strong> </div>
                               </div>
                            </div>
                         </div>
                      <!--Box End-->

                   </div>
                   <!--Next Matches Schedule End-->
                </div>
                <!--Fixture End-->
                <!--Sidebar Start-->
                <div class="col-lg-4">
                   <div class="sidebar">
                      <!--widget start-->
=======
    <style>
        .row img {
            width: 73px;
            height: 50px;
        }
    </style>
    <!--Main Slider Start-->
    <!--Main Content Start-->
    <div class="main-content innerpagebg wf100">
        <!--team Page Start-->
        <div class="team wf100 p80">
            <!--Start-->
            <div class="player-squad">
                <div class="container">
                    <div class="row">
                        <!--Fixture Start-->
                        <div class="col-lg-8">
                            <!--Last Match Result Start-->
                            <div class="last-match-result-full mb-60">
>>>>>>> f4252965222b7bedbd30c7bc394bd72b2ae3c8d6

                      <!--widget start-->
                      <!--widget start-->
                      <div class="widget">
                         <h4>Match Sponsors</h4>
                         <ul class="match-sponsors">
                            <li> <a href="#"><img src="/images/sitelogos1.png" alt=""></a> </li>
                            <li> <a href="#"><img src="/images/sitelogos2.png" alt=""></a> </li>
                            <li> <a href="#"><img src="/images/sitelogos3.png" alt=""></a> </li>
                            <li> <a href="#"><img src="/images/sitelogos4.png" alt=""></a> </li>
                         </ul>
                      </div>
                      <!--widget start-->
                      <!--widget start-->
                      <div class="highlights-gallery gallery">
                        <h2>Highlights & Gallery</h2>
                        <div class="container-fluid">
                          <div class="row">
                            <div class="col-md-8 p-05">
                              <div class="hlg-thumb">
                                <img src="/images/hlgall1.jpg" alt="">
                                <p><a href="/images/hlgall1.jpg" data-rel="prettyPhoto[gallery1]"><i class="far fa-image"></i> Goals are like Storm</a></p>
                              </div>
                            </div>
                            <div class="col-md-4 p-05">
                              <div class="hlg-thumb">
                                <img src="/images/hlgall2.jpg" alt="">
                                <p><a href="https://vimeo.com/17242531" data-rel="prettyPhoto[gallery1]"><i class="fas fa-play-circle"></i> Goals are like Storm</a></p>
                              </div>
                               <div class="hlg-thumb">
                                <img src="/images/hlgall6.jpg" alt="">
                                <p><a href="https://vimeo.com/17242531" data-rel="prettyPhoto[gallery1]"><i class="fas fa-play-circle"></i> Goals are like Storm</a></p>
                              </div>
                            </div>
                            <div class="col-md-4 p-05">
                              <div class="hlg-thumb">
                                <img src="/images/hlgall3.jpg" alt="">
                                <p><a href="images/hlgall3.jpg" data-rel="prettyPhoto[gallery1]"><i class="far fa-image"></i> Goals are like Storm</a></p>
                              </div>
                            </div>
                             <div class="col-md-4 p-05">
                              <div class="hlg-thumb">
                                <img src="/images/hlgall4.jpg" alt="">
                                <p><a href="https://vimeo.com/17242531" data-rel="prettyPhoto[gallery1]"><i class="fas fa-play-circle"></i> Goals are like Storm</a></p>
                              </div>
                            </div>
                            <div class="col-md-4 p-05">
                              <div class="hlg-thumb">
                                <img src="/images/hlgall5.jpg" alt="">
                                <p><a href="/images/hlgall5.jpg" data-rel="prettyPhoto[gallery1]"><i class="far fa-image"></i> Goals are like Storm</a></p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--widget start-->
                      <!--widget start-->
                      <div class="widget">
                         <h4>Featured Videos</h4>
                         <div class="featured-video-widget">
                            <div class="fvideo-box mb15">
                               <div class="fvid-cap">
                                  <a class="vicon" href="#"><img src="images/play.png" alt=""></a>
                                  <div class="fvid-right">
                                     <h5><a href="#">Success is a Result of Hard Work </a></h5>
                                     <span><i class="far fa-clock"></i> 4:32</span> <span><i class="far fa-eye"></i> 174</span>
                                  </div>
                               </div>
                               <img src="/images/fvid1.jpg" alt="">
                            </div>
                            <div class="fvideo-box">
                               <div class="fvid-cap">
                                  <a class="vicon" href="#"><img src="/images/play.png" alt=""></a>
                                  <div class="fvid-right">
                                     <h5><a href="#">Success is a Result of Hard Work </a></h5>
                                     <span><i class="far fa-clock"></i> 4:32</span> <span><i class="far fa-eye"></i> 174</span>
                                  </div>
                               </div>
                               <img src="images/fvid2.jpg" alt="">
                            </div>
                         </div>
                      </div>
                      <!--widget end-->
                      <!--widget Start-->
                      <div class="widget">
                         <h4>Be Social</h4>
                         <ul class="social-media">
                            <li>
                               <div class="social fb"> <i class="fab fa-facebook-f"></i> <strong> 25,345</strong> <span>Likes</span> </div>
                            </li>
                            <li>
                               <div class="social tw"> <i class="fab fa-twitter"></i> <strong> 5,345 </strong> <span>Followers</span> </div>
                            </li>
                            <li>
                               <div class="social yt"> <i class="fab fa-youtube"></i> <strong> 31,072 </strong> <span>Subscribers</span> </div>
                            </li>
                            <li>
                               <div class="social gp"> <i class="fab fa-google-plus-g"></i> <strong>3,345 </strong> <span>Plus</span> </div>
                            </li>
                            <li>
                               <div class="social insta"> <i class="fab fa-instagram"></i> <strong> 25,345 </strong> <span>Followers</span> </div>
                            </li>
                            <li>
                               <div class="social rss"> <i class="fas fa-rss"></i> <strong> 24,793 </strong> <span>Likes</span> </div>
                            </li>
                         </ul>
                      </div>
                      <!--widget End-->
                   </div>
                </div>
                <!--Sidebar End-->
             </div>
          </div>
       </div>
       <!--End-->
    </div>
    </div>
    <!--team Page End-->
 </div>
 <!--Main Content End-->
@endsection
