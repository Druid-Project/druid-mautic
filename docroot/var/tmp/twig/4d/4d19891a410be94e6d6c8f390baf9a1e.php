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

/* @bundles/LeadBundle/Tests/Entity/LeadFieldTest.php */
class __TwigTemplate_c30d291467b3739f751340059a060ce0 extends Template
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

namespace Mautic\\LeadBundle\\Tests\\Entity;

use Mautic\\LeadBundle\\Entity\\LeadField;

class LeadFieldTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testNewEntity(): void
    {
        \$leadField = new LeadField();

        \$this->assertTrue(\$leadField->isNew());
        \$this->assertFalse(\$leadField->getColumnIsNotCreated());
    }

    public function testColumnNotCreatedForPublishedEntity(): void
    {
        \$leadField = new LeadField();
        \$leadField->setIsPublished(true);

        \$this->assertTrue(\$leadField->getIsPublished());

        \$leadField->setColumnIsNotCreated();

        \$this->assertFalse(\$leadField->getIsPublished(), 'Entity cannot be published until column is not created');
        \$this->assertTrue(\$leadField->getColumnIsNotCreated());

        \$leadField->setColumnWasCreated();

        \$this->assertTrue(\$leadField->getIsPublished());
        \$this->assertFalse(\$leadField->getColumnIsNotCreated());
    }

    public function testColumnNotCreatedForUnpublishedEntity(): void
    {
        \$leadField = new LeadField();
        \$leadField->setIsPublished(false);

        \$this->assertFalse(\$leadField->getIsPublished());

        \$leadField->setColumnIsNotCreated();

        \$this->assertFalse(\$leadField->getIsPublished());
        \$this->assertTrue(\$leadField->getColumnIsNotCreated());

        \$leadField->setColumnWasCreated();

        \$this->assertFalse(\$leadField->getIsPublished());
        \$this->assertFalse(\$leadField->getColumnIsNotCreated());
    }

    public function testEmailCannotBeUnpublished(): void
    {
        \$leadField = new LeadField();
        \$leadField->setIsPublished(true);

        \$this->assertFalse(\$leadField->disablePublishChange());

        \$leadField->setAlias('email');

        \$this->assertTrue(\$leadField->disablePublishChange());
    }

    public function testCannotBeUnpublishedUntilColumnIsCreated(): void
    {
        \$leadField = new LeadField();
        \$leadField->setIsPublished(false);

        \$this->assertFalse(\$leadField->disablePublishChange());

        \$leadField->setColumnIsNotCreated();

        \$this->assertTrue(\$leadField->disablePublishChange());

        \$leadField->setColumnWasCreated();

        \$this->assertFalse(\$leadField->disablePublishChange());
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
        return "@bundles/LeadBundle/Tests/Entity/LeadFieldTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Entity/LeadFieldTest.php", "/app/docroot/app/bundles/LeadBundle/Tests/Entity/LeadFieldTest.php");
    }
}
