<?php
// src/Acme/DemoBundle/Admin/PostAdmin.php

namespace Acme\DemoBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class UserFunctionAdmin extends Admin
{
   // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->with('Employee & Function', array('class' => 'col-md-6'))
            ->add('functionEmployee', 'sonata_type_model_list', array(
                    'label'         => 'Function',
                    'btn_add'       => 'Add Function',      //Specify a custom label
                    'btn_list'      => 'button.list',     //which will be translated
                    'btn_delete'    => false,             //or hide the button.
                   
                ), array(
                    'placeholder' => 'No function selected'
                ))
            ->add('user', 'sonata_type_model_list', array(
                    'label'         => 'Employee',
                    'btn_add'       => 'Add Employee',      //Specify a custom label
                    'btn_list'      => 'button.list',     //which will be translated
                    'btn_delete'    => false,             //or hide the button.
                   
                ), array(
                    'placeholder' => 'No employee selected'
                ))
            ->add('beginDate')
            ->add('endDate')
            ->end()
        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
          
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
         ->add('functionEmployee')
         ->add('user')
         ->add('beginDate') 
         ->add('endDate')
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
            
                
        ;
    }
}