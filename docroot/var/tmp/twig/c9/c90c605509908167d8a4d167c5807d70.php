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

/* @bundles/LeadBundle/Helper/PointEventHelper.php */
class __TwigTemplate_3108455ba3a138c69bd3ec2277038bc4 extends Template
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

/**
 * @deprecated It will be removed in Mautic 6.0
 */
class PointEventHelper
{
    public static function changeLists(\$event, \$factory, \$lead): bool
    {
        \$properties = \$event['properties'];

        /** @var \\Mautic\\LeadBundle\\Model\\LeadModel \$leadModel */
        \$leadModel  = \$factory->getModel('lead');
        \$addTo      = \$properties['addToLists'];
        \$removeFrom = \$properties['removeFromLists'];

        \$somethingHappened = false;

        if (!empty(\$addTo)) {
            \$leadModel->addToLists(\$lead, \$addTo);
            \$somethingHappened = true;
        }

        if (!empty(\$removeFrom)) {
            \$leadModel->removeFromLists(\$lead, \$removeFrom);
            \$somethingHappened = true;
        }

        return \$somethingHappened;
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
        return "@bundles/LeadBundle/Helper/PointEventHelper.php";
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
        return new Source("", "@bundles/LeadBundle/Helper/PointEventHelper.php", "/app/docroot/app/bundles/LeadBundle/Helper/PointEventHelper.php");
    }
}
