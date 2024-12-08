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

/* @bundles/IntegrationsBundle/Form/Type/IntegrationSyncSettingsObjectFieldType.php */
class __TwigTemplate_4af335a45abfd9c1d63c3e9ae6052d48 extends Template
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

use Mautic\\IntegrationsBundle\\Exception\\InvalidFormOptionException;
use Mautic\\IntegrationsBundle\\Mapping\\MappedFieldInfoInterface;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Mapping\\ObjectMappingDAO;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

/**
 * @extends AbstractType<mixed>
 */
class IntegrationSyncSettingsObjectFieldType extends AbstractType
{
    /**
     * @throws InvalidFormOptionException
     */
    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        \$field = \$options['field'];
        if (!\$field instanceof MappedFieldInfoInterface) {
            throw new InvalidFormOptionException('field must contain an instance of MappedFieldInfoInterface');
        }

        \$builder->add(
            'mappedField',
            ChoiceType::class,
            [
                'label'          => false,
                'choices'        => array_flip(\$options['mauticFields']),
                'required'       => \$field->showAsRequired(),
                'placeholder'    => '',
                'error_bubbling' => false,
                'attr'           => [
                    'class'            => 'form-control integration-mapped-field',
                    'data-placeholder' => \$options['placeholder'],
                    'data-object'      => \$options['object'],
                    'data-integration' => \$options['integration'],
                    'data-field'       => \$field->getName(),
                ],
            ]
        );

        \$choices = [];
        if (\$field->isBidirectionalSyncEnabled()) {
            \$choices['mautic.integration.sync_direction_bidirectional'] = ObjectMappingDAO::SYNC_BIDIRECTIONALLY;
        }
        if (\$field->isToIntegrationSyncEnabled()) {
            \$choices['mautic.integration.sync_direction_integration'] = ObjectMappingDAO::SYNC_TO_INTEGRATION;
        }
        if (\$field->isToMauticSyncEnabled()) {
            \$choices['mautic.integration.sync_direction_mautic'] = ObjectMappingDAO::SYNC_TO_MAUTIC;
        }

        if (empty(\$choices)) {
            throw new InvalidFormOptionException('field \"'.\$field->getName().'\" must allow at least 1 direction for sync');
        }

        \$defaultChoice = \$choices[array_key_first(\$choices)];

        \$builder->add(
            'syncDirection',
            ChoiceType::class,
            [
                'choices'    => \$choices,
                'label'      => false,
                'empty_data' => \$defaultChoice,
                'attr'       => [
                    'class'            => 'integration-sync-direction',
                    'data-object'      => \$options['object'],
                    'data-integration' => \$options['integration'],
                    'data-field'       => \$field->getName(),
                ],
            ]
        );
    }

    public function configureOptions(OptionsResolver \$resolver): void
    {
        \$resolver->setRequired(
            [
                'mauticFields',
                'placeholder',
                'integration',
                'object',
                'field',
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
        return "@bundles/IntegrationsBundle/Form/Type/IntegrationSyncSettingsObjectFieldType.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Form/Type/IntegrationSyncSettingsObjectFieldType.php", "/app/docroot/app/bundles/IntegrationsBundle/Form/Type/IntegrationSyncSettingsObjectFieldType.php");
    }
}
