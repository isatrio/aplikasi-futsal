<ul class="nav navbar-nav navbar-right">
    <li><a href="{{URL::to('/booking/admin')}}">Beranda</a></li>
    {{--<li><a href="{{URL::to('/booking')}}">Booking</a></li>--}}
    <li><a href="{{URL::to('/customer')}}">Data Customer</a></li>
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Lapangan<span class="caret"></span></a>
        <ul class="dropdown-menu" role="menu">
            <li><a href="{{URL::to('/lapangan')}}">Master Lapangan</a></li>
            <li><a href="{{URL::to('/jam')}}">Master Jam Sewa</a></li>
            <li><a href="{{URL::to('/lapangan/pemakaian')}}">Laporan Pemakaian</a></li>
        </ul>
    </li>
    <!--
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Manajemen<span class="caret"></span></a>
        <ul class="dropdown-menu" role="menu">
            <li><a href="{{URL::to('karyawan')}}">Karyawan</a></li>
            <li><a href="{{URL::to('pangkat')}}">Pangkat</a></li>
            <li><a href="{{URL::to('periode-gaji')}}">Gaji</a></li>
        </ul>
    </li>
    -->
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Halaman<span class="caret"></span></a>
        <ul class="dropdown-menu" role="menu">
            <li><a href="{{URL::to('promo')}}">Promo</a></li>
            <li><a href="{{URL::to('about')}}">About</a></li>
            <li><a href="{{URL::to('help')}}">Help</a></li>
        </ul>
    </li>

    <li><a href="{{URL::to('/password')}}">Ubah Password</a></li>
    <li><a href="{{URL::to('/login/sign-out')}}">Logout</a></li>
</ul>
