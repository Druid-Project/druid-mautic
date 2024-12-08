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

/* @bundles/LeadBundle/Tests/Event/FieldOperatorsEventTest.php */
class __TwigTemplate_d8062f410fd20b1d8726f476e164a12f extends Template
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

use Mautic\\LeadBundle\\Event\\FieldOperatorsEvent;

final class FieldOperatorsEventTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testConstructGettersSetters(): void
    {
        \$type         = 'select';
        \$field        = 'country';
        \$allOperators = [
            '=' => [
                'label'       => 'equals',
                'expr'        => 'eq',
                'negate_expr' => 'neq',
            ],
            '!=' => [
                'label'       => 'not equal',
                'expr'        => 'neq',
                'negate_expr' => 'eq',
            ],
        ];

        \$defaultOperators = [
            'equals' => '=',
        ];

        \$event = new FieldOperatorsEvent(\$type, \$field, \$allOperators, \$defaultOperators);

        \$this->assertSame(\$type, \$event->getType());
        \$this->assertSame(\$field, \$event->getField());
        \$this->assertSame(\$defaultOperators, \$event->getOperators());

        \$event->addOperator('!=');

        \$this->assertSame(['equals' => '=', 'not equal' => '!='], \$event->getOperators());
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
        return "@bundles/LeadBundle/Tests/Event/FieldOperatorsEventTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Event/FieldOperatorsEventTest.php", "/app/docroot/app/bundles/LeadBundle/Tests/Event/FieldOperatorsEventTest.php");
    }
}
