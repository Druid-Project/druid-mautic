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

/* @bundles/EmailBundle/Stat/Reference.php */
class __TwigTemplate_6a71e2de9fdb6bef94972f997a770d6b extends Template
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

namespace Mautic\\EmailBundle\\Stat;

use Mautic\\EmailBundle\\Entity\\Stat;

class Reference
{
    private ?int \$emailId;

    /**
     * @var int
     */
    private \$leadId = 0;

    private ?int \$statId;

    public function __construct(Stat \$stat)
    {
        \$this->statId  = \$stat->getId();
        \$this->emailId = \$stat->getEmail()->getId();
        if (\$lead = \$stat->getLead()) {
            \$this->leadId = \$lead->getId();
        }
    }

    /**
     * @return int
     */
    public function getEmailId()
    {
        return \$this->emailId;
    }

    /**
     * @return int
     */
    public function getLeadId()
    {
        return \$this->leadId;
    }

    /**
     * @return mixed
     */
    public function getStatId()
    {
        return \$this->statId;
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
        return "@bundles/EmailBundle/Stat/Reference.php";
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
        return new Source("", "@bundles/EmailBundle/Stat/Reference.php", "/app/docroot/app/bundles/EmailBundle/Stat/Reference.php");
    }
}
