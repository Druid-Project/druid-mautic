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

/* @bundles/LeadBundle/Tests/Event/LeadListFiltersChoicesEventTest.php */
class __TwigTemplate_16332eef1e51689cbe4f242cf35b0732 extends Template
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

use Mautic\\LeadBundle\\Event\\LeadListFiltersChoicesEvent;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

class LeadListFiltersChoicesEventTest extends TestCase
{
    public function testGetters(): void
    {
        \$operators = [
            'text' => [
                'equals'      => '=',
                'not equal'   => '!=',
                'empty'       => 'empty',
                'not empty'   => '!empty',
                'like'        => 'like',
                'not like'    => '!like',
                'regexp'      => 'regexp',
                'not regexp'  => '!regexp',
                'starts with' => 'startsWith',
                'ends with'   => 'endsWith',
                'contains'    => 'contains',
            ],
            'select' => [
                'equals'     => '=',
                'not equal'  => '!=',
                'empty'      => 'empty',
                'not empty'  => '!empty',
                'including'  => 'in',
                'excluding'  => '!in',
                'regexp'     => 'regexp',
                'not regexp' => '!regexp',
            ],
            'bool' => [
                'equals'    => '=',
                'not equal' => '!=',
            ],
        ];

        \$choices                     = [0 => 'Choice1', 1 => 'Choice2'];
        \$search                      = 'Test Search';
        \$translator                  = \$this->createMock(TranslatorInterface::class);
        \$leadListFiltersChoicesEvent = new LeadListFiltersChoicesEvent(\$choices, \$operators, \$translator, new Request(), \$search);
        \$this->assertSame(\$operators, \$leadListFiltersChoicesEvent->getOperators());
        \$this->assertSame(\$choices, \$leadListFiltersChoicesEvent->getChoices());
        \$this->assertSame(\$translator, \$leadListFiltersChoicesEvent->getTranslator());
        \$this->assertSame(\$search, \$leadListFiltersChoicesEvent->getSearch());
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
        return "@bundles/LeadBundle/Tests/Event/LeadListFiltersChoicesEventTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Event/LeadListFiltersChoicesEventTest.php", "/app/docroot/app/bundles/LeadBundle/Tests/Event/LeadListFiltersChoicesEventTest.php");
    }
}
