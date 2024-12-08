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

/* @bundles/CategoryBundle/Form/Type/CategoryType.php */
class __TwigTemplate_e3224b9a82897e6f556cae5c5b9ed40a extends Template
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

namespace Mautic\\CategoryBundle\\Form\\Type;

use Mautic\\CategoryBundle\\Entity\\Category;
use Mautic\\CoreBundle\\Form\\EventListener\\CleanFormSubscriber;
use Mautic\\CoreBundle\\Form\\EventListener\\FormExitSubscriber;
use Mautic\\CoreBundle\\Form\\Type\\FormButtonsType;
use Mautic\\CoreBundle\\Form\\Type\\YesNoButtonGroupType;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\HiddenType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\HttpFoundation\\Session\\SessionInterface;
use Symfony\\Component\\OptionsResolver\\Options;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

/**
 * @extends AbstractType<Category>
 */
class CategoryType extends AbstractType
{
    public function __construct(
        private SessionInterface \$session
    ) {
    }

    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        \$builder->addEventSubscriber(new CleanFormSubscriber([]));
        \$builder->addEventSubscriber(new FormExitSubscriber('category.category', \$options));

        if (!\$options['data']->getId()) {
            // Do not allow custom bundle
            if (true == \$options['show_bundle_select']) {
                // Create new category from category bundle - let user select the bundle
                \$selected = \$this->session->get('mautic.category.type', 'category');
                \$builder->add(
                    'bundle',
                    CategoryBundlesType::class,
                    [
                        'label'      => 'mautic.core.type',
                        'label_attr' => ['class' => 'control-label'],
                        'attr'       => ['class' => 'form-control'],
                        'required'   => true,
                        'data'       => \$selected,
                    ]
                );
            } else {
                // Create new category directly from another bundle - preset bundle
                \$builder->add(
                    'bundle',
                    HiddenType::class,
                    [
                        'data' => \$options['bundle'],
                    ]
                );
            }
        }

        \$builder->add(
            'title',
            TextType::class,
            [
                'label'      => 'mautic.core.title',
                'label_attr' => ['class' => 'control-label'],
                'attr'       => ['class' => 'form-control'],
            ]
        );

        \$builder->add(
            'description',
            TextType::class,
            [
                'label'      => 'mautic.core.description',
                'label_attr' => ['class' => 'control-label'],
                'attr'       => ['class' => 'form-control'],
                'required'   => false,
            ]
        );

        \$builder->add(
            'alias',
            TextType::class,
            [
                'label'      => 'mautic.core.alias',
                'label_attr' => ['class' => 'control-label'],
                'attr'       => [
                    'class'   => 'form-control',
                    'tooltip' => 'mautic.category.form.alias.help',
                ],
                'required' => false,
            ]
        );

        \$builder->add(
            'color',
            TextType::class,
            [
                'label'      => 'mautic.core.color',
                'label_attr' => ['class' => 'control-label'],
                'attr'       => [
                    'class'       => 'form-control',
                    'data-toggle' => 'color',
                ],
                'required' => false,
            ]
        );

        \$builder->add('isPublished', YesNoButtonGroupType::class, [
            'label' => 'mautic.core.form.available',
        ]);

        \$builder->add(
            'inForm',
            HiddenType::class,
            [
                'mapped' => false,
            ]
        );

        \$builder->add('buttons', FormButtonsType::class);

        if (!empty(\$options['action'])) {
            \$builder->setAction(\$options['action']);
        }
    }

    public function configureOptions(OptionsResolver \$resolver): void
    {
        \$resolver->setDefaults(
            [
                'data_class'         => Category::class,
                'show_bundle_select' => false,
                'bundle'             => function (Options \$options) {
                    if (!\$bundle = \$options['data']->getBundle()) {
                        \$bundle = 'category';
                    }

                    return \$bundle;
                },
            ]
        );
    }

    /**
     * @return string
     */
    public function getBlockPrefix()
    {
        return 'category_form';
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
        return "@bundles/CategoryBundle/Form/Type/CategoryType.php";
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
        return new Source("", "@bundles/CategoryBundle/Form/Type/CategoryType.php", "/app/docroot/app/bundles/CategoryBundle/Form/Type/CategoryType.php");
    }
}
