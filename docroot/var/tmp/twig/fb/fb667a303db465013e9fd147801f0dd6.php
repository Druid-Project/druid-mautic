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

/* @bundles/IntegrationsBundle/Sync/Notification/Helper/CompanyHelper.php */
class __TwigTemplate_2d3c5306df339f627c5e590c51990fe4 extends Template
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

class CompanyHelper
{
    public function __construct(
        private Connection \$connection
    ) {
    }

    /**
     * @return string|bool
     */
    public function getCompanyName(int \$id)
    {
        return \$this->connection->createQueryBuilder()
            ->select('c.companyname')
            ->from(MAUTIC_TABLE_PREFIX.'companies', 'c')
            ->where('c.id = '.\$id)
            ->executeQuery()
            ->fetchOne();
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
        return "@bundles/IntegrationsBundle/Sync/Notification/Helper/CompanyHelper.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Sync/Notification/Helper/CompanyHelper.php", "/app/docroot/app/bundles/IntegrationsBundle/Sync/Notification/Helper/CompanyHelper.php");
    }
}
