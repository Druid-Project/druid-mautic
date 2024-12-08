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

/* @FOSOAuthServer/Authorize/authorize.html.twig */
class __TwigTemplate_741fa7e890491f3885e2f83df404afb3 extends Template
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

        $this->blocks = [
            'fos_oauth_server_content' => [$this, 'block_fos_oauth_server_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "@FOSOAuthServer/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@FOSOAuthServer/layout.html.twig", "@FOSOAuthServer/Authorize/authorize.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_fos_oauth_server_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 4
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@FOSOAuthServer/Authorize/authorize_content.html.twig");
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@FOSOAuthServer/Authorize/authorize.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  58 => 4,  51 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@FOSOAuthServer/Authorize/authorize.html.twig", "/app/vendor/friendsofsymfony/oauth-server-bundle/Resources/views/Authorize/authorize.html.twig");
    }
}
