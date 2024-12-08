<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* @bundles/SmsBundle/Form/Type/SmsType.php */
class __TwigTemplate_50e2b87a86469d28167b3ae7f0af8fcd extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<?php

namespace Mautic\\SmsBundle\\Form\\Type;

use Doctrine\\ORM\\EntityManager;
use Mautic\\CategoryBundle\\Form\\Type\\CategoryListType;
use Mautic\\CoreBundle\\Form\\DataTransformer\\IdToEntityModelTransformer;
use Mautic\\CoreBundle\\Form\\EventListener\\CleanFormSubscriber;
use Mautic\\CoreBundle\\Form\\EventListener\\FormExitSubscriber;
use Mautic\\CoreBundle\\Form\\Type\\FormButtonsType;
use Mautic\\CoreBundle\\Form\\Type\\PublishDownDateType;
use Mautic\\CoreBundle\\Form\\Type\\PublishUpDateType;
use Mautic\\CoreBundle\\Form\\Type\\YesNoButtonGroupType;
use Mautic\\LeadBundle\\Form\\Type\\LeadListType;
use Mautic\\SmsBundle\\Entity\\Sms;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\HiddenType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\LocaleType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TextareaType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

/**
 * @extends AbstractType<Sms>
 */
class SmsType extends AbstractType
{
    public function __construct(
        private EntityManager \$em
    ) {
    }

    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        \$builder->addEventSubscriber(new CleanFormSubscriber(['content' => 'html', 'customHtml' => 'html']));
        \$builder->addEventSubscriber(new FormExitSubscriber('sms.sms', \$options));

        \$builder->add(
            'name',
            TextType::class,
            [
                'label'      => 'mautic.sms.form.internal.name',
                'label_attr' => ['class' => 'control-label'],
                'attr'       => ['class' => 'form-control'],
            ]
        );

        \$builder->add(
            'description',
            TextareaType::class,
            [
                'label'      => 'mautic.sms.form.internal.description',
                'label_attr' => ['class' => 'control-label'],
                'attr'       => ['class' => 'form-control'],
                'required'   => false,
            ]
        );

        \$builder->add(
            'message',
            TextareaType::class,
            [
                'label'      => 'mautic.sms.form.message',
                'label_attr' => ['class' => 'control-label'],
                'attr'       => [
                    'class'                => 'form-control',
                    'data-token-activator' => '{',
                    'data-token-visual'    => 'false',
                    'rows'                 => 6,
                ],
            ]
        );

        \$builder->add('isPublished', YesNoButtonGroupType::class, [
            'label' => 'mautic.core.form.available',
        ]);

        // add lead lists
        \$transformer = new IdToEntityModelTransformer(\$this->em, \\Mautic\\LeadBundle\\Entity\\LeadList::class, 'id', true);
        \$builder->add(
            \$builder->create(
                'lists',
                LeadListType::class,
                [
                    'label'      => 'mautic.email.form.list',
                    'label_attr' => ['class' => 'control-label'],
                    'attr'       => [
                        'class'        => 'form-control',
                    ],
                    'multiple' => true,
                    'expanded' => false,
                    'required' => true,
                ]
            )
                ->addModelTransformer(\$transformer)
        );

        \$builder->add('publishUp', PublishUpDateType::class);
        \$builder->add('publishDown', PublishDownDateType::class);

        // add category
        \$builder->add(
            'category',
            CategoryListType::class,
            [
                'bundle' => 'sms',
            ]
        );

        \$builder->add(
            'language',
            LocaleType::class,
            [
                'label'      => 'mautic.core.language',
                'label_attr' => ['class' => 'control-label'],
                'attr'       => [
                    'class' => 'form-control',
                ],
                'required' => false,
            ]
        );
        \$builder->add('smsType', HiddenType::class);
        \$builder->add('buttons', FormButtonsType::class);

        if (!empty(\$options['update_select'])) {
            \$builder->add(
                'buttons',
                FormButtonsType::class,
                [
                    'apply_text' => false,
                ]
            );
            \$builder->add(
                'updateSelect',
                HiddenType::class,
                [
                    'data'   => \$options['update_select'],
                    'mapped' => false,
                ]
            );
        } else {
            \$builder->add(
                'buttons',
                FormButtonsType::class
            );
        }

        if (!empty(\$options['action'])) {
            \$builder->setAction(\$options['action']);
        }
    }

    public function configureOptions(OptionsResolver \$resolver): void
    {
        \$resolver->setDefaults(
            [
                'data_class' => Sms::class,
            ]
        );

        \$resolver->setDefined(['update_select']);
    }
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/SmsBundle/Form/Type/SmsType.php";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@bundles/SmsBundle/Form/Type/SmsType.php", "/app/docroot/app/bundles/SmsBundle/Form/Type/SmsType.php");
    }
}
