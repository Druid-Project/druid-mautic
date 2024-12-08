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

/* @bundles/LeadBundle/Tests/DataFixtures/ORM/LoadPageHitData.php */
class __TwigTemplate_5a5cd8d78984b44c716fc4640fabc179 extends Template
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

namespace Mautic\\LeadBundle\\Tests\\DataFixtures\\ORM;

use Doctrine\\Common\\DataFixtures\\AbstractFixture;
use Doctrine\\Common\\DataFixtures\\OrderedFixtureInterface;
use Doctrine\\Persistence\\ObjectManager;
use Mautic\\PageBundle\\Entity\\Hit;

class LoadPageHitData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager \$manager): void
    {
        \$hits = [
            [
                'ipAddress'  => \$this->getReference('ipAddress-1'),
                'url'        => 'http://test.com',
                'urlTitle'   => 'Test Title',
                'referer'    => 'http://mautic.com',
                'alias'      => 'hit-1',
                'contact'    => \$this->getReference('lead-1'),
                'dateHit'    => new \\DateTime('-1 day'),
                'code'       => 200,
                'trackingId' => 'asdf',
            ],
            [
                'ipAddress'  => \$this->getReference('ipAddress-2'),
                'url'        => 'https://test/regex-segment-3.com',
                'urlTitle'   => 'Test Regex Url',
                'referer'    => 'https://test.com',
                'alias'      => 'hit-2',
                'contact'    => \$this->getReference('lead-2'),
                'dateHit'    => new \\DateTime('-2 day'),
                'code'       => 200,
                'trackingId' => 'abcdr',
            ],
            [
                'ipAddress'  => \$this->getReference('ipAddress-3'),
                'url'        => 'https://test/regex-segment-2.com',
                'urlTitle'   => 'Test Regex Url',
                'referer'    => 'https://test.com',
                'alias'      => 'hit-3',
                'contact'    => \$this->getReference('lead-3'),
                'dateHit'    => new \\DateTime('-3 day'),
                'code'       => 200,
                'trackingId' => 'abcdr',
            ],
            [
                'ipAddress'  => \$this->getReference('ipAddress-4'),
                'url'        => 'https://test/regex-segment-85.com',
                'urlTitle'   => 'Test Regex Url',
                'referer'    => 'https://test.com',
                'alias'      => 'hit-4',
                'contact'    => \$this->getReference('lead-4'),
                'dateHit'    => new \\DateTime('-5 day'),
                'code'       => 200,
                'trackingId' => 'abcdr',
            ],
            [
                'ipAddress'  => \$this->getReference('ipAddress-5'),
                'url'        => 'https://test/regex-segment-0.com',
                'urlTitle'   => 'Test Regex Url',
                'referer'    => 'https://test.com',
                'alias'      => 'hit-5',
                'contact'    => \$this->getReference('lead-5'),
                'dateHit'    => new \\DateTime('-3 day'),
                'code'       => 200,
                'trackingId' => 'abcdr',
            ],
            [
                'ipAddress'  => \$this->getReference('ipAddress-5'),
                'url'        => 'https://test/regex-segment-other.com',
                'urlTitle'   => 'Test Title',
                'referer'    => 'https://test.com',
                'alias'      => 'hit-6',
                'contact'    => \$this->getReference('lead-5'),
                'dateHit'    => new \\DateTime('-3 day'),
                'code'       => 200,
                'trackingId' => 'iomio',
            ],
        ];

        foreach (\$hits as \$hitConfig) {
            \$this->createHit(\$hitConfig, \$manager);
        }
    }

    protected function createHit(\$hitConfig, ObjectManager \$manager)
    {
        \$hit = new Hit();

        \$hit->setIpAddress(\$hitConfig['ipAddress']);
        \$hit->setUrl(\$hitConfig['url']);
        \$hit->setReferer(\$hitConfig['referer']);
        \$hit->setUrlTitle(\$hitConfig['urlTitle']);
        \$hit->setLead(\$hitConfig['contact']);
        \$hit->setDateHit(\$hitConfig['dateHit']);
        \$hit->setCode(\$hitConfig['code']);
        \$hit->setTrackingId(\$hitConfig['trackingId']);

        \$this->setReference(\$hitConfig['alias'], \$hit);

        \$manager->persist(\$hit);
        \$manager->flush();
    }

    /**
     * @return int
     */
    public function getOrder()
    {
        return 6;
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
        return "@bundles/LeadBundle/Tests/DataFixtures/ORM/LoadPageHitData.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/DataFixtures/ORM/LoadPageHitData.php", "/app/docroot/app/bundles/LeadBundle/Tests/DataFixtures/ORM/LoadPageHitData.php");
    }
}
