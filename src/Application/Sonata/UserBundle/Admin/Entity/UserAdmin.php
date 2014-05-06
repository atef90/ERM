<?php
namespace Application\Sonata\UserBundle\Admin\Entity;
use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\UserBundle\Model\UserInterface;
use FOS\UserBundle\Model\UserManagerInterface;

use Sonata\UserBundle\Admin\Entity\UserAdmin as BaseUserAdmin;

class UserAdmin extends BaseUserAdmin
{
    
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->with('General', array('class' => 'col-md-6'))
                
                ->add('firstname', 'text', array('required' => true))
                ->add('lastname', 'text', array('required' => true))
                ->add('createdAt','date', array('label'=>'Entered at'))
                ->add('matricule', 'text', array('label'=>'Matricule','required' => true))
                ->add('diploma', 'text', array('label'=>'Diploma','required' => true))
                ->add('specialtyDiploma', 'text', array('label'=>'Speciality of Diploma','required' => true))
                ->add('currentFunction', 'text', array('label'=>'Current Function','required' => true))
                ->add('enabled', null, array('required' => false))
                ->add('BU', 'entity', array('label'=>'BU','class' => 'Acme\DemoBundle\Entity\BU'))
                ->add('Service', 'entity', array('label'=>'Service','class' => 'Acme\DemoBundle\Entity\Service'))
            ->end()
            ->with('Function', array('class' => 'col-md-6'))
        ;    
    }
     protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->with('General')
                ->add('username')
                ->add('email')
            ->end()
            ->with('Groups')
                ->add('groups')
            ->end()
            ->with('Profile')
                ->add('dateOfBirth')
                ->add('firstname')
                ->add('lastname')
                ->add('gender')
                ->add('locale')
            ->end()
           
        ;
    }
      protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('username')
            ->add('firstname')
            ->add('lastname')
            ->add('groups')
            ->add('enabled', null, array('editable' => true))
            ->add('currentFunction',null,array('label'=>'Current function'))
            ->add('_action', 'actions', array('label'=>'action',
                'actions' => array(
                    'view' => array(),
                    'edit' => array(),
                    'delete' => array(),
                )
            ))
        ;

   
    }
       protected function configureDatagridFilters(DatagridMapper $filterMapper)
    {
        $filterMapper
            ->add('firstname')
            ->add('lastname')
            ->add('locked')
            ->add('currentFunction')
            
        ;
    }


}