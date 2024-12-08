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

/* @bundles/PageBundle/Form/Type/PointActionUrlHitType.php */
class __TwigTemplate_fc7b026944e09cb3d8dc9315950af5cc extends Template
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

namespace Mautic\\PageBundle\\Form\\Type;

use Mautic\\CoreBundle\\Form\\DataTransformer\\SecondsConversionTransformer;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\HiddenType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\IntegerType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Form\\FormEvent;
use Symfony\\Component\\Form\\FormEvents;
use Symfony\\Component\\Form\\FormInterface;

/**
 * @extends AbstractType<array<mixed>>
 */
class PointActionUrlHitType extends AbstractType
{
    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        \$builder->add('page_url', TextType::class, [
            'label'      => 'mautic.page.point.action.form.page.url',
            'label_attr' => ['class' => 'control-label'],
            'attr'       => [
                'class'       => 'form-control',
                'tooltip'     => 'mautic.page.point.action.form.page.url.descr',
                'placeholder' => 'http://',
            ],
        ]);

        \$builder->add('page_hits', IntegerType::class, [
            'label'      => 'mautic.page.hits',
            'label_attr' => ['class' => 'control-label'],
            'required'   => false,
            'attr'       => [
                'class'   => 'form-control',
                'tooltip' => 'mautic.page.point.action.form.page.hits.descr',
            ],
        ]);

        \$formModifier = function (FormInterface \$form, \$data) use (\$builder): void {
            \$unit = \$data['accumulative_time_unit'] ?? 'H';
            \$form->add('accumulative_time_unit', HiddenType::class, [
                'data' => \$unit,
            ]);

            \$secondsTransformer = new SecondsConversionTransformer(\$unit);
            \$form->add(
                \$builder->create('accumulative_time', TextType::class, [
                    'label'      => 'mautic.page.point.action.form.accumulative.time',
                    'required'   => false,
                    'label_attr' => ['class' => 'control-label'],
                    'attr'       => [
                        'class'   => 'form-control',
                        'tooltip' => 'mautic.page.point.action.form.accumulative.time.descr',
                    ],
                    'auto_initialize' => false,
                ])
                    ->addViewTransformer(\$secondsTransformer)
                    ->getForm()
            );

            \$unit               = \$data['returns_within_unit'] ?? 'H';
            \$secondsTransformer = new SecondsConversionTransformer(\$unit);
            \$form->add('returns_within_unit', HiddenType::class, [
                'data' => \$unit,
            ]);

            \$form->add(
                \$builder->create('returns_within', TextType::class, [
                    'label'      => 'mautic.page.point.action.form.returns.within',
                    'required'   => false,
                    'label_attr' => ['class' => 'control-label'],
                    'attr'       => [
                        'class'   => 'form-control',
                        'tooltip' => 'mautic.page.point.action.form.returns.within.descr',
                        'onBlur'  => 'Mautic.EnablesOption(this.id)',
                    ],
                    'auto_initialize' => false,
                ])
                    ->addViewTransformer(\$secondsTransformer)
                    ->getForm()
            );

            \$unit               = \$data['returns_after_unit'] ?? 'H';
            \$secondsTransformer = new SecondsConversionTransformer(\$unit);
            \$form->add('returns_after_unit', HiddenType::class, [
                'data' => \$unit,
            ]);
            \$form->add(
                \$builder->create('returns_after', TextType::class, [
                    'label'      => 'mautic.page.point.action.form.returns.after',
                    'required'   => false,
                    'label_attr' => ['class' => 'control-label'],
                    'attr'       => [
                        'class'   => 'form-control',
                        'tooltip' => 'mautic.page.point.action.form.returns.after.descr',
                        'onBlur'  => 'Mautic.EnablesOption(this.id)',
                    ],
                    'auto_initialize' => false,
                ])
                    ->addViewTransformer(\$secondsTransformer)
                    ->getForm()
            );
        };

        \$builder->addEventListener(FormEvents::PRE_SET_DATA,
            function (FormEvent \$event) use (\$formModifier): void {
                \$data = \$event->getData();
                \$formModifier(\$event->getForm(), \$data);
            }
        );

        \$builder->addEventListener(FormEvents::PRE_SUBMIT,
            function (FormEvent \$event) use (\$formModifier): void {
                \$data = \$event->getData();
                \$formModifier(\$event->getForm(), \$data);
            }
        );
    }

    public function getBlockPrefix()
    {
        return 'pointaction_urlhit';
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
        return "@bundles/PageBundle/Form/Type/PointActionUrlHitType.php";
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
        return new Source("", "@bundles/PageBundle/Form/Type/PointActionUrlHitType.php", "/app/docroot/app/bundles/PageBundle/Form/Type/PointActionUrlHitType.php");
    }
}
