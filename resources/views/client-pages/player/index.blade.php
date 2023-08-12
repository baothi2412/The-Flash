@extends('layouts.client.client-layout')


@section('content')
    <!--Main Slider Start-->
    <div class="inner-banner-header wf100">
        <h1 data-generated="Players Squad">Players Squad</h1>
        <div class="gt-breadcrumbs">
            <ul>
                <li> <a href="#" class="active"> <i class="fas fa-home"></i> Home </a> </li>
                <li> <a href="#"> Team </a> </li>
                <li> <a href="#"> Team Grid </a> </li>
            </ul>
        </div>
    </div>
    <!--Main Slider Start-->

    <!--Main Content Start-->
    <div class="main-content innerpagebg wf100">

        <!--Product Page Start-->
        <div class="team wf100 p80">



            <!--Banners Start-->
            <div class="player-squad">
                <div class="container">
                    <div class="row">
                        @foreach ($players as $player)
                            <!--Player Box Start-->
                            <div class="col-md-6">
                                <div class="player-box">

                                    <div class="player-thumb">
                                        <a href="/player-details/{{ $player->id }}">
                                            <!-- Điều hướng dựa trên ID của cầu thủ -->
                                            <img src="images/{{ \App\Models\Player::find($player['id'])['Avatar'] }}"
                                                alt="" width="240px" height="280px">
                                        </a>
                                    </div>
                                    <div class="player-txt"> <span class="star-tag"><i class="fas fa-star"></i></span>
                                        <h3>{{ \App\Models\Player::find($player['id'])['Name'] }}</h3>
                                        <strong
                                            class="player-desi">{{ \App\Models\Player::find($player['id'])['Position'] }}</strong>
                                        <p> Hi, I am {{ \App\Models\Player::find($player['id'])['Name'] }} the team captain
                                            of the soccer club.</p>
                                        <ul>
                                            <li>{{ \Carbon\Carbon::parse($player->Birthdate)->age }} <span>Age</span></li>
                                            <li>87 <span>matches</span></li>
                                            <li>113 <span>Goals</span></li>
                                            <li>87 <span>matches</span></li>
                                        </ul>
                                        <a class="playerbio" href="#"> <i
                                                class="far fa-arrow-alt-circle-right"></i></a>
                                        <a href="#" class="follow">Follow</a>
                                    </div>

                                </div>
                            </div>

                            <!--Player Box End-->
                        @endforeach

                        <!--Banners End-->

                        <!--Products Filter Start-->
                        <div class="team-grid">
                            <div class="container">
                                <div class="row">

                                    <!--Team Box Start-->
                                    <div class="col-lg-3 col-md-6">
                                        <div class="team-squad-box">
                                            <div class="num">03</div>
                                            <span class="star-tag"><i class="fas fa-star"></i></span> <a href="#"
                                                class="follow">Follow</a>
                                            <div class="ts-cap">
                                                <a href="/player-details">
                                                    <h4>{{ \App\Models\Player::find($player['id'])['Name'] }}</h4>
                                                </a>

                                                <ul>
                                                    <li>{{ \Carbon\Carbon::parse($player->Birthdate)->age }}
                                                        <span>Age</span>
                                                    </li>
                                                    <li>87 <span>matches</span></li>
                                                    <li>113 <span>Goals</span></li>
                                                    <li>87 <span>matches</span></li>
                                                </ul>
                                            </div>
                                            <img src="images/{{ \App\Models\Player::find($player['id'])['Avatar'] }}"
                                                width="255px" height="350px" alt="">
                                        </div>
                                    </div>
                                    <!--Team Box End-->

                                    <!--Team Box Start-->

                                    <style>
                                        .team-squad-box img {
                                            width: 255px;
                                            height: 350px;
                                        }
                                    </style>



                                    <!--Team Box Start-->
                                    <div class="col-lg-3 col-md-6">
                                        <div class="team-squad-box">
                                            <div class="num">06</div>
                                            <span class="star-tag"><i class="fas fa-star"></i></span> <a href="#"
                                                class="follow">Follow</a>
                                            <div class="ts-cap">
                                                <h4>Williams Lee</h4>
                                                <p>Defender</p>
                                                <ul>
                                                    <li>29 <span>Age</span></li>
                                                    <li>87 <span>matches</span></li>
                                                    <li>113 <span>Goals</span></li>
                                                    <li>87 <span>matches</span></li>
                                                </ul>
                                            </div>
                                            <img src="images/tplayer6.jpg" alt="">
                                        </div>
                                    </div>
                                    <!--Team Box End-->

                                    <!--Team Box Start-->
                                    <div class="col-lg-3 col-md-6">
                                        <div class="team-squad-box">
                                            <div class="num">07</div>
                                            <span class="star-tag"><i class="fas fa-star"></i></span> <a href="#"
                                                class="follow">Follow</a>
                                            <div class="ts-cap">
                                                <h4>Phillips Hunt</h4>
                                                <p>Defender</p>
                                                <ul>
                                                    <li>29 <span>Age</span></li>
                                                    <li>87 <span>matches</span></li>
                                                    <li>113 <span>Goals</span></li>
                                                    <li>87 <span>matches</span></li>
                                                </ul>
                                            </div>
                                            <img src="images/tplayer6.jpg" alt="">
                                        </div>
                                    </div>
                                    <!--Team Box End-->

                                    <!--Team Box Start-->
                                    <div class="col-lg-3 col-md-6">
                                        <div class="team-squad-box">
                                            <div class="num">08</div>
                                            <span class="star-tag"><i class="fas fa-star"></i></span> <a href="#"
                                                class="follow">Follow</a>
                                            <div class="ts-cap">
                                                <h4>Jordan Grand</h4>
                                                <p>Defender</p>
                                                <ul>
                                                    <li>29 <span>Age</span></li>
                                                    <li>87 <span>matches</span></li>
                                                    <li>113 <span>Goals</span></li>
                                                    <li>87 <span>matches</span></li>
                                                </ul>
                                            </div>
                                            <img src="images/tplayer5.jpg" alt="">
                                        </div>
                                    </div>
                                    <!--Team Box End-->


                                    <!--Team Box Start-->
                                    <div class="col-lg-3 col-md-6">
                                        <div class="team-squad-box">
                                            <div class="num">09</div>
                                            <span class="star-tag"><i class="fas fa-star"></i></span> <a href="#"
                                                class="follow">Follow</a>
                                            <div class="ts-cap">
                                                <h4>Harry Simon</h4>
                                                <p>Defender</p>
                                                <ul>
                                                    <li>29 <span>Age</span></li>
                                                    <li>87 <span>matches</span></li>
                                                    <li>113 <span>Goals</span></li>
                                                    <li>87 <span>matches</span></li>
                                                </ul>
                                            </div>
                                            <img src="images/tplayer6.jpg" alt="">
                                        </div>
                                    </div>
                                    <!--Team Box End-->


                                    <!--Team Box Start-->
                                    <div class="col-lg-3 col-md-6">
                                        <div class="team-squad-box">
                                            <div class="num">10</div>
                                            <span class="star-tag"><i class="fas fa-star"></i></span> <a href="#"
                                                class="follow">Follow</a>
                                            <div class="ts-cap">
                                                <h4>Billy Connor</h4>
                                                <p>Defender</p>
                                                <ul>
                                                    <li>29 <span>Age</span></li>
                                                    <li>87 <span>matches</span></li>
                                                    <li>113 <span>Goals</span></li>
                                                    <li>87 <span>matches</span></li>
                                                </ul>
                                            </div>
                                            <img src="images/tplayer5.jpg" alt="">
                                        </div>
                                    </div>
                                    <!--Team Box End-->


                                    <!--Team Box Start-->
                                    <div class="col-lg-3 col-md-6">
                                        <div class="team-squad-box">
                                            <div class="num">11</div>
                                            <span class="star-tag"><i class="fas fa-star"></i></span> <a href="#"
                                                class="follow">Follow</a>
                                            <div class="ts-cap">
                                                <h4>Callum Mark</h4>
                                                <p>Defender</p>
                                                <ul>
                                                    <li>29 <span>Age</span></li>
                                                    <li>87 <span>matches</span></li>
                                                    <li>113 <span>Goals</span></li>
                                                    <li>87 <span>matches</span></li>
                                                </ul>
                                            </div>
                                            <img src="images/tplayer5.jpg" alt="">
                                        </div>
                                    </div>
                                    <!--Team Box End-->

                                    <!--Team Box Start-->
                                    <div class="col-lg-3 col-md-6">
                                        <div class="team-squad-box">
                                            <div class="num">12</div>
                                            <span class="star-tag"><i class="fas fa-star"></i></span> <a href="#"
                                                class="follow">Follow</a>
                                            <div class="ts-cap">
                                                <h4>Stewart Paul</h4>
                                                <p>Defender</p>
                                                <ul>
                                                    <li>29 <span>Age</span></li>
                                                    <li>87 <span>matches</span></li>
                                                    <li>113 <span>Goals</span></li>
                                                    <li>87 <span>matches</span></li>
                                                </ul>
                                            </div>
                                            <img src="images/tplayer6.jpg" alt="">
                                        </div>
                                    </div>
                                    <!--Team Box End-->


                                    <!--Team Box Start-->
                                    <div class="col-lg-3 col-md-6">
                                        <div class="team-squad-box">
                                            <div class="num">13</div>
                                            <span class="star-tag"><i class="fas fa-star"></i></span> <a href="#"
                                                class="follow">Follow</a>
                                            <div class="ts-cap">
                                                <h4>Carl Martin</h4>
                                                <p>Defender</p>
                                                <ul>
                                                    <li>29 <span>Age</span></li>
                                                    <li>87 <span>matches</span></li>
                                                    <li>113 <span>Goals</span></li>
                                                    <li>87 <span>matches</span></li>
                                                </ul>
                                            </div>
                                            <img src="images/tplayer5.jpg" alt="">
                                        </div>
                                    </div>
                                    <!--Team Box End-->


                                    <!--Team Box Start-->
                                    <div class="col-lg-3 col-md-6">
                                        <div class="team-squad-box">
                                            <div class="num">14</div>
                                            <span class="star-tag"><i class="fas fa-star"></i></span> <a href="#"
                                                class="follow">Follow</a>
                                            <div class="ts-cap">
                                                <h4>Ramsy Geordion</h4>
                                                <p>League Captain</p>
                                                <ul>
                                                    <li>29 <span>Age</span></li>
                                                    <li>87 <span>matches</span></li>
                                                    <li>113 <span>Goals</span></li>
                                                    <li>87 <span>matches</span></li>
                                                </ul>
                                            </div>
                                            <img src="images/tplayer6.jpg" alt="">
                                        </div>
                                    </div>
                                    <!--Team Box End-->


                                </div>

                                <div class="row">
                                    <div class="gt-pagination">
                                        <nav aria-label="Page navigation example">
                                            <ul class="pagination justify-content-center">
                                                <li class="page-item"> <a class="page-link" href="#"
                                                        tabindex="-1" aria-disabled="true"><i
                                                            class="fas fa-angle-left"></i></a> </li>
                                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                <li class="page-item active"><a class="page-link" href="#">2</a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                <li class="page-item"> <a class="page-link" href="#"><i
                                                            class="fas fa-angle-right"></i></a> </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!--Products Filter End-->

                    </div>
                    <!--Product Page End-->

                </div>
                <!--Main Content End-->
            @endsection
