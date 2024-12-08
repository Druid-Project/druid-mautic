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

/* @bundles/SmsBundle/Controller/AjaxController.php */
class __TwigTemplate_343d8a63dcbf1c0021f93b2dca778c80 extends Template
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

namespace Mautic\\SmsBundle\\Controller;

use Mautic\\CoreBundle\\Controller\\AjaxController as CommonAjaxController;
use Mautic\\CoreBundle\\Controller\\AjaxLookupControllerTrait;
use Mautic\\CoreBundle\\Helper\\CacheStorageHelper;
use Mautic\\EmailBundle\\Model\\EmailModel;
use Mautic\\SmsBundle\\Broadcast\\BroadcastQuery;
use Mautic\\SmsBundle\\Event\\TokensBuildEvent;
use Mautic\\SmsBundle\\Model\\SmsModel;
use Mautic\\SmsBundle\\SmsEvents;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;
use Symfony\\Component\\HttpFoundation\\JsonResponse;
use Symfony\\Component\\HttpFoundation\\Request;

class AjaxController extends CommonAjaxController
{
    use AjaxLookupControllerTrait;

    public function getSmsCountStatsAction(Request \$request, BroadcastQuery \$broadcastQuery, CacheStorageHelper \$cacheStorageHelper): JsonResponse
    {
        /** @var SmsModel \$model */
        \$model = \$this->getModel('sms');

        \$id  = \$request->get('id');
        \$ids = \$request->get('ids');

        // Support for legacy calls
        if (!\$ids && \$id) {
            \$ids = [\$id];
        }

        \$data = [];
        foreach (\$ids as \$id) {
            if (\$sms = \$model->getEntity(\$id)) {
                if ('list' !== \$sms->getSmsType()) {
                    continue;
                }

                \$pending = \$broadcastQuery->getPendingCount(\$sms);
                \$cacheStorageHelper->set(sprintf('%s|%s|%s', 'sms', \$sms->getId(), 'pending'), \$pending);
                if (!\$pending) {
                    continue;
                }
                \$data[] = [
                    'id'          => \$id,
                    'pending'     => \$this->translator->trans(
                        'mautic.sms.stat.leadcount',
                        ['%count%' => \$pending]
                    ),
                ];
            }
        }

        // Support for legacy calls
        if (\$request->get('id')) {
            \$data = \$data[0];
        } else {
            \$data = [
                'success' => 1,
                'stats'   => \$data,
            ];
        }

        return new JsonResponse(\$data);
    }

    public function getBuilderTokensAction(Request \$request, EventDispatcherInterface \$eventDispatcher = null): JsonResponse
    {
        \$query  = \$request->get('query', '');
        \$tokens = \$this->getBuilderTokens(\$query);
        \$event  = new TokensBuildEvent(\$tokens);
        \$eventDispatcher->dispatch(\$event, SmsEvents::ON_SMS_TOKENS_BUILD);

        return \$this->sendJsonResponse(['tokens'=>\$event->getTokens()]);
    }

    /**
     * Just selected get tokens from email  builder.
     *
     * @param string|null \$query
     *
     * @return array<string,array<int|string>>
     */
    protected function getBuilderTokens(\$query): array
    {
        /** @var EmailModel \$model */
        \$model        = \$this->getModel('email');
        \$components   = \$model->getBuilderComponents(null, ['tokens'], \$query);
        \$findTokens   = ['{contactfield=', '{assetlink', '{pagelink'];
        \$returnTokens = [];
        \$tokens       = \$components['tokens'];

        array_map(
            function (\$token, \$value) use (\$findTokens, &\$returnTokens): void {
                foreach (\$findTokens as \$findToken) {
                    if (str_starts_with(\$token, \$findToken)) {
                        \$returnTokens[\$token] = \$value;
                    }
                }
            }, array_keys(\$tokens), \$tokens);

        return \$returnTokens;
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
        return "@bundles/SmsBundle/Controller/AjaxController.php";
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
        return new Source("", "@bundles/SmsBundle/Controller/AjaxController.php", "/app/docroot/app/bundles/SmsBundle/Controller/AjaxController.php");
    }
}
