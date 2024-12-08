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

/* @bundles/CoreBundle/Tests/Helper/MapHelperTest.php */
class __TwigTemplate_07e81ee9e12c82188a5ffabb74b1da12 extends Template
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

namespace Mautic\\CoreBundle\\Tests\\Helper;

use Mautic\\CampaignBundle\\Controller\\CampaignMapStatsController;
use Mautic\\CoreBundle\\Helper\\MapHelper;
use Mautic\\CoreBundle\\Test\\MauticMysqlTestCase;

class MapHelperTest extends MauticMysqlTestCase
{
    /**
     * @return array<string, array<int, array<string, int|string>>>
     */
    private function getStats(): array
    {
        return [
            'contacts' => [
                [
                    'country'  => '',
                    'contacts' => 4,
                ],
                [
                    'country'  => 'Spain',
                    'contacts' => 12,
                ],
                [
                    'country'  => 'Finland',
                    'contacts' => 8,
                ],
            ],
            'read_count' => [
                [
                    'read_count'            => '4',
                    'country'               => '',
                ],
                [
                    'read_count'            => '8',
                    'country'               => 'Spain',
                ],
                [
                    'read_count'            => '8',
                    'country'               => 'Finland',
                ],
            ],
            'clicked_through_count' => [
                [
                    'clicked_through_count' => '4',
                    'country'               => '',
                ],
                [
                    'clicked_through_count' => '4',
                    'country'               => 'Spain',
                ],
                [
                    'clicked_through_count' => '4',
                    'country'               => 'Finland',
                ],
            ],
        ];
    }

    public function testGetOptionLegendText(): void
    {
        \$legendValues = [
            '%total'       => 4,
            '%withCountry' => 2,
        ];

        \$this->assertEquals(
            'Total: 4 (2 with country)',
            MapHelper::getOptionLegendText(CampaignMapStatsController::LEGEND_TEXT, \$legendValues)
        );
    }

    public function testBuildMapData(): void
    {
        \$results = MapHelper::buildMapData(
            \$this->getStats(),
            CampaignMapStatsController::MAP_OPTIONS,
            CampaignMapStatsController::LEGEND_TEXT
        );

        \$this->assertCount(3, \$results);
        \$this->assertSame([
            'data' => [
                'ES' => 12,
                'FI' => 8,
            ],
            'label'      => 'mautic.lead.leads',
            'legendText' => 'Total: 24 (20 with country)',
            'unit'       => 'Contact',
        ], \$results[0]);

        \$this->assertSame([
            'data' => [
                'ES' => 8,
                'FI' => 8,
            ],
            'label'      => 'mautic.email.read',
            'legendText' => 'Total: 20 (16 with country)',
            'unit'       => 'Read',
        ], \$results[1]);

        \$this->assertSame([
            'data' => [
                'ES' => 4,
                'FI' => 4,
            ],
            'label'      => 'mautic.email.click',
            'legendText' => 'Total: 12 (8 with country)',
            'unit'       => 'Click',
        ], \$results[2]);
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
        return "@bundles/CoreBundle/Tests/Helper/MapHelperTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Helper/MapHelperTest.php", "/app/docroot/app/bundles/CoreBundle/Tests/Helper/MapHelperTest.php");
    }
}
