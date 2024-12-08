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

/* @bundles/LeadBundle/Segment/IntegrationCampaign/IntegrationCampaignParts.php */
class __TwigTemplate_d74024637307706b88ad0a972c08f3e2 extends Template
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

namespace Mautic\\LeadBundle\\Segment\\IntegrationCampaign;

class IntegrationCampaignParts
{
    private string \$integrationName;

    private string \$campaignId;

    /**
     * @param string \$field
     */
    public function __construct(\$field)
    {
        if (str_contains(\$field, '::')) {
            [\$integrationName, \$campaignId] = explode('::', \$field);
        } else {
            // Assuming this is a Salesforce integration for BC with pre 2.11.0
            \$integrationName = 'Salesforce';
            \$campaignId      = \$field;
        }
        \$this->integrationName = \$integrationName;
        \$this->campaignId      = \$campaignId;
    }

    public function getIntegrationName(): string
    {
        return \$this->integrationName;
    }

    public function getCampaignId(): string
    {
        return \$this->campaignId;
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
        return "@bundles/LeadBundle/Segment/IntegrationCampaign/IntegrationCampaignParts.php";
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
        return new Source("", "@bundles/LeadBundle/Segment/IntegrationCampaign/IntegrationCampaignParts.php", "/app/docroot/app/bundles/LeadBundle/Segment/IntegrationCampaign/IntegrationCampaignParts.php");
    }
}
