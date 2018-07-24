<?php
/**
 * Created by PhpStorm.
 * User: Said
 * Date: 19/07/2018
 * Time: 11:05
 */
namespace Admin;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class AdminContrat extends AbstractAdmin
{
    public $supportsPreviewMode = true;
    protected $searchResultActions = ['edit', 'show'];
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('idPersonne');
        $formMapper->add('dateCreation');
        $formMapper->add('dateEffetContrat');
        $formMapper->add('franchise');
        $formMapper->add('statutContrat');
        $formMapper->add('dateEnvoi');
        $formMapper->add('typePaiement');
        $formMapper->add('datePaiement');
        $formMapper->add('dateEcheanceContrat');
        $formMapper->add('assureur');
        $formMapper->add('idProduitCommercial');
        $formMapper->add('idProduitTechnique');
        $formMapper->add('primeTtcAnnuelle');

    }


    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('idPersonne');
        $datagridMapper->add('dateCreation');
        $datagridMapper->add('dateEffetContrat');
        $datagridMapper->add('franchise');
        $datagridMapper->add('statutContrat');
        $datagridMapper->add('dateEnvoi');
        $datagridMapper->add('typePaiement');
        $datagridMapper->add('datePaiement');
        $datagridMapper->add('dateEcheanceContrat');
        $datagridMapper->add('assureur');
        $datagridMapper->add('idProduitCommercial');
        $datagridMapper->add('idProduitTechnique');
        $datagridMapper->add('primeTtcAnnuelle');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('idPersonne');
        $listMapper->addIdentifier('dateEffetContrat');
        $listMapper->addIdentifier('franchise');
        $listMapper->addIdentifier('statutContrat');
        $listMapper->addIdentifier('dateEnvoi');
        $listMapper->addIdentifier('typePaiement');
        $listMapper->addIdentifier('datePaiement');
        $listMapper->addIdentifier('dateEcheanceContrat');
        $listMapper->addIdentifier('assureur');
        $listMapper->addIdentifier('idProduitCommercial');
        $listMapper->addIdentifier('idProduitTechnique');
        $listMapper->addIdentifier('primeTtcAnnuelle');
    }



    public function getExportFields()
    {
        return ['dateEffetContrat', 'franchise','statutContrat','dateEnvoi','typePaiement','datePaiement','dateEcheanceContrat','assureur','idProduitCommercial','idProduitTechnique','primeTtcAnnuelle'];
    }
}