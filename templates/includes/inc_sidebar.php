<?php
$slug = isset($d->slug) && !empty($d->slug) ? $d->slug : 'dashboard';
?>


<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <?php if (is_admin(get_user_role())) : ?>

            <li class="nav-item">
                <a class="nav-link <?php echo $slug === 'admin' ? '' : 'collapsed'; ?> " href="admin">
                    <i class="bi bi-person-badge"></i>
                    <span>Administración</span>
                </a>
            </li><!-- End Administración Page Nav -->


        <?php endif; ?>

        <li class="nav-item">
            <a class="nav-link <?php echo $slug === 'dashboard' ? '' : 'collapsed'; ?>" href="dashboard">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-heading">Menú</li>

        <li class="nav-item">
            <a class="nav-link <?php echo $slug === 'profesores' ? '' : 'collapsed'; ?>" href="profesores">
                <i class="bi bi-people"></i>
                <span>Profesores</span>
            </a>
        </li><!-- End Profesores Page Nav -->

        <li class="nav-item">
            <a class="nav-link <?php echo $slug === 'alumnos' ? '' : 'collapsed'; ?>" href="alumnos">
                <i class="bi bi-book-half"></i>
                <span>Alumnos</span>
            </a>
        </li><!-- End Alumnos Page Nav -->

        <li class="nav-item">
            <a class="nav-link <?php echo $slug === 'materias' ? '' : 'collapsed'; ?>" href="materias">
                <i class="bi bi-book"></i>
                <span>Materias</span>
            </a>
        </li><!-- End Materias Page Nav -->

        <li class="nav-item">
            <a class="nav-link <?php echo $slug === 'grupos' ? '' : 'collapsed'; ?>" href="grupos">
                <i class="bi bi-front"></i>
                <span>Grupos</span>
            </a>
        </li><!-- End Grupos Page Nav -->

        <li class="nav-item">
            <a class="nav-link <?php echo $slug === 'horarios' ? '' : 'collapsed'; ?>" href="horarios">
                <i class="bi bi-calendar3"></i>
                <span>Horarios</span>
            </a>
        </li><!-- End Horarios Page Nav -->

        <li class="nav-item">
            <a class="nav-link <?php echo $slug === 'lecciones' ? '' : 'collapsed'; ?>" href="lecciones">
                <i class="bi bi-easel"></i>
                <span>Lecciones</span>
            </a>
        </li><!-- End Lecciones Page Nav -->

        <li class="nav-item">
            <a class="nav-link <?php echo $slug === 'calificaciones' ? '' : 'collapsed'; ?>" href="calificaciones">
                <i class="bi bi-clipboard"></i>
                <span>Calificaciones</span>
            </a>
        </li><!-- End Calificaciones Page Nav -->

        <li class="nav-item">
            <a class="nav-link <?php echo $slug === 'reportes' ? '' : 'collapsed'; ?>" href="reportes">
                <i class="bi bi-bar-chart"></i>
                <span>Reportes</span>
            </a>
        </li><!-- End Reportes Page Nav -->


    </ul>

</aside><!-- End Sidebar-->