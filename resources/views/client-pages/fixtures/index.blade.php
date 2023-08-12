@extends('layouts.client.client-layout')


@section('content')
    <div class="inner-banner-header wf100">
        <h1 data-generated="Fixtures">Fixtures</h1>
        <div class="gt-breadcrumbs">
            <ul>
                <li> <a href="#" class="active"> <i class="fas fa-home"></i> Home </a> </li>
                <li> <a href="#"> Fixtures </a> </li>
            </ul>
        </div>
    </div>
<<<<<<< HEAD
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
=======
 </div>
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
                            <div class="col-sm-4">
                               <div class="match-left">
                                  <div class="mtl-left"> <img src="images/nmf-logo1.png" alt=""> <strong>North Carolina</strong> </div>
                                  <div class="mscore"> <strong>2</strong> loss </div>
                                  <ul>
                                     <li>Charlie Darren <span>(1 goal)</span></li>
                                     <li>kevin Jamie <span>(1 goal)</span></li>
                                  </ul>
                               </div>
                            </div>
                            <div class="col-sm-4">
                               <div class="lmr-info">
                                  <strong>Super Euro League</strong>
                                  <p>Indy Eleven Qualified for Semi Final</p>
                                  <img src="images/sp.png" alt="">
                                  <p>17 October, 2020</p>
                                  <p>New Expo Stadium, NYK</p>
                                  <a href="#" class="mh">Match Highlights</a>
                               </div>
                            </div>
                            <div class="col-sm-4">
                               <div class="match-right">
                                  <div class="mscore"> <strong>2</strong> loss </div>
                                  <div class="mtl-right"> <img src="images/nmf-logo2.png" alt=""> <strong>Indy Eleven</strong> </div>
                                  <ul>
                                     <li> Jon Taylor <span>(1 goal)</span></li>
                                     <li> Steven Dean <span>(1 goal)</span></li>
                                     <li> Smith Ross <span>(1 goal)</span></li>
                                  </ul>
                               </div>
                            </div>
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
                               <div class="team-logo-left"> <strong>Chirston Battery</strong> <img src="images/mlogo1.png" alt=""> </div>
                            </div>
                            <div class="col-sm-4">
                               <div class="nms-info">
                                  <strong class="vs">VS</strong>
                                  <p> <strong>Super Euro League</strong></p>
                                  <p>20 December, 2018   |   04:00 PM GMT+</p>
                                  {{-- <li class="match-info"> <strong>{{$match['Stadium']}}</strong> <span>{{$match['DateTimeStart']}}<em>|</em> {{$match['DateTimeEnd']}}</span> <a href="/squad">Squad </a></li> --}}
                                  <p><span>New Expo Stadium, NYK</span></p>
                                  <a href="#">Buy Your Ticket</a>
                               </div>
                            </div>
                            <div class="col-sm-4">
                               <div class="team-logo-right"><img src="images/mlogo2.png" alt=""> <strong>Charlotte</strong> </div>
                            </div>
                         </div>
                      </div>
                      <!--Box End-->
                      <!--Box Start-->
                      <div class="nms-box">
                         <div class="row">
                            <div class="col-sm-4">
                               <div class="team-logo-left"> <strong>FC Cincinnati</strong> <img src="images/mlogo1.png" alt=""> </div>
                            </div>
                            <div class="col-sm-4">
                               <div class="nms-info">
                                  <strong class="vs">VS</strong>
                                  <p> <strong>Super Euro League</strong></p>
                                  <p>20 December, 2018   |   04:00 PM GMT+</p>
                                  <p><span>New Expo Stadium, NYK</span></p>
                                  <a href="#">Buy Your Ticket</a>
                               </div>
                            </div>
                            <div class="col-sm-4">
                               <div class="team-logo-right"><img src="images/mlogo2.png" alt=""> <strong>Indy Eleven</strong> </div>
                            </div>
                         </div>
                      </div>
                      <!--Box End-->
                      <!--Box Start-->
                      <div class="nms-box">
                         <div class="row">
                            <div class="col-sm-4">
                               <div class="team-logo-left"> <strong>FC Champs</strong> <img src="images/mlogo1.png" alt=""> </div>
                            </div>
                            <div class="col-sm-4">
                               <div class="nms-info">
                                  <strong class="vs">VS</strong>
                                  <p> <strong>Super Euro League</strong></p>
                                  <p>20 December, 2018   |   04:00 PM GMT+</p>
                                  <p><span>New Expo Stadium, NYK</span></p>
                                  <a href="#">Buy Your Ticket</a>
                               </div>
                            </div>
                            <div class="col-sm-4">
                               <div class="team-logo-right"><img src="images/mlogo2.png" alt=""> <strong>Nashville SC</strong> </div>
                            </div>
                         </div>
                      </div>
                      <!--Box End-->
                      <!--Box Start-->
                      <div class="nms-box">
                         <div class="row">
                            <div class="col-sm-4">
                               <div class="team-logo-left"> <strong>Ottawa Fury</strong> <img src="images/mlogo1.png" alt=""> </div>
                            </div>
                            <div class="col-sm-4">
                               <div class="nms-info">
                                  <strong class="vs">VS</strong>
                                  <p> <strong>Super Euro League</strong></p>
                                  <p>20 December, 2018   |   04:00 PM GMT+</p>
                                  <p><span>New Expo Stadium, NYK</span></p>
                                  <a href="#">Buy Your Ticket</a>
                               </div>
                            </div>
                            <div class="col-sm-4">
                               <div class="team-logo-right"><img src="images/mlogo2.png" alt=""> <strong>Indy Eleven</strong> </div>
                            </div>
                         </div>
                      </div>
                      <!--Box End-->
                      <!--Box Start-->
                      <div class="nms-box">
                         <div class="row">
                            <div class="col-sm-4">
                               <div class="team-logo-left"> <strong>FC Champs</strong> <img src="images/mlogo1.png" alt=""> </div>
                            </div>
                            <div class="col-sm-4">
                               <div class="nms-info">
                                  <strong class="vs">VS</strong>
                                  <p> <strong>Super Euro League</strong></p>
                                  <p>20 December, 2018   |   04:00 PM GMT+</p>
                                  <p><span>New Expo Stadium, NYK</span></p>
                                  <a href="#">Buy Your Ticket</a>
                               </div>
                            </div>
                            <div class="col-sm-4">
                               <div class="team-logo-right"><img src="images/mlogo2.png" alt=""> <strong>Ottawa Fury</strong> </div>
                            </div>
                         </div>
                      </div>
                      <!--Box End-->
                      <!--Box Start-->
                      <div class="nms-box">
                         <div class="row">
                            <div class="col-sm-4">
                               <div class="team-logo-left"> <strong>FC Champs</strong> <img src="images/mlogo1.png" alt=""> </div>
                            </div>
                            <div class="col-sm-4">
                               <div class="nms-info">
                                  <strong class="vs">VS</strong>
                                  <p> <strong>Super Euro League</strong></p>
                                  <p>20 December, 2018   |   04:00 PM GMT+</p>
                                  <p><span>New Expo Stadium, NYK</span></p>
                                  <a href="#">Buy Your Ticket</a>
                               </div>
                            </div>
                            <div class="col-sm-4">
                               <div class="team-logo-right"><img src="images/mlogo2.png" alt=""> <strong>North Carolina</strong> </div>
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
>>>>>>> f518b30b7e8b3b567395cc068264f71eea3ced7b

                                <!--Last Match Result Start-->
                                <div class="last-match-result-full mb-60">
                                    <h6>Last Match Result</h6>

                                    <ul class="last-match">


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
                                                                    alt="">
                                                                <strong>{{ \App\Models\Club::find($match['TeamAID'])['ClubName'] }}</strong>
                                                            </div>
                                                            <div class="mscore"> <strong>{{ $match['Score'] }}</strong>
                                                                {{ $teamAResult }} </div>

                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="lmr-info">
                                                            <strong>Super Euro League</strong>
                                                            <p>Indy Eleven Qualified for Semi Final</p>
                                                            <img src="images/sp.png" alt="">
                                                            <p>{{ $match['DateTimeEnd'] }}  </p>
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
                                                    alt=""><strong>{{ \App\Models\Club::find($match['TeamAID'])['ClubName'] }}</strong>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="nms-info">
                                                <strong class="vs">VS</strong>
                                                <p> <strong>Super Euro League</strong></p>
                                                <p>{{ $match['DateTimeStart'] }} | 04:00 PM GMT+</p>
                                                <p><span>{{ $match['Stadium'] }}</span></p>

                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="team-logo-right"><img
                                                    src="images/{{ \App\Models\Club::find($match['TeamBID'])['Logo'] }}"
                                                    alt="">
                                                <strong>{{ \App\Models\Club::find($match['TeamBID'])['ClubName'] }}</strong>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Box End-->

                                <!--Box Start-->
                                @foreach ($matches as $match)
                                    <div class="nms-box">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="team-logo-left"> <img
                                                        src="/images/{{ \App\Models\Club::find($match['TeamAID'])['Logo'] }}"
                                                        alt=""><strong>{{ \App\Models\Club::find($match['TeamAID'])['ClubName'] }}</strong>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="nms-info">
                                                    <strong class="vs">VS</strong>
                                                    <p> <strong>Super Euro League</strong></p>
                                                    <p>{{ $match['DateTimeStart'] }} | 04:00 PM GMT+</p>
                                                    <p><span>{{ $match['Stadium'] }}</span></p>

                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="team-logo-right"><img
                                                        src="images/{{ \App\Models\Club::find($match['TeamBID'])['Logo'] }}"
                                                        alt="">
                                                    <strong>{{ \App\Models\Club::find($match['TeamBID'])['ClubName'] }}</strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                <!--Box End-->
                                <!--Box Start-->
                                @foreach ($matches as $match)
                                    <div class="nms-box">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="team-logo-left"> <img
                                                        src="/images/{{ \App\Models\Club::find($match['TeamAID'])['Logo'] }}"
                                                        alt=""><strong>{{ \App\Models\Club::find($match['TeamAID'])['ClubName'] }}</strong>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="nms-info">
                                                    <strong class="vs">VS</strong>
                                                    <p> <strong>Super Euro League</strong></p>
                                                    <p>{{ $match['DateTimeStart'] }} | 04:00 PM GMT+</p>
                                                    <p><span>{{ $match['Stadium'] }}</span></p>

                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="team-logo-right"><img
                                                        src="images/{{ \App\Models\Club::find($match['TeamBID'])['Logo'] }}"
                                                        alt="">
                                                    <strong>{{ \App\Models\Club::find($match['TeamBID'])['ClubName'] }}</strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                <!--Box End-->
                                <!--Box Start-->
                                @foreach ($matches as $match)
                                    <div class="nms-box">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="team-logo-left"> <img
                                                        src="/images/{{ \App\Models\Club::find($match['TeamAID'])['Logo'] }}"
                                                        alt=""><strong>{{ \App\Models\Club::find($match['TeamAID'])['ClubName'] }}</strong>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="nms-info">
                                                    <strong class="vs">VS</strong>
                                                    <p> <strong>Super Euro League</strong></p>
                                                    <p>{{ $match['DateTimeStart'] }} | 04:00 PM GMT+</p>
                                                    <p><span>{{ $match['Stadium'] }}</span></p>

                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="team-logo-right"><img
                                                        src="images/{{ \App\Models\Club::find($match['TeamBID'])['Logo'] }}"
                                                        alt="">
                                                    <strong>{{ \App\Models\Club::find($match['TeamBID'])['ClubName'] }}</strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                <!--Box End-->
                                <!--Box Start-->
                                @foreach ($matches as $match)
                                    <div class="nms-box">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="team-logo-left"> <img
                                                        src="/images/{{ \App\Models\Club::find($match['TeamAID'])['Logo'] }}"
                                                        alt=""><strong>{{ \App\Models\Club::find($match['TeamAID'])['ClubName'] }}</strong>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="nms-info">
                                                    <strong class="vs">VS</strong>
                                                    <p> <strong>Super Euro League</strong></p>
                                                    <p>{{ $match['DateTimeStart'] }} | 04:00 PM GMT+</p>
                                                    <p><span>{{ $match['Stadium'] }}</span></p>

                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="team-logo-right"><img
                                                        src="images/{{ \App\Models\Club::find($match['TeamBID'])['Logo'] }}"
                                                        alt="">
                                                    <strong>{{ \App\Models\Club::find($match['TeamBID'])['ClubName'] }}</strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                <!--Box End-->
                                <!--Box Start-->
                                @foreach ($matches as $match)
                                    <div class="nms-box">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="team-logo-left"> <img
                                                        src="/images/{{ \App\Models\Club::find($match['TeamAID'])['Logo'] }}"
                                                        alt=""><strong>{{ \App\Models\Club::find($match['TeamAID'])['ClubName'] }}</strong>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="nms-info">
                                                    <strong class="vs">VS</strong>
                                                    <p> <strong>Super Euro League</strong></p>
                                                    <p>{{ $match['DateTimeStart'] }} | 04:00 PM GMT+</p>
                                                    <p><span>{{ $match['Stadium'] }}</span></p>

                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="team-logo-right"><img
                                                        src="images/{{ \App\Models\Club::find($match['TeamBID'])['Logo'] }}"
                                                        alt="">
                                                    <strong>{{ \App\Models\Club::find($match['TeamBID'])['ClubName'] }}</strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                <!--Box End-->
                            </div>
                            <!--Next Matches Schedule End-->
                        </div>
                        <!--Fixture End-->
                        <!--Sidebar Start-->
                        <div class="col-lg-4">
                            <div class="sidebar">
                                <!--widget start-->

                                <!--widget start-->
                                <!--widget start-->
                                <div class="widget">
                                    <h4>Match Sponsors</h4>
                                    <ul class="match-sponsors">
                                        <li> <a href="#"><img src="/images/sitelogos1.png" alt=""></a>
                                        </li>
                                        <li> <a href="#"><img src="/images/sitelogos2.png" alt=""></a>
                                        </li>
                                        <li> <a href="#"><img src="/images/sitelogos3.png" alt=""></a>
                                        </li>
                                        <li> <a href="#"><img src="/images/sitelogos4.png" alt=""></a>
                                        </li>
                                    </ul>
                                </div>
                                <!--widget start-->

                                <!--widget start-->
                                <!--widget start-->
                                <div class="widget">
                                    <h4>Top Stories</h4>
                                    <div class="top-stories-widget">
                                        <div id="top-stories" class="owl-carousel owl-theme">
                                            <!--Slide 1 Start-->
                                            <div class="item">
                                                <ul class="top-stories">
                                                    <!--Story Start-->
                                                    <li class="story-row">
                                                        <div class="ts-thumb"><img src="/images/tsimg1.jpg"
                                                                alt=""> </div>
                                                        <div class="ts-txt">
                                                            <h5> <a href="#">Success is not Accident
                                                                    it’s a Result of Hard Work </a>
                                                            </h5>
                                                            <ul class="tsw-meta">
                                                                <li><a href="#">NFL League</a></li>
                                                                <li>12 Mar, 2020</li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <!--Story End-->
                                                    <!--Story Start-->
                                                    <li class="story-row">
                                                        <div class="ts-thumb"><img src="/images/tsimg1.jpg"
                                                                alt=""> </div>
                                                        <div class="ts-txt">
                                                            <h5> <a href="#">Success is not Accident
                                                                    it’s a Result of Hard Work </a>
                                                            </h5>
                                                            <ul class="tsw-meta">
                                                                <li><a href="#">NFL League</a></li>
                                                                <li>12 Mar, 2020</li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <!--Story End-->
                                                    <!--Story Start-->
                                                    <li class="story-row">
                                                        <div class="ts-thumb"><img src="/images/tsimg1.jpg"
                                                                alt=""> </div>
                                                        <div class="ts-txt">
                                                            <h5> <a href="#">Success is not Accident
                                                                    it’s a Result of Hard Work </a>
                                                            </h5>
                                                            <ul class="tsw-meta">
                                                                <li><a href="#">NFL League</a></li>
                                                                <li>12 Mar, 2020</li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <!--Story End-->
                                                    <!--Story Start-->
                                                    <li class="story-row">
                                                        <div class="ts-thumb"><img src="/images/tsimg1.jpg"
                                                                alt=""> </div>
                                                        <div class="ts-txt">
                                                            <h5> <a href="#">Success is not Accident
                                                                    it’s a Result of Hard Work </a>
                                                            </h5>
                                                            <ul class="tsw-meta">
                                                                <li><a href="#">NFL League</a></li>
                                                                <li>12 Mar, 2020</li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <!--Story End-->
                                                </ul>
                                            </div>
                                            <!--Slide 1 End-->
                                            <!--Slide 2 Start-->
                                            <div class="item">
                                                <ul class="top-stories">
                                                    <!--Story Start-->
                                                    <li class="story-row">
                                                        <div class="ts-thumb"><img src="/images/tsimg1.jpg"
                                                                alt=""> </div>
                                                        <div class="ts-txt">
                                                            <h5> <a href="#">Success is not Accident
                                                                    it’s a Result of Hard Work </a>
                                                            </h5>
                                                            <ul class="tsw-meta">
                                                                <li><a href="#">NFL League</a></li>
                                                                <li>12 Mar, 2020</li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <!--Story End-->
                                                    <!--Story Start-->
                                                    <li class="story-row">
                                                        <div class="ts-thumb"><img src="/images/tsimg1.jpg"
                                                                alt=""> </div>
                                                        <div class="ts-txt">
                                                            <h5> <a href="#">Success is not Accident
                                                                    it’s a Result of Hard Work </a>
                                                            </h5>
                                                            <ul class="tsw-meta">
                                                                <li><a href="#">NFL League</a></li>
                                                                <li>12 Mar, 2020</li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <!--Story End-->
                                                    <!--Story Start-->
                                                    <li class="story-row">
                                                        <div class="ts-thumb"><img src="/images/tsimg1.jpg"
                                                                alt=""> </div>
                                                        <div class="ts-txt">
                                                            <h5> <a href="#">Success is not Accident
                                                                    it’s a Result of Hard Work </a>
                                                            </h5>
                                                            <ul class="tsw-meta">
                                                                <li><a href="#">NFL League</a></li>
                                                                <li>12 Mar, 2020</li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <!--Story End-->
                                                    <!--Story Start-->
                                                    <li class="story-row">
                                                        <div class="ts-thumb"><img src="/images/tsimg1.jpg"
                                                                alt=""> </div>
                                                        <div class="ts-txt">
                                                            <h5> <a href="#">Success is not Accident
                                                                    it’s a Result of Hard Work </a>
                                                            </h5>
                                                            <ul class="tsw-meta">
                                                                <li><a href="#">NFL League</a></li>
                                                                <li>12 Mar, 2020</li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <!--Story End-->
                                                </ul>
                                            </div>
                                            <!--Slide 2 End-->
                                            <!--Slide 3 Start-->
                                            <div class="item">
                                                <ul class="top-stories">
                                                    <!--Story Start-->
                                                    <li class="story-row">
                                                        <div class="ts-thumb"><img src="/images/tsimg1.jpg"
                                                                alt=""> </div>
                                                        <div class="ts-txt">
                                                            <h5> <a href="#">Success is not Accident
                                                                    it’s a Result of Hard Work </a>
                                                            </h5>
                                                            <ul class="tsw-meta">
                                                                <li><a href="#">NFL League</a></li>
                                                                <li>12 Mar, 2020</li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <!--Story End-->
                                                    <!--Story Start-->
                                                    <li class="story-row">
                                                        <div class="ts-thumb"><img src="/images/tsimg1.jpg"
                                                                alt=""> </div>
                                                        <div class="ts-txt">
                                                            <h5> <a href="#">Success is not Accident
                                                                    it’s a Result of Hard Work </a>
                                                            </h5>
                                                            <ul class="tsw-meta">
                                                                <li><a href="#">NFL League</a></li>
                                                                <li>12 Mar, 2020</li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <!--Story End-->
                                                    <!--Story Start-->
                                                    <li class="story-row">
                                                        <div class="ts-thumb"><img src="/images/tsimg1.jpg"
                                                                alt=""> </div>
                                                        <div class="ts-txt">
                                                            <h5> <a href="#">Success is not Accident
                                                                    it’s a Result of Hard Work </a>
                                                            </h5>
                                                            <ul class="tsw-meta">
                                                                <li><a href="#">NFL League</a></li>
                                                                <li>12 Mar, 2020</li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <!--Story End-->
                                                    <!--Story Start-->
                                                    <li class="story-row">
                                                        <div class="ts-thumb"><img src="/images/tsimg1.jpg"
                                                                alt=""> </div>
                                                        <div class="ts-txt">
                                                            <h5> <a href="#">Success is not Accident
                                                                    it’s a Result of Hard Work </a>
                                                            </h5>
                                                            <ul class="tsw-meta">
                                                                <li><a href="#">NFL League</a></li>
                                                                <li>12 Mar, 2020</li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <!--Story End-->
                                                </ul>
                                            </div>
                                            <!--Slide 3 End-->
                                        </div>
                                    </div>
                                </div>
                                <!--widget end-->
                                <!--widget Start-->
                                <div class="widget">
                                    <h4>Be Social</h4>
                                    <ul class="social-media">
                                        <li>
                                            <div class="social fb"> <i class="fab fa-facebook-f"></i> <strong>
                                                    25,345</strong> <span>Likes</span> </div>
                                        </li>
                                        <li>
                                            <div class="social tw"> <i class="fab fa-twitter"></i> <strong> 5,345
                                                </strong> <span>Followers</span> </div>
                                        </li>
                                        <li>
                                            <div class="social yt"> <i class="fab fa-youtube"></i> <strong> 31,072
                                                </strong> <span>Subscribers</span> </div>
                                        </li>
                                        <li>
                                            <div class="social gp"> <i class="fab fa-google-plus-g"></i> <strong>3,345
                                                </strong> <span>Plus</span> </div>
                                        </li>
                                        <li>
                                            <div class="social insta"> <i class="fab fa-instagram"></i> <strong> 25,345
                                                </strong> <span>Followers</span> </div>
                                        </li>
                                        <li>
                                            <div class="social rss"> <i class="fas fa-rss"></i> <strong> 24,793 </strong>
                                                <span>Likes</span>
                                            </div>
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
        <!--team Page End-->
    </div>
    <!--Main Content End-->
@endsection
