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

/* @bundles/SmsBundle/Event/SmsSendEvent.php */
class __TwigTemplate_2a270ba1b4c2a2fb5e24aa7d371080db extends Template
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
use Mautic\\LeadBundle\\Entity\\Lead;

class SmsSendEvent extends CommonEvent
{
    /**
     * @var int
     */
    protected \$smsId;

    /**
     * @param string \$content
     */
    public function __construct(
        protected \$content,
        protected Lead \$lead
    ) {
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return \$this->content;
    }

    /**
     * @param string \$content
     */
    public function setContent(\$content): void
    {
        \$this->content = \$content;
    }

    /**
     * @return Lead
     */
    public function getLead()
    {
        return \$this->lead;
    }

    /**
     * @param Lead \$lead
     */
    public function setLead(\$lead): void
    {
        \$this->lead = \$lead;
    }

    /**
     * @return int
     */
    public function getSmsId()
    {
        return \$this->smsId;
    }

    /**
     * @param int \$smsId
     */
    public function setSmsId(\$smsId): void
    {
        \$this->smsId = \$smsId;
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
        return "@bundles/SmsBundle/Event/SmsSendEvent.php";
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
        return new Source("", "@bundles/SmsBundle/Event/SmsSendEvent.php", "/app/docroot/app/bundles/SmsBundle/Event/SmsSendEvent.php");
    }
}
