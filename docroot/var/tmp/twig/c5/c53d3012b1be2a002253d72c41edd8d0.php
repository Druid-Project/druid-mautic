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

/* @bundles/LeadBundle/Tests/Model/FieldModelCustomFieldsFunctionalTest.php */
class __TwigTemplate_678dfd438f4de45b1a18bf2643b5473e extends Template
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

namespace Mautic\\LeadBundle\\Tests\\Model;

use Mautic\\CoreBundle\\Test\\MauticMysqlTestCase;
use Mautic\\LeadBundle\\Entity\\LeadField;
use Mautic\\LeadBundle\\Model\\FieldModel;

final class FieldModelCustomFieldsFunctionalTest extends MauticMysqlTestCase
{
    protected \$useCleanupRollback = false;

    public function testGetLeadFields(): void
    {
        /** @var FieldModel \$fieldModel */
        \$fieldModel = \$this->getContainer()->get('mautic.lead.model.field');
        \$fields     = \$fieldModel->getLeadFields();
        \$expected   = count(FieldModel::\$coreFields);
        \$this->assertGreaterThanOrEqual(\$expected, count(\$fields));
    }

    public function testLeadFieldCustomFields(): void
    {
        /** @var FieldModel \$fieldModel */
        \$fieldModel = \$this->getContainer()->get('mautic.lead.model.field');

        \$fields = \$fieldModel->getLeadFieldCustomFields();
        \$this->assertEmpty(\$fields, 'There are no Custom Fields.');

        // Add field.
        \$leadField = new LeadField();
        \$leadField->setName('Test Field')
            ->setAlias('test_field')
            ->setType('string')
            ->setObject('lead');
        \$fieldModel->saveEntity(\$leadField);

        \$fields = \$fieldModel->getLeadFieldCustomFields();
        \$this->assertEquals(1, count(\$fields));
    }

    public function testGetLeadCustomFieldsSchemaDetails(): void
    {
        /** @var FieldModel \$fieldModel */
        \$fieldModel = \$this->getContainer()->get('mautic.lead.model.field');

        // Add field.
        \$leadField = new LeadField();
        \$leadField->setName('Test Field')
            ->setAlias('test_field')
            ->setType('string')
            ->setObject('lead');
        \$fieldModel->saveEntity(\$leadField);

        \$schemas = \$fieldModel->getLeadFieldCustomFieldSchemaDetails();
        \$this->assertEquals(1, count(\$schemas));
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
        return "@bundles/LeadBundle/Tests/Model/FieldModelCustomFieldsFunctionalTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Model/FieldModelCustomFieldsFunctionalTest.php", "/app/docroot/app/bundles/LeadBundle/Tests/Model/FieldModelCustomFieldsFunctionalTest.php");
    }
}
