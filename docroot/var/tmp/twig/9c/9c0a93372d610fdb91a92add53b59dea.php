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

/* @bundles/LeadBundle/Tests/EventListener/ReportNormalizeSubscriberTest.php */
class __TwigTemplate_86cab202d2684787aefc238e4275f8a6 extends Template
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

namespace Mautic\\LeadBundle\\Tests\\EventListener;

use Mautic\\CoreBundle\\Test\\MauticMysqlTestCase;
use Mautic\\LeadBundle\\Entity\\LeadField;
use Mautic\\LeadBundle\\EventListener\\ReportNormalizeSubscriber;
use Mautic\\LeadBundle\\Model\\FieldModel;
use Mautic\\ReportBundle\\Entity\\Report;
use Mautic\\ReportBundle\\Event\\ReportDataEvent;

class ReportNormalizeSubscriberTest extends MauticMysqlTestCase
{
    protected \$useCleanupRollback = false;

    /**
     * @dataProvider normalizeData
     *
     * @param array<int, array<string, array<string, array<string, array<int,string>>|string>|string>> \$properties
     */
    public function testOnReportDisplay(string \$value, string \$type, array \$properties, string \$expected): void
    {
        \$fieldModel = static::getContainer()->get('mautic.lead.model.field');
        \\assert(\$fieldModel instanceof FieldModel);
        \$field = new LeadField();
        \$field->setType(\$type);
        \$field->setObject('lead');
        \$field->setAlias('field1');
        \$field->setName(\$field->getAlias());
        \$field->setProperties(\$properties);

        \$fieldModel->saveEntity(\$field);

        \$rows = [
            [
                'field1' => \$value,
            ],
        ];

        \$report = new Report();
        \$report->setColumns(['l.firstname' => 'l.firstname']);
        \$event      = new ReportDataEvent(\$report, \$rows, [], []);
        \$subscriber = new ReportNormalizeSubscriber(\$fieldModel);
        \$subscriber->onReportDisplay(\$event);

        \$this->assertEquals(
            [
                [
                    'field1' => \$expected,
                ],
            ],
            \$event->getData()
        );
    }

    /**
     * @return array<int, array<string, array<string, array<string, array<int,string>>|string>|string>> \$properties
     */
    public function normalizeData(): array
    {
        return [
            // Test for boolean custom field
            [
                'value'      => 'yes',
                'type'       => 'boolean',
                'properties' => [
                    'yes' => 'True',
                    'no'  => 'False',
                ],
                'expected'   => 'True',
            ],

            // Test for select custom field
            [
                'value'      => '2',
                'type'       => 'select',
                'properties' => [
                    'list' => [
                        'list' => [
                            1 => 'Option 1',
                            2 => 'Option 2',
                        ],
                    ],
                ],
                'expected'   => 'Option 2',
            ],

            // Test for multiselect custom field
            [
                'value'      => '1|3',
                'type'       => 'multiselect',
                'properties' => [
                    'list' => [
                        'list' => [
                            1 => 'Option 1',
                            2 => 'Option 2',
                            3 => 'Option 3',
                        ],
                    ],
                ],
                'expected'   => 'Option 1|Option 3',
            ],
        ];
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
        return "@bundles/LeadBundle/Tests/EventListener/ReportNormalizeSubscriberTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/EventListener/ReportNormalizeSubscriberTest.php", "/app/docroot/app/bundles/LeadBundle/Tests/EventListener/ReportNormalizeSubscriberTest.php");
    }
}
