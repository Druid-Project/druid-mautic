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

/* @bundles/IntegrationsBundle/Tests/Unit/Form/Type/IntegrationSyncSettingsObjectFieldTypeTest.php */
class __TwigTemplate_cc0bd8db2ea506eb4df2570f14f028ea extends Template
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

namespace Mautic\\IntegrationsBundle\\Tests\\Unit\\Form\\Type;

use Mautic\\IntegrationsBundle\\Exception\\InvalidFormOptionException;
use Mautic\\IntegrationsBundle\\Form\\Type\\IntegrationSyncSettingsObjectFieldType;
use Mautic\\IntegrationsBundle\\Mapping\\MappedFieldInfoInterface;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Mapping\\ObjectMappingDAO;
use PHPUnit\\Framework\\MockObject\\MockObject;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType;
use Symfony\\Component\\Form\\FormBuilderInterface;

final class IntegrationSyncSettingsObjectFieldTypeTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @var MockObject|FormBuilderInterface
     */
    private MockObject \$formBuilder;

    private IntegrationSyncSettingsObjectFieldType \$form;

    protected function setUp(): void
    {
        parent::setUp();

        \$this->formBuilder = \$this->createMock(FormBuilderInterface::class);
        \$this->form        = new IntegrationSyncSettingsObjectFieldType();
    }

    public function testBuildFormForWrongField(): void
    {
        \$options = ['field' => 'unicorn'];
        \$this->expectException(InvalidFormOptionException::class);
        \$this->form->buildForm(\$this->formBuilder, \$options);
    }

    public function testBuildFormForMappedField(): void
    {
        \$field   = \$this->createMock(MappedFieldInfoInterface::class);
        \$options = [
            'field'        => \$field,
            'placeholder'  => 'Placeholder ABC',
            'object'       => 'Object A',
            'integration'  => 'Integration A',
            'mauticFields' => [
                'mautic_field_a' => 'Mautic Field A',
                'mautic_field_b' => 'Mautic Field B',
            ],
        ];

        \$field->method('showAsRequired')->willReturn(true);
        \$field->method('getName')->willReturn('Integration Field A');
        \$field->method('isBidirectionalSyncEnabled')->willReturn(false);
        \$field->method('isToIntegrationSyncEnabled')->willReturn(true);
        \$field->method('isToMauticSyncEnabled')->willReturn(true);

        \$this->formBuilder->expects(\$this->exactly(2))
            ->method('add')
            ->withConsecutive(
                [
                    'mappedField',
                    ChoiceType::class,
                    [
                        'label'          => false,
                        'choices'        => [
                            'Mautic Field A' => 'mautic_field_a',
                            'Mautic Field B' => 'mautic_field_b',
                        ],
                        'required'       => true,
                        'placeholder'    => '',
                        'error_bubbling' => false,
                        'attr'           => [
                            'class'            => 'form-control integration-mapped-field',
                            'data-placeholder' => \$options['placeholder'],
                            'data-object'      => \$options['object'],
                            'data-integration' => \$options['integration'],
                            'data-field'       => 'Integration Field A',
                        ],
                    ],
                ],
                [
                    'syncDirection',
                    ChoiceType::class,
                    [
                        'choices' => [
                            'mautic.integration.sync_direction_integration' => ObjectMappingDAO::SYNC_TO_INTEGRATION,
                            'mautic.integration.sync_direction_mautic'      => ObjectMappingDAO::SYNC_TO_MAUTIC,
                        ],
                        'label'      => false,
                        'empty_data' => ObjectMappingDAO::SYNC_TO_INTEGRATION,
                        'attr'       => [
                            'class'            => 'integration-sync-direction',
                            'data-object'      => 'Object A',
                            'data-integration' => 'Integration A',
                            'data-field'       => 'Integration Field A',
                        ],
                    ],
                ]
            );

        \$this->form->buildForm(\$this->formBuilder, \$options);
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
        return "@bundles/IntegrationsBundle/Tests/Unit/Form/Type/IntegrationSyncSettingsObjectFieldTypeTest.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Tests/Unit/Form/Type/IntegrationSyncSettingsObjectFieldTypeTest.php", "/app/docroot/app/bundles/IntegrationsBundle/Tests/Unit/Form/Type/IntegrationSyncSettingsObjectFieldTypeTest.php");
    }
}
