<?php
/**
 * Created by PhpStorm.
 * User: donnie
 * Date: 26.05.15
 * Time: 10:07
 */

namespace Application\Gillbus\TicketsBundle\Admin;


use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class PopularTripAdmin extends Admin
{

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('sortId')
            ->add('departPlaceId', null, array('label' => 'Depart place'))
            ->add('arrivePlaceId', null, array('label' => 'Arrive place'))
            ->add('beginDate', 'doctrine_orm_datetime', array('template' => 'TicketsBundle:Default:list_datetime.html.twig'))
            ->add('endDate', 'doctrine_orm_datetime', array('template' => 'TicketsBundle:Default:list_datetime.html.twig'))
            ->add('isDeleted')
            ->add('_action', 'actions', array(
                'actions' => array(
                    'show' => array('template' => 'TicketsBundle:Default:list__action_show.html.twig'),
                    'edit' => array('template' => 'TicketsBundle:Default:list__action_edit.html.twig'),
                    'delete' => array('template' => 'TicketsBundle:Default:list__action_delete.html.twig'),
                ),
                'template' => 'TicketsBundle:Default:list__action.html.twig'
            ));
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('sortId')
            ->add('beginDate', 'doctrine_orm_date_range', array('field_type'=>'sonata_type_date_range_picker', 'format' => 'dd.MM.y'), null, array('format' => 'dd.MM.y'))
            ->add('endDate', 'doctrine_orm_date_range', array('field_type'=>'sonata_type_date_range_picker', 'format' => 'dd.MM.y'), null, array('format' => 'dd.MM.y'))
            ->add('departPlaceId', null, array('label' => 'Depart place'))
            ->add('arrivePlaceId', null, array('label' => 'Arrive place'))
            ->add('isDeleted');
    }

    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->with('Places')
                ->add('departPlaceId', null, array('label' => 'Depart place'))
                ->add('arrivePlaceId', null, array('label' => 'Arrive place'))
            ->end()
            ->with('Dates')
                ->add('beginDate', 'sonata_type_date_picker', array('format' => 'dd.MM.y'))
                ->add('endDate', 'sonata_type_date_picker', array('format' => 'dd.MM.y'))
            ->end()
            ->add('imageUrl')
            ->add('sortId')
            ->add('isDeleted');
    }

    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->with('Places')
            ->add('departPlaceId')
            ->add('arrivePlaceId')
            ->end()
            ->with('Dates')
            ->add('beginDate')
            ->add('endDate')
            ->end()
            ->add('imageUrl')
            ->add('sortId')
            ->add('isDeleted')
        ;
    }

}