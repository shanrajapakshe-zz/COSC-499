{{--Admin Navbar--}}

<div class="container">
    <ul class="nav nav-tabs nav-justified">
      <li class="{{Request::is('admin/awardReport') ? "active" : "" }}"><a href="/admin/awardReport">Award Report</a></li>
      <li class="{{Request::is('admin/nominations') ? "active" : "" }}"><a href="/admin/nominations">All Nominations</a></li>
      <li class="{{Request::is('admin/nomineeInfo') ? "active" : "" }}"><a href="/admin/nomineeInfo">Nominee Info</a></li>
      <li class="{{Request::is('admin/award') ? "active" : "" }}"><a href="/admin/award">Edit Awards</a></li>
      <li class="{{Request::is('admin/categories') ? "active" : "" }}"><a href="/admin/categories">Edit Categories</a></li>
      <li class="{{Request::is('admin/prof') ? "active" : "" }}"><a href="/admin/prof">Edit Professors</a></li>
    </ul>
</div>
