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

/* @bundles/LeadBundle/Controller/LeadAccessTrait.php */
class __TwigTemplate_5103eb9dfd9717eac721e555fb7562f1 extends Template
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

namespace Mautic\\LeadBundle\\Controller;

use Mautic\\LeadBundle\\Entity\\Lead;
use Symfony\\Component\\HttpFoundation\\Response;

trait LeadAccessTrait
{
    /**
     * Determines if the user has access to the lead the note is for.
     *
     * @param bool \$isPlugin
     *
     * @return Response|Lead
     */
    protected function checkLeadAccess(\$leadId, \$action, \$isPlugin = false, \$integration = '')
    {
        if (!\$leadId instanceof Lead) {
            // make sure the user has view access to this lead
            \$leadModel = \$this->getModel('lead');
            \$lead      = \$leadModel->getEntity((int) \$leadId);
        } else {
            \$lead   = \$leadId;
            \$leadId = \$lead->getId();
        }

        if (null === \$lead || !\$lead->getId()) {
            if (method_exists(\$this, 'postActionRedirect')) {
                // set the return URL
                \$page      = \$this->getCurrentRequest()->getSession()->get(\$isPlugin ? 'mautic.'.\$integration.'.page' : 'mautic.lead.page', 1);
                \$returnUrl = \$this->generateUrl(\$isPlugin ? 'mautic_plugin_timeline_index' : 'mautic_contact_index', ['page' => \$page]);

                return \$this->postActionRedirect(
                    [
                        'returnUrl'       => \$returnUrl,
                        'viewParameters'  => ['page' => \$page],
                        'contentTemplate' => \$isPlugin ? 'Mautic\\LeadBundle\\Controller\\LeadController::pluginIndexAction' : 'Mautic\\LeadBundle\\Controller\\LeadController::indexAction',
                        'passthroughVars' => [
                            'activeLink'    => \$isPlugin ? '#mautic_plugin_timeline_index' : '#mautic_contact_index',
                            'mauticContent' => 'leadTimeline',
                        ],
                        'flashes' => [
                            [
                                'type'    => 'error',
                                'msg'     => 'mautic.lead.lead.error.notfound',
                                'msgVars' => ['%id%' => \$leadId],
                            ],
                        ],
                    ]
                );
            } else {
                return \$this->notFound('mautic.contact.error.notfound');
            }
        } elseif (!\$this->security->hasEntityAccess(
            'lead:leads:'.\$action.'own',
            'lead:leads:'.\$action.'other',
            \$lead->getPermissionUser()
        )
        ) {
            return \$this->accessDenied();
        } else {
            return \$lead;
        }
    }

    /**
     * Returns leads the user has access to.
     *
     * @return array|\\Symfony\\Component\\HttpFoundation\\RedirectResponse
     */
    protected function checkAllAccess(\$action, \$limit)
    {
        /** @var LeadModel \$model */
        \$model = \$this->getModel('lead');

        // make sure the user has view access to leads
        \$repo = \$model->getRepository();

        // order by lastactive, filter
        \$leads = \$repo->getEntities(
            [
                'filter' => [
                    'force' => [
                        [
                            'column' => 'l.date_identified',
                            'expr'   => 'isNotNull',
                        ],
                    ],
                ],
                'oderBy'         => 'r.last_active',
                'orderByDir'     => 'DESC',
                'limit'          => \$limit,
                'hydration_mode' => 'HYDRATE_ARRAY',
            ]);

        if (null === \$leads) {
            return \$this->accessDenied();
        }

        foreach (\$leads as \$lead) {
            if (!\$this->security->hasEntityAccess(
                'lead:leads:'.\$action.'own',
                'lead:leads:'.\$action.'other',
                \$lead->getOwner()
            )
            ) {
                unset(\$lead);
            }
        }

        return \$leads;
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
        return "@bundles/LeadBundle/Controller/LeadAccessTrait.php";
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
        return new Source("", "@bundles/LeadBundle/Controller/LeadAccessTrait.php", "/app/docroot/app/bundles/LeadBundle/Controller/LeadAccessTrait.php");
    }
}
