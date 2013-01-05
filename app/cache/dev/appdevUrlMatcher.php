<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appdevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        // _demo_login
        if ($pathinfo === '/demo/secured/login') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
        }

        // _security_check
        if ($pathinfo === '/demo/secured/login_check') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_security_check',);
        }

        // _demo_logout
        if ($pathinfo === '/demo/secured/logout') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
        }

        // acme_demo_secured_hello
        if ($pathinfo === '/demo/secured/hello') {
            return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
        }

        // _demo_secured_hello
        if (0 === strpos($pathinfo, '/demo/secured/hello') && preg_match('#^/demo/secured/hello/(?P<name>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',)), array('_route' => '_demo_secured_hello'));
        }

        // _demo_secured_hello_admin
        if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',)), array('_route' => '_demo_secured_hello_admin'));
        }

        // _demo
        if (rtrim($pathinfo, '/') === '/demo') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_demo');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
        }

        // _demo_hello
        if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',)), array('_route' => '_demo_hello'));
        }

        // _demo_contact
        if ($pathinfo === '/demo/contact') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
        }

        // _wdt
        if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',)), array('_route' => '_wdt'));
        }

        if (0 === strpos($pathinfo, '/_profiler')) {
            // _profiler_search
            if ($pathinfo === '/_profiler/search') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',  '_route' => '_profiler_search',);
            }

            // _profiler_purge
            if ($pathinfo === '/_profiler/purge') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',  '_route' => '_profiler_purge',);
            }

            // _profiler_info
            if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::infoAction',)), array('_route' => '_profiler_info'));
            }

            // _profiler_import
            if ($pathinfo === '/_profiler/import') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',  '_route' => '_profiler_import',);
            }

            // _profiler_export
            if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]+)\\.txt$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',)), array('_route' => '_profiler_export'));
            }

            // _profiler_phpinfo
            if ($pathinfo === '/_profiler/phpinfo') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::phpinfoAction',  '_route' => '_profiler_phpinfo',);
            }

            // _profiler_search_results
            if (preg_match('#^/_profiler/(?P<token>[^/]+)/search/results$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',)), array('_route' => '_profiler_search_results'));
            }

            // _profiler
            if (preg_match('#^/_profiler/(?P<token>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',)), array('_route' => '_profiler'));
            }

            // _profiler_redirect
            if (rtrim($pathinfo, '/') === '/_profiler') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_profiler_redirect');
                }

                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => '_profiler_search_results',  'token' => 'empty',  'ip' => '',  'url' => '',  'method' => '',  'limit' => '10',  '_route' => '_profiler_redirect',);
            }

        }

        if (0 === strpos($pathinfo, '/_configurator')) {
            // _configurator_home
            if (rtrim($pathinfo, '/') === '/_configurator') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_configurator_home');
                }

                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
            }

            // _configurator_step
            if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',)), array('_route' => '_configurator_step'));
            }

            // _configurator_final
            if ($pathinfo === '/_configurator/final') {
                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
            }

        }

        // forms_show
        if ($pathinfo === '/forms') {
            return array (  '_controller' => 'Dreamheads\\Bundle\\LeadCRMBundle\\Controller\\FormController::showListAction',  '_route' => 'forms_show',);
        }

        // fill_empty_columns
        if ($pathinfo === '/temp/fill-empty-columns') {
            return array (  '_controller' => 'Dreamheads\\Bundle\\LeadCRMBundle\\Controller\\TempController::fillEmptyColumnsAction',  '_route' => 'fill_empty_columns',);
        }

        // fill_empty_columns_2
        if ($pathinfo === '/temp/fill-empty-columns-2') {
            return array (  '_controller' => 'Dreamheads\\Bundle\\LeadCRMBundle\\Controller\\TempController::fillEmptyColumns2Action',  '_route' => 'fill_empty_columns_2',);
        }

        // fill_mask
        if ($pathinfo === '/temp/fill-mask') {
            return array (  '_controller' => 'Dreamheads\\Bundle\\LeadCRMBundle\\Controller\\TempController::fillMaskAction',  '_route' => 'fill_mask',);
        }

        // generate_regions
        if ($pathinfo === '/temp/generate-regions') {
            return array (  '_controller' => 'Dreamheads\\Bundle\\LeadCRMBundle\\Controller\\TempController::generateRegionsAction',  '_route' => 'generate_regions',);
        }

        // generate_operators
        if ($pathinfo === '/temp/generate-operators') {
            return array (  '_controller' => 'Dreamheads\\Bundle\\LeadCRMBundle\\Controller\\TempController::generateOperatorsAction',  '_route' => 'generate_operators',);
        }

        // generate_masks
        if ($pathinfo === '/temp/generate-masks') {
            return array (  '_controller' => 'Dreamheads\\Bundle\\LeadCRMBundle\\Controller\\TempController::generateMasksAction',  '_route' => 'generate_masks',);
        }

        // get_phone_region
        if ($pathinfo === '/temp/get-phone-region') {
            return array (  '_controller' => 'Dreamheads\\Bundle\\LeadCRMBundle\\Controller\\TempController::getPhoneRegionAction',  '_route' => 'get_phone_region',);
        }

        // login_check
        if ($pathinfo === '/login_check') {
            return array('_route' => 'login_check');
        }

        // logout
        if ($pathinfo === '/logout') {
            return array('_route' => 'logout');
        }

        // dreamheads_leadcrm_default_index
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Dreamheads\\Bundle\\LeadCRMBundle\\Controller\\DefaultController::indexAction',)), array('_route' => 'dreamheads_leadcrm_default_index'));
        }

        // dreamheads_leadcrm_external_submitform
        if (0 === strpos($pathinfo, '/external/submit-form') && preg_match('#^/external/submit\\-form/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Dreamheads\\Bundle\\LeadCRMBundle\\Controller\\ExternalController::submitFormAction',)), array('_route' => 'dreamheads_leadcrm_external_submitform'));
        }

        // addField
        if (0 === strpos($pathinfo, '/forms') && preg_match('#^/forms/(?P<formId>[^/]+)/fields/add$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Dreamheads\\Bundle\\LeadCRMBundle\\Controller\\FieldController::add',)), array('_route' => 'addField'));
        }

        // updateField
        if ($pathinfo === '/ajax/fields/update') {
            return array (  '_controller' => 'Dreamheads\\Bundle\\LeadCRMBundle\\Controller\\FieldController::updateAction',  '_route' => 'updateField',);
        }

        // editForm
        if (0 === strpos($pathinfo, '/forms') && preg_match('#^/forms/(?P<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Dreamheads\\Bundle\\LeadCRMBundle\\Controller\\FormController::editAction',)), array('_route' => 'editForm'));
        }

        // updateForm
        if (0 === strpos($pathinfo, '/ajax/forms') && preg_match('#^/ajax/forms/(?P<id>[^/]+)/update$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Dreamheads\\Bundle\\LeadCRMBundle\\Controller\\FormController::updateAction',)), array('_route' => 'updateForm'));
        }

        // leads_show
        if (0 === strpos($pathinfo, '/forms') && preg_match('#^/forms/(?P<formId>[^/]+)/leads$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Dreamheads\\Bundle\\LeadCRMBundle\\Controller\\LeadController::showListAction',)), array('_route' => 'leads_show'));
        }

        // updateLead
        if ($pathinfo === '/ajax/leads/update') {
            return array (  '_controller' => 'Dreamheads\\Bundle\\LeadCRMBundle\\Controller\\LeadController::updateAction',  '_route' => 'updateLead',);
        }

        // dreamheads_leadcrm_security_login
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'Dreamheads\\Bundle\\LeadCRMBundle\\Controller\\SecurityController::loginAction',  '_route' => 'dreamheads_leadcrm_security_login',);
        }

        // dreamheads_leadcrm_temp_testgetphone
        if ($pathinfo === '/temp/get-phone') {
            return array (  '_controller' => 'Dreamheads\\Bundle\\LeadCRMBundle\\Controller\\TempController::testGetPhone',  '_route' => 'dreamheads_leadcrm_temp_testgetphone',);
        }

        // dreamheads_leadcrm_temp_updatecouple
        if ($pathinfo === '/temp/update-couple') {
            return array (  '_controller' => 'Dreamheads\\Bundle\\LeadCRMBundle\\Controller\\TempController::updateCoupleAction',  '_route' => 'dreamheads_leadcrm_temp_updatecouple',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
