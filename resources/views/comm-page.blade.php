@extends('layouts.navuser')
@section('content')

    <div class="cover">
        <img class="img" src="img/cover.png" />
    </div>
    <div class="circle-box">
        <div class="ellipse"></div>
    </div>
    <div class="comm-title">
        <div class="group">
            <p class="doctor-s-recommended">Doctor&#39;s Recommended Meal Of The Day!</p>
            <div class="text-wrapper">thh/DRMOTD</div>
        </div>
    </div>
    <div class="status-bell">
        <div class="group">
            <div class="overlap-group-wrapper">
                <div class="overlap-group">
                    <div class="text-wrapper">Joined</div>
                </div>
            </div>
        <img class="bell" src="img/bell-1.png" />
        </div>
    </div>

    <div class="attachment">
        <div class="group">
            <img class="link" src="img/link-1.png" />
            <div class="text-wrapper">routine.docs</div>
        </div>
    </div>
    <div class="abt-comm">
        <div class="rectangle">
            <div class="title">
                <div class="group">
                    <div class="text-wrapper">About Community</div>
                    <img class="ellipsis" src="img/ellipsis.png" />
                </div>
            </div>
            <div class="line">
                <img class="line" src="img/line-111.svg" />
            </div>
            <div class="label">
                <p class="lorem-ipsum-dolor">
                    &#34;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br>Ut enim ad quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<br>Lorem ipsum dolor, sit amet consectetur adipisicing elit.<br>Eius cum exercitationem odio, quo tempora, odit cumque itaque molestias magni tempore rerum dolorem minus ipsa molestiae incidunt, fugiat blanditiis id laboriosam.<br>Lorem ipsum dolor, sit amet consectetur adipisicing elit.<br>Eius cum exercitationem odio, quo tempora, odit cumque itaque molestias magni tempore rerum dolorem minus ipsa molestiae incidunt, fugiat blanditiis id laboriosam.”
                </p> 
            </div>
        </div>
    </div>

    <div id="page-nav"></div>
    <div id="create-input"></div>
    <div id="post1"></div>

<style>
    .page-nav {
        margin-top: 0;
        top: 33rem;
        left: 20.8rem;
    }
    .create-input {
        top: 37rem;
        left: 19rem;
    }
    .post1 {
        top: 42.7rem;
        left: 19rem;
    }

</style>


@stop