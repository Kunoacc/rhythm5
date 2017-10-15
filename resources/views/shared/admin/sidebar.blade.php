<div class="sidebar" data-color="blue" data-image="{{asset('images/login.jpg')}}">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="javascript:void(0)" class="simple-text">
                rhythm5 fellowship
            </a>
        </div>

        <ul class="nav">
            <li class="{{(url()->current() == route('adminHome') ? "active" : "")}}">
                <a href="{{route('adminHome')}}">
                    <i class="pe-7s-graph"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="{{(url()->current() == route('adminSettings') ? "active" : "")}}">
                <a href="{{route('adminSettings')}}">
                    <i class="pe-7s-user"></i>
                    <p>Settings</p>
                </a>
            </li>
            <li class="{{(url()->current() == route('adminDevotional') ? "active" : "")}}">
                <a href="{{route('adminDevotional')}}">
                    <i class="pe-7s-note2"></i>
                    <p>Devotional</p>
                </a>
            </li>
            <li class="{{(url()->current() == route('adminBlog') ? "active" : "")}}">
                <a href="{{route('adminBlog')}}">
                    <i class="pe-7s-news-paper"></i>
                    <p>Blog</p>
                </a>
            </li>
            <li class="{{(url()->current() == route('adminDonations') ? "active" : "")}}">
                <a href="{{route('adminDonations')}}">
                    <i class="pe-7s-piggy"></i>
                    <p>Donations</p>
                </a>
            </li>
            <li class="{{(url()->current() == route('adminEvents') ? "active" : "")}}">
                <a href="{{route('adminEvents')}}">
                    <i class="pe-7s-map-marker"></i>
                    <p>Events</p>
                </a>
            </li>
        </ul>
    </div>
</div>