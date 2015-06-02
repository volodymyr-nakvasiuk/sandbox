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
/*    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('titleRu')
        ;
    }*/
    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('id', null, array('label'=>'Id'))
            ->add('url', null, array('label'=>'Url'))
            ->add('isDeleted', null, array('label'=>'isDeleted'))
            ->add('titleRu', null, array('label'=>'titleRu'))
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
            ->add('hiddenTextUa', null, array('label'=>'hiddenTextUa'))*/
            ->add('searchCityFrom', null, array('label'=>'searchCityFrom'))
            ->add('searchCityTo', null, array('label'=>'searchCityTo'))
  /*          ->add('_action', 'actions', array(
                'actions' => array(
                    'show' => array(),
                    'edit' => array(),
                )
            ))*/
        ;
    }


    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('url')
        ;
    }

    protected function configureFormFields(FormMapper $formMapper)
    {

/*        private $url;
        private $isDeleted;
        private $titleRu;
        private $descriptionRu;
        private $keywordsRu;
        private $visibleTextRu;
        private $hiddenTextRu;
        private $titleEn;
        private $descriptionEn;
        private $keywordsEn;
        private $visibleTextEn;
        private $hiddenTextEn;
        private $titleUa;
        private $descriptionUa;
        private $keywordsUa;
        private $visibleTextUa;
        private $hiddenTextUa;
        private $searchCityFrom;
        private $searchCityTo;*/
        $formMapper
            ->tab('Russian')
            ->add('titleRu', 'text', array('required' => true, 'label' => 'Page title'))
            ->add('url', 'text', array('required' => true, 'label' => 'Url'))
            ->add('descriptionRu', null, array('label'=>'Meta description', 'required' => false))
            ->add('keywordsRu', null, array('label'=>'Meta keywords', 'required' => false))
            ->add('visibleTextRu', 'textarea', array('label'=>'Visible Text', 'required' => true, 'attr' => array('class' => 'ckeditor')))
            ->add('hiddenTextRu', 'textarea', array('label'=>'Hidden Text', 'required' => true, 'attr' => array('class' => 'ckeditor')))
            ->add('searchCityFrom', null, array('label'=>'searchCityFrom', 'required' => false))
            ->add('searchCityTo', null, array('label'=>'searchCityTo', 'required' => false))
            ->add('isDeleted', 'checkbox', array('required' => false))
            ->end()
            ->end()
        ;
    }

/*$formMapper->add('my_property',
'choice',
array('choices' => MyEnitity::get_enum_values('my_property') );*/
}
