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

/* @bundles/LeadBundle/Tests/Segment/IntegrationCampaign/IntegrationCampaignPartsTest.php */
class __TwigTemplate_37a493b0cb4c5d20499ffe00e1e0e188 extends Template
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

namespace Mautic\\LeadBundle\\Tests\\Segment\\IntegrationCampaign;

use Mautic\\LeadBundle\\Segment\\IntegrationCampaign\\IntegrationCampaignParts;

class IntegrationCampaignPartsTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @covers \\Mautic\\LeadBundle\\Segment\\IntegrationCampaign\\IntegrationCampaignParts::getIntegrationName
     * @covers \\Mautic\\LeadBundle\\Segment\\IntegrationCampaign\\IntegrationCampaignParts::getCampaignId
     */
    public function testConnectwise(): void
    {
        \$field             = 'Connectwise::283';
        \$doNotContactParts = new IntegrationCampaignParts(\$field);

        \$this->assertSame('Connectwise', \$doNotContactParts->getIntegrationName());
        \$this->assertSame('283', \$doNotContactParts->getCampaignId());
    }

    /**
     * @covers \\Mautic\\LeadBundle\\Segment\\IntegrationCampaign\\IntegrationCampaignParts::getIntegrationName
     * @covers \\Mautic\\LeadBundle\\Segment\\IntegrationCampaign\\IntegrationCampaignParts::getCampaignId
     */
    public function testSalesforceExplicit(): void
    {
        \$field             = 'Salesforce::22';
        \$doNotContactParts = new IntegrationCampaignParts(\$field);

        \$this->assertSame('Salesforce', \$doNotContactParts->getIntegrationName());
        \$this->assertSame('22', \$doNotContactParts->getCampaignId());
    }

    /**
     * @covers \\Mautic\\LeadBundle\\Segment\\IntegrationCampaign\\IntegrationCampaignParts::getIntegrationName
     * @covers \\Mautic\\LeadBundle\\Segment\\IntegrationCampaign\\IntegrationCampaignParts::getCampaignId
     */
    public function testSalesforceDefault(): void
    {
        \$field             = '44';
        \$doNotContactParts = new IntegrationCampaignParts(\$field);

        \$this->assertSame('Salesforce', \$doNotContactParts->getIntegrationName());
        \$this->assertSame('44', \$doNotContactParts->getCampaignId());
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
        return "@bundles/LeadBundle/Tests/Segment/IntegrationCampaign/IntegrationCampaignPartsTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Segment/IntegrationCampaign/IntegrationCampaignPartsTest.php", "/app/docroot/app/bundles/LeadBundle/Tests/Segment/IntegrationCampaign/IntegrationCampaignPartsTest.php");
    }
}
