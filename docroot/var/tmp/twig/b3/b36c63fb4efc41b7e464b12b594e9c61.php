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

/* @bundles/LeadBundle/Helper/CampaignEventHelper.php */
class __TwigTemplate_16e6eb83c9e8c230bb1a3b90a0182f4c extends Template
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

namespace Mautic\\LeadBundle\\Helper;

use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\LeadBundle\\Event\\ListChangeEvent;

class CampaignEventHelper
{
    public static function validatePointChange(\$event, Lead \$lead): bool
    {
        \$properties  = \$event['properties'];
        \$checkPoints = \$properties['points'];

        if (!empty(\$checkPoints)) {
            \$points = \$lead->getPoints();
            if (\$points < \$checkPoints) {
                return false;
            }
        }

        return true;
    }

    public static function validateListChange(ListChangeEvent \$eventDetails, \$event): bool
    {
        \$limitAddTo      = \$event['properties']['addedTo'];
        \$limitRemoveFrom = \$event['properties']['removedFrom'];
        \$list            = \$eventDetails->getList();

        if (\$eventDetails->wasAdded() && !empty(\$limitAddTo) && !in_array(\$list->getId(), \$limitAddTo)) {
            return false;
        }

        if (\$eventDetails->wasRemoved() && !empty(\$limitRemoveFrom) && !in_array(\$list->getId(), \$limitRemoveFrom)) {
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
        return "@bundles/LeadBundle/Helper/CampaignEventHelper.php";
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
        return new Source("", "@bundles/LeadBundle/Helper/CampaignEventHelper.php", "/app/docroot/app/bundles/LeadBundle/Helper/CampaignEventHelper.php");
    }
}
