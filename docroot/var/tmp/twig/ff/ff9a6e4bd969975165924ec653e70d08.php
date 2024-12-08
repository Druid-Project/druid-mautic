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

/* @bundles/LeadBundle/Tests/Controller/FieldControllerTest.php */
class __TwigTemplate_14e3511ce52ca30ce996aa548673a6f9 extends Template
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

namespace Mautic\\LeadBundle\\Tests\\Controller;

use Mautic\\CoreBundle\\Test\\MauticMysqlTestCase;
use Mautic\\LeadBundle\\Entity\\LeadField;
use Symfony\\Component\\HttpFoundation\\Request;

class FieldControllerTest extends MauticMysqlTestCase
{
    protected \$useCleanupRollback = false;

    public function testLengthValidationOnLabelFieldWhenAddingCustomFieldFailure(): void
    {
        \$crawler = \$this->client->request(Request::METHOD_GET, '/s/contacts/fields/new');

        \$form  = \$crawler->selectButton('Save & Close')->form();
        \$label = 'The leading Drupal Cloud platform to securely develop, deliver, and run websites, applications, and content. Top-of-the-line hosting options are paired with automated testing and development tools. Documentation is also included for the following components';
        \$form['leadfield[label]']->setValue(\$label);
        \$crawler = \$this->client->submit(\$form);

        \$labelErrorMessage             = trim(\$crawler->filter('#leadfield_label')->nextAll()->text());
        \$maxLengthErrorMessageTemplate = 'Label value cannot be longer than 191 characters';

        \$this->assertEquals(\$maxLengthErrorMessageTemplate, \$labelErrorMessage);
    }

    public function testLengthValidationOnLabelFieldWhenAddingCustomFieldSuccess(): void
    {
        \$crawler = \$this->client->request(Request::METHOD_GET, '/s/contacts/fields/new');

        \$form  = \$crawler->selectButton('Save & Close')->form();
        \$label = 'Test value for custom field 4';
        \$form['leadfield[label]']->setValue(\$label);
        \$crawler = \$this->client->submit(\$form);

        \$field = \$this->em->getRepository(LeadField::class)->findOneBy(['label' => \$label]);
        \$this->assertNotNull(\$field);
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
        return "@bundles/LeadBundle/Tests/Controller/FieldControllerTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Controller/FieldControllerTest.php", "/app/docroot/app/bundles/LeadBundle/Tests/Controller/FieldControllerTest.php");
    }
}
