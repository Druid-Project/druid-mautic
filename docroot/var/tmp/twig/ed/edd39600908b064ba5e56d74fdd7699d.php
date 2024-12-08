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

/* @bundles/CampaignBundle/EventCollector/Accessor/Event/ActionAccessor.php */
class __TwigTemplate_a3bb68b409f7bed169dfdf9dead5d4fa extends Template
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

namespace Mautic\\CampaignBundle\\EventCollector\\Accessor\\Event;

class ActionAccessor extends AbstractEventAccessor
{
    public function __construct(array \$config)
    {
        \$this->systemProperties[] = 'batchEventName';

        parent::__construct(\$config);
    }

    /**
     * @return mixed
     */
    public function getBatchEventName()
    {
        return \$this->getProperty('batchEventName');
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
        return "@bundles/CampaignBundle/EventCollector/Accessor/Event/ActionAccessor.php";
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
        return new Source("", "@bundles/CampaignBundle/EventCollector/Accessor/Event/ActionAccessor.php", "/app/docroot/app/bundles/CampaignBundle/EventCollector/Accessor/Event/ActionAccessor.php");
    }
}
