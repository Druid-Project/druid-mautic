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

/* @bundles/CoreBundle/EventListener/StatsSubscriber.php */
class __TwigTemplate_7f557b1d6575a7781a13322f9013332c extends Template
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

namespace Mautic\\CoreBundle\\EventListener;

use Doctrine\\ORM\\EntityManager;
use Mautic\\CoreBundle\\Entity\\AuditLog;
use Mautic\\CoreBundle\\Entity\\IpAddress;
use Mautic\\CoreBundle\\Security\\Permissions\\CorePermissions;

class StatsSubscriber extends CommonStatsSubscriber
{
    public function __construct(CorePermissions \$security, EntityManager \$entityManager)
    {
        parent::__construct(\$security, \$entityManager);
        \$this->repositories['MauticCoreBundle:AuditLog'] = \$entityManager->getRepository(AuditLog::class);
        \$this->permissions['MauticCoreBundle:AuditLog']  = ['admin'];

        \$this->repositories['MauticCoreBundle:IpAddress'] = \$entityManager->getRepository(IpAddress::class);
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
        return "@bundles/CoreBundle/EventListener/StatsSubscriber.php";
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
        return new Source("", "@bundles/CoreBundle/EventListener/StatsSubscriber.php", "/app/docroot/app/bundles/CoreBundle/EventListener/StatsSubscriber.php");
    }
}
