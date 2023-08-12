@extends('layouts.client.client-layout')


@section('content')
 <!--Main Slider Start-->
 <div class="match-header wf100">
    <div class="container">
       <div class="row">
          <div class="col-md-12">
             <h5>Super Lig</h5>
             <p>25.Hafta Maçı</p>
             <ul class="teamz">
                <li class="mt-left"><img src="images/ks.png" height="80" alt=""> <strong>Kayserispor</strong> </li>
                <li class="mt-center-score">
                   <div class="score-left"> <span>2</span> <strong>loss</strong> </div>
                   <div class="score-right"> <span>3</span> <strong>win</strong> </div>
                </li>
                <li class="mt-right"> <img src="images/gs.png" height="80" alt=""> <strong>Galatasaray</strong> </li>
             </ul>
             <ul class="match-score">
                <li class="text-right">
                   <p>Charlie Darren <span>(1 goal)</span> <i class="fas fa-futbol"></i></p>
                   <p>kevin Jamie <span>(1 goal)</span> <i class="fas fa-futbol"></i></p>
                </li>
                <li class="text-left">
                   <p><i class="fas fa-futbol"></i> Jon Taylor <span>(1 goal)</span></p>
                   <p><i class="fas fa-futbol"></i> Steven Dean <span>(1 goal)</span></p>
                   <p><i class="fas fa-futbol"></i> Smith Ross <span>(1 goal)</span></p>
                </li>
             </ul>
          </div>
       </div>
    </div>
    <ul class="m-date-loc">
       <li><i class="fas fa-calendar-alt"></i> 17 Aralık, 2020</li>
       <li class="pipeline"> | </li>
       <li><i class="fas fa-map-marker-alt"></i> Kayseri Kadir Has Stadı</li>
    </ul>
 </div>
 <!--Main Slider Start-->

 <!--Main Content Start-->
 <div class="main-content innerpagebg wf100 p80">

    <!--News Large Page Start-->

    <!--Start-->
    <div class="news-large">
       <div class="container">
          <div class="row">
             <!--News Start-->
             <div class="col-lg-8">
                <div class="row">

                   <!--Game Statistics Start-->
                   <div class="col-md-4">
                      <div class="game-statistics">
                         <h4>Game Statistics</h4>
                         <table>
                            <tr>
                               <td>4</td>
                               <td><strong>Yellow Cards</strong></td>
                               <td>1</td>
                            </tr>
                            <tr>
                               <td>2</td>
                               <td><strong>Red Cards</strong></td>
                               <td>1</td>
                            </tr>
                            <tr>
                               <td>7</td>
                               <td><strong>Corner Kick</strong></td>
                               <td>9</td>
                            </tr>
                            <tr>
                               <td>6</td>
                               <td><strong>Saves</strong></td>
                               <td>7</td>
                            </tr>
                            <tr>
                               <td>12</td>
                               <td><strong>Goal Shots</strong></td>
                               <td>10</td>
                            </tr>
                            <tr>
                               <td>27</td>
                               <td><strong>Shots</strong></td>
                               <td>23</td>
                            </tr>
                         </table>
                      </div>
                   </div>
                   <!--Game Statistics End-->
                   <!--Match Results Start-->
                   <div class="col-md-8">
                      <div class="match-results-table">
                         <h4>Match Results</h4>
                         <table>
                            <thead>
                               <tr>
                                  <td>Team</td>
                                  <td>1<sup>st</sup> half</td>
                                  <td>2<sup>nd</sup> Half</td>
                                  <td>Goals</td>
                                  <td>Possession</td>
                               </tr>
                            </thead>
                            <tr>
                               <td>North Carolina</td>
                               <td>10</td>
                               <td>60</td>
                               <td>02</td>
                               <td>12</td>
                            </tr>
                            <tr>
                               <td>Indy Eleven</td>
                               <td>25</td>
                               <td>28</td>
                               <td>04</td>
                               <td>10</td>
                            </tr>
                         </table>
                      </div>
                      <img src="images/advertisehere.jpg" alt="" class="img-responsive">
                   </div>
                   <!--Match Results End-->
                </div>
                <!--Team Prograss Start-->
                <div class="team-one-scrore">
                   <h4>Indy Eleven <span>(W)</span></h4>
                   <ul>
                      <!--Box Start-->
                      <li>
                         <div class="progress-circle over50 p58">
                            <span>58.7%</span>
                            <div class="left-half-clipper">
                               <div class="first50-bar"></div>
                               <div class="value-bar"></div>
                            </div>
                         </div>
                         <strong>Shot Accuracy</strong>
                      </li>
                      <!--Box End-->
                      <!--Box Start-->
                      <li>
                         <div class="progress-circle over50 p68">
                            <span>68.0%</span>
                            <div class="left-half-clipper">
                               <div class="first50-bar"></div>
                               <div class="value-bar"></div>
                            </div>
                         </div>
                         <strong>Possesion</strong>
                      </li>
                      <!--Box End-->
                      <!--Box Start-->
                      <li>
                         <div class="progress-circle over50 p78">
                            <span>78.0%</span>
                            <div class="left-half-clipper">
                               <div class="first50-bar"></div>
                               <div class="value-bar"></div>
                            </div>
                         </div>
                         <strong>Passes Accuracy</strong>
                      </li>
                      <!--Box End-->
                      <!--Box Start-->
                      <li>
                         <div class="progress-circle over50 p88">
                            <span>88.2%</span>
                            <div class="left-half-clipper">
                               <div class="first50-bar"></div>
                               <div class="value-bar"></div>
                            </div>
                         </div>
                         <strong>Total Accuracy</strong>
                      </li>
                      <!--Box End-->
                   </ul>
                </div>
                <!--Team Prograss End-->
                <!--Team Prograss Start-->
                <div class="team-one-scrore team-two">
                   <h4>North Carolina <span>(L)</span></h4>
                   <ul>
                      <!--Box Start-->
                      <li>
                         <div class="progress-circle over50 p58">
                            <span>58.7%</span>
                            <div class="left-half-clipper">
                               <div class="first50-bar"></div>
                               <div class="value-bar"></div>
                            </div>
                         </div>
                         <strong>Shot Accuracy</strong>
                      </li>
                      <!--Box End-->
                      <!--Box Start-->
                      <li>
                         <div class="progress-circle over50 p68">
                            <span>68.0%</span>
                            <div class="left-half-clipper">
                               <div class="first50-bar"></div>
                               <div class="value-bar"></div>
                            </div>
                         </div>
                         <strong>Possesion</strong>
                      </li>
                      <!--Box End-->
                      <!--Box Start-->
                      <li>
                         <div class="progress-circle over50 p78">
                            <span>78.0%</span>
                            <div class="left-half-clipper">
                               <div class="first50-bar"></div>
                               <div class="value-bar"></div>
                            </div>
                         </div>
                         <strong>Passes Accuracy</strong>
                      </li>
                      <!--Box End-->
                      <!--Box Start-->
                      <li>
                         <div class="progress-circle over50 p88">
                            <span>88.2%</span>
                            <div class="left-half-clipper">
                               <div class="first50-bar"></div>
                               <div class="value-bar"></div>
                            </div>
                         </div>
                         <strong>Total Accuracy</strong>
                      </li>
                      <!--Box End-->
                   </ul>
                </div>
                <!--Team Prograss End-->
                <!--Video Start-->
                <div class="watchvideohighlights">
                   <h4>Watch Video Highlights</h4>
                   <div class="video-img"> <a href="#"><i class="far fa-play-circle"></i></a> <img src="images/videoimg.jpg" alt=""> </div>
                </div>
                <!--Video End-->
                <div class="match-players">
                   <div class="row">
                      <div class="col-md-6">
                         <div class="team-palyers">
                            <h4>North Carolina</h4>
                            <table>
                               <tr>
                                  <td>2</td>
                                  <td><strong>Williams Lee</strong> <span>(Defender)</span></td>
                                  <td><i class="fas fa-square"></i> <i class="fas fa-futbol"></i></td>
                               </tr>
                               <tr>
                                  <td>5</td>
                                  <td><strong>Philips Hunt</strong> <span>(GoalKeeper)</span></td>
                                  <td><i class="fas fa-square"></i> <i class="fas fa-futbol"></i></td>
                               </tr>
                               <tr>
                                  <td>7</td>
                                  <td><strong>Harry Simmon</strong> <span> (Defender)</span></td>
                                  <td><i class="fas fa-square"></i> <i class="fas fa-square"></i> <i class="fas fa-futbol"></i></td>
                               </tr>
                               <tr>
                                  <td>19</td>
                                  <td><strong>Callum Mark</strong> <span>(MidFielder)</span></td>
                                  <td><i class="fas fa-square"></i> <i class="fas fa-futbol"></i></td>
                               </tr>
                               <tr>
                                  <td>22</td>
                                  <td><strong>Dan Cameron</strong> <span>(Forwarder)</span></td>
                                  <td><i class="fas fa-square"></i> <i class="fas fa-futbol"></i></td>
                               </tr>
                            </table>
                         </div>
                      </div>
                      <div class="col-md-6">
                         <div class="team-palyers c2">
                            <h4>Indy Eleven</h4>
                            <table>
                               <tr>
                                  <td>25</td>
                                  <td><strong>Williams Lee</strong> <span>(Defender)</span></td>
                                  <td><i class="fas fa-square"></i> <i class="fas fa-futbol"></i></td>
                               </tr>
                               <tr>
                                  <td>18</td>
                                  <td><strong>Philips Hunt</strong> <span>(GoalKeeper)</span></td>
                                  <td><i class="fas fa-square"></i> <i class="fas fa-futbol"></i></td>
                               </tr>
                               <tr>
                                  <td>3</td>
                                  <td><strong>Harry Simmon</strong> <span> (Defender)</span></td>
                                  <td><i class="fas fa-square"></i> <i class="fas fa-square"></i> <i class="fas fa-futbol"></i></td>
                               </tr>
                               <tr>
                                  <td>99</td>
                                  <td><strong>Callum Mark</strong> <span>(MidFielder)</span></td>
                                  <td><i class="fas fa-square"></i> <i class="fas fa-futbol"></i></td>
                               </tr>
                               <tr>
                                  <td>8</td>
                                  <td><strong>Dan Cameron</strong> <span>(Forwarder)</span></td>
                                  <td><i class="fas fa-square"></i> <i class="fas fa-futbol"></i></td>
                               </tr>
                            </table>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="player-bio">
                   <h4>Match Report</h4>
                   <div class="txt">
                      <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus.</p>
                      <blockquote> Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt labore at magnam </blockquote>
                      <p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
                   </div>
                </div>
                <div class="match-image-collection">
                   <h4>Match Image Collection</h4>
                   <img src="images/nlarge5.jpg" alt="">
                </div>
             </div>
             <!--News End-->
             <!--Sidebar Start-->
             <div class="col-lg-4">
                <div class="sidebar">
                   <!--widget start-->
                   <div class="widget sidebar-ad"> <img src="images/sideadbanner1.jpg" alt=""> </div>
                   <!--widget end-->
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
                            <img src="images/fvid1.jpg" alt="">
                         </div>
                         <div class="fvideo-box">
                            <div class="fvid-cap">
                               <a class="vicon" href="#"><img src="images/play.png" alt=""></a>
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
                      <div class="ts-thumb"><img src="images/tsimg1.jpg" alt=""> </div>
                      <div class="ts-txt">
                        <h5> <a href="#">Success is not Accident it’s a Result of Hard Work </a>
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
                      <div class="ts-thumb"><img src="images/tsimg1.jpg" alt=""> </div>
                      <div class="ts-txt">
                        <h5> <a href="#">Toon stage injury-time come back at Everton </a>
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
                      <div class="ts-thumb"><img src="images/tsimg1.jpg" alt=""> </div>
                      <div class="ts-txt">
                        <h5> <a href="#">League continues support for Rainbow Laces </a>
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
                      <div class="ts-thumb"><img src="images/tsimg1.jpg" alt=""> </div>
                      <div class="ts-txt">
                        <h5> <a href="#">Tigers would’ve ‘loved’ to play for Tigers </a>
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
                      <div class="ts-thumb"><img src="images/tsimg1.jpg" alt=""> </div>
                      <div class="ts-txt">
                        <h5> <a href="#">FC Champs will learn from Tigers mistake </a>
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
                      <div class="ts-thumb"><img src="images/tsimg1.jpg" alt=""> </div>
                      <div class="ts-txt">
                        <h5> <a href="#">Toon stage injury-time come back at Everton </a>
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
                      <div class="ts-thumb"><img src="images/tsimg1.jpg" alt=""> </div>
                      <div class="ts-txt">
                        <h5> <a href="#">Tigers would’ve ‘loved’ to play for Tigers </a>
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
                      <div class="ts-thumb"><img src="images/tsimg1.jpg" alt=""> </div>
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
                      <div class="ts-thumb"><img src="images/tsimg1.jpg" alt=""> </div>
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
                      <div class="ts-thumb"><img src="images/tsimg1.jpg" alt=""> </div>
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
                      <div class="ts-thumb"><img src="images/tsimg1.jpg" alt=""> </div>
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
                      <div class="ts-thumb"><img src="images/tsimg1.jpg" alt=""> </div>
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
                   <!--widget start-->
                   <div class="widget">
                      <h4>Points Table</h4>
                      <div class="point-table-widget">
                         <table>
                            <thead>
                               <tr>
                                  <th>P</th>
                                  <th>Team</th>
                                  <th>W</th>
                                  <th>L</th>
                                  <th>Pts</th>
                               </tr>
                            </thead>
                            <tbody>
                               <tr>
                                  <td>1</td>
                                  <td class="tn"><strong>Bethlehem</strong></td>
                                  <td>22</td>
                                  <td>2</td>
                                  <td><strong>140</strong></td>
                               </tr>
                               <tr>
                                  <td>2</td>
                                  <td class="tn"><strong>Chirston Battery</strong></td>
                                  <td>19</td>
                                  <td>5</td>
                                  <td><strong>138</strong></td>
                               </tr>
                               <tr>
                                  <td>3</td>
                                  <td class="tn"><strong>Charlotte</strong></td>
                                  <td>18</td>
                                  <td>3</td>
                                  <td><strong>130</strong></td>
                               </tr>
                               <tr>
                                  <td>4</td>
                                  <td class="tn"><strong>FC Cincinnati</strong></td>
                                  <td>17</td>
                                  <td>2</td>
                                  <td><strong>126</strong></td>
                               </tr>
                               <tr>
                                  <td>5</td>
                                  <td class="tn"><strong>Indy Eleven</strong></td>
                                  <td>16</td>
                                  <td>2</td>
                                  <td><strong>110</strong></td>
                               </tr>
                               <tr>
                                  <td>6</td>
                                  <td class="tn"><strong>Louisville City</strong></td>
                                  <td>15</td>
                                  <td>6</td>
                                  <td><strong>108</strong></td>
                               </tr>
                               <tr>
                                  <td>7</td>
                                  <td class="tn"><strong>Nashville SC</strong></td>
                                  <td>14</td>
                                  <td>8</td>
                                  <td><strong>106</strong></td>
                               </tr>
                               <tr>
                                  <td>8</td>
                                  <td class="tn"><strong>NYK Red Bulls</strong></td>
                                  <td>14</td>
                                  <td>8</td>
                                  <td><strong>106</strong></td>
                               </tr>
                               <tr>
                                  <td>9</td>
                                  <td class="tn"><strong>North Carolina</strong></td>
                                  <td>14</td>
                                  <td>8</td>
                                  <td><strong>106</strong></td>
                               </tr>
                               <tr>
                                  <td>10</td>
                                  <td class="tn"><strong>Ottawa Fury</strong></td>
                                  <td>14</td>
                                  <td>8</td>
                                  <td><strong>106</strong></td>
                               </tr>
                            </tbody>
                         </table>
                      </div>
                   </div>
                   <!--widget start-->
                   <!--widget start-->
                   <div class="widget">
                      <h4>Last Match Result</h4>
                      <div class="last-match-widget">
                         <p> <strong>Super Asia Cup</strong> 18 Dec. 2018  |  04:00-07:00 </p>
                         <ul class="match-teams-vs">
                            <li class="team-logo"><img src="images/nmf-logo1.png" alt=""> <strong>FC Champs</strong> </li>
                            <li class="mvs">
                               <ul class="mres">
                                  <li> <strong>2</strong> <span>L</span> </li>
                                  <li> <strong>3</strong> <span>W</span> </li>
                               </ul>
                            </li>
                            <li class="team-logo"><img src="images/nmf-logo2.png" alt=""> <strong>Tigers</strong> </li>
                         </ul>
                         <ul class="mp-goals">
                            <li>
                               <p>D. Charlie <span>(1 goal)</span></p>
                               <p>J. Kevin <span>(1 goal)</span></p>
                            </li>
                            <li>
                               <p>Jon T. <span>(1 goal)</span></p>
                               <p> Steven D. <span>(1 goal)</span></p>
                               <p> Smith R. <span>(1 goal)</span></p>
                            </li>
                         </ul>
                         <div class="matchreport"> <a href="#">Match Report</a> </div>
                      </div>
                   </div>
                   <!--widget start-->
                   <!--widget start-->
                   <div class="widget">
                      <h4>Match Sponsors</h4>
                      <ul class="match-sponsors">
                         <li> <a href="#"><img src="images/sitelogos1.png" alt=""></a> </li>
                         <li> <a href="#"><img src="images/sitelogos2.png" alt=""></a> </li>
                         <li> <a href="#"><img src="images/sitelogos3.png" alt=""></a> </li>
                         <li> <a href="#"><img src="images/sitelogos4.png" alt=""></a> </li>
                         <li> <a href="#"><img src="images/sitelogos5.png" alt=""></a> </li>
                         <li> <a href="#"><img src="images/sitelogos6.png" alt=""></a> </li>
                      </ul>
                   </div>
                   <!--widget start-->
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
 <!--Main Content End-->
 @endsection
