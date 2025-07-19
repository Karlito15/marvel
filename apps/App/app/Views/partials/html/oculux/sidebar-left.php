<?php
/** @var Config\Web $config */

/**
 * Images
 */
$logo = [
    'src'    => 'medias/logo/square/trans/white-red.svg',
    'alt'    => $config::getSiteName(),
    'class'  => 'logo img-fluid',
    'width'  => null,
    'height' => null,
    'title'  => $config::getSiteName(),
    'rel'    => 'logo',
];

$user = [
    'src'    => 'medias/user/user-small.png',
    'alt'    => 'User Profile Picture',
    'class'  => 'user-photo',
    'width'  => null,
    'height' => null,
    'title'  => 'User Profile Picture',
    'rel'    => null,
];

?>
<div id="left-sidebar" class="sidebar">
    <div class="navbar-brand">
        <a href="<?=site_url();?>">
            <?php echo img($logo, true); ?>
            <span><?php echo $config::getSiteName(); ?></span>
        </a>
        <button type="button" class="btn-toggle-offcanvas btn btn-sm float-right"><i class="lnr lnr-menu icon-close"></i></button>
    </div>
    <div class="sidebar-scroll">
        <div class="user-account">
            <div class="user_div">
                <?php echo img($user, true); ?>
            </div>
            <div class="dropdown">
                <span>Bienvenue,</span>
                <a href="<?php echo site_url(); ?>" class="dropdown-toggle user-name" data-toggle="dropdown">
                    <strong><?php echo $config::getSiteName(); ?></strong>
                </a>
                <ul class="dropdown-menu dropdown-menu-right account vivify flipInY">
                    <li><a href="<?=site_url();?>"><i class="icon-user"></i>My Profile</a></li>
                    <li><a href="<?=site_url();?>"><i class="icon-envelope-open"></i>Messages</a></li>
                    <li><a href="<?=site_url();?>"><i class="icon-settings"></i>Settings</a></li>
                    <li class="divider"></li>
                    <li><a href="<?=site_url();?>"><i class="icon-power"></i>Logout</a></li>
                </ul>
            </div>
        </div>
        <nav id="left-sidebar-nav" class="sidebar-nav">
            <ul id="main-menu" class="metismenu">
                <li class="header">Main</li>
                <li class="active open">
                    <a href="#myPage" class="has-arrow"><i class="icon-home"></i><span>My Page</span></a>
                    <ul>
                        <li class="active"><a href="<?=site_url();?>">My Dashboard</a></li>
                        <li><a href="<?=site_url();?>">Web Analytics</a></li>
                        <li><a href="<?=site_url();?>">Event Monitoring</a></li>
                        <li><a href="<?=site_url();?>">Finance Performance</a></li>
                        <li><a href="<?=site_url();?>">Sales Monitoring</a></li>
                        <li><a href="<?=site_url();?>">Hospital Management</a></li>
                        <li><a href="<?=site_url();?>">Campaign Monitoring</a></li>
                        <li><a href="<?=site_url();?>">University Analytics</a></li>
                        <li><a href="<?=site_url();?>">eCommerce Analytics</a></li>
                    </ul>
                </li>
                <li><a href="<?=site_url();?>"><i class="icon-speedometer"></i><span>Dashboard</span></a></li>
                <li><a href="<?=site_url();?>"><i class="icon-diamond"></i><span>Crypto Coin</span></a></li>
                <li><a href="<?=site_url();?>"><i class="icon-rocket"></i><span>HRMS System</span></a></li>
                <li><a href="<?=site_url();?>"><i class="icon-badge"></i><span>Job Portal</span></a></li>
                <li><a href="<?=site_url();?>"><i class="icon-cursor"></i><span>Landing Page</span></a></li>
                <li class="header">App</li>
                <li>
                    <a href="#Contact" class="has-arrow"><i class="icon-book-open"></i><span>Contact</span></a>
                    <ul>
                        <li><a href="<?=site_url();?>">List View</a></li>
                        <li><a href="<?=site_url();?>">Grid View</a></li>
                    </ul>
                </li>
                <li><a href="<?=site_url();?>"><i class="icon-envelope"></i><span>Email</span></a></li>
                <li><a href="<?=site_url();?>"><i class="icon-bubbles"></i><span>Messenger</span></a></li>
                <li>
                    <a href="#Project" class="has-arrow"><i class="icon-bubbles"></i><span>Project</span></a>
                    <ul>
                        <li><a href="<?=site_url();?>">Taskboard</a></li>
                        <li><a href="<?=site_url();?>">Project list</a></li>
                        <li><a href="<?=site_url();?>">Ticket List</a></li>
                        <li><a href="<?=site_url();?>">Ticket Details</a></li>
                        <li><a href="<?=site_url();?>">Clients</a></li>
                        <li><a href="<?=site_url();?>">Todo List</a></li>
                    </ul>
                </li>
                <li><a href="<?=site_url();?>"><i class="icon-calendar"></i><span>Calendar</span></a></li>
                <li class="header">UI Elements</li>
                <li>
                    <a href="#uiIcons" class="has-arrow"><i class="icon-tag"></i><span>Icons</span></a>
                    <ul>
                        <li><a href="<?=site_url();?>">FontAwesome</a></li>
                        <li><a href="<?=site_url();?>">Simple Line</a></li>
                        <li><a href="<?=site_url();?>">Themify Icon</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#uiComponents" class="has-arrow"><i class="icon-diamond"></i><span>Components</span></a>
                    <ul>
                        <li><a href="<?=site_url();?>">Bootstrap UI</a></li>
                        <li><a href="<?=site_url();?>">Typography</a></li>
                        <li><a href="<?=site_url();?>">Colors</a></li>
                        <li><a href="<?=site_url();?>">Buttons</a></li>
                        <li><a href="<?=site_url();?>">Tabs</a></li>
                        <li><a href="<?=site_url();?>">Progress Bars</a></li>
                        <li><a href="<?=site_url();?>">Modals</a></li>
                        <li><a href="<?=site_url();?>">Notifications</a></li>
                        <li><a href="<?=site_url();?>">Dialogs</a></li>
                        <li><a href="<?=site_url();?>">List Group</a></li>
                        <li><a href="<?=site_url();?>">Media Object</a></li>
                        <li><a href="<?=site_url();?>">Nestable</a></li>
                        <li><a href="<?=site_url();?>">Range Sliders</a></li>
                        <li><a href="<?=site_url();?>">Helper Classes</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#forms" class="has-arrow"><i class="icon-pencil"></i><span>Forms</span></a>
                    <ul>
                        <li><a href="<?=site_url();?>">Basic Elements</a></li>
                        <li><a href="<?=site_url();?>">Advanced Elements</a></li>
                        <li><a href="<?=site_url();?>">Form Validation</a></li>
                        <li><a href="<?=site_url();?>">Form Wizard</a></li>
                        <li><a href="<?=site_url();?>">Summernote</a></li>
                        <li><a href="<?=site_url();?>">Drag &amp; Drop Upload</a></li>
                        <li><a href="<?=site_url();?>">CKEditor</a></li>
                        <li><a href="<?=site_url();?>">Markdown</a></li>
                        <li><a href="<?=site_url();?>">Image Cropping</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#Tables" class="has-arrow"><i class="icon-layers"></i><span>Tables</span></a>
                    <ul>
                        <li><a href="<?=site_url();?>">Normal Tables</a></li>
                        <li><a href="<?=site_url();?>">Tables Color</a></li>
                        <li><a href="<?=site_url();?>">Jquery Datatables</a></li>
                        <li><a href="<?=site_url();?>">Editable Tables</a></li>
                        <li><a href="<?=site_url();?>">Table Filter</a></li>
                        <li><a href="<?=site_url();?>">Table dragger</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#charts" class="has-arrow"><i class="icon-pie-chart"></i><span>Charts</span></a>
                    <ul>
                        <li><a href="<?=site_url();?>">Apex Charts</a></li>
                        <li><a href="<?=site_url();?>">C3 Charts</a></li>
                        <li><a href="<?=site_url();?>">ChartJS</a></li>
                        <li><a href="<?=site_url();?>">Morris Charts</a></li>
                        <li><a href="<?=site_url();?>">Flot Charts</a></li>
                        <li><a href="<?=site_url();?>">Sparkline Chart</a></li>
                        <li><a href="<?=site_url();?>">Jquery Knob</a></li>
                    </ul>
                </li>
                <li><a href="<?=site_url();?>"><i class="icon-map"></i><span>jVector Map</span></a></li>
                <li class="header">Extra</li>
                <li><a href="<?=site_url();?>"><i class="icon-puzzle"></i><span>Widgets</span></a></li>
                <li>
                    <a href="#Authentication" class="has-arrow"><i class="icon-lock"></i><span>Authentication</span></a>
                    <ul>
                        <li><a href="<?=site_url();?>">Login</a></li>
                        <li><a href="<?=site_url();?>">Login Version2</a></li>
                        <li><a href="<?=site_url();?>">Register</a></li>
                        <li><a href="<?=site_url();?>">Forgot Password</a></li>
                        <li><a href="<?=site_url();?>">Page 404</a></li>
                        <li><a href="<?=site_url();?>">Maintenance</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#Pages" class="has-arrow"><i class="icon-docs"></i><span>Pages</span></a>
                    <ul>
                        <li><a href="<?=site_url();?>">Blank Page</a></li>
                        <li><a href="<?=site_url();?>">User Profile</a></li>
                        <li><a href="<?=site_url();?>">User List</a></li>
                        <li><a href="<?=site_url();?>">Testimonials</a></li>
                        <li><a href="<?=site_url();?>">Invoices</a></li>
                        <li><a href="<?=site_url();?>">Timeline</a></li>
                        <li><a href="<?=site_url();?>">Search Results</a></li>
                        <li><a href="<?=site_url();?>">Image Gallery</a></li>
                        <li><a href="<?=site_url();?>">Pricing</a></li>
                        <li><a href="<?=site_url();?>">Coming Soon</a></li>
                    </ul>
                </li>
                <li><a href="<?=site_url();?>"><i class="icon-doc"></i><span>Documentation</span></a></li>
            </ul>
        </nav>
    </div>
</div>
