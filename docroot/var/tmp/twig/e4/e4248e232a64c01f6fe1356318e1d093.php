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

/* @bundles/CoreBundle/Form/Type/AbstractFormStandardType.php */
class __TwigTemplate_2ea4f78a0bdfef55bb7986164f24a98b extends Template
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

namespace Mautic\\CoreBundle\\Form\\Type;

use Mautic\\CategoryBundle\\Form\\Type\\CategoryListType;
use Mautic\\CoreBundle\\Form\\EventListener\\CleanFormSubscriber;
use Mautic\\CoreBundle\\Form\\EventListener\\FormExitSubscriber;
use Mautic\\CoreBundle\\Security\\Permissions\\CorePermissions;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\HiddenType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\LocaleType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TextareaType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType;
use Symfony\\Component\\Form\\FormBuilderInterface;

/**
 * @extends AbstractType<mixed>
 */
abstract class AbstractFormStandardType extends AbstractType
{
    /**
     * @var CorePermissions
     */
    protected \$security;

    public function setSecurity(CorePermissions \$security): void
    {
        \$this->security = \$security;
    }

    /**
     * @throws \\Exception
     */
    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        if (!isset(\$options['data'])) {
            throw new \\Exception('\$options[\\'data\\'] must be defined');
        }

        \$masks = ['description' => 'strict_html'];
        if (isset(\$options['clean_masks'])) {
            \$masks = array_merge(\$masks, \$options['clean_masks']);
        }
        \$builder->addEventSubscriber(new CleanFormSubscriber(\$masks));

        if (isset(\$options['model_name']) && method_exists(\$options['data'], 'getCheckedOutBy')) {
            \$builder->addEventSubscriber(new FormExitSubscriber(\$options['model_name'], \$options));
        }

        if (!\$builder->has('name') && method_exists(\$options['data'], 'getName')) {
            \$builder->add(
                'name',
                TextType::class,
                [
                    'label'      => 'mautic.core.name',
                    'label_attr' => ['class' => 'control-label'],
                    'attr'       => ['class' => 'form-control'],
                ]
            );
        }

        if (!\$builder->has('description') && method_exists(\$options['data'], 'getDescription')) {
            \$builder->add(
                'description',
                TextareaType::class,
                [
                    'label'      => 'mautic.core.description',
                    'label_attr' => ['class' => 'control-label'],
                    'attr'       => ['class' => 'form-control editor'],
                    'required'   => false,
                ]
            );
        }

        if (!\$builder->has('category') && method_exists(\$options['data'], 'getCategory')) {
            \$builder->add(
                'category',
                CategoryListType::class,
                [
                    'bundle' => \$options['category_bundle'] ?? 'global',
                ]
            );
        }

        if (!\$builder->has('isPublished') && method_exists(\$options['data'], 'getIsPublished')) {
            \$readonly = false;
            \$data     = \$options['data']->isPublished(false);

            if (\$this->security instanceof CorePermissions && isset(\$options['permission_base'])) {
                if (!empty(\$options['data']) && \$options['data']->getId()) {
                    \$readonly = !\$this->security->hasEntityAccess(
                        \$options['permission_base'].':publishown',
                        \$options['permission_base'].':publishother',
                        \$options['data']->getCreatedBy()
                    );
                } elseif (!\$this->security->isGranted(\$options['permission_base'].':publishown')) {
                    \$readonly = true;
                    \$data     = false;
                } else {
                    \$readonly = false;
                    \$data     = true;
                }
            }

            \$builder->add(
                'isPublished',
                YesNoButtonGroupType::class,
                [
                    'label' => 'mautic.core.form.available',
                    'data'  => \$data,
                    'attr'  => [
                        'readonly' => \$readonly,
                    ],
                ]
            );

            if (!\$builder->has('publishUp') && method_exists(\$options['data'], 'getPublishUp')) {
                \$builderOptions = [
                    'attr' => [
                        'class'       => 'form-control',
                        'data-toggle' => 'datetime',
                        'readonly'    => \$readonly,
                    ],
                ];
                \$builder->add('publishUp', PublishUpDateType::class, \$builderOptions);
                \$builder->add('publishDown', PublishDownDateType::class, \$builderOptions);
            }
        }

        if (!\$builder->has('language') && method_exists(\$options['data'], 'getLanguage')) {
            \$builder->add(
                'language',
                LocaleType::class,
                [
                    'label'      => 'mautic.core.language',
                    'label_attr' => ['class' => 'control-label'],
                    'attr'       => [
                        'class' => 'form-control',
                    ],
                    'required'   => false,
                ]
            );
        }

        \$buttonOptions = \$options['button_options'] ?? [];
        if (!empty(\$options['update_select'])) {
            if (!\$builder->has('buttons')) {
                \$builder->add(
                    'buttons',
                    FormButtonsType::class,
                    array_merge(
                        ['apply_text' => false],
                        \$buttonOptions
                    )
                );
            }

            \$builder->add(
                'updateSelect',
                HiddenType::class,
                array_merge(
                    [
                        'data'   => \$options['update_select'],
                        'mapped' => false,
                    ],
                    \$buttonOptions
                )
            );
        } elseif (!\$builder->has('buttons')) {
            \$builder->add(
                'buttons',
                FormButtonsType::class,
                \$buttonOptions
            );
        }

        if (!empty(\$options['action'])) {
            \$builder->setAction(\$options['action']);
        }
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
        return "@bundles/CoreBundle/Form/Type/AbstractFormStandardType.php";
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
        return new Source("", "@bundles/CoreBundle/Form/Type/AbstractFormStandardType.php", "/app/docroot/app/bundles/CoreBundle/Form/Type/AbstractFormStandardType.php");
    }
}
