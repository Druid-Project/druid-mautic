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

/* @bundles/EmailBundle/Controller/BatchEmailController.php */
class __TwigTemplate_a8f6b1ba1c56f8bd86b388ec84a2ba98 extends Template
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

namespace Mautic\\EmailBundle\\Controller;

use Mautic\\CategoryBundle\\Model\\CategoryModel;
use Mautic\\CoreBundle\\Controller\\AbstractFormController;
use Mautic\\EmailBundle\\Entity\\Email;
use Mautic\\EmailBundle\\Form\\Type\\BatchCategoryType;
use Mautic\\EmailBundle\\Model\\EmailActionModel;
use Symfony\\Component\\HttpFoundation\\JsonResponse;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;

class BatchEmailController extends AbstractFormController
{
    /**
     * Adds or removes categories to multiple emails defined by email ID.
     */
    public function execAction(Request \$request, EmailActionModel \$actionModel, CategoryModel \$categoryModel): JsonResponse
    {
        \$params = \$request->get('email_batch');
        \$ids    = empty(\$params['ids']) ? [] : json_decode(\$params['ids']);

        if (\$ids && is_array(\$ids)) {
            \$newCategoryId = \$params['newCategory'];

            \$newCategory = \$categoryModel->getEntity(\$newCategoryId);
            \$affected    = \$actionModel->setCategory(\$ids, \$newCategory);

            \$this->addFlashMessage('mautic.email.batch_emails_affected', [
                '%count%' => count(\$affected),
            ]);
        } else {
            \$this->addFlashMessage('mautic.core.error.ids.missing');
        }

        return new JsonResponse([
            'closeModal'  => true,
            'flashes'     => \$this->getFlashContent(),
            'affected'    => !empty(\$affected) ? array_map(fn (Email \$affected) => \$affected->getId(), \$affected) : [],
            'newCategory' => [
                'name'  => !empty(\$newCategory) ? \$newCategory->getTitle() : null,
                'color' => !empty(\$newCategory) ? \$newCategory->getColor() : null,
            ],
            'callback' => 'emailBatchSubmitCallback',
        ]);
    }

    /**
     * View the modal form for adding contacts into categories in batches.
     */
    public function indexAction(): Response
    {
        \$route = \$this->generateUrl('mautic_email_batch_categories_set');

        return \$this->delegateView(
            [
                'viewParameters' => [
                    'form' => \$this->createForm(
                        BatchCategoryType::class,
                        [],
                        [
                            'action' => \$route,
                            'attr'   => [
                                'data-submit-callback' => 'emailBatchSubmit',
                            ],
                        ]
                    )->createView(),
                ],
                'contentTemplate' => '@MauticEmail/Batch/form.html.twig',
                'passthroughVars' => [
                    'activeLink'    => '#mautic_email_index',
                    'mauticContent' => 'emailBatch',
                    'route'         => \$route,
                ],
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
        return "@bundles/EmailBundle/Controller/BatchEmailController.php";
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
        return new Source("", "@bundles/EmailBundle/Controller/BatchEmailController.php", "/app/docroot/app/bundles/EmailBundle/Controller/BatchEmailController.php");
    }
}
