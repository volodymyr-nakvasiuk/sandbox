<?php
/**
 * Created by PhpStorm.
 * User: donnie
 * Date: 25.05.15
 * Time: 16:51
 */

namespace Application\Gillbus\TicketsBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class PromoCodeAdmin extends Admin
{
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('code')
            ->add('departPlaceId', null, array('label' => 'Depart place'))
            ->add('arrivePlaceId', null, array('label' => 'Arrive place'))
            ->add('beginDate', 'date', array('template' => 'TicketsBundle:Default:list_date.html.twig'))
            ->add('endDate', 'date', array('template' => 'TicketsBundle:Default:list_date.html.twig'))
            ->add('_action', 'actions', array(
                'actions' => array(
                    'show' => array('template' => 'TicketsBundle:Default:list__action_show.html.twig'),
                    'edit' => array('template' => 'TicketsBundle:Default:list__action_edit.html.twig'),
                    'delete' => array('template' => 'TicketsBundle:Default:list__action_delete.html.twig'),
                ),
                'template' => 'TicketsBundle:Default:list__action.html.twig'
            ));
    }

    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->with('Promo Code')
                ->add('code')
            ->end()
            ->with('Places')
                ->add('departPlaceId')
                ->add('arrivePlaceId')
            ->end()
            ->with('Dates')
                ->add('beginDate', 'sonata_type_date_picker', array('format' => 'dd.MM.y'))
                ->add('endDate', 'sonata_type_date_picker', array('format' => 'dd.MM.y'))
            ->end()
            ->with('Discount')
                ->add('value')
                ->add('discountValue')
                ->add('discountPercent')
            ->end()
            ->with('Success message')
                ->add('successEn')
                ->add('successTh')
                ->add('successRu')
            ->end();
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('code')
            ->add('departPlaceId', null, array('label' => 'Depart place'))
            ->add('arrivePlaceId', null, array('label' => 'Arrive place'))
            ->add('beginDate', 'doctrine_orm_date_range', array('field_type'=>'sonata_type_date_range_picker', 'format' => 'dd.MM.y'), null, array('format' => 'dd.MM.y'))
            ->add('endDate', 'doctrine_orm_date_range', array('field_type'=>'sonata_type_date_range_picker', 'format' => 'dd.MM.y'), null, array('format' => 'dd.MM.y'));
    }

    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->with('Promo Code')
            ->add('code')
            ->end()
            ->with('Places')
            ->add('departPlaceId')
            ->add('arrivePlaceId')
            ->end()
            ->with('Dates')
            ->add('beginDate')
            ->add('endDate')
            ->end()
            ->with('Discount')
            ->add('value')
            ->add('discountValue')
            ->add('discountPercent')
            ->end()
            ->with('Success message')
            ->add('successEn')
            ->add('successTh')
            ->add('successRu')
            ->end()
        ;
    }
}