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

/* @bundles/LeadBundle/Tests/Event/ListFieldChoicesEventTest.php */
class __TwigTemplate_178e5ede022efc650991ab07e8c63d7c extends Template
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

use Mautic\\LeadBundle\\Event\\ListFieldChoicesEvent;

final class ListFieldChoicesEventTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testConstructGettersSetters(): void
    {
        \$event = new ListFieldChoicesEvent();

        \$this->assertSame([], \$event->getChoicesForAllListFieldTypes());
        \$this->assertSame([], \$event->getChoicesForAllListFieldAliases());

        \$event->setChoicesForFieldType('boolean', ['No' => 0, 'Yes' => 1]);
        \$event->setChoicesForFieldAlias('campaign', ['Campaign A' => 1, 'Campaign B' => 2]);
        \$event->setSearchTerm('Test search');

        \$this->assertSame(['boolean' => ['No' => 0, 'Yes' => 1]], \$event->getChoicesForAllListFieldTypes());
        \$this->assertSame(['campaign' => ['Campaign A' => 1, 'Campaign B' => 2]], \$event->getChoicesForAllListFieldAliases());
        \$this->assertSame('Test search', \$event->getSearchTerm());
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
        return "@bundles/LeadBundle/Tests/Event/ListFieldChoicesEventTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Event/ListFieldChoicesEventTest.php", "/app/docroot/app/bundles/LeadBundle/Tests/Event/ListFieldChoicesEventTest.php");
    }
}
