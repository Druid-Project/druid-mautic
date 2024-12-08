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

/* @bundles/CoreBundle/Twig/Extension/TranslatorExtension.php */
class __TwigTemplate_3614d392c87c1a8c84b25187a18abea1 extends Template
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

use Mautic\\CoreBundle\\Translation\\Translator;
use Twig\\Extension\\AbstractExtension;
use Twig\\TwigFunction;

class TranslatorExtension extends AbstractExtension
{
    public function __construct(
        private Translator \$translator
    ) {
    }

    public function getFunctions()
    {
        return [
            new TwigFunction('translatorGetJsLang', [\$this, 'getJsLang']),
            new TwigFunction('translatorHasId', [\$this, 'translatorHasId']),
            new TwigFunction('translatorConditional', [\$this, 'translatorConditional']),
            new TwigFunction('translatorGetHelper', [\$this, 'getHelper']),
        ];
    }

    public function getJsLang(): string
    {
        return \$this->translator->getJsLang();
    }

    public function translatorHasId(string \$id, ?string \$domain = null, ?string \$locale = null): bool
    {
        return \$this->translator->hasId(\$id, \$domain, \$locale);
    }

    /**
     * Checks for \$preferred string existence and returns translation if it
     * does.  Otherwise, returns translation for \$alternative.
     *
     * @param array<mixed> \$parameters
     */
    public function translatorConditional(string \$preferred, string \$alternative, array \$parameters = [], ?string \$domain = null, ?string \$locale = null): string
    {
        return \$this->translator->transConditional(\$preferred, \$alternative, \$parameters, \$domain, \$locale);
    }

    public function getHelper(): Translator
    {
        return \$this->translator;
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
        return "@bundles/CoreBundle/Twig/Extension/TranslatorExtension.php";
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
        return new Source("", "@bundles/CoreBundle/Twig/Extension/TranslatorExtension.php", "/app/docroot/app/bundles/CoreBundle/Twig/Extension/TranslatorExtension.php");
    }
}
