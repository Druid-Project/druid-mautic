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

/* @bundles/CoreBundle/Translation/TranslatorLoader.php */
class __TwigTemplate_c9f9ce6e16b3429f1896a71db43ce465 extends Template
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

namespace Mautic\\CoreBundle\\Translation;

class TranslatorLoader extends \\Symfony\\Bundle\\FrameworkBundle\\Translation\\Translator
{
    protected function loadCatalogue(string \$locale): void
    {
        if ('en_US' !== \$locale) {
            // Always force en_US so that it's available for fallback
            \$this->addResource('mautic', null, 'en_US', 'messages');
        }

        \$this->addResource('mautic', null, \$locale, 'messages');

        parent::loadCatalogue(\$locale);
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
        return "@bundles/CoreBundle/Translation/TranslatorLoader.php";
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
        return new Source("", "@bundles/CoreBundle/Translation/TranslatorLoader.php", "/app/docroot/app/bundles/CoreBundle/Translation/TranslatorLoader.php");
    }
}
