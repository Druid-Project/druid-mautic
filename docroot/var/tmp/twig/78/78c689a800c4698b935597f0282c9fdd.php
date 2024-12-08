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

/* @bundles/PageBundle/Event/UntrackableUrlsEvent.php */
class __TwigTemplate_d19a4e92104caf1446f19ad882a63230 extends Template
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

namespace Mautic\\PageBundle\\Event;

use Symfony\\Contracts\\EventDispatcher\\Event;

class UntrackableUrlsEvent extends Event
{
    /**
     * @var string[]
     */
    private array \$doNotTrack = [
        '{webview_url}',
        '{resubscribe_url}',
        '{unsubscribe_url}',
        '{dnc_url}',
        '{trackable=(.*?)}',
    ];

    /**
     * @param mixed \$content
     */
    public function __construct(
        private \$content
    ) {
    }

    /**
     * set a URL or token to not convert to trackables.
     */
    public function addNonTrackable(\$url): void
    {
        \$this->doNotTrack[] = \$url;
    }

    /**
     * Get array of non-trackables.
     *
     * @return string[]
     */
    public function getDoNotTrackList(): array
    {
        return \$this->doNotTrack;
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return \$this->content;
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
        return "@bundles/PageBundle/Event/UntrackableUrlsEvent.php";
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
        return new Source("", "@bundles/PageBundle/Event/UntrackableUrlsEvent.php", "/app/docroot/app/bundles/PageBundle/Event/UntrackableUrlsEvent.php");
    }
}
