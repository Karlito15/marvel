# TEMPLATES

### Default Base View
```php  
<?php
/**
 * Base
 * @var CodeIgniter\View\View $view
 * @var string $title
 */
$this->extend('Karlito\Views\bases\html\full');

/** Container */
$this->section('container');
?>

<?php
$this->endSection();

/** Meta */
$this->section('meta'); echo $this->include('Karlito\Views\partials\html\metas'); $this->endSection();

/** Stylesheet */
$this->section('stylesheet'); echo $this->include('App\Views\partials\html\links'); $this->endSection();

/** Theme */
$this->section('theme'); echo $this->include('Karlito\Views\partials\html\theme'); $this->endSection();

/** Nav */
$this->section('nav'); echo $this->include('Karlito\Views\partials\html\nav'); $this->endSection();

/** Search */
$this->section('search'); echo $this->include('Karlito\Views\partials\html\search'); $this->endSection();

/** Sidebar Right */
$this->section('sidebarRight'); echo $this->include('Karlito\Views\partials\html\sidebar-right'); $this->endSection();

/** Sidebar Left */
$this->section('sidebarLeft'); echo $this->include('App\Views\partials\html\sidebar-left'); $this->endSection();

/** Javascript */
$this->section('javascript'); echo $this->include('App\Views\partials\html\scripts'); $this->endSection();
?>

```


### Add breadcrumb
```php
echo $view->setVar('one', 'lorem')->setVar('two', 'ipsum')->render('Karlito\Views\partials\html\breadcrumb.php');
```

### SideBar
example :
```php
<?php
/** @var \Config\Template $config */

/**
 * Images
 */
$logo = [
    'src'    => 'medias/logo/square-KW/dark/red.svg',
    'alt'    => $config::$siteName,
    'class'  => 'logo img-fluid',
    'width'  => null,
    'height' => null,
    'title'  => $config::$siteName,
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

/**
 * Navigation
 */
$uri    = service('uri');
$home   = $uri->getPath();
$lvl1   = ($uri->getSegment(1)) ? $uri->getSegment(1) : null;
$lvl2   = (!is_null($lvl1) && $uri->getSegment(2)) ? '/' . $lvl1 . '/' . $uri->getSegment(2) : null;
$lvl3   = (!is_null($lvl2) && $uri->getSegment(3)) ? '/' . $lvl2 . '/' . $uri->getSegment(3) : null;

$examples = [
	['link' => '/memo/login.html', 'text' => 'Login'],
	['link' => '/memo/clamart.html', 'text' => 'Clamart'],
	['link' => '/memo/google.html', 'text' => 'Google'],
];

$exampleHTML 		= generateHTML($examples);

```

```php
<li<?php echo ($lvl1 === 'example' ? ' class="active open"' : null); ?>>
	<a href="#Example" class="has-arrow"><i class="icon-settings"></i><span>Example</span></a>
	<ul>
		<?php echo $exampleHTML; ?>
	</ul>
</li>

```

### Add comments for IDE
example :
```php
/** @var CodeIgniter\View\View $view */
```
