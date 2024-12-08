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

/* @bundles/CoreBundle/Twig/Extension/ContentExtension.php */
class __TwigTemplate_8e473559857b8c81bdbdff726804d6c2 extends Template
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

namespace Mautic\\CoreBundle\\Twig\\Extension;

use Mautic\\CoreBundle\\Twig\\Helper\\ContentHelper;
use Twig\\Extension\\AbstractExtension;
use Twig\\TwigFunction;

class ContentExtension extends AbstractExtension
{
    public function __construct(
        protected ContentHelper \$contentHelper
    ) {
    }

    public function getFunctions()
    {
        return [
            new TwigFunction('customContent', [\$this, 'getCustomContent'], ['is_safe' => ['all']]),
            new TwigFunction('showScriptTags', [\$this, 'showScriptTags'], ['is_safe' => ['all']]),
            new TwigFunction('getSortedEditorFonts', [\$this, 'sortEditorFonts']),
        ];
    }

    /**
     * Dispatch an event to collect custom content.
     *
     * @param ?mixed              \$context  Context of the content requested for the viewName
     * @param array<string,mixed> \$vars     twig vars
     * @param ?string             \$viewName The main identifier for the content requested. Will be etracted from \$vars if get_defined
     */
    public function getCustomContent(\$context = null, array \$vars = [], ?string \$viewName = null): string
    {
        return \$this->contentHelper->getCustomContent(\$context, \$vars, \$viewName);
    }

    /**
     * Replaces HTML script tags with non HTML tags so the JS inside them won't
     * execute and will be readable.
     */
    public function showScriptTags(string \$html): string
    {
        return \$this->contentHelper->showScriptTags(\$html);
    }

    /**
     * @param array<mixed> \$fonts
     *
     * @return array<mixed>
     */
    public function sortEditorFonts(array \$fonts): array
    {
        usort(\$fonts, static function (\$fontA, \$fontB): int {
            \$fontAName = \$fontA['name'] ?? '';
            \$fontBName = \$fontB['name'] ?? '';

            return strcasecmp(\$fontAName, \$fontBName);
        });

        return \$fonts;
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
        return "@bundles/CoreBundle/Twig/Extension/ContentExtension.php";
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
        return new Source("", "@bundles/CoreBundle/Twig/Extension/ContentExtension.php", "/app/docroot/app/bundles/CoreBundle/Twig/Extension/ContentExtension.php");
    }
}
