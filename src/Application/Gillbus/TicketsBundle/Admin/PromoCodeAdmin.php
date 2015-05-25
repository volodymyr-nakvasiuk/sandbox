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
            ->addIdentifier('code')
            ->add('beginDate')
            ->add('endDate');
    }

    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('departPlaceId')
            ->add('arrivePlaceId')
            ->add('code')
            ->add('beginDate')
            ->add('endDate')
            ->add('value')
            ->add('discountValue')
            ->add('discountPercent')
            ->add('successEn')
            ->add('successTh')
            ->add('successRu');
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('code')
            ->add('beginDate')
            ->add('departPlaceId')
            ->add('arrivePlaceId')
            ->add('endDate');
    }
}