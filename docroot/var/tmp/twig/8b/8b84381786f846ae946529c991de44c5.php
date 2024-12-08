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

/* @bundles/StageBundle/Form/Type/StageType.php */
class __TwigTemplate_bb4f8cf06f131a0d74a34907f0052170 extends Template
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

namespace Mautic\\StageBundle\\Form\\Type;

use Mautic\\CategoryBundle\\Form\\Type\\CategoryListType;
use Mautic\\CoreBundle\\Form\\EventListener\\CleanFormSubscriber;
use Mautic\\CoreBundle\\Form\\EventListener\\FormExitSubscriber;
use Mautic\\CoreBundle\\Form\\Type\\FormButtonsType;
use Mautic\\CoreBundle\\Form\\Type\\PublishDownDateType;
use Mautic\\CoreBundle\\Form\\Type\\PublishUpDateType;
use Mautic\\CoreBundle\\Form\\Type\\YesNoButtonGroupType;
use Mautic\\CoreBundle\\Security\\Permissions\\CorePermissions;
use Mautic\\StageBundle\\Entity\\Stage;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\NumberType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TextareaType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

/**
 * @extends AbstractType<Stage>
 */
class StageType extends AbstractType
{
    public function __construct(
        private CorePermissions \$security
    ) {
    }

    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        \$builder->addEventSubscriber(new CleanFormSubscriber(['description' => 'html']));
        \$builder->addEventSubscriber(new FormExitSubscriber('stage', \$options));

        \$builder->add('description', TextareaType::class, [
            'label'      => 'mautic.core.description',
            'label_attr' => ['class' => 'control-label'],
            'attr'       => ['class' => 'form-control editor'],
            'required'   => false,
        ]);
        \$builder->add('name', TextType::class, [
            'label'      => 'mautic.core.name',
            'label_attr' => [
                'class' => 'control-label',
            ], 'attr' => [
                'class' => 'form-control',
            ], ]);
        \$builder->add('weight', NumberType::class, [
            'label'      => 'mautic.stage.action.weight',
            'label_attr' => ['class' => 'control-label'],
            'attr'       => [
                'class'   => 'form-control',
                'tooltip' => 'mautic.stage.action.weight.help',
            ],
            'scale'    => 0,
            'required' => false,
        ]);

        if (!empty(\$options['data']) && \$options['data'] instanceof Stage) {
            \$readonly = !\$this->security->hasEntityAccess(
                'stage:stages:publishown',
                'stage:stages:publishother',
                \$options['data']->getCreatedBy()
            );

            \$data = \$options['data']->isPublished(false);
        } elseif (!\$this->security->isGranted('stage:stages:publishown')) {
            \$readonly = true;
            \$data     = false;
        } else {
            \$readonly = false;
            \$data     = true;
        }

        \$builder->add('isPublished', YesNoButtonGroupType::class, [
            'data' => \$data,
            'attr' => [
                'readonly' => \$readonly,
            ],
        ]);

        \$builder->add('publishUp', PublishUpDateType::class);
        \$builder->add('publishDown', PublishDownDateType::class);

        // add category
        \$builder->add(
            'category',
            CategoryListType::class,
            [
                'bundle' => 'stage',
            ]
        );

        \$builder->add('buttons', FormButtonsType::class);

        if (!empty(\$options['action'])) {
            \$builder->setAction(\$options['action']);
        }
    }

    public function configureOptions(OptionsResolver \$resolver): void
    {
        \$resolver->setDefaults([
            'data_class' => Stage::class,
        ]);

        \$resolver->setDefined(['stageActions', 'actionType']);
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
        return "@bundles/StageBundle/Form/Type/StageType.php";
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
        return new Source("", "@bundles/StageBundle/Form/Type/StageType.php", "/app/docroot/app/bundles/StageBundle/Form/Type/StageType.php");
    }
}
