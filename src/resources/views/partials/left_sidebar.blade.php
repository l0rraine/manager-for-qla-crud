@permission('list.article')
<ul class="nav nav-list">
    <li class="">
        <a href="#" class="dropdown-toggle">
            <i class="menu-icon fa fa-pencil-square-o"></i>
            <span class="menu-text">文章</span>
            <b class="arrow fa fa-angle-down"></b>
        </a>
        <b class="arrow"></b>
        <ul class="submenu">
            {{--@foreach(\App\Models\ArticleChannel::all()->toArray() as $channel)--}}
                {{--@permission('channel-'.$channel['id'].'.article')--}}
                {{--<li class="">--}}
                    {{--<a id="menu_7_{{$channel['id']}}" href="javascript:void(0)"--}}
                       {{--data-url="{{ route('Article.index',$channel['id'])}}">--}}
                        {{--<i class="menu-icon fa fa-caret-right"></i>--}}
                        {{--<span class="menu-text">{{ $channel['title'] }}</span>--}}
                    {{--</a>--}}

                    {{--<b class="arrow"></b>--}}
                {{--</li>--}}
                {{--@endpermission--}}
            {{--@endforeach--}}
        </ul>
    </li>
</ul>
@endpermission
@permission('view.article-channel|list.user|list.department|list.role')
@if(Route::has('Crud.Channel.index') || Route::has( 'Crud.User.index') || Route::has('Crud.Dep.index') || Route::has('Crud.Role.index'))
    <ul class="nav nav-list">
        <!--管理模块-->
        <li class="">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon glyphicon glyphicon-cog"></i>
                <span id="menu_6" class="menu-text">网站管理</span>
                <b class="arrow fa fa-angle-down"></b>
            </a>

            <b class="arrow"></b>

            <ul class="submenu">
                @permission('view.article-channel')
                @if(Route::has('Crud.Channel.index'))
                    <li class="">
                        <a id="menu_8" href="javascript:void(0)" data-url="{{ route('Crud.Channel.index') }}">
                            <i class="menu-icon2 glyphicon glyphicon-list"></i>
                            <span class="menu-text">文章频道</span>
                        </a>

                        <b class="arrow"></b>
                    </li>
                @endif
                @endpermission
                @permission('list.user')
                @if(Route::has('Crud.User.index'))
                    <li class="">
                        <a id="menu_9" href="javascript:void(0)" data-url="{{ route('Crud.User.index') }}">
                            <i class="menu-icon2 fa fa-user-circle"></i>
                            <span class="menu-text">用户</span>
                        </a>

                        <b class="arrow"></b>
                    </li>
                @endif
                @endpermission
                @permission('list.department')
                @if(Route::has('Crud.Dep.index'))
                    <li class="">
                        <a id="menu_10" href="javascript:void(0)" data-url="{{ route('Crud.Dep.index') }}">
                            <i class="menu-icon2 icon-department"></i>
                            <span class="menu-text">单位</span>
                        </a>

                        <b class="arrow"></b>
                    </li>
                @endif
                @endpermission
                @permission('list.role')
                @if(Route::has('Crud.Role.index'))
                    <li class="">
                        <a id="menu_11" href="javascript:void(0)" data-url="{{ route('Crud.Role.index') }}">
                            <i class="menu-icon2 icon-role"></i>
                            <span class="menu-text">权限</span>
                        </a>

                        <b class="arrow"></b>
                    </li>
                @endif
                @endpermission
            </ul>
        </li><!-- /管理模块 -->

    </ul><!-- /.nav-list -->
@endif
@endpermission