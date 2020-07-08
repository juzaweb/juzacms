<ul class="cui__menuLeft__navigation" data-turbolinks-track="reload">
    <li class="cui__menuLeft__item">
        <a class="cui__menuLeft__item__link" href="{{ route('admin.dashboard') }}">
            <span class="cui__menuLeft__item__title">@lang('app.dashboard')</span>
            <i class="cui__menuLeft__item__icon fe fe-home"></i>
        </a>
    </li>

    <li class="cui__menuLeft__item">
        <a class="cui__menuLeft__item__link" href="{{ route('admin.movies') }}">
            <span class="cui__menuLeft__item__title">@lang('app.movies')</span>
            <i class="cui__menuLeft__item__icon fe fe-film"></i>
        </a>
    </li>

    <li class="cui__menuLeft__item">
        <a class="cui__menuLeft__item__link" href="{{ route('admin.tv_series') }}">
            <span class="cui__menuLeft__item__title">@lang('app.tv_series')</span>
            <i class="cui__menuLeft__item__icon fe fe-film"></i>
        </a>
    </li>

    <li class="cui__menuLeft__item">
        <a class="cui__menuLeft__item__link" href="{{ route('admin.genres') }}">
            <span class="cui__menuLeft__item__title">@lang('app.genres')</span>
            <i class="cui__menuLeft__item__icon fe fe-list"></i>
        </a>
    </li>

    <li class="cui__menuLeft__item">
        <a class="cui__menuLeft__item__link" href="{{ route('admin.countries') }}">
            <span class="cui__menuLeft__item__title">@lang('app.countries')</span>
            <i class="cui__menuLeft__item__icon fe fe-list"></i>
        </a>
    </li>

    <li class="cui__menuLeft__item">
        <a class="cui__menuLeft__item__link" href="{{ route('admin.stars') }}">
            <span class="cui__menuLeft__item__title">@lang('app.stars')</span>
            <i class="cui__menuLeft__item__icon fe fe-star"></i>
        </a>
    </li>

    <li class="cui__menuLeft__item">
        <a class="cui__menuLeft__item__link" href="{{ route('admin.pages') }}">
            <span class="cui__menuLeft__item__title">@lang('app.pages')</span>
            <i class="cui__menuLeft__item__icon fe fe-clipboard"></i>
        </a>
    </li>

    <li class="cui__menuLeft__item cui__menuLeft__submenu">
        <span class="cui__menuLeft__item__link">
            <span class="cui__menuLeft__item__title">@lang('app.posts')</span>
            <i class="cui__menuLeft__item__icon fe fe-clipboard"></i>
        </span>
        <ul class="cui__menuLeft__navigation">
            <li class="cui__menuLeft__item">
                <a class="cui__menuLeft__item__link" href="{{ route('admin.posts') }}">
                    <span class="cui__menuLeft__item__title">@lang('app.posts')</span>
                </a>
            </li>

            <li class="cui__menuLeft__item">
                <a class="cui__menuLeft__item__link" href="{{ route('admin.posts.create') }}">
                    <span class="cui__menuLeft__item__title">@lang('app.add_new')</span>
                </a>
            </li>

            <li class="cui__menuLeft__item">
                <a class="cui__menuLeft__item__link" href="{{ route('admin.post_categories') }}">
                    <span class="cui__menuLeft__item__title">@lang('app.categories')</span>
                </a>
            </li>

        </ul>
    </li>

    <li class="cui__menuLeft__item">
        <a class="cui__menuLeft__item__link" href="{{ route('admin.users') }}">
            <span class="cui__menuLeft__item__title">@lang('app.users')</span>
            <i class="cui__menuLeft__item__icon fe fe-users"></i>
        </a>
    </li>

    <li class="cui__menuLeft__item cui__menuLeft__submenu">
        <span class="cui__menuLeft__item__link">
            <span class="cui__menuLeft__item__title">@lang('app.comments')</span>
            <i class="cui__menuLeft__item__icon fe fe-message-square"></i>
        </span>
        <ul class="cui__menuLeft__navigation">
            <li class="cui__menuLeft__item">
                <a href="{{ route('admin.movie_comments') }}" class="cui__menuLeft__item__link">
                    <span class="cui__menuLeft__item__title">@lang('app.movie_comments')</span>
                </a>
            </li>

            <li class="cui__menuLeft__item">
                <a href="{{ route('admin.post_comments') }}" class="cui__menuLeft__item__link">
                    <span class="cui__menuLeft__item__title">@lang('app.post_comments')</span>
                </a>
            </li>

            <li class="cui__menuLeft__item">
                <a href="" class="cui__menuLeft__item__link">
                    <span class="cui__menuLeft__item__title">@lang('app.setting')</span>
                </a>
            </li>
        </ul>
    </li>

    <li class="cui__menuLeft__item cui__menuLeft__submenu">
        <span class="cui__menuLeft__item__link">
            <span class="cui__menuLeft__item__title">@lang('app.theme')</span>
            <i class="cui__menuLeft__item__icon fe fe-layout"></i>
        </span>
        <ul class="cui__menuLeft__navigation">
            <li class="cui__menuLeft__item">
                <a class="cui__menuLeft__item__link" href="">
                    <span class="cui__menuLeft__item__title">@lang('app.setting')</span>
                </a>
            </li>

            <li class="cui__menuLeft__item">
                <a class="cui__menuLeft__item__link" href="">
                    <span class="cui__menuLeft__item__title">@lang('app.menu')</span>
                </a>
            </li>

            <li class="cui__menuLeft__item">
                <a class="cui__menuLeft__item__link" href="">
                    <span class="cui__menuLeft__item__title">@lang('app.ads')</span>
                </a>
            </li>
        </ul>
    </li>

    <li class="cui__menuLeft__item cui__menuLeft__submenu">
        <span class="cui__menuLeft__item__link">
            <span class="cui__menuLeft__item__title">@lang('app.plugins')</span>
            <i class="cui__menuLeft__item__icon fe fe-file-plus"></i>
        </span>
        <ul class="cui__menuLeft__navigation">
            <li class="cui__menuLeft__item">
                <a class="cui__menuLeft__item__link" href="">
                    <span class="cui__menuLeft__item__title">@lang('app.setting')</span>
                </a>
            </li>

        </ul>
    </li>

    <li class="cui__menuLeft__item cui__menuLeft__submenu">
        <span class="cui__menuLeft__item__link">
            <span class="cui__menuLeft__item__title">@lang('app.setting')</span>
            <i class="cui__menuLeft__item__icon fe fe-settings"></i>
        </span>
        <ul class="cui__menuLeft__navigation">
            <li class="cui__menuLeft__item">
                <a class="cui__menuLeft__item__link" href="{{ route('admin.setting') }}">
                    <span class="cui__menuLeft__item__title">@lang('app.system_setting')</span>
                </a>
            </li>

            <li class="cui__menuLeft__item">
                <a href="{{ route('admin.languages') }}" class="cui__menuLeft__item__link">
                    <span class="cui__menuLeft__item__title">@lang('app.language')</span>
                </a>
            </li>
        </ul>
    </li>
</ul>