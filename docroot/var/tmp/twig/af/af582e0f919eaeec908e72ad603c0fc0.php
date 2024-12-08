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

/* @bundles/LeadBundle/Tests/Provider/FilterOperatorProviderTest.php */
class __TwigTemplate_4a9c214ca7709b114353447c2322c44e extends Template
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

namespace Mautic\\LeadBundle\\Tests\\Provider;

use Mautic\\LeadBundle\\Event\\LeadListFiltersOperatorsEvent;
use Mautic\\LeadBundle\\LeadEvents;
use Mautic\\LeadBundle\\Provider\\FilterOperatorProvider;
use Mautic\\LeadBundle\\Segment\\OperatorOptions;
use PHPUnit\\Framework\\MockObject\\MockObject;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

final class FilterOperatorProviderTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @var MockObject|EventDispatcherInterface
     */
    private MockObject \$dispatcher;

    /**
     * @var MockObject|TranslatorInterface
     */
    private MockObject \$translator;

    private FilterOperatorProvider \$provider;

    protected function setUp(): void
    {
        parent::setUp();

        \$this->dispatcher = \$this->createMock(EventDispatcherInterface::class);
        \$this->translator = \$this->createMock(TranslatorInterface::class);
        \$this->provider   = new FilterOperatorProvider(
            \$this->dispatcher,
            \$this->translator
        );
    }

    public function testGetAllOperators(): void
    {
        \$this->dispatcher->expects(\$this->once())
            ->method('dispatch')
            ->with(
                \$this->callback(function (LeadListFiltersOperatorsEvent \$event) {
                    // Emulate a subscriber.
                    \$event->addOperator(
                        OperatorOptions::EQUAL_TO,
                        [
                            'label'       => 'equals to',
                            'expr'        => 'eq',
                            'negate_expr' => 'neq',
                        ]
                    );

                    return true;
                }),
                LeadEvents::LIST_FILTERS_OPERATORS_ON_GENERATE
            );

        \$this->translator->expects(\$this->once())
            ->method('trans')
            ->with('equals to')
            ->willReturnArgument(0);

        // Call it for the first time so the class cache would be populated.
        \$this->provider->getAllOperators();

        // Call it for the second time to ensure the cache is used and the event is fired only once.
        \$operators = \$this->provider->getAllOperators();

        \$this->assertSame([
            OperatorOptions::EQUAL_TO => [
                'label'       => 'equals to',
                'expr'        => 'eq',
                'negate_expr' => 'neq',
            ],
        ], \$operators);
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
        return "@bundles/LeadBundle/Tests/Provider/FilterOperatorProviderTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Provider/FilterOperatorProviderTest.php", "/app/docroot/app/bundles/LeadBundle/Tests/Provider/FilterOperatorProviderTest.php");
    }
}
