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

/* @bundles/CampaignBundle/Tests/EventCollector/Builder/ConnectionBuilderTest.php */
class __TwigTemplate_d1f759fd560be46d071813f0fdc3b20c extends Template
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

namespace Mautic\\CampaignBundle\\Tests\\EventCollector\\Builder;

use Mautic\\CampaignBundle\\Entity\\Event;
use Mautic\\CampaignBundle\\EventCollector\\Builder\\ConnectionBuilder;

class ConnectionBuilderTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testArrayIsBuiltAsItsUsedInJsPlumb(): void
    {
        \$eventsArray = [
            Event::TYPE_ACTION   => [
                'action1' => [
                    'connectionRestrictions' => [
                        'anchor' => ['decision1.inaction'],
                        'source' => [
                            'decision' => [
                                'decision1',
                            ],
                        ],
                    ],
                ],
                'action2' => [
                    // BC from way back
                    'associatedDecisions' => [
                        'decision1',
                    ],
                ],
                'action3' => [
                    // BC from way back
                    'anchorRestrictions' => [
                        'decision2.top',
                    ],
                ],
            ],
            Event::TYPE_DECISION => [
                'decision1' => [
                    'connectionRestrictions' => ['source' => ['action' => ['action1']]],
                ],
                'decision2' => [
                    // BC From way back
                    'associatedActions' => [
                        'some.decision',
                    ],
                ],
            ],
        ];

        \$results = ConnectionBuilder::buildRestrictionsArray(\$eventsArray);

        \$expected = [
            'anchor'    => [
                'decision1' => [
                    'action1' => ['inaction'],
                ],
                'action3'   => [
                    'decision2' => ['top'],
                ],
            ],
            'action1'   => [
                'source' => [
                    'action'   => [],
                    'decision' => ['decision1'],
                ],
                'target' => [
                    'action'   => [],
                    'decision' => [],
                ],
            ],
            'action2'   => [
                'source' => [
                    'action'   => [],
                    'decision' => ['decision1'],
                ],
                'target' => [
                    'action'   => [],
                    'decision' => [],
                ],
            ],
            'action3'   => [
                'source' => [
                    'action'   => [],
                    'decision' => [],
                ],
                'target' => [
                    'action'   => [],
                    'decision' => [],
                ],
            ],
            'decision1' => [
                'source' => [
                    'action'   => ['action1'],
                    'decision' => [],
                ],
                'target' => [
                    'action'   => [],
                    'decision' => [],
                ],
            ],
            'decision2' => [
                'source' => [
                    'action'   => [],
                    'decision' => [],
                ],
                'target' => [
                    'action'   => ['some.decision'],
                    'decision' => [],
                ],
            ],
        ];

        \$this->assertEquals(\$expected, \$results);
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
        return "@bundles/CampaignBundle/Tests/EventCollector/Builder/ConnectionBuilderTest.php";
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
        return new Source("", "@bundles/CampaignBundle/Tests/EventCollector/Builder/ConnectionBuilderTest.php", "/app/docroot/app/bundles/CampaignBundle/Tests/EventCollector/Builder/ConnectionBuilderTest.php");
    }
}
