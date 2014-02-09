<?php

namespace Cmais\ModelBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class AssetAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('asset_type_id')
            ->add('site_id')
            ->add('user_id')
            ->add('category_id')
            ->add('slug')
            ->add('title')
            ->add('description')
            #->add('display_order')
            ->add('is_active')
            ->add('is_visible')
            ->add('date_start')
            ->add('date_end')
            #->add('created_at')
            #->add('updated_at')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('id')
            ->add('asset_type_id')
            ->add('site_id')
            ->add('user_id')
            ->add('category_id')
            ->add('slug')
            ->add('title')
            ->add('description')
            ->add('display_order')
            ->add('is_active')
            ->add('is_visible')
            ->add('date_start')
            ->add('date_end')
            ->add('created_at')
            ->add('updated_at')
            ->add('_action', 'actions', array(
                'actions' => array(
                    'show' => array(),
                    'edit' => array(),
                    'delete' => array(),
                )
            ))
        ;
    }

    /**
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->with('General')
                #->add('id')
                #->add('asset_type_id', 'sonata_type_model', array(), array(
                #    'placeholder' => 'No author selected'
                #))
                ->add('asset_type_id', 'entity', array('class' => 'Cmais\ModelBundle\Entity\AssetType', 'property' => 'title', 'empty_value' => 'Choose an option'))
                ->add('site_id', 'entity', array('class' => 'Cmais\ModelBundle\Entity\Site', 'property' => 'title', 'empty_value' => 'Choose an option'))
                #->add('user_id', 'sonata_type_model', array('placeholder' => 'No author selected'))
                #->add('user_id')
                ->add('user_id', 'entity', array('class' => 'Cmais\ModelBundle\Entity\User', 'empty_value' => 'Choose an option'))
                #->add('category_id')
                ->add('category_id', 'entity', array('class' => 'Cmais\ModelBundle\Entity\Category', 'property' => 'title', 'empty_value' => 'Choose an option'))
                #->add('slug')
                ->add('title')
                ->add('description')
                #->add('display_order')
            ->with('Options')
                ->add('is_active')
                ->add('is_visible')
                #->add('date_start')
                #->add('date_start', 'date_start', array('required' => false, 'widget' => 'single_text', 'attr' => array('class' => 'datepicker')))
                ->add('date_start', 'dateTimePicker')
            // ... more code
                ->add('date_end', 'dateTimePicker')
                #->add('created_at')
                #->add('updated_at')
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('asset_type_id')
            ->add('site_id')
            ->add('user_id')
            ->add('category_id')
            ->add('slug')
            ->add('title')
            ->add('description')
            #->add('display_order')
            ->add('is_active')
            ->add('is_visible')
            ->add('date_start')
            ->add('date_end')
            #->add('created_at')
            #->add('updated_at')
        ;
    }
}
