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

/* @bundles/PageBundle/Form/Type/ConfigType.php */
class __TwigTemplate_aa42f4aff4499419f76ca1c96cfe0213 extends Template
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

use Mautic\\CoreBundle\\Form\\Type\\YesNoButtonGroupType;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TextareaType;
use Symfony\\Component\\Form\\FormBuilderInterface;

/**
 * @extends AbstractType<array<mixed>>
 */
class ConfigType extends AbstractType
{
    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        \$builder->add(
            'cat_in_page_url',
            YesNoButtonGroupType::class,
            [
                'label' => 'mautic.page.config.form.cat.in.url',
                'data'  => (bool) \$options['data']['cat_in_page_url'],
                'attr'  => [
                    'tooltip' => 'mautic.page.config.form.cat.in.url.tooltip',
                ],
            ]
        );

        \$builder->add(
            'google_analytics',
            TextareaType::class,
            [
                'label'      => 'mautic.page.config.form.google.analytics',
                'label_attr' => ['class' => 'control-label'],
                'data'       => htmlspecialchars_decode((string) \$options['data']['google_analytics']),
                'attr'       => [
                    'class'   => 'form-control',
                    'tooltip' => 'mautic.page.config.form.google.analytics.tooltip',
                    'rows'    => 10,
                ],
                'required' => false,
            ]
        );
    }

    public function getBlockPrefix()
    {
        return 'pageconfig';
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
        return "@bundles/PageBundle/Form/Type/ConfigType.php";
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
        return new Source("", "@bundles/PageBundle/Form/Type/ConfigType.php", "/app/docroot/app/bundles/PageBundle/Form/Type/ConfigType.php");
    }
}
