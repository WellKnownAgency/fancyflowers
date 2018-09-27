
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="col-lg-3 col-md-3 col-sm-5 col-xs-5">
  <div class="logo">
    <a href="#" title="Fancy Flowers">
      <img class="img-responsive" src="/images/logo.png" height="110" alt="">
    </a>
  </div><!--end logo-->
  </div>
<<<<<<< HEAD


=======
>>>>>>> 2f063d0871ae43dd2429592f2dc6fcc270b4aafd
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="/admin">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/admin/products">
          Products
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ Request::is('/admin/collections') ?"active-nav" : ""}}" href="/admin/collections">
          Collections
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/admin/posts">
          Posts
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/admin/users">
          Users
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/admin/comments">
          Comments
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/admin/contacts">
          Contacts
        </a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="dropdown-item" href="{{ route('logout') }}"
           onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </li>
      </ul>
    </form>
  </div>
</nav>
