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

/* @bundles/CampaignBundle/Helper/CampaignEventHelper.php */
class __TwigTemplate_ec776b0b7c4b730a0517603906b6ee41 extends Template
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

namespace Mautic\\CampaignBundle\\Helper;

use Mautic\\CampaignBundle\\Event\\CampaignLeadChangeEvent;

class CampaignEventHelper
{
    /**
     * Determine if this campaign applies.
     */
    public static function validateLeadChangeTrigger(CampaignLeadChangeEvent \$eventDetails = null, array \$event): bool
    {
        if (null == \$eventDetails) {
            return true;
        }

        \$limitToCampaigns = \$event['properties']['campaigns'];
        \$action           = \$event['properties']['action'];

        // check against selected campaigns
        if (!empty(\$limitToCampaigns) && !in_array(\$event['campaign']['id'], \$limitToCampaigns)) {
            return false;
        }

        // check against the selected action (was lead removed or added)
        \$func = 'was'.ucfirst(\$action);
        if (!method_exists(\$eventDetails, \$func) || !\$eventDetails->\$func()) {
            return false;
        }

        return true;
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
        return "@bundles/CampaignBundle/Helper/CampaignEventHelper.php";
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
        return new Source("", "@bundles/CampaignBundle/Helper/CampaignEventHelper.php", "/app/docroot/app/bundles/CampaignBundle/Helper/CampaignEventHelper.php");
    }
}
