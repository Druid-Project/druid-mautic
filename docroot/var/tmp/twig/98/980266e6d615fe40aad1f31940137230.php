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

/* @bundles/PointBundle/Form/Type/PointType.php */
class __TwigTemplate_66fc25be54d15af2ff375e82520c2690 extends Template
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
use Mautic\\PointBundle\\Entity\\Point;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\NumberType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TextareaType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

/**
 * @extends AbstractType<Point>
 */
class PointType extends AbstractType
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
            'type',
            ChoiceType::class,
            [
                'choices'           => \$options['pointActions']['choices'],
                'placeholder'       => '',
                'label'             => 'mautic.point.form.type',
                'label_attr'        => ['class' => 'control-label'],
                'attr'              => [
                    'class'    => 'form-control',
                    'onchange' => 'Mautic.getPointActionPropertiesForm(this.value);',
                ],
            ]
        );

        \$builder->add(
            'delta',
            NumberType::class,
            [
                'label'      => 'mautic.point.action.delta',
                'label_attr' => ['class' => 'control-label'],
                'attr'       => [
                    'class'   => 'form-control',
                    'tooltip' => 'mautic.point.action.delta.help',
                ],
                'scale' => 0,
            ]
        );

        \$type = (!empty(\$options['actionType'])) ? \$options['actionType'] : \$options['data']->getType();

        if (\$type && !empty(\$options['pointActions']['actions'][\$type]['formType'])) {
            \$formType   = \$options['pointActions']['actions'][\$type]['formType'];
            \$properties = (\$options['data']) ? \$options['data']->getProperties() : [];
            \$builder->add(
                'properties',
                \$formType,
                [
                    'label' => false,
                    'data'  => \$properties,
                ]
            );
        }

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

        if (!empty(\$options['data']) && \$options['data'] instanceof Point) {
            \$readonly = !\$this->security->hasEntityAccess(
                'point:points:publishown',
                'point:points:publishother',
                \$options['data']->getCreatedBy()
            );

            \$data = \$options['data']->isPublished(false);
        } elseif (!\$this->security->isGranted('point:points:publishown')) {
            \$readonly = true;
            \$data     = false;
        } else {
            \$readonly = false;
            \$data     = true;
        }

        \$builder->add(
            'isPublished',
            YesNoButtonGroupType::class,
            [
                'data' => \$data,
                'attr' => [
                    'readonly' => \$readonly,
                ],
            ]
        );

        \$builder->add(
            'repeatable',
            YesNoButtonGroupType::class,
            [
                'label'     => 'mautic.point.form.repeat',
                'data'      => \$options['data']->getRepeatable() ?: false,
                'attr'      => [
                    'tooltip' => 'mautic.point.form.repeat.help',
                ],
                'yes_label' => 'mautic.point.form.repeat.yes',
                'no_label'  => 'mautic.point.form.repeat.no',
            ]
        );

        \$builder->add('publishUp', PublishUpDateType::class);
        \$builder->add('publishDown', PublishDownDateType::class);

        \$builder->add(
            'category',
            CategoryListType::class,
            [
                'bundle' => 'point',
            ]
        );

        \$builder->add('buttons', FormButtonsType::class);

        if (!empty(\$options['action'])) {
            \$builder->setAction(\$options['action']);
        }
    }

    public function configureOptions(OptionsResolver \$resolver): void
    {
        \$resolver->setDefaults(['data_class' => Point::class]);
        \$resolver->setRequired(['pointActions']);
        \$resolver->setDefined(['actionType']);
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
        return "@bundles/PointBundle/Form/Type/PointType.php";
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
        return new Source("", "@bundles/PointBundle/Form/Type/PointType.php", "/app/docroot/app/bundles/PointBundle/Form/Type/PointType.php");
    }
}
