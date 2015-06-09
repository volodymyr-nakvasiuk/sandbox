<?php

namespace Application\Gillbus\EtravelsBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class SduserAdmin extends Admin
{

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('order_id', null, array('label'=>'order_id'))
           ->add('user', null, array('label'=>'user'))
           ->add('order', null, array('label'=>'order'))

        ;
    }



}
