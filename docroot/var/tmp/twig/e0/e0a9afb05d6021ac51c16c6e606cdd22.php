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

/* @bundles/ReportBundle/Controller/AjaxController.php */
class __TwigTemplate_69f76b3ff53a10f05459484a6829a7e7 extends Template
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

namespace Mautic\\ReportBundle\\Controller;

use Mautic\\CoreBundle\\Controller\\AjaxController as CommonAjaxController;
use Mautic\\ReportBundle\\Model\\ReportModel;
use Symfony\\Component\\HttpFoundation\\Request;

class AjaxController extends CommonAjaxController
{
    /**
     * Get updated data for context.
     */
    public function getSourceDataAction(Request \$request): \\Symfony\\Component\\HttpFoundation\\JsonResponse
    {
        \$model = \$this->getModel('report');
        \\assert(\$model instanceof ReportModel);
        \$context = \$request->get('context');

        \$graphs  = \$model->getGraphList(\$context);
        \$columns = \$model->getColumnList(\$context);
        \$filters = \$model->getFilterList(\$context);

        return \$this->sendJsonResponse(
            [
                'columns'           => \$columns->choiceHtml,
                'columnDefinitions' => \$columns->definitions,
                'filters'           => \$filters->choiceHtml,
                'filterDefinitions' => \$filters->definitions,
                'filterOperators'   => \$filters->operatorHtml,
                'graphs'            => \$graphs->choiceHtml,
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
        return "@bundles/ReportBundle/Controller/AjaxController.php";
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
        return new Source("", "@bundles/ReportBundle/Controller/AjaxController.php", "/app/docroot/app/bundles/ReportBundle/Controller/AjaxController.php");
    }
}
