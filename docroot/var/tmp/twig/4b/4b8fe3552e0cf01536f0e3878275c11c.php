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

/* @bundles/CampaignBundle/Tests/Controller/VisitedPageConditionControllerFunctionalTest.php */
class __TwigTemplate_0505b2d7f1de60057cbd728e3d9b46c5 extends Template
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

namespace Mautic\\CampaignBundle\\Tests\\Controller;

use Mautic\\CoreBundle\\Test\\MauticMysqlTestCase;
use PHPUnit\\Framework\\Assert;
use Symfony\\Component\\DomCrawler\\Crawler;

final class VisitedPageConditionControllerFunctionalTest extends MauticMysqlTestCase
{
    /**
     * @dataProvider fieldAndValueProvider
     *
     * @param array<mixed,mixed> \$pageUrl
     * @param array<mixed,mixed> \$startDate
     * @param array<mixed,mixed> \$endDate
     * @param array<mixed,mixed> \$accumulativeTime
     * @param array<mixed,mixed> \$page
     */
    public function testCreatePageHitConditionForm(
        array \$pageUrl,
        array \$startDate,
        array \$endDate,
        array \$accumulativeTime,
        array \$page
    ): void {
        // Fetch the campaign condition form.
        \$uri = 's/campaigns/events/new?type=lead.pageHit&eventType=condition&campaignId=3&anchor=leadsource&anchorEventType=source&_=1682493324393&mauticUserLastActive=897&mauticLastNotificationId=';
        \$this->client->request('GET', \$uri, [], [], \$this->createAjaxHeaders());
        \$response = \$this->client->getResponse();
        Assert::assertTrue(\$response->isOk(), \$response->getContent());

        // Get the form HTML element out of the response, fill it in and submit.
        \$responseData = json_decode(\$response->getContent(), true);
        \$crawler      = new Crawler(\$responseData['newContent'], \$this->client->getInternalRequest()->getUri());
        \$form         = \$crawler->filterXPath('//form[@name=\"campaignevent\"]')->form();
        \$form->setValues(
            [
                'campaignevent[anchor]'                                  => 'leadsource',
                'campaignevent[properties]['.\$pageUrl[0].']'             => \$pageUrl[1],
                'campaignevent[properties]['.\$startDate[0].']'           => \$startDate[1],
                'campaignevent[properties]['.\$endDate[0].']'             => \$endDate[1],
                'campaignevent[properties]['.\$accumulativeTime[0].']'    => \$accumulativeTime[1],
                'campaignevent[properties]['.\$page[0].']'                => \$page[1] ?? '',
                'campaignevent[type]'                                    => 'lead.pageHit',
                'campaignevent[eventType]'                               => 'condition',
                'campaignevent[anchorEventType]'                         => 'source',
                'campaignevent[campaignId]'                              => '3',
            ]
        );

        \$this->client->request(\$form->getMethod(), \$form->getUri(), \$form->getPhpValues(), [], \$this->createAjaxHeaders());
        \$response = \$this->client->getResponse();
        Assert::assertTrue(\$response->isOk(), \$response->getContent());
        \$responseData = json_decode(\$response->getContent(), true);
        Assert::assertSame(1, \$responseData['success'], print_r(json_decode(\$response->getContent(), true), true));
    }

    /**
     * @return array<mixed,mixed>
     */
    public static function fieldAndValueProvider(): array
    {
        return [
            [
                'page_url'           => ['page_url', 'https://example.com'],
                'startDate'          => ['startDate', (new \\DateTime())->format('Y-m-d H:i:s')],
                'endDate'            => ['endDate', (new \\DateTime())->modify('+ 5 days')->format('Y-m-d H:i:s')],
                'accumulative_time'  => ['accumulative_time', 5],
                'page'               => ['page', null],
            ],
            [
                'page_url'           => ['page_url', 'https://example.com'],
                'startDate'          => ['startDate', (new \\DateTime())->format('Y-m-d H:i:s')],
                'endDate'            => ['endDate', (new \\DateTime())->modify('+ 10 days')->format('Y-m-d H:i:s')],
                'accumulative_time'  => ['accumulative_time', null],
                'page'               => ['page', ''],
            ],
        ];
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
        return "@bundles/CampaignBundle/Tests/Controller/VisitedPageConditionControllerFunctionalTest.php";
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
        return new Source("", "@bundles/CampaignBundle/Tests/Controller/VisitedPageConditionControllerFunctionalTest.php", "/app/docroot/app/bundles/CampaignBundle/Tests/Controller/VisitedPageConditionControllerFunctionalTest.php");
    }
}
