<?php

namespace Application\Gillbus\EtravelsBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class OrderAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('dateCreate', 'doctrine_orm_datetime_range', array('field_type'=>'sonata_type_datetime_range_picker', 'format' => 'dd.MM.y'), null, array('format' => 'dd.MM.y'))
            ->add('orderNumber')
            ->add('status')
            ->add('sduser', null, array('sortable' => true, 'label' => 'Sd_user'))
        ;
    }
    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
     #       ->add('sdUser', null, array('label'=>'sdUser'))
            ->add('dateCreate', null, array('label'=>'date create'))
    #       ->add('oid', null, array('label'=>'oid'))
            ->add('orderNumber', null, array('label'=>'order number'))
            ->add('isBooking', null, array('label'=>'is booking'))
            ->add('orderAmount', null, array('label'=>'order amount'))
    #        ->add('refererUri', null, array('label'=>'refererUri'))
    #        ->add('resource', null, array('label'=>'resource'))
            ->add('status', null, array('label'=>'status'))

    #       ->add('dateEndReservation', null, array('label'=>'dateEndReservation'))
            ->add('_action', 'actions', array(
                'actions' => array(
                    'show' => array(),
                )
            ))
        ;
    }


    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
        //    ->add('id', null, array('label'=>'ID'))
            ->add('oid', null, array('label'=>'Gillbus id'))
            ->add('orderNumber', null, array('label'=>'order number'))
            ->add('systemNumber', null, array('label'=>'system number'))
            ->add('client', null, array('label'=>'client'))
            ->add('isBooking', null, array('label'=>'is booking'))
            ->add('orderAmount', null, array('label'=>'order amount'))
            ->add('refererUri', null, array('label'=>'referer URI'))
            ->add('resource', null, array('label'=>'resource'))
            ->add('status', null, array('label'=>'status'))
            ->add('dateCreate', null, array('label'=>'date create'))
            ->add('dateEndReservation', null, array('label'=>'date end reservation'))
        ;
    }
}
