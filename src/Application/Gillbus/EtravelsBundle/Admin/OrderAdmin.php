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
            ->add('sduser', 'doctrine_orm_callback', array(
                'label' => 'Has sd_user',
                'callback' => array($this, 'getSdUserFilter'),
                'field_type' => 'choice',
                'field_options' => array(
                    'choices'=>array('null' => 'sd_user is set', 'not_null' => 'sd_user is not set'),
                    'required' => false,
                    'multiple' => false,
                    'attr' => array('size' => 7),
                ),
            ));
    }

    public function getSdUserFilter($queryBuilder, $alias, $field, $value)
    {

        if (!$value['value']) {
            return;
        }
        if($value['value'] == 'null'){
            $queryBuilder->select()
                ->leftJoin($alias.'.sduser', 'p')
                ->where('p.user != 1');
        }
        else {
            $queryBuilder->select()
                ->leftJoin($alias.'.sduser', 'p')
                ->where('p.user IS NULL');
        }

        return true;
    }


    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('dateCreate', null, array('label'=>'date create'))
            ->add('orderNumber', null, array('label'=>'order number'))
            ->add('isBooking', null, array('label'=>'is booking'))
            ->add('orderAmount', null, array('label'=>'order amount'))
            ->add('status', null, array('label'=>'status'))
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
