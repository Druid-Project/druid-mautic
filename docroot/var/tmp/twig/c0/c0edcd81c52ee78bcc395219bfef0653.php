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

/* @bundles/FormBundle/Form/Type/ConfigFormType.php */
class __TwigTemplate_7fda9addb78085442c917f0ef837e4eb extends Template
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

namespace Mautic\\FormBundle\\Form\\Type;

use Mautic\\CoreBundle\\Form\\DataTransformer\\ArrayLinebreakTransformer;
use Mautic\\CoreBundle\\Form\\Type\\YesNoButtonGroupType;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TextareaType;
use Symfony\\Component\\Form\\FormBuilderInterface;

/**
 * @extends AbstractType<mixed>
 */
class ConfigFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        \$arrayLinebreakTransformer = new ArrayLinebreakTransformer();
        \$builder->add(
            \$builder->create(
                'do_not_submit_emails',
                TextareaType::class,
                [
                    'label'      => 'mautic.form.config.form.do_not_submit_email',
                    'label_attr' => ['class' => 'control-label'],
                    'attr'       => [
                        'class'   => 'form-control',
                        'tooltip' => 'mautic.form.config.form.do_not_submit_email.tooltip',
                        'rows'    => 8,
                    ],
                    'required' => false,
                ]
            )->addViewTransformer(\$arrayLinebreakTransformer)
        );

        \$builder->add(
            'form_results_data_sources',
            YesNoButtonGroupType::class,
            [
                'label'      => 'mautic.form.config.form_results_data_sources',
                'label_attr' => ['class' => 'control-label'],
                'attr'       => [
                    'class'   => 'form-control',
                    'tooltip' => 'mautic.form.config.form_results_data_sources.tooltip',
                ],
                'data'       => isset(\$options['data']['form_results_data_sources']) && (bool) \$options['data']['form_results_data_sources'],
            ]
        );

        \$builder->add(
            'successful_submit_action',
            ChoiceType::class,
            [
                'choices'           => [
                    'mautic.form.config.form.successful_submit_action_at_the_top'    => 'top',
                    'mautic.form.config.form.successful_submit_action_at_the_bottom' => 'bottom',
                ],
                'label'             => 'mautic.form.config.form.successful_submit_action',
                'required'          => true,
                'attr'              => [
                    'class'   => 'form-control',
                    'tooltip' => 'mautic.form.config.form.successful_submit_action.tooltip',
                ],
            ]
        );
    }

    public function getBlockPrefix()
    {
        return 'formconfig';
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
        return "@bundles/FormBundle/Form/Type/ConfigFormType.php";
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
        return new Source("", "@bundles/FormBundle/Form/Type/ConfigFormType.php", "/app/docroot/app/bundles/FormBundle/Form/Type/ConfigFormType.php");
    }
}
