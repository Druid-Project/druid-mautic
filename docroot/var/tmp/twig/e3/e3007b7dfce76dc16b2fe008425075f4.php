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

/* @bundles/LeadBundle/Form/Validator/Constraints/UniqueUserAlias.php */
class __TwigTemplate_09fb07f6dba80ba99b5e962163552f12 extends Template
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

namespace Mautic\\LeadBundle\\Form\\Validator\\Constraints;

use Symfony\\Component\\Validator\\Constraint;

#[\\Attribute]
class UniqueUserAlias extends Constraint
{
    public \$message = 'This alias is already in use.';

    public \$field   = '';

    public function validatedBy()
    {
        return 'uniqueleadlist';
    }

    public function getTargets()
    {
        return self::CLASS_CONSTRAINT;
    }

    public function getRequiredOptions()
    {
        return ['field'];
    }

    public function getDefaultOption()
    {
        return 'field';
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
        return "@bundles/LeadBundle/Form/Validator/Constraints/UniqueUserAlias.php";
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
        return new Source("", "@bundles/LeadBundle/Form/Validator/Constraints/UniqueUserAlias.php", "/app/docroot/app/bundles/LeadBundle/Form/Validator/Constraints/UniqueUserAlias.php");
    }
}
