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

/* @bundles/LeadBundle/Tests/Event/TypeOperatorsEventTest.php */
class __TwigTemplate_b00c0a03247f84a59bc3744eb7f8615b extends Template
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

namespace Mautic\\LeadBundle\\Tests\\Event;

use Mautic\\LeadBundle\\Event\\TypeOperatorsEvent;

final class TypeOperatorsEventTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testConstructGettersSetters(): void
    {
        \$event = new TypeOperatorsEvent();

        \$this->assertSame([], \$event->getOperatorsForAllFieldTypes());

        \$event->setOperatorsForFieldType('email', ['include' => ['=', 'like']]);
        \$event->setOperatorsForFieldType('firsname', ['exclude' => ['!=', '!like']]);

        \$this->assertSame([
            'email'    => ['include' => ['=', 'like']],
            'firsname' => ['exclude' => ['!=', '!like']],
        ], \$event->getOperatorsForAllFieldTypes());
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
        return "@bundles/LeadBundle/Tests/Event/TypeOperatorsEventTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Event/TypeOperatorsEventTest.php", "/app/docroot/app/bundles/LeadBundle/Tests/Event/TypeOperatorsEventTest.php");
    }
}
