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

/* @bundles/CampaignBundle/Executioner/ExecutionerInterface.php */
class __TwigTemplate_5a833b8d740a5edd2daaf083c3634f56 extends Template
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

namespace Mautic\\CampaignBundle\\Executioner;

use Mautic\\CampaignBundle\\Entity\\Campaign;
use Mautic\\CampaignBundle\\Executioner\\ContactFinder\\Limiter\\ContactLimiter;
use Symfony\\Component\\Console\\Output\\OutputInterface;

interface ExecutionerInterface
{
    /**
     * @return mixed
     */
    public function execute(Campaign \$campaign, ContactLimiter \$limiter, OutputInterface \$output = null);
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/CampaignBundle/Executioner/ExecutionerInterface.php";
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
        return new Source("", "@bundles/CampaignBundle/Executioner/ExecutionerInterface.php", "/app/docroot/app/bundles/CampaignBundle/Executioner/ExecutionerInterface.php");
    }
}
