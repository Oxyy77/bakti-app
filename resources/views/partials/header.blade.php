<div class="container container-header">
    <div class="row mt-2 profile-info ">
        <div class="col-md-12 ">
            <div class="profile-info">
                <img class="burger"  src="img/burger-user.svg" style="width: 32px; height:32px; " alt=""> 
               <h4 style="display: none" >Dashboard</h4>
                <img class="profile-header" src="{{ $user->profile ? asset('storage/profiles/' . $user->profile->foto) : 'img/add-profile.svg' }}" alt="">
               <h6 class="mt-2 name-header">{{$user->name}}</h6>
            </div>
        </div>
    </div>
</div>