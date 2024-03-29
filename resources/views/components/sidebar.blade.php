<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Harits Clinic</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="{{ $type_menu === 'dashboard' ? 'active' : '' }}">
                <a href="{{ url('/home') }}" class="nav-link"><i class="fas fa-house"></i><span>Dashboard</span></a>
            </li>
            <li class="{{ $type_menu === 'users' ? 'active' : '' }}">
                <a href="{{ route('users.index') }}" class="nav-link"><i class="fas fa-user"></i><span>Users</span></a>
            </li>
            <li class="{{ $type_menu === 'doctors' ? 'active' : '' }}">
                <a href="{{ route('doctors.index') }}" class="nav-link"><i
                        class="fas fa-user-doctor"></i><span>Doctors</span></a>
            </li>
            <li class="{{ $type_menu === 'doctor_schedule' ? 'active' : '' }}">
                <a href="{{ route('doctor_schedule.index') }}" class="nav-link"><i
                        class="fas fa-calendar-days"></i><span>Doctor Schedules</span></a>
            </li>
            <li class="{{ $type_menu === 'patients' ? 'active' : '' }}">
                <a href="{{ route('patients.index') }}" class="nav-link"><i
                        class="fas fa-hospital-user"></i><span>Patients</span></a>
            </li>
        </ul>
    </aside>
</div>
