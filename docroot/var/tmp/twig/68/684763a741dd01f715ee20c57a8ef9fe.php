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

/* @bundles/CampaignBundle/DataFixtures/ORM/CampaignData.php */
class __TwigTemplate_7140de498559d4bebe94eb481f10eb4b extends Template
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

namespace Mautic\\CampaignBundle\\DataFixtures\\ORM;

use Doctrine\\Common\\DataFixtures\\AbstractFixture;
use Doctrine\\Common\\DataFixtures\\OrderedFixtureInterface;
use Doctrine\\Persistence\\ObjectManager;
use Mautic\\CampaignBundle\\Entity\\Campaign;

class CampaignData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager \$manager): void
    {
        \$campaign = new Campaign();

        \$campaign->setName('Campaign A');
        \$campaign->setCanvasSettings([
            'nodes' => [
                0 => [
                    'id'        => '148',
                    'positionX' => '760',
                    'positionY' => '155',
                ],
                1 => [
                    'id'        => 'lists',
                    'positionX' => '860',
                    'positionY' => '50',
                ],
            ],
            'connections' => [
                0 => [
                    'sourceId' => 'lists',
                    'targetId' => '148',
                    'anchors'  => [
                        'source' => 'leadsource',
                        'target' => 'top',
                    ],
                ],
            ],
        ]
        );

        \$manager->persist(\$campaign);
        \$manager->flush();
    }

    /**
     * @return int
     */
    public function getOrder()
    {
        return 0;
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
        return "@bundles/CampaignBundle/DataFixtures/ORM/CampaignData.php";
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
        return new Source("", "@bundles/CampaignBundle/DataFixtures/ORM/CampaignData.php", "/app/docroot/app/bundles/CampaignBundle/DataFixtures/ORM/CampaignData.php");
    }
}
