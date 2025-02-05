<style>
    a{
        text-decoration: none;
    }
</style>
<p class="mr-3" style="margin-top: 22px">Selamat datang,</p>
<div class="dropdown mt-2">
    <a href="" class="dropdown-toggle text-black fw-bold ms-1" data-bs-toggle="dropdown" aria-expanded="false">
        {{ Auth::user()->name }}
    </a>
    <ul class="dropdown-menu">
      <li><button class="dropdown-item">Profile</button></li>
      <form action="{{route('logout')}}" method="POST">
        @csrf
        <a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault();this.closest('form').submit();">
            <i class="ti-power-off"></i>
            Logout
        </a>   
      </form>
    </ul>
</div>