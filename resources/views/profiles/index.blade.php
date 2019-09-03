@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row p-3">
        <div class="col-3 p-5">
            <img style="height: 150px; width: 150px" src="https://instagram.fsub3-2.fna.fbcdn.net/vp/198e9dfc28c0c9b58bb61be50756539c/5E05AE19/t51.2885-19/s320x320/52551508_628689364241273_3155150419513049088_n.jpg?_nc_ht=instagram.fsub3-2.fna.fbcdn.net&_nc_cat=105" class="rounded-circle">
        </div>
        <div class="col-8 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <div class="pt-0 pr-4"><a style="font-size: 25px">{{$user->username}}</a></div>
                <a href="#"> Add New Post</a>
                    <!-- <div class="pt-2 pr-4">
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
                        </div> -->
            </div>
            <div class="d-flex pt-1">
                <div class="pr-5"><strong class="pr-1">5</strong>posts</div>
                <div class="pr-5"><strong class="pr-1">106</strong>followers</div>
                <div class="pr-5"><strong class="pr-1">161</strong>following</div>
            </div>
                <div class="pt-1"><strong>{{$user->profile->title}}</strong></div>
                <div class="pt-1"><a>{{ $user->profile->description}}</a></div>
                <div class="pt-1"><a href="#">{{ $user->profile->url}}</a></div>
        </div>
    </div>
    <div style="flex-direction: column;padding-top: 0px">
        <div class="row pt-4 pl-4 pr-4">
            <div class="col-4"><img src="https://instagram.fcgk8-2.fna.fbcdn.net/vp/8043d0a7dbeb6e3feb7fd80b644603d1/5DF5A311/t51.2885-15/sh0.08/e35/c3.0.743.743a/s640x640/68657064_406038826685251_8840140737341399690_n.jpg?_nc_ht=instagram.fcgk8-2.fna.fbcdn.net&amp;_nc_cat=107" class="w-100" style="width:60%;height:90%"></div>
            <div class="col-4"><img src="https://instagram.fcgk8-1.fna.fbcdn.net/vp/9ecde750278a5983218232d7d2cd427f/5E056371/t51.2885-15/sh0.08/e35/c0.75.877.877a/s640x640/67524515_156209612234747_3747271840880064739_n.jpg?_nc_ht=instagram.fcgk8-1.fna.fbcdn.net&amp;_nc_cat=111" class="w-100" style="width:60%;height:90%"></div>
            <div class="col-4"><img src="https://instagram.fcgk9-2.fna.fbcdn.net/vp/f122638433004159407760d30e927c02/5DF558D5/t51.2885-15/e35/c96.0.557.557/69461407_170809170634599_1337765637046294646_n.jpg?_nc_ht=instagram.fcgk9-2.fna.fbcdn.net&amp;_nc_cat=103" class="w-100" style="width:60%;height:90%"></div>
        </div>
    </div>
    <div style="flex-direction: column;padding-top: 0px">
        <div class="row pt-1 pl-4 pr-4">
            <div class="col-4"><img src="https://instagram.fcgk8-2.fna.fbcdn.net/vp/8043d0a7dbeb6e3feb7fd80b644603d1/5DF5A311/t51.2885-15/sh0.08/e35/c3.0.743.743a/s640x640/68657064_406038826685251_8840140737341399690_n.jpg?_nc_ht=instagram.fcgk8-2.fna.fbcdn.net&amp;_nc_cat=107" class="w-100" style="width:60%;height:90%"></div>
            <div class="col-4"><img src="https://instagram.fcgk8-2.fna.fbcdn.net/vp/8043d0a7dbeb6e3feb7fd80b644603d1/5DF5A311/t51.2885-15/sh0.08/e35/c3.0.743.743a/s640x640/68657064_406038826685251_8840140737341399690_n.jpg?_nc_ht=instagram.fcgk8-2.fna.fbcdn.net&amp;_nc_cat=107" class="w-100" style="width:60%;height:90%"></div>
            <div class="col-4"><img src="https://instagram.fcgk8-2.fna.fbcdn.net/vp/8043d0a7dbeb6e3feb7fd80b644603d1/5DF5A311/t51.2885-15/sh0.08/e35/c3.0.743.743a/s640x640/68657064_406038826685251_8840140737341399690_n.jpg?_nc_ht=instagram.fcgk8-2.fna.fbcdn.net&amp;_nc_cat=107" class="w-100" style="width:60%;height:90%"></div>
        </div>
    </div>
    <div style="flex-direction: column;padding-top: 0px">
        <div class="row pt-1 pl-4 pr-4">
            <div class="col-4"><img src="https://instagram.fcgk8-2.fna.fbcdn.net/vp/8043d0a7dbeb6e3feb7fd80b644603d1/5DF5A311/t51.2885-15/sh0.08/e35/c3.0.743.743a/s640x640/68657064_406038826685251_8840140737341399690_n.jpg?_nc_ht=instagram.fcgk8-2.fna.fbcdn.net&amp;_nc_cat=107" class="w-100" style="width:60%;height:90%"></div>
            <div class="col-4"><img src="https://instagram.fcgk8-2.fna.fbcdn.net/vp/8043d0a7dbeb6e3feb7fd80b644603d1/5DF5A311/t51.2885-15/sh0.08/e35/c3.0.743.743a/s640x640/68657064_406038826685251_8840140737341399690_n.jpg?_nc_ht=instagram.fcgk8-2.fna.fbcdn.net&amp;_nc_cat=107" class="w-100" style="width:60%;height:90%"></div>
            <div class="col-4"><img src="https://instagram.fcgk8-2.fna.fbcdn.net/vp/8043d0a7dbeb6e3feb7fd80b644603d1/5DF5A311/t51.2885-15/sh0.08/e35/c3.0.743.743a/s640x640/68657064_406038826685251_8840140737341399690_n.jpg?_nc_ht=instagram.fcgk8-2.fna.fbcdn.net&amp;_nc_cat=107" class="w-100" style="width:60%;height:90%"></div>
        </div>
    </div>
    <div style="flex-direction: column;padding-top: 0px">
        <div class="row pt-1 pl-4 pr-4">
            <div class="col-4"><img src="https://instagram.fcgk8-2.fna.fbcdn.net/vp/8043d0a7dbeb6e3feb7fd80b644603d1/5DF5A311/t51.2885-15/sh0.08/e35/c3.0.743.743a/s640x640/68657064_406038826685251_8840140737341399690_n.jpg?_nc_ht=instagram.fcgk8-2.fna.fbcdn.net&amp;_nc_cat=107" class="w-100" style="width:60%;height:90%"></div>
            <div class="col-4"><img src="https://instagram.fcgk8-2.fna.fbcdn.net/vp/8043d0a7dbeb6e3feb7fd80b644603d1/5DF5A311/t51.2885-15/sh0.08/e35/c3.0.743.743a/s640x640/68657064_406038826685251_8840140737341399690_n.jpg?_nc_ht=instagram.fcgk8-2.fna.fbcdn.net&amp;_nc_cat=107" class="w-100" style="width:60%;height:90%"></div>
            <div class="col-4"><img src="https://instagram.fcgk8-2.fna.fbcdn.net/vp/8043d0a7dbeb6e3feb7fd80b644603d1/5DF5A311/t51.2885-15/sh0.08/e35/c3.0.743.743a/s640x640/68657064_406038826685251_8840140737341399690_n.jpg?_nc_ht=instagram.fcgk8-2.fna.fbcdn.net&amp;_nc_cat=107" class="w-100" style="width:60%;height:90%"></div>
        </div>
    </div>
</div>
@endsection
