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

/* @bundles/EmailBundle/Controller/EmailGraphStatsController.php */
class __TwigTemplate_0a8aec5dde72dcc2846c0701940deda7 extends Template
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

namespace Mautic\\EmailBundle\\Controller;

use Mautic\\CoreBundle\\Form\\Type\\DateRangeType;
use Mautic\\CoreBundle\\Security\\Permissions\\CorePermissions;
use Mautic\\EmailBundle\\Model\\EmailModel;
use Symfony\\Bundle\\FrameworkBundle\\Controller\\AbstractController;
use Symfony\\Component\\Form\\FormFactoryInterface;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpKernel\\Exception\\AccessDeniedHttpException;

class EmailGraphStatsController extends AbstractController
{
    /**
     * Loads a specific form into the detailed panel.
     *
     * @param int    \$objectId
     * @param bool   \$isVariant
     * @param string \$dateFrom
     * @param string \$dateTo
     *
     * @return \\Symfony\\Component\\HttpFoundation\\JsonResponse|\\Symfony\\Component\\HttpFoundation\\Response
     *
     * @throws \\Exception
     */
    public function viewAction(
        Request \$request,
        EmailModel \$model,
        FormFactoryInterface \$formFactory,
        CorePermissions \$security,
        \$objectId,
        \$isVariant,
        \$dateFrom = null,
        \$dateTo = null
    ): \\Symfony\\Component\\HttpFoundation\\Response {
        /** @var \\Mautic\\EmailBundle\\Entity\\Email \$email */
        \$email = \$model->getEntity(\$objectId);

        // Init the date range filter form
        \$dateRangeValues = ['date_from' => \$dateFrom, 'date_to' => \$dateTo];
        \$action          = \$this->generateUrl('mautic_email_action', ['objectAction' => 'view', 'objectId' => \$objectId]);
        \$dateRangeForm   = \$formFactory->create(DateRangeType::class, \$dateRangeValues, ['action' => \$action]);

        if (null === \$email || !\$security->hasEntityAccess(
            'email:emails:viewown',
            'email:emails:viewother',
            \$email->getCreatedBy()
        )) {
            throw new AccessDeniedHttpException();
        }

        // get A/B test information
        [\$parent, \$children] = \$email->getVariants();

        // get related translations
        [\$translationParent, \$translationChildren] = \$email->getTranslations();

        // Prepare stats for bargraph
        if (\$chartStatsSource = \$request->query->get('stats', false)) {
            \$includeVariants = ('all' === \$chartStatsSource);
        } else {
            \$includeVariants = ((\$email->isVariant() && \$parent === \$email) || (\$email->isTranslation() && \$translationParent === \$email));
        }

        \$dateFromObject = new \\DateTime(\$dateFrom);
        \$dateToObject   = new \\DateTime(\$dateTo);

        if ('template' === \$email->getEmailType()) {
            \$stats = \$model->getEmailGeneralStats(
                \$email,
                \$includeVariants,
                null,
                \$dateFromObject,
                \$dateToObject
            );
        } else {
            \$stats = \$model->getEmailListStats(
                \$email,
                \$includeVariants,
                \$dateFromObject,
                \$dateToObject
            );
        }

        \$statsDevices = \$model->getEmailDeviceStats(
            \$email,
            \$includeVariants,
            \$dateFromObject,
            \$dateToObject
        );

        return \$this->render(
            '@MauticEmail/Email/graph.html.twig',
            [
                'email'         => \$email,
                'stats'         => \$stats,
                'statsDevices'  => \$statsDevices,
                'showAllStats'  => \$includeVariants,
                'dateRangeForm' => \$dateRangeForm->createView(),
                'isVariant'     => \$isVariant,
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
        return "@bundles/EmailBundle/Controller/EmailGraphStatsController.php";
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
        return new Source("", "@bundles/EmailBundle/Controller/EmailGraphStatsController.php", "/app/docroot/app/bundles/EmailBundle/Controller/EmailGraphStatsController.php");
    }
}
