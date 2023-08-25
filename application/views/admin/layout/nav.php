		<!-- Left navbar-header -->
<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse slimscrollsidebar">
        <div class="user-profile">
            <div class="dropdown user-pro-body">
                <div><img src="<?php echo base_url() ?>assets/images/tim/<?php echo ucfirst($this->session->userdata('foto')) ?>" alt="user-img" class="img-circle"></div> <a href="#" class="dropdown-toggle u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo ucfirst($this->session->userdata('nama')); ?> <span class="caret"></span></a>
                <ul class="dropdown-menu animated flipInY">
                    <li><a><i class="ti-user"></i> <?php echo ucfirst($this->session->userdata('akses')); ?></a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="<?php echo base_url('admin/admin/edit/').$this->session->userdata('id_user') ?>"><i class="ti-settings"></i> Account Setting</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="<?php echo base_url('admin/login/logout') ?>"><i class="fa fa-power-off"></i> Logout</a></li>
                </ul>
            </div>
        </div>
        <ul class="nav" id="side-menu">
            <li class="sidebar-search hidden-sm hidden-md hidden-lg">
                <!-- input-group -->
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search..."> <span class="input-group-btn">
            <button class="btn btn-default" type="button"> <i class="fa fa-search"></i> </button>
            </span> </div>
                <!-- /input-group -->
            </li>
						<li class="nav-small-cap m-t-10">--- Main Menu</li>
						
            <li> <a href="<?php echo base_url('admin/dasbor') ?>" class="waves-effect"><i data-icon="v" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Dashboard</span></a> </li>
            <li> <a href="javascript:void(0);" class="waves-effect"><i class="linea-icon linea-basic fa-fw" data-icon="E"></i> <span class="hide-menu">Admin<span class="fa arrow"></span> <span class="label label-rouded label-custom pull-right"><?php echo $data_admin ?></span></span></a>
                <ul class="nav nav-second-level">
                    <li> <a href="<?php echo base_url('admin/admin') ?>">Data Admin</a> </li>
                    <li> <a href="<?php echo base_url('admin/admin/tambah') ?>">Tambah Admin</a> </li>
					<?php if($this->session->userdata('akses') == "SUPER ADMIN") { ?>
					<li> <a href="<?php echo base_url('admin/level') ?>">Data Level Hak Akses</a> </li>
					<?php } ?>
                </ul>
            </li>
            
            <li> <a href="#" class="waves-effect"><i data-icon="&#xe00b;" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Peternakan<span class="fa arrow"></span> <span class="label label-rouded label-info pull-right"><?php echo $data_peternakan ?></span> </span></a>
                <ul class="nav nav-second-level">
                    <li><a href="<?php echo base_url('admin/peternakan') ?>">Data Peternakan</a></li>
                    <li><a href="<?php echo base_url('admin/peternakan/tambah') ?>">Tambah Peternakan</a></li>
                    
                </ul>
            </li>                                     
            <li><a href="<?php echo base_url('admin/pesan') ?>" class="waves-effect"><i data-icon=")" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Pesan<span class="fa arrow"></span><span class="label label-rouded label-danger pull-right"><?php echo $data_pesan ?></span></span></a>
                <ul class="nav nav-second-level">
										<li><a href="<?php echo base_url('admin/pesan') ?>">Data Pesan Active</a></li>
										<li><a href="<?php echo base_url('admin/pesan/archive') ?>">Data Pesan Archive</a></li>
                    
                </ul>
						</li>
						<?php if($this->session->userdata('akses') == "SUPER ADMIN") { ?>
						<li><a href="<?php echo base_url('admin/pesan') ?>" class="waves-effect"><i data-icon="P" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Konfigurasi Web<span class="fa arrow"></span><span class="label label-rouded label-danger pull-right">Hot</span></span></a>
                <ul class="nav nav-second-level">
										<li><a href="<?php echo base_url('admin/profil') ?>">Ganti Informasi Peternakan</a></li>                    
                </ul>
						</li>
						<?php } ?>
						<li class="nav-small-cap">--- Keterangan</li>
            <li><a class="waves-effect"><i class="fa fa-circle-o text-danger"></i> <span class="hide-menu">Banyak Data</span></a></li>
            <li><a class="waves-effect"><i class="fa fa-circle-o text-info"></i> <span class="hide-menu">Banyak Menu</span></a></li>
        </ul>
    </div>
</div>
<?php
function breadcrumbs($sep = '', $home = 'Dashboard')
{
$site = 'http://'.$_SERVER['HTTP_HOST'];
$crumbs = explode('/', strrev($_SERVER["REQUEST_URI"]), 2);
$homeurl = $site.strrev($crumbs[1]);
$page = strrev($crumbs[0]);
$link = ucfirst(str_replace( array(".php","-","_"), array(""," "," ") ,$page));
$bc = '<ol class="breadcrumb">';
$bc .= '<li><a href="'.$homeurl.'/index.php'.'">'.$home.'</a>'.$sep.'</li>';
    if($link == "Index")
    {
        $bc .= '<li class="active">Minimalistic</li>';
    }
    elseif($link == "Index2")
    {
        $bc .= '<li class="active">Demographical</li>';
    }
    elseif($link == "Index3")
    {
        $bc .= '<li class="active">Analitical</li>';
    }
    elseif($link == "Index4")
    {
        $bc .= '<li class="active">Simpler</li>';
    }
    else
    {
        $bc .= '<li class="active">'.$link.'</li>'; 
    }
$bc .= '</ol>';
return $bc;
}
?>
<!-- Left navbar-header end -->
