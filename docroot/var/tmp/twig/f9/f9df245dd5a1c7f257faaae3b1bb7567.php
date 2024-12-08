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

/* @bundles/PageBundle/Tests/Controller/PageControllerFunctionalTest.php */
class __TwigTemplate_c10098d46e2ab0c23bf015e889ebbc91 extends Template
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

namespace Mautic\\PageBundle\\Tests\\Controller;

use Mautic\\CoreBundle\\Test\\MauticMysqlTestCase;
use Mautic\\DynamicContentBundle\\Entity\\DynamicContent;
use Mautic\\LeadBundle\\Entity\\LeadList;
use Mautic\\PageBundle\\Entity\\Page;
use Symfony\\Component\\HttpFoundation\\Request;

class PageControllerFunctionalTest extends MauticMysqlTestCase
{
    public function testPagePreview(): void
    {
        \$segment = \$this->createSegment();
        \$filter  = [
            [
                'glue'     => 'and',
                'field'    => 'leadlist',
                'object'   => 'lead',
                'type'     => 'leadlist',
                'filter'   => [\$segment->getId()],
                'display'  => null,
                'operator' => 'in',
            ],
        ];
        \$dynamicContent = \$this->createDynamicContentWithSegmentFilter(\$filter);

        \$dynamicContentToken = sprintf('{dwc=%s}', \$dynamicContent->getSlotName());
        \$page                = \$this->createPage(\$dynamicContentToken);

        \$this->client->request(Request::METHOD_GET, sprintf('/%s', \$page->getAlias()));
        \$response = \$this->client->getResponse();
        \$this->assertSame(200, \$response->getStatusCode());
        \$this->assertStringContainsString('Test Html', \$response->getContent());
    }

    private function createSegment(): LeadList
    {
        \$segment = new LeadList();
        \$segment->setName('Segment 1');
        \$segment->setPublicName('Segment 1');
        \$segment->setAlias('segment_1');
        \$this->em->persist(\$segment);
        \$this->em->flush();

        return \$segment;
    }

    /**
     * @param mixed[] \$filters
     */
    private function createDynamicContentWithSegmentFilter(array \$filters = []): DynamicContent
    {
        \$dynamicContent = new DynamicContent();
        \$dynamicContent->setName('DC 1');
        \$dynamicContent->setDescription('Customised value');
        \$dynamicContent->setFilters(\$filters);
        \$dynamicContent->setIsCampaignBased(false);
        \$dynamicContent->setSlotName('Segment1_Slot');
        \$this->em->persist(\$dynamicContent);
        \$this->em->flush();

        return \$dynamicContent;
    }

    private function createPage(string \$token = ''): Page
    {
        \$page = new Page();
        \$page->setIsPublished(true);
        \$page->setTitle('Page Title');
        \$page->setAlias('page-alias');
        \$page->setTemplate('Blank');
        \$page->setCustomHtml('Test Html'.\$token);
        \$this->em->persist(\$page);
        \$this->em->flush();

        return \$page;
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
        return "@bundles/PageBundle/Tests/Controller/PageControllerFunctionalTest.php";
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
        return new Source("", "@bundles/PageBundle/Tests/Controller/PageControllerFunctionalTest.php", "/app/docroot/app/bundles/PageBundle/Tests/Controller/PageControllerFunctionalTest.php");
    }
}
