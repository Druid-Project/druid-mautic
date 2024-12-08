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

/* @bundles/IntegrationsBundle/Tests/Unit/Event/MauticSyncFieldsLoadEventTest.php */
class __TwigTemplate_cbfcbee1eda0aadb76c80098ffe759fa extends Template
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

namespace Mautic\\IntegrationsBundle\\Tests\\Unit\\Event;

use Mautic\\IntegrationsBundle\\Event\\MauticSyncFieldsLoadEvent;
use PHPUnit\\Framework\\TestCase;

class MauticSyncFieldsLoadEventTest extends TestCase
{
    public function testWorkflow(): void
    {
        \$objectName = 'object';
        \$fields     = [
            'fieldKey' => 'fieldName',
        ];

        \$newFieldKey   = 'newFieldKey';
        \$newFieldValue = 'newFieldValue';

        \$event = new MauticSyncFieldsLoadEvent(\$objectName, \$fields);
        \$this->assertSame(\$objectName, \$event->getObjectName());
        \$this->assertSame(\$fields, \$event->getFields());
        \$event->addField(\$newFieldKey, \$newFieldValue);
        \$this->assertSame(
            array_merge(\$fields, [\$newFieldKey => \$newFieldValue]),
            \$event->getFields()
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
        return "@bundles/IntegrationsBundle/Tests/Unit/Event/MauticSyncFieldsLoadEventTest.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Tests/Unit/Event/MauticSyncFieldsLoadEventTest.php", "/app/docroot/app/bundles/IntegrationsBundle/Tests/Unit/Event/MauticSyncFieldsLoadEventTest.php");
    }
}
