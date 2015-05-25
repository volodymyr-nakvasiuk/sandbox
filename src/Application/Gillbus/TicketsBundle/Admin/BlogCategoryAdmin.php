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

class BlogCategoryAdmin extends Admin
{

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('id')
            ->addIdentifier('nameEn')
            ->addIdentifier('nameTh')
            ->addIdentifier('nameRu')
            ->add('sortId')
            ->add('isDeleted')
        ;
    }

    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->with('General', array('tab'=>'true'))
                ->add('parentId')
                ->add('nameEn')
                ->add('nameTh')
                ->add('nameRu')
                ->add('sortId')
                ->add('isDeleted')
            ->end()
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('parentId')
            ->add('isDeleted')
        ;
    }

}