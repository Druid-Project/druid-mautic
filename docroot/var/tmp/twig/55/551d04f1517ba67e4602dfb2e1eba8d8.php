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

/* @bundles/IntegrationsBundle/Form/Type/IntegrationFeatureSettingsType.php */
class __TwigTemplate_7033e02b01fceea89d24d4c54639ada9 extends Template
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

declare(strict_types=1);

namespace Mautic\\IntegrationsBundle\\Form\\Type;

use Mautic\\IntegrationsBundle\\Exception\\IntegrationNotFoundException;
use Mautic\\IntegrationsBundle\\Integration\\Interfaces\\ConfigFormFeatureSettingsInterface;
use Mautic\\IntegrationsBundle\\Integration\\Interfaces\\ConfigFormSyncInterface;
use Mautic\\IntegrationsBundle\\Integration\\Interfaces\\IntegrationInterface;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

/**
 * @extends AbstractType<mixed>
 */
class IntegrationFeatureSettingsType extends AbstractType
{
    /**
     * @throws IntegrationNotFoundException
     */
    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        \$integrationObject = \$options['integrationObject'];
        if (!\$integrationObject instanceof IntegrationInterface) {
            throw new IntegrationNotFoundException(\"{\$options['integrationObject']} is not recognized\");
        }

        if (\$integrationObject instanceof ConfigFormFeatureSettingsInterface) {
            \$builder->add(
                'integration',
                \$integrationObject->getFeatureSettingsConfigFormName(),
                [
                    'label' => false,
                ]
            );
        }

        if (\$integrationObject instanceof ConfigFormSyncInterface) {
            \$builder->add(
                'sync',
                IntegrationSyncSettingsType::class,
                [
                    'label'             => false,
                    'integrationObject' => \$integrationObject,
                ]
            );
        }
    }

    public function configureOptions(OptionsResolver \$resolver): void
    {
        \$resolver->setRequired(
            [
                'integrationObject',
            ]
        );
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
        return "@bundles/IntegrationsBundle/Form/Type/IntegrationFeatureSettingsType.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Form/Type/IntegrationFeatureSettingsType.php", "/app/docroot/app/bundles/IntegrationsBundle/Form/Type/IntegrationFeatureSettingsType.php");
    }
}
