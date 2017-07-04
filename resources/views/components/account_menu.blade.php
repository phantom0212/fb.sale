<ul class="nav navbar-nav navbar-right menuRight">
    <li class="dropdown">
        @if(!session()->has('user'))
            <a href="/login-social?social=facebook">
                <i class="fa fa-sign-in" aria-hidden="true"></i> Đăng nhập
            </a>
        @else
            <?php
            $user = session()->get('user');
            $name = isset($user['name']) ? $user['name'] : '';
            $thumbnail = isset($user['thumbnail']) ? $user['thumbnail'] : '';
            ?>
            <a>
                {{ $name }}
                <img style="width: 20px;" src="{{$thumbnail}}"></img>
            </a>
        @endif
    </li>
</ul>