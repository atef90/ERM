<?php
// src/Acme/DemoBundle/Admin/PostAdmin.php

namespace Acme\DemoBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class ServiceAdmin extends Admin
{   protected $formOptions = array(
    'validation_groups' => 'test'
        );
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('nameService', 'text',array('help'=>'the title of a Service must be unique'))
            ->add('bu', 'sonata_type_model_list', array(
                    'label'         => 'Business Unit',
                    'btn_add'       => 'Add BU',      //Specify a custom label
                    'btn_list'      => 'button.list',     //which will be translated
                    'btn_delete'    => false,             //or hide the button.
                   
                ), array(
                    'placeholder' => 'No Business Unit selected'
                ))
            //->add('dateCreation', 'entity', array('class' => 'Acme\DemoBundle\Entity\User'))
            ->add('createdAt') //if no type is specified, SonataAdminBundle tries to guess it

        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('nameService')
            ->add('createdAt')
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('nameService')
            ->add('bu')
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
            
                ->add('nameService')
                ->add('createdAt') 
        ;
    }
}