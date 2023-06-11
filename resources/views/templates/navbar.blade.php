<ul class="sidebar-menu" data-widget="tree">
    <li class="header">MAIN NAVIGATION</li>
    <li class="{{ Request::is('/dashboard*') ? 'active' : '' }}">
      <a href="/"><i class="fa fa-home"></i><span>Dashboard</span></a></li>
    <li class="{{ Request::is('/siswa*') ? 'active' : '' }}">
      <a href="/siswa"><i class="glyphicon glyphicon-user"></i><span>Data Siswa</span></a>
    </li>
  </ul>