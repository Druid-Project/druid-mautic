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

/* @bundles/StageBundle/Controller/AjaxController.php */
class __TwigTemplate_089c58cfb1e6469a36cbcdfe2c14307e extends Template
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

namespace Mautic\\StageBundle\\Controller;

use Mautic\\CoreBundle\\Controller\\AjaxController as CommonAjaxController;
use Mautic\\CoreBundle\\Helper\\InputHelper;
use Mautic\\StageBundle\\Form\\Type\\StageActionType;
use Symfony\\Component\\Form\\FormFactoryInterface;
use Symfony\\Component\\HttpFoundation\\Request;

class AjaxController extends CommonAjaxController
{
    public function getActionFormAction(Request \$request, FormFactoryInterface \$formFactory): \\Symfony\\Component\\HttpFoundation\\JsonResponse
    {
        \$dataArray = [
            'success' => 0,
            'html'    => '',
        ];
        \$type = InputHelper::clean(\$request->request->get('actionType'));

        if (!empty(\$type)) {
            // get the HTML for the form
            /** @var \\Mautic\\StageBundle\\Model\\StageModel \$model */
            \$model   = \$this->getModel('stage');
            \$actions = \$model->getStageActions();

            if (isset(\$actions['actions'][\$type])) {
                \$themes = ['MauticStageBundle:FormTheme\\Action'];
                if (!empty(\$actions['actions'][\$type]['formTheme'])) {
                    \$themes[] = \$actions['actions'][\$type]['formTheme'];
                }
                \$formType        = (!empty(\$actions['actions'][\$type]['formType'])) ? \$actions['actions'][\$type]['formType'] : 'genericstage_settings';
                \$formTypeOptions = (!empty(\$actions['actions'][\$type]['formTypeOptions'])) ? \$actions['actions'][\$type]['formTypeOptions'] : [];

                \$form = \$formFactory->create(StageActionType::class, [], ['formType' => \$formType, 'formTypeOptions' => \$formTypeOptions]);
                \$html = \$this->renderView('@MauticStage/Stage/actionform.html.twig', [
                    'form' => \$this->setFormTheme(\$form, '@MauticStage/Stage/actionform.html.twig', \$themes),
                ]);

                \$html                 = str_replace('stageaction', 'stage', \$html);
                \$dataArray['html']    = \$html;
                \$dataArray['success'] = 1;
            }
        }

        return \$this->sendJsonResponse(\$dataArray);
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
        return "@bundles/StageBundle/Controller/AjaxController.php";
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
        return new Source("", "@bundles/StageBundle/Controller/AjaxController.php", "/app/docroot/app/bundles/StageBundle/Controller/AjaxController.php");
    }
}
