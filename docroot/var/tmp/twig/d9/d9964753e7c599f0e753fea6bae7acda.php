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

/* @bundles/CoreBundle/Helper/ProgressBarHelper.php */
class __TwigTemplate_dc2288247853a550168825e62b21f433 extends Template
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

namespace Mautic\\CoreBundle\\Helper;

use Symfony\\Component\\Console\\Helper\\ProgressBar;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Component\\Console\\Output\\StreamOutput;

class ProgressBarHelper
{
    /**
     * Avoid printing progress bar to stderr
     * https://github.com/symfony/symfony/issues/18744.
     *
     * @param int \$maxCount
     */
    public static function init(OutputInterface \$output, \$maxCount = 0): ProgressBar
    {
        \$output = \$output instanceof StreamOutput ? new StreamOutput(\$output->getStream()) : \$output;

        return new ProgressBar(\$output, \$maxCount);
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
        return "@bundles/CoreBundle/Helper/ProgressBarHelper.php";
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
        return new Source("", "@bundles/CoreBundle/Helper/ProgressBarHelper.php", "/app/docroot/app/bundles/CoreBundle/Helper/ProgressBarHelper.php");
    }
}
