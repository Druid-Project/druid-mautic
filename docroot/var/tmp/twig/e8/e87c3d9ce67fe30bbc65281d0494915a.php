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

/* @bundles/LeadBundle/Deduplicate/Exception/ValueNotMergeableException.php */
class __TwigTemplate_1a71f41b22116510d3cc903378c1980b extends Template
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

namespace Mautic\\LeadBundle\\Deduplicate\\Exception;

class ValueNotMergeableException extends \\Exception
{
    /**
     * @param mixed \$newerValue
     * @param mixed \$olderValue
     */
    public function __construct(
        private \$newerValue,
        private \$olderValue
    ) {
        parent::__construct();
    }

    /**
     * @return mixed
     */
    public function getNewerValue()
    {
        return \$this->newerValue;
    }

    /**
     * @return mixed
     */
    public function getOlderValue()
    {
        return \$this->olderValue;
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
        return "@bundles/LeadBundle/Deduplicate/Exception/ValueNotMergeableException.php";
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
        return new Source("", "@bundles/LeadBundle/Deduplicate/Exception/ValueNotMergeableException.php", "/app/docroot/app/bundles/LeadBundle/Deduplicate/Exception/ValueNotMergeableException.php");
    }
}
