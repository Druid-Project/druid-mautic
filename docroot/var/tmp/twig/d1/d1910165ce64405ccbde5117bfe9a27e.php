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

/* @bundles/LeadBundle/Tests/Segment/ContactSegmentFilterFactoryTest.php */
class __TwigTemplate_db4d842676f63a86180c78151bda23d0 extends Template
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

namespace Mautic\\LeadBundle\\Tests\\Segment;

use Mautic\\LeadBundle\\Entity\\LeadList;
use Mautic\\LeadBundle\\Segment\\ContactSegmentFilterFactory;
use Mautic\\LeadBundle\\Segment\\ContactSegmentFilters;
use Mautic\\LeadBundle\\Segment\\Decorator\\DecoratorFactory;
use Mautic\\LeadBundle\\Segment\\Decorator\\FilterDecoratorInterface;
use Mautic\\LeadBundle\\Segment\\Query\\Filter\\FilterQueryBuilderInterface;
use Mautic\\LeadBundle\\Segment\\TableSchemaColumnsCache;
use Symfony\\Component\\DependencyInjection\\Container;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;

class ContactSegmentFilterFactoryTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @covers \\Mautic\\LeadBundle\\Segment\\ContactSegmentFilterFactory
     */
    public function testLeadFilter(): void
    {
        \$tableSchemaColumnsCache = \$this->createMock(TableSchemaColumnsCache::class);
        \$container               = \$this->createMock(Container::class);
        \$decoratorFactory        = \$this->createMock(DecoratorFactory::class);

        \$filterDecorator = \$this->createMock(FilterDecoratorInterface::class);
        \$decoratorFactory->expects(\$this->exactly(4))
            ->method('getDecoratorForFilter')
            ->willReturn(\$filterDecorator);

        \$filterDecorator->expects(\$this->exactly(4))
            ->method('getQueryType')
            ->willReturn('MyQueryTypeId');

        \$filterQueryBuilder = \$this->createMock(FilterQueryBuilderInterface::class);
        \$container->expects(\$this->exactly(4))
            ->method('get')
            ->with('MyQueryTypeId')
            ->willReturn(\$filterQueryBuilder);

        \$contactSegmentFilterFactory = new ContactSegmentFilterFactory(\$tableSchemaColumnsCache, \$container, \$decoratorFactory, \$this->createMock(EventDispatcherInterface::class));

        \$leadList = new LeadList();
        \$leadList->setFilters([
            [
                'glue'     => 'and',
                'field'    => 'date_identified',
                'object'   => 'lead',
                'type'     => 'datetime',
                'filter'   => null,
                'display'  => null,
                'operator' => '!empty',
            ],
            [
                'glue'     => 'and',
                'type'     => 'text',
                'field'    => 'hit_url',
                'operator' => 'like',
                'filter'   => 'test.com',
                'display'  => '',
            ],
            [
                'glue'     => 'or',
                'type'     => 'lookup',
                'field'    => 'state',
                'operator' => '=',
                'filter'   => 'QLD',
                'display'  => '',
            ],
            [
                'glue'         => 'or',
                'type'         => 'lookup',
                'field'        => 'state',
                'operator'     => ContactSegmentFilterFactory::CUSTOM_OPERATOR,
                'properties'   => [
                    [
                        'operator' => '=',
                        'filter'   => 'QLD',
                    ],
                ],
                'merged_property' => [],
            ],
        ]);

        \$contactSegmentFilters = \$contactSegmentFilterFactory->getSegmentFilters(\$leadList);

        \$this->assertInstanceOf(ContactSegmentFilters::class, \$contactSegmentFilters);
        \$this->assertCount(4, \$contactSegmentFilters);
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
        return "@bundles/LeadBundle/Tests/Segment/ContactSegmentFilterFactoryTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Segment/ContactSegmentFilterFactoryTest.php", "/app/docroot/app/bundles/LeadBundle/Tests/Segment/ContactSegmentFilterFactoryTest.php");
    }
}
