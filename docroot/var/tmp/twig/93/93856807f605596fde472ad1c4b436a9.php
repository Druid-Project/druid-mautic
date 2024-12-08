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

/* @bundles/PageBundle/Controller/AjaxController.php */
class __TwigTemplate_557c6b37f6219ceff8fcb22446fcec5b extends Template
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

namespace Mautic\\PageBundle\\Controller;

use Mautic\\CoreBundle\\Controller\\AjaxController as CommonAjaxController;
use Mautic\\CoreBundle\\Controller\\VariantAjaxControllerTrait;
use Mautic\\CoreBundle\\Helper\\InputHelper;
use Mautic\\PageBundle\\Form\\Type\\AbTestPropertiesType;
use Mautic\\PageBundle\\Model\\PageModel;
use Symfony\\Component\\Form\\FormFactoryInterface;
use Symfony\\Component\\HttpFoundation\\Request;

class AjaxController extends CommonAjaxController
{
    use VariantAjaxControllerTrait;

    /**
     * @return \\Symfony\\Component\\HttpFoundation\\JsonResponse
     */
    public function getAbTestFormAction(Request \$request, FormFactoryInterface \$formFactory)
    {
        return \$this->getAbTestForm(
            \$request,
            \$formFactory,
            'page',
            AbTestPropertiesType::class,
            'page_abtest_settings',
            'page',
            '@MauticPage/AbTest/form.html.twig',
            ['@MauticPage/AbTest/form.html.twig', 'MauticPageBundle:FormTheme\\Page']
        );
    }

    public function pageListAction(Request \$request): \\Symfony\\Component\\HttpFoundation\\JsonResponse
    {
        \$filter    = InputHelper::clean(\$request->query->get('filter'));
        \$pageModel = \$this->getModel('page.page');
        \\assert(\$pageModel instanceof PageModel);
        \$results   = \$pageModel->getLookupResults('page', \$filter);
        \$dataArray = [];

        foreach (\$results as \$r) {
            \$dataArray[] = [
                'label' => \$r['title'].\" ({\$r['id']}:{\$r['alias']})\",
                'value' => \$r['id'],
            ];
        }

        return \$this->sendJsonResponse(\$dataArray);
    }

    public function setBuilderContentAction(Request \$request): \\Symfony\\Component\\HttpFoundation\\JsonResponse
    {
        \$dataArray = ['success' => 0];
        \$entityId  = InputHelper::clean(\$request->request->get('entity'));
        \$session   = \$request->getSession();

        if (!empty(\$entityId)) {
            \$sessionVar = 'mautic.pagebuilder.'.\$entityId.'.content';

            // Check for an array of slots
            \$slots   = InputHelper::_(\$request->request->get('slots') ?? [], 'html');
            \$content = \$session->get(\$sessionVar, []);

            if (!is_array(\$content)) {
                \$content = [];
            }

            if (!empty(\$slots)) {
                // Builder was closed so save each content
                foreach (\$slots as \$slot => \$newContent) {
                    \$content[\$slot] = \$newContent;
                }

                \$session->set(\$sessionVar, \$content);
                \$dataArray['success'] = 1;
            } else {
                // Check for a single slot
                \$newContent = InputHelper::html(\$request->request->get('content'));
                \$slot       = InputHelper::clean(\$request->request->get('slot'));

                if (!empty(\$slot)) {
                    \$content[\$slot] = \$newContent;
                    \$session->set(\$sessionVar, \$content);
                    \$dataArray['success'] = 1;
                }
            }
        }

        return \$this->sendJsonResponse(\$dataArray);
    }

    /**
     * Called by parent::getBuilderTokensAction().
     *
     * @return array
     */
    protected function getBuilderTokens(\$query)
    {
        /** @var PageModel \$model */
        \$model = \$this->getModel('page');

        return \$model->getBuilderComponents(null, ['tokens'], \$query ?? '');
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
        return "@bundles/PageBundle/Controller/AjaxController.php";
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
        return new Source("", "@bundles/PageBundle/Controller/AjaxController.php", "/app/docroot/app/bundles/PageBundle/Controller/AjaxController.php");
    }
}
