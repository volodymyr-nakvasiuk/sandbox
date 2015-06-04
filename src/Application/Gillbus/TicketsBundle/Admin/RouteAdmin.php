<?php
/**
 * Created by PhpStorm.
 * User: donnie
 * Date: 25.05.15
 * Time: 14:32
 */

namespace Application\Gillbus\TicketsBundle\Admin;


use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class RouteAdmin extends Admin
{

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('titleEn')
            ->add('url')
            ->add('isDeleted')
            ->add('_action', 'actions', array(
                'actions' => array(
                    'show' => array('template' => 'TicketsBundle:Default:list__action_show.html.twig'),
                ),
            ))
        ;
    }

    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->with('English', array('tab' => true))
                ->add('titleEn')
                ->add('titlePageEn')
                ->add('contentEn', 'textarea', array('attr' => array('class' => 'ckeditor')))
                ->add('descriptionEn')
                ->add('keywordsEn')
            ->end()
            ->end()
            ->tab('Thai')
                ->add('titleTh')
                ->add('titlePageTh')
                ->add('contentTh', 'textarea', array('attr' => array('class' => 'ckeditor')))
                ->add('descriptionTh')
                ->add('keywordsTh')
            ->end()
            ->end()
            ->tab('Russian')
                ->add('titleRu')
                ->add('titlePageRu')
                ->add('contentRu', 'textarea', array('attr' => array('class' => 'ckeditor')))
                ->add('descriptionRu')
                ->add('keywordsRu')
            ->end()
            ->end()
            ->tab('General')
                ->add('url')
                ->add('departPlaceId', null, array('label' => 'Depart place'))
                ->add('arrivePlaceId', null, array('label' => 'Arrive place'))
                ->add('isDeleted')
            ->end()
            ->end()
        ;
    }


    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('titleEn')
            ->add('url')
            ->add('isDeleted')
        ;
    }

    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->with('English')
            ->add('titleEn')
            ->add('titlePageEn')
            ->add('contentEn')
            ->add('descriptionEn')
            ->add('keywordsEn')
            ->end()
            ->end()
            ->tab('Thai')
            ->add('titleTh')
            ->add('titlePageTh')
            ->add('contentTh')
            ->add('descriptionTh')
            ->add('keywordsTh')
            ->end()
            ->end()
            ->tab('Russian')
            ->add('titleRu')
            ->add('titlePageRu')
            ->add('contentRu')
            ->add('descriptionRu')
            ->add('keywordsRu')
            ->end()
            ->end()
            ->tab('General')
            ->add('url')
            ->add('departPlaceId')
            ->add('arrivePlaceId')
            ->add('isDeleted')
            ->end()
            ->end()
        ;
    }

}