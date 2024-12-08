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

/* @bundles/PointBundle/Form/Type/TriggerType.php */
class __TwigTemplate_7bcc2b724b483e5b369bbb6cd515bb6a extends Template
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

namespace Mautic\\PointBundle\\Form\\Type;

use Mautic\\CategoryBundle\\Form\\Type\\CategoryListType;
use Mautic\\CoreBundle\\Form\\EventListener\\CleanFormSubscriber;
use Mautic\\CoreBundle\\Form\\EventListener\\FormExitSubscriber;
use Mautic\\CoreBundle\\Form\\Type\\FormButtonsType;
use Mautic\\CoreBundle\\Form\\Type\\PublishDownDateType;
use Mautic\\CoreBundle\\Form\\Type\\PublishUpDateType;
use Mautic\\CoreBundle\\Form\\Type\\YesNoButtonGroupType;
use Mautic\\CoreBundle\\Security\\Permissions\\CorePermissions;
use Mautic\\PointBundle\\Entity\\Trigger;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\HiddenType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\NumberType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TextareaType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

/**
 * @extends AbstractType<Trigger>
 */
class TriggerType extends AbstractType
{
    public function __construct(
        private CorePermissions \$security
    ) {
    }

    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        \$builder->addEventSubscriber(new CleanFormSubscriber(['description' => 'html']));
        \$builder->addEventSubscriber(new FormExitSubscriber('point', \$options));

        \$builder->add(
            'name',
            TextType::class,
            [
                'label'      => 'mautic.core.name',
                'label_attr' => ['class' => 'control-label'],
                'attr'       => ['class' => 'form-control'],
            ]
        );

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

        \$builder->add(
            'category',
            CategoryListType::class,
            [
                'bundle' => 'point',
            ]
        );

        \$builder->add(
            'points',
            NumberType::class,
            [
                'label'      => 'mautic.point.trigger.form.points',
                'label_attr' => ['class' => 'control-label'],
                'attr'       => [
                    'class'   => 'form-control',
                    'tooltip' => 'mautic.point.trigger.form.points_descr',
                ],
                'required' => false,
            ]
        );

        \$color = \$options['data']->getColor();

        \$builder->add(
            'color',
            TextType::class,
            [
                'label'      => 'mautic.point.trigger.form.color',
                'label_attr' => ['class' => 'control-label'],
                'attr'       => [
                    'class'       => 'form-control',
                    'data-toggle' => 'color',
                    'tooltip'     => 'mautic.point.trigger.form.color_descr',
                ],
                'required'   => false,
                'data'       => (!empty(\$color)) ? \$color : 'a0acb8',
                'empty_data' => 'a0acb8',
            ]
        );

        \$builder->add(
            'group',
            GroupListType::class,
            [
                'attr'       => [
                    'class'   => 'form-control',
                    'tooltip' => 'mautic.point.group.form.group_descr',
                ],
            ]
        );

        \$builder->add(
            'triggerExistingLeads',
            YesNoButtonGroupType::class,
            [
                'label' => 'mautic.point.trigger.form.existingleads',
            ]
        );

        if (!empty(\$options['data']) && \$options['data']->getId()) {
            \$readonly = !\$this->security->isGranted('point:triggers:publish');
            \$data     = \$options['data']->isPublished(false);
        } elseif (!\$this->security->isGranted('point:triggers:publish')) {
            \$readonly = true;
            \$data     = false;
        } else {
            \$readonly = false;
            \$data     = false;
        }

        \$builder->add(
            'isPublished',
            YesNoButtonGroupType::class,
            [
                'data'      => \$data,
                'attr'      => [
                    'readonly' => \$readonly,
                ],
            ]
        );

        \$builder->add('publishUp', PublishUpDateType::class);
        \$builder->add('publishDown', PublishDownDateType::class);

        \$builder->add(
            'sessionId',
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
                'data_class' => Trigger::class,
            ]
        );
    }

    public function getBlockPrefix()
    {
        return 'pointtrigger';
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
        return "@bundles/PointBundle/Form/Type/TriggerType.php";
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
        return new Source("", "@bundles/PointBundle/Form/Type/TriggerType.php", "/app/docroot/app/bundles/PointBundle/Form/Type/TriggerType.php");
    }
}
