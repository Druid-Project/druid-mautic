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

/* @bundles/CoreBundle/Tests/Twig/Fixtures/tests/string.test */
class __TwigTemplate_31a755ff97ead3b819fe5cf4e5f9e00a extends Template
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
        yield "--TEST--
is string test
--TEMPLATE--
";
        // line 4
        if ($this->env->getTest('string')->getCallable()((isset($context["some_string"]) || array_key_exists("some_string", $context) ? $context["some_string"] : (function () { throw new RuntimeError('Variable "some_string" does not exist.', 4, $this->source); })()))) {
            // line 5
            yield "some_string is string
";
        }
        // line 7
        if ($this->env->getTest('string')->getCallable()((isset($context["some_int"]) || array_key_exists("some_int", $context) ? $context["some_int"] : (function () { throw new RuntimeError('Variable "some_int" does not exist.', 7, $this->source); })()))) {
            // line 8
            yield "some_int is string
";
        }
        // line 10
        if ( !$this->env->getTest('string')->getCallable()((isset($context["some_int"]) || array_key_exists("some_int", $context) ? $context["some_int"] : (function () { throw new RuntimeError('Variable "some_int" does not exist.', 10, $this->source); })()))) {
            // line 11
            yield "some_int is not string
";
        }
        // line 13
        yield "--DATA--
return ['some_string' => 'abc', 'some_int' => 123]
--EXPECT--
some_string is string
some_int is not string
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/CoreBundle/Tests/Twig/Fixtures/tests/string.test";
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
        return array (  65 => 13,  61 => 11,  59 => 10,  55 => 8,  53 => 7,  49 => 5,  47 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@bundles/CoreBundle/Tests/Twig/Fixtures/tests/string.test", "/app/docroot/app/bundles/CoreBundle/Tests/Twig/Fixtures/tests/string.test");
    }
}
