<?php
// src/Acme/DemoBundle/Admin/PostAdmin.php

namespace Acme\DemoBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class BAAdmin extends Admin
{
    protected $formOptions = array(
    'validation_groups' => 'test'
        );
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('nameBA', 'text',array('help'=>'the title of a Business Area must be unique'))
            ->add('createdAt') //if no type is specified, SonataAdminBundle tries to guess it
            
        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('nameBA')
            ->add('createdAt')
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('nameBA')
            ->add('createdAt')
            ->add('_action', 'actions', array('label'=>'action',
                'actions' => array(
                    'view' => array(),
                    'edit' => array(),
                    'delete' => array(),
                )
            ))
        ;
    }
     protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            
                ->add('nameBA')
                ->add('createdAt') 
        ;
    }
}