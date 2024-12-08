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

/* @bundles/IntegrationsBundle/Form/Type/IntegrationConfigType.php */
class __TwigTemplate_84e34b65a6510d9ffe188e0e01baec9b extends Template
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

use Mautic\\CoreBundle\\Form\\Type\\FormButtonsType;
use Mautic\\CoreBundle\\Form\\Type\\YesNoButtonGroupType;
use Mautic\\IntegrationsBundle\\Exception\\IntegrationNotFoundException;
use Mautic\\IntegrationsBundle\\Helper\\ConfigIntegrationsHelper;
use Mautic\\IntegrationsBundle\\Integration\\Interfaces\\ConfigFormAuthInterface;
use Mautic\\IntegrationsBundle\\Integration\\Interfaces\\ConfigFormFeaturesInterface;
use Mautic\\PluginBundle\\Entity\\Integration;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

/**
 * @extends AbstractType<Integration>
 */
class IntegrationConfigType extends AbstractType
{
    public function __construct(
        private ConfigIntegrationsHelper \$integrationsHelper
    ) {
    }

    /**
     * @throws IntegrationNotFoundException
     */
    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        \$integrationObject = \$this->integrationsHelper->getIntegration(\$options['integration']);

        // isPublished
        \$builder->add(
            'isPublished',
            YesNoButtonGroupType::class,
            [
                'label'      => 'mautic.integration.enabled',
                'label_attr' => ['class' => 'control-label'],
            ]
        );

        // apiKeys
        if (\$integrationObject instanceof ConfigFormAuthInterface) {
            \$builder->add(
                'apiKeys',
                \$integrationObject->getAuthConfigFormName(),
                [
                    'label'       => false,
                    'integration' => \$integrationObject,
                ]
            );
        }

        // supportedFeatures
        if (\$integrationObject instanceof ConfigFormFeaturesInterface) {
            // @todo add tooltip support
            \$builder->add(
                'supportedFeatures',
                ChoiceType::class,
                [
                    'label'      => 'mautic.integration.features',
                    'label_attr' => ['class' => 'control-label'],
                    'choices'    => array_flip(\$integrationObject->getSupportedFeatures()),
                    'expanded'   => true,
                    'multiple'   => true,
                    'required'   => false,
                ]
            );
        }

        // featureSettings
        \$builder->add(
            'featureSettings',
            IntegrationFeatureSettingsType::class,
            [
                'label'             => false,
                'integrationObject' => \$integrationObject,
            ]
        );

        \$builder->add('buttons', FormButtonsType::class);

        \$builder->setAction(\$options['action']);
    }

    public function configureOptions(OptionsResolver \$resolver): void
    {
        \$resolver->setRequired(
            [
                'integration',
            ]
        );

        \$resolver->setDefined(
            [
                'data_class'  => Integration::class,
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
        return "@bundles/IntegrationsBundle/Form/Type/IntegrationConfigType.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Form/Type/IntegrationConfigType.php", "/app/docroot/app/bundles/IntegrationsBundle/Form/Type/IntegrationConfigType.php");
    }
}
