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

/* @bundles/CoreBundle/Helper/CommandHelper.php */
class __TwigTemplate_cb840ce37222bb1ccc0ac9a2b4c81180 extends Template
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

namespace Mautic\\CoreBundle\\Helper;

use Symfony\\Bundle\\FrameworkBundle\\Console\\Application;
use Symfony\\Component\\Console\\Input\\ArrayInput;
use Symfony\\Component\\Console\\Output\\BufferedOutput;
use Symfony\\Component\\HttpKernel\\KernelInterface;

class CommandHelper
{
    public function __construct(
        private KernelInterface \$kernel
    ) {
    }

    /**
     * @param array<int|string> \$params
     */
    public function runCommand(string \$name, array \$params = []): CommandResponse
    {
        \$params      = array_merge(['command' => \$name], \$params);
        \$application = new Application(\$this->kernel);
        \$application->setAutoExit(false);

        \$input      = new ArrayInput(\$params);
        \$output     = new BufferedOutput();
        \$statusCode = \$application->run(\$input, \$output);
        \$message    = \$output->fetch();

        return new CommandResponse(\$statusCode, \$message);
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
        return "@bundles/CoreBundle/Helper/CommandHelper.php";
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
        return new Source("", "@bundles/CoreBundle/Helper/CommandHelper.php", "/app/docroot/app/bundles/CoreBundle/Helper/CommandHelper.php");
    }
}
