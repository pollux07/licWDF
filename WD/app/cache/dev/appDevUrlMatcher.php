<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
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
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/venta')) {
            // venta
            if (rtrim($pathinfo, '/') === '/venta') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'venta');
                }

                return array (  '_controller' => 'DsCorp\\General\\GeneralBundle\\Controller\\ventaController::indexAction',  '_route' => 'venta',);
            }

            // venta_show
            if (preg_match('#^/venta/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'venta_show')), array (  '_controller' => 'DsCorp\\General\\GeneralBundle\\Controller\\ventaController::showAction',));
            }

            // venta_new
            if ($pathinfo === '/venta/new') {
                return array (  '_controller' => 'DsCorp\\General\\GeneralBundle\\Controller\\ventaController::newAction',  '_route' => 'venta_new',);
            }

            // venta_create
            if ($pathinfo === '/venta/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_venta_create;
                }

                return array (  '_controller' => 'DsCorp\\General\\GeneralBundle\\Controller\\ventaController::createAction',  '_route' => 'venta_create',);
            }
            not_venta_create:

            // venta_edit
            if (preg_match('#^/venta/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'venta_edit')), array (  '_controller' => 'DsCorp\\General\\GeneralBundle\\Controller\\ventaController::editAction',));
            }

            // venta_update
            if (preg_match('#^/venta/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_venta_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'venta_update')), array (  '_controller' => 'DsCorp\\General\\GeneralBundle\\Controller\\ventaController::updateAction',));
            }
            not_venta_update:

            // venta_delete
            if (preg_match('#^/venta/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_venta_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'venta_delete')), array (  '_controller' => 'DsCorp\\General\\GeneralBundle\\Controller\\ventaController::deleteAction',));
            }
            not_venta_delete:

        }

        if (0 === strpos($pathinfo, '/estatus')) {
            // estatus
            if (rtrim($pathinfo, '/') === '/estatus') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'estatus');
                }

                return array (  '_controller' => 'DsCorp\\General\\GeneralBundle\\Controller\\estatusController::indexAction',  '_route' => 'estatus',);
            }

            // estatus_show
            if (preg_match('#^/estatus/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'estatus_show')), array (  '_controller' => 'DsCorp\\General\\GeneralBundle\\Controller\\estatusController::showAction',));
            }

            // estatus_new
            if ($pathinfo === '/estatus/new') {
                return array (  '_controller' => 'DsCorp\\General\\GeneralBundle\\Controller\\estatusController::newAction',  '_route' => 'estatus_new',);
            }

            // estatus_create
            if ($pathinfo === '/estatus/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_estatus_create;
                }

                return array (  '_controller' => 'DsCorp\\General\\GeneralBundle\\Controller\\estatusController::createAction',  '_route' => 'estatus_create',);
            }
            not_estatus_create:

            // estatus_edit
            if (preg_match('#^/estatus/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'estatus_edit')), array (  '_controller' => 'DsCorp\\General\\GeneralBundle\\Controller\\estatusController::editAction',));
            }

            // estatus_update
            if (preg_match('#^/estatus/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_estatus_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'estatus_update')), array (  '_controller' => 'DsCorp\\General\\GeneralBundle\\Controller\\estatusController::updateAction',));
            }
            not_estatus_update:

            // estatus_delete
            if (preg_match('#^/estatus/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_estatus_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'estatus_delete')), array (  '_controller' => 'DsCorp\\General\\GeneralBundle\\Controller\\estatusController::deleteAction',));
            }
            not_estatus_delete:

        }

        if (0 === strpos($pathinfo, '/ubicacion')) {
            // ubicacion
            if (rtrim($pathinfo, '/') === '/ubicacion') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'ubicacion');
                }

                return array (  '_controller' => 'DsCorp\\General\\GeneralBundle\\Controller\\ubicacionController::indexAction',  '_route' => 'ubicacion',);
            }

            // ubicacion_show
            if (preg_match('#^/ubicacion/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ubicacion_show')), array (  '_controller' => 'DsCorp\\General\\GeneralBundle\\Controller\\ubicacionController::showAction',));
            }

            // ubicacion_new
            if ($pathinfo === '/ubicacion/new') {
                return array (  '_controller' => 'DsCorp\\General\\GeneralBundle\\Controller\\ubicacionController::newAction',  '_route' => 'ubicacion_new',);
            }

            // ubicacion_create
            if ($pathinfo === '/ubicacion/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_ubicacion_create;
                }

                return array (  '_controller' => 'DsCorp\\General\\GeneralBundle\\Controller\\ubicacionController::createAction',  '_route' => 'ubicacion_create',);
            }
            not_ubicacion_create:

            // ubicacion_edit
            if (preg_match('#^/ubicacion/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ubicacion_edit')), array (  '_controller' => 'DsCorp\\General\\GeneralBundle\\Controller\\ubicacionController::editAction',));
            }

            // ubicacion_update
            if (preg_match('#^/ubicacion/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_ubicacion_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ubicacion_update')), array (  '_controller' => 'DsCorp\\General\\GeneralBundle\\Controller\\ubicacionController::updateAction',));
            }
            not_ubicacion_update:

            // ubicacion_delete
            if (preg_match('#^/ubicacion/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_ubicacion_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ubicacion_delete')), array (  '_controller' => 'DsCorp\\General\\GeneralBundle\\Controller\\ubicacionController::deleteAction',));
            }
            not_ubicacion_delete:

        }

        if (0 === strpos($pathinfo, '/pais')) {
            // pais
            if (rtrim($pathinfo, '/') === '/pais') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'pais');
                }

                return array (  '_controller' => 'DsCorp\\General\\GeneralBundle\\Controller\\paisController::indexAction',  '_route' => 'pais',);
            }

            // pais_show
            if (preg_match('#^/pais/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pais_show')), array (  '_controller' => 'DsCorp\\General\\GeneralBundle\\Controller\\paisController::showAction',));
            }

            // pais_new
            if ($pathinfo === '/pais/new') {
                return array (  '_controller' => 'DsCorp\\General\\GeneralBundle\\Controller\\paisController::newAction',  '_route' => 'pais_new',);
            }

            // pais_create
            if ($pathinfo === '/pais/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_pais_create;
                }

                return array (  '_controller' => 'DsCorp\\General\\GeneralBundle\\Controller\\paisController::createAction',  '_route' => 'pais_create',);
            }
            not_pais_create:

            // pais_edit
            if (preg_match('#^/pais/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pais_edit')), array (  '_controller' => 'DsCorp\\General\\GeneralBundle\\Controller\\paisController::editAction',));
            }

            // pais_update
            if (preg_match('#^/pais/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_pais_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pais_update')), array (  '_controller' => 'DsCorp\\General\\GeneralBundle\\Controller\\paisController::updateAction',));
            }
            not_pais_update:

            // pais_delete
            if (preg_match('#^/pais/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_pais_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pais_delete')), array (  '_controller' => 'DsCorp\\General\\GeneralBundle\\Controller\\paisController::deleteAction',));
            }
            not_pais_delete:

        }

        if (0 === strpos($pathinfo, '/estado')) {
            // estado
            if (rtrim($pathinfo, '/') === '/estado') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'estado');
                }

                return array (  '_controller' => 'DsCorp\\General\\GeneralBundle\\Controller\\estadoController::indexAction',  '_route' => 'estado',);
            }

            // estado_show
            if (preg_match('#^/estado/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'estado_show')), array (  '_controller' => 'DsCorp\\General\\GeneralBundle\\Controller\\estadoController::showAction',));
            }

            // estado_new
            if ($pathinfo === '/estado/new') {
                return array (  '_controller' => 'DsCorp\\General\\GeneralBundle\\Controller\\estadoController::newAction',  '_route' => 'estado_new',);
            }

            // estado_create
            if ($pathinfo === '/estado/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_estado_create;
                }

                return array (  '_controller' => 'DsCorp\\General\\GeneralBundle\\Controller\\estadoController::createAction',  '_route' => 'estado_create',);
            }
            not_estado_create:

            // estado_edit
            if (preg_match('#^/estado/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'estado_edit')), array (  '_controller' => 'DsCorp\\General\\GeneralBundle\\Controller\\estadoController::editAction',));
            }

            // estado_update
            if (preg_match('#^/estado/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_estado_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'estado_update')), array (  '_controller' => 'DsCorp\\General\\GeneralBundle\\Controller\\estadoController::updateAction',));
            }
            not_estado_update:

            // estado_delete
            if (preg_match('#^/estado/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_estado_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'estado_delete')), array (  '_controller' => 'DsCorp\\General\\GeneralBundle\\Controller\\estadoController::deleteAction',));
            }
            not_estado_delete:

        }

        // general_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'general_homepage')), array (  '_controller' => 'DsCorp\\General\\GeneralBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/direccion_empresa')) {
            // direccion_empresa
            if (rtrim($pathinfo, '/') === '/direccion_empresa') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'direccion_empresa');
                }

                return array (  '_controller' => 'DsCorp\\Empresa\\EmpresaBundle\\Controller\\direccion_empresaController::indexAction',  '_route' => 'direccion_empresa',);
            }

            // direccion_empresa_show
            if (preg_match('#^/direccion_empresa/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'direccion_empresa_show')), array (  '_controller' => 'DsCorp\\Empresa\\EmpresaBundle\\Controller\\direccion_empresaController::showAction',));
            }

            // direccion_empresa_new
            if ($pathinfo === '/direccion_empresa/new') {
                return array (  '_controller' => 'DsCorp\\Empresa\\EmpresaBundle\\Controller\\direccion_empresaController::newAction',  '_route' => 'direccion_empresa_new',);
            }

            // direccion_empresa_create
            if ($pathinfo === '/direccion_empresa/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_direccion_empresa_create;
                }

                return array (  '_controller' => 'DsCorp\\Empresa\\EmpresaBundle\\Controller\\direccion_empresaController::createAction',  '_route' => 'direccion_empresa_create',);
            }
            not_direccion_empresa_create:

            // direccion_empresa_edit
            if (preg_match('#^/direccion_empresa/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'direccion_empresa_edit')), array (  '_controller' => 'DsCorp\\Empresa\\EmpresaBundle\\Controller\\direccion_empresaController::editAction',));
            }

            // direccion_empresa_update
            if (preg_match('#^/direccion_empresa/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_direccion_empresa_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'direccion_empresa_update')), array (  '_controller' => 'DsCorp\\Empresa\\EmpresaBundle\\Controller\\direccion_empresaController::updateAction',));
            }
            not_direccion_empresa_update:

            // direccion_empresa_delete
            if (preg_match('#^/direccion_empresa/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_direccion_empresa_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'direccion_empresa_delete')), array (  '_controller' => 'DsCorp\\Empresa\\EmpresaBundle\\Controller\\direccion_empresaController::deleteAction',));
            }
            not_direccion_empresa_delete:

        }

        if (0 === strpos($pathinfo, '/empresa')) {
            // empresa
            if (rtrim($pathinfo, '/') === '/empresa') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'empresa');
                }

                return array (  '_controller' => 'DsCorp\\Empresa\\EmpresaBundle\\Controller\\empresaController::indexAction',  '_route' => 'empresa',);
            }

            // empresa_show
            if (preg_match('#^/empresa/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'empresa_show')), array (  '_controller' => 'DsCorp\\Empresa\\EmpresaBundle\\Controller\\empresaController::showAction',));
            }

            // empresa_new
            if ($pathinfo === '/empresa/new') {
                return array (  '_controller' => 'DsCorp\\Empresa\\EmpresaBundle\\Controller\\empresaController::newAction',  '_route' => 'empresa_new',);
            }

            // empresa_create
            if ($pathinfo === '/empresa/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_empresa_create;
                }

                return array (  '_controller' => 'DsCorp\\Empresa\\EmpresaBundle\\Controller\\empresaController::createAction',  '_route' => 'empresa_create',);
            }
            not_empresa_create:

            // empresa_edit
            if (preg_match('#^/empresa/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'empresa_edit')), array (  '_controller' => 'DsCorp\\Empresa\\EmpresaBundle\\Controller\\empresaController::editAction',));
            }

            // empresa_update
            if (preg_match('#^/empresa/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_empresa_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'empresa_update')), array (  '_controller' => 'DsCorp\\Empresa\\EmpresaBundle\\Controller\\empresaController::updateAction',));
            }
            not_empresa_update:

            // empresa_delete
            if (preg_match('#^/empresa/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_empresa_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'empresa_delete')), array (  '_controller' => 'DsCorp\\Empresa\\EmpresaBundle\\Controller\\empresaController::deleteAction',));
            }
            not_empresa_delete:

        }

        // empresa_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'empresa_homepage')), array (  '_controller' => 'DsCorp\\Empresa\\EmpresaBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/licencia_equipo')) {
            // licencia_equipo
            if (rtrim($pathinfo, '/') === '/licencia_equipo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'licencia_equipo');
                }

                return array (  '_controller' => 'DsCorp\\Equipo\\EquipoBundle\\Controller\\licencia_equipoController::indexAction',  '_route' => 'licencia_equipo',);
            }

            // licencia_equipo_show
            if (preg_match('#^/licencia_equipo/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'licencia_equipo_show')), array (  '_controller' => 'DsCorp\\Equipo\\EquipoBundle\\Controller\\licencia_equipoController::showAction',));
            }

            // licencia_equipo_new
            if ($pathinfo === '/licencia_equipo/new') {
                return array (  '_controller' => 'DsCorp\\Equipo\\EquipoBundle\\Controller\\licencia_equipoController::newAction',  '_route' => 'licencia_equipo_new',);
            }

            // licencia_equipo_create
            if ($pathinfo === '/licencia_equipo/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_licencia_equipo_create;
                }

                return array (  '_controller' => 'DsCorp\\Equipo\\EquipoBundle\\Controller\\licencia_equipoController::createAction',  '_route' => 'licencia_equipo_create',);
            }
            not_licencia_equipo_create:

            // licencia_equipo_edit
            if (preg_match('#^/licencia_equipo/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'licencia_equipo_edit')), array (  '_controller' => 'DsCorp\\Equipo\\EquipoBundle\\Controller\\licencia_equipoController::editAction',));
            }

            // licencia_equipo_update
            if (preg_match('#^/licencia_equipo/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_licencia_equipo_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'licencia_equipo_update')), array (  '_controller' => 'DsCorp\\Equipo\\EquipoBundle\\Controller\\licencia_equipoController::updateAction',));
            }
            not_licencia_equipo_update:

            // licencia_equipo_delete
            if (preg_match('#^/licencia_equipo/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_licencia_equipo_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'licencia_equipo_delete')), array (  '_controller' => 'DsCorp\\Equipo\\EquipoBundle\\Controller\\licencia_equipoController::deleteAction',));
            }
            not_licencia_equipo_delete:

        }

        if (0 === strpos($pathinfo, '/tipo_licencia')) {
            // tipo_licencia
            if (rtrim($pathinfo, '/') === '/tipo_licencia') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'tipo_licencia');
                }

                return array (  '_controller' => 'DsCorp\\Equipo\\EquipoBundle\\Controller\\tipo_licenciaController::indexAction',  '_route' => 'tipo_licencia',);
            }

            // tipo_licencia_show
            if (preg_match('#^/tipo_licencia/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipo_licencia_show')), array (  '_controller' => 'DsCorp\\Equipo\\EquipoBundle\\Controller\\tipo_licenciaController::showAction',));
            }

            // tipo_licencia_new
            if ($pathinfo === '/tipo_licencia/new') {
                return array (  '_controller' => 'DsCorp\\Equipo\\EquipoBundle\\Controller\\tipo_licenciaController::newAction',  '_route' => 'tipo_licencia_new',);
            }

            // tipo_licencia_create
            if ($pathinfo === '/tipo_licencia/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_tipo_licencia_create;
                }

                return array (  '_controller' => 'DsCorp\\Equipo\\EquipoBundle\\Controller\\tipo_licenciaController::createAction',  '_route' => 'tipo_licencia_create',);
            }
            not_tipo_licencia_create:

            // tipo_licencia_edit
            if (preg_match('#^/tipo_licencia/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipo_licencia_edit')), array (  '_controller' => 'DsCorp\\Equipo\\EquipoBundle\\Controller\\tipo_licenciaController::editAction',));
            }

            // tipo_licencia_update
            if (preg_match('#^/tipo_licencia/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_tipo_licencia_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipo_licencia_update')), array (  '_controller' => 'DsCorp\\Equipo\\EquipoBundle\\Controller\\tipo_licenciaController::updateAction',));
            }
            not_tipo_licencia_update:

            // tipo_licencia_delete
            if (preg_match('#^/tipo_licencia/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_tipo_licencia_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipo_licencia_delete')), array (  '_controller' => 'DsCorp\\Equipo\\EquipoBundle\\Controller\\tipo_licenciaController::deleteAction',));
            }
            not_tipo_licencia_delete:

        }

        if (0 === strpos($pathinfo, '/producto')) {
            // producto
            if (rtrim($pathinfo, '/') === '/producto') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'producto');
                }

                return array (  '_controller' => 'DsCorp\\Equipo\\EquipoBundle\\Controller\\productoController::indexAction',  '_route' => 'producto',);
            }

            // producto_show
            if (preg_match('#^/producto/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'producto_show')), array (  '_controller' => 'DsCorp\\Equipo\\EquipoBundle\\Controller\\productoController::showAction',));
            }

            // producto_new
            if ($pathinfo === '/producto/new') {
                return array (  '_controller' => 'DsCorp\\Equipo\\EquipoBundle\\Controller\\productoController::newAction',  '_route' => 'producto_new',);
            }

            // producto_create
            if ($pathinfo === '/producto/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_producto_create;
                }

                return array (  '_controller' => 'DsCorp\\Equipo\\EquipoBundle\\Controller\\productoController::createAction',  '_route' => 'producto_create',);
            }
            not_producto_create:

            // producto_edit
            if (preg_match('#^/producto/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'producto_edit')), array (  '_controller' => 'DsCorp\\Equipo\\EquipoBundle\\Controller\\productoController::editAction',));
            }

            // producto_update
            if (preg_match('#^/producto/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_producto_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'producto_update')), array (  '_controller' => 'DsCorp\\Equipo\\EquipoBundle\\Controller\\productoController::updateAction',));
            }
            not_producto_update:

            // producto_delete
            if (preg_match('#^/producto/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_producto_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'producto_delete')), array (  '_controller' => 'DsCorp\\Equipo\\EquipoBundle\\Controller\\productoController::deleteAction',));
            }
            not_producto_delete:

        }

        if (0 === strpos($pathinfo, '/modelo')) {
            // modelo
            if (rtrim($pathinfo, '/') === '/modelo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'modelo');
                }

                return array (  '_controller' => 'DsCorp\\Equipo\\EquipoBundle\\Controller\\modeloController::indexAction',  '_route' => 'modelo',);
            }

            // modelo_show
            if (preg_match('#^/modelo/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'modelo_show')), array (  '_controller' => 'DsCorp\\Equipo\\EquipoBundle\\Controller\\modeloController::showAction',));
            }

            // modelo_new
            if ($pathinfo === '/modelo/new') {
                return array (  '_controller' => 'DsCorp\\Equipo\\EquipoBundle\\Controller\\modeloController::newAction',  '_route' => 'modelo_new',);
            }

            // modelo_create
            if ($pathinfo === '/modelo/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_modelo_create;
                }

                return array (  '_controller' => 'DsCorp\\Equipo\\EquipoBundle\\Controller\\modeloController::createAction',  '_route' => 'modelo_create',);
            }
            not_modelo_create:

            // modelo_edit
            if (preg_match('#^/modelo/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'modelo_edit')), array (  '_controller' => 'DsCorp\\Equipo\\EquipoBundle\\Controller\\modeloController::editAction',));
            }

            // modelo_update
            if (preg_match('#^/modelo/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_modelo_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'modelo_update')), array (  '_controller' => 'DsCorp\\Equipo\\EquipoBundle\\Controller\\modeloController::updateAction',));
            }
            not_modelo_update:

            // modelo_delete
            if (preg_match('#^/modelo/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_modelo_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'modelo_delete')), array (  '_controller' => 'DsCorp\\Equipo\\EquipoBundle\\Controller\\modeloController::deleteAction',));
            }
            not_modelo_delete:

        }

        if (0 === strpos($pathinfo, '/capacidad')) {
            // capacidad
            if (rtrim($pathinfo, '/') === '/capacidad') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'capacidad');
                }

                return array (  '_controller' => 'DsCorp\\Equipo\\EquipoBundle\\Controller\\capacidadController::indexAction',  '_route' => 'capacidad',);
            }

            // capacidad_show
            if (preg_match('#^/capacidad/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'capacidad_show')), array (  '_controller' => 'DsCorp\\Equipo\\EquipoBundle\\Controller\\capacidadController::showAction',));
            }

            // capacidad_new
            if ($pathinfo === '/capacidad/new') {
                return array (  '_controller' => 'DsCorp\\Equipo\\EquipoBundle\\Controller\\capacidadController::newAction',  '_route' => 'capacidad_new',);
            }

            // capacidad_create
            if ($pathinfo === '/capacidad/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_capacidad_create;
                }

                return array (  '_controller' => 'DsCorp\\Equipo\\EquipoBundle\\Controller\\capacidadController::createAction',  '_route' => 'capacidad_create',);
            }
            not_capacidad_create:

            // capacidad_edit
            if (preg_match('#^/capacidad/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'capacidad_edit')), array (  '_controller' => 'DsCorp\\Equipo\\EquipoBundle\\Controller\\capacidadController::editAction',));
            }

            // capacidad_update
            if (preg_match('#^/capacidad/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_capacidad_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'capacidad_update')), array (  '_controller' => 'DsCorp\\Equipo\\EquipoBundle\\Controller\\capacidadController::updateAction',));
            }
            not_capacidad_update:

            // capacidad_delete
            if (preg_match('#^/capacidad/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_capacidad_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'capacidad_delete')), array (  '_controller' => 'DsCorp\\Equipo\\EquipoBundle\\Controller\\capacidadController::deleteAction',));
            }
            not_capacidad_delete:

        }

        if (0 === strpos($pathinfo, '/disco_duro')) {
            // disco_duro
            if (rtrim($pathinfo, '/') === '/disco_duro') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'disco_duro');
                }

                return array (  '_controller' => 'DsCorp\\Equipo\\EquipoBundle\\Controller\\disco_duroController::indexAction',  '_route' => 'disco_duro',);
            }

            // disco_duro_show
            if (preg_match('#^/disco_duro/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'disco_duro_show')), array (  '_controller' => 'DsCorp\\Equipo\\EquipoBundle\\Controller\\disco_duroController::showAction',));
            }

            // disco_duro_new
            if ($pathinfo === '/disco_duro/new') {
                return array (  '_controller' => 'DsCorp\\Equipo\\EquipoBundle\\Controller\\disco_duroController::newAction',  '_route' => 'disco_duro_new',);
            }

            // disco_duro_create
            if ($pathinfo === '/disco_duro/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_disco_duro_create;
                }

                return array (  '_controller' => 'DsCorp\\Equipo\\EquipoBundle\\Controller\\disco_duroController::createAction',  '_route' => 'disco_duro_create',);
            }
            not_disco_duro_create:

            // disco_duro_edit
            if (preg_match('#^/disco_duro/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'disco_duro_edit')), array (  '_controller' => 'DsCorp\\Equipo\\EquipoBundle\\Controller\\disco_duroController::editAction',));
            }

            // disco_duro_update
            if (preg_match('#^/disco_duro/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_disco_duro_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'disco_duro_update')), array (  '_controller' => 'DsCorp\\Equipo\\EquipoBundle\\Controller\\disco_duroController::updateAction',));
            }
            not_disco_duro_update:

            // disco_duro_delete
            if (preg_match('#^/disco_duro/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_disco_duro_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'disco_duro_delete')), array (  '_controller' => 'DsCorp\\Equipo\\EquipoBundle\\Controller\\disco_duroController::deleteAction',));
            }
            not_disco_duro_delete:

        }

        if (0 === strpos($pathinfo, '/procesador')) {
            // procesador
            if (rtrim($pathinfo, '/') === '/procesador') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'procesador');
                }

                return array (  '_controller' => 'DsCorp\\Equipo\\EquipoBundle\\Controller\\procesadorController::indexAction',  '_route' => 'procesador',);
            }

            // procesador_show
            if (preg_match('#^/procesador/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'procesador_show')), array (  '_controller' => 'DsCorp\\Equipo\\EquipoBundle\\Controller\\procesadorController::showAction',));
            }

            // procesador_new
            if ($pathinfo === '/procesador/new') {
                return array (  '_controller' => 'DsCorp\\Equipo\\EquipoBundle\\Controller\\procesadorController::newAction',  '_route' => 'procesador_new',);
            }

            // procesador_create
            if ($pathinfo === '/procesador/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_procesador_create;
                }

                return array (  '_controller' => 'DsCorp\\Equipo\\EquipoBundle\\Controller\\procesadorController::createAction',  '_route' => 'procesador_create',);
            }
            not_procesador_create:

            // procesador_edit
            if (preg_match('#^/procesador/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'procesador_edit')), array (  '_controller' => 'DsCorp\\Equipo\\EquipoBundle\\Controller\\procesadorController::editAction',));
            }

            // procesador_update
            if (preg_match('#^/procesador/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_procesador_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'procesador_update')), array (  '_controller' => 'DsCorp\\Equipo\\EquipoBundle\\Controller\\procesadorController::updateAction',));
            }
            not_procesador_update:

            // procesador_delete
            if (preg_match('#^/procesador/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_procesador_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'procesador_delete')), array (  '_controller' => 'DsCorp\\Equipo\\EquipoBundle\\Controller\\procesadorController::deleteAction',));
            }
            not_procesador_delete:

        }

        if (0 === strpos($pathinfo, '/memoria_ram')) {
            // memoria_ram
            if (rtrim($pathinfo, '/') === '/memoria_ram') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'memoria_ram');
                }

                return array (  '_controller' => 'DsCorp\\Equipo\\EquipoBundle\\Controller\\memoria_ramController::indexAction',  '_route' => 'memoria_ram',);
            }

            // memoria_ram_show
            if (preg_match('#^/memoria_ram/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'memoria_ram_show')), array (  '_controller' => 'DsCorp\\Equipo\\EquipoBundle\\Controller\\memoria_ramController::showAction',));
            }

            // memoria_ram_new
            if ($pathinfo === '/memoria_ram/new') {
                return array (  '_controller' => 'DsCorp\\Equipo\\EquipoBundle\\Controller\\memoria_ramController::newAction',  '_route' => 'memoria_ram_new',);
            }

            // memoria_ram_create
            if ($pathinfo === '/memoria_ram/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_memoria_ram_create;
                }

                return array (  '_controller' => 'DsCorp\\Equipo\\EquipoBundle\\Controller\\memoria_ramController::createAction',  '_route' => 'memoria_ram_create',);
            }
            not_memoria_ram_create:

            // memoria_ram_edit
            if (preg_match('#^/memoria_ram/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'memoria_ram_edit')), array (  '_controller' => 'DsCorp\\Equipo\\EquipoBundle\\Controller\\memoria_ramController::editAction',));
            }

            // memoria_ram_update
            if (preg_match('#^/memoria_ram/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_memoria_ram_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'memoria_ram_update')), array (  '_controller' => 'DsCorp\\Equipo\\EquipoBundle\\Controller\\memoria_ramController::updateAction',));
            }
            not_memoria_ram_update:

            // memoria_ram_delete
            if (preg_match('#^/memoria_ram/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_memoria_ram_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'memoria_ram_delete')), array (  '_controller' => 'DsCorp\\Equipo\\EquipoBundle\\Controller\\memoria_ramController::deleteAction',));
            }
            not_memoria_ram_delete:

        }

        if (0 === strpos($pathinfo, '/caracteristicas_equipo')) {
            // caracteristicas_equipo
            if (rtrim($pathinfo, '/') === '/caracteristicas_equipo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'caracteristicas_equipo');
                }

                return array (  '_controller' => 'DsCorp\\Equipo\\EquipoBundle\\Controller\\caracteristicas_equipoController::indexAction',  '_route' => 'caracteristicas_equipo',);
            }

            // caracteristicas_equipo_show
            if (preg_match('#^/caracteristicas_equipo/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'caracteristicas_equipo_show')), array (  '_controller' => 'DsCorp\\Equipo\\EquipoBundle\\Controller\\caracteristicas_equipoController::showAction',));
            }

            // caracteristicas_equipo_new
            if ($pathinfo === '/caracteristicas_equipo/new') {
                return array (  '_controller' => 'DsCorp\\Equipo\\EquipoBundle\\Controller\\caracteristicas_equipoController::newAction',  '_route' => 'caracteristicas_equipo_new',);
            }

            // caracteristicas_equipo_create
            if ($pathinfo === '/caracteristicas_equipo/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_caracteristicas_equipo_create;
                }

                return array (  '_controller' => 'DsCorp\\Equipo\\EquipoBundle\\Controller\\caracteristicas_equipoController::createAction',  '_route' => 'caracteristicas_equipo_create',);
            }
            not_caracteristicas_equipo_create:

            // caracteristicas_equipo_edit
            if (preg_match('#^/caracteristicas_equipo/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'caracteristicas_equipo_edit')), array (  '_controller' => 'DsCorp\\Equipo\\EquipoBundle\\Controller\\caracteristicas_equipoController::editAction',));
            }

            // caracteristicas_equipo_update
            if (preg_match('#^/caracteristicas_equipo/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_caracteristicas_equipo_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'caracteristicas_equipo_update')), array (  '_controller' => 'DsCorp\\Equipo\\EquipoBundle\\Controller\\caracteristicas_equipoController::updateAction',));
            }
            not_caracteristicas_equipo_update:

            // caracteristicas_equipo_delete
            if (preg_match('#^/caracteristicas_equipo/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_caracteristicas_equipo_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'caracteristicas_equipo_delete')), array (  '_controller' => 'DsCorp\\Equipo\\EquipoBundle\\Controller\\caracteristicas_equipoController::deleteAction',));
            }
            not_caracteristicas_equipo_delete:

        }

        if (0 === strpos($pathinfo, '/equipo')) {
            // equipo
            if (rtrim($pathinfo, '/') === '/equipo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'equipo');
                }

                return array (  '_controller' => 'DsCorp\\Equipo\\EquipoBundle\\Controller\\equipoController::indexAction',  '_route' => 'equipo',);
            }

            // equipo_show
            if (preg_match('#^/equipo/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'equipo_show')), array (  '_controller' => 'DsCorp\\Equipo\\EquipoBundle\\Controller\\equipoController::showAction',));
            }

            // equipo_new
            if ($pathinfo === '/equipo/new') {
                return array (  '_controller' => 'DsCorp\\Equipo\\EquipoBundle\\Controller\\equipoController::newAction',  '_route' => 'equipo_new',);
            }

            // equipo_create
            if ($pathinfo === '/equipo/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_equipo_create;
                }

                return array (  '_controller' => 'DsCorp\\Equipo\\EquipoBundle\\Controller\\equipoController::createAction',  '_route' => 'equipo_create',);
            }
            not_equipo_create:

            // equipo_edit
            if (preg_match('#^/equipo/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'equipo_edit')), array (  '_controller' => 'DsCorp\\Equipo\\EquipoBundle\\Controller\\equipoController::editAction',));
            }

            // equipo_update
            if (preg_match('#^/equipo/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_equipo_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'equipo_update')), array (  '_controller' => 'DsCorp\\Equipo\\EquipoBundle\\Controller\\equipoController::updateAction',));
            }
            not_equipo_update:

            // equipo_delete
            if (preg_match('#^/equipo/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_equipo_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'equipo_delete')), array (  '_controller' => 'DsCorp\\Equipo\\EquipoBundle\\Controller\\equipoController::deleteAction',));
            }
            not_equipo_delete:

        }

        // equipo_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'equipo_homepage')), array (  '_controller' => 'DsCorp\\Equipo\\EquipoBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/direccion_cliente')) {
            // direccion_cliente
            if (rtrim($pathinfo, '/') === '/direccion_cliente') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'direccion_cliente');
                }

                return array (  '_controller' => 'DsCorp\\Cliente\\ClienteBundle\\Controller\\direccion_clienteController::indexAction',  '_route' => 'direccion_cliente',);
            }

            // direccion_cliente_show
            if (preg_match('#^/direccion_cliente/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'direccion_cliente_show')), array (  '_controller' => 'DsCorp\\Cliente\\ClienteBundle\\Controller\\direccion_clienteController::showAction',));
            }

            // direccion_cliente_new
            if ($pathinfo === '/direccion_cliente/new') {
                return array (  '_controller' => 'DsCorp\\Cliente\\ClienteBundle\\Controller\\direccion_clienteController::newAction',  '_route' => 'direccion_cliente_new',);
            }

            // direccion_cliente_create
            if ($pathinfo === '/direccion_cliente/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_direccion_cliente_create;
                }

                return array (  '_controller' => 'DsCorp\\Cliente\\ClienteBundle\\Controller\\direccion_clienteController::createAction',  '_route' => 'direccion_cliente_create',);
            }
            not_direccion_cliente_create:

            // direccion_cliente_edit
            if (preg_match('#^/direccion_cliente/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'direccion_cliente_edit')), array (  '_controller' => 'DsCorp\\Cliente\\ClienteBundle\\Controller\\direccion_clienteController::editAction',));
            }

            // direccion_cliente_update
            if (preg_match('#^/direccion_cliente/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_direccion_cliente_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'direccion_cliente_update')), array (  '_controller' => 'DsCorp\\Cliente\\ClienteBundle\\Controller\\direccion_clienteController::updateAction',));
            }
            not_direccion_cliente_update:

            // direccion_cliente_delete
            if (preg_match('#^/direccion_cliente/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_direccion_cliente_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'direccion_cliente_delete')), array (  '_controller' => 'DsCorp\\Cliente\\ClienteBundle\\Controller\\direccion_clienteController::deleteAction',));
            }
            not_direccion_cliente_delete:

        }

        if (0 === strpos($pathinfo, '/cliente')) {
            // cliente
            if (rtrim($pathinfo, '/') === '/cliente') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'cliente');
                }

                return array (  '_controller' => 'DsCorp\\Cliente\\ClienteBundle\\Controller\\clienteController::indexAction',  '_route' => 'cliente',);
            }

            // cliente_show
            if (preg_match('#^/cliente/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cliente_show')), array (  '_controller' => 'DsCorp\\Cliente\\ClienteBundle\\Controller\\clienteController::showAction',));
            }

            // cliente_new
            if ($pathinfo === '/cliente/new') {
                return array (  '_controller' => 'DsCorp\\Cliente\\ClienteBundle\\Controller\\clienteController::newAction',  '_route' => 'cliente_new',);
            }

            // cliente_create
            if ($pathinfo === '/cliente/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_cliente_create;
                }

                return array (  '_controller' => 'DsCorp\\Cliente\\ClienteBundle\\Controller\\clienteController::createAction',  '_route' => 'cliente_create',);
            }
            not_cliente_create:

            // cliente_edit
            if (preg_match('#^/cliente/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cliente_edit')), array (  '_controller' => 'DsCorp\\Cliente\\ClienteBundle\\Controller\\clienteController::editAction',));
            }

            // cliente_update
            if (preg_match('#^/cliente/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_cliente_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cliente_update')), array (  '_controller' => 'DsCorp\\Cliente\\ClienteBundle\\Controller\\clienteController::updateAction',));
            }
            not_cliente_update:

            // cliente_delete
            if (preg_match('#^/cliente/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_cliente_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cliente_delete')), array (  '_controller' => 'DsCorp\\Cliente\\ClienteBundle\\Controller\\clienteController::deleteAction',));
            }
            not_cliente_delete:

        }

        // cliente_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'cliente_homepage')), array (  '_controller' => 'DsCorp\\Cliente\\ClienteBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/fabricante')) {
            // fabricante
            if (rtrim($pathinfo, '/') === '/fabricante') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fabricante');
                }

                return array (  '_controller' => 'DsCorp\\Fabricante\\FabricanteBundle\\Controller\\fabricanteController::indexAction',  '_route' => 'fabricante',);
            }

            // fabricante_show
            if (preg_match('#^/fabricante/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fabricante_show')), array (  '_controller' => 'DsCorp\\Fabricante\\FabricanteBundle\\Controller\\fabricanteController::showAction',));
            }

            // fabricante_new
            if ($pathinfo === '/fabricante/new') {
                return array (  '_controller' => 'DsCorp\\Fabricante\\FabricanteBundle\\Controller\\fabricanteController::newAction',  '_route' => 'fabricante_new',);
            }

            // fabricante_create
            if ($pathinfo === '/fabricante/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_fabricante_create;
                }

                return array (  '_controller' => 'DsCorp\\Fabricante\\FabricanteBundle\\Controller\\fabricanteController::createAction',  '_route' => 'fabricante_create',);
            }
            not_fabricante_create:

            // fabricante_edit
            if (preg_match('#^/fabricante/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fabricante_edit')), array (  '_controller' => 'DsCorp\\Fabricante\\FabricanteBundle\\Controller\\fabricanteController::editAction',));
            }

            // fabricante_update
            if (preg_match('#^/fabricante/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_fabricante_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fabricante_update')), array (  '_controller' => 'DsCorp\\Fabricante\\FabricanteBundle\\Controller\\fabricanteController::updateAction',));
            }
            not_fabricante_update:

            // fabricante_delete
            if (preg_match('#^/fabricante/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_fabricante_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fabricante_delete')), array (  '_controller' => 'DsCorp\\Fabricante\\FabricanteBundle\\Controller\\fabricanteController::deleteAction',));
            }
            not_fabricante_delete:

        }

        if (0 === strpos($pathinfo, '/procedencia')) {
            // procedencia
            if (rtrim($pathinfo, '/') === '/procedencia') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'procedencia');
                }

                return array (  '_controller' => 'DsCorp\\Fabricante\\FabricanteBundle\\Controller\\procedenciaController::indexAction',  '_route' => 'procedencia',);
            }

            // procedencia_show
            if (preg_match('#^/procedencia/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'procedencia_show')), array (  '_controller' => 'DsCorp\\Fabricante\\FabricanteBundle\\Controller\\procedenciaController::showAction',));
            }

            // procedencia_new
            if ($pathinfo === '/procedencia/new') {
                return array (  '_controller' => 'DsCorp\\Fabricante\\FabricanteBundle\\Controller\\procedenciaController::newAction',  '_route' => 'procedencia_new',);
            }

            // procedencia_create
            if ($pathinfo === '/procedencia/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_procedencia_create;
                }

                return array (  '_controller' => 'DsCorp\\Fabricante\\FabricanteBundle\\Controller\\procedenciaController::createAction',  '_route' => 'procedencia_create',);
            }
            not_procedencia_create:

            // procedencia_edit
            if (preg_match('#^/procedencia/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'procedencia_edit')), array (  '_controller' => 'DsCorp\\Fabricante\\FabricanteBundle\\Controller\\procedenciaController::editAction',));
            }

            // procedencia_update
            if (preg_match('#^/procedencia/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_procedencia_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'procedencia_update')), array (  '_controller' => 'DsCorp\\Fabricante\\FabricanteBundle\\Controller\\procedenciaController::updateAction',));
            }
            not_procedencia_update:

            // procedencia_delete
            if (preg_match('#^/procedencia/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_procedencia_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'procedencia_delete')), array (  '_controller' => 'DsCorp\\Fabricante\\FabricanteBundle\\Controller\\procedenciaController::deleteAction',));
            }
            not_procedencia_delete:

        }

        if (0 === strpos($pathinfo, '/direccion_fabricante')) {
            // direccion_fabricante
            if (rtrim($pathinfo, '/') === '/direccion_fabricante') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'direccion_fabricante');
                }

                return array (  '_controller' => 'DsCorp\\Fabricante\\FabricanteBundle\\Controller\\direccion_fabricanteController::indexAction',  '_route' => 'direccion_fabricante',);
            }

            // direccion_fabricante_show
            if (preg_match('#^/direccion_fabricante/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'direccion_fabricante_show')), array (  '_controller' => 'DsCorp\\Fabricante\\FabricanteBundle\\Controller\\direccion_fabricanteController::showAction',));
            }

            // direccion_fabricante_new
            if ($pathinfo === '/direccion_fabricante/new') {
                return array (  '_controller' => 'DsCorp\\Fabricante\\FabricanteBundle\\Controller\\direccion_fabricanteController::newAction',  '_route' => 'direccion_fabricante_new',);
            }

            // direccion_fabricante_create
            if ($pathinfo === '/direccion_fabricante/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_direccion_fabricante_create;
                }

                return array (  '_controller' => 'DsCorp\\Fabricante\\FabricanteBundle\\Controller\\direccion_fabricanteController::createAction',  '_route' => 'direccion_fabricante_create',);
            }
            not_direccion_fabricante_create:

            // direccion_fabricante_edit
            if (preg_match('#^/direccion_fabricante/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'direccion_fabricante_edit')), array (  '_controller' => 'DsCorp\\Fabricante\\FabricanteBundle\\Controller\\direccion_fabricanteController::editAction',));
            }

            // direccion_fabricante_update
            if (preg_match('#^/direccion_fabricante/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_direccion_fabricante_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'direccion_fabricante_update')), array (  '_controller' => 'DsCorp\\Fabricante\\FabricanteBundle\\Controller\\direccion_fabricanteController::updateAction',));
            }
            not_direccion_fabricante_update:

            // direccion_fabricante_delete
            if (preg_match('#^/direccion_fabricante/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_direccion_fabricante_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'direccion_fabricante_delete')), array (  '_controller' => 'DsCorp\\Fabricante\\FabricanteBundle\\Controller\\direccion_fabricanteController::deleteAction',));
            }
            not_direccion_fabricante_delete:

        }

        // fabricante_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fabricante_homepage')), array (  '_controller' => 'DsCorp\\Fabricante\\FabricanteBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/rol')) {
            // rol
            if (rtrim($pathinfo, '/') === '/rol') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'rol');
                }

                return array (  '_controller' => 'DsCorp\\Personal\\PersonalBundle\\Controller\\rolController::indexAction',  '_route' => 'rol',);
            }

            // rol_show
            if (preg_match('#^/rol/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'rol_show')), array (  '_controller' => 'DsCorp\\Personal\\PersonalBundle\\Controller\\rolController::showAction',));
            }

            // rol_new
            if ($pathinfo === '/rol/new') {
                return array (  '_controller' => 'DsCorp\\Personal\\PersonalBundle\\Controller\\rolController::newAction',  '_route' => 'rol_new',);
            }

            // rol_create
            if ($pathinfo === '/rol/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_rol_create;
                }

                return array (  '_controller' => 'DsCorp\\Personal\\PersonalBundle\\Controller\\rolController::createAction',  '_route' => 'rol_create',);
            }
            not_rol_create:

            // rol_edit
            if (preg_match('#^/rol/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'rol_edit')), array (  '_controller' => 'DsCorp\\Personal\\PersonalBundle\\Controller\\rolController::editAction',));
            }

            // rol_update
            if (preg_match('#^/rol/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_rol_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'rol_update')), array (  '_controller' => 'DsCorp\\Personal\\PersonalBundle\\Controller\\rolController::updateAction',));
            }
            not_rol_update:

            // rol_delete
            if (preg_match('#^/rol/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_rol_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'rol_delete')), array (  '_controller' => 'DsCorp\\Personal\\PersonalBundle\\Controller\\rolController::deleteAction',));
            }
            not_rol_delete:

        }

        if (0 === strpos($pathinfo, '/puesto')) {
            // puesto
            if (rtrim($pathinfo, '/') === '/puesto') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'puesto');
                }

                return array (  '_controller' => 'DsCorp\\Personal\\PersonalBundle\\Controller\\puestoController::indexAction',  '_route' => 'puesto',);
            }

            // puesto_show
            if (preg_match('#^/puesto/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'puesto_show')), array (  '_controller' => 'DsCorp\\Personal\\PersonalBundle\\Controller\\puestoController::showAction',));
            }

            // puesto_new
            if ($pathinfo === '/puesto/new') {
                return array (  '_controller' => 'DsCorp\\Personal\\PersonalBundle\\Controller\\puestoController::newAction',  '_route' => 'puesto_new',);
            }

            // puesto_create
            if ($pathinfo === '/puesto/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_puesto_create;
                }

                return array (  '_controller' => 'DsCorp\\Personal\\PersonalBundle\\Controller\\puestoController::createAction',  '_route' => 'puesto_create',);
            }
            not_puesto_create:

            // puesto_edit
            if (preg_match('#^/puesto/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'puesto_edit')), array (  '_controller' => 'DsCorp\\Personal\\PersonalBundle\\Controller\\puestoController::editAction',));
            }

            // puesto_update
            if (preg_match('#^/puesto/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_puesto_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'puesto_update')), array (  '_controller' => 'DsCorp\\Personal\\PersonalBundle\\Controller\\puestoController::updateAction',));
            }
            not_puesto_update:

            // puesto_delete
            if (preg_match('#^/puesto/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_puesto_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'puesto_delete')), array (  '_controller' => 'DsCorp\\Personal\\PersonalBundle\\Controller\\puestoController::deleteAction',));
            }
            not_puesto_delete:

        }

        if (0 === strpos($pathinfo, '/direccion_personal')) {
            // direccion_personal
            if (rtrim($pathinfo, '/') === '/direccion_personal') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'direccion_personal');
                }

                return array (  '_controller' => 'DsCorp\\Personal\\PersonalBundle\\Controller\\direccion_personalController::indexAction',  '_route' => 'direccion_personal',);
            }

            // direccion_personal_show
            if (preg_match('#^/direccion_personal/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'direccion_personal_show')), array (  '_controller' => 'DsCorp\\Personal\\PersonalBundle\\Controller\\direccion_personalController::showAction',));
            }

            // direccion_personal_new
            if ($pathinfo === '/direccion_personal/new') {
                return array (  '_controller' => 'DsCorp\\Personal\\PersonalBundle\\Controller\\direccion_personalController::newAction',  '_route' => 'direccion_personal_new',);
            }

            // direccion_personal_create
            if ($pathinfo === '/direccion_personal/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_direccion_personal_create;
                }

                return array (  '_controller' => 'DsCorp\\Personal\\PersonalBundle\\Controller\\direccion_personalController::createAction',  '_route' => 'direccion_personal_create',);
            }
            not_direccion_personal_create:

            // direccion_personal_edit
            if (preg_match('#^/direccion_personal/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'direccion_personal_edit')), array (  '_controller' => 'DsCorp\\Personal\\PersonalBundle\\Controller\\direccion_personalController::editAction',));
            }

            // direccion_personal_update
            if (preg_match('#^/direccion_personal/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_direccion_personal_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'direccion_personal_update')), array (  '_controller' => 'DsCorp\\Personal\\PersonalBundle\\Controller\\direccion_personalController::updateAction',));
            }
            not_direccion_personal_update:

            // direccion_personal_delete
            if (preg_match('#^/direccion_personal/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_direccion_personal_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'direccion_personal_delete')), array (  '_controller' => 'DsCorp\\Personal\\PersonalBundle\\Controller\\direccion_personalController::deleteAction',));
            }
            not_direccion_personal_delete:

        }

        if (0 === strpos($pathinfo, '/avisos')) {
            // avisos
            if (rtrim($pathinfo, '/') === '/avisos') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'avisos');
                }

                return array (  '_controller' => 'DsCorp\\Personal\\PersonalBundle\\Controller\\avisosController::indexAction',  '_route' => 'avisos',);
            }

            // avisos_show
            if (preg_match('#^/avisos/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'avisos_show')), array (  '_controller' => 'DsCorp\\Personal\\PersonalBundle\\Controller\\avisosController::showAction',));
            }

        }

        if (0 === strpos($pathinfo, '/usuarios')) {
            // usuarios
            if (rtrim($pathinfo, '/') === '/usuarios') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'usuarios');
                }

                return array (  '_controller' => 'DsCorp\\Personal\\PersonalBundle\\Controller\\usuariosController::indexAction',  '_route' => 'usuarios',);
            }

            // usuarios_show
            if (preg_match('#^/usuarios/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuarios_show')), array (  '_controller' => 'DsCorp\\Personal\\PersonalBundle\\Controller\\usuariosController::showAction',));
            }

            // usuarios_new
            if ($pathinfo === '/usuarios/new') {
                return array (  '_controller' => 'DsCorp\\Personal\\PersonalBundle\\Controller\\usuariosController::newAction',  '_route' => 'usuarios_new',);
            }

            // usuarios_create
            if ($pathinfo === '/usuarios/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_usuarios_create;
                }

                return array (  '_controller' => 'DsCorp\\Personal\\PersonalBundle\\Controller\\usuariosController::createAction',  '_route' => 'usuarios_create',);
            }
            not_usuarios_create:

            // usuarios_edit
            if (preg_match('#^/usuarios/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuarios_edit')), array (  '_controller' => 'DsCorp\\Personal\\PersonalBundle\\Controller\\usuariosController::editAction',));
            }

            // usuarios_update
            if (preg_match('#^/usuarios/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_usuarios_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuarios_update')), array (  '_controller' => 'DsCorp\\Personal\\PersonalBundle\\Controller\\usuariosController::updateAction',));
            }
            not_usuarios_update:

            // usuarios_delete
            if (preg_match('#^/usuarios/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_usuarios_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuarios_delete')), array (  '_controller' => 'DsCorp\\Personal\\PersonalBundle\\Controller\\usuariosController::deleteAction',));
            }
            not_usuarios_delete:

        }

        if (0 === strpos($pathinfo, '/personal')) {
            // personal
            if (rtrim($pathinfo, '/') === '/personal') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'personal');
                }

                return array (  '_controller' => 'DsCorp\\Personal\\PersonalBundle\\Controller\\personalController::indexAction',  '_route' => 'personal',);
            }

            // personal_show
            if (preg_match('#^/personal/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'personal_show')), array (  '_controller' => 'DsCorp\\Personal\\PersonalBundle\\Controller\\personalController::showAction',));
            }

            // personal_new
            if ($pathinfo === '/personal/new') {
                return array (  '_controller' => 'DsCorp\\Personal\\PersonalBundle\\Controller\\personalController::newAction',  '_route' => 'personal_new',);
            }

            // personal_create
            if ($pathinfo === '/personal/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_personal_create;
                }

                return array (  '_controller' => 'DsCorp\\Personal\\PersonalBundle\\Controller\\personalController::createAction',  '_route' => 'personal_create',);
            }
            not_personal_create:

            // personal_edit
            if (preg_match('#^/personal/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'personal_edit')), array (  '_controller' => 'DsCorp\\Personal\\PersonalBundle\\Controller\\personalController::editAction',));
            }

            // personal_update
            if (preg_match('#^/personal/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_personal_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'personal_update')), array (  '_controller' => 'DsCorp\\Personal\\PersonalBundle\\Controller\\personalController::updateAction',));
            }
            not_personal_update:

            // personal_delete
            if (preg_match('#^/personal/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_personal_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'personal_delete')), array (  '_controller' => 'DsCorp\\Personal\\PersonalBundle\\Controller\\personalController::deleteAction',));
            }
            not_personal_delete:

        }

        // personal_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'personal_homepage')), array (  '_controller' => 'DsCorp\\Personal\\PersonalBundle\\Controller\\DefaultController::indexAction',));
        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
