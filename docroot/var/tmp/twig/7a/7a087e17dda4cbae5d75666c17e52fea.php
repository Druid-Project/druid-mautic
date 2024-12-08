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

/* @bundles/CoreBundle/Service/SearchCommandList.php */
class __TwigTemplate_128d6fb8d12ab6b6559f462e5e40c3cd extends Template
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

namespace Mautic\\CoreBundle\\Service;

use Mautic\\CoreBundle\\CoreEvents;
use Mautic\\CoreBundle\\Event\\CommandListEvent;
use Symfony\\Contracts\\EventDispatcher\\EventDispatcherInterface;

final class SearchCommandList implements SearchCommandListInterface
{
    /**
     * @var mixed[]
     */
    private array \$searchCommands = [];

    public function __construct(
        private EventDispatcherInterface \$dispatcher
    ) {
    }

    public function getList(): array
    {
        if (!empty(\$this->searchCommands)) {
            return \$this->searchCommands;
        }

        \$event = new CommandListEvent();
        \$this->dispatcher->dispatch(\$event, CoreEvents::BUILD_COMMAND_LIST);

        return \$this->searchCommands = \$event->getCommands();
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
        return "@bundles/CoreBundle/Service/SearchCommandList.php";
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
        return new Source("", "@bundles/CoreBundle/Service/SearchCommandList.php", "/app/docroot/app/bundles/CoreBundle/Service/SearchCommandList.php");
    }
}
