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

/* @bundles/SmsBundle/Event/SmsEvent.php */
class __TwigTemplate_d7d6b53f6c5304034d0545b469fb3762 extends Template
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

namespace Mautic\\SmsBundle\\Event;

use Mautic\\CoreBundle\\Event\\CommonEvent;
use Mautic\\SmsBundle\\Entity\\Sms;

class SmsEvent extends CommonEvent
{
    /**
     * @param bool \$isNew
     */
    public function __construct(Sms \$sms, \$isNew = false)
    {
        \$this->entity = \$sms;
        \$this->isNew  = \$isNew;
    }

    /**
     * Returns the Sms entity.
     *
     * @return Sms
     */
    public function getSms()
    {
        return \$this->entity;
    }

    /**
     * Sets the Sms entity.
     */
    public function setSms(Sms \$sms): void
    {
        \$this->entity = \$sms;
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
        return "@bundles/SmsBundle/Event/SmsEvent.php";
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
        return new Source("", "@bundles/SmsBundle/Event/SmsEvent.php", "/app/docroot/app/bundles/SmsBundle/Event/SmsEvent.php");
    }
}
