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

/* @bundles/PluginBundle/Form/Type/IntegrationConfigType.php */
class __TwigTemplate_5094e68e1cc462ddb01642189eb31001 extends Template
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

namespace Mautic\\PluginBundle\\Form\\Type;

use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

/**
 * @extends AbstractType<array<mixed>|mixed>
 */
class IntegrationConfigType extends AbstractType
{
    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        if (null != \$options['integration']) {
            \$options['integration']->appendToForm(\$builder, \$options['data'], 'integration');
        }

        if (!empty(\$options['campaigns'])) {
            \$builder->add(
                'campaigns',
                ChoiceType::class,
                [
                    'choices' => array_flip(\$options['campaigns']),
                    'attr'    => [
                        'class' => 'form-control', 'onchange' => 'Mautic.getIntegrationCampaignStatus(this);', ],
                    'label'             => 'mautic.plugin.integration.campaigns',
                    'placeholder'       => 'mautic.plugin.config.campaign.member.chooseone',
                    'required'          => false,
                ]
            );
        }
    }

    public function configureOptions(OptionsResolver \$resolver): void
    {
        \$resolver->setRequired(['integration']);
        \$resolver->setDefaults([
            'label'     => false,
            'campaigns' => [],
        ]);
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
        return "@bundles/PluginBundle/Form/Type/IntegrationConfigType.php";
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
        return new Source("", "@bundles/PluginBundle/Form/Type/IntegrationConfigType.php", "/app/docroot/app/bundles/PluginBundle/Form/Type/IntegrationConfigType.php");
    }
}
