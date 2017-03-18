<?php

namespace projecto\KikoloBundle\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FloatType;
use Symfony\Component\HttpFoundation\File\File;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class KikoloType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titulo', TextType::class)
            ->add('categoria',  ChoiceType::class,['choices' =>[
			'Automovel e Barcos'=> ['Pesados'=>'Pesados',
			                       'Ligeiros'=>'Ligeiro',
							  ],
	        'Imoveis' =>['Vivendas' =>'Vivenda',
	                     'Apartamento' =>'Apartamento',],

        'Vestuario' =>['Calças' =>'Calças',
        'Vestidos' =>'Vestidos',]
			]
			])
            ->add('descricao', TextareaType::class)
            ->add('upload',  FileType::class)
            ->add('localizacao',  TextType::class)
            ->add('nomeusuario',  TextType::class)
            ->add('email',  EmailType::class)
            ->add('telefone',IntegerType::class)
            ->add('tipoanuncio', ChoiceType::class,['choices' =>[
                'Privado' =>'Privado','Negocio'=>'Negocio']])
            ->add('preco', IntegerType::class)
            ->add('negociavel',CheckboxType::class)
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'projecto\KikoloBundle\Entity\Kikolo'
        ));
    }
}
