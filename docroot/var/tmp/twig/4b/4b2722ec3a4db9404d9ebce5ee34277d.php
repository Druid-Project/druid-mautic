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

/* @bundles/CoreBundle/EventListener/EditorFontsSubscriber.php */
class __TwigTemplate_ac8b0530132c0406807e5c951ea543a2 extends Template
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

namespace Mautic\\CoreBundle\\EventListener;

use Mautic\\CoreBundle\\CoreEvents;
use Mautic\\CoreBundle\\Event\\CustomAssetsEvent;
use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class EditorFontsSubscriber implements EventSubscriberInterface
{
    public const PARAMETER_EDITOR_FONTS = 'editor_fonts';

    public function __construct(
        private CoreParametersHelper \$coreParametersHelper
    ) {
    }

    public static function getSubscribedEvents(): array
    {
        return [
            CoreEvents::VIEW_INJECT_CUSTOM_ASSETS => ['addGlobalAssets', 0],
        ];
    }

    public function addGlobalAssets(CustomAssetsEvent \$customAssetsEvent): void
    {
        \$this->addEditorFonts(\$customAssetsEvent);
    }

    private function addEditorFonts(CustomAssetsEvent \$customAssetsEvent): void
    {
        \$fonts = (array) \$this->coreParametersHelper->get(static::PARAMETER_EDITOR_FONTS, []);
        foreach (\$fonts as \$font) {
            if (empty(\$font['url'])) {
                continue;
            }

            \$customAssetsEvent->addStylesheet(\$font['url']);
        }
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
        return "@bundles/CoreBundle/EventListener/EditorFontsSubscriber.php";
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
        return new Source("", "@bundles/CoreBundle/EventListener/EditorFontsSubscriber.php", "/app/docroot/app/bundles/CoreBundle/EventListener/EditorFontsSubscriber.php");
    }
}
