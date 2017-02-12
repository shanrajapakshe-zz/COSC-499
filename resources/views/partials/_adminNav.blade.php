{{--Admin Navbar--}}

<div class="container">
    <ul class="nav nav-tabs nav-justified">
      <li class="{{Request::is('admin/award') ? "active" : "" }}"><a href="/admin/award">Awards</a></li>
      <li class="{{Request::is('admin/nominations') ? "active" : "" }}"><a href="/admin/nominations">Nominations</a></li>
      <li class="{{Request::is('admin/prof') ? "active" : "" }}"><a href="/admin/prof">Professors</a></li>
    </ul>
</div>
