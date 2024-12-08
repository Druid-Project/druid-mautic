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

/* @bundles/FormBundle/Tests/Event/FormFieldEventTest.php */
class __TwigTemplate_a453942e64de6d5c03ac17561416c829 extends Template
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

namespace Mautic\\FormBundle\\Tests\\Event;

use Mautic\\FormBundle\\Entity\\Field;
use Mautic\\FormBundle\\Event\\FormFieldEvent;

final class FormFieldEventTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testWorkflow(): void
    {
        \$field  = new Field();
        \$field2 = new Field();
        \$event  = new FormFieldEvent(\$field, true);
        \$this->assertTrue(\$event->isNew());
        \$this->assertSame(\$field, \$event->getField());

        \$event->setField(\$field2);

        \$this->assertSame(\$field2, \$event->getField());
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
        return "@bundles/FormBundle/Tests/Event/FormFieldEventTest.php";
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
        return new Source("", "@bundles/FormBundle/Tests/Event/FormFieldEventTest.php", "/app/docroot/app/bundles/FormBundle/Tests/Event/FormFieldEventTest.php");
    }
}
