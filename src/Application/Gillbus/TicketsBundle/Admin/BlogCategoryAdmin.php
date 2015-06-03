<?php
/**
 * Created by PhpStorm.
 * User: donnie
 * Date: 25.05.15
 * Time: 9:06
 */

namespace Application\Gillbus\TicketsBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class BlogCategoryAdmin extends Admin
{

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('nameEn')
            ->add('nameTh')
            ->add('nameRu')
            ->add('sortId', null, array('label' => 'Priority'))
            ->add('isDeleted')
            ->add('_action', 'actions', array(
                'actions' => array(
                    'show' => array('template' => 'TicketsBundle:Default:list__action_show.html.twig')
                )
            ))
        ;
    }

    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->with('General')
                ->add('nameEn')
                ->add('nameTh')
                ->add('nameRu')
                ->add('sortId', 'integer', array('label' => 'Priority'))
                ->add('isDeleted')
            ->end()
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('nameEn')
            ->add('nameTh')
            ->add('nameRu')
            ->add('isDeleted')
        ;
    }

    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('nameEn')
            ->add('nameTh')
            ->add('nameRu')
            ->add('sortId')
            ->add('isDeleted')
        ;
    }

}