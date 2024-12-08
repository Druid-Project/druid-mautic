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

/* @bundles/CoreBundle/Tests/Twig/Fixtures/tests/instanceof.test */
class __TwigTemplate_1cf9e91b1d2a4328038bcd0894036b86 extends Template
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
instanceof test
--TEMPLATE--
";
        // line 4
        if ($this->env->getTest('instanceof')->getCallable()((isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 4, $this->source); })()), "DateTimeInterface")) {
            // line 5
            yield "Date is instance of DateTimeInterface
";
        }
        // line 7
        if ($this->env->getTest('instanceof')->getCallable()((isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 7, $this->source); })()), "DateTimeImmutable")) {
            // line 8
            yield "Date is instance of DateTimeImmutable
";
        }
        // line 10
        if ( !$this->env->getTest('instanceof')->getCallable()((isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 10, $this->source); })()), "DateTimeImmutable")) {
            // line 11
            yield "Date is not instance of DateTimeImmutable
";
        }
        // line 13
        yield "--DATA--
return ['date' => new \\DateTime()]
--EXPECT--
Date is instance of DateTimeInterface
Date is not instance of DateTimeImmutable
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/CoreBundle/Tests/Twig/Fixtures/tests/instanceof.test";
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
        return new Source("", "@bundles/CoreBundle/Tests/Twig/Fixtures/tests/instanceof.test", "/app/docroot/app/bundles/CoreBundle/Tests/Twig/Fixtures/tests/instanceof.test");
    }
}
