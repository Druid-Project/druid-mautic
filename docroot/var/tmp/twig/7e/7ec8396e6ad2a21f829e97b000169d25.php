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

/* @bundles/CoreBundle/Twig/Extension/DateTimeExtension.php */
class __TwigTemplate_6f0e504abc8ff7fdf9ae21877fcc4139 extends Template
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

namespace Mautic\\CoreBundle\\Twig\\Extension;

use Mautic\\CoreBundle\\Helper\\DateTimeHelper;
use Twig\\Extension\\AbstractExtension;
use Twig\\TwigFunction;

class DateTimeExtension extends AbstractExtension
{
    public function __construct(
        private DateTimeHelper \$helper
    ) {
    }

    public function getFunctions()
    {
        return [
            new TwigFunction('dateTimeGetUtcDateTime', [\$this, 'getUtcDateTime'], ['is_safe' => ['all']]),
        ];
    }

    /**
     * @see DateTimeHelper::getUtcDateTime
     */
    public function getUtcDateTime(): \\DateTimeInterface
    {
        return \$this->helper->getUtcDateTime();
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
        return "@bundles/CoreBundle/Twig/Extension/DateTimeExtension.php";
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
        return new Source("", "@bundles/CoreBundle/Twig/Extension/DateTimeExtension.php", "/app/docroot/app/bundles/CoreBundle/Twig/Extension/DateTimeExtension.php");
    }
}
