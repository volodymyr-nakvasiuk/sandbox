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

class PromoCodeAdmin extends Admin
{
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('code')
            ->add('departPlaceId', null, array('label' => 'Depart place'))
            ->add('arrivePlaceId', null, array('label' => 'Depart place'))
            ->add('beginDate')
            ->add('endDate')
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
                ->add('beginDate', 'datetime')
                ->add('endDate', 'datetime')
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
            ->add('beginDate')
            ->add('endDate');
    }
}