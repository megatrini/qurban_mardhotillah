<div id="sidebar-nav" class="sidebar">
  <div class="sidebar-scroll" style="overflow: hidden; width: auto; height: 95%;">
    <nav>
      <ul class="nav">
        {{-- dashboard --}}
        <li><a href="/dashboard" class="{{Request::path() === 'dashboard' ? 'active' :''}}"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
       
          {{-- DaftarQurban --}}
          <li><a href="/pengajian" class="{{Request::path() === 'bayarzakat' ? 'active' :''}}"><i class="lnr lnr-home"></i> <span>Daftar Qurban</span></a></li>
        </li>
        {{--  --}}
      </ul>
    </nav>
  </div>
</div>


