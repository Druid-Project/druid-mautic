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

/* @bundles/CoreBundle/Controller/Api/StatsApiController.php */
class __TwigTemplate_f959cd1d5c31733716fdbeb50850e1bb extends Template
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

namespace Mautic\\CoreBundle\\Controller\\Api;

use Mautic\\ApiBundle\\Controller\\CommonApiController;
use Mautic\\CoreBundle\\CoreEvents;
use Mautic\\CoreBundle\\Event\\StatsEvent;
use Mautic\\CoreBundle\\Helper\\InputHelper;
use Mautic\\CoreBundle\\Helper\\UserHelper;
use Symfony\\Component\\HttpFoundation\\Request;

/**
 * @extends CommonApiController<object>
 */
class StatsApiController extends CommonApiController
{
    /**
     * Lists stats for a database table.
     *
     * @param string \$table
     * @param string \$itemsName
     * @param array  \$order
     * @param array  \$where
     *
     * @return \\Symfony\\Component\\HttpFoundation\\Response
     */
    public function listAction(Request \$request, UserHelper \$userHelper, \$table = null, \$itemsName = 'stats', \$order = [], \$where = [], \$start = 0, \$limit = 100)
    {
        \$response = [];
        \$where    = InputHelper::cleanArray(empty(\$where) ? \$request->query->get('where') ?? [] : \$where);
        \$order    = InputHelper::cleanArray(empty(\$order) ? \$request->query->get('order') ?? [] : \$order);
        \$start    = (int) \$request->query->get('start', \$start);
        \$limit    = (int) \$request->query->get('limit', \$limit);

        // Ensure internal flag is not spoofed
        \$this->sanitizeWhereClauseArrayFromRequest(\$where);

        try {
            \$event = new StatsEvent(\$table, \$start, \$limit, \$order, \$where, \$userHelper->getUser());
            \$this->dispatcher->dispatch(\$event, CoreEvents::LIST_STATS);

            // Return available tables if no result was set
            if (!\$event->hasResults()) {
                \$response['availableTables'] = \$event->getTables();
                \$response['tableColumns']    = \$event->getTableColumns();
            } else {
                \$results              = \$event->getResults();
                \$response['total']    = \$results['total'];
                \$response[\$itemsName] = \$results['results'];
            }
        } catch (\\Exception \$e) {
            \$response['errors'] = [
                [
                    'message' => \$e->getMessage(),
                    'code'    => \$e->getCode(),
                ],
            ];
        }

        \$view = \$this->view(\$response);

        return \$this->handleView(\$view);
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
        return "@bundles/CoreBundle/Controller/Api/StatsApiController.php";
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
        return new Source("", "@bundles/CoreBundle/Controller/Api/StatsApiController.php", "/app/docroot/app/bundles/CoreBundle/Controller/Api/StatsApiController.php");
    }
}
