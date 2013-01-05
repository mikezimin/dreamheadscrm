<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Symfony\Component\HttpKernel\Log\LoggerInterface;

/**
 * appdevUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRoutes = array(
        '_welcome' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),),
        '_demo_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/demo/secured/login',    ),  ),),
        '_security_check' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/demo/secured/login_check',    ),  ),),
        '_demo_logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/demo/secured/logout',    ),  ),),
        'acme_demo_secured_hello' => array (  0 =>   array (  ),  1 =>   array (    'name' => 'World',    '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/demo/secured/hello',    ),  ),),
        '_demo_secured_hello' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/demo/secured/hello',    ),  ),),
        '_demo_secured_hello_admin' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/demo/secured/hello/admin',    ),  ),),
        '_demo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/demo/',    ),  ),),
        '_demo_hello' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/demo/hello',    ),  ),),
        '_demo_contact' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/demo/contact',    ),  ),),
        '_wdt' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_wdt',    ),  ),),
        '_profiler_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search',    ),  ),),
        '_profiler_purge' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/purge',    ),  ),),
        '_profiler_info' => array (  0 =>   array (    0 => 'about',  ),  1 =>   array (    '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::infoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'about',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler/info',    ),  ),),
        '_profiler_import' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/import',    ),  ),),
        '_profiler_export' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '.txt',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/\\.]+',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler/export',    ),  ),),
        '_profiler_phpinfo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::phpinfoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/phpinfo',    ),  ),),
        '_profiler_search_results' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search/results',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),),
        '_profiler' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),),
        '_profiler_redirect' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',    'route' => '_profiler_search_results',    'token' => 'empty',    'ip' => '',    'url' => '',    'method' => '',    'limit' => '10',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/',    ),  ),),
        '_configurator_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_configurator/',    ),  ),),
        '_configurator_step' => array (  0 =>   array (    0 => 'index',  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'index',    ),    1 =>     array (      0 => 'text',      1 => '/_configurator/step',    ),  ),),
        '_configurator_final' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_configurator/final',    ),  ),),
        'forms_show' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Dreamheads\\Bundle\\LeadCRMBundle\\Controller\\FormController::showListAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/forms',    ),  ),),
        'fill_empty_columns' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Dreamheads\\Bundle\\LeadCRMBundle\\Controller\\TempController::fillEmptyColumnsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/temp/fill-empty-columns',    ),  ),),
        'fill_empty_columns_2' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Dreamheads\\Bundle\\LeadCRMBundle\\Controller\\TempController::fillEmptyColumns2Action',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/temp/fill-empty-columns-2',    ),  ),),
        'fill_mask' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Dreamheads\\Bundle\\LeadCRMBundle\\Controller\\TempController::fillMaskAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/temp/fill-mask',    ),  ),),
        'generate_regions' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Dreamheads\\Bundle\\LeadCRMBundle\\Controller\\TempController::generateRegionsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/temp/generate-regions',    ),  ),),
        'generate_operators' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Dreamheads\\Bundle\\LeadCRMBundle\\Controller\\TempController::generateOperatorsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/temp/generate-operators',    ),  ),),
        'generate_masks' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Dreamheads\\Bundle\\LeadCRMBundle\\Controller\\TempController::generateMasksAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/temp/generate-masks',    ),  ),),
        'get_phone_region' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Dreamheads\\Bundle\\LeadCRMBundle\\Controller\\TempController::getPhoneRegionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/temp/get-phone-region',    ),  ),),
        'login_check' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),),
        'logout' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),),
        'dreamheads_leadcrm_default_index' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'Dreamheads\\Bundle\\LeadCRMBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/hello',    ),  ),),
        'dreamheads_leadcrm_external_submitform' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Dreamheads\\Bundle\\LeadCRMBundle\\Controller\\ExternalController::submitFormAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/external/submit-form',    ),  ),),
        'addField' => array (  0 =>   array (    0 => 'formId',  ),  1 =>   array (    '_controller' => 'Dreamheads\\Bundle\\LeadCRMBundle\\Controller\\FieldController::add',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/fields/add',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'formId',    ),    2 =>     array (      0 => 'text',      1 => '/forms',    ),  ),),
        'updateField' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Dreamheads\\Bundle\\LeadCRMBundle\\Controller\\FieldController::updateAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ajax/fields/update',    ),  ),),
        'editForm' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Dreamheads\\Bundle\\LeadCRMBundle\\Controller\\FormController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/forms',    ),  ),),
        'updateForm' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Dreamheads\\Bundle\\LeadCRMBundle\\Controller\\FormController::updateAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/ajax/forms',    ),  ),),
        'leads_show' => array (  0 =>   array (    0 => 'formId',  ),  1 =>   array (    '_controller' => 'Dreamheads\\Bundle\\LeadCRMBundle\\Controller\\LeadController::showListAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/leads',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'formId',    ),    2 =>     array (      0 => 'text',      1 => '/forms',    ),  ),),
        'updateLead' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Dreamheads\\Bundle\\LeadCRMBundle\\Controller\\LeadController::updateAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ajax/leads/update',    ),  ),),
        'dreamheads_leadcrm_security_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Dreamheads\\Bundle\\LeadCRMBundle\\Controller\\SecurityController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),),
        'dreamheads_leadcrm_temp_testgetphone' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Dreamheads\\Bundle\\LeadCRMBundle\\Controller\\TempController::testGetPhone',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/temp/get-phone',    ),  ),),
        'dreamheads_leadcrm_temp_updatecouple' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Dreamheads\\Bundle\\LeadCRMBundle\\Controller\\TempController::updateCoupleAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/temp/update-couple',    ),  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $absolute = false)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Route "%s" does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $absolute);
    }
}
