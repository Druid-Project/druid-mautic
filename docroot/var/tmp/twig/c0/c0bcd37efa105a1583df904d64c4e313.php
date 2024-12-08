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

/* @bundles/CoreBundle/Service/FlashBag.php */
class __TwigTemplate_cfd92e73bab489ac158698aab0e1ab0e extends Template
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

namespace Mautic\\CoreBundle\\Service;

use Mautic\\CoreBundle\\Model\\NotificationModel;
use Symfony\\Component\\HttpFoundation\\RequestStack;
use Symfony\\Component\\HttpFoundation\\Session\\Session;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

/**
 * Provides translated flash messages.
 */
class FlashBag
{
    public const LEVEL_ERROR     = 'error';

    public const LEVEL_WARNING   = 'warning';

    public const LEVEL_NOTICE    = 'notice';

    public function __construct(
        private Session \$session,
        private TranslatorInterface \$translator,
        private RequestStack \$requestStack,
        private NotificationModel \$notificationModel
    ) {
    }

    /**
     * @param string     \$message
     * @param array|null \$messageVars
     * @param string     \$level
     * @param string     \$domain
     * @param bool       \$addNotification
     */
    public function add(\$message, \$messageVars = [], \$level = self::LEVEL_NOTICE, \$domain = 'flashes', \$addNotification = false): void
    {
        if (false === \$domain) {
            // message is already translated
            \$translatedMessage = \$message;
        } else {
            if (isset(\$messageVars['pluralCount']) && empty(\$messageVars['%count%'])) {
                \$messageVars['%count%'] = \$messageVars['pluralCount'];
            }

            \$translatedMessage = \$this->translator->trans(\$message, \$messageVars, \$domain);
        }

        \$this->session->getFlashBag()->add(\$level, \$translatedMessage);

        if (!defined('MAUTIC_INSTALLER') && \$addNotification) {
            \$iconClass = match (\$level) {
                self::LEVEL_WARNING => 'text-warning ri-alert-line',
                self::LEVEL_ERROR   => 'text-danger ri-error-warning-line-circle',
                default             => 'ri-information-2-line',
            };

            // If the user has not interacted with the browser for the last 30 seconds, consider the message unread
            \$lastActive = \$this->requestStack->getCurrentRequest()->get('mauticUserLastActive', 0);
            \$isRead     = \$lastActive > 30 ? 0 : 1;

            \$this->notificationModel->addNotification(\$message, \$level, \$isRead, null, \$iconClass);
        }
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
        return "@bundles/CoreBundle/Service/FlashBag.php";
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
        return new Source("", "@bundles/CoreBundle/Service/FlashBag.php", "/app/docroot/app/bundles/CoreBundle/Service/FlashBag.php");
    }
}
