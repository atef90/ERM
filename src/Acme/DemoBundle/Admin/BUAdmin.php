<?php
// src/Acme/DemoBundle/Admin/PostAdmin.php

namespace Acme\DemoBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class BUAdmin extends Admin
{   
    protected $formOptions = array(
    'validation_groups' => 'test'
        );
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('nameBU', 'text',array('help'=>'the title of a Business Unit must be unique'))
             ->add('ba', 'sonata_type_model_list', array(
                    'label'         => 'Business Area',
                    'btn_add'       => 'Add BA',      //Specify a custom label
                    'btn_list'      => 'button.list',     //which will be translated
                    'btn_delete'    => false,             //or hide the button.
                   
                ), array(
                    'placeholder' => 'No Business Area selected'
                ))
            ->add('createdAt') //if no type is specified, SonataAdminBundle tries to guess it

        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('nameBU')
            ->add('createdAt')
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
        
            ->addIdentifier('nameBU')
            ->add('ba')
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
                ->add('nameBU')
                ->add('ba')
                ->add('createdAt') 
        ;
    }
}