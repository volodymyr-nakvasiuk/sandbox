<?php

namespace Application\Gillbus\EtravelsPagesBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class EtravelsPagesAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('url', null, array('label'=>'url'))
            ->add('isDeleted', null, array('label'=>'is deleted'))
            ->add('type', null, array('label'=>'form type'))
            ->add('titleRu', null, array('label'=>'title'))
        ;
    }




    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
        //    ->add('id', null, array('label'=>'Id'))
            ->add('url', null, array('label'=>'url'))
            ->add('isDeleted', null, array('label'=>'is deleted'))
            ->add('type', null, array('label'=>'form type'))
            ->add('titleRu', null, array('label'=>'title RU'))
/*            ->add('descriptionRu', null, array('label'=>'descriptionRu'))
            ->add('keywordsRu', null, array('label'=>'keywordsRu'))
            ->add('visibleTextRu', null, array('label'=>'visibleTextRu'))
            ->add('hiddenTextRu', null, array('label'=>'hiddenTextRu'))
            ->add('titleEn', null, array('label'=>'titleEn'))
            ->add('descriptionEn', null, array('label'=>'descriptionEn'))
            ->add('keywordsEn', null, array('label'=>'keywordsEn'))
            ->add('visibleTextEn', null, array('label'=>'visibleTextEn'))
            ->add('hiddenTextEn', null, array('label'=>'hiddenTextEn'))
            ->add('titleUa', null, array('label'=>'titleUa'))
            ->add('descriptionUa', null, array('label'=>'descriptionUa'))
            ->add('keywordsUa;', null, array('label'=>'keywordsUa;'))
            ->add('visibleTextUa', null, array('label'=>'visibleTextUa'))
            ->add('hiddenTextUa', null, array('label'=>'hiddenTextUa'))
            ->add('searchCityFrom', null, array('label'=>'searchCityFrom'))
            ->add('searchCityTo', null, array('label'=>'searchCityTo'))*/
           ->add('_action', 'actions', array(
                'actions' => array(
                    'show' => array('template' => 'EtravelsPagesBundle:Default:list__action_show.html.twig')
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
            ->add('url', null, array('label'=>'url'))
            ->add('isDeleted', null, array('label'=>'is deleted'))
            ->add('hasBenefits', null, array('label'=>'has benefits'))
            ->add('type', null, array('label'=>'form type'))
            ->add('titleRu', null, array('label'=>'title RU'))
            ->add('descriptionRu', null, array('label'=>'description RU'))
            ->add('keywordsRu', null, array('label'=>'keywords RU'))
            ->add('visibleTextRu', null, array('label'=>'visible text RU'))
            ->add('hiddenTextRu', null, array('label'=>'hidden text RU'))
            ->add('titleEn', null, array('label'=>'title EN'))
            ->add('descriptionEn', null, array('label'=>'description EN'))
            ->add('keywordsEn', null, array('label'=>'keywords EN'))
            ->add('visibleTextEn', null, array('label'=>'visible text EN'))
            ->add('hiddenTextEn', null, array('label'=>'hidden text EN'))
            ->add('titleUa', null, array('label'=>'title UA'))
            ->add('descriptionUa', null, array('label'=>'description UA'))
            ->add('keywordsUa;', null, array('label'=>'keywords UA'))
            ->add('visibleTextUa', null, array('label'=>'visible text UA'))
            ->add('hiddenTextUa', null, array('label'=>'hidden text UA'))
            ->add('searchCityFrom', null, array('label'=>'search city from'))
            ->add('searchCityTo', null, array('label'=>'search city to'))
        ;
    }

    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->tab('Russian')
            ->add('titleRu', 'text', array('required' => true, 'label' => 'page title'))
            ->add('url', 'text', array('required' => true, 'label' => 'url'))
            ->add('descriptionRu', null, array('label'=>'meta description', 'required' => false))
            ->add('keywordsRu', null, array('label'=>'meta keywords', 'required' => false))
            ->add('visibleTextRu', 'textarea', array('label'=>'visible text', 'required' => true, 'attr' => array('class' => 'ckeditor')))
            ->add('hiddenTextRu', 'textarea', array('label'=>'hidden text', 'required' => false, 'attr' => array('class' => 'ckeditor')))
            ->add('searchCityFrom', null, array('label'=>'search city from', 'required' => false,'attr' => array('class' => 'searchCityFrom')))
            ->add('searchCityTo', null, array('label'=>'search city to', 'required' => false, 'attr' => array('class' => 'searchCityTo')))
            ->add('isDeleted', 'checkbox', array('label'=>'is deleted','required' => false))
            ->add('hasBenefits', 'checkbox', array('label'=>'has benefits','required' => false))
            ->add('type', 'choice', array('choices'=>array('bus' => 'bus', 'avia' => 'avia', 'train' => 'train', 'transfer' => 'transfer', 'none' => 'none'), 'label'=>'form type'))
            ->end()
            ->end()
        ;
    }
}
