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

/* @bundles/EmailBundle/MonitoredEmail/Search/Result.php */
class __TwigTemplate_df127a31c5cb626219e4cc3dfc0a6027 extends Template
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

namespace Mautic\\EmailBundle\\MonitoredEmail\\Search;

use Mautic\\EmailBundle\\Entity\\Stat;
use Mautic\\LeadBundle\\Entity\\Lead;

class Result
{
    private ?Stat \$stat = null;

    /**
     * @var Lead[]
     */
    private array \$contacts = [];

    /**
     * @var string
     */
    private \$email;

    /**
     * @return Stat
     */
    public function getStat()
    {
        return \$this->stat;
    }

    /**
     * @return Result
     */
    public function setStat(Stat \$stat)
    {
        \$this->stat = \$stat;

        if (\$contact = \$stat->getLead()) {
            \$this->contacts[] = \$contact;
        }

        return \$this;
    }

    /**
     * @return Lead[]
     */
    public function getContacts()
    {
        return \$this->contacts;
    }

    /**
     * @return Result
     */
    public function addContact(Lead \$contact)
    {
        \$this->contacts[] = \$contact;

        return \$this;
    }

    /**
     * @param Lead[] \$contacts
     */
    public function setContacts(array \$contacts): void
    {
        \$this->contacts = \$contacts;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return \$this->email;
    }

    /**
     * @param mixed \$email
     *
     * @return Result
     */
    public function setEmail(\$email)
    {
        \$this->email = \$email;

        return \$this;
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
        return "@bundles/EmailBundle/MonitoredEmail/Search/Result.php";
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
        return new Source("", "@bundles/EmailBundle/MonitoredEmail/Search/Result.php", "/app/docroot/app/bundles/EmailBundle/MonitoredEmail/Search/Result.php");
    }
}
