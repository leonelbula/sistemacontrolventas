<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview">
                <a href="">
                    <i class="fa fa-files-o"></i>
                    <span>Inventario</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('categoria.index') }}"><i class="fa fa-circle-o"></i>Categorias</a></li>
                    <li><a href="{{ route('producto.index') }}"><i class="fa fa-circle-o"></i>Productos</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="">
                    <i class="fa fa-th"></i> 
                    <span>Clientes</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('cliente.index') }}"><i class="fa fa-circle-o"></i>Lista Cliente</a></li>
                    <li><a href="{{ route('estadocuentacliente.index') }}"><i class="fa fa-circle-o"></i>Estado de cuenta</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="">
                    <i class="fa fa-edit"></i> <span>Ventas</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('venta.index')}}"><i class="fa fa-circle-o"></i> Lista Ventas</a></li>
                    <li><a href=""><i class="fa fa-circle-o"></i> Nueva Devolucion</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="">
                    <i class="fa fa-calendar"></i> <span>Plan separe</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('plansepare.index')}}"><i class="fa fa-circle-o"></i> Lista plan separe</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="">
                    <i class="fa fa-pie-chart"></i>
                    <span>Gastos</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('gasto.index') }}"><i class="fa fa-circle-o"></i> Lista Gastos</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="">
                    <i class="fa fa-laptop"></i>
                    <span>Compras</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href=""><i class="fa fa-circle-o"></i> Lista compras</a></li>
                    <li><a href="../UI/icons.html"><i class="fa fa-circle-o"></i> Devolucion compras</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa fa-folder"></i> <span>Proveedores</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('proveedor.index')}}"><i class="fa fa-circle-o"></i> Lista Proveedores</a></li>
                    <li><a href="../forms/advanced.html"><i class="fa fa-circle-o"></i> Estado de cuenta</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-table"></i> <span>Tables</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="../tables/simple.html"><i class="fa fa-circle-o"></i> Simple tables</a></li>
                    <li><a href="../tables/data.html"><i class="fa fa-circle-o"></i> Data tables</a></li>
                </ul>
            </li>               
            <li><a href="https://adminlte.io/docs"><i class="fa fa-book"></i> <span>Reportes</span></a></li>
            <li class="header">Opciones</li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-gears"></i> <span>Configuracion</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('parametros.index') }}"><i class="fa fa-circle-o"></i> Parametros</a></li>
                    <li><a href=" {{ route('plazo.index') }} "><i class="fa fa-circle-o"></i> Plazos</a></li>
                </ul>
            </li>
            <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Usuarios</span></a></li>
            <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Perfil</span></a></li>
    </section>
    <!-- /.sidebar -->
</aside>