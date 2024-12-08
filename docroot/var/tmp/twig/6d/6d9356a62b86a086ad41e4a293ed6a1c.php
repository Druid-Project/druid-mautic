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

/* @bundles/CoreBundle/Event/IconEvent.php */
class __TwigTemplate_3cb08df35829430570045ce2c11d440a extends Template
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

namespace Mautic\\CoreBundle\\Event;

use Mautic\\CoreBundle\\Security\\Permissions\\CorePermissions;
use Symfony\\Contracts\\EventDispatcher\\Event;

class IconEvent extends Event
{
    /**
     * @var array
     */
    protected \$icons = [];

    public function __construct(
        protected CorePermissions \$security
    ) {
    }

    /**
     * @return CorePermissions
     */
    public function getSecurity()
    {
        return \$this->security;
    }

    /**
     * @param string \$type
     * @param string \$icon
     */
    public function addIcon(\$type, \$icon): void
    {
        \$this->icons[\$type] = \$icon;
    }

    /**
     * Return the icons.
     *
     * @return array
     */
    public function getIcons()
    {
        return \$this->icons;
    }

    public function setIcons(array \$icons): void
    {
        \$this->icons = \$icons;
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
        return "@bundles/CoreBundle/Event/IconEvent.php";
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
        return new Source("", "@bundles/CoreBundle/Event/IconEvent.php", "/app/docroot/app/bundles/CoreBundle/Event/IconEvent.php");
    }
}
