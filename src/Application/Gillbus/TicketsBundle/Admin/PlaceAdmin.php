<?php
/**
 * Created by PhpStorm.
 * User: donnie
 * Date: 22.05.15
 * Time: 16:39
 */

namespace Application\Gillbus\TicketsBundle\Admin;


use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class PlaceAdmin extends Admin
{

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('nameEn')
            ->add('gillbusId')
//            ->add('placeTypeId')
            ->add('_action', 'actions', array(
                'actions' => array(
                    'show' => array('template' => 'TicketsBundle:Default:list__action_show.html.twig'),
                ),
            ))
        ;
    }

    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('nameEn', null, array('required' => false))
            ->add('nameTh', null, array('required' => false))
            ->add('nameRu', null, array('required' => false))
            ->add('gillbusId', null, array('required' => false))
            ->add('placeTypeId', 'hidden', array('required' => false, 'data' => 1))
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('nameEn')
            ->add('gillbusId')
//            ->add('placeTypeId')
        ;
    }

    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('nameEn')
            ->add('nameTh')
            ->add('nameRu')
            ->add('gillbusId')
//            ->add('placeTypeId')
        ;
    }

}