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

/* @themes/trulypersonal/html/email.mjml.twig */
class __TwigTemplate_b8f1dd61ede26ae8b495e4471e4d1c3a extends Template
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
        yield "<mjml>
  <mj-body width=\"100%\">
\t<mj-raw>
\t  <!-- Company Header -->
\t  <mj-text>Hi {contactfield=firstname},
\t\t<br>This is the personal email template.
\t\t<br>
\t\t<br>The purpose of this template is to look as \"normal\" as possible.
\t\t<br>Many companies try to stand out with their newsletter.
\t\t<br>This template is different.
\t\t<br>
\t\t<br>As a \"personal brand\" it makes sense to look like a regular person sending regular emails.
\t\t<br>Use this template to do so!
\t\t<br>
\t\t<br>{signature}
\t\t<br>
\t\t<br>
\t\t<span style=\"color: #838383;font-size:10px;\">{unsubscribe_text}</span>
\t  </mj-text>
\t</mj-raw>
  </mj-body>
</mjml>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@themes/trulypersonal/html/email.mjml.twig";
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
        return new Source("", "@themes/trulypersonal/html/email.mjml.twig", "/app/docroot/themes/trulypersonal/html/email.mjml.twig");
    }
}
