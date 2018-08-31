<?php
/**
 * Created by PhpStorm.
 * User: Said
 * Date: 08/08/2018
 * Time: 12:38
 */

namespace Admin;


use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\BlockBundle\Block\BaseBlockService;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class AdminBanqueAssureur extends AbstractAdmin
{
    public $supportsPreviewMode = true;
    protected $searchResultActions = ['edit', 'show'];


    protected function configureFormFields(FormMapper $formMapper)
    {

        //$formMapper->add('assureur');
        $formMapper->add('assureur', ChoiceType::class, array(
            'choices' => array(
                'CONSTRUCTION DECENNALE' => array(
                    'TETRIS' => 'CONSTRUCTION : TETRIS',
                    'RCB SATEC' => 'CONSTRUCTION : RCB SATEC',
                    'SPVIE' => 'CONSTRUCTIONR : SPVIE',
                    'APRIL' => 'CONSTRUCTIONR : April',

                ),
                'OCONSTRUCTION DOMMAGES OUVRAGE' => array(
                    'TETRIS' => 'OCONSTRUCTION DOMMAGES OUVRAGE : TETRIS',
                    'RCB SATEC' => 'OCONSTRUCTION DOMMAGES OUVRAGE : RCB SATEC',
                    'HELVETIA' => 'OCONSTRUCTION DOMMAGES OUVRAGE : HELVETIA',
                    'APRIL' => 'OCONSTRUCTION DOMMAGES OUVRAGE : April',

                ),
                'RESPONSABILITE' =>array(
                    'GENERALI' => 'RESPONSABILITE : GENERALI',
                    'SPVIE' =>'RESPONSABILITE : SPVIE',
                    'NOVELIA' =>'RESPONSABILITE : NOVELIA',
                    'SOLLY AZAR' =>'RESPONSABILITE : SOLLY AZAR',

                ),
                'AUTO' =>array(
                    'GENERALI' =>'AUTO : GENERALI',
                    'SOLLY AZAR' =>'AUTO : SOLLY AZAR',
                    'NOVELIA' => 'AUTO : NOVELIA',
                    'APRIL' => 'AUTO : April',

                ),

                'MOTO'=> array(
                    'SOLLY AZAR' =>'MOTO : SOLLY AZAR',
                    'APRIL' => 'MOTO : APRIL',
                    'LMDM' => 'MOTO : LMDM',
                    'ECA' =>'MOTO : ECA',

                ),

                'HABITATION' =>array(
                    'GENERALI' =>'HABITATION : GENERALI',
                    'APRIL' =>'HABITATION : APRIL',
                    'SOLLY AZAR' => 'HABITATION : SOLLY AZAR',
                    'NOVELIA' => 'HABITATION : NOVELIA',

                ),
                'MULTIRISQUE IMMEUBLE' => array(
                    'GENERALI'=> 'MULTIRISQUE IMMEUBLE : GENERALI',
                    'AXELLIANCE' => 'MULTIRISQUE IMMEUBLE : AXELLIANCE',
                    'SPVIE' =>'MULTIRISQUE IMMEUBLE : SPVIE',
                    'TETRIS' =>'MULTIRISQUE IMMEUBLE : TETRIS',

                ),
                'MULTIRISQUE BUREAUX LOCAUX COMMERCE' => array(
                    'GENERALI' =>'MULTIRISQUE BUREAUX LOCAUX COMMERCE : GENERALI',
                    'AXELLIANCE' => 'MULTIRISQUE BUREAUX LOCAUX COMMERCE : AXELLIANCE',
                    'SPVIE' => 'MULTIRISQUE BUREAUX LOCAUX COMMERCE : SPVIE',
                    'NOVELIA' => 'MULTIRISQUE BUREAUX LOCAUX COMMERCE : NOVELIA',

                ),
                'SANTE TNS' => array(
                    'GENERALI' => 'SANTE TNS : GENERALI',
                    'CIPRES' =>'SANTE TNS : CIPRES',
                    'SPVIE'=> 'SANTE TNS : SPVIE',
                    'NOVELIA'=> 'SANTE TNS : NOVELIA',

                ),

                'SANTE SALARIE ENTREPRISE' =>array(
                    'GENERALI' => 'SANTE SALARIE ENTREPRISE : GENERALI',
                    'CIPRES' => 'SANTE SALARIE ENTREPRISE : CIPRES',
                    'SPVIE'=>'SANTE SALARIE ENTREPRISE : SPVIE',
                    'NOVELIA' => 'SANTE SALARIE ENTREPRISE : NOVELIA',

                ),
                'PRËT' => array(
                    'GENERALI'=> 'PRËT : GENERALI',
                    'SOLLY AZAR' => 'PRËT : SOLLY AZAR',
                    'AXELLIANCE' =>'PRËT : AXELLIANCE',
                    'APRIL' => 'PRËT : APRIL',

                ),

                'PROETCTIONJURIDIQUE' => array(
                    'GROUPAMA' =>'PROETCTION JURIDIQUE : GROUPAMA',
                    'SPVIE' => 'PROETCTION JURIDIQUE : SPVIE',
                    'APRIL' => 'PROETCTION JURIDIQUE : APRIL',
                    'NOVELIA' => 'PROETCTION JURIDIQUE : NOVELIA',

                ),



                'PROETCTION PREVOYANCE' => array(
                    'CIPRES' => 'PROETCTION PREVOYANCE : CIPRES',
                    'SPVIE' => 'PROETCTION PREVOYANCE : SPVIE',
                    'SOLLY AZAR' => 'PROETCTION PREVOYANCE : SOLLY AZAR',
                    'GENERALI' => 'PROETCTION PREVOYANCE : GENERALI',

                ),


            ),
        ));
        $formMapper->add('nature_compte_assureur', ChoiceType::class, array(
            'choices'  => array(
                '' => '',
                'IARD' => 'NATURE ASSURANCE : IARD',
                'SANTE' => 'NATURE ASSURANCE : SANTE ',
                'PREVOYANCE' => 'NATURE ASSURANCE : PREVOYANCE',
                'RETRAITE' => 'NATURE ASSURANCE : RETRAITE',
                'EPARGNE' => 'NATURE ASSURANCE : EPARGNE',
            ),
        ));
        $formMapper->add('titulaire');
        $formMapper->add('banque');
        $formMapper->add('iban');
        $formMapper->add('bic');
        $formMapper->add('dateCreation');
        $formMapper->add('dateUpdate');
        $formMapper->add('dateFin');




    }
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('assureur');
        $datagridMapper->add('nature_compte_assureur');
        $datagridMapper->add('titulaire');
        $datagridMapper->add('iban');
        $datagridMapper->add('bic');
        $datagridMapper->add('dateCreation');
        $datagridMapper->add('dateUpdate');
        $datagridMapper->add('dateFin');

    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('assureur');
        $listMapper->addIdentifier('nature_compte_assureur');
        $listMapper->addIdentifier('titulaire');
        $listMapper->addIdentifier('iban');
        $listMapper->addIdentifier('bic');
        $listMapper->addIdentifier('dateCreation');
        $listMapper->addIdentifier('dateUpdate');
        $listMapper->addIdentifier('dateFin');

    }



}
