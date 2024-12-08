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

/* @bundles/EmailBundle/Helper/PointEventHelper.php */
class __TwigTemplate_aacc03da4759504ea60c3ee8c830cd6e extends Template
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

namespace Mautic\\EmailBundle\\Helper;

use Mautic\\CoreBundle\\Factory\\MauticFactory;
use Mautic\\LeadBundle\\Entity\\Lead;

class PointEventHelper
{
    public static function validateEmail(\$eventDetails, \$action): bool
    {
        if (null === \$eventDetails) {
            return false;
        }

        \$emailId = \$eventDetails->getId();

        if (isset(\$action['properties']['emails'])) {
            \$limitToEmails = \$action['properties']['emails'];
        }

        if (!empty(\$limitToEmails) && !in_array(\$emailId, \$limitToEmails)) {
            // no points change
            return false;
        }

        return true;
    }

    public static function sendEmail(\$event, Lead \$lead, MauticFactory \$factory): bool
    {
        \$properties = \$event['properties'];
        \$emailId    = (int) \$properties['email'];

        /** @var \\Mautic\\EmailBundle\\Model\\EmailModel \$model */
        \$model = \$factory->getModel('email');
        \$email = \$model->getEntity(\$emailId);

        // make sure the email still exists and is published
        if (null != \$email && \$email->isPublished()) {
            \$leadFields = \$lead->getFields();
            if (isset(\$leadFields['core']['email']['value']) && \$leadFields['core']['email']['value']) {
                \$leadCredentials       = \$lead->getProfileFields();
                \$leadCredentials['id'] = \$lead->getId();

                \$options   = ['source' => ['trigger', \$event['id']]];
                \$emailSent = \$model->sendEmail(\$email, \$leadCredentials, \$options);

                return is_array(\$emailSent) ? false : true;
            }
        }

        return false;
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
        return "@bundles/EmailBundle/Helper/PointEventHelper.php";
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
        return new Source("", "@bundles/EmailBundle/Helper/PointEventHelper.php", "/app/docroot/app/bundles/EmailBundle/Helper/PointEventHelper.php");
    }
}
