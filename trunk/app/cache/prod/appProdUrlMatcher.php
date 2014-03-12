<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/user')) {
            // kronos_index
            if (0 === strpos($pathinfo, '/user/index') && preg_match('#^/user/index(?:/(?P<inWeek>\\d+))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'kronos_index')), array (  '_controller' => 'Kronos\\UserReportingBundle\\Controller\\UserController::indexAction',  'inWeek' => NULL,));
            }

            // kronos_create_line
            if (0 === strpos($pathinfo, '/user/create-line') && preg_match('#^/user/create\\-line(?:/(?P<inWeek>\\d+))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'kronos_create_line')), array (  '_controller' => 'Kronos\\UserReportingBundle\\Controller\\UserController::createLineAction',  'inWeek' => NULL,));
            }

            // kronos_edit_line
            if (0 === strpos($pathinfo, '/user/edit-line') && preg_match('#^/user/edit\\-line/(?P<lineId>\\d+)(?:/(?P<inWeek>\\d+))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'kronos_edit_line')), array (  '_controller' => 'Kronos\\UserReportingBundle\\Controller\\UserController::editLineAction',  'inWeek' => NULL,));
            }

            // kronos_delete_line_datas
            if (0 === strpos($pathinfo, '/user/delete-line-datas') && preg_match('#^/user/delete\\-line\\-datas/(?P<lineId>\\d+)(?:/(?P<inWeek>\\d+))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'kronos_delete_line_datas')), array (  '_controller' => 'Kronos\\UserReportingBundle\\Controller\\UserController::deleteLineDatasAction',  'inWeek' => NULL,));
            }

        }

        // kronos_core_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'kronos_core_homepage')), array (  '_controller' => 'Kronos\\CoreBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/admin')) {
            // sonata_admin_redirect
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sonata_admin_redirect');
                }

                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => 'sonata_admin_dashboard',  'permanent' => 'true',  '_route' => 'sonata_admin_redirect',);
            }

            // sonata_admin_dashboard
            if ($pathinfo === '/admin/dashboard') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::dashboardAction',  '_route' => 'sonata_admin_dashboard',);
            }

            if (0 === strpos($pathinfo, '/admin/core')) {
                // sonata_admin_retrieve_form_element
                if ($pathinfo === '/admin/core/get-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:retrieveFormFieldElementAction',  '_route' => 'sonata_admin_retrieve_form_element',);
                }

                // sonata_admin_append_form_element
                if ($pathinfo === '/admin/core/append-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:appendFormFieldElementAction',  '_route' => 'sonata_admin_append_form_element',);
                }

                // sonata_admin_short_object_information
                if (0 === strpos($pathinfo, '/admin/core/get-short-object-description') && preg_match('#^/admin/core/get\\-short\\-object\\-description(?:\\.(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_admin_short_object_information')), array (  '_controller' => 'sonata.admin.controller.admin:getShortObjectDescriptionAction',  '_format' => 'html',));
                }

                // sonata_admin_set_object_field_value
                if ($pathinfo === '/admin/core/set-object-field-value') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:setObjectFieldValueAction',  '_route' => 'sonata_admin_set_object_field_value',);
                }

            }

            // sonata_admin_search
            if ($pathinfo === '/admin/search') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::searchAction',  '_route' => 'sonata_admin_search',);
            }

            if (0 === strpos($pathinfo, '/admin/kronos')) {
                if (0 === strpos($pathinfo, '/admin/kronos/core')) {
                    if (0 === strpos($pathinfo, '/admin/kronos/core/activity')) {
                        // admin_kronos_core_activity_list
                        if ($pathinfo === '/admin/kronos/core/activity/list') {
                            return array (  '_controller' => 'Kronos\\CoreBundle\\Controller\\ActivityAdminController::listAction',  '_sonata_admin' => 'kronos_core.admin.activity',  '_sonata_name' => 'admin_kronos_core_activity_list',  '_route' => 'admin_kronos_core_activity_list',);
                        }

                        // admin_kronos_core_activity_create
                        if ($pathinfo === '/admin/kronos/core/activity/create') {
                            return array (  '_controller' => 'Kronos\\CoreBundle\\Controller\\ActivityAdminController::createAction',  '_sonata_admin' => 'kronos_core.admin.activity',  '_sonata_name' => 'admin_kronos_core_activity_create',  '_route' => 'admin_kronos_core_activity_create',);
                        }

                        // admin_kronos_core_activity_batch
                        if ($pathinfo === '/admin/kronos/core/activity/batch') {
                            return array (  '_controller' => 'Kronos\\CoreBundle\\Controller\\ActivityAdminController::batchAction',  '_sonata_admin' => 'kronos_core.admin.activity',  '_sonata_name' => 'admin_kronos_core_activity_batch',  '_route' => 'admin_kronos_core_activity_batch',);
                        }

                        // admin_kronos_core_activity_edit
                        if (preg_match('#^/admin/kronos/core/activity/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_kronos_core_activity_edit')), array (  '_controller' => 'Kronos\\CoreBundle\\Controller\\ActivityAdminController::editAction',  '_sonata_admin' => 'kronos_core.admin.activity',  '_sonata_name' => 'admin_kronos_core_activity_edit',));
                        }

                        // admin_kronos_core_activity_delete
                        if (preg_match('#^/admin/kronos/core/activity/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_kronos_core_activity_delete')), array (  '_controller' => 'Kronos\\CoreBundle\\Controller\\ActivityAdminController::deleteAction',  '_sonata_admin' => 'kronos_core.admin.activity',  '_sonata_name' => 'admin_kronos_core_activity_delete',));
                        }

                        // admin_kronos_core_activity_show
                        if (preg_match('#^/admin/kronos/core/activity/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_kronos_core_activity_show')), array (  '_controller' => 'Kronos\\CoreBundle\\Controller\\ActivityAdminController::showAction',  '_sonata_admin' => 'kronos_core.admin.activity',  '_sonata_name' => 'admin_kronos_core_activity_show',));
                        }

                        // admin_kronos_core_activity_export
                        if ($pathinfo === '/admin/kronos/core/activity/export') {
                            return array (  '_controller' => 'Kronos\\CoreBundle\\Controller\\ActivityAdminController::exportAction',  '_sonata_admin' => 'kronos_core.admin.activity',  '_sonata_name' => 'admin_kronos_core_activity_export',  '_route' => 'admin_kronos_core_activity_export',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/kronos/core/linetype')) {
                        // admin_kronos_core_linetype_list
                        if ($pathinfo === '/admin/kronos/core/linetype/list') {
                            return array (  '_controller' => 'Kronos\\CoreBundle\\Controller\\LineTypeAdminController::listAction',  '_sonata_admin' => 'kronos_core.admin.line_type',  '_sonata_name' => 'admin_kronos_core_linetype_list',  '_route' => 'admin_kronos_core_linetype_list',);
                        }

                        // admin_kronos_core_linetype_create
                        if ($pathinfo === '/admin/kronos/core/linetype/create') {
                            return array (  '_controller' => 'Kronos\\CoreBundle\\Controller\\LineTypeAdminController::createAction',  '_sonata_admin' => 'kronos_core.admin.line_type',  '_sonata_name' => 'admin_kronos_core_linetype_create',  '_route' => 'admin_kronos_core_linetype_create',);
                        }

                        // admin_kronos_core_linetype_batch
                        if ($pathinfo === '/admin/kronos/core/linetype/batch') {
                            return array (  '_controller' => 'Kronos\\CoreBundle\\Controller\\LineTypeAdminController::batchAction',  '_sonata_admin' => 'kronos_core.admin.line_type',  '_sonata_name' => 'admin_kronos_core_linetype_batch',  '_route' => 'admin_kronos_core_linetype_batch',);
                        }

                        // admin_kronos_core_linetype_edit
                        if (preg_match('#^/admin/kronos/core/linetype/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_kronos_core_linetype_edit')), array (  '_controller' => 'Kronos\\CoreBundle\\Controller\\LineTypeAdminController::editAction',  '_sonata_admin' => 'kronos_core.admin.line_type',  '_sonata_name' => 'admin_kronos_core_linetype_edit',));
                        }

                        // admin_kronos_core_linetype_delete
                        if (preg_match('#^/admin/kronos/core/linetype/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_kronos_core_linetype_delete')), array (  '_controller' => 'Kronos\\CoreBundle\\Controller\\LineTypeAdminController::deleteAction',  '_sonata_admin' => 'kronos_core.admin.line_type',  '_sonata_name' => 'admin_kronos_core_linetype_delete',));
                        }

                        // admin_kronos_core_linetype_show
                        if (preg_match('#^/admin/kronos/core/linetype/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_kronos_core_linetype_show')), array (  '_controller' => 'Kronos\\CoreBundle\\Controller\\LineTypeAdminController::showAction',  '_sonata_admin' => 'kronos_core.admin.line_type',  '_sonata_name' => 'admin_kronos_core_linetype_show',));
                        }

                        // admin_kronos_core_linetype_export
                        if ($pathinfo === '/admin/kronos/core/linetype/export') {
                            return array (  '_controller' => 'Kronos\\CoreBundle\\Controller\\LineTypeAdminController::exportAction',  '_sonata_admin' => 'kronos_core.admin.line_type',  '_sonata_name' => 'admin_kronos_core_linetype_export',  '_route' => 'admin_kronos_core_linetype_export',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/kronos/core/project')) {
                        // admin_kronos_core_project_list
                        if ($pathinfo === '/admin/kronos/core/project/list') {
                            return array (  '_controller' => 'Kronos\\CoreBundle\\Controller\\ProjectAdminController::listAction',  '_sonata_admin' => 'kronos_core.admin.project',  '_sonata_name' => 'admin_kronos_core_project_list',  '_route' => 'admin_kronos_core_project_list',);
                        }

                        // admin_kronos_core_project_create
                        if ($pathinfo === '/admin/kronos/core/project/create') {
                            return array (  '_controller' => 'Kronos\\CoreBundle\\Controller\\ProjectAdminController::createAction',  '_sonata_admin' => 'kronos_core.admin.project',  '_sonata_name' => 'admin_kronos_core_project_create',  '_route' => 'admin_kronos_core_project_create',);
                        }

                        // admin_kronos_core_project_batch
                        if ($pathinfo === '/admin/kronos/core/project/batch') {
                            return array (  '_controller' => 'Kronos\\CoreBundle\\Controller\\ProjectAdminController::batchAction',  '_sonata_admin' => 'kronos_core.admin.project',  '_sonata_name' => 'admin_kronos_core_project_batch',  '_route' => 'admin_kronos_core_project_batch',);
                        }

                        // admin_kronos_core_project_edit
                        if (preg_match('#^/admin/kronos/core/project/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_kronos_core_project_edit')), array (  '_controller' => 'Kronos\\CoreBundle\\Controller\\ProjectAdminController::editAction',  '_sonata_admin' => 'kronos_core.admin.project',  '_sonata_name' => 'admin_kronos_core_project_edit',));
                        }

                        // admin_kronos_core_project_delete
                        if (preg_match('#^/admin/kronos/core/project/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_kronos_core_project_delete')), array (  '_controller' => 'Kronos\\CoreBundle\\Controller\\ProjectAdminController::deleteAction',  '_sonata_admin' => 'kronos_core.admin.project',  '_sonata_name' => 'admin_kronos_core_project_delete',));
                        }

                        // admin_kronos_core_project_show
                        if (preg_match('#^/admin/kronos/core/project/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_kronos_core_project_show')), array (  '_controller' => 'Kronos\\CoreBundle\\Controller\\ProjectAdminController::showAction',  '_sonata_admin' => 'kronos_core.admin.project',  '_sonata_name' => 'admin_kronos_core_project_show',));
                        }

                        // admin_kronos_core_project_export
                        if ($pathinfo === '/admin/kronos/core/project/export') {
                            return array (  '_controller' => 'Kronos\\CoreBundle\\Controller\\ProjectAdminController::exportAction',  '_sonata_admin' => 'kronos_core.admin.project',  '_sonata_name' => 'admin_kronos_core_project_export',  '_route' => 'admin_kronos_core_project_export',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/kronos/core/t')) {
                        if (0 === strpos($pathinfo, '/admin/kronos/core/tasktype')) {
                            // admin_kronos_core_tasktype_list
                            if ($pathinfo === '/admin/kronos/core/tasktype/list') {
                                return array (  '_controller' => 'Kronos\\CoreBundle\\Controller\\TaskTypeAdminController::listAction',  '_sonata_admin' => 'kronos_core.admin.task_type',  '_sonata_name' => 'admin_kronos_core_tasktype_list',  '_route' => 'admin_kronos_core_tasktype_list',);
                            }

                            // admin_kronos_core_tasktype_create
                            if ($pathinfo === '/admin/kronos/core/tasktype/create') {
                                return array (  '_controller' => 'Kronos\\CoreBundle\\Controller\\TaskTypeAdminController::createAction',  '_sonata_admin' => 'kronos_core.admin.task_type',  '_sonata_name' => 'admin_kronos_core_tasktype_create',  '_route' => 'admin_kronos_core_tasktype_create',);
                            }

                            // admin_kronos_core_tasktype_batch
                            if ($pathinfo === '/admin/kronos/core/tasktype/batch') {
                                return array (  '_controller' => 'Kronos\\CoreBundle\\Controller\\TaskTypeAdminController::batchAction',  '_sonata_admin' => 'kronos_core.admin.task_type',  '_sonata_name' => 'admin_kronos_core_tasktype_batch',  '_route' => 'admin_kronos_core_tasktype_batch',);
                            }

                            // admin_kronos_core_tasktype_edit
                            if (preg_match('#^/admin/kronos/core/tasktype/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_kronos_core_tasktype_edit')), array (  '_controller' => 'Kronos\\CoreBundle\\Controller\\TaskTypeAdminController::editAction',  '_sonata_admin' => 'kronos_core.admin.task_type',  '_sonata_name' => 'admin_kronos_core_tasktype_edit',));
                            }

                            // admin_kronos_core_tasktype_delete
                            if (preg_match('#^/admin/kronos/core/tasktype/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_kronos_core_tasktype_delete')), array (  '_controller' => 'Kronos\\CoreBundle\\Controller\\TaskTypeAdminController::deleteAction',  '_sonata_admin' => 'kronos_core.admin.task_type',  '_sonata_name' => 'admin_kronos_core_tasktype_delete',));
                            }

                            // admin_kronos_core_tasktype_show
                            if (preg_match('#^/admin/kronos/core/tasktype/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_kronos_core_tasktype_show')), array (  '_controller' => 'Kronos\\CoreBundle\\Controller\\TaskTypeAdminController::showAction',  '_sonata_admin' => 'kronos_core.admin.task_type',  '_sonata_name' => 'admin_kronos_core_tasktype_show',));
                            }

                            // admin_kronos_core_tasktype_export
                            if ($pathinfo === '/admin/kronos/core/tasktype/export') {
                                return array (  '_controller' => 'Kronos\\CoreBundle\\Controller\\TaskTypeAdminController::exportAction',  '_sonata_admin' => 'kronos_core.admin.task_type',  '_sonata_name' => 'admin_kronos_core_tasktype_export',  '_route' => 'admin_kronos_core_tasktype_export',);
                            }

                        }

                        if (0 === strpos($pathinfo, '/admin/kronos/core/team')) {
                            // admin_kronos_core_team_list
                            if ($pathinfo === '/admin/kronos/core/team/list') {
                                return array (  '_controller' => 'Kronos\\CoreBundle\\Controller\\TeamAdminController::listAction',  '_sonata_admin' => 'kronos_core.admin.team',  '_sonata_name' => 'admin_kronos_core_team_list',  '_route' => 'admin_kronos_core_team_list',);
                            }

                            // admin_kronos_core_team_create
                            if ($pathinfo === '/admin/kronos/core/team/create') {
                                return array (  '_controller' => 'Kronos\\CoreBundle\\Controller\\TeamAdminController::createAction',  '_sonata_admin' => 'kronos_core.admin.team',  '_sonata_name' => 'admin_kronos_core_team_create',  '_route' => 'admin_kronos_core_team_create',);
                            }

                            // admin_kronos_core_team_batch
                            if ($pathinfo === '/admin/kronos/core/team/batch') {
                                return array (  '_controller' => 'Kronos\\CoreBundle\\Controller\\TeamAdminController::batchAction',  '_sonata_admin' => 'kronos_core.admin.team',  '_sonata_name' => 'admin_kronos_core_team_batch',  '_route' => 'admin_kronos_core_team_batch',);
                            }

                            // admin_kronos_core_team_edit
                            if (preg_match('#^/admin/kronos/core/team/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_kronos_core_team_edit')), array (  '_controller' => 'Kronos\\CoreBundle\\Controller\\TeamAdminController::editAction',  '_sonata_admin' => 'kronos_core.admin.team',  '_sonata_name' => 'admin_kronos_core_team_edit',));
                            }

                            // admin_kronos_core_team_delete
                            if (preg_match('#^/admin/kronos/core/team/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_kronos_core_team_delete')), array (  '_controller' => 'Kronos\\CoreBundle\\Controller\\TeamAdminController::deleteAction',  '_sonata_admin' => 'kronos_core.admin.team',  '_sonata_name' => 'admin_kronos_core_team_delete',));
                            }

                            // admin_kronos_core_team_show
                            if (preg_match('#^/admin/kronos/core/team/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_kronos_core_team_show')), array (  '_controller' => 'Kronos\\CoreBundle\\Controller\\TeamAdminController::showAction',  '_sonata_admin' => 'kronos_core.admin.team',  '_sonata_name' => 'admin_kronos_core_team_show',));
                            }

                            // admin_kronos_core_team_export
                            if ($pathinfo === '/admin/kronos/core/team/export') {
                                return array (  '_controller' => 'Kronos\\CoreBundle\\Controller\\TeamAdminController::exportAction',  '_sonata_admin' => 'kronos_core.admin.team',  '_sonata_name' => 'admin_kronos_core_team_export',  '_route' => 'admin_kronos_core_team_export',);
                            }

                        }

                    }

                }

                if (0 === strpos($pathinfo, '/admin/kronos/user/user')) {
                    // admin_kronos_user_user_list
                    if ($pathinfo === '/admin/kronos/user/user/list') {
                        return array (  '_controller' => 'Kronos\\UserBundle\\Controller\\UserAdminController::listAction',  '_sonata_admin' => 'kronos_user.admin.user',  '_sonata_name' => 'admin_kronos_user_user_list',  '_route' => 'admin_kronos_user_user_list',);
                    }

                    // admin_kronos_user_user_create
                    if ($pathinfo === '/admin/kronos/user/user/create') {
                        return array (  '_controller' => 'Kronos\\UserBundle\\Controller\\UserAdminController::createAction',  '_sonata_admin' => 'kronos_user.admin.user',  '_sonata_name' => 'admin_kronos_user_user_create',  '_route' => 'admin_kronos_user_user_create',);
                    }

                    // admin_kronos_user_user_batch
                    if ($pathinfo === '/admin/kronos/user/user/batch') {
                        return array (  '_controller' => 'Kronos\\UserBundle\\Controller\\UserAdminController::batchAction',  '_sonata_admin' => 'kronos_user.admin.user',  '_sonata_name' => 'admin_kronos_user_user_batch',  '_route' => 'admin_kronos_user_user_batch',);
                    }

                    // admin_kronos_user_user_edit
                    if (preg_match('#^/admin/kronos/user/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_kronos_user_user_edit')), array (  '_controller' => 'Kronos\\UserBundle\\Controller\\UserAdminController::editAction',  '_sonata_admin' => 'kronos_user.admin.user',  '_sonata_name' => 'admin_kronos_user_user_edit',));
                    }

                    // admin_kronos_user_user_delete
                    if (preg_match('#^/admin/kronos/user/user/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_kronos_user_user_delete')), array (  '_controller' => 'Kronos\\UserBundle\\Controller\\UserAdminController::deleteAction',  '_sonata_admin' => 'kronos_user.admin.user',  '_sonata_name' => 'admin_kronos_user_user_delete',));
                    }

                    // admin_kronos_user_user_show
                    if (preg_match('#^/admin/kronos/user/user/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_kronos_user_user_show')), array (  '_controller' => 'Kronos\\UserBundle\\Controller\\UserAdminController::showAction',  '_sonata_admin' => 'kronos_user.admin.user',  '_sonata_name' => 'admin_kronos_user_user_show',));
                    }

                    // admin_kronos_user_user_export
                    if ($pathinfo === '/admin/kronos/user/user/export') {
                        return array (  '_controller' => 'Kronos\\UserBundle\\Controller\\UserAdminController::exportAction',  '_sonata_admin' => 'kronos_user.admin.user',  '_sonata_name' => 'admin_kronos_user_user_export',  '_route' => 'admin_kronos_user_user_export',);
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
