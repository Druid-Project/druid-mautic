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

/* @bundles/CoreBundle/Controller/ExceptionController.php */
class __TwigTemplate_893d71ac81a06a7e9a09a01c8f3edbe6 extends Template
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

namespace Mautic\\CoreBundle\\Controller;

use Mautic\\ApiBundle\\Helper\\RequestHelper;
use Mautic\\CoreBundle\\Helper\\ThemeHelper;
use Symfony\\Component\\ErrorHandler\\Exception\\FlattenException;
use Symfony\\Component\\HttpFoundation\\JsonResponse;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\Log\\DebugLoggerInterface;

class ExceptionController extends CommonController
{
    public function showAction(Request \$request, \\Throwable \$exception, ThemeHelper \$themeHelper, DebugLoggerInterface \$logger = null)
    {
        \$exception      = FlattenException::createFromThrowable(\$exception, \$exception->getCode(), \$request->headers->all());
        \$class          = \$exception->getClass();
        \$currentContent = \$this->getAndCleanOutputBuffering(\$request->headers->get('X-Php-Ob-Level', -1));
        \$layout         = 'prod' == MAUTIC_ENV ? 'Error' : 'Exception';
        \$code           = \$exception->getStatusCode();

        // All valid status codes are within the range of 100 to 599, inclusive
        // @see https://www.rfc-editor.org/rfc/rfc9110.html#name-status-codes
        if (\$code < 100 || \$code > 599) {
            // thrown exception that didn't set a code
            \$code = 500;
        }

        // Special handling for oauth and api urls
        if (
            (str_contains(\$request->getUri(), '/oauth') && !str_contains(\$request->getUri(), 'authorize'))
            || RequestHelper::isApiRequest(\$request)
            || (!defined('MAUTIC_AJAX_VIEW') && str_contains(\$request->server->get('HTTP_ACCEPT', ''), 'application/json'))
        ) {
            \$allowRealMessage =
                'dev' === MAUTIC_ENV
                || str_contains(\$class, 'UnexpectedValueException')
                || str_contains(\$class, 'NotFoundHttpException')
                || str_contains(\$class, 'AccessDeniedHttpException');

            \$message   = \$allowRealMessage
                ? \$exception->getMessage()
                : \$this->translator->trans(
                    'mautic.core.error.generic',
                    ['%code%' => \$code]
                );
            \$dataArray = [
                'errors' => [
                    [
                        'message' => \$message,
                        'code'    => \$code,
                        'type'    => null,
                    ],
                ],
            ];

            if ('dev' == MAUTIC_ENV) {
                \$dataArray['trace'] = \$exception->getTrace();
            }

            // Normal behavior in Symfony dev mode is to send 200 with error message,
            // but this is used in prod mode for all \"/api\" requests too. (#224)
            return new JsonResponse(\$dataArray, \$code);
        }

        if (\$request->get('prod')) {
            \$layout = 'Error';
        }

        \$anonymous    = \$this->security->isAnonymous();
        \$baseTemplate = '@MauticCore/Default/slim.html.twig';
        if (\$anonymous) {
            if (\$templatePage = \$themeHelper->getTheme()->getErrorPageTemplate((string) \$code)) {
                \$baseTemplate = \$templatePage;
            }
        }

        \$template   = \"@MauticCore/{\$layout}/{\$code}.html.twig\";
        if (!\$this->get('twig')->getLoader()->exists(\$template)) {
            \$template = \"@MauticCore/{\$layout}/base.html.twig\";
        }

        \$statusText = Response::\$statusTexts[\$code] ?? '';

        \$url      = \$request->getRequestUri();
        \$urlParts = parse_url(\$url);

        return \$this->delegateView(
            [
                'viewParameters'  => [
                    'baseTemplate'   => \$baseTemplate,
                    'status_code'    => \$code,
                    'status_text'    => \$statusText,
                    'exception'      => \$exception,
                    'logger'         => \$logger,
                    'currentContent' => \$currentContent,
                    'isPublicPage'   => \$anonymous,
                ],
                'contentTemplate' => \$template,
                'passthroughVars' => [
                    'error' => [
                        'code'      => \$code,
                        'text'      => \$statusText,
                        'exception' => ('dev' == MAUTIC_ENV) ? \$exception->getMessage() : '',
                        'trace'     => ('dev' == MAUTIC_ENV) ? \$exception->getTrace() : '',
                    ],
                    'route' => \$urlParts['path'],
                ],
                'responseCode'    => \$code,
            ]
        );
    }

    /**
     * @param int \$startObLevel
     */
    protected function getAndCleanOutputBuffering(\$startObLevel): string|false
    {
        if (ob_get_level() <= \$startObLevel) {
            return '';
        }

        Response::closeOutputBuffers(\$startObLevel + 1, true);

        return ob_get_clean();
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
        return "@bundles/CoreBundle/Controller/ExceptionController.php";
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
        return new Source("", "@bundles/CoreBundle/Controller/ExceptionController.php", "/app/docroot/app/bundles/CoreBundle/Controller/ExceptionController.php");
    }
}
