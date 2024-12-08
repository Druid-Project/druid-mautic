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

/* @bundles/LeadBundle/Segment/DoNotContact/DoNotContactParts.php */
class __TwigTemplate_4b2a9be675fc6dfddb378b77f851c601 extends Template
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

namespace Mautic\\LeadBundle\\Segment\\DoNotContact;

use Mautic\\LeadBundle\\Entity\\DoNotContact;

class DoNotContactParts
{
    private string \$channel = 'email';

    private int \$type = DoNotContact::UNSUBSCRIBED;

    public function __construct(?string \$field)
    {
        if (\$field && str_contains(\$field, '_manual')) {
            \$this->type = DoNotContact::MANUAL;
        }

        if (\$field && str_contains(\$field, '_bounced')) {
            \$this->type = DoNotContact::BOUNCED;
        }

        if (\$field && str_contains(\$field, '_sms')) {
            \$this->channel = 'sms';
        }
    }

    public function getChannel(): string
    {
        return \$this->channel;
    }

    public function getParameterType(): int
    {
        return \$this->type;
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
        return "@bundles/LeadBundle/Segment/DoNotContact/DoNotContactParts.php";
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
        return new Source("", "@bundles/LeadBundle/Segment/DoNotContact/DoNotContactParts.php", "/app/docroot/app/bundles/LeadBundle/Segment/DoNotContact/DoNotContactParts.php");
    }
}
