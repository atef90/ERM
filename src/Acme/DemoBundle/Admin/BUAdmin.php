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
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('nomBU', 'text')
            ->add('service', 'text')
            ->add('BA', 'entity', array('class' => 'Acme\DemoBundle\Entity\BA'))
            //->add('dateCreation', 'entity', array('class' => 'Acme\DemoBundle\Entity\User'))
            ->add('dateCreation') //if no type is specified, SonataAdminBundle tries to guess it

        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('nomBU')
            ->add('dateCreation')
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('nomBU')
            //->add('slug')
            ->add('dateCreation')
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
            
                ->add('nomBA')
                ->add('dateCreation') 
        ;
    }
}