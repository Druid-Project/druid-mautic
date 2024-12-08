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

/* @bundles/IntegrationsBundle/Form/Type/IntegrationSyncSettingsType.php */
class __TwigTemplate_29e89da2acfda2fe91d0f0cb04f191bb extends Template
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
use Mautic\\IntegrationsBundle\\Integration\\Interfaces\\ConfigFormSyncInterface;
use Mautic\\IntegrationsBundle\\Integration\\Interfaces\\IntegrationInterface;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

/**
 * @extends AbstractType<mixed>
 */
class IntegrationSyncSettingsType extends AbstractType
{
    /**
     * @throws IntegrationNotFoundException
     */
    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        \$integrationObject = \$options['integrationObject'];
        if (!\$integrationObject instanceof IntegrationInterface || !\$integrationObject instanceof ConfigFormSyncInterface) {
            throw new IntegrationNotFoundException(\"{\$options['integrationObject']} is not recognized\");
        }

        // Build field mapping
        \$objects = \$integrationObject->getSyncConfigObjects();

        \$builder->add(
            'objects',
            ChoiceType::class,
            [
                'choices'     => array_flip(\$objects),
                'expanded'    => true,
                'multiple'    => true,
                'label'       => 'mautic.integration.sync_objects',
                'label_attr'  => ['class' => 'control-label'],
                'placeholder' => [],
                'required'    => false,
            ]
        );

        // @todo
        /*
        \$builder->add(
            'updateBlanks',
            YesNoButtonGroupType::class,
            [
                'label'       => 'mautic.integration.sync.update_blanks',
                'label_attr'  => ['class' => 'control-label'],
                'placeholder' => false,
                'required'    => false,
                'data'        => !empty(\$options['data']['updateBlanks'])
            ]
        );
        */

        \$builder->add(
            'fieldMappings',
            IntegrationSyncSettingsFieldMappingsType::class,
            [
                'label'             => false,
                'integrationObject' => \$integrationObject,
                'objects'           => \$objects,
            ]
        );

        if (\$customSettings = \$integrationObject->getSyncConfigFormName()) {
            \$builder->add(
                'integration',
                \$customSettings,
                [
                    'label' => false,
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
        return "@bundles/IntegrationsBundle/Form/Type/IntegrationSyncSettingsType.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Form/Type/IntegrationSyncSettingsType.php", "/app/docroot/app/bundles/IntegrationsBundle/Form/Type/IntegrationSyncSettingsType.php");
    }
}
