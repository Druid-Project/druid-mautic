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

/* @bundles/CoreBundle/Service/BulkNotification.php */
class __TwigTemplate_bbbd0467da386192f38a4d0204ee4ebb extends Template
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

namespace Mautic\\CoreBundle\\Service;

use Mautic\\CoreBundle\\Model\\NotificationModel;
use Mautic\\UserBundle\\Entity\\User;

final class BulkNotification implements BulkNotificationInterface
{
    /**
     * @var mixed[]
     */
    private array \$notifications = [];

    public function __construct(
        private NotificationModel \$notificationModel
    ) {
    }

    public function addNotification(
        string \$deduplicateValue,
        string \$message,
        string \$type = null,
        string \$header = null,
        string \$iconClass = null,
        \\DateTime \$datetime = null,
        User \$user = null
    ): void {
        if (isset(\$this->notifications[\$deduplicateValue])) {
            return;
        }

        \$this->notifications[\$deduplicateValue] = [
            'message'   => \$message,
            'type'      => \$type,
            'header'    => \$header,
            'iconClass' => \$iconClass,
            'datetime'  => \$datetime,
            'user'      => \$user,
        ];
    }

    /**
     * @param \\DateTime|null \$deduplicateDateTimeFrom If last 24 hours for deduplication does not fit, change it here
     */
    public function flush(\\DateTime \$deduplicateDateTimeFrom = null): void
    {
        foreach (\$this->notifications as \$deduplicateValue => \$data) {
            \$this->notificationModel->addNotification(
                \$data['message'],
                \$data['type'],
                false,
                \$data['header'],
                \$data['iconClass'],
                \$data['datetime'],
                \$data['user'],
                \$deduplicateValue,
                \$deduplicateDateTimeFrom
            );
            unset(\$this->notifications[\$deduplicateValue]);
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
        return "@bundles/CoreBundle/Service/BulkNotification.php";
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
        return new Source("", "@bundles/CoreBundle/Service/BulkNotification.php", "/app/docroot/app/bundles/CoreBundle/Service/BulkNotification.php");
    }
}
