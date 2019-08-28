@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row pr-5 pl-5">
        <div class="col-3 p-5">
            <img style="height: 150px; width: 150px" src="https://instagram.fsub3-2.fna.fbcdn.net/vp/198e9dfc28c0c9b58bb61be50756539c/5E05AE19/t51.2885-19/s320x320/52551508_628689364241273_3155150419513049088_n.jpg?_nc_ht=instagram.fsub3-2.fna.fbcdn.net&_nc_cat=105" class="rounded-circle">
        </div>
        <div class="col-8 pt-5">
            <div class="d-flex">
                <div class="pt-0 pr-4"><strong style="font-size: 25px">asepj96</strong></div>
                    <div class="pt-2 pr-4">
                        <button style="border-radius: 4px;font-size: 14px;font-weight: bold;">
                            <strong>
                            Edit Profile
                            </strong>
                        </button>
                    </div>
                        <div class="pt-2 pr-4">
                            <button class="p-0 border-0 bg-transparent">
                                <img src="/svg/menu.svg" style="width: 30px; height: 30px;" class="rounded-circle">
                            </button>    
                        </div>
            </div>
            <div class="d-flex">
            <div class="pr-5"><strong class="pr-1">5</strong>posts</div>
            <div class="pr-5"><strong class="pr-1">106</strong>followers</div>
            <div class="pr-5"><strong class="pr-1">161</strong>following</div>
            </div>
            
        </div>
    </div>
</div>
@endsection
