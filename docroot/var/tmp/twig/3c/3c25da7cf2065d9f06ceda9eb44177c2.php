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

/* @bundles/ConfigBundle/Tests/Event/ConfigBuilderEventTest.php */
class __TwigTemplate_28c387d19a08e2fef999aa21edff6799 extends Template
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

namespace Mautic\\ConfigBundle\\Tests\\Event;

use Mautic\\ConfigBundle\\Event\\ConfigBuilderEvent;
use Mautic\\CoreBundle\\Tests\\CommonMocks;

class ConfigBuilderEventTest extends CommonMocks
{
    public function testAddForm(): void
    {
        \$event  = \$this->initEvent();
        \$form   = ['formAlias' => 'testform'];
        \$result = \$event->addForm(\$form);

        \$this->assertTrue(\$result instanceof ConfigBuilderEvent);

        \$forms = \$event->getForms();

        \$this->assertEquals(\$form, \$forms[\$form['formAlias']]);
    }

    public function testRemoveForm(): void
    {
        \$event = \$this->initEvent();
        \$form  = ['formAlias' => 'testform'];

        \$event->addForm(\$form);

        \$result = \$event->removeForm(\$form['formAlias']);
        \$forms  = \$event->getForms();

        \$this->assertEquals([], \$forms);
        \$this->assertTrue(\$result);
    }

    protected function initEvent()
    {
        return new ConfigBuilderEvent(\$this->getBundleHelperMock());
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
        return "@bundles/ConfigBundle/Tests/Event/ConfigBuilderEventTest.php";
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
        return new Source("", "@bundles/ConfigBundle/Tests/Event/ConfigBuilderEventTest.php", "/app/docroot/app/bundles/ConfigBundle/Tests/Event/ConfigBuilderEventTest.php");
    }
}
