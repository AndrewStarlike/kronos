<?php

/**
 * Copyright (C) 2014 Orange
 */

namespace Kronos\UserBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class UserAdmin extends Admin {

    private function getRoles($originRoles) {
        $roles = array();
        foreach ($originRoles as $roleParent => $rolesHerit) {
            $roles[$roleParent] = $roleParent;
        }
        return $roles;
    }

    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper) {
        $datagridMapper
                ->add('username')
                ->add('team')
                ->add('first_name')
                ->add('last_name')
                ->add('email')
                ->add('enabled')
                ->add('lastLogin')
                ->add('expiresAt')
                ->add('roles')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper) {
        $listMapper
                ->add('username')
                ->add('team')
                ->add('first_name')
                ->add('last_name')
                ->add('email')
                ->add('enabled')
                ->add('lastLogin')
                ->add('expiresAt')
                ->add('roles')
                ->add('_action', 'actions', array(
                    'actions' => array(
                        'show' => array(),
                        'edit' => array(),
                        'delete' => array(),
                    )
                ))
        ;
    }

    /**
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper) {
        $action = $this->getRoot()->getSubject()->getId() ? 'edit' : 'create';

        $formMapper
                ->add('username')
                ->add('team', 'sonata_type_model_list')
                ->add('first_name')
                ->add('last_name')
                ->add('email')
                //->add('enabled')
                ->add('plainPassword', 'password', array('required' => true, 'label' => 'Password'))
                ->add('roles', 'choice', array('choices' => $this->getRoles($this->getConfigurationPool()->getContainer()->getParameter('security.role_hierarchy.roles')), 'multiple' => true, 'expanded' => false))
        ;

        if ($action == 'edit') {
            $formMapper->remove('plainPassword');
        }
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper) {
        $showMapper
                ->add('username')
                ->add('team')
                ->add('usernameCanonical')
                ->add('email')
                ->add('emailCanonical')
                ->add('enabled')
                ->add('salt')
                ->add('password')
                ->add('lastLogin')
                ->add('locked')
                ->add('expired')
                ->add('expiresAt')
                ->add('confirmationToken')
                ->add('passwordRequestedAt')
                ->add('roles')
                ->add('credentialsExpired')
                ->add('credentialsExpireAt')
                ->add('id')
                ->add('first_name')
                ->add('last_name')
        ;
    }

}
