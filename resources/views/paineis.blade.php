<body>
    <!-- Left Panel -->
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href=""><i class="menu-icon fa fa-home"></i>Pagina Inicial </a>
                    </li>
                    <li class="menu-title">Frente de Caixa</li><!-- /.menu-title -->
                    <li>
                        <a href="{{route('frentecaixa.index')}}"><i class="menu-icon fa fa-money"></i>Frente de Caixa</a>
                    </li>
                    <li class="menu-title">Gestão Empresarial</li><!-- /.menu-title -->
                    <li>
                        <a href="{{route('pessoas.cliente')}}"> <i class="menu-icon fa fa-group"></i>Clientes </a>
                    </li>
                    <li>
                        <a href="{{route('pessoas.fornecedor')}}"><i class="menu-icon fa fa-briefcase"></i>Fornecedores</a>
                    </li>
                    <li>
                        <a href="{{route('servico.index')}}"><i class="menu-icon fa fa-cogs"></i>Serviços</a>
                    </li>
                    <li>
                        <a href="{{route('produto.index')}}"><i class="menu-icon fa fa-stack-exchange"></i>Estoque</a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Contas</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-arrow-up"></i><a href="font-themify.html">Contas a Receber</a></li>
                            <li><i class="menu-icon fa fa-arrow-down"></i><a href="font-fontawesome.html">Contas a Pagar</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href=""><i class="menu-icon ti ti-widget"></i>Motores</a>
                    </li>
                    <li>
                        <a href=""> <i class="menu-icon fa fa-list"></i>Esquemas</a>
                    </li>
                    <li>
                        <a href=""><i class="menu-icon fa fa-tags"></i>Láudo Técnico</a>
                    </li>
                    <li>
                        <a href=""><i class="menu-icon fa fa-building"></i>Relatórios</a>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>
    <!-- /#left-panel -->
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a class="navbar-brand" href="./"><img src="{{asset('app-assets/images/logo copiar.jpg')}}" alt="Logo"></a>
                    <a class="navbar-brand hidden" href="./"><img src="{{asset('app-assets/images/logo copiar.jpg')}}" alt="Logo"></a>
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>

                        
                    </header>

        <!-- /#header -->