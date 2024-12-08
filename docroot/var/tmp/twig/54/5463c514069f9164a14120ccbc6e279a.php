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

/* @bundles/IntegrationsBundle/Sync/Notification/Helper/UserHelper.php */
class __TwigTemplate_b0c1992f7e0a067822785668bfa5bde4 extends Template
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

namespace Mautic\\IntegrationsBundle\\Sync\\Notification\\Helper;

use Doctrine\\DBAL\\Connection;

class UserHelper
{
    public function __construct(
        private Connection \$connection
    ) {
    }

    public function getAdminUsers(): array
    {
        \$qb      = \$this->connection->createQueryBuilder();
        \$results = \$qb->select('u.id')
            ->from(MAUTIC_TABLE_PREFIX.'users', 'u')
            ->join('u', MAUTIC_TABLE_PREFIX.'roles', 'r', 'r.id = u.role_id')
            ->where(
                \$qb->expr()->and(
                    \$qb->expr()->eq('r.is_published', 1),
                    \$qb->expr()->eq('r.is_admin', 1),
                    \$qb->expr()->eq('u.is_published', 1)
                )
            )
            ->executeQuery()
            ->fetchAllAssociative();

        \$admins = [];
        foreach (\$results as \$result) {
            \$admins[] = (int) \$result['id'];
        }

        return \$admins;
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
        return "@bundles/IntegrationsBundle/Sync/Notification/Helper/UserHelper.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Sync/Notification/Helper/UserHelper.php", "/app/docroot/app/bundles/IntegrationsBundle/Sync/Notification/Helper/UserHelper.php");
    }
}
