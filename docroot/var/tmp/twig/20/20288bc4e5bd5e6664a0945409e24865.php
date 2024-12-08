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

/* @FOSOAuthServer/layout.html.twig */
class __TwigTemplate_2bda3127e7982a61e4c566af2226c1a5 extends Template
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
            'fos_oauth_server_content' => [$this, 'block_fos_oauth_server_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
    </head>
    <body>
        <div>
            ";
        // line 8
        yield from $this->unwrap()->yieldBlock('fos_oauth_server_content', $context, $blocks);
        // line 10
        yield "        </div>
    </body>
</html>
";
        yield from [];
    }

    // line 8
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_fos_oauth_server_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 9
        yield "            ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@FOSOAuthServer/layout.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  69 => 9,  62 => 8,  54 => 10,  52 => 8,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@FOSOAuthServer/layout.html.twig", "/app/vendor/friendsofsymfony/oauth-server-bundle/Resources/views/layout.html.twig");
    }
}
