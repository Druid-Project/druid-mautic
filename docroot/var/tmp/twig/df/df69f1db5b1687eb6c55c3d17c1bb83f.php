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

/* @bundles/LeadBundle/Model/ChannelTimelineInterface.php */
class __TwigTemplate_01153def7569ee138aaf6226ce4f1c52 extends Template
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

namespace Mautic\\LeadBundle\\Model;

/**
 * Interface ChannelTimelineInterface.
 */
interface ChannelTimelineInterface
{
    /**
     * Return the name of a template to use to customize the channel's timeline entry.
     *
     * Return an empty value to ignore
     *
     * @param string \$eventType
     * @param array  \$details
     *
     * @return mixed
     */
    public function getChannelTimelineTemplate(\$eventType, \$details);

    /**
     * Override the timeline name for this channel's timeline entry.
     *
     * Return an empty value to ignore
     *
     * @param string \$eventType
     * @param array  \$details
     *
     * @return mixed
     */
    public function getChannelTimelineLabel(\$eventType, \$details);

    /**
     * Override the icon for this channel's timeline entry.
     *
     * Return an empty value to ignore
     *
     * @param string \$eventType
     * @param array  \$details
     *
     * @return mixed
     */
    public function getChannelTimelineIcon(\$eventType, \$details);
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/LeadBundle/Model/ChannelTimelineInterface.php";
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
        return new Source("", "@bundles/LeadBundle/Model/ChannelTimelineInterface.php", "/app/docroot/app/bundles/LeadBundle/Model/ChannelTimelineInterface.php");
    }
}
