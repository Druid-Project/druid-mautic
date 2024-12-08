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

/* @bundles/LeadBundle/Tests/Field/DTO/CustomFieldObjectTest.php */
class __TwigTemplate_171fde4302b46c5e93762c8ecc42ff65 extends Template
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

namespace Mautic\\LeadBundle\\Tests\\Field\\DTO;

use Mautic\\LeadBundle\\Entity\\LeadField;
use Mautic\\LeadBundle\\Exception\\InvalidObjectTypeException;
use Mautic\\LeadBundle\\Field\\DTO\\CustomFieldObject;

class CustomFieldObjectTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testLeadObject(): void
    {
        \$leadField = new LeadField();

        \$customFieldObject = new CustomFieldObject(\$leadField);

        \$this->assertSame('leads', \$customFieldObject->getObject());
    }

    public function testCompanyObject(): void
    {
        \$leadField = new LeadField();
        \$leadField->setObject('company');

        \$customFieldObject = new CustomFieldObject(\$leadField);

        \$this->assertSame('companies', \$customFieldObject->getObject());
    }

    public function testInvalidObject(): void
    {
        \$leadField = new LeadField();
        \$leadField->setObject('xxx');

        \$this->expectException(InvalidObjectTypeException::class);
        \$this->expectExceptionMessage('xxx has no associated object');

        new CustomFieldObject(\$leadField);
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
        return "@bundles/LeadBundle/Tests/Field/DTO/CustomFieldObjectTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Field/DTO/CustomFieldObjectTest.php", "/app/docroot/app/bundles/LeadBundle/Tests/Field/DTO/CustomFieldObjectTest.php");
    }
}
