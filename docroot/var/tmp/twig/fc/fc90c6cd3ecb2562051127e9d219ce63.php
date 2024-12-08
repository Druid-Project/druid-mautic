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

/* @bundles/DashboardBundle/Event/WidgetTypeListEvent.php */
class __TwigTemplate_f9f305829775132a65b16d5f80f1ba74 extends Template
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

namespace Mautic\\DashboardBundle\\Event;

use Mautic\\CoreBundle\\Event\\CommonEvent;
use Mautic\\CoreBundle\\Security\\Permissions\\CorePermissions;
use Mautic\\DashboardBundle\\Entity\\Widget;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

class WidgetTypeListEvent extends CommonEvent
{
    /**
     * @var array
     */
    protected \$widgetTypes = [];

    /**
     * @var TranslatorInterface
     */
    protected \$translator;

    /**
     * @var CorePermissions
     */
    protected \$security;

    /**
     * Adds a new widget type to the widget types list.
     *
     * @param string \$widgetType
     * @param string \$bundle     name (widget category)
     */
    public function addType(\$widgetType, \$bundle = 'others'): void
    {
        \$bundle         = 'mautic.'.\$bundle.'.dashboard.widgets';
        \$widgetTypeName = 'mautic.widget.'.\$widgetType;

        if (\$this->translator) {
            \$bundle         = \$this->translator->trans(\$bundle);
            \$widgetTypeName = \$this->translator->trans(\$widgetTypeName);
        }

        if (!isset(\$this->widgetTypes[\$bundle])) {
            \$this->widgetTypes[\$bundle] = [];
        }

        \$this->widgetTypes[\$bundle][\$widgetType] = \$widgetTypeName;
    }

    /**
     * Set translator if you want the strings to be translated.
     */
    public function setTranslator(TranslatorInterface \$translator): void
    {
        \$this->translator = \$translator;
    }

    /**
     * Set security object to check the perimissions.
     */
    public function setSecurity(CorePermissions \$security): void
    {
        \$this->security = \$security;
    }

    /**
     * Check if the user has permission to see the widgets.
     */
    public function hasPermissions(array \$permissions): bool
    {
        if (!\$this->security) {
            return true;
        }
        \$perm = \$this->security->isGranted(\$permissions, 'RETURN_ARRAY');

        return !in_array(false, \$perm);
    }

    /**
     * Returns the array of widget types.
     *
     * @return array \$widgetTypes
     */
    public function getTypes()
    {
        return \$this->widgetTypes;
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
        return "@bundles/DashboardBundle/Event/WidgetTypeListEvent.php";
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
        return new Source("", "@bundles/DashboardBundle/Event/WidgetTypeListEvent.php", "/app/docroot/app/bundles/DashboardBundle/Event/WidgetTypeListEvent.php");
    }
}
