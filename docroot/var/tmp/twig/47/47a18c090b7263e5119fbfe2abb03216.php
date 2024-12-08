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

/* @bundles/EmailBundle/Stats/StatHelperContainer.php */
class __TwigTemplate_d4d7880b02f4946a7e39641e74956ddd extends Template
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

namespace Mautic\\EmailBundle\\Stats;

use Mautic\\EmailBundle\\Stats\\Exception\\InvalidStatHelperException;
use Mautic\\EmailBundle\\Stats\\Helper\\StatHelperInterface;

class StatHelperContainer
{
    /**
     * @var array<string, StatHelperInterface>
     */
    private array \$helpers = [];

    public function addHelper(StatHelperInterface \$helper): void
    {
        \$this->helpers[\$helper->getName()] = \$helper;
    }

    /**
     * @throws InvalidStatHelperException
     */
    public function getHelper(\$name): StatHelperInterface
    {
        if (!isset(\$this->helpers[\$name])) {
            throw new InvalidStatHelperException(\$name.' has not been registered');
        }

        return \$this->helpers[\$name];
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
        return "@bundles/EmailBundle/Stats/StatHelperContainer.php";
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
        return new Source("", "@bundles/EmailBundle/Stats/StatHelperContainer.php", "/app/docroot/app/bundles/EmailBundle/Stats/StatHelperContainer.php");
    }
}
