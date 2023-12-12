<div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
    <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu"
        aria-labelledby="sidebarMenuLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="sidebarMenuLabel">Journalify</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu"
                aria-label="Close"></button>
        </div>
        <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page"
                        href="/dashboard">
                        <i class="bi bi-house-fill"></i>
                        Dashboard
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link {{ Request::is('dashboard/posts*') ? 'active' : '' }}" href="/dashboard/posts">
                        <i class="bi bi-file-earmark-text"></i> My Posts
                    </a>
                </li>
            </ul>

            @can('IsAdmin')
            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                <span>ADMINISTRATOR</span>
            </h6>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard/categories*') ? 'active' : '' }}" aria-current="page"
                        href="/dashboard/categories">
                        <i class="bi bi-grid"></i>
                        Post Categories
                    </a>
                </li>
            </ul>
            @endcan
        </div>
    </div>
</div>
<style>
    /* Warna latar belakang ketika aktif */
    .nav-item.active .nav-link {
        color: #2470dc;
        /* Warna teks ketika aktif */
    }

    /* Warna latar belakang ketika tidak aktif */
    .nav-item .nav-link {
        color: #000;
        /* Warna teks ketika tidak aktif */
    }
</style>