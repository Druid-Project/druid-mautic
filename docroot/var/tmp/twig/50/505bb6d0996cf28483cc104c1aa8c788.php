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

/* @bundles/CampaignBundle/Executioner/Result/EvaluatedContacts.php */
class __TwigTemplate_c687601a703700d57b0d31a33394f68c extends Template
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

namespace Mautic\\CampaignBundle\\Executioner\\Result;

use Doctrine\\Common\\Collections\\ArrayCollection;
use Mautic\\LeadBundle\\Entity\\Lead;

class EvaluatedContacts
{
    private ArrayCollection \$passed;

    private ArrayCollection \$failed;

    public function __construct(ArrayCollection \$passed = null, ArrayCollection \$failed = null)
    {
        \$this->passed = \$passed ?? new ArrayCollection();
        \$this->failed = \$failed ?? new ArrayCollection();
    }

    public function pass(Lead \$contact): void
    {
        \$this->passed->set(\$contact->getId(), \$contact);
    }

    public function fail(Lead \$contact): void
    {
        \$this->failed->set(\$contact->getId(), \$contact);
    }

    /**
     * @return ArrayCollection|Lead[]
     */
    public function getPassed()
    {
        return \$this->passed;
    }

    /**
     * @return ArrayCollection|Lead[]
     */
    public function getFailed()
    {
        return \$this->failed;
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
        return "@bundles/CampaignBundle/Executioner/Result/EvaluatedContacts.php";
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
        return new Source("", "@bundles/CampaignBundle/Executioner/Result/EvaluatedContacts.php", "/app/docroot/app/bundles/CampaignBundle/Executioner/Result/EvaluatedContacts.php");
    }
}
