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

/* @bundles/LeadBundle/Tests/Field/FieldsWithUniqueIdentifierTest.php */
class __TwigTemplate_ee428c08fa51d1771453fcc21271b65e extends Template
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

use Mautic\\LeadBundle\\Field\\FieldList;
use Mautic\\LeadBundle\\Field\\FieldsWithUniqueIdentifier;
use PHPUnit\\Framework\\Assert;
use PHPUnit\\Framework\\MockObject\\MockObject;
use PHPUnit\\Framework\\TestCase;

class FieldsWithUniqueIdentifierTest extends TestCase
{
    /**
     * @var MockObject|FieldList
     */
    private \$fieldList;

    /**
     * @var FieldsWithUniqueIdentifier
     */
    private \$fieldsWithUniqueIdentifier;

    protected function setUp(): void
    {
        parent::setUp();

        \$this->fieldList                  = \$this->createMock(FieldList::class);
        \$this->fieldsWithUniqueIdentifier = new FieldsWithUniqueIdentifier(\$this->fieldList);
    }

    public function testCacheIsUsed(): void
    {
        \$fields = ['cached fields'];
        \$this->fieldList->expects(\$this->once())
            ->method('getFieldList')
            ->willReturn(\$fields);

        Assert::assertSame(\$fields, \$this->fieldsWithUniqueIdentifier->getFieldsWithUniqueIdentifier(['isPublished' => false]));

        // The cache should be used on subsequent requests and a second call to getFieldList not made
        Assert::assertSame(\$fields, \$this->fieldsWithUniqueIdentifier->getFieldsWithUniqueIdentifier(['isPublished' => false]));
    }

    public function testCacheIsNotUsed(): void
    {
        \$fields = ['cached fields'];
        \$this->fieldList->expects(\$this->exactly(2))
            ->method('getFieldList')
            ->willReturn(\$fields);

        Assert::assertSame(\$fields, \$this->fieldsWithUniqueIdentifier->getLiveFields(['isPublished' => false]));

        // The cache should not be used on subsequent requests
        Assert::assertSame(\$fields, \$this->fieldsWithUniqueIdentifier->getLiveFields(['isPublished' => false]));
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
        return "@bundles/LeadBundle/Tests/Field/FieldsWithUniqueIdentifierTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Field/FieldsWithUniqueIdentifierTest.php", "/app/docroot/app/bundles/LeadBundle/Tests/Field/FieldsWithUniqueIdentifierTest.php");
    }
}
