<?php

namespace Application\Gillbus\EtravelsBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class NovaPoshtaAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('dateCreate', 'doctrine_orm_datetime_range', array('field_type'=>'sonata_type_datetime_range_picker', 'format' => 'dd.MM.y'), null, array('format' => 'dd.MM.y'))
            ->add('recipientAddress')
            ->add('statusId')
            ->add('documentNum')
            ->add('endReservation', 'doctrine_orm_datetime_range', array('field_type'=>'sonata_type_datetime_range_picker', 'format' => 'dd.MM.y'), null, array('format' => 'dd.MM.y'))
        ;
    }
    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('dateCreate', null, array('label'=>'Create'))
            ->add('recipientAddress', null, array('label'=>'Address'))
            ->add('statusId', null, array('label'=>'Status'))
            ->add('documentNum', null, array('label'=>'Document'))
            ->add('endReservation', null, array('label'=>'End reservation'))
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
            ->with('Main', array('tabs'=>true))
            ->add('dateCreate')
            ->add('endReservation')
            ->add('deliveryDate')
            ->add('datePickUp')
            ->add('recipientAddress')
            ->add('phone', null, array('label'=>'Phone'))
            ->add('documentNum', null, array('label'=>'Document Number'))
            ->add('orderNumber', null, array('label'=>'Order Number'))
            ->add('orderAmount', null, array('label'=>'Order Amount'))
            ->add('statusId', null, array('label'=>'Status'))
            ->end()
            ->with('Extended', array('tabs'=>true))
            ->add('recipient')
            ->add('documentRef')
            ->end()
        ;
    }
}
