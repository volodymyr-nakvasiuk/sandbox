<?php
/**
 * Created by PhpStorm.
 * User: donnie
 * Date: 21.05.15
 * Time: 9:14
 */

namespace Application\Gillbus\TicketsBundle\Admin;

use Application\Gillbus\TicketsBundle\Entity\BlogPost;
use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class BlogPostAdmin extends Admin
{

    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->tab('English')
                ->add('titleEn', 'text', array('required' => true, 'label' => 'Title'))
                ->add('titlePageEn', null, array('label'=>'Page title', 'required' => false))
                ->add('shortContentEn', 'textarea', array('label'=>'Short content', 'required' => false, 'attr' => array('class' => 'ckeditor')))
                ->add('contentEn', 'textarea', array('label'=>'Content', 'required' => false, 'attr' => array('class' => 'ckeditor')))
                ->add('descriptionEn', null, array('label'=>'Meta description', 'required' => false))
                ->add('keywordsEn', 'text', array('label'=>'Meta keywords', 'required' => false))
                ->end()
            ->end()
            ->tab('Thai')
                ->add('titleTh', 'text', array('required' => true, 'label' => 'Title'))
                ->add('titlePageTh', null, array('label'=>'Page title', 'required' => false))
                ->add('shortContentTh', 'textarea', array('label'=>'Short content', 'required' => false, 'attr' => array('class' => 'ckeditor')))
                ->add('contentTh', 'textarea', array('label'=>'Content', 'required' => false, 'attr' => array('class' => 'ckeditor')))
                ->add('descriptionTh', null, array('label'=>'Meta description', 'required' => false))
                ->add('keywordsTh', 'text', array('label'=>'Meta keywords', 'required' => false))
                ->end()
            ->end()
            ->tab('Russian')
                ->add('titleRu', 'text', array('required' => true, 'label' => 'Title'))
                ->add('titlePageRu', null, array('label'=>'Page title', 'required' => false))
                ->add('shortContentRu', 'textarea', array('label'=>'Short content', 'required' => false, 'attr' => array('class' => 'ckeditor')))
                ->add('contentRu', 'textarea', array('label'=>'Content', 'required' => false, 'attr' => array('class' => 'ckeditor')))
                ->add('descriptionRu', null, array('label'=>'Meta description', 'required' => false))
                ->add('keywordsRu', 'text', array('label'=>'Meta keywords', 'required' => false))
                ->end()
            ->end()
            ->tab('General')
                ->add('categoryId','entity', array('label' => 'Category', 'class'=>'Application\Gillbus\TicketsBundle\Entity\BlogCategory', 'property'=>'nameEn', ))
                ->add('imageUrl')
                ->add('publishedAt', 'sonata_type_datetime_picker', array('required' => true, 'label' => 'Publishing date', 'format' => 'dd.MM.y HH:mm:ss'))
                ->add('isDeleted', 'checkbox', array('required' => true))
                ->end()
            ->end()
        ;
    }


    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('titlePageRu', null, array('label'=>'Page title ru'))
            ->add('categoryId', null, array('label'=>'Category'))
            ->add('publishedAt', 'doctrine_orm_datetime_range', array('field_type'=>'sonata_type_datetime_range_picker', 'format' => 'dd.MM.y', 'label' => 'Publishing date'), null, array('format' => 'dd.MM.y'))
            ->add('isDeleted')
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('titlePageRu', null, array('label'=>'Page title ru'))
            ->add('categoryId', null, array('label'=>'Category'))
            ->add('publishedAt', 'doctrine_orm_datetime', array('template' => 'TicketsBundle:Default:list_datetime.html.twig', 'label' => 'Publishing date'))
            ->add('isDeleted')
            ->add('_action', 'actions', array(
                'actions' => array(
                    'show' => array('template' => 'TicketsBundle:Default:list__action_show.html.twig'),
                ),
            ))
        ;
    }

    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->tab('English')
            ->add('titleEn')
            ->add('titlePageEn')
            ->add('shortContentEn')
            ->add('contentEn')
            ->add('descriptionEn')
            ->add('keywordsEn')
            ->end()
            ->end()
            ->tab('Thai')
            ->add('titleTh')
            ->add('titlePageTh')
            ->add('shortContentTh')
            ->add('contentTh')
            ->add('descriptionTh')
            ->add('keywordsTh')
            ->end()
            ->end()
            ->tab('Russian')
            ->add('titleRu')
            ->add('titlePageRu')
            ->add('shortContentRu')
            ->add('contentRu')
            ->add('descriptionRu')
            ->add('keywordsRu')
            ->end()
            ->end()
            ->tab('General')
            ->add('categoryId')
            ->add('imageUrl')
            ->add('publishedAt')
            ->add('isDeleted')
            ->end()
            ->end()
        ;
    }

}