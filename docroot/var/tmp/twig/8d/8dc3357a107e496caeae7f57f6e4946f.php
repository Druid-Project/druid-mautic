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

/* @bundles/LeadBundle/Tests/Field/CustomFieldIndexTest.php */
class __TwigTemplate_1c1723931454615e6a037bb6f536f151 extends Template
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

namespace Mautic\\LeadBundle\\Tests\\Field;

use Mautic\\CoreBundle\\Doctrine\\Helper\\IndexSchemaHelper;
use Mautic\\LeadBundle\\Entity\\LeadField;
use Mautic\\LeadBundle\\Field\\CustomFieldIndex;
use Mautic\\LeadBundle\\Field\\FieldsWithUniqueIdentifier;
use Monolog\\Logger;

final class CustomFieldIndexTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @var \\PHPUnit\\Framework\\MockObject\\MockObject|IndexSchemaHelper
     */
    private \$indexSchemaHelperMock;

    /**
     * @var \\PHPUnit\\Framework\\MockObject\\MockObject|Logger
     */
    private \$loggerMock;

    /**
     * @var \\PHPUnit\\Framework\\MockObject\\MockObject|FieldsWithUniqueIdentifier
     */
    private \$fieldsWithUniqueIdentifierMock;

    /**
     * @var \\PHPUnit\\Framework\\MockObject\\MockObject|LeadField
     */
    private \$leadFieldMock;

    /**
     * @var CustomFieldIndex
     */
    private \$customFieldIndex;

    protected function setUp(): void
    {
        \$this->indexSchemaHelperMock          = \$this->createMock(IndexSchemaHelper::class);
        \$this->loggerMock                     = \$this->createMock(Logger::class);
        \$this->fieldsWithUniqueIdentifierMock = \$this->createMock(FieldsWithUniqueIdentifier::class);
        \$this->customFieldIndex               = new CustomFieldIndex(\$this->indexSchemaHelperMock, \$this->loggerMock, \$this->fieldsWithUniqueIdentifierMock);
        \$this->leadFieldMock                  = \$this->createMock(LeadField::class);
    }

    /**
     * @dataProvider getHasMatchingUniqueIdentifierIndexProvider
     *
     * Test getting unique identifier if object is lead or company.
     */
    public function testHasMatchingUniqueIdentifierIndex(string \$object, string \$field, string \$fieldKey): void
    {
        \$this->leadFieldMock->expects(\$this->once())
            ->method('getObject')
            ->willReturn(\$object);
        \$this->fieldsWithUniqueIdentifierMock->expects(\$this->once())
            ->method('getLiveFields')
            ->with(['object' => \$object])
            ->willReturn([\$fieldKey => \$field]);
        \$this->indexSchemaHelperMock->expects(\$this->once())
            ->method('hasMatchingUniqueIdentifierIndex')
            ->with(\$this->leadFieldMock, [\$fieldKey])
            ->willReturn(true);
        \$this->customFieldIndex->hasMatchingUniqueIdentifierIndex(\$this->leadFieldMock);
    }

    /**
     * Provides data for testHasMatchingUniqueIdentifierIndex.
     *
     * @return array<mixed>>
     */
    public function getHasMatchingUniqueIdentifierIndexProvider(): array
    {
        return [
            'Lead object'    => ['lead', 'email', 'email_key'],
            'Company object' => ['company', 'company_email', 'company_email_key'],
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
        return "@bundles/LeadBundle/Tests/Field/CustomFieldIndexTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Field/CustomFieldIndexTest.php", "/app/docroot/app/bundles/LeadBundle/Tests/Field/CustomFieldIndexTest.php");
    }
}
