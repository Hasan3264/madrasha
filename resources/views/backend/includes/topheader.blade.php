<header class="u-header">
    <div class="u-header-left">
        <a class="u-header-logo" href="{{route('dashboard')}}">
            @php
            $institute = App\Models\ganarel_information::latest()->first();
            @endphp
            @if ($institute != '')
            <img class="u-logo-desktop" src="{{ asset('uploads/backend/logo')}}/{{$institute->logo}}" width="180px"
                alt="Stream Dashboard">
            @else

            @endif
        </a>
    </div>

    <div class="u-header-middle">
        <a class="js-sidebar-invoker u-sidebar-invoker text-danger" href="#!" data-is-close-all-except-this="true"
            data-target="#sidebar">
            <i class="fa fa-bars u-sidebar-invoker__icon--open"></i>
            <i class="fa fa-times u-sidebar-invoker__icon--close"></i>
        </a>

        <div class="u-header-search" data-search-mobile-invoker="#headerSearchMobileInvoker"
            data-search-target="#headerSearch">
            <a id="headerSearchMobileInvoker" class="btn btn-link input-group-prepend u-header-search__mobile-invoker"
                href="#!">
                <i class="fa fa-search"></i>
            </a>

            <div id="headerSearch" class="u-header-search-form">
                <form>
                    <div class="input-group">

                        <input class="form-control u-header-search__field" type="search" placeholder="Search">
                        <button type="submit" class="bg-gradient text-white">Search</button>
                    </div>
                </form>
            </div>

        </div>

        <div class="most_usefull_link">
            <a href="students-add.html" data-toggle="tooltip bg-dark" data-placement="top" title="Add Student"><i
                    class="fa-solid fa-user-plus"></i></a>
            <a href="add_fees.html" data-toggle="tooltip bg-dark" data-placement="top" title="Collect Fee"><i
                    class="fa-solid fa-rss"></i></a>
            <a href="add_employes.html" data-toggle="tooltip bg-dark" data-placement="top" title="Add Employee"><i
                    class="fa-solid fa-user-doctor"></i></a>
            <a href="manual_attentence.html" data-toggle="tooltip bg-dark" data-placement="top"
                title="Manual Attendance"><i class="fa-solid fa-user-xmark"></i></a>
            <a href="create_routine.html" data-toggle="tooltip bg-dark" data-placement="top" title="Create Routine"><i
                    class="fa-solid fa-download"></i></a>
            <a href="marks_entry.html" data-toggle="tooltip bg-dark" data-placement="top" title="Add Marks"><i
                    class="fa-solid fa-cloud-arrow-down"></i></a>
            <a href="add_live_class.html" data-toggle="tooltip bg-dark" data-placement="top" title="Add Live Class"><i
                    class="fa-solid fa-video"></i></a>
            <a href="add_home_work.html" data-toggle="tooltip bg-dark" data-placement="top" title="Add Home Work"><i
                    class="fa-solid fa-desktop"></i></a>
            <a href="add_user.html" data-toggle="tooltip bg-dark" data-placement="top" title="Add User"><i
                    class="fa-solid fa-unlock-keyhole"></i></a>
        </div>

    </div>

    <div class="u-header-right">


        <div class="dropdown mr-4">
            <a class="text-danger" href="#!" role="button" id="dropdownMenuLink" aria-haspopup="true"
                aria-expanded="false" data-toggle="dropdown">
                <span class="h3">
                    <i class="fa-solid fa-arrows-rotate"></i>
                </span>
            </a>
        </div>


        <div class="dropdown mr-4">
            <a class="text-danger" href="#!" role="button" id="dropdownMenuLink" aria-haspopup="true"
                aria-expanded="false" data-toggle="dropdown">
                <span class="h3">
                    <i class="fa-solid fa-share-from-square"></i>
                </span>
            </a>
        </div>

        <!-- Class Work -->
        <div class="dropdown mr-4">
            <a class="text-danger" href="#!" role="button" id="dropdownMenuLink" aria-haspopup="true"
                aria-expanded="false" data-toggle="dropdown">
                <span class="h3">
                    <i class="fa-solid fa-graduation-cap"></i>
                </span>
                <span class="u-indicator u-indicator-top-right u-indicator--xxs bg-success"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right border-0 py-0 mt-4" aria-labelledby="dropdownMenuLink">
                <div class="card">
                    <div class="card-header d-flex align-items-center py-3">
                        <h2 class="h4 card-header-title">Class Work</h2>
                        <a class="ml-auto" href="#">Clear all</a>
                    </div>

                    <div class="card-body p-0">
                        <div class="list-group list-group-flush">
                            <!-- Activity -->
                            <a class="list-group-item list-group-item-action" href="#">
                                <div class="media align-items-center">
                                    <img class="u-avatar--sm rounded-circle mr-3" src="AdminAssets/img/avatars/img1.png"
                                        alt="Image description">

                                    <div class="media-body">
                                        <div class="d-flex align-items-center">
                                            <h4 class="mb-1">Chad Cannon</h4>
                                            <small class="text-muted ml-auto">23 Jan 2018</small>
                                        </div>

                                        <p class="text-truncate mb-0">
                                            We've just done the project.
                                        </p>
                                    </div>
                                </div>
                            </a>
                            <!-- End Activity -->
                            <!-- Activity -->
                            <a class="list-group-item list-group-item-action" href="#">
                                <div class="media align-items-center">
                                    <img class="u-avatar--sm rounded-circle mr-3" src="AdminAssets/img/avatars/img1.png"
                                        alt="Image description">

                                    <div class="media-body">
                                        <div class="d-flex align-items-center">
                                            <h4 class="mb-1">Chad Cannon</h4>
                                            <small class="text-muted ml-auto">23 Jan 2018</small>
                                        </div>

                                        <p class="text-truncate mb-0">
                                            We've just done the project.
                                        </p>
                                    </div>
                                </div>
                            </a>
                            <!-- End Activity -->
                            <!-- Activity -->
                            <a class="list-group-item list-group-item-action" href="#">
                                <div class="media align-items-center">
                                    <img class="u-avatar--sm rounded-circle mr-3" src="AdminAssets/img/avatars/img1.png"
                                        alt="Image description">

                                    <div class="media-body">
                                        <div class="d-flex align-items-center">
                                            <h4 class="mb-1">Chad Cannon</h4>
                                            <small class="text-muted ml-auto">23 Jan 2018</small>
                                        </div>

                                        <p class="text-truncate mb-0">
                                            We've just done the project.
                                        </p>
                                    </div>
                                </div>
                            </a>
                            <!-- End Activity -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Class Work -->


        <!-- Home Work -->
        <div class="dropdown mr-4">
            <a class="text-danger" href="#!" role="button" id="dropdownMenuLink" aria-haspopup="true"
                aria-expanded="false" data-toggle="dropdown">
                <span class="h3">
                    <i class="fa-solid fa-laptop"></i>
                </span>
                <span class="u-indicator u-indicator-top-right u-indicator--xxs bg-success"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right border-0 py-0 mt-4" aria-labelledby="dropdownMenuLink">
                <div class="card">
                    <div class="card-header d-flex align-items-center py-3">
                        <h2 class="h4 card-header-title">Home Work</h2>
                        <a class="ml-auto" href="#">Clear all</a>
                    </div>

                    <div class="card-body p-0">
                        <div class="list-group list-group-flush">
                            <!-- Activity -->
                            <a class="list-group-item list-group-item-action" href="#">
                                <div class="media align-items-center">
                                    <img class="u-avatar--sm rounded-circle mr-3" src="AdminAssets/img/avatars/img1.png"
                                        alt="Image description">

                                    <div class="media-body">
                                        <div class="d-flex align-items-center">
                                            <h4 class="mb-1">Chad Cannon</h4>
                                            <small class="text-muted ml-auto">23 Jan 2018</small>
                                        </div>

                                        <p class="text-truncate mb-0">
                                            We've just done the project.
                                        </p>
                                    </div>
                                </div>
                            </a>
                            <!-- End Activity -->
                            <!-- Activity -->
                            <a class="list-group-item list-group-item-action" href="#">
                                <div class="media align-items-center">
                                    <img class="u-avatar--sm rounded-circle mr-3" src="AdminAssets/img/avatars/img1.png"
                                        alt="Image description">

                                    <div class="media-body">
                                        <div class="d-flex align-items-center">
                                            <h4 class="mb-1">Chad Cannon</h4>
                                            <small class="text-muted ml-auto">23 Jan 2018</small>
                                        </div>

                                        <p class="text-truncate mb-0">
                                            We've just done the project.
                                        </p>
                                    </div>
                                </div>
                            </a>
                            <!-- End Activity -->
                            <!-- Activity -->
                            <a class="list-group-item list-group-item-action" href="#">
                                <div class="media align-items-center">
                                    <img class="u-avatar--sm rounded-circle mr-3" src="AdminAssets/img/avatars/img1.png"
                                        alt="Image description">

                                    <div class="media-body">
                                        <div class="d-flex align-items-center">
                                            <h4 class="mb-1">Chad Cannon</h4>
                                            <small class="text-muted ml-auto">23 Jan 2018</small>
                                        </div>

                                        <p class="text-truncate mb-0">
                                            We've just done the project.
                                        </p>
                                    </div>
                                </div>
                            </a>
                            <!-- End Activity -->
                            <!-- Activity -->
                            <a class="list-group-item list-group-item-action" href="#">
                                <div class="media align-items-center">
                                    <img class="u-avatar--sm rounded-circle mr-3" src="AdminAssets/img/avatars/img1.png"
                                        alt="Image description">

                                    <div class="media-body">
                                        <div class="d-flex align-items-center">
                                            <h4 class="mb-1">Chad Cannon</h4>
                                            <small class="text-muted ml-auto">23 Jan 2018</small>
                                        </div>

                                        <p class="text-truncate mb-0">
                                            We've just done the project.
                                        </p>
                                    </div>
                                </div>
                            </a>
                            <!-- End Activity -->
                        </div>
                    </div>

                    <div class="card-footer py-3">
                        <a class="btn btn-block btn-outline-primary" href="{{route('home_work')}}">View all Home
                            Work</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Home Work  -->

        <!-- Live Class -->
        <div class="dropdown mr-3">
            <a class="text-danger" href="#!" role="button" id="dropdownMenuLink" aria-haspopup="true"
                aria-expanded="false" data-toggle="dropdown">
                <span class="h3">
                    <i class="fa-solid fa-video"></i>
                </span>
                <span class="u-indicator u-indicator-top-right u-indicator--xxs bg-danger"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right border-0 py-0 mt-4" aria-labelledby="dropdownMenuLink">
                <div class="card">
                    <div class="card-header d-flex align-items-center py-3">
                        <h2 class="h4 card-header-title">Live Class</h2>
                        <a class="ml-auto" href="#">Clear all</a>
                    </div>

                    <div class="card-body p-0">
                        <div class="list-group list-group-flush">
                            <!-- Notification -->
                            <a class="list-group-item list-group-item-action" href="#">
                                <div class="media align-items-center">
                                    <div class="media-body">
                                        <div class="d-flex align-items-center">
                                            <h4 class="mb-1">Math Class</h4>
                                            <small class="text-muted ml-auto">23 Jan 2018</small>
                                        </div>

                                        <p class="text-truncate mb-0">
                                            <span class="text-primary">@htmlstream</span> just liked your post!
                                        </p>
                                    </div>
                                </div>
                            </a>
                            <!-- End Notification -->
                            <!-- Notification -->
                            <a class="list-group-item list-group-item-action" href="#">
                                <div class="media align-items-center">
                                    <div class="media-body">
                                        <div class="d-flex align-items-center">
                                            <h4 class="mb-1">Math Class</h4>
                                            <small class="text-muted ml-auto">23 Jan 2018</small>
                                        </div>

                                        <p class="text-truncate mb-0">
                                            <span class="text-primary">@htmlstream</span> just liked your post!
                                        </p>
                                    </div>
                                </div>
                            </a>
                            <!-- End Notification -->
                            <!-- Notification -->
                            <a class="list-group-item list-group-item-action" href="#">
                                <div class="media align-items-center">
                                    <div class="media-body">
                                        <div class="d-flex align-items-center">
                                            <h4 class="mb-1">Math Class</h4>
                                            <small class="text-muted ml-auto">23 Jan 2018</small>
                                        </div>

                                        <p class="text-truncate mb-0">
                                            <span class="text-primary">@htmlstream</span> just liked your post!
                                        </p>
                                    </div>
                                </div>
                            </a>
                            <!-- End Notification -->
                            <!-- Notification -->
                            <a class="list-group-item list-group-item-action" href="#">
                                <div class="media align-items-center">
                                    <div class="media-body">
                                        <div class="d-flex align-items-center">
                                            <h4 class="mb-1">Math Class</h4>
                                            <small class="text-muted ml-auto">23 Jan 2018</small>
                                        </div>

                                        <p class="text-truncate mb-0">
                                            <span class="text-primary">@htmlstream</span> just liked your post!
                                        </p>
                                    </div>
                                </div>
                            </a>
                            <!-- End Notification -->


                        </div>
                    </div>

                    <div class="card-footer py-3">
                        <a class="btn btn-block btn-outline-primary" href="{{route('manage_live_class')}}">View all Live
                            Class</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Live Class -->

        <!-- User Profile -->
        <div class="dropdown ml-2">
            <a class="link-muted d-flex align-items-center us-u-avatar-wrap" href="#!" role="button"
                id="dropdownMenuLink" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown">


                @if (App\models\user_type::where('user_id', Auth::user()->id)->exists())

                @foreach (App\models\user_type::where('user_id', Auth::user()->id)->get() as $user)
                @endforeach
                @if ($user->user_img == 'default.png')
                <img class="u-avatar--xs rounded-circle mr-2 bg-gradient"
                    src="{{Avatar::create(Auth::user()->name)->toBase64()}}">
                @else
                <img class="u-avatar--xs rounded-circle mr-2 bg-gradient"
                    src="{{asset('uploads/backend/userimg')}}/{{$user->user_img}}">
                @endif
                @else
                <img class="u-avatar--xs rounded-circle mr-2 bg-gradient"
                    src="{{Avatar::create(Auth::user()->name)->toBase64()}}">
                @endif


                <span class="d-none d-sm-inline-block text-danger">
                    <small class="fas fa-ellipsis-v"></small>
                </span>
            </a>
            <div class="dropdown-menu dropdown-menu-right border-0 py-0 mt-3" aria-labelledby="dropdownMenuLink"
                style="width: 260px;">
                <div class="card">

                    <div class="card-body">
                        <ul class="list-unstyled mb-0">
                            <li class="mb-4">
                                <a class="d-flex align-items-center link-dark" href="{{route('profile.edit')}}">
                                    <span class="h3 mb-0"><i class="fa-solid fa-lock mr-2"></i> </span>Profile
                                </a>
                            </li>

                            <li class="mb-4">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                            this.closest('form').submit();">
                                        <span class="h3 mb-0 pl-0"><i class="fa-solid fa-right-from-bracket"></i></span>
                                        {{ __('Log Out') }}
                                    </x-dropdown-link>
                                </form>

                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End User Profile -->
    </div>

</header>
