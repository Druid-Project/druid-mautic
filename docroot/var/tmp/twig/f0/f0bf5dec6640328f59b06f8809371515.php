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

/* @bundles/FormBundle/Views/Field/companyLookup.html.php */
class __TwigTemplate_8b4d821994c14c4693ab54763f4c52fe extends Template
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

echo \$view->render(
    'MauticFormBundle:Field:text.html.php',
    [
        'field'    => \$field,
        'fields'   => \$fields ?? [],
        'inForm'   => \$inForm ?? false,
        'type'     => 'companyLookup',
        'id'       => \$id,
        'deleted'  => !empty(\$deleted),
        'formId'   => \$formId ?? 0,
        'formName' => \$formName ?? '',
    ]
);
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/FormBundle/Views/Field/companyLookup.html.php";
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
        return new Source("", "@bundles/FormBundle/Views/Field/companyLookup.html.php", "/app/docroot/app/bundles/FormBundle/Views/Field/companyLookup.html.php");
    }
}
