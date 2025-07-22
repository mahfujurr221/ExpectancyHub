<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">
        @can('dashboard')
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'dashboard' ? '' : 'collapsed' }}"
                    href="{{ route('dashboard') }}">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->
        @endcan


        <li class="nav-item">
            <a class="nav-link {{ Route::currentRouteName() == 'website' ? '' : 'collapsed' }}"
                href="{{ route('website') }}" target="_blank">
                <i class="bi bi-globe"></i>
                <span>Website</span>
            </a>
        </li><!-- End Dashboard Nav -->

        @can('update-setting')
            <li class="nav-heading text-info">Website Content Management ------------------</li>
        @endcan


        {{-- owner --}}
        <li class="nav-item">
            <a class="nav-link {{ Route::currentRouteName() == 'owner.index' ? '' : 'collapsed' }}"
                href="{{ route('owner.index') }}">
                <i class="bi bi-person-fill"></i>
                <span>Owner</span>
            </a>
        </li>

        {{-- success stories --}}
        <li class="nav-item">
            <a class="nav-link {{ Route::currentRouteName() == 'success-story.index' ? '' : 'collapsed' }}"
                href="{{ route('success-story.index') }}">
                <i class="bi bi-book "></i><span>Success Stories</span>
            </a>
        </li>

        @canany(['list-headline', 'create-headline'])
            <li class="nav-item">
                <a class="nav-link {{ Route::is('headline.index*') ? '' : 'collapsed' }}" data-bs-target="#headline-nav"
                    data-bs-toggle="collapse" href="#">
                    <i class="bi bi-houses-fill"></i>
                    </i><span>Headline</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="headline-nav" class="nav-content collapse {{ Route::is('headline.*') ? 'show' : '' }}"
                    data-bs-parent="#sidebar-nav">
                    {{-- @can('create-headline')
                        <li>
                            <a href="{{ route('headline.create') }}"
                                class="{{ Route::currentRouteName() == 'headline.create' ? 'active nav-link' : '' }}">
                                <i class="bi bi-circle"></i><span>Add Headline</span>
                            </a>
                        </li>
                    @endcan --}}
                    @can('list-headline')
                        <li>
                            <a href="{{ route('headline.index') }}"
                                class="{{ Route::currentRouteName() == 'headline.index' ? 'active nav-link' : '' }}">
                                <i class="bi bi-circle"></i><span>Headline List</span>
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcanany

        {{-- branch --}}
        @canany(['list-branch', 'create-branch'])
            <li class="nav-item">
                <a class="nav-link {{ Route::is('branches.index.*') ? '' : 'collapsed' }}" data-bs-target="#branch-nav"
                    data-bs-toggle="collapse" href="#">
                    <i class="bi bi-houses-fill"></i>
                    </i><span>Branch</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="branch-nav" class="nav-content collapse {{ Route::is('branches.*') ? 'show' : '' }}"
                    data-bs-parent="#sidebar-nav">
                    @can('create-batch')
                        <li>
                            <a href="{{ route('branches.create') }}"
                                class="{{ Route::currentRouteName() == 'batches.create' ? 'active nav-link' : '' }}">
                                <i class="bi bi-circle"></i><span>Add Branch</span>
                            </a>
                        </li>
                    @endcan
                    @can('list-branch')
                        <li>
                            <a href="{{ route('branches.index') }}"
                                class="{{ Route::currentRouteName() == 'branches.index' ? 'active nav-link' : '' }}">
                                <i class="bi bi-circle"></i><span>Branch List</span>
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcanany

        {{-- banner --}}
        @canany(['list-banner', 'create-banner'])
            <li class="nav-item">
                <a class="nav-link {{ Route::is('banners.index.*') ? '' : 'collapsed' }}" data-bs-target="#banner-nav"
                    data-bs-toggle="collapse" href="#">
                    <i class="bi bi-houses-fill"></i>
                    </i><span>Banner</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="banner-nav" class="nav-content collapse {{ Route::is('banners.*') ? 'show' : '' }}"
                    data-bs-parent="#sidebar-nav">
                    @can('create-banner')
                        <li>
                            <a href="{{ route('banners.create') }}"
                                class="{{ Route::currentRouteName() == 'banners.create' ? 'active nav-link' : '' }}">
                                <i class="bi bi-circle"></i><span>Add Banner</span>
                            </a>
                        </li>
                    @endcan
                    @can('list-banner')
                        <li>
                            <a href="{{ route('banners.index') }}"
                                class="{{ Route::currentRouteName() == 'banners.index' ? 'active nav-link' : '' }}">
                                <i class="bi bi-circle"></i><span>Banner List</span>
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcanany

        @canany(['list-video', 'create-video'])
            <li class="nav-item">
                <a class="nav-link {{ Route::is('blog-videos.*') ? '' : 'collapsed' }}" data-bs-target="#videos-nav"
                    data-bs-toggle="collapse" href="#">
                    <i class="bi bi-camera-video">
                    </i><span>Blog Videos</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="videos-nav" class="nav-content collapse {{ Route::is('blog-videos.*') ? 'show' : '' }}"
                    data-bs-parent="#sidebar-nav">
                    @can('create-video')
                        <li>
                            <a href="{{ route('blog-videos.create') }}"
                                class="{{ Route::currentRouteName() == 'videos.create' ? 'active nav-link' : '' }}">
                                <i class="bi bi-circle"></i><span>Add Video</span>
                            </a>
                        </li>
                    @endcan
                    @can('list-video')
                        <li>
                            <a href="{{ route('blog-videos.index') }}"
                                class="{{ Route::currentRouteName() == 'blog-videos.index' ? 'active nav-link' : '' }}">
                                <i class="bi bi-circle"></i><span>Video List</span>
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcanany

        {{-- about us --}}
        @canany(['list-about-us', 'create-about-us'])
            <li class="nav-item">
                <a class="nav-link {{ Route::is('about-us.*') ? '' : 'collapsed' }}" data-bs-target="#about-nav"
                    data-bs-toggle="collapse" href="#">
                    <i class="bi bi-info-circle">
                    </i><span>About Us</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="about-nav" class="nav-content collapse {{ Route::is('about-us.*') ? 'show' : '' }}"
                    data-bs-parent="#sidebar-nav">
                    @can('create-about-us')
                        <li>
                            <a href="{{ route('about-us.create') }}"
                                class="{{ Route::currentRouteName() == 'about-us.create' ? 'active nav-link' : '' }}">
                                <i class="bi bi-circle"></i><span>Add About</span>
                            </a>
                        </li>
                    @endcan
                    @can('list-about-us')
                        <li>
                            <a href="{{ route('about-us.index') }}"
                                class="{{ Route::currentRouteName() == 'about-us.index' ? 'active nav-link' : '' }}">
                                <i class="bi bi-circle"></i><span>AboutUs List</span>
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcanany

        @canany(['list-country', 'create-country'])
            <li class="nav-item">
                <a class="nav-link {{ Route::is('countries.*') ? '' : 'collapsed' }}" data-bs-target="#countries-nav"
                    data-bs-toggle="collapse" href="#">
                    <i class="bi bi-people-fill"></i><span>Countries</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="countries-nav" class="nav-content collapse {{ Route::is('countries.*') ? 'show' : '' }}"
                    data-bs-parent="#sidebar-nav">
                    @can('create-country')
                        <li>
                            <a href="{{ route('countries.create') }}"
                                class="{{ Route::currentRouteName() == 'countries.create' ? 'active nav-link' : '' }}">
                                <i class="bi bi-circle"></i><span>Add Country</span>
                            </a>
                        </li>
                    @endcan
                    @can('list-country')
                        <li>
                            <a href="{{ route('countries.index') }}"
                                class="{{ Route::currentRouteName() == 'countries.index' ? 'active nav-link' : '' }}">
                                <i class="bi bi-circle"></i><span>Countries List</span>
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcanany

        @can('update-setting')
            <li class="nav-heading text-info">User & Role Management ------------------------</li>
        @endcan


        @can('list-role')
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'permissions.index' ? '' : 'collapsed' }}"
                    href="{{ route('permissions.index') }}">
                    <i class="bi bi-shield-lock-fill"></i>
                    <span>Permissions</span>
                </a>
            </li>
        @endcan

        @can('list-role')
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'roles.index' || Route::currentRouteName() == 'role.permissions' ? '' : 'collapsed' }}"
                    href="{{ route('roles.index') }}">
                    <i class="bi bi-person-lines-fill"></i>
                    <span>Roles</span>
                </a>
            </li>
        @endcan

        <!-- Users Nav -->
        @canany(['list-user', 'create-user'])
            <li class="nav-item">
                <a class="nav-link {{ Route::is('users.*') ? '' : 'collapsed' }}" data-bs-target="#users-nav"
                    data-bs-toggle="collapse" href="#">
                    <i class="bi bi-people-fill"></i><span>Users</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="users-nav" class="nav-content collapse {{ Route::is('users.*') ? 'show' : '' }}"
                    data-bs-parent="#sidebar-nav">
                    @can('create-user')
                        <li>
                            <a href="{{ route('users.create') }}"
                                class="{{ Route::currentRouteName() == 'users.create' ? 'active nav-link' : '' }}">
                                <i class="bi bi-circle"></i><span>Add User</span>
                            </a>
                        </li>
                    @endcan
                    @can('list-user')
                        <li>
                            <a href="{{ route('users.index') }}"
                                class="{{ Route::currentRouteName() == 'users.index' ? 'active nav-link' : '' }}">
                                <i class="bi bi-circle"></i><span>Users List</span>
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcanany
        <!-- End Users Nav -->



        @can('update-setting')
            <li class="nav-heading text-info">Website Settings ----------------------------------------------------</li>
        @endcan

        @can('update-setting')
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'settings.index' ? '' : 'collapsed' }}"
                    href="{{ route('settings.index') }}">
                    <i class="bi bi-gear-fill"></i>
                    <span>Setting</span>
                </a>
            </li>
        @endcan
    </ul>

</aside><!-- End Sidebar-->
