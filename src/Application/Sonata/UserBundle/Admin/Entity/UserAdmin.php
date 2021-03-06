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
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
class UserAdmin extends BaseUserAdmin 
{
    
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->with('General', array('class' => 'col-md-6'))
                ->add('username')
                ->add('email')
                ->add('plainPassword', 'text', array(
                    'required' => (!$this->getSubject() || is_null($this->getSubject()->getId()))
                   ))
                ->add('firstname', 'text', array('required' => true))
                //->setHelps(array(
                 //'firstname' => $this->trans('help_post_title')
                 // ))
                ->add('lastname', 'text', array('required' => true))
                ->add('createdAt','date', array('label'=>'Entered at'))
                ->add('matricule', 'text', array('label'=>'Matricule','required' => true))
                ->add('diploma', 'text', array('label'=>'Diploma','required' => true))
                ->add('specialtyDiploma', 'text', array('label'=>'Speciality of Diploma','required' => true))
                ->add('currentFunction', 'entity', array('label'=>'Current Function','class' => 'Acme\DemoBundle\Entity\CurrentFunction'))
                //->add('currentFunction', 'text', array('label'=>'Current Function','required' => true))
                ->add('enabled', null, array('required' => false))
            ->end()
            ->with('BU', array('class' => 'col-md-6'))
              ->add('bu', 'sonata_type_model_list', array(
                    'label'         => 'Business Unit',
                    'btn_add'       => 'Add BU',      //Specify a custom label
                    'btn_list'      => 'button.list',     //which will be translated
                    'btn_delete'    => false,             //or hide the button.
                   
                ), array(
                    'placeholder' => 'No Business Unit selected'
                ))
            ->end()
            ->with('Service', array('class' => 'col-md-6'))
             ->add('service', 'sonata_type_model_list', array(
                    'label'         => 'Service',
                    'btn_add'       => 'Add Service',      //Specify a custom label
                    'btn_list'      => 'button.list',     //which will be translated
                    'btn_delete'    => false,             //or hide the button.
                   
                ), array(
                    'placeholder' => 'No Service selected'
                ))
            ->end()
          

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
            ->add('currentFunction',null,array('label'=>'Current function'))
            ->add('bu',null,array('label'=>'BU'))
            ->add('service',null,array('label'=>'Service','editable' => true))
            ->add('enabled', null, array('editable' => true))
            ->add('_action', 'actions', array('label'=>'action',
                'actions' => array(
                    'view' => array(),
                    'edit' => array(),
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
