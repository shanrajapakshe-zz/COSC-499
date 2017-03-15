{{--Default Navbar--}}
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Unit 5 Awards</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="{{Request::is('/') ? "active" : "" }}"><a href="/">Home</a></li>
                <li class="{{Request::is('about') ? "active" : "" }}"><a href="/about">About</a></li>
                <li class="{{Request::is('nominations/create') ? "active" : "" }}"><a href="/nominations/create">Create Nomination</a></li>
                <li class="{{Request::is('nominations/index') ? "active" : "" }}"><a href="/nominations/index">My Nominations</a></li>
                {{-- <li class="{{Request::is('profile') ? "active" : "" }}"><a href="/profile">Contact</a></li> --}}
                {{-- <li class="{{Request::is('help') ? "active" : "" }}"><a href="/help">Help</a></li> --}}
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">My Account <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/nominations/index">My Nominations</a></li>
                        <li><a href="/admin/awardReport">Admin Page</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Log Out</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>


    <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="margin-top:40px">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="myModalLabel">Help</h4>
                    </div>
                    <div class="modal-body">
                        <h2>Here is Some Help!</h2>
                        <p>help help help help help help help help help help help help help help help help help help help help help help help help help help help help help help help help help help help help help help help help help help help help help help help </p>
                    </div>
                </div>
            </div>
        </div>
