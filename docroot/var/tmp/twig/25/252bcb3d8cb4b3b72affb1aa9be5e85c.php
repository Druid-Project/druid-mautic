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

/* @bundles/CampaignBundle/Entity/Result/CountResult.php */
class __TwigTemplate_5cfd9f01317029de570eb55b7494145c extends Template
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

namespace Mautic\\CampaignBundle\\Entity\\Result;

class CountResult
{
    private int \$count;

    private int \$minId;

    private int \$maxId;

    public function __construct(\$count, \$minId, \$maxId)
    {
        \$this->count = (int) \$count;
        \$this->minId = (int) \$minId;
        \$this->maxId = (int) \$maxId;
    }

    public function getCount(): int
    {
        return \$this->count;
    }

    public function getMinId(): int
    {
        return \$this->minId;
    }

    public function getMaxId(): int
    {
        return \$this->maxId;
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
        return "@bundles/CampaignBundle/Entity/Result/CountResult.php";
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
        return new Source("", "@bundles/CampaignBundle/Entity/Result/CountResult.php", "/app/docroot/app/bundles/CampaignBundle/Entity/Result/CountResult.php");
    }
}
