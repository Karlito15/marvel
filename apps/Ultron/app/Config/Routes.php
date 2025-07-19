<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
/* MEMOS */
$routes->get('/memo/boulangerie.html',                  'Memo::Boulangerie');
$routes->get('/memo/clamart.html',                      'Memo::Clamart');
$routes->get('/memo/meteo.html',                        'Memo::Meteo');
$routes->get('/memo/login.html',                        'Memo::Login');
$routes->get('/memo/google.html',                       'Memo::Google');
$routes->get('/memo/mysql.html',                        'Memo::MySQL');
$routes->get('/memo/nas.html',                          'Memo::NAS');
$routes->get('/memo/ovh-manager.html',                  'Memo::OVHManager');
$routes->get('/memo/php.html',                          'Memo::Php');
$routes->get('/memo/search-replace.html',               'Memo::SearchReplace');
/* FRAMEWORKS */
$routes->get('/framework/codeigniter.html',             'Framework::Codeigniter');
$routes->get('/framework/doctrine.html',                'Framework::Doctrine');
$routes->get('/framework/grav.html',                    'Framework::Grav');
$routes->get('/framework/symfony.html',                 'Framework::Symfony');
$routes->get('/framework/symfony-FOSjsRouting.html',    'Framework::SymfonyFOSJS');
$routes->get('/framework/symfony-StofDoctrine.html',    'Framework::SymfonySTOF');
$routes->get('/framework/wordpress.html',               'Framework::Wordpress');
/* SERVERS */
$routes->get('/server/dsm.html',                        'Server::DSM');
$routes->get('/server/linux.html',                      'Server::Linux');
$routes->get('/server/raspberry.html',                  'Server::Raspberry');
$routes->get('/server/windows.html',                    'Server::Windows');
/* SERVICES */
$routes->get('/service/maildev.html',                   'Service::Maildev');
$routes->get('/service/mailgun.html',                   'Service::Mailgun');
$routes->get('/service/mailtrap.html',                  'Service::Mailtrap');
/* SOFTWARES */
$routes->get('/software/cmd-r.html',                    'Software::cmdr');
$routes->get('/software/everythings.html',              'Software::everythings');
$routes->get('/software/heidi.html',                    'Software::heidi');
$routes->get('/software/multicommander.html',           'Software::multicommander');
$routes->get('/software/mp3tag.html',                   'Software::mp3tag');
$routes->get('/software/vim.html',                      'Software::vim');
/* TOOLS */
$routes->get('/tool/composer.html',                     'Tool::Composer');
$routes->get('/tool/git.html',                          'Tool::Git');
$routes->get('/tool/grunt.html',                        'Tool::Grunt');
$routes->get('/tool/gulp.html',                         'Tool::Gulp');
$routes->get('/tool/nodejs.html',                       'Tool::NodeJS');
$routes->get('/tool/phpcs.html',                        'Tool::PhpCs');
$routes->get('/tool/phpcs-fixer.html',                  'Tool::PhpCsFixer');
$routes->get('/tool/phpstan.html',                      'Tool::PhpStan');
$routes->get('/tool/phpunit.html',                      'Tool::PhpUnit');
$routes->get('/tool/sendmail.html',                     'Tool::Sendmail');
$routes->get('/tool/symfony.html',                      'Tool::Symfony');
$routes->get('/tool/taskfile.html',                     'Tool::Taskfile');
$routes->get('/tool/twig.html',                         'Tool::Twig');
$routes->get('/tool/vagrant.html',                      'Tool::Vagrant');
$routes->get('/tool/webpack.html',                      'Tool::Webpack');
$routes->get('/tool/yarn.html',                         'Tool::Yarn');
