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

/* @bundles/LeadBundle/Tests/Field/LeadFieldSaverTest.php */
class __TwigTemplate_f5e89f518eed34844960714cbaba2357 extends Template
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

namespace Mautic\\LeadBundle\\Tests\\Field;

use Mautic\\LeadBundle\\Entity\\LeadField;
use Mautic\\LeadBundle\\Entity\\LeadFieldRepository;
use Mautic\\LeadBundle\\Field\\Dispatcher\\FieldSaveDispatcher;
use Mautic\\LeadBundle\\Field\\LeadFieldSaver;

class LeadFieldSaverTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testSave(): void
    {
        \$leadFieldRepository = \$this->createMock(LeadFieldRepository::class);
        \$fieldSaveDispatcher = \$this->createMock(FieldSaveDispatcher::class);

        \$leadFieldSaver = new LeadFieldSaver(\$leadFieldRepository, \$fieldSaveDispatcher);

        \$leadField = new LeadField();

        \$fieldSaveDispatcher->expects(\$this->once())
            ->method('dispatchPreSaveEvent')
            ->with(\$leadField, true);

        \$fieldSaveDispatcher->expects(\$this->once())
            ->method('dispatchPostSaveEvent')
            ->with(\$leadField, true);

        \$leadFieldSaver->saveLeadFieldEntity(\$leadField, true);
    }

    public function testSaveNoColumnCreated(): void
    {
        \$leadFieldRepository = \$this->createMock(LeadFieldRepository::class);
        \$fieldSaveDispatcher = \$this->createMock(FieldSaveDispatcher::class);

        \$leadFieldSaver = new LeadFieldSaver(\$leadFieldRepository, \$fieldSaveDispatcher);

        \$leadField = new LeadField();

        \$fieldSaveDispatcher->expects(\$this->once())
            ->method('dispatchPreSaveEvent')
            ->with(\$leadField, true);

        \$fieldSaveDispatcher->expects(\$this->once())
            ->method('dispatchPostSaveEvent')
            ->with(\$leadField, true);

        \$leadFieldSaver->saveLeadFieldEntityWithoutColumnCreated(\$leadField);

        \$this->assertTrue(\$leadField->getColumnIsNotCreated());
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
        return "@bundles/LeadBundle/Tests/Field/LeadFieldSaverTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Field/LeadFieldSaverTest.php", "/app/docroot/app/bundles/LeadBundle/Tests/Field/LeadFieldSaverTest.php");
    }
}
