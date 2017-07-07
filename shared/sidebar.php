
                <div class="navbar-default sidebar">
                    <ul class="nav in" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input class="form-control" placeholder="Search..." type="text">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="index.html" class="active"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                           <li>
                            <a href="#"><i class="fa fa-users fa-fw"></i> Professores<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo $base_url ?>professores/index.php"><i class="fa fa-users fa-fw"></i> Professores</a>
                                </li>
                                <li>
                                    <a href="<?php echo $base_url ?>professores/create.php"><i class="fa fa-user-group fa-fw"></i> Cadastrar Professor</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                           <li>
                            <a href="#"><i class="fa fa-user fa-fw"></i> Alunos<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo $base_url ?>alunos/index.php"><i class="fa fa-user fa-fw"></i> Alunos</a>
                                </li>
                                <li>
                                    <a href="<?php echo $base_url ?>alunos/create.php"><i class="fa fa-user fa-fw"></i> Cadastrar Aluno</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                           <li>
                            <a href="#"><i class="fa  fa-sticky-note fa-fw"></i> AULAS / MÊS<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo $base_url ?>aulas_mes/index.php"><i class="fa  fa-sticky-note  fa-fw"></i> Aulas do mês</a>
                                </li>
                                <li>
                                    <a href="<?php echo $base_url ?>aulas_mes/create.php"><i class="fa  fa-sticky-note  fa-fw"></i> Nova Aula </a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            