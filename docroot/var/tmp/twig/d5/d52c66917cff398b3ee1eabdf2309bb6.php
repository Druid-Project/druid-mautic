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

/* @bundles/CoreBundle/Twig/Extension/SearchCommandListExtension.php */
class __TwigTemplate_084b07cd227e2c45f6438545497a5200 extends Template
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

declare(strict_types=1);

namespace Mautic\\CoreBundle\\Twig\\Extension;

use Mautic\\CoreBundle\\Service\\SearchCommandListInterface;
use Twig\\Extension\\AbstractExtension;
use Twig\\TwigFunction;

class SearchCommandListExtension extends AbstractExtension
{
    public function __construct(
        protected SearchCommandListInterface \$searchCommandList
    ) {
    }

    public function getFunctions()
    {
        return [
            new TwigFunction('searchCommandList', [\$this, 'getSearchCommandList'], ['is_safe' => ['all']]),
        ];
    }

    /**
     * @return mixed[]
     */
    public function getSearchCommandList(): array
    {
        return \$this->searchCommandList->getList();
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
        return "@bundles/CoreBundle/Twig/Extension/SearchCommandListExtension.php";
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
        return new Source("", "@bundles/CoreBundle/Twig/Extension/SearchCommandListExtension.php", "/app/docroot/app/bundles/CoreBundle/Twig/Extension/SearchCommandListExtension.php");
    }
}
