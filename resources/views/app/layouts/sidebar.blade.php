<!-- [ Sidebar Menu ] start -->
<nav class="pc-sidebar">
    <div class="navbar-wrapper">
        <div class="m-header">
            <a href=" {{ route('appIndex') }}" class="b-brand text-primary">
                <!-- ========   Change your logo from here   ============ -->
                <img src="{{ asset('squo/images/logo-dark.svg')}}" class="img-fluid logo-lg" alt="logo">
            </a>
        </div>
        <div class="navbar-content">
            <ul class="pc-navbar">
                <li class="pc-item">
                    <a href="#" class="pc-link">
                        <span class="pc-micon">
                        <svg class="pc-icon">
                            <use xlink:href="#dashboard"></use>
                        </svg>
                        </span>
                        <span class="pc-mtext">Dashboard</span>
                    </a>
                </li>

                <li class="pc-item">
                    <a  href=" {{ route('clienteIndex') }}" class="pc-link">
                        <span class="pc-micon">
                            <svg class="pc-icon">
                                <use xlink:href="#user"></use>
                            </svg>
                        </span>
                        <span class="pc-mtext">Clientes</span>
                    </a>
                </li>

                <li class="pc-item">
                    <a href="#" class="pc-link">
                        <span class="pc-micon">
                        <svg class="pc-icon">
                            <use xlink:href="#file-text"></use>
                        </svg>
                        </span>
                        <span class="pc-mtext">Cotizaciones</span>
                    </a>
                </li>

                <li class="pc-item">
                    <a href="#" class="pc-link">
                        <span class="pc-micon">
                        <svg class="pc-icon">
                            <use xlink:href="#product"></use>
                        </svg>
                        </span>
                        <span class="pc-mtext">Productos</span>
                    </a>
                </li>

                <li class="pc-item">
                    <a href="#" class="pc-link">
                        <span class="pc-micon">
                        <svg class="pc-icon">
                            <use xlink:href="#setting"></use>
                        </svg>
                        </span>
                        <span class="pc-mtext">Configuración</span>
                    </a>
                </li>

                <li class="pc-item">
                    <a href="#" class="pc-link">
                        <span class="pc-micon">
                        <svg class="pc-icon">
                            <use xlink:href="#info"></use>
                        </svg>
                        </span>
                        <span class="pc-mtext">Ayuda</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- [ Sidebar Menu ] end -->