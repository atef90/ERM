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
            //->add('functionEmployee')
            ->add('functionEmployee', 'sonata_type_model',
					    array(
					        'attr'=>array('data-sonata-select2'=>'true')
					    )
					)
            //->add('dateCreation', 'entity', array('class' => 'Acme\DemoBundle\Entity\User'))
            //->add('user') //if no type is specified, SonataAdminBundle tries to guess it
            ->add('user', 'sonata_type_model',
					    array(
					        'attr'=>array('data-sonata-select2'=>'true')
					    )
					)
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
        ;
    }
     protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            
                
        ;
    }
}