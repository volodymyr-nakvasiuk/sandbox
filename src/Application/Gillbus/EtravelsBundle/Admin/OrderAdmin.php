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
            ->add('oid')
            ->add('orderNumber')
            ->add('isBooking')
            ->add('refererUri')
            ->add('resource')
            ->add('joinBookBuy')
            ->add('passangers')
            ->add('dateCreate')
            ->add('id')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('oid')
            ->add('orderNumber')
            ->add('isBooking')
            ->add('refererUri')
            ->add('resource')
            ->add('joinBookBuy')
            ->add('passangers')
            ->add('dateCreate')
            ->add('id')
            ->add('_action', 'actions', array(
                'actions' => array(
                    'show' => array(),
                    'edit' => array(),
                    'delete' => array(),
                )
            ))
        ;
    }

    /**
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('oid')
            ->add('orderNumber')
            ->add('isBooking')
            ->add('refererUri')
            ->add('resource')
            ->add('joinBookBuy')
            ->add('passangers')
            ->add('dateCreate')
            ->add('id')
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('oid')
            ->add('orderNumber')
            ->add('isBooking')
            ->add('refererUri')
            ->add('resource')
            ->add('joinBookBuy')
            ->add('passangers')
            ->add('dateCreate')
            ->add('id')
        ;
    }
}
