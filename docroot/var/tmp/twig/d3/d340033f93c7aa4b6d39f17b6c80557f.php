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

/* @bundles/LeadBundle/EventListener/StatsSubscriber.php */
class __TwigTemplate_85a804e4b3c023aa5a160bc824168d61 extends Template
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

namespace Mautic\\LeadBundle\\EventListener;

use Doctrine\\ORM\\EntityManager;
use Mautic\\CoreBundle\\EventListener\\CommonStatsSubscriber;
use Mautic\\CoreBundle\\Security\\Permissions\\CorePermissions;
use Mautic\\LeadBundle\\Entity\\CompanyChangeLog;
use Mautic\\LeadBundle\\Entity\\CompanyLead;
use Mautic\\LeadBundle\\Entity\\DoNotContact;
use Mautic\\LeadBundle\\Entity\\FrequencyRule;
use Mautic\\LeadBundle\\Entity\\LeadCategory;
use Mautic\\LeadBundle\\Entity\\LeadDevice;
use Mautic\\LeadBundle\\Entity\\LeadEventLog;
use Mautic\\LeadBundle\\Entity\\ListLead;
use Mautic\\LeadBundle\\Entity\\PointsChangeLog;
use Mautic\\LeadBundle\\Entity\\StagesChangeLog;
use Mautic\\LeadBundle\\Entity\\UtmTag;

class StatsSubscriber extends CommonStatsSubscriber
{
    public function __construct(CorePermissions \$security, EntityManager \$entityManager)
    {
        parent::__construct(\$security, \$entityManager);
        \$this->addContactRestrictedRepositories(
            [
                CompanyChangeLog::class,
                PointsChangeLog::class,
                StagesChangeLog::class,
                CompanyLead::class,
                LeadCategory::class,
                LeadDevice::class,
                LeadEventLog::class,
                ListLead::class,
                DoNotContact::class,
                FrequencyRule::class,
                UtmTag::class,
            ]
        );
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
        return "@bundles/LeadBundle/EventListener/StatsSubscriber.php";
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
        return new Source("", "@bundles/LeadBundle/EventListener/StatsSubscriber.php", "/app/docroot/app/bundles/LeadBundle/EventListener/StatsSubscriber.php");
    }
}
