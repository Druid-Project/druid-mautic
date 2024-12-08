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

/* @bundles/LeadBundle/Tests/Segment/Query/Filter/SegmentReferenceFilterQueryBuilderGlueTest.php */
class __TwigTemplate_f86b7f5c9ca1d33c17ee67b0527c430c extends Template
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

namespace Mautic\\LeadBundle\\Tests\\Segment\\Query\\Filter;

use Mautic\\CoreBundle\\Test\\MauticMysqlTestCase;
use Mautic\\CoreBundle\\Tests\\Functional\\CreateTestEntitiesTrait;
use PHPUnit\\Framework\\Assert;

class SegmentReferenceFilterQueryBuilderGlueTest extends MauticMysqlTestCase
{
    use CreateTestEntitiesTrait;

    public function testMultipleFiltersConnectedWithOrGlue(): void
    {
        \$leadA = \$this->createLead('A');
        \$leadB = \$this->createLead('B');
        \$leadC = \$this->createLead('C');
        \$leadD = \$this->createLead('D');

        \$segmentA = \$this->createSegment('A', []);
        \$this->createListLead(\$segmentA, \$leadA);
        \$this->createListLead(\$segmentA, \$leadD);

        \$segmentB = \$this->createSegment('B', []);
        \$this->createListLead(\$segmentB, \$leadB);
        \$this->createListLead(\$segmentB, \$leadD);

        \$segmentC = \$this->createSegment('C', []);
        \$this->createListLead(\$segmentC, \$leadC);
        \$this->createListLead(\$segmentC, \$leadD);

        \$this->em->flush();

        \$segmentD = \$this->createSegment('D', [
            [
                'object'     => 'lead',
                'glue'       => 'and',
                'field'      => 'leadlist',
                'type'       => 'leadlist',
                'operator'   => 'in',
                'properties' => [
                    'filter' => [
                        \$segmentA->getId(),
                    ],
                ],
            ],
            [
                'object'     => 'lead',
                'glue'       => 'or',
                'field'      => 'leadlist',
                'type'       => 'leadlist',
                'operator'   => 'in',
                'properties' => [
                    'filter' => [
                        \$segmentB->getId(),
                        \$segmentC->getId(),
                    ],
                ],
            ],
        ]);

        \$this->em->flush();
        \$this->em->clear();

        \$this->testSymfonyCommand('mautic:segments:update', ['--list-id' => \$segmentD->getId()]);

        \$listModel = static::getContainer()->get('mautic.lead.model.list');

        \$leadCount = \$listModel->getListLeadRepository()->getContactsCountBySegment(\$segmentD->getId());
        Assert::assertSame(4, \$leadCount, 'Segment must contain all the leads.');
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
        return "@bundles/LeadBundle/Tests/Segment/Query/Filter/SegmentReferenceFilterQueryBuilderGlueTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Segment/Query/Filter/SegmentReferenceFilterQueryBuilderGlueTest.php", "/app/docroot/app/bundles/LeadBundle/Tests/Segment/Query/Filter/SegmentReferenceFilterQueryBuilderGlueTest.php");
    }
}
