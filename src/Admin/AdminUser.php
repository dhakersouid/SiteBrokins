<?php
/**
 * Created by PhpStorm.
 * User: Dhaker
 * Date: 24/07/2018
 * Time: 11:44
 */

namespace Admin;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Component\Form\Extension\Core\Type\TextType;


class AdminUser extends AbstractAdmin
{
    public $supportsPreviewMode = true;
    protected $searchResultActions = ['edit', 'show'];
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('username');
        $formMapper->add('email');
        $formMapper->add('email');

    }


    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {

        $datagridMapper->add('username');
        $datagridMapper->add('email');
        $datagridMapper->add('role');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('username');
        $listMapper->addIdentifier('email');

    }


}
