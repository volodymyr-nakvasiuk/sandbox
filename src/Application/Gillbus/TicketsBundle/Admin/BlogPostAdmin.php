<?php
/**
 * Created by PhpStorm.
 * User: donnie
 * Date: 21.05.15
 * Time: 9:14
 */

namespace Application\Gillbus\TicketsBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;

class BlogPostAdmin extends Admin
{

    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->with('English', array('tab' => true))
                ->add('titleEn', 'text', array('required' => true, 'label' => 'Title'))
                ->add('titlePageEn', null, array('label'=>'Page title', 'required' => false))
                ->add('shortContentEn', null, array('label'=>'Short content', 'required' => false))
                ->add('contentEn', null, array('label'=>'content', 'required' => false))
                ->add('descriptionEn', null, array('label'=>'Meta description', 'required' => false))
                ->add('keywordsEn', 'text', array('label'=>'Meta keywords', 'required' => false))
                ->end()
            ->end()
            ->tab('Thai')
                ->add('titleTh', 'text', array('required' => true, 'label' => 'Title'))
                ->add('titlePageTh', null, array('label'=>'Page title', 'required' => false))
                ->add('shortContentTh', null, array('label'=>'Short content', 'required' => false))
                ->add('contentTh', null, array('label'=>'content', 'required' => false))
                ->add('descriptionTh', null, array('label'=>'Meta description', 'required' => false))
                ->add('keywordsTh', 'text', array('label'=>'Meta keywords', 'required' => false))
                ->end()
            ->end()
            ->tab('Russian')
                ->add('titleRu', 'text', array('required' => true, 'label' => 'Title'))
                ->add('titlePageRu', null, array('label'=>'Page title', 'required' => false))
                ->add('shortContentRu', null, array('label'=>'Short content', 'required' => false))
                ->add('contentRu', null, array('label'=>'content', 'required' => false))
                ->add('descriptionRu', null, array('label'=>'Meta description', 'required' => false))
                ->add('keywordsRu', 'text', array('label'=>'Meta keywords', 'required' => false))
                ->end()
            ->end()
            ->tab('General')
                ->add('category_id', 'text', array('required' => true, 'label' => 'Category'))
                ->add('imageUrl')
                ->add('publishedAt', 'datetime', array('required' => true, 'label' => 'Publishing date'))
                ->add('is_deleted', 'checkbox', array('required' => true, 'label' => 'Visible'))
                ->end()
            ->end()
        ;
    }


    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('titlePageEn')
            ->add('categoryId')
            ->add('createdAt')
            ->add('publishedAt')
            ->add('isDeleted')
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('titlePageEn')
            ->add('publishedAt')
            ->add('isDeleted')
        ;
    }

}